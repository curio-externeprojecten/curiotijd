<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Klas;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Route;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        $userID = Auth::user()->id;
        return "dashboard/$userID";
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'classes_id' => "1",
            'student_number' => ['string', 'max:255'],                                                      
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
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
       
        if(isset($data['admin_checkbox'])){
            $admin = true;      
        }else{
            $admin = false;
        }

        $user = User::create([
            'first_name'  => $data['first_name'],
            'last_name'   => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin' => $admin,
        ]);
        // $createdUser = User::where('name', '=', $data['first_name'])->first();


        if($admin){
             Teacher::create([
                'first_name'  => $data['first_name'],
                'last_name'   => $data['last_name'],
                'created_at'  => now(),
                'updated_at' => now(),
                'user_id'     => $user->id,
            ]);
        }
        else{
             Student::create([
                'first_name'  => $data['first_name'],
                'last_name'   => $data['last_name'],
                'student_number' => $data['student_number'],     
                'created_at'  => now(),
                'updated_at' => now(),
                'classes_id'     => "1",
                'user_id'     => $user->id
            ]);
        }
        return $user;

        $classes= klas::select('name','id')->get();
        return view('id',compact('classes'));
    }    
}
