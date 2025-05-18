@extends('essentials.navbar')
@section('title', 'About')
@section('content')
<section class="about_us  w_100 h_83vh">
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

<section class="mission_vision w_100 padding_v10 primary_font padding_s5 grid col_2 justify_sb bg_light">
    <h2 class="line_h95">Mission & <br> Values</h2>
    <h5 class="font_w500">At Next Page, our mission is to simplify the U.S. visa journey for every Nepali applicant. We believe in honest guidance, expert support, 
        and treating each case with personal care. Whether you're applying for a visit, work, or student visa — we’re here to walk with you, every step of the way.
        <br><br>
        Our vision is to become Nepal’s most trusted name in U.S. visa consultation — not by making promises, but by delivering results. We aim to build a community where every dream of going abroad is
         approached with clarity, confidence, and integrity.
    </h5>
</section>

@include('Sections.WhyUs')

@include('Sections.about_page.teamSection')

@endsection