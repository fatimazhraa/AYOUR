<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    public function index(Request $request)
    {   
        $category = $request->input('category');
        
        if ($category) {
            // Récupérez les posts avec la catégorie spécifiée
            $posts = Post::where('category_id','=', $category)->paginate(2);
        } else {
            // Récupérez tous les posts
            $posts = Post::paginate(2);
        }
    
        $categories = Category::all();

        return view('blog', compact('posts','categories'));
    }
    
    
    
    public function show(string $id)
    {
        $post=Post::find($id);
        $categories = Category::all();
        return view ('BlogContenu',compact('post','categories'));
    } 
    
  
    
    
}
