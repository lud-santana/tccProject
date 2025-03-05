<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class routeController extends Controller
{
    public function index()
    {
        echo view('INICIO/header');
        echo view('INICIO/index');
        echo view('INICIO/footer');
    }

    public function sobre()
    {
        echo view('SOBRE/header');
        echo view('SOBRE/index');
        echo view('SOBRE/footer');
    }

    public function cadastroEmpresas()
    {
        $data = [
            'tipoPessoa' => $this->tipoPessoaModel->getTipoPessoa()
        ];
        //dd($data);die;
        echo view('CADASTRO-EMPRESAS/header');
        echo view('CADASTRO-EMPRESAS/index', $data);
        echo view('CADASTRO-EMPRESAS/footer');
    }

    public function areaEmpresas()
    {
        echo view('AREA-EMPRESAS/header');
        echo view('AREA-EMPRESAS/index');
        echo view('AREA-EMPRESAS/footer');
    }

    public function calculadora()
    {
        echo view('CALCULADORA/header');
        echo view('CALCULADORA/index');
        echo view('CALCULADORA/footer');
    }

    public function cadastro()
    {
        echo view('CADASTRO/header');
        echo view('CADASTRO/index');
        echo view('CADASTRO/footer');
    }

    public function login()
    {
        echo view('LOGIN/header');
        echo view('LOGIN/index');
        echo view('LOGIN/footer');
    }

    public function store(Request $request, User $user)
    {

        $request->validate(
            [
                'name' => 'required',
                'password' => 'required',
                'email' => 'required',
            ],
            [
                'name.required' => 'O campo Nome é requerido!',
                'password.required' => 'O campo Senha é requerido!',
                'email.required' => 'O campo Email é requerido!',
            ]
        );

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login')->with('success', '' . $request->name . ' Cadastrado com sucesso!');
        //dd($request->all());die;
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->senha,
        ];

        // Verifica as credenciais de autenticação
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        // Retorna com uma mensagem de erro se as credenciais estiverem incorretas
        return back()->with('error', 'Login e senha inválido!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
