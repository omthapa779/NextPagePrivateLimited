@extends('essentials.navbar')
@section('title', 'About')
@section('meta_description', 'Learn more about Next Page Pvt. Ltd., Nepal\'s trusted name in USA visa consulting.')
@section('meta_keywords', 'About Next Page, Visa Consultancy, Nepal')
@section('meta_author', 'Next Page Pvt. Ltd.')
@section('content')
<section class="about_us w_100 h_83vh padding_s5 primary_font grid col_2 justify_sb gap_5vw">
    <div class="left_side w_100 h_100 flex_cl justify_c gap_2vw">
        <h2 class="line_h95">About <br> <span class="secondary_color">Next Page</span></h2>
        <h4 class="font_w500">At NextPage, we simplify the complex world of immigration and global opportunities. Whether you're looking to move to the U.S.,
            apply for a tourist or student visa, or expand your business, our team of expert consultants provides clear, actionable guidance tailored to your needs.</h4>

            <ul>
                <li><h5 class="font_w500 light_color ">Green Card Applications</h5></li>
                <li><h5 class="font_w500 light_color ">Work Visas (H-1B, L-1, E. etc.)</h5></li>
                <li><h5 class="font_w500 light_color ">Family-Based Immigration</h5></li>
                <li><h5 class="font_w500 light_color ">Tourist Visas (B-1/B-2)</h5></li>
                <li><h5 class="font_w500 light_color ">Student Visas (F-1, J-1)</h5></li>
                <li><h5 class="font_w500 light_color ">•	Visitor Visas</h5></li>
            </ul>
    </div>
    <div class="right_side w_100 h_100 flex_cl justify_c align_c">
        <img src="{{ asset('./resources/images/team2.jpg') }}" alt="Counselling | Next Page Private Limited" class="w_100 h_100 obj_contain">
    </div>
</section>

<section class="mission_vision w_100 padding_v10 primary_font padding_s5 grid col_2 justify_sb bg_light">
    <h2 class="line_h95">Mission & <br> Values</h2>
    <h5 class="font_w500">Our mission is to ensure the secure and efficient entry of foreign nationals by processing visa applications in strict accordance with national immigration laws.
        <br><br>
        Our vision is to deliver exceptional outcomes for every individual who chooses our services. We are committed to upholding the highest standards of excellence in all our endeavors, creating a positive and lasting impact for our clients..
    </h5>
</section>

@include('Sections.WhyUs')

@include('Sections.about_page.teamSection')

@endsection