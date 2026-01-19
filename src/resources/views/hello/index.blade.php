@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです</p>
<p>必要なだけ記述できます</p>
@component('components.message')
    @slot('msg_title')
        お知らせ
    @endslot
    @slot('msg_content')
        これはメッセージコンポーネントのサンプルです。
    @endslot
@endcomponent
@endsection

@section('footer')
@endsection