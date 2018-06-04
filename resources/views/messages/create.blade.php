@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
   <!-- <h1>メッセージ新規作成ページ</h1>-->
    
   <!--{!! Form::model($message, ['route' => 'messages.store']) !!}-->

   <!--     {!! Form::label('title', 'タイトル:') !!}-->
   <!--     {!! Form::text('title') !!}-->

   <!--     {!! Form::label('content', 'メッセージ:') !!}-->
   <!--     {!! Form::text('content') !!}-->

   <!--     {!! Form::submit('投稿') !!}-->

   <!-- {!! Form::close() !!}-->
   
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection