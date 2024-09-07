<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/employer/index';

    public function showRegistrationForm()
    {
        return view('employer.auth.register');
    }

    

    protected function guard()
    {
        return Auth::guard('employer');
    }
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employers'],
            'password' => ['required', 'string', 'min:8' ],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'phone_number' => ['required', 'string', 'max:255'],
            'company_name'=>['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Employer
     */
    protected function create(array $data)
    {
        // dd($data);
        $imageName = null;

    if (isset($data['image'])) {
        $imageName = time() . '.' . $data['image']->extension();
        $data['image']->move(public_path('images/employer_images'), $imageName);
    }

        // dd($data);
        return Employer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName,
            'phone_number' => $data['phone_number'],
            'company_name' => $data['company_name'],
        ]);
    }
}
