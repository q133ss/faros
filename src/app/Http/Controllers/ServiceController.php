<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceController\ServiceFormRequest;
use App\Models\CallRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('service.show', compact('service'));
    }

    public function form(ServiceFormRequest $request)
    {
        CallRequest::create($request->validated());
        return response()->json([
            'message' => 'Заявка отправлена!'
        ], 201);
    }
}
