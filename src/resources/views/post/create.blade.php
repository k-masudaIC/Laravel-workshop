@extends('layouts.helloapp')

@section('title', 'Create Post')

@section('menubar')
    @parent
    投稿作成ページ
@endsection

@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br>
        <label for="body">Content:</label>
        <textarea id="body" name="body"></textarea><br>
        <input type="submit" value="Create">
    </form>
@endsection

@section('footer')
@endsection