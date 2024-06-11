<?php

namespace App\Http\Controllers;

use App\Events\NewUserCreated;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function save()
    {
        User::create([
            'name' => request('name'),
            'mobile' => request('mobile'),
            'email' => request('email'),

        ]);

        // NewUserCreated::dispatch($user);

        return "Observer fired...!";
    }

    public function admin()
    {
        // $today = today();
        // return $today;
        return view('admin');
    }
}
