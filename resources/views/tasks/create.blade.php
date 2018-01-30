@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['未完了' => '未完了', '完了' => '完了', '保留' => '保留'], '未完了') !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection