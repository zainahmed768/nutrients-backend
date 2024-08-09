<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('frontEnd.pages.auth.login');
    }

    public function register()
    {
        return view('frontEnd.pages.auth.register');
    }

    public function create(CreateUserRequest $request)
    {
        dd($request->all());
        // Get the validated data
        $validatedData = $request->validated();

        // Create the user
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name'  => $validatedData['last_name'],
            'email'      => $validatedData['email'],
            'phone'      => $validatedData['phone'],
            'password'   => Hash::make($validatedData['password']), // Hash the password
            'role'       => "user", // Set role explicitly
        ]);

        // Debugging output (Remove this in production)
        dd($user);

        // Redirect to the login page with a success message
        return redirect()->route('user.login')->with('success', 'User created successfully');
    }
}
