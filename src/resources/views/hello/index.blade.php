@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <table>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['mail'] }}</td>
        </tr>
        @endforeach
    </table>

@endsection

@section('footer')
@endsection