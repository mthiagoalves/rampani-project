<?php

namespace App\Http\Controllers;

use App\Mail\AutoResponseMail;
use App\Mail\AutoResponseMailBrand;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    public function geralScheduling(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'date' => 'nullable|date',
            'selectedDeal' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return ["error" => implode(PHP_EOL, $validator->errors()->all())];
        }

        $emailData = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'selectedDeal' => $request->input('selectedDeal'),
        ];

        Mail::to($request->input('email'))
            ->send(new AutoResponseMail($emailData));

        Mail::to('contato@clinicarampani.com.br')
            ->send(new AutoResponseMailBrand($emailData));

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
