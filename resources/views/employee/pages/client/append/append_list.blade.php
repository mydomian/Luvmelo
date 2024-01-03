@forelse ($clients as $client)
<div class="col-md-4 count">
 <div class="row mt-4 bgw-br15 client-card-custom shadow ">
     <div class="col-md-4 p-2 media-quary-width-30">
         <img src="{{asset('storage/admin/assets/image/Mask2.png')}}" class="section-1-img" alt="">
     </div>
     <div class="col-md-7 p-2 media-quary-width-40">
         <div class="">
             <small class="text-capitalize">{{$client->client_assign->name}}</small>
         </div>
         <div class="custom-paragraph-color display-6 f11">{{$client->client_assign->service->service_name}}</div>
         <div class="">
             <img src="assets/image/Icon.png" class="section-2-icon" alt="">
             <span class="custom-paragraph-color f10 text-capitalize">{{$client->client_assign->city}}, {{$client->client_assign->state}}</span>
         </div>
     </div>
 </div>
</div>
@empty
<p class="text-danger mt-3">No Client Found!</p>
@endforelse
