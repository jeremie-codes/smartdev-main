<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repository\User\UserContract;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    protected UserContract $userContract;

    public function __construct(UserContract $_userContract)
    {
        $this->userContract = $_userContract;
    }

    /**
     * Display a listing of the resource.
     */
    public function loginView()
    {
        return view('auth.login');
    }
    public function registerView()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function handleLogin(LoginRequest $request)
    {
        $user = $this->userContract->login($request->only(['email', 'password']));

        if ($user) {
            $request->session()->regenerate();

            // return redirect()->intended('/');
            return response()->json([
                "message" => "Connexion reussie !",
                "status" => 201,
                "data" => $user,
                "success" => true,
            ]);
        }
        return response()->json([
            "message" => "Identifiant non trouvé !",
            "status" => 404,
            "success" => false
        ]);
    }
    public function handleRegister(RegisterRequest $request)
    {
        $data = $request->all();

        $request['password'] = Hash::make($request['password']);

        if ($request->file('avatar')) {
            $request['avatar'] = $request->file('avatar')->store('avatars', 'public');
            $user = $this->userContract->toAdd($request->all());
        } else {
            $user = $this->userContract->toAdd($request->except('avatar'));
        }

        // $shop = Shop::create([
        //     'user_id' => $user->id,
        //     'name' => $request['shop_name'],
        // ]);

        // if ($shop) {
        //     Auth::login($user);

        //     return redirect()->intended('/');
        // } else {
        //     dd('shop non créé');
        // }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $user = $this->userContract->toGetById($id);

        $data = $request->except(['_method', '_token', 'old_password', 'new_password', 'password_confirmation']);

        $user = $this->userContract->toUpdate($data, $id);

        if ($request->filled('old_password')) {
            $passwordData = $request->validate([
                'old_password' => 'required|string|min:8',
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            if (!Hash::check($request->old_password, $user->password)) {
                return redirect()->back()->withErrors(['old_password' => 'L\'ancien mot de passe est incorrect.']);
            }

            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with('success', 'Vos informations et votre mot de passe ont été mis à jour.');
        }

        return redirect()->back()->with('success', 'Vos informations ont été mises à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
