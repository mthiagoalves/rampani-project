<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function geralScheduling(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return ["error" => implode(PHP_EOL, $validator->errors()->all())];
        }

        return response()->json(["message" => "Tudo certo! Em breve nossa equipe entrará em contato para agendar o melhor horário!"]);
    }

    public function processMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'terms_and_conditions' => 'required|boolean'
        ]);

        if ($request->get('terms_and_conditions') === false) {
            return ["error" => "Por favor, concorde com os termos e condições do nosso site."];
        } elseif ($validator->fails()) {
            return ["error" => implode(PHP_EOL, $validator->errors()->all())];
        }

        return response()->json(["message" => "Obrigado pela mensagem, ficamos felizes em poder ouvir você! Caso for preciso, entraremos em contato em breve."]);
    }
}
