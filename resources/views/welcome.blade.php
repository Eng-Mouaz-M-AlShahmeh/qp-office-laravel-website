@extends('master.layout')

@section('title', 'Hiring site , attracting The best Talent')

@section('content')


@include('master.main-hero')

            {{-- <section id="hero" style="height: 80%;"> --}}

            <div class="hero">

<div  class="d-flex justify-content-center m-5">
<h4 style="margin-top: 50px;">{{ __('translate.ImportantNotes') }}</h4>
</div>



<br/> <br/>


<div class="container">

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule1') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule2') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule3') }}
</p>
</div>


<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule4') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule5') }}
</p>
</div>


<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule6') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule7') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule8') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule9') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule10') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule11') }}
</p>
</div>

<div class="d-flex justify-content-start">
<p>
    {{ __('translate.Rule12') }}
</p>
</div>

</div>

</div>

{{-- </section> --}}





@endsection

