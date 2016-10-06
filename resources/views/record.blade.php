@extends('layouts.app')

@section('content')
    <div class="jumbotron result-header">
        <div class="container-fluid">
            <div class="row">
                <h4 class="text-center">Your result is</h4>
                @if($record->test->acronym == 'dass21')
                    <div class="col-sm-2 col-sm-offset-3">
                        <h1 class="text-center">{{ $record->depression }}</h1>
                        <h3 class="text-center">Depression</h3>
                    </div>
                    <div class="col-sm-2">
                        <h1 class="text-center">{{ $record->anxiety }}</h1>
                        <h3 class="text-center">Anxiety</h3>
                    </div>
                    <div class="col-sm-2">
                        <h1 class="text-center">{{ $record->stress }}</h1>
                        <h3 class="text-center">Stress</h3>
                    </div>
                @elseif( $record->test->acronym == 'bai' )
                    <div class="col-sm-2 col-sm-offset-5">
                        <h1 class="text-center">{{ $record->score }}</h1>
                        <h3 class="text-center">Anxiety</h3>
                    </div>
                @else
                    <div class="col-sm-2 col-sm-offset-5">
                        <h1 class="text-center">{{ $record->score }}</h1>
                        <h3 class="text-center">Stress</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="email-report">
                    <h2 class="text-center">Get your full report</h2>
                    <p class="text-center">Fill the following form to access to the full report</p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                        </div>
                        <p class="text-center"><button type="submit" class="btn btn-primary">Get detailed report</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
