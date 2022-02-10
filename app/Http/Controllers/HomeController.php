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

    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(10);
    
        return view('home')->with(compact('posts'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('home');
    }

    public function edit(Request $request, $id)
    {
        
        $post = Post::find($id);
        $post->status = $request->post('action');
        $post->save();     

        return redirect('home');
    }

    public function destroy(Post $post,$id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect('home');
    }

  


}
