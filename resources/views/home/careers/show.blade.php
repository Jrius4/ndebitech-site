@extends('layouts.home.main')

@section('content')
<header class="mt-0 pt-0" style="margin-top:-200px">
        <div style="background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} min-height:250px;min-width:100%;margin-top:-20px">
                <img src="" alt="">
                <div class="row d-flex justify-content-center">
                        <div class=" col-md-6 text-light align-self-baseline">
                                <h3>Career</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quasi temporibus explicabo nulla maxime, eveniet, sapiente quo maiores commodi natus totam consequatur esse quidem architecto? Pariatur at odit natus sint!
                            </p>
                            <h4>{{$career->title}}</h4>

                        </div>
                </div>
            </div>
        </header>
        <div class="container my-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-uppercase"> <a href="{{url('/')}}" class="text-primary">Home</a></li>
              <li class="breadcrumb-item active text-uppercase"><a href="{{url('/careers')}}" class="text-primary">Careers</a></li>
            </ol>
        </div>

        <div class="row justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">


                    @foreach ($categories as $category)

                        @if ($category->careers->count()>0)

                        <li class="nav-item">
                        <a class="nav-link {{$category->slug==$career->careerCategory->slug?'active':'disabled'}}" id="pills-{{$category->slug==$career->careerCategory->slug?$category->slug:'any-thing'}}-tab" data-toggle="pill" href="#pills-{{$category->slug}}" role="tab" aria-controls="pills-{{$category->slug}}" aria-selected="true">{{$category->title}}</a>
                          </li>

                        @endif

                    @endforeach
                </ul>
            </div>


        <div class="container py-2" id="single-content">
            <div class="my-1">
                <h2>{{$career->title}}</h2>
            </div>
            <div class="py-2">
                    <p>{!!$career->body!!}</p>
            </div>
        </div>

@endsection


