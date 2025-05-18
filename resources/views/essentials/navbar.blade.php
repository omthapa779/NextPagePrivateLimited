<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', ' ') . Next Page Private Limited </title>
    <link rel="stylesheet" href="{{ asset('./css/Global.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/specifics.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>

    <div class="navbar w_100 h_15vh padding_s5 flex justify_sb mtop_2vh">
        <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo for Next Page Pvt. Ltd." class="h_100">

        <div class="link_holder_nav flex align_c h_100 gap_1vw primary_font ">
            <h4 class="font_w500">Home</h4>
            <h4 class="font_w500">About</h4>
            <h4 class="font_w500">Services</h4>
            <h4 class="font_w500">FAQ</h4>
            <h4 class="font_w500">Contact</h4>
            <h4 class="font_w500 mobile_menu"><i class="ri-menu-line"></i></h4>
        </div>
    </div>
    <div class="main_container w_100">
      @yield('content')
    </div>
    @include('essentials.footer')
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
<script src="{{ asset('./scripts/logic.js') }}"></script>
</html>