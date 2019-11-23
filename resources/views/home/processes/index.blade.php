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




<header class="my-2 p-2">
    <div class="container text-center">
        <h2 class="justify-content-center">Process</h2>
        <div>
            <p>
              We create engagement between your brand and real people by blending creativity with technology. Experience as they should be: <br>
              <strong>bold, beautiful and immersive.</strong>
            </p>
        </div>

       <div class="row justify-content-center">
         <div class="col-sm-3">
         <img src="{{asset('img/icons/strategy.svg')}}" alt="imge not found" width="100px" height="100px" id="img-fluid">
           <h5 class="mt-2">STRATEGY</h5>
         </div>

         <div class="col-sm-3">
           <img src="{{asset('img/icons/sketch.svg')}}" alt="imge not found" width="100px" height="100px" id="img-fluid">
           <h5 class="mt-2">DESIGN</h5>
         </div>

         <div class="col-sm-3">
           <img src="{{asset('img/icons/computer.svg')}}" alt="imge not found" width="100px" height="100px" id="img-fluid">
           <h5 class="mt-2">Development</h5>
         </div>

    </div>

   </header>





<div class="image-box">
        <div
          class="image-box__background"
          style="--image-url: url({{asset('/img/the-darkest-minds-1366x768-skylan-brooks-amandla-stenberg-harris-14876.jpg')}})"
        ></div>
        <div class="image-box__overlay"></div>
        <div class="image-box__content">
                <div class="container  text-center justify-content-center">
                        <div class="mb-2">
                                <h2 class="section-heading ">Creating digital experiences</h2>
                        </div>
                          <p>In an increasingly automated and distant world, we believe in the human touch. Human experience is at the center of everything we design. We believe in experts, not generalists. Our teams is handpicked for what they do best and nurtured into poineers. We believe in the simplicity of design. When the design is clear so is the message. We give you the tools for effect communication</p>


                          <p>We build experience that engages. <br> People are the core of our business ,how they use  and interact with our product is measure of our success.We put them at the heart of everything we do </p>


                </div>
        </div>
      </div>


   <div class="container-fluid text-center mb-0">
        <div>
            <h2>How we work</h2>
                <p>We approach every project  with our collabrative  and iterative process that is simple ,but effective</p>
        </div>

     <div class="row justify-content-around">

        @foreach ($processes as $process)


        <div class="col-md-4 process p-2 mb-2">
            <h2>{{$process->title}}</h2>
            <p>{!!Str::words($process->excerpt,15)!!}</p>
            <a href="{{route('processes.show',$process->slug)}}" class="btn btn-primary btn-unique ">Learn More</a>
        </div>


        @endforeach


     </div>



 </div>






@endsection
