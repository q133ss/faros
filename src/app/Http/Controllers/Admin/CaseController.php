<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CaseController\StoreRequest;
use App\Models\Author;
use App\Models\CaseTag;
use App\Models\ClientCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = ClientCase::orderBy('created_at', 'desc')->get();
        return view('admin.case.index', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::get();
        $tags = CaseTag::get();
        return view('admin.case.create', compact('authors', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $caseData = [
            'list_name' => $data['list_name'],
            'post_name' => $data['post_name'],
            'type' => $data['type'],
            'author_id' => $data['author_id'],
            'bg_color' => $data['bg_color'],
            'text_color' => $data['text_color'],
            'text' => $data['text']
        ];

        if($request->slug != null){
            $caseData['slug'] = $request->slug;
        }else{
            $caseData['slug'] = Str::slug($request->post_name, '-');
        }

        if($request->file('logo') != null){
            $caseData['logo'] = '/storage/'.$request->file('logo')->store('img', 'public');
        }

        if($request->file('list_img') != null){
            $caseData['list_img'] = '/storage/'.$request->file('list_img')->store('img', 'public');
        }

        if($request->file('img') != null){
            $caseData['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $case = ClientCase::create($caseData);

        if($request->tags != null){
            foreach ($request->tags as $tag){
                DB::table('case_tag')->insert([
                    'case_id' => $case->id,
                    'tag_id' => $tag
                ]);
            }
        }

        $seoData = [
            'meta_title' => $data['meta_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords' => $data['meta_keywords'],
            'canonical' => $request->canonical ?? 'https://faros.media',
            'og_title' => $data['og_title'],
            'og_description' => $data['og_description'],
            'og_url' => $data['og_url'],
            'og_type' => $data['og_type'] ?? 'website',
            'og_site_name' => $data['og_site_name'] ?? 'FAROS',
            'og_image' => $data['og_image'],
            'og_image_type' => $data['og_image_type'],
            'og_image_width' => $data['og_image_width'],
            'og_image_height' => $data['og_image_height'],
            'vk_image' => $data['vk_image']
        ];
        $case->seo()?->updateOrCreate($seoData);
        return to_route('admin.case.index')->withSuccess('Кейс успешно обновлен!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = ClientCase::findOrFail($id);
        $authors = Author::get();
        $tags = CaseTag::get();
        $caseTags = $post->tags->pluck('id')->toArray();
        return view('admin.case.edit', compact('post', 'authors', 'tags', 'caseTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $data = $request->validated();

        $caseData = [
            'slug' => $data['slug'],
            'list_name' => $data['list_name'],
            'post_name' => $data['post_name'],
            'type' => $data['type'],
            'author_id' => $data['author_id'],
            'bg_color' => $data['bg_color'],
            'text_color' => $data['text_color']
        ];

        if($request->file('logo') != null){
            $caseData['logo'] = '/storage/'.$request->file('logo')->store('img', 'public');
        }

        if($request->file('list_img') != null){
            $caseData['list_img'] = '/storage/'.$request->file('list_img')->store('img', 'public');
        }

        if($request->file('img') != null){
            $caseData['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $case = ClientCase::findOrFail($id);
        $updated = $case->update($caseData);

        if($request->tags != null){
            DB::table('case_tag')->where('case_id', $id)->delete();
            foreach ($request->tags as $tag){
                DB::table('case_tag')->insert([
                    'case_id' => $id,
                    'tag_id' => $tag
                ]);
            }
        }

        $seoData = [
            'meta_title' => $data['meta_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords' => $data['meta_keywords'],
            'canonical' => $request->canonical ?? 'https://faros.media',
            'og_title' => $data['og_title'],
            'og_description' => $data['og_description'],
            'og_url' => $data['og_url'],
            'og_type' => $data['og_type'] ?? 'website',
            'og_site_name' => $data['og_site_name'] ?? 'FAROS',
            'og_image' => $data['og_image'],
            'og_image_type' => $data['og_image_type'],
            'og_image_width' => $data['og_image_width'],
            'og_image_height' => $data['og_image_height'],
            'vk_image' => $data['vk_image']
        ];

        if($case->seo == null){
            $case->seo()?->create($seoData);
        }else{
            $case->seo()?->update($seoData);
        }

        return to_route('admin.case.index')->withSuccess('Кейс успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ClientCase::findOrFail($id)->delete();
        return back()->withSuccess('Кейс успешно удален!');
    }
}
