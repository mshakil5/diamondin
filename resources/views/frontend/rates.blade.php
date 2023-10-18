@extends('layouts.master')

@section('content')

<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h3 class="my-3">Our Rates</h3>
              </div>
            <div class="col-md-9 mx-auto text-center">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Hotel.com</th>
                        <th scope="col">Booking.com</th>
                        <th scope="col">Direct</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>10%</td>
                        <td>10%</td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>10%</td>
                        <td>10%</td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>10%</td>
                        <td>10%</td>
                        <td>10%</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')


<script>
    
</script>

@endsection