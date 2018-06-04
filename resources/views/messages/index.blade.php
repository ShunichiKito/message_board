@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <!--<h1>メッセージ一覧</h1>-->
    
    <!--@if (count($messages) > 0)-->
    <!--    <ul>-->
    <!--        @foreach ($messages as $message)-->
    <!--            <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>-->
    <!--        @endforeach-->
    <!--    </ul>-->
    <!--@endif-->
    
    <!--{!! link_to_route('messages.create', '新規メッセージの投稿') !!}-->
    
    
    <h1>メッセージ一覧</h1>
     @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}
    
    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-default']) !!}
@endsection