<?php
namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Validator;
use Redirect;
use Hash;
use Illuminate\Http\Request;
use Str;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function view()
    {
        return view('post.create');
    }

    public function create(Request $request)
    {
        $input = $request->input();

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        

        $file = $request->file('file');
        $destinationPath = 'storage/uploads';
        $name = Str::random(50)  . '.' . $request->file('file')->extension();

        $file->move($destinationPath,$name);

        $user = auth()->user();

        $post = Post::create([
            'title' => $input['title'],
            'content' => $input['content'],
            'user_id' => $user->id,
            'image' => $name,
        ]);

        return redirect('dashboard');
    }

    public function edit(Request $request, $id)
    {
        $user = auth()->user();
        $post = Post::where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        if (!$post) {
            return redirect('dashboard');
        }

        return view('post.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $input = $request->input();
        $user = auth()->user();

        $post = Post::where('id', $input['id'])
            ->where('user_id', $user->id)
            ->first();

        if (!$post) {
            return redirect('dashboard');
        }

        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->save();

        return redirect('dashboard');
    }

    public function delete(Request $request)
    {
        $input = $request->input();
        $user = auth()->user();
        $id = $input['id'];

        $post = Post::where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        if (!$post) {
            return redirect('dashboard');
        }

        $post->delete();

        return redirect('dashboard');
    }
   
}
