<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JsonController extends Controller
{
    public function index() {
        $data = json_decode(file_get_contents(Storage::path("generated.json")), true);
        return view('json.index', ['data' => $data]);
    }

    public function create() {
        return view("json.create");
    }

    public function saveJson(Request $request) {
        $data = json_decode(file_get_contents(Storage::path("generated.json")), true);

        $data[] = ["uuid"=> Str::uuid(), "name"=>$request->name, "age"=>$request->age,"gender"=>$request->gender, "email"=>$request->email];

        file_put_contents(Storage::path('generated.json'), json_encode($data));

        return redirect(route('json'));
    }
}
