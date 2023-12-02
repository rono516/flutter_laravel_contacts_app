<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    public function register(StoreUserRequest $request)
    {
        $request->validated($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of ' . $user->name)->plainTextToken,
        ]);

    }
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        // if (!Auth::attempt([$request->only('email', 'password')])) {
        //     return $this->error('', 'Credentials do not match', 401);
        // }
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // code...
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email', '=', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of ' . $user->name)->plainTextToken,
        ]);

    }

    public function logout()
    {
        // return response()->json('This is my logout method');
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'message' => 'You have successfully logged out and your access token has been deleted',
        ]);
    }
}
