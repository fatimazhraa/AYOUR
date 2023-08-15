<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
class BLOGADMINController extends Controller
{

    public function DataTableindex(){
        $blog= Category::all();
        return view('admin.home.Bajouter',['blog' => $blog ]);
       }
   
       public function DataAjouterIndex($id){
        
      return view('admin.home.BPost',['id'=>$id]);

   }
   public function store(Request $request)
   {
       $blog = new  Post();

       $blog->titre= $request->titre;
       $blog->description = $request->description;
       $blog->image_path = $request->image_path;
       $blog->category_id = $request->category_id;
   
       $blog->save();
       if ($blog) {
           Session::flash('success_message', 'Insert Success');
       } else {
           Session::flash('error_message', 'Insert Failed');
       }

       return Redirect::back()->with('alert', ['type' => 'success', 'message' => 'Insert Success']);
   }
   public function getCategoryName($id)
   {
       $category = Category::find($id);

       if ($category) {
           return $category->name;
       } else {
           return 'Catégorie non trouvée';
       }
   }

   public function DataTable()
   {
       $blogs = Post::all();
       $data = [];

       foreach ($blogs as $blog) {
           $name = $this->getCategoryName($blog->category_id);
           $data[] = [
               'blog' => $blog,
               'name' => $name,
           ];
       }

       return view('admin.home.Bmodifier', ['data' => $data]);
   }


   public function DataUpdate($id) {
    $blog = Post::where('id', $id)->first();

    if (!$blog) {
        return redirect()->back()->with('error_message', 'Article introuvable.');
    }

    $name = $this->getCategoryName($blog->category_id);

    return view('admin.home.DataUpdateBlog', ['data' => $blog, 'name' => $name]);
}


public function getCategoryIdByName($name)
{
    $category = Category::where('name', $name)->first();

    if ($category) {
        return $category->id;
    } else {
        return null; // Ou une valeur par défaut si la catégorie n'est pas trouvée
    }
}


public function DataUpdateBlog(Request $request){

    $id = $request->id;
    $titre= $request->input('titre');
    $description = $request->input('description');
    $image_path = $request->input('image_path');
    $category_id = $this->getCategoryIdByName($request->input('category_id'));


    $isUpdateSuccess = Post::where('id', $id)->update([
        'titre'=>$titre, 'description'=>$description, 'image_path'=> $image_path, 'category_id'=> $category_id
    ]);

    if ($isUpdateSuccess) {
        Session::flash('success_message', 'Update Success');
    } else {
        Session::flash('error_message', 'Update Failed');
    }

    return redirect()->back()->with('alert', ['type' => 'success', 'message' => 'Update Success']);
   }


   public function DataTableindex2(){
    $blogs = Post::all();
       $data = [];

       foreach ($blogs as $blog) {
           $name = $this->getCategoryName($blog->category_id);
           $data[] = [
               'blog' => $blog,
               'name' => $name,
           ];
       }

       

    return view('admin.home.Bdelete',['data' => $data ]);
   }



   public function DeleteActionIndex($id){
    //return $id;
    return view('admin.home.Blog-DeletePage', ['id'=>$id]);
   }

public function supprimer($id){
//return $id;
$isDeleteSuccess = Post::where('id',$id)->delete();
if ($isDeleteSuccess) {
Session::flash('success_message', 'Supression réussi ');
} else {
Session::flash('error_message', 'Échec de suppression Veuillez réessayer.');
}

return redirect()->back()->with('alert', ['type' => 'success', 'message' => 'Suppression réussie']);

}

}








