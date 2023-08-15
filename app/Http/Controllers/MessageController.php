<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    
    public function index()
    {
        
        return view('admin.home.domaine');
    }
    
    public function store(Request $request)
    {
        $message = new Message();
        $message->nom = $request->input('nom');
        $message->prenom = $request->input('prenom');
        $message->entreprise = $request->input('entreprise');
        $message->email = $request->input('email');
        $message->telephone = $request->input('telephone');
        $message->message = $request->input('message');
        $message->qui = $request->input('qui');
        $message->save();
    
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
    public function show()
    {
        $message = Message::orderBy('created_at', 'desc')
            ->get();
    
        return view('admin.home.message', ['message' => $message]);
    }
    
      
    
    public function marquerRepondu($id)
{
    $message = Message::find($id);
    if ($message) {
        $message->repondu = 1;
        $message->save();
    }

    return redirect()->back();
}
    
}
