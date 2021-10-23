@extends('master.layout')
@section('title', 'JOB Seeker')
@section('page-title', 'JOB Seeker')

@section('content')
@include('master.header-pages')

<div class="container">
    <!-- CandidateListing SECTION -->
    <section id="contact" style="height: 100%;">
     <div class="row mx-5">
         <div class="col-4 " style="padding: 25px;">
             <div class="accordion" id="accordionExample">
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
                         <p style="color: green;"> <span><i class="fas fa-plus"></i> </span> {{ __('translate.SeeMore') }} </p>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingElevenn">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElevenn" aria-expanded="false" aria-controls="collapseElevenn">
                        {{ __('translate.AcademicLevel') }} 
                       </button>
                     </h2>
                     <div id="collapseElevenn" class="accordion-collapse collapse" aria-labelledby="headingElevenn" data-bs-parent="#accordionExample">
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
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingElevenb">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElevenb" aria-expanded="false" aria-controls="collapseElevenb">
                        {{ __('translate.Age') }}
                       </button>
                     </h2>
                     <div id="collapseElevenb" class="accordion-collapse collapse" aria-labelledby="headingElevenb" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <div class="form-check mt-2">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                             <label class="form-check-label" for="flexRadioDefault1">
                                {{ __('translate.Years') }} 22 - 18
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                             <label class="form-check-label" for="flexRadioDefault2">
                                {{ __('translate.Years') }} 27 - 23
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                             <label class="form-check-label" for="flexRadioDefault3">
                                {{ __('translate.Years') }} 32 - 28
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                             <label class="form-check-label" for="flexRadioDefault4">
                                {{ __('translate.Years') }} 37 - 33
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                             <label class="form-check-label" for="flexRadioDefault5">
                                {{ __('translate.Years') }} 42 - 38
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                             <label class="form-check-label" for="flexRadioDefault6">
                                {{ __('translate.Years') }} 47 - 43
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
                         <label for="customRange3" style="color: #f6931f;" class="form-label">1850-3868</label>
                         <input type="range" class="form-range" style="color: 37a000;" min="1850" max="3868" step="10" id="customRange3">
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
               </div>
         </div>
     <div class="col-8" style=" padding: 25px;">
         <div class="row">
             <div class="col-6" style=" padding: 10px;">
                 <h2 class="text-secondary" style="font-size: 20px;" data-aos="fade-up">1 {{ __('translate.CandidatesFound') }} </h2>
                 <h2 class="text-secondary"  style="font-size: 16px;">{{ __('translate.DisplayedHere') }}: 1 - 1 {{ __('translate.Candidates') }}</h2>
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
         </div>
             <div class="card p-3" onclick="window.location.href='{{ route('candidate',app()->getLocale()) }}';">
                 <div class="row">
                     <div class="col-2">
                         <img src="data:image/jpg;base64,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" 
                         width="100"
                         class="rounded-circle" alt="avatar">
                     </div>
                     <div class="col-8">
                         <h2  style="font-size: 15px;">فهد القور <i class="fas fa-check-circle" style="color: #ffbb00;"></i></h2>
                         <p>   <span style="font-size: 10px;">  المملكة العربية السعودية <i class="fas fa-map-marker"></i> </span> <span style="font-size: 10px;"> | محاضر  </span>  <span style="font-size: 10px;"> | <i class="fas fa-filter"></i> Teaching and Academics </span> </p>
                     </div>
                     <div class="col-2 d-flex justify-content-center">
                             <button onclick="window.location.href='#';" class="btn btn-outline-success" style="font-size: 10px; height: 50px;">
                                 <i class="fas fa-list"></i> {{ __('translate.SaveCandidate') }}
                             </button>
                     </div>
                 </div>
             </div>
     </div>
 </div>
 </section>
 <!-- CandidateListing SECTION END -->
</div>


@endsection