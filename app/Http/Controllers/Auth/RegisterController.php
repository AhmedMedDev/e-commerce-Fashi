<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Traits\ImgUpload;
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

    /*
    |--------------------------------------------------------------------------
    | Images upload traits 
    |--------------------------------------------------------------------------
    |
    | This Trait to save img in PC
    |
    */

    use ImgUpload;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'Fname'         => ['required', 'string', 'max:255'],
            'Lname'         => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'img'           => ['nullable'],
            'jobTitle'      => ['string'],
            'bio'           => ['string'],
            'password'      => ['required', 'string', 'min:4', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    
    protected function create(array $data)
    {
        $fileName = (isset($data['img'])) ?  $this->saveImage($data['img'], 'images/upload/userAvatar')
        : 'defualt.png';

        return User::create([
            'Fname'         => $data['Fname'],
            'Lname'         => $data['Lname'],
            'email'         => $data['email'],
            'img'           => $fileName,
            'jobTitle'      => $data['jobTitle'],
            'bio'           => $data['bio'],
            'password'      => Hash::make($data['password']),
        ]);
        
    }
}