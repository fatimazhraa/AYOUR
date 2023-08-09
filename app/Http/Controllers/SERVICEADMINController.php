<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\CARTE;
class SERVICEADMINController extends Controller
{

    public function index()
    {
        return view('admin.home.Sajouter');
    }

    public function store(Request $request)
    {
        $service = new CARTE ();

        $service->imgcarte= $request->imgcarte;
        $service->titrecarte = $request->titrecarte;
        $service->desccarte = $request->desccarte;
        $service->grandtitre = $request->grandtitre;
        $service->imgdetaille = $request->imgdetaille;
        $service->titredetaille = $request->titredetaille;
        $service->descdetaille = $request->descdetaille;
    
        $service->save();
        if ($service) {
            Session::flash('success_message', 'Insert Success');
        } else {
            Session::flash('error_message', 'Insert Failed');
        }

        return Redirect::back()->with('alert', ['type' => 'success', 'message' => 'Insert Success']);
    }


    public function DataTableindex(){
        $service=CARTE::all();
        return view('admin.home.Smodifier',['service' => $service ]);
       }

       public function DataUpdateIndex($id){
            //return $id;
           $service =  CARTE::where('id',$id)->get();
          // return $service;
          return view('admin.home.DataUpdate',['data'=>$service]);

       }

       public function DataUpdate(Request $request){

        $id = $request->id;
        $imgcarte= $request->input('imgcarte');
        $titrecarte = $request->input('titrecarte');
        $desccarte = $request->input('desccarte');
        $grandtitre = $request->input('grandtitre');
        $imgdetaille = $request->input('imgdetaille');
        $titredetaille = $request->input('titredetaille');
        $descdetaille = $request->input('descdetaille');

        $isUpdateSuccess = CARTE::where('id', $id)->update([
            'imgcarte'=>$imgcarte, 'titrecarte'=>$titrecarte, 'desccarte'=> $desccarte, 'grandtitre'=> $grandtitre, 'imgdetaille'=>$imgdetaille,
            'titredetaille'=>$titredetaille,  'descdetaille'=>$descdetaille
        ]);

        if ($isUpdateSuccess) {
            Session::flash('success_message', 'Update Success');
        } else {
            Session::flash('error_message', 'Update Failed');
        }

        return redirect()->back()->with('alert', ['type' => 'success', 'message' => 'Update Success']);
       }
    


       public function DataTableindex2(){
        $service= CARTE::all();
        return view('admin.home.Sdelete',['service' => $service ]);
       }



       public function DeleteActionIndex($id){
        //return $id;
        return view('admin.home.DeletePage', ['id'=>$id]);
       }

public function supprimer($id){
  //return $id;
  $isDeleteSuccess = CARTE::where('id',$id)->delete();
  if ($isDeleteSuccess) {
    Session::flash('success_message', 'Supression réussi ');
} else {
    Session::flash('error_message', 'Échec de suppression Veuillez réessayer.');
}

return redirect()->back()->with('alert', ['type' => 'success', 'message' => 'Suppression réussie']);

}


}
