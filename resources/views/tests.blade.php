@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="tests-intro">
                    <h2>Self tests: Choose 1</h2>
                    <p>An easy test that will help you to evaluate your stress level</p>
                </div>
                @foreach( $tests as $test)
                    <div class="col-sm-6 col-md-4 col-padding-5">
                        <div class="thumbnail test-card">
                            <img src="{{ url($test->image) }}" alt="...">
                            <div class="caption">
                                <h3>{{ $test->name }}</h3>
                                <p>{{ $test->description }}</p>
                                <p><a href="test/{{$test->id}}" class="btn btn-primary btn-block" role="button">Take test</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
