@extends('essentials.navbar')
@section('title', 'About')
@section('meta_description', 'Learn more about next Page Pvt. Ltd., Nepal\'s trusted name in USA visa consulting.')
@section('meta_keywords', 'About next Page, Visa Consultancy, Nepal')
@section('meta_author', 'next Page Pvt. Ltd.')
@section('content')
<section class="about_us w_100 h_83vh padding_s5 primary_font grid col_2 justify_sb gap_5vw">
    <div class="left_side w_100 h_100 flex_cl justify_c gap_2vw">
        <h2 class="line_h95">About <br> <span class="secondary_color">next Page</span></h2>
        <h5 class="font_w500">At next Page, we simplify the complex world of immigration and global mobility. Whether you're planning to move to the U.S., apply for a tourist or student visa,
             explore international business opportunities, pursue employment, or file a family-based petition, our team of experienced consultants provides clear, personalized guidance 
             every step of the way. <br><br>
            </h5>

            <ul>
                <h5>We offer nonimmigrant visa (NIV) immigrant visa (IV) Visa Services:</h5><br>
                <li><h5 class="font_w500 light_color ">Documentation, Processing, & Counselling Services</h5></li>
                <li><h5 class="font_w500 light_color ">Temporary is officially known as nonimmigrant visa (NIV)</h5></li>
                <li><h5 class="font_w500 light_color ">Permanent is officially known as immigrant visa (IV)</h5></li>
            </ul>
    </div>
    <div class="right_side w_100 h_100 flex_cl justify_c align_c">
        <img src="{{ asset('./resources/images/team2.jpg') }}" alt="Counselling | next Page Private Limited" class="w_100 h_100 obj_contain">
    </div>
</section>

<section class="mission_vision w_100 padding_v10 primary_font padding_s5 grid col_2 justify_sb bg_light">
    <h2 class="line_h95">Mission & <br> Values</h2>
    <h5 class="font_w500">We believe in treating our work as worship, our workplace as a temple, and our clients with the same devotion and respect one would offer to the divine.
Our vision is to become Nepal’s most trusted, innovative, and authentic U.S. immigration consultancy—empowering individuals and families to access global opportunities with confidence, clarity, and success.

        <br><br>
       At next Page Pvt. Ltd., our mission is to simplify the U.S. visa journey through expert guidance, personalized support, and unwavering ethical standards. We are committed to providing comprehensive, end-to-end immigration solutions—whether for study, work, travel, or permanent relocation—helping our clients achieve their American dream with confidence and peace of mind.
       <br> <br>
       We proudly serve clients across Nepal and around the world.
</section>

@include('Sections.WhyUs')

@include('Sections.about_page.teamSection')

@endsection