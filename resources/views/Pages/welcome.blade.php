@extends('essentials.navbar')
@section('title', 'Home')
@section('content')
<section class="hero_section h_83vh w_100 flex padding_s5 position_relative">
    <div class="hero_content w_100 h_100 flex_cl justify_fe pd_bottom5">
        <h1 class="primary_font line_h90">THE LEADING <br> <span class="secondary_color ">USA VISA</span> <br>CONSULTANCY</h1>
        <div class="flex gap_1vw mtop_2vh">
            <x-button variant="button_primary">Get Started</x-button>
            <x-button variant="button_secondary">Book a Consultation</x-button>
        </div>
    </div>
    <div class="image_holder w_100 h_100 flex_cl justify_fe align_fe">
         <img src="{{ asset('./resources/images/hero_page.png') }}" alt="Statue of Liberty Handdrawn | Next Page Private Limited" class=" h_100 obj_contain ">
    </div>
</section>
<section class="about_us bg_light w_100 h_100vh">
    <div class="about_content grid row_2 w_100 h_100 align_c primary_font padding_s5">
        <h1 class="line_h90"><span class="secondary_color">ABOUT</span> <br> NEXT PAGE</h1>
        <div class="about_paragraph w_100 h_100 flex justify_fe align_c">
            <h4 class="primary_font w_40 font_w500">Next Page Pvt. Ltd. stands as Nepal's premier U.S. visa consultancy, dedicated to simplifying the complex visa process. 
                Our team of experts ensures personalized guidance tailored to your unique journey.</h4>
        </div>
    </div>
    <div class="about_image w_100 h_100 flex justify_fe padding_s5 padding_v10">
        <img src="{{ asset('./resources/images/team.jpg') }}" alt="Team | Next Page Private Limited" class="w_80 h_70 obj_contain opacity_40 mtop_5vh">
    </div>
</section>

@include('Sections.services')

@endsection