<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {

        $password = '12345678';
        $hashedPassword = bcrypt($password);

        echo $hashedPassword;
        return view('auth.login');
    }


    public function stor(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir al usuario a la página deseada
            return redirect()->intended('/dashboard');
        } else {
            // Autenticación fallida, mostrar un mensaje de error
            return back()->with('error', 'Credenciales inválidas');
        }
    }


    public function view()
    { 
        // Obtener el usuario autenticado actual
        $user = Auth::user();
    
        // Comprobar si hay un usuario autenticado
        if ($user) {
            // Cargar los likes del usuario
            $likes = $user->likes;
            
            // Pasar los likes a la vista
            return view('welcome', ['likes' => $likes]);
        } else {
            // Si no hay un usuario autenticado, simplemente cargar la vista de bienvenida
            return view('welcome');
        }
    }
}
