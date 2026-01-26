<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 一覧表示
        public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    // 詳細表示
        public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    // 作成フォーム表示
        public function create()
    {
        return view('post.create');
    }

    // 新規保存
        public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        $post = Post::create($validated);
        return redirect()->route('post.show', $post->id);
    }

    // 編集フォーム表示
        public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    // 更新
        public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        $post = Post::findOrFail($id);
        $post->update($validated);
        return redirect()->route('post.show', $post->id);
    }

    // 削除
        public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

}
