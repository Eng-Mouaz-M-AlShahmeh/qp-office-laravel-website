@extends('master.layout')
@section('title', 'Jobs')
@section('page-title', 'Job')

@section('content')
@include('master.header-pages')



<div class="container">
    <!-- Job SECTION -->
    <section id="contact" style="height: 100%;">
     <div class="row mx-5">
      <div class="col-12 card mt-5">
         <div class="row">
             <div class="col-3" style="padding: 25px;">
                 <input type="text" name="keysearch1" id="keysearch1" class="form-control"
                 placeholder="{{ __('translate.JobTitle') }}">
             </div>
             <div class="col-3" style="padding: 25px;">
                 <input type="text" name="keysearch2" id="keysearch2" class="form-control"
                 placeholder="{{ __('translate.CityState') }}">
             </div>
             <div class="col-3" style="padding: 25px;">
                 <select class="form-select" aria-label="Default select example">
                     <option selected>{{ __('translate.SelectSector') }}</option>
                     <option value="Accounting and Auditing">Accounting and Auditing</option>
                     <option value="Administration">Administration</option>
                     <option value="Architecture">Architecture</option>
                   </select>
             </div>
             <div class="col-3" style="padding: 25px;">
                 <button onclick="window.location.href='#';" class="btn btn-success" >
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
      </div>
         <div class="col-4 " style="padding: 25px;">
             <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button bg-primary text-white " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <i class="far fa-envelope mx-3 text-white"></i>{{ __('translate.EmailMeNewJobs') }}
                     </button>
                   </h2>
                   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                         <input type="text" name="jobAlertName" id="jobAlertName" class="form-control"
                         placeholder="{{ __('translate.JobAlert') }}">
                         <input type="text" name="email" id="email" class="form-control mt-2"
                         placeholder="example@email.com">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Daily') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.Weekly') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.Fortnightly') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Monthly') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                {{ __('translate.Biannually') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                {{ __('translate.Annually') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                             <label class="form-check-label" for="flexRadioDefault7">
                                {{ __('translate.Never') }} 
                             </label>
                         </div>
                         <div class="col-12 mt-3 d-flex justify-content-center" style="padding: 25px;">
                             <button onclick="window.location.href='#';" class="btn btn-success" >
                                {{ __('translate.CREATEALERT') }}
                             </button>
                         </div>
                     </div>
                   </div>
                 </div>
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{ __('translate.Locations') }}
                     </button>
                   </h2>
                   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                         <strong>{{ __('translate.Country') }}</strong>
                         <div class="col-12" style="padding: 25px;">
                             <select class="form-select" aria-label="Default select example">
                                 <option selected>{{ __('translate.SelectCountry') }}</option>
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Albania">Albania</option>
                                 <option value="Algeria">Algeria</option>
                               </select>
                         </div>
                         <strong>{{ __('translate.SelectState') }}</strong>
                         <div class="col-12" style="padding: 25px;">
                             <select class="form-select" aria-label="Default select example">
                                 <option selected>{{ __('translate.SelectState') }}</option>
                                 <option value="State1">State1</option>
                                 <option value="State2">State2</option>
                                 <option value="State3">State3</option>
                               </select>
                         </div>
                         <div class="col-12 mt-3 d-flex justify-content-center" style="padding: 25px;">
                             <button onclick="window.location.href='#';" class="btn btn-success" >
                                {{ __('translate.SUBMIT') }}
                             </button>
                         </div>
                     </div>
                   </div>
                 </div>
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{ __('translate.DatePosted') }}
                     </button>
                   </h2>
                   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.LastHour') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.Last24hours') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Last7days') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                {{ __('translate.Last14days') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                {{ __('translate.Last30days') }}
                             </label>
                         </div>
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.All') }}
                             </label>
                         </div>
                     </div>
                   </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="headingfour">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{ __('translate.JobType') }}
                       </button>
                     </h2>
                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Freelance') }}
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.FullTime') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.PartTime') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Temporary') }} 
                             </label>
                         </div>
                     </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFive">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        {{ __('translate.Sector') }} 
                       </button>
                     </h2>
                     <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                 Accounting and Auditing
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                 Administration
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                 Architecture
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                 Banking
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                 Beauty and Fashion
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                 Chemical Engineering
                             </label>
                         </div>
                         <p style="color: green;"> <span><i class="fas fa-plus"></i> </span> {{ __('translate.SeeMore') }}</p>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSix">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        {{ __('translate.Salary') }}
                       </button>
                     </h2>
                     <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                             <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                             <label class="btn btn-outline-primary" for="btnradio1">{{ __('translate.Monthly') }}</label>
                             <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                             <label class="btn btn-outline-primary" for="btnradio2">{{ __('translate.Weekly') }}</label>
                             <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                             <label class="btn btn-outline-primary" for="btnradio3">{{ __('translate.Hourly') }}</label>
                           </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSeven">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        {{ __('translate.CareerLevel') }}
                       </button>
                     </h2>
                     <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Manager') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.Officer') }}  
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.Student') }}   
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Executive') }}  
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                {{ __('translate.Others') }}  
                             </label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingEight">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        {{ __('translate.Experience') }} 
                       </button>
                     </h2>
                     <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Fresh') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.LessThan1Year') }}  
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.Years2') }}  
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Years3') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                {{ __('translate.Years4') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                {{ __('translate.Years5') }}  
                             </label>
                         </div>
                         <p style="color: green;"> <span><i class="fas fa-plus"></i> </span> {{ __('translate.SeeMore') }}</p>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingNine">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        {{ __('translate.Gender') }} 
                       </button>
                     </h2>
                     <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Male') }} 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.Female') }}  
                             </label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTen">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        {{ __('translate.Industry') }}  
                       </button>
                     </h2>
                     <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                 Development
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                 Management
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                 Finance
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                 HTML Departement 
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                 SEO
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                Banking
                             </label>
                         </div>
                         <p style="color: green;"> <span><i class="fas fa-plus"></i> </span> {{ __('translate.SeeMore') }} </p>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingEleven">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        {{ __('translate.Qualifications') }}
                       </button>
                     </h2>
                     <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                       <div class="accordion-body">  
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                 Certificate
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                 Diploma
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                 Associate
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                 Degree Bachelor
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                 Associate
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                 Master’s Degree
                             </label>
                         </div>
                         <p style="color: green;"> <span><i class="fas fa-plus"></i> </span> {{ __('translate.SeeMore') }}</p>
                       </div>
                     </div>
                   </div>
               </div>
         </div>
     <div class="col-8" style=" padding: 25px;">
         <div class="row">
             <div class="col-4" style=" padding: 10px;">
                 <h2 class="text-secondary" style="font-size: 20px;" data-aos="fade-up">0 {{ __('translate.JobsFound') }}</h2>
                 <h2 class="text-secondary"  style="font-size: 16px;">{{ __('translate.DisplayedHere') }}: 0 {{ __('translate.Jobs') }}</h2>
             </div>
             <div class="col-3" style=" padding: 10px;">
                 <div class="row">
                 <div class="col-3">
                 <i class="fas fa-sort"></i>
             </div>
             <div class="col-9">
                 <select class="form-select" style="font-size: 10px;" aria-label="Default select example">
                     <option selected style="font-size: 10px;">{{ __('translate.MostRecent') }}</option>
                     <option style="font-size: 10px;" value="Featured">{{ __('translate.Featured') }}</option>
                     <option style="font-size: 10px;" value="Alphabet Order">{{ __('translate.AlphabetOrder') }}</option>
                     <option style="font-size: 10px;" value="Most Viewed">{{ __('translate.MostViewed') }}</option>
                   </select>
                 </div>
             </div>
             </div>
             <div class="col-3" style=" padding: 10px;">
                 <div class="row">
                     <div class="col-3">
                         <i class="fas fa-sort"></i>
                     </div>
                     <div class="col-9">
                         <select class="form-select" style="font-size: 10px;" aria-label="Default select example">
                             <option selected style="font-size: 10px;">10 Per Page</option>
                             <option style="font-size: 10px;" value="20 Per Page">20 Per Page</option>
                             <option style="font-size: 10px;" value="30 Per Page">30 Per Page</option>
                             <option style="font-size: 10px;" value="50 Per Page">50 Per Page</option>
                             <option style="font-size: 10px;" value="70 Per Page">70 Per Page</option>
                             <option style="font-size: 10px;" value="100 Per Page">100 Per Page</option>
                             <option style="font-size: 10px;" value="200 Per Page">200 Per Page</option>
                         </select>
                     </div>
                 </div>
             </div>
             <div class="col-2 d-flex justify-content-center" style=" padding: 10px;">
                     <button onclick="window.location.href='#';" class="btn btn-success" style="font-size: 10px; background-color: #f8991b; height: 30px;" >
                         <i class="fas fa-rss"></i>  RSS {{ __('translate.Feed') }}
                     </button>
             </div>
         </div>
         <div class="row">
             <p>
                 <strong>{{ __('translate.NoRecord') }} </strong> {{ __('translate.Sorry') }} <small style="color: red;">{{ __('translate.ResetFilters') }} </small>
             </p>
         </div>
     </div>
 </div>
 </section>
 <!-- Job SECTION END -->
</div>


@endsection