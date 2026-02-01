@extends('layouts.helloapp')

@section('title', 'Show')
@section('menubar')
@parent
詳細ページ
@endsection

@section('content')
            <table width="400px">
            <tr><th>ID: </th><td>{{$item->id}}</td></tr>
            <tr><th>Mail: </th><td>{{$item->mail}}</td></tr>
            <tr><th>Age: </th><td>{{$item->age}}</td></tr>
            </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection