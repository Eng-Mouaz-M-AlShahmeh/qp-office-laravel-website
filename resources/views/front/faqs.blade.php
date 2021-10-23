@extends('master.layout')
@section('title', "FAQ'S")
@section('page-title', "FAQ'S")

@section('content')
@include('master.header-pages')



<div class="container">

<!-- Faqs SECTION -->
<section id="contact" style="height: 100%;">
 <div class="row mx-5">
     <div class="col-4 " style="padding: 25px;">
         <h2 class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 16px;" data-aos="fade-up">{{ __('translate.FindYourQuestion') }}</h2>
         <div class="col-4 ">
             <input type="text" name="keyword" id="keyword" class="form-control"
                 placeholder="{{ __('translate.Keyword') }}">
         </div>
         <h2 class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 22px; margin-top: 15px;" data-aos="fade-up">{{ __('translate.DontFindYourQuestion') }} </h2>
         <hr>
         <h2 class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px;" data-aos="fade-up"> {{ __('translate.NoProblem') }}</h2>
         <button onclick="window.location.href='{{ route('contact',app()->getLocale()) }}';" class="btn btn-secondary" >
            {{ __('translate.CONTACTUS') }}
         </button>
         <h2 class="mb-4 text-center text-secondary d-flex justify-content-start" style="font-size: 20px; margin-top: 15px;" data-aos="fade-up">{{ __('translate.RecentQuestions') }} </h2>
         <hr>
         <h2 style="font-size: 16px;"><a href="https://www.gosi.gov.sa/GOSIOnline/Check_Employment_Status">
            {{ __('translate.q1') }}
         </a>
         </h2>
         <h2 style="font-size: 16px;"><a href="https://www.gosi.gov.sa/GOSIOnline/SANED_Eligibility_Check">
            {{ __('translate.q2') }}
         </a>
         </h2>
         <h2 style="font-size: 16px;"><a href="https://www.gosi.gov.sa/GOSIOnline/Contributor_registration">
            {{ __('translate.q3') }}
         </a>
         </h2>
     </div>
 <div class="col-8" style=" padding: 25px;">
     <h2 class="mb-4  text-secondary" style="font-size: 30px;" data-aos="fade-up">{{ __('translate.FREQUENTLYASKEDQUESTIONS') }}</h2>
     <h2 style="font-size: 16px;"><a href="https://eservices.taqat.sa/Eservices_Individual/Home.aspx">
        {{ __('translate.q4') }}
     </a>
     </h2>
     <h2 style="font-size: 16px;">
     <a href="https://hrdf.org.sa/program">
        {{ __('translate.q5') }}
     </a>
 </h2>
<h2 style="font-size: 16px;">
     <a href="https://eservices.taqat.sa/eservices_individual/home.aspx">
        {{ __('translate.q6') }} 
     </a>
 </h2>
<h2 style="font-size: 16px;">
     <a href="https://www.taqat.sa/web/guest/doroob">
        {{ __('translate.q7') }}  
     </a>
 </h2>
<h2 style="font-size: 16px;">
     <a href="Q. TAQAT">
        {{ __('translate.q8') }} 
     </a>
 </h2>
 <h2 style="font-size: 16px;">
     <a href="https://eservices.taqat.sa/eservices_individual/home.aspx">
        {{ __('translate.q9') }}  
     </a>
 </h2>
 <h2 style="font-size: 16px;">
     <a href="https://www.hrdf.org.sa/Home">
        {{ __('translate.q10') }}  
     </a>
 </h2>
<h2 style="font-size: 16px;">
     <a href="https://www.gosi.gov.sa/GOSIOnline/Contributor_registration">
        {{ __('translate.q11') }}   
     </a>
 </h2>
<h2 style="font-size: 16px;">
     <a href="https://www.gosi.gov.sa/GOSIOnline/SANED_Eligibility_Check">
        {{ __('translate.q12') }} 
         
     </a>
 </h2>
 <h2 style="font-size: 16px;">
     <a href="https://www.gosi.gov.sa/GOSIOnline/Check_Employment_Status">
        {{ __('translate.q13') }}  
     </a>
 </h2>
     <h2 class="mb-4 mt-4 text-secondary" style="font-size: 30px;" data-aos="fade-up">{{ __('translate.GeneralInquiries') }}</h2>
     <h2 class="mb-4 text-secondary" style="font-size: 25px;" data-aos="fade-up">{{ __('translate.NoQuestionFound') }}</h2>
 </div>
</div>
</section>
<!-- Faqs SECTION END -->
</div>


@endsection