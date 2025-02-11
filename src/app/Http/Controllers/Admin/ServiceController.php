<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceController\StoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'short_description' => $request->short_description,
            'bg_color' => $request->bg_color,
            'section_one_percent' => $request->section_one_percent,
            'section_one_percent_description' => $request->section_one_percent_description,
            'section_one_title' => $request->section_one_title,
            'section_one_text' => $request->section_one_text,
            'advantages' => $request->advantages,
            'section_two_percent' => $request->section_two_percent,
            'section_two_percent_description' => $request->section_two_percent_description,
            'section_two_title' => $request->section_two_title,
            'section_two_text' => $request->section_two_text,
            'how_it_works' => $request->how_it_works,
            'why_choose_us' => $request->why_choose_us,
        ];

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->name, '-');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $service = Service::create($data);

        $seoData = [
            'meta_title' => $request->meta_title ?? $service->name,
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

        if($service->seo == null){
            $service->seo()?->create($seoData);
        }else{
            $service->seo()?->update($seoData);
        }

        return to_route('admin.service.index')->withSuccess('Услуга успешно создана!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $service = Service::findOrFail($id);

        $data = [
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'short_description' => $request->short_description,
            'bg_color' => $request->bg_color,
            'section_one_percent' => $request->section_one_percent,
            'section_one_percent_description' => $request->section_one_percent_description,
            'section_one_title' => $request->section_one_title,
            'section_one_text' => $request->section_one_text,
            'advantages' => $request->advantages,
            'section_two_percent' => $request->section_two_percent,
            'section_two_percent_description' => $request->section_two_percent_description,
            'section_two_title' => $request->section_two_title,
            'section_two_text' => $request->section_two_text,
            'how_it_works' => $request->how_it_works,
            'why_choose_us' => $request->why_choose_us,
        ];

        if($request->slug != null){
            $data['slug'] = $request->slug;
        }else{
            $data['slug'] = Str::slug($request->name, '-');
        }

        if($request->file('img') != null){
            $data['img'] = '/storage/'.$request->file('img')->store('img', 'public');
        }

        $updated = $service->update($data);


        $seoData = [
            'meta_title' => $request->meta_title ?? $service->name,
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

        if($service->seo == null){
            $service->seo()?->create($seoData);
        }else{
            $service->seo()?->update($seoData);
        }

        return to_route('admin.service.index')->withSuccess('Услуга успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::destroy($id);
        return to_route('admin.service.index')->withSuccess('Услуга успешно удалена!');
    }
}
