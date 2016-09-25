@extends('layouts.app')

@section('content')
    <div class="jumbotron result-header">
        <div class="container-fluid">
            <div class="row">
                <h4 class="text-center">Your result is</h4>
                <h1 class="text-center">{{ $record->score }}</h1>
                <h4 class="text-center">Lorem ipsum</h4>
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
