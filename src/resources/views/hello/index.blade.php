@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>
    @include('components.message', ['msg_title'=>'こんにちは', 'msg_content'=>'これはサブビューの表示です。'])

@endsection

@section('footer')
@endsection