@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="test-title">{{ $test->name }}</h2>
            <p>Please answer the following questions - all are mandatory questions</p>
            <hr>
            <form method="post">
                {{ csrf_field() }}
                @foreach( $test->questions as $key => $question)
                    <div class="question-wrap">
                        <h3>Q{{$key+1 . '.' . ' ' .$question->question }}</h3>
                        <div class="row">
                            <div class="options-wrap">
                                @foreach( $question->options()->orderBy('score', 'asc')->get() as $key => $option)
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q-{{ $question->id }}" value="{{ $option->id }}">
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
