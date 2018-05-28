@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <p>{{ $message->content }}</p>

@endsection