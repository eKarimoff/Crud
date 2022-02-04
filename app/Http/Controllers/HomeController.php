<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderByDesc('blog')->paginate(10);
    
        return view('home',compact('posts'));
    }

    public function create()
    {
      
    }
 
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('home');
    }

    public function edit(Request $request, Post $post)
    {
        return redirect('home.edit');
    }

    public function destroy(Post $post,$id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect('home');
    }

    public function approve($id) {
        $post = Post::find($id);
        if($post->status == 'pending') {
            $post->status = 'Approved';
            $post->save();
        }
        return redirect('home');
    }


}
