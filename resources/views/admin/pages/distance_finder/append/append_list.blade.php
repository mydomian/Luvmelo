@forelse ($employees as $client)
<div class="col-md-4 py-1 employee-data" style="cursor: pointer" data-street="{{$client->street}}" data-appartment="{{$client->appartment}}" data-city="{{$client->city}}" data-state="{{$client->state}}" data-zip="{{$client->zip_code}}">
    <div class="row bgw-br15 client-card-custom">
        <div class="col-md-4">
            <img src="{{ asset('storage/admin/assets/image/Mask2.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 p-0">
            <small class="">{{$client->name}}</small>
            <div class="">
                <img src="{{ asset('storage/admin/assets/image/Icon.png') }}" class="section-2-icon" alt="">
                <span class="custom-paragraph-color f10">{{$client->street}}, {{$client->appartment}}, {{$client->city}}, {{$client->state}}</span>
            </div>
        </div>
    </div>
</div>
@empty
<p class="text-danger mt-3">No employee Found!</p>
@endforelse

<script>
    //employee data
    $('.employee-data').on('click',function(){
           var street = $(this).attr('data-street');
           var appartment = $(this).attr('data-appartment');
           var city = $(this).attr('data-city');
           var state = $(this).attr('data-state');
           var zip = $(this).attr('data-zip');
           var address = street+', '+appartment+', '+city+', '+state;
           $('.address').text(address)
           $('.emp-list').collapse('hide')
        });
</script>