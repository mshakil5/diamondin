@extends('layouts.master')

@section('content')

<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h2 class="my-3 title-global">Our Rates</h2>
              </div>
            <div class="col-md-9 mx-auto">
              <div class="row mb-2">
                <p><iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Base Rate: free cancellation up to 7 days before arrival.</p>
                <p><iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Non-Refundable rate: Pay now/No amends of refund.</p>
                <p><iconify-icon class="" icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>Semi Flex – ONLY on direct bookings.  Pay now and 40% refundable on cancellations 3 days before arrival.</p>
              </div>

              <h4 class="my-3 title-global">For Example</h4>
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
                        <td>Family room-Standard-Ensuite</td>
                        <td>£50</td>
                        <td>£50</td>
                        <td>10% discount</td>
                      </tr>
                      {{-- <tr>
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
                      </tr> --}}
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