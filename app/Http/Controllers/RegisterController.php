<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view("registration");
    }
    public function store(Request $request){
        
        $nom=$request->nom;
        $prenom=$request->prenom;
        $email=$request->AdressEmail;
        $password=$request->password;
        $telephone=$request->telephone;
        $NomEntrprise=$request->NomEntrprise;
        $Adresse=$request->Adresse;
        $Adresse2=$request->Adresse2;
        $Ville=$request->Ville;
        $Province=$request->Province;
        $Codepostal=$request->Codepostal;
        $Pays=$request->Pays;
        $currency=$request->currency;
        $confirmPassword=$request->confirmPassword;
        $options=$request->options;
        User::create([
           'nom' =>$nom,
           'prenom' =>$prenom,
           'email' =>$email,
           'password' =>$password,
           'telephone' =>$telephone,
           'NomEntrprise' =>$NomEntrprise,
           'Adresse' =>$Adresse,
           'Adresse2' =>$Adresse2,
           'Ville' =>$Ville,
           'Province' =>$Province,
           'Codepostal' =>$Codepostal,
           'Pays' =>$Pays,
           'currency' =>$currency,
           'confirmPassword' =>$confirmPassword,
           'options' =>$options,


        ]);
        return redirect()->route('register.create');

    
        }
}
