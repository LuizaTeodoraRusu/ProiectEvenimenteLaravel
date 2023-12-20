<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContulMeuController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('contul_meu', compact('user'));
        } else {
            return redirect('login');
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect()->route('contul_meu')->with('success', 'Datele au fost actualizate cu succes!');
    }
}