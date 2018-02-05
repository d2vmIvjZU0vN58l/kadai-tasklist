@extends('layouts.app')

@section('content')

    @include('commons.error_messages')
    @if (Auth::check())
    <h1>タスク一覧</h1>
        @if (count ($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タスク名</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        {!! link_to_route('tasks.create', '新規タスクの登録', ['class' => 'btn btn-primary']) !!}
    @else
    <h1>タスクリストを使用するにはサインアップもしくはログイン</h1>
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection