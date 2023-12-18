<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\AuthResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $validateReq = $request->validated();
        $validateReq["password"] = bcrypt($validateReq["password"]);

        $user = User::create($validateReq);
        $formattedDatas = new AuthResource($user);

        return response()->json([
            "message" => "Register Successful",
            "data" => $formattedDatas
        ], 200);
    }

    public function login(LoginRequest $request)
    {
        $validateReq = $request->validated();
        if (Auth::attempt($validateReq)) {
            $user = $request->user();
            $token = $user->createToken("access_token")->plainTextToken;

            return response()->json([
                "message" => "Login successful",
                "data" => $token,
            ], 200);
        } else {
            return response()->json([
                "message" => "Login Failed",
                "data" => null,
            ], 401);
        }
    }
}
