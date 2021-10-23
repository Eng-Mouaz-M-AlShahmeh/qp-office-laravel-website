<!-- HERO SECTION -->
<div class="heroText">
    <div class=" d-flex justify-content-center">
            <h2 style="font-size: 2vw; opacity: 0.7; color: white" class="text-secondary-white-color" data-aos="fade-up"
            data-aos-delay="800">
            @yield('page-title')
        </h2>
    </div>             
</div>
<div class="videoWrapper" style="height: 40%;">
    <video autoplay="" loop="" muted="" class="custom-video" style="height: 100%; "
        poster="https://qp.sa/wp-content/uploads/2018/10/employer-detail3-bg.jpg">
    </video>
</div>
<div class="overlay" style="height: 50%;"></div>
<!-- HERO SECTION END -->

<div  style="height: 10%; background-color: black;">
    <div  class="d-flex justify-content-center">
        <p style="color: white; padding: 15px; font-size: 16px;">
            {{ __('translate.Home') }} > <span style="font-size: 14px;">@yield('page-title')</span>
        </p>
    </div>
</div>