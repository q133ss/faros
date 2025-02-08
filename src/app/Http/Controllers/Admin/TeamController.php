<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamController\StoreRequest;
use App\Models\Author;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Author::get();
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        unset($data['meta_title']);
        unset($data['meta_description']);
        unset($data['meta_keywords']);
        unset($data['canonical']);
        unset($data['og_title']);
        unset($data['og_description']);
        unset($data['og_url']);
        unset($data['og_type']);
        unset($data['og_site_name']);
        unset($data['og_image']);
        unset($data['og_image_type']);
        unset($data['og_image_width']);
        unset($data['og_image_height']);
        unset($data['vk_image']);

        unset($data['slug']);
        unset($data['has_detail']);
        unset($data['list_show']);
        unset($data['img']);

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        if(isset($request->has_detail)){
            $data['has_detail'] = true;
        }else{
            $data['has_detail'] = false;
        }

        if(isset($request->list_show)){
            $data['list_show'] = true;
        }else{
            $data['list_show'] = false;
        }

        $post = Author::create($data);

        $seoData = [
            'meta_title' => $request->meta_title ?? $post->name,
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

        return to_route('admin.team.index')->withSuccess('Автор успешно добавлен');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('admin.team.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $data = $request->validated();

        unset($data['meta_title']);
        unset($data['meta_description']);
        unset($data['meta_keywords']);
        unset($data['canonical']);
        unset($data['og_title']);
        unset($data['og_description']);
        unset($data['og_url']);
        unset($data['og_type']);
        unset($data['og_site_name']);
        unset($data['og_image']);
        unset($data['og_image_type']);
        unset($data['og_image_width']);
        unset($data['og_image_height']);
        unset($data['vk_image']);

        unset($data['slug']);
        unset($data['has_detail']);
        unset($data['list_show']);
        unset($data['img']);

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        if(isset($request->has_detail)){
            $data['has_detail'] = true;
        }else{
            $data['has_detail'] = false;
        }

        if(isset($request->list_show)){
            $data['list_show'] = true;
        }else{
            $data['list_show'] = false;
        }

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        $post = Author::findOrFail($id);

        $seoData = [
            'meta_title' => $request->meta_title ?? $post->name,
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
        if($post->seo == null){
            $post->seo()?->create($seoData);
        }else{
            $post->seo()?->update($seoData);
        }


        $update = $post->update($data);

        return to_route('admin.team.index')->withSuccess('Автор успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Author::findOrFail($id)->delete();
        return to_route('admin.team.index')->withSuccess('Автор успешно удален');
    }
}
