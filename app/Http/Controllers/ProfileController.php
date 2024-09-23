<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $name = "Donald Trump";
        $age = "75";

        $data = array(
            'id' => $id, 'name' => $name, 'age' => $age
        );

        $cookie_name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json($data, 200)->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }

}
