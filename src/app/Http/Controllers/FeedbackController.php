<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackController\StoreRequest;
use App\Models\CallRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['service_type'] = $data['services'];
        $data['problem'] = $data['problems'];
        unset($data['services']);
        unset($data['problems']);
        return CallRequest::create($data);
    }
}
