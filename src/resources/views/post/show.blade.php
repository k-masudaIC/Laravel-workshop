@extends('layouts.helloapp')

@section('title', 'Show Post')

@section('menubar')
    @parent
    投稿詳細ページ
@endsection

@section('content')
    <table>
        <tr><th>ID: </th><td>{{ $post->id }}</td></tr>
        <tr><th>Title: </th><td>{{ $post->title }}</td></tr>
            <tr><th>Content: </th><td>{{ $post->body }}</td></tr>
            @if ($post->image_path)
                <div style="margin-bottom: 1rem;">
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="画像" style="max-width:300px;">
                </div>
            @endif
        <tr><th>Created At: </th><td>{{ $post->created_at }}</td></tr>
        <tr><th>Updated At: </th><td>{{ $post->updated_at }}</td></tr>
    </table>
    <a href="{{ route('post.edit', ['id' => $post->id]) }}">Edit</a>
    <form action="{{ route('post.delete', ['id' => $post->id]) }}" method="post" style="display:inline;">
        @csrf
            <button type="submit" class="btn-action">削除</button>
    </form>
        <a href="{{ route('post.index') }}" class="btn-action">一覧へ戻る</a>

    @push('styles')
    <style>
        .btn-action {
            display: inline-block;
            background: #4f8cff;
            color: #fff !important;
            border: none;
            border-radius: 4px;
            padding: 0.3rem 1.1rem;
            font-size: 1rem;
            cursor: pointer;
            margin: 0.2rem 0.2rem 0.2rem 0;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-action:hover {
            background: #0056b3;
            color: #fff !important;
        }
    </style>
    @endpush
@endsection

@section('footer')
@endsection