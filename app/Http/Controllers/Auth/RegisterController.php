<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Daftar;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'email:rfc,dns'],
            'ic_no' => [
                'required', 'unique:users', 'numeric', 'digits:12',
                function ($attribute, $value, $fail) {
                    if (substr($value, 2, 2) > 12) {
                        $fail('Sila semak bulan kelahiran di dalam no kad pengenalan anda.');
                    } elseif (substr($value, 4, 2) > 31) {
                        $fail('Sila semak hari kelahiran di dalam no kad pengenalan anda.');
                    }
                }
            ],
            'age' => [
                function ($attribute, $value, $fail) {
                    if ($value < 18 || $value > 60) {
                        $fail('Anda tidak layak memohon kerana syarat umur mesti berumur 18 tahun dan keatas dan tidak melebihi 60 tahun.');
                    }
                }
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'ic_no' => $data['ic_no'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
