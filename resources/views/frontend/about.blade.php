@extends('layouts.master')

@section('content')

<style>
    p{
        color: white;
    }
</style>
<section class="spacer bg-dark" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <p class="text-light d-block mt-3  text-center">
                    <img src="{{ asset('assets/frontend/images/diamond.png')}}" width="300px">
                </p>
            </div>
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center"  style="color: #bf00db;">Welcome to Diamonds INN <br> </h2>
            </div>
            <div class="col-md-9 mx-auto text-justify">
                <div class="about-right ">
                   <p><b>Diamonds Inn</b> is a 3 storey Grade 2 listed Georgian Town House dating back to 1794. The guest house presents itself as an ideal base for you to explore the historical city of York, Monkgate is just 450 yards from York Minister and the city walls is within 2 minutes walking distance.

                    <br/><br/>Almost, at the heart of York City, you can stroll to all of York's amazing and historical sites and attractions. York National Art Gallery, National Railway Museum, York Minister, Bar Walls are only few mentioned that are minutes’ walk away and many, many more to explore as you venture through this beautiful Viking city. 

                    <br/><br/><b>Diamonds Inn</b> is the perfect destination if you want everything at your doorstep. Enjoy this historical city with modern twist, with many chic, classic restaurants, bespoke cafes, trendy bars and traditional pubs. 

                    <br/><br/>Choose the best suited rooms for your stay from any of our 11 rooms of double en-suite, triple en-suite, or for a little extra space choose a family en-suite. Whichever you choose, your stay will be made complete with a comfy bed, free Wi-Fi, Freeview TV and complimentary refreshments. A mini fridge is provided for your convenience. 

                    <br/><br/>Our team at <b>Diamonds Inn</b> will be more than happy to guide you at any of the famous destinations in the historical City of York. We will also strive to maintain a courteous and friendly atmosphere during your stay at our guest house.</p>
                    </br>
                </br>
             {{-- <p style= "color:#FF00ff";>   <b>Check-in time:</b>		  2:00 pm</br>
                <b>Check-out time: </b>	10.30 am</p>
                </br>
                <p><b>Address & contact information:</b> 39 Monkgate York  YO31 7PB</p>

                <p style="color:#FF00ff";><b>For Booking Call:</b> 07340631122, 07778529048, 07717941122 E:     diamondsinnyork@gmail.com

                </p>
                </br>
           <p> <b> Public Parking:</b>  <a href="https://www.york.gov.uk/directory-record/421/monk-bar-car-park" target = "_ blank", style="color:#ff00ff;"> Monk Bar car park - Parking directory – City of York Council</a></p> --}}
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