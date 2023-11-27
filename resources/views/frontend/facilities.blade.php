@extends('layouts.master')

@section('content')

<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div>
                    <section class="branch spacer bg-light">
                        <div class="container">
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-8 mx-auto ">
                                    <h2 class="title-global text-center">
                                        Our <span class="txt-primary"> Facilities</span>
                                    </h2>
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="card shadow-sm p-3 bg-dark text-white mb-3">
                                        <div class="bg-light p-2 d-block rounded-2">
                                            <img src="{{ asset('assets/frontend/images/logo.png')}}" class="img-fluid w-100" alt="">
                                        </div>
                                        <ul class="list-theme ms-3 mb-2">
                                                 <li> Toiletries  </li>
                                             <li> Hair-dryer </li>
                                             <li> Free WIFI </li>
                                            <li> Mini Fridge   </li>
                                           <li> Tea/coffee Refreshments </li>
                                             <li> Kettle </li>
                                           <!-- <li> Fan </li>
                                            <li> Portable Heater </li> -->
                                            <li> Non-Smoking Room </li>
                                          <li> 24 hour call service </li>
                                            <li> Freeview TV </li>
                                           <li> Towels </li>
                                            <li> Iron </li>
                
                                        </ul>
                                        <p class="text-center mb-3 text-white">
                                            <b class="txt-primary">Branch Location:</b> <br> 39 Monkgate, York YO31 7PB, United Kingdom 
                                        </p>
                                        <p class="text-center mb-3 text-white">For Booking Call Us Now: 07340631122,07778529048</p>
                                        <a href="https://diamondsinn.co.uk" target="_blank" class="btn-theme text-center d-block"> Visit Here </a>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                
                                
                
                            </div>
                        </div>
                    </section>
                </div>
                <div class="about-right ">
                    
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