<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(AdminRequest $request, Admin $admin)
    {
        $validated = $request->validated();
        if (Auth::guard('admin')->attempt($validated)) {
            Admin::updateOrCreate(
                [
                    'email' => 'admin@gmail.com',
                    'name' => 'admin',
                    'password' => Hash::make('12345678'),
                    'image' => 'images/user_images/default.png',
                ]
            );
            return to_route('admin.index');
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return to_route('admin.login');
    }
}
