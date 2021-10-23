@extends('master.layout')
@section('title', 'Contact Us')
@section('page-title', 'Contact Us')

@section('content')
@include('master.header-pages')


<div class="container">
    <!-- CONTACT SECTION -->
    <section id="contact" style="height: 100%;">
     <div class="row mx-5">
      <div class="d-flex justify-content-start col-12"><h2 class="mb-4 text-center text-secondary" data-aos="fade-up">{{ __('translate.ContactUs') }}</h2></div>
         <div class="col-4 " style="background-color: #ddd; padding: 25px;">
             <h2 class="mb-4 text-center text-secondary d-flex justify-content-start" data-aos="fade-up">{{ __('translate.ContactInformation') }}</h2>
             <h3 class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px;" data-aos="fade-up">{{ __('translate.ThisOnlyUsedForComplain') }}</h3>
            <p class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px;" data-aos="fade-up"> 
             <i class="fas fa-map-marker-alt"></i>
             {{ __('translate.AddressOffice') }}
            </p>
            <p class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px;" data-aos="fade-up"> 
             <i class="far fa-envelope"></i>
             {{ __('translate.Email') }}: info@qp.sa
            </p>
            <p class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px;" data-aos="fade-up"> 
             <i class="fas fa-sim-card"></i>
             {{ __('translate.Call') }}: 0504757865
            </p>
         </div>
     <div class="col-8" style="background-color: #ddd; padding: 25px;">
         <h2 class="mb-4 text-center text-secondary" data-aos="fade-up">{{ __('translate.ContactInformation') }}</h2>
         <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">
             <div class="row">
                 <div class="col-4">
                     <label for="name" class="form-label">{{ __('translate.YourName') }}<sup class="text-danger">*</sup></label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('translate.YourName') }}"
                         required>
                 </div>
                 <div class="col-4 ">
                     <label for="email" class="form-label">{{ __('translate.YourEmail') }}<sup
                             class="text-danger">*</sup></label>

                     <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                         placeholder="email@email.com" required>
                 </div>
                 <div class="col-4">
                     <label for="subject" class="form-label">{{ __('translate.Subject') }} <sup
                             class="text-danger">*</sup></label>
                     <input type="text" name="subject" id="subject" class="form-control"
                         placeholder="" required>
                 </div>
                 <div class="col-12 my-4">
                     <label for="message" class="form-label">{{ __('translate.YourMessage(optional)') }}</label>
                     <textarea name="message" rows="6" class="form-control" id="message"
                         placeholder="" ></textarea>
                 </div>
             </div>
             <div class="col-lg-5 col-12 mx-auto mt-5">
                 <button type="submit" class="form-control">{{ __('translate.SUBMIT') }}</button>
             </div>
         </form>
     </div>
 </div>
 </section>
 <!-- CONTACT SECTION END -->

  <!-- GOOGLE MAP -->
  <section class="google-map m-5">
     <iframe id="gmap_canvas" class="map-iframe" 
     src="https://maps.google.com/maps?q=24%C2%B049'07.1%22N%2046%C2%B041'11.2%22E&t=&z=13&ie=UTF8&iwloc=&output=embed" 
     width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0"
     scrolling="no" marginheight="0" marginwidth="0"></iframe>
 </section>
 <!-- GOOGLE MAP END -->
</div>


@endsection