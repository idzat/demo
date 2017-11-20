<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

	public function index()
	{
		$user = request()->user();
		$posts = $user->posts;
		return view('Post.index', compact('posts'));
	}

	public function create()
	{
		return view('Post.create');
	}

	public function store(Request $request)
	{
		$user = request()->user();
		try{
			$test->id;
			$post = $user->posts()->create($request->all());
			return [
				'response' => true,
				'data' => [],
				'message' => 'You have created a post'
			];
		}
		catch(\Exception $e)
		{
			return [
				'response' => false,
				'data' => [],
				'message' => 'something went wrong'
			];
		}
	}

	public function show(int $postID)
	{
		return view('Post.show');
	}

	public function edit(int $postID)
	{
		// $post = Post::find($postID);
		$user = request()->user();
		$post = $user->posts()->where('id',$postID)->first();
		return view('Post.edit', compact('post'));
	}

	public function update(Request $request, int $postID)
	{
		$post = Post::find($postID);
		$post->update($request->all());
		return redirect()->back();
	}

	public function destroy(Request $request, int $postID)
	{
		$post = Post::find($postID);

		if($post)
			$post->delete();

		return redirect()->back();
	}
}