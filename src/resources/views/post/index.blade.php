@extends('layouts.helloapp')

@section('content')
    <h1>投稿一覧</h1>
    <a href="{{ route('post.create') }}">新規作成</a>
    <ul>
        @foreach ($posts as $post)
            <li style="margin-bottom: 0.7rem;">
                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ route('post.edit', $post->id) }}" class="btn-action" style="margin-left: 1rem;">編集</a>
                <form action="{{ route('post.delete', $post->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-action" style="margin-left: 0.3rem;">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
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
