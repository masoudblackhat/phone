<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Models\Phone;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(): Factory|View|Application
    {
        $phones = Phone::all();
        $phoneEmpty = 0;
        if (count($phones) < 0){
            $phoneEmpty = -1;
        }

        return view('phone.index', compact(['phones','phoneEmpty']));
    }

    public function create(): Factory|View|Application
    {
        return \view('phone.create');
    }

    public function store(PhoneRequest $request): JsonResponse
    {
        $phone = Phone::query()->create($request->validated());
        return response()->json(['success'=>"ok"]);
    }

}
