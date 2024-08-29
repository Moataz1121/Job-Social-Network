<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'phone_number' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'birth_date'=>['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $imagePath = null;
        // if ( $data('image') !== null) {
        //     $image = $data('image');
        //     $imagePath = $image->store('images', 'posts_upload');
        // }
        // $data['image'] = $data['image']->store('images', 'user_image');
        $imageName = null;

    if (isset($data['image'])) {
        $imageName = time() . '.' . $data['image']->extension();
        $data['image']->move(public_path('images/user_images'), $imageName);
    }

        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName,
            'phone_number' => $data['phone_number'],
            'gender' => $data['gender'],
            'birth_date' => $data['birth_date'],

        ]);
    }
}
