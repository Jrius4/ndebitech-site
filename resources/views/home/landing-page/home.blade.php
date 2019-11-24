
    <div class="home-page bg-light" style="margin-top:-20px;">
        <!-- Hero Section -->
        <section class="hero d-flex flex-row align-items-center">
          <div class="container">
            <div data-slider-id="1" class="owl-carousel hero-1-slider">
              <!-- Slide-->
              <div class="item">
                <div class="row d-flex flex-row align-items-center py-3">
                  <div class="col-md-6 head-text">
                    <p style="font-size:3.4em">We&nbsp;Build <strong>Experience</strong>
                    that <strong>Engage</strong></p>

                    <p style="font-size:1.8em">
                        People are the core of our business, how they use and internet with our products is the measure of our success. We put them
                    </p>


                  </div>
                <div class="col-md-6 product"><img src="{{asset('/img/logos/ndebi-favi.png')}}" alt="lens" class="img-fluid image-header d-none d-md-block"></div>
                </div>
              </div>
              <!-- Slide END-->

            </div>
          </div>
        </section>

        <section class="bg-dark w-100 m-auto service row justify-content-center text-center py-3">
            <div class="col-12 text-center text-light my-3">
                <h1>Our Services</h1>
            </div>
            <div class="container row align-content-center col-12">

                @foreach ($categories as $category)


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                        <div class="card-service justify-content-center shadow-md">
                            <div class="card-block">
                               @if ($category->image)
                                <img src="{{$category->imageUrl}}" alt=""
                                    class="img-fluid rounded-circle" width="100px" height="150px">
                               @else
                               <img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/blog-avatar.jpg" alt=""
                               class="img-fluid rounded-circle" width="150px" height="150px">

                               @endif


                                <h6 class="card-service-title">{{$category->title}}</h6>
                            <a style="text-decoration:none" href="{{route('service-categories.show',$category->slug)}}" class="btn btn-unique-outline ">Learn more</a>
                            </div>
                        </div>
                    </div>

                @endforeach





            </div>



        </section>
{{--
        <!-- Categories Section-->
        <section class="categories categories-2">
          <div class="container">
            <div class="categories-inner">
              <header>
                <h2 class="h5 heading-line d-none d-md-block">Categories</h2>
              </header>
              <div class="row text-center">
                <div class="col-md-4 item"><a href="category.html">
                    <h4>Digital Cameras</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/cat-cam.jpg" alt="camera" class="img-fluid"></div></a></div>
                <div class="col-md-4 item"><a href="category.html">
                    <h4>Camera Lenses</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/cat-lenses.jpg" alt="lenses" class="img-fluid"></div></a></div>
                <div class="col-md-4 item"><a href="category.html">
                    <h4>Accessories</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/cat-accessories.jpg" alt="accessories" class="img-fluid"></div></a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- Cameras Section-->
         --}}
        {{-- <section class="product-1">
          <div class="container">
            <header>
                <h2 class="h3 heading-line">Cameras Collection</h2>
            </header>
            <div class="row d-flex flex-row align-items-stretch">
                <div class="col-lg-6">
                    <div class="item item-big text-right">
                    <h2>Digital <br>Cameras</h2>
                    <a href="category.html" class="btn btn-unique btn-lg">Shop Now</a>
                    <img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/camera-big.jpg" alt="camera" class="img-fluid"/>
                    </div>
                </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="item">
                      <h4>EOS Digital SLR</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/camera-1.jpg" alt="camera" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>EOS Digital SLR</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/cat-cam.jpg" alt="camera" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>EOS Digital SLR</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/camera-3.jpg" alt="camera" class="img-fluid">
                      <div class="overlay outStock d-flex align-items-center justify-content-center"><strong class="text-primary">Sold Out</strong></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>EOS Digital SLR</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/camera-2.jpg" alt="camera" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}


        <section class="">

            <div class="container">
                        <div class="row justify-content-center text-left">

                            <div class="col-md-6">
                                <h2 style="font-size:1.5em" class="mb-3">Where Branding Matters</h2>
                                <p>Ndebi tech at once, we believe that our commitment to the future means constantly looking for newer and better
                                    ways at solver our clients problems by puttings our best foot forward through research data insights.</p>
                            </div>

                            <div class="col-md-6">
                            <img class="img-fluid rounded" src="{{asset('/img/the-darkest-minds-1366x768-skylan-brooks-amandla-stenberg-harris-14876.jpg')}}" alt="image not found" width="540px" height="340px">

                            </div>

                        </div>
            </div>

        </section>


        <!-- Sale Section-->
        {{-- <section class="sale">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2>Discover 2017 Sales</h2>
                <p>lorem ipsum dolor sit amet consectetur adipiscing elit, ed do eiusmod tempor incididunt</p><a href="#" class="btn btn-dark shop-now">Shop Now</a>
              </div>
              <div class="col-md-6 d-none d-md-block">
                <div class="product"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/nikon-cam.png" alt="camera" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- Lenses Section-->
        {{-- <section class="product-2">
          <div class="container">
            <header>
              <h2 class="h3 heading-line">Lenses Collection</h2>
            </header>
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="item">
                      <h4>Canon EOS C300</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/lens-1.jpg" alt="lens" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>Canon EOS C300</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/lens-2.jpg" alt="lens" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>Canon EOS C300</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/lens-3.jpg" alt="lens" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item">
                      <h4>Canon EOS C300</h4>
                      <p class="text-primary">$1.299</p><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/lens-4.jpg" alt="lens" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center"><a href="detail.html" class="btn btn-unique">View Details</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 js-pull">
                <div class="item item-big">
                  <h2>

                    Zoom <br>Lenses
                  </h2><a href="category.html" class="btn btn-unique btn-lg">Shop Now</a><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/lens-big.jpg" alt="lens" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- Divider Section-->
        <section class="divider-2 text-dark">
          <div class="container text-center">
            <h2>Some of our friends</h2>
            <hr class="bg-primary">
            <p style="font-size:1.2em" >
                    Much of our work is through reputation and referral.We build lasting business relationships. <br>
                    The brands we partner with trust us, and we honour that trust by bringing their vision to life.
                </p>
            <div class="row d-flex justify-content-around">
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
                <span class="col-xs-3 p-2 bg-info m-1">span</span>
                <span class="col-xs-3 p-2 bg-warning m-1">span</span>
                <span class="col-xs-3 p-2 bg-primary m-1">span</span>
                <span class="col-xs-3 p-2 bg-danger m-1">span</span>
                <span class="col-xs-3 p-2 bg-success m-1">span</span>
            </div>
          </div>

        </section>

        <!-- Newsletter Section-->
        <section class="newsletter bg-dark">
          <div class="container">
            <div class="row">
              <div class="ml-auto mr-auto col-lg-8 text-center">
                <div class="form">
                  <p class="h3 text-light">Get in touch</p>
                  <p class="text-light">
                      Got a brief you'd like to discuss, or looking to join the team?
                      We'd love hear from you.
                  </p>
                  <form>
                    <input class="bg-light" id="email" type="email" name="email" placeholder="Enter your email address">
                    <input type="submit" value="Subscribe" class="btn btn-unique">
                  </form>
                </div>
                <div class="social">

                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

    @if ($testimonies->count()>0)

    <section class="">
            <div class="container-fluid row d-flex justify-content-center">
                <div>
                    <h3>Who we have helped</h3>
                </div>
            </div>





            <div class="testimony card col-md-6 mt-5 mb-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                  <div class="w-100 carousel-inner" role="listbox">

                    <div class="carousel-item active">
                      <div class="carousel-caption">
                        <div class="row">
                          <div class="col-sm-3">
                            <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid"/>
                          </div>
                          <div class="col-sm-9">
                            <p><i class="fa fa-quote-left"></i>
                                {{$testimonies->last()->message}}
                                <i class="fa fa-quote-right"></i></p>
                            <small class="smallest mute">-{{$testimonies->last()->title_of_client.' '.$testimonies->last()->name}}</small>
                          </div>
                        </div>
                      </div>
                    </div>









                @foreach ($testimonies as $testimony)

                    <div class="carousel-item">
                      <div class="carousel-caption">
                        <div class="row">
                          <div class="col-sm-3">
                          <img src="{{$testimony->image?$testimony->imageUrl:'http://via.placeholder.com/200x200'}}" alt="" class="rounded-circle img-fluid">
                          </div>
                          <div class="col-sm-9">
                            <h3></h3>
                            <p><i class="fa fa-quote-left"></i> {{$testimony->message}} <i class="fa fa-quote-right"></i></p>
                            <small class="smallest mute">-{{$testimony->title_of_client.' '.$testimony->name}}</small>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach

                  </div>
                  <div class="float-right navi">
                  <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
                </div>
              </div>





        </section>

    @endif

      </div>



