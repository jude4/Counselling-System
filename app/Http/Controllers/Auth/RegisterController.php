<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
                'level' => ['nullable', 'string'],
                'role_id' => ['required', 'string'],
                'student_id' => ['nullable', 'string', 'max:255'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['nullable', 'string'],
                'facty' => ['nullable', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['nullable', 'string', 'min:6', 'confirmed'],
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

        if ($data['role_id'] == 1) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role_id' => $data['role_id'],
                'password' => Hash::make($data['password']),
            ]);
        }







        // registration for student
        if ($data['role_id'] == '3') {
            $user_id = User::where('student_id', '=', $data['student_id'])->get();

           if($user_id->isEmpty() ){
            echo '<script>alert("Error: User Not Yet Registered")</script>';
               echo '<script>window.location = "../public/"</script>';
              return dd(redirect()->back()->with('error', 'User Not Yet Registered '));
           }

           $user_id->first()->name = $data['name'];
            $user_id->first()->email = $data['email'];
            // $user_id->first()->level = $data['level'];
            // $user_id->first()->dept = $data['dept'];
            // $user_id->first()->facty = $data['facty'];
            $user_id->first()->password = Hash::make($data['password']);
            $user_id->first()->save();
            echo '<script>alert("Register Successful")</script>';
            echo '<script>window.location = "../public/"</script>';
        }

    }

}
