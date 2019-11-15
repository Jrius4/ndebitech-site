@extends('layouts.home.main')
@section('content')


<div class="home-page">
    {{-- <!-- Hero Section --> --}}
    <section class="hero d-flex flex-row align-items-center">
      <div class="container">
        <div data-slider-id="1" class="owl-carousel hero-1-slider">
          {{-- <!-- Slide--> --}}
          <div class="item">
            <div class="row d-flex flex-row align-items-center">
              <div class="col-md-6 text">
                <h1>Bootstrap&nbsp;4<br>Ecommerce Template</h1>
                <p><strong>9 HTML</strong> pages, <strong>SCSS</strong> source files, <strong>7 colour variants</strong></p>
                <hr>
                <ul class="list-unstyled props"> 
                  <li><i class="icon-checked"></i>Regular updates</li>
                  <li><i class="icon-checked"></i>Well-structured & SEO-friendly code</li>
                  <li><i class="icon-checked"></i>SCSS files for full customization</li>
                </ul>
              </div>
              <div class="col-md-6 product">
                  <img style="width:250px;height:250px" src="{{asset('/img/logos/ndebi-favi.png')}}" alt="lens" class="img-fluid d-none d-md-block"></div>
            </div>
          </div>
          {{-- <!-- Slide END--> --}}
          {{-- <!-- Slide--> --}}
          <div class="item">
            <div class="row d-flex flex-row align-items-center">
              <div class="col-md-6 text">
                <h5>Professional Edition</h5>
                <h1>Premium Quality</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <hr>
                <ul class="list-unstyled props"> 
                  <li><i class="icon-checked"></i>Lorem ipsum dolor sit amet</li>
                  <li><i class="icon-checked"></i>Lorem ipsum dolor sit amet</li>
                </ul>
                <ul class="price list-inline">
                  <li class="list-inline-item">
                    <p class="price">Best Price: 350$</p>
                  </li>
                  <li class="list-inline-item"> 
                    <ul class="list-inline">
                      <li class="list-inline-item"> <a href="#" class="btn btn-white">Add To Cart</a></li>
                      <li class="list-inline-item"> <a href="#" class="btn btn-dark">Learn More</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 product"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/hero-2.png" alt="lens" class="img-fluid d-none d-md-block"></div>
            </div>
          </div>
          {{-- <!-- Slide END--> --}}
          {{-- <!-- Slide--> --}}
          <div class="item">
            <div class="row d-flex flex-row align-items-center">
              <div class="col-md-6 text">
                <h5>Professional Edition</h5>
                <h1>Premium Quality</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <hr>
                <ul class="list-unstyled props"> 
                  <li><i class="icon-checked"></i>Lorem ipsum dolor sit amet</li>
                  <li><i class="icon-checked"></i>Lorem ipsum dolor sit amet</li>
                </ul>
                <ul class="price list-inline">
                  <li class="list-inline-item">
                    <p class="price">Best Price: 350$</p>
                  </li>
                  <li class="list-inline-item"> 
                    <ul class="list-inline">
                      <li class="list-inline-item"> <a href="#" class="btn btn-white">Add To Cart</a></li>
                      <li class="list-inline-item"> <a href="#" class="btn btn-dark">Learn More</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 product"><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/hero-1.png" alt="lens" class="img-fluid d-none d-md-block"></div>
            </div>
          </div>
          {{-- <!-- Slide END                                --> --}}
          
        </div>
      </div>
    </section>
    {{-- <!-- Categories Section--> --}}
    <section class="categories">
      <div class="container">
        <div class="categories-inner card shadow-sm">
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
    {{-- <!-- Cameras Section--> --}}
    <section class="product-1">
      <div class="container">
        <header>
          <h2 class="h3 heading-line">Cameras Collection</h2>
        </header>
        <div class="row d-flex flex-row align-items-stretch">
          <div class="col-lg-6">
            <div class="item item-big text-right">
              <h2>
                 
                Digital <br>Cameras  
              </h2><a href="category.html" class="btn btn-unique btn-lg">Shop Now</a><img src="https://d19m59y37dris4.cloudfront.net/photo/1-4-1/img/camera-big.jpg" alt="camera" class="img-fluid">
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
    </section>
    {{-- <!-- Sale Section--> --}}
    <section class="sale">
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
    </section>
    {{-- <!-- Lenses Section--> --}}
    <section class="product-2">
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
    </section>
    {{-- <!-- Divider Section--> --}}
    <section class="divider">
      <div class="container text-center">
        <p class="h5">New Arrival Collections</p>
        <h2>For your perfect photos</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p><a href="#" class="btn btn-white">Learn More</a>
      </div>
    </section>
    {{-- <!-- Newsletter Section--> --}}
    <section class="newsletter">
      <div class="container">
        <div class="row">
          <div class="ml-auto mr-auto col-lg-8 text-center">
            <div class="form">
              <p class="h5"><span class="text-primary">Special offers </span>for subscribers</p>
              <h2>New Offers Every Week <span class="text-primary">& </span><br>Discount System <span class="text-primary">&  </span>Best hot prices</h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, error explicabo commodi dolor ex perferendis.</p>
              <form>
                <input id="email" type="email" name="email" placeholder="Enter your email address">
                <input type="submit" value="Subscribe" class="btn btn-unique">
              </form>
            </div>
            <div class="social">
              <h2>We are social</h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laborum nesciunt cu.</p>
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
  </div>
  {{-- <!-- Search Panel--> --}}

  <div class="search-overlay">
    <div class="search-inner d-flex justify-content-center align-items-center">
      <div class="search-close"><i class="icon-close"></i></div>
      <div class="container">
        <div class="form-holder">
          <form class="d-flex">
            <input type="search" placeholder="What are you looking for...">
            <button type="submit" class="search text-primary text-uppercase">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  

@endsection