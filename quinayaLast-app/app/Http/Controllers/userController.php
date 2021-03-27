<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class userController extends Controller
{
    static function getUser($id) {
        $name = User::where('name', $id)->get();
        return json_decode($name);
    }
}
