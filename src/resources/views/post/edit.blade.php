@extends('layouts.helloapp')

@section('content')
    <h1>投稿編集</h1>
    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>タイトル</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div>
            <label>本文</label>
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
        </div>
        <div>
            <label>画像</label>
            <input type="file" name="image">
            @if ($post->image_path)
                <div style="margin-top:8px;">
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="画像" style="max-width:200px;">
                </div>
            @endif
        </div>
        <button type="submit">更新</button>
    </form>
    <a href="{{ route('post.show', $post->id) }}">戻る</a>
@endsection
