@extends('layouts.helloapp')

@section('title', 'Create Post')

@section('menubar')
    @parent
    投稿作成ページ
@endsection

@section('content')
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title"><br>
        <label for="body">本文:</label>
        <textarea id="body" name="body"></textarea><br>
        <label for="image">画像:</label>
        <input type="file" id="image" name="image"><br>
        <input type="submit" value="投稿">
    </form>
@endsection

@section('footer')
@endsection