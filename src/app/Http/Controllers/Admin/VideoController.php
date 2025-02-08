<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoController\StoreRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video.create');
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

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        $video = Video::create($data);
        $seoData = [
            'meta_title' => $request->meta_title ?? $video->title,
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

        $video->seo()?->updateOrCreate($seoData);
        return to_route('admin.video.index')->with('success', 'Видео успешно добавлено');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = Video::findOrFail($id);
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $video = Video::findOrFail($id);

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

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->post_name, '-');
        }

        $update = $video->update($data);

        $seoData = [
            'meta_title' => $request->meta_title ?? $video->title,
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

        $video->seo()?->updateOrCreate($seoData);

        return to_route('admin.video.index')->with('success', 'Видео успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Video::findOrFail($id)->delete();
        return to_route('admin.video.index')->with('success', 'Видео успешно удаленно');
    }
}
