<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;

class SignUpController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('public.signup.index');
    }

    public function store(UserRequest $request)
    {
        try {
            $user = $this->userService->store($request);

            session()->put('user', $user); //?
        } catch (\Exception $e) {
            return redirect()->route('user.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
        return redirect()->route('dashboard')->with('success', 'Registrado com sucesso.');
    }
}
