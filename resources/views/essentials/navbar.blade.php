<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', ' ') . next Page Private Limited </title>
    <link rel="stylesheet" href="{{ asset('./css/Global.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/specifics.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="{{ asset('./resources/favicon.ico') }}" type="image/x-icon">

    <script type="application/ld+json">
       {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('app.name'),
            'url' => 'https://nextpage.com.np',
            'logo' => asset('./resources/images/logo.png'),
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+977-014547347',
                'contactType' => 'Customer Service',
                'areaServed' => 'NP',
                'availableLanguage' => 'English'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    {{-- Meta Tags --}}
    <meta name="description" content="@yield('meta_description', 'next Page Pvt. Ltd. is the leading USA visa consultancy firm in Nepal.')">
    <meta name="keywords" content="@yield('meta_keywords', 'USA Visa, Consultancy, Nepal, Immigration, Student Visa')">
    <meta name="author" content="@yield('meta_author', 'next Page Pvt. Ltd.')">
</head>
<body>
<div class="menu_extended w_100 bg_light overflow_hidden">
    <div class="menu_extended_navbar w_100 h_15vh padding_s5 flex justify_sb mtop_2vh">
         <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo for next Page Pvt. Ltd." class="h_100">

        <div class="link_holder_nav flex align_c h_100 gap_1vw primary_font ">
            <h2 class="font_w500 black_color mobile_menu" onclick="menu_close()"><i class="ri-close-large-line"></i></h2>
        </div>
    </div>
    <div class="menu_extended_links w_100 h_83vh flex_cl justify_sb padding_v10 align_c primary_font">
        <div class="menu_links w_100 h_100 flex_cl justify_c align_c gap_1vw">
            <a href="/"><a href="/"><h2 class="font_w500 text_ac black_color">Home</h2></a>
            <a href="/about-us"><h2 class="font_w500 text_ac black_color">About</h2></a>
            <a href="/services"><h2 class="font_w500 text_ac black_color">Services</h2></a>
            <a href="/FAQ"><h2 class="font_w500 text_ac black_color">FAQ</h2></a>
            <a href="/Contact"><h2 class="font_w500 text_ac black_color">Contact</h2></a>
        </div>
        <div class="copyright_menu mtop_5vh">
            <h4>next Page Private Limited</h4>
        </div>
    </div>
</div>
    <div class="navbar w_100 h_15vh padding_s5 flex justify_sb mtop_2vh">
        <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo for next Page Pvt. Ltd." class="h_100">

        <div class="link_holder_nav flex align_c h_100 gap_1vw primary_font ">
            <a href="/"><a href="/"><h4 class="font_w500 black_color">Home</h4></a>
            <a href="/about-us"><h4 class="font_w500 black_color">About</h4></a>
            <a href="/services"><h4 class="font_w500 black_color">Services</h4></a>
            <a href="/FAQ"><h4 class="font_w500 black_color">FAQ</h4></a>
            <a href="/Contact"><h4 class="font_w500 black_color">Contact</h4></a>
            <h2 class="font_w500 black_color mobile_menu" onclick="menu_extend()"><i class="ri-menu-line"></i></h2>
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