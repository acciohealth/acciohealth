@extends('layouts.app')

@section('content')
<div class="jumbotron intro-banner">
    <div class="container-fluid">
        <h1 class="text-center">Healthy mind, Healthy you.</h1>
        <p class="text-center">Over 350 million people suffer from depression worldwide. We provide a self diagnostic and screening tool for stress, <br> depression and anxiety, which should be a part of primary healthcare, to help improve your overall health. e</p>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="{{ url('/tests') }}">See all tests</a></p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="block-1 clearfix">
            <h2 class="text-center block-title">How it works</h2>
            <div class="col-sm-6 col-sm-push-6">
                <div class="block-img">
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="block-text">
                    <h3>Self tests</h3>
                    <p>We have a range of test to evaluate you stress, anxiety or depression levels. Choose one of the test and get started.</p>
                    {{--<p><a href="" class="btn btn-primary">Start test</a></p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="block-2 clearfix">
            <div class="col-sm-6">
                <div class="block-img">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="block-text">
                    <h3>Detailed evaluation</h3>
                    <p>Once your test is complete, we provide a detailed report of your situation based on our evaluation criteria.</p>
                    {{--<p><a href="" class="btn btn-primary">Start test</a></p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="block-benefits clearfix">
            <h2 class="text-center block-title">Benefits</h2>
            <div class="col-sm-4 col-md-2 col-md-offset-3">
                <p class="text-center"><i class="fa fa-globe" aria-hidden="true"></i></p>
                <h3 class="text-center">Accessible</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-sm-4 col-md-2">
                <p class="text-center"><i class="fa fa-child" aria-hidden="true"></i></p>
                <h3 class="text-center">Convenient</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-sm-4 col-md-2">
                <p class="text-center"><i class="fa fa-shield" aria-hidden="true"></i></p>
                <h3 class="text-center">Secqure</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="block-blog">
        <div class="container">
            <div class="row">
                <h2 class="text-center block-title">From the blog</h2>
                @foreach( $blog_posts as $key =>$blog_post)
                    <div class="col-sm-4">
                        <a class="thumbnail post-card" href="{{ $blog_post->guid }}">
                            <img src="{{ url($post_images[$key]) }}" alt="...">
                            <div class="caption">
                                <h3>{{ $blog_post->post_title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <p class="text-center"><a href="{{ url('blog') }}" class="btn btn-primary">View blog</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="block-contact clearfix">
            <div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <h2 class="text-center block-title">Get in touch</h2>
                <p class="text-center">Our new App will be launching soon, Stay Updated.</p>
                <form class="form-inline subscribe-form">
                    <div class="form-group">
                        <div class="col col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address">
                        </div>
                        <div class="col col-sm-4">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
