@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="test-title">{{ $test->name }}</h2>
            <p>Please anwer the following questions</p>
            <hr>
            <form method="post">
                {{ csrf_field() }}
                @foreach( $test->questions as $question)
                    <div class="question-wrap" id="{{ $question->id }}">
                        <h3>Q. {{ $question->question }}</h3>
                        <div class="row">
                            <div class="options-wrap">
                                @foreach( $question->options()->orderBy('score', 'asc')->get() as $option)
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q-{{ $question->id }}" alt="sd" value="{{ $option->id }}">
                                                {{ $option->description }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                    <hr>
                    <button type="submit" class="btn btn-primary pull-right">Get result</button>
            </form>
        </div>
    </div>
@endsection
