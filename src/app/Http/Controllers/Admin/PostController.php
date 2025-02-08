<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostController\StoreRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Article::get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::get();
        $categories = ArticleCategory::get();
        $tags = ArticleTag::get();
        return view('admin.post.create', compact('authors', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'list_name' => $request->list_name,
            'author_id' => $request->author_id,
            'post_name' => $request->post_name,
            'pre_title' => $request->pre_title,
            'content' => $request->get('content'),
            'category_id' => $request->category_id
        ];

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        if($request->file('list_img') != null){
            $data['list_img'] = '/storage/'.$request->file('list_img')->store('img', 'public');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $post = Article::create($data);

        if($request->tags != null){
            foreach ($request->tags as $tag){
                DB::table('articles_tag')->insert([
                    'article_id' => $post->id,
                    'tag_id' => $tag
                ]);
            }
        }

        $seoData = [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical' => $request->canonical ?? 'https://faros.media',
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_url' => $request->og_url,
            'og_type' => $request->og_type,
            'og_site_name' => $request->og_site_name,
            'og_image' => $request->og_image,
            'og_image_type' => $request->og_image_type,
            'og_image_width' => $request->og_image_width,
            'og_image_height' => $request->og_image_height,
            'vk_image' => $request->vk_image
        ];

        $post->seo()?->updateOrCreate($seoData);

        return to_route('admin.post.index')->withSuccess('Запись успешно добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Article::findOrFail($id);
        $authors = Author::get();
        $categories = ArticleCategory::get();
        $tags = ArticleTag::get();

        return view('admin.post.edit', compact('post', 'authors', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $post = Article::findOrFail($id);
        $data = [
            'list_name' => $request->list_name,
            'author_id' => $request->author_id,
            'post_name' => $request->post_name,
            'pre_title' => $request->pre_title,
            'content' => $request->get('content'),
            'category_id' => $request->category_id
        ];

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        if($request->file('list_img') != null){
            $data['list_img'] = '/storage/'.$request->file('list_img')->store('img', 'public');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $updated = $post->update($data);

        if($request->tags != null){
            DB::table('articles_tag')->where('article_id', $post->id)->delete();
            foreach ($request->tags as $tag){
                DB::table('articles_tag')->insert([
                    'article_id' => $post->id,
                    'tag_id' => $tag
                ]);
            }
        }

        $seoData = [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical' => $request->canonical ?? 'https://faros.media',
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_url' => $request->og_url,
            'og_type' => $request->og_type ?? 'website',
            'og_site_name' => $request->og_site_name ?? 'FAROS',
            'og_image' => $request->og_image,
            'og_image_type' => $request->og_image_type,
            'og_image_width' => $request->og_image_width,
            'og_image_height' => $request->og_image_height,
            'vk_image' => $request->vk_image
        ];
        $post->seo()?->updateOrCreate($seoData);

        return to_route('admin.post.index')->withSuccess('Запись успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        return to_route('admin.post.index')->withSuccess('Запись успешно удалена');
    }
}
