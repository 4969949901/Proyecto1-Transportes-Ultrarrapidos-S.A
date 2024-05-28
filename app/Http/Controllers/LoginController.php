<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function logout(Request $request)
    {
        // Utiliza el guard para cerrar la sesión
        $this->guard()->logout();

        // Invalida la sesión del usuario
        $request->session()->invalidate();

        // Genera un nuevo token de sesión
        $request->session()->regenerateToken();

        // Redirige al usuario a la página de inicio (o a la que prefieras)
        return redirect('/');
    }
}
