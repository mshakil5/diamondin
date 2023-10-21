@extends('layouts.master')

@section('content')


<section class="about-banner bg-light">
  <div class="container-fluid px-0">
      <div class="row">
          <img src="{{ asset('assets/frontend/images/626-1600x550.jpg')}}" class="img-fluid">
      </div>
  </div>
</section>

<section class="spacer bg-dark text-center" id="about">
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto ">
              <h2 class=" text-center txt-primary fw-bold">
                  Welcome to <span class="txt-primary">Diamons Inn</span>
              </h2>
          </div>
          <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, illo, laborum,
              omnis officiis asperiores hic fuga voluptatum autem ea debitis itaque repudiandae officia sequi ab
              veritatis natus nobis praesentium ex.</p>
      </div>
  </div>
</section>

<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h3 class="my-3 title-global">Local Attraction</h3>
              </div>
            <div class="col-md-9 mx-auto">
                
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="card shadow-sm mx-auto mb-3">
                          <img src="{{ asset('assets/frontend/images/d1.jpg')}}">
                          <h4 class="text-center my-3 fw-bold mb-1">ASF Rahman</h4>
                          <p class="px-3 pb-3 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, velit ad aut facere cupiditate excepturi. 
                              
                          </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="card shadow-sm mx-auto mb-3">
                          <img src="{{ asset('assets/frontend/images/d1.jpg')}}">
                          <h4 class="text-center my-3 fw-bold mb-1">ASF Rahman</h4>
                          <p class="px-3 pb-3 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, velit ad aut facere cupiditate excepturi. 
                              
                          </p>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="card shadow-sm mx-auto mb-3">
                          <img src="{{ asset('assets/frontend/images/d1.jpg')}}">
                          <h4 class="text-center my-3 fw-bold mb-1">ASF Rahman</h4>
                          <p class="px-3 pb-3 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, velit ad aut facere cupiditate excepturi. 
                          </p>
                      </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="card shadow-sm mx-auto mb-3">
                          <img src="{{ asset('assets/frontend/images/d1.jpg')}}">
                          <h4 class="text-center my-3 fw-bold mb-1">ASF Rahman</h4>
                          <p class="px-3 pb-3 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, velit ad aut facere cupiditate excepturi. 
                          </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')


<script>
    
</script>

@endsection