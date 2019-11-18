@extends('layouts.home.main')

@section('content')




<header class="mt-0 pt-0" style="margin-top:-200px">
        <div style="background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} min-height:250px;min-width:100%;margin-top:-20px">
            <img src="" alt="">
            <div class="row d-flex justify-content-center">
                    <div class=" col-md-6 text-light align-self-baseline">
                            <h3>Processes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quasi temporibus explicabo nulla maxime, eveniet, sapiente quo maiores commodi natus totam consequatur esse quidem architecto? Pariatur at odit natus sint!
                        </p>
                        <h3>{{$process->title}}</h3>
                    </div>
            </div>
        </div>
    </header>
    <div class="container my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-uppercase"> <a href="{{url('/')}}" class="text-primary">Home</a></li>
            <li class="breadcrumb-item active text-uppercase"><a href="{{url('/processes')}}" class="text-primary">Processes</a></li>
        </ol>
    </div>

    <div class="container">
        <p>
            {!!$process->body!!}
        </p>
    </div>








@endsection
