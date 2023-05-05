<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|max:2',
            'password' => 'required|max:5',
        ]);

        $infoLogin = $request->only('username', 'password');

        if (Auth::attempt($infoLogin)) {
            // Authentication passed
            return redirect('homeuser');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors('Username dan password tidak sesuai');
        }
    }

    public function register() {
        return view('register');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }

    // public function register() {
    //     $validator = Validator::make(request()->all(), [
    //         'username' => 'required|max:2',
    //         'password' => 'required|max:5',
    //         'email' => 'required|email|unique:users',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->messages());
    //     }

    //     $user = User::create([
    //         'name' => request('name'),
    //         'username' => request('username'),
    //         'email' => request('email'),
    //         'password' => Hash::make(request('password'))
    //     ]);

    //     if ($user) {
    //         return response()->json(['message' => 'Pendaftaran berhasil']);
    //     } else {
    //         return response()->json(['message' => 'Pendaftaran gagal']);
    //     }
    // }

    // /**
    //  * Get a JWT via given credentials.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function login()
    // {
    //     $credentials = request(['username', 'password']);

    //     if (! $token = auth()->attempt($credentials)) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }

    //     return $this->respondWithToken($token);
    // }

    // /**
    //  * Get the authenticated User.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function me()
    // {
    //     return response()->json(auth()->user());
    // }

    // /**
    //  * Log the user out (Invalidate the token).
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function logout()
    // {
    //     auth()->logout();

    //     return response()->json(['message' => 'Successfully logged out']);
    // }

    // /**
    //  * Refresh a token.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function refresh()
    // {
    //     return $this->respondWithToken(auth()->refresh());
    // }

    // /**
    //  * Get the token array structure.
    //  *
    //  * @param  string $token
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60
    //     ]);
    // }
}
