<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamController\StoreRequest;
use App\Models\Author;
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

        unset($data['slug']);
        unset($data['has_detail']);
        unset($data['list_show']);

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

        Author::create($data);
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

        unset($data['slug']);
        unset($data['has_detail']);
        unset($data['list_show']);

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

        Author::findOrFail($id)->update($data);
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
