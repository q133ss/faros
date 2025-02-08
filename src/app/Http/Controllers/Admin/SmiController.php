<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SmiController\StoreRequest;
use App\Models\Smi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SmiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Smi::all();
        return view('admin.smi.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.smi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'list_title' => $request->list_title,
            'post_title' => $request->post_title,
            'text' => $request->text,
            'source' => $request->source,
            'type' => $request->type,
            'slug' => $request->slug
        ];

        if($request->file('logo') != null){
            $data['logo'] = '/storage/'.$request->file('logo')->store('img', 'public');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        $smi = Smi::create($data);

        $seoData = [
            'meta_title' => $request->meta_title ?? $smi->post_title,
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

        if($smi->seo == null){
            $smi->seo()?->create($seoData);
        }else{
            $smi->seo()?->update($seoData);
        }

        return to_route('admin.smi.index')->with('success', 'СМИ успешно добавлено');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Smi::findOrFail($id);
        return view('admin.smi.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $smi = Smi::findOrFail($id);
        $data = [
            'list_title' => $request->list_title,
            'post_title' => $request->post_title,
            'text' => $request->text,
            'source' => $request->source,
            'type' => $request->type
        ];

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        if($request->file('logo') != null){
            $data['logo'] = '/storage/'.$request->file('logo')->store('img', 'public');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $update = $smi->update($data);

        $seoData = [
            'meta_title' => $request->meta_title ?? $smi->post_title,
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
        $smi->seo()?->updateOrCreate($seoData);

        if($smi->seo == null){
            $smi->seo()?->create($seoData);
        }else{
            $smi->seo()?->update($seoData);
        }

        return to_route('admin.smi.index')->with('success', 'СМИ успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Smi::destroy($id);
        return redirect()->route('admin.smi.index')->with('success', 'Запись успешно удалена');
    }
}
