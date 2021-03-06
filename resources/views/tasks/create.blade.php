@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::select('status', ['未完了' => '未完了', '完了' => '完了', '保留' => '保留'], '未完了', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection