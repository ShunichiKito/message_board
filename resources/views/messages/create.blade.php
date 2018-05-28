@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>メッセージ新規作成ページ</h1>
    
    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
     {{ '<p style="color: red;">When passed through htmlentities function</p>' }}
    {!! '<p style="color: red;">When not passed through htmlentities function</p>' !!}

@endsection