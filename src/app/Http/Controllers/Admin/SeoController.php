<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SeoController\UpdateRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $pages = Seo::where('seable_type', 'App\Models\Page')->get();
        return view('admin.seo.index', compact('pages'));
    }

    public function edit($id)
    {
        $post = Seo::findOrFail($id);
        return view('admin.seo.edit', compact('post'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $seo = Seo::findOrFail($id)->update($request->validated());
        return to_route('admin.seo.index')->with('success', 'Данные обновлены');
    }
}
