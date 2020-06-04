<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Repository\PostRepositoryInterface;

class WelcomeController extends Controller
{
    private $postRepository;
  
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function indexApi() 
    {

             $data  = Post::orderBy('created_at', 'desc')->paginate(9);
             $categories = Category::all() ;
              return response()->json($data);
 
     }
     public function index() 
    {
             $posts  = Post::orderBy('created_at', 'desc')->paginate(9);
             return view('home', ['posts' => $posts]) ;
     }
    public function show($id) {

             $posts  = $this->postRepository->all(); 
             $postChoosen = $this->postRepository->find($id) ; ;
             $post = array() ;
             $x = 0 ;
             foreach($posts as $item)
             {
                 $post[$x] = $item ;
                 $x++ ;
             }

                
            
             $i = count($post) ;

         return view('posts.show', [ 'postChoosen' => $postChoosen,'posts' => $post,'i'=> $i ]) ;
        }


         
        public function welcome2() 
        {

            $posts  = $this->postRepository->all();
            $categories = Category::all() ;
    
            return view('welcome2', ['posts' => $posts, 'categories' => $categories ]) ;
     
         }
    
}
