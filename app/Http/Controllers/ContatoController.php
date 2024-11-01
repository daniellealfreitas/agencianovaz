<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviaContato(Request $request)
    {
        $dados = $request->validate([
            'nomecompleto' => 'required|string',
            'telefone' => 'nullable|string',
            'email' => 'required|email',
            'mensagem' => 'required|string',
        ]);

        Mail::to('dbleall@gmail.com')->send(new ContactMail($dados));

        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
