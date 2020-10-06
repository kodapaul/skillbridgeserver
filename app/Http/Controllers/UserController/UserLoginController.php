<?php
namespace App\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        // Display registration form

        $users = User::all();

        return $users;
    }

    public function registerUser()
    
    {
        //Register User to database

        $validator = Validator::make($request->all(), [
            'username' => ['required', 'unique:users', 'min:6', 'max:20'],
            'email' => ['required', 'email', 'unique:users', 'min:6', 'max:100'],
            'first_name' => ['required', 'unique:users', 'max:20'],
            'last_name' => ['required', 'unique:users', 'max:20'],
            'profile_image' => ['nullable'],
            'password' => ['required', 'min:6', 'max:20'],
            'approved' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator);
        }


        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = $request->password;
        $user->save();
        

        // $user = User::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        return $user;
        
    }

    //
}
