<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() // nome funzione che si richiama in WEB
    {
        return view('welcome'); //! nome del file view nella cartella views
    }

public function contactUs()
{
return view('contattaci');
}

public function thankYou()
{
return view('thankYou');
}

public function submit(Request $request) //! dependency injection
{    
    $name = $request->input('username');
    $email = $request->input('email');
    $usermessage = $request->input('message');
    
// logica per spedire mail all'utente 
Mail::to($email)->send(new ContactMail($name, $email, $usermessage));
// Mail - classe di partenza
// to - inseriamo il destinatario
//send - sepdisci, specifichiamo QUALE mail spedire

    // dd('controlla la tua casella di posta');


    //reindirizziamo l'utente per fargli avere un risocntro visivo
    //1. redirect alla home messaggio
    // return redirect()->route('home')->with('mailInviata', 'Mail inviata con successo, sarai ricontattato al più presto'); //metodo WITH - redirect con MESSAGGIO

    //2. redirect a una pagina custom - "tank you page"
    return redirect()->route('thankYou.page');
}

}

