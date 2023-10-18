@extends('layouts.master')

@section('content')

<section class="about py-5">
    <div class="container">

        <form action="{{route('survey.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-9 mx-auto text-center">

                    @if ($message = Session::get('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="about-right ">
                        <h2 class="title-global">Survey</h2>
                        <p>Thank you for staying our guest house.
                        <br/> We would like to take part in this short survey to tell us what we are doing well and where we need to do better
                    </p>
                    
                    <br>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="text-align: center">Excellent</th>
                                <th style="text-align: center">Good</th>
                                <th style="text-align: center">Not good <br> not poor</th>
                                <th style="text-align: center">Poor</th>
                                <th style="text-align: center">Very poor</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1. Please rate the overall cleanliness.</td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="overall_cleanliness" value="5" id="" ></td>
                            </tr>
                            <tr>
                                <td>2. Please rate the customer service provided by our staff.</td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="customer_service" value="5" id="" ></td>
                            </tr>
                            <tr>
                                <td>3. Please rate the comport of your room.</td>
                                <td style="text-align: center"><input type="radio" name="comport" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="comport" value="5" id="" ></td>
                            </tr>
                            <tr>
                                <td>4. Please rate the process of getting in to your room.</td>
                                <td style="text-align: center"><input type="radio" name="process" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="process" value="5" id="" ></td>
                            </tr>
                            <tr>
                                <td>5. Please rate how likely would you recommend us to a family or friend.</td>
                                <td style="text-align: center"><input type="radio" name="recommend" value="1" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="recommend" value="2" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="recommend" value="3" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="recommend" value="4" id="" ></td>
                                <td style="text-align: center"><input type="radio" name="recommend" value="5" id="" ></td>
                            </tr>

                        </tbody>
                    </table>

                    <br>

                    <div class="form-group row">
                        <label for="others" class="col-sm-2 col-form-label">Other Feedback</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="others" name="others" value="">
                        </div>
                    </div>

                </div>
            </div> 

            <div class="row mt-5">
                <div class="col-md-9 mx-auto text-center">
                    <h2 class="title-global">We are giving away a <br> £100 amazon.co.uk gift card as a annual prize draw.</h2>
                    <h4>Draw will take place on <br> December 2023</h4>
                    <p>Please provide your name and address to take part in the draw.</p>
                    <p>We will also update you with any special offers in the future.</p>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}" required >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                        </div>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-success mt-3">Submit</button>


                </div>
            </div>
        </form>


    </div>
</section>


@endsection

@section('script')


<script>
    
</script>

@endsection