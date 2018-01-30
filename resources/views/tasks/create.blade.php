@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection