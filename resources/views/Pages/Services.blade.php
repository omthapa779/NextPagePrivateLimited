@extends('essentials.navbar')
@section('title', 'Services')
@section('meta_description', 'Explore our comprehensive visa solutions including regular, premium, situational, immigrant, and other specialized visa processing services with next Page Pvt. Ltd.')
@section('meta_keywords', 'Visa Services, Visa Solutions, Regular Visa Processing, Premium Visa Processing, Immigrant Visa, next Page Pvt. Ltd.')
@section('meta_author', 'next Page Pvt. Ltd.')
@section('content')
<section class="hero_section w_100 h_83vh primary_font padding_s5 grid col_2 overflow_hidden">
    <div class="left_service_hero w_100 h_100 flex_cl justify_fs padding_v10">
        <h2 class="line_h100">Our Comprehensive <br> <span class="secondary_color">Visa Solutions</span></h2>
        <h4 class="w_60 font_w500 mtop_5vh service_hero_description ">Whether you're applying for a tourist, work, or student visa, we offer expert guidance tailored to your U.S. immigration goals. Navigate the process with confidence—backed by trusted 
            consultants and a track record of proven success.</h4>
    </div>
    <div class="service_hero_image w_100 h_100 flex justify_c align_c">
        <img src="{{ asset('./resources/images/services_hero.png') }}" alt="Visa Solutions | next Page Private Solution" class="h_100 w_100">
    </div>
</section>

<section class="service_page_holder w_100 h_fc padding_s5 primary_font padding_v10 bg_light">
    <h2 class="line_h100">Visa Processing <br> Packages</h2>

    <div class="packages_holder w_100 h_fc grid col_4 gap_1vw mtop_5vh">
        <div class="package_card w_100 h_fc">
            <h4>Regular Processing
                <br>
                <span class="secondary_color">4702</span>
            </h4>

            <ul class="mleft_10 mtop_5vh">
                <li><h5 class="font_w500">Profile Evaluation</h5></li>
                <li><h5 class="font_w500">Consular Application [ All kind of DS forms ]</h5></li>
                <li><h5 class="font_w500">US Visa Fee Payment</h5></li>
                <li><h5 class="font_w500">Visa Interview Appointment</h5></li>
                <li><h5 class="font_w500">Visa Interview Counselling</h5></li>
            </ul>
        </div>
        
        <div class="package_card w_100 h_fc">
            <h4>Premium Packages
                <br>
                <span class="secondary_color">4703</span>
            </h4>

            <ul class="mleft_10 mtop_5vh">
                <li><h5 class="font_w500">Includes Complete 4702 Package Benefits</h5></li>
                <li><h5 class="font_w500">Evaluate Visa Approval Factors</h5></li>
                <li><h5 class="font_w500">Denial Risk Assessment</h5></li>
                <li><h5 class="font_w500">Custom Plan to Boost Approval Chances</h5></li>
                <li><h5 class="font_w500">Pre/Post Departure Support</h5></li>
            </ul>
        </div>

         <div class="package_card w_100 h_fc">
            <h4>Situational Processing
                <br>
                <span class="secondary_color">4704</span>
            </h4>

            <ul class="mleft_10 mtop_5vh">
                <li><h5 class="font_w500">Tailor-made processing based on individual needs</h5></li>
                <li><h5 class="font_w500">Dynamic pricing</h5></li>
            </ul>
        </div>


         <div class="package_card w_100 h_fc">
            <h4> Visa Renewal
                <br>
                <span class="secondary_color">4704 </span>
            </h4>

            <ul class="mleft_10 mtop_5vh">
                <li><h5 class="font_w500">Consular Application [ All kind of DS forms ]</h5></li>
                <li><h5 class="font_w500">Fee Payment</h5></li>
                <li><h5 class="font_w500">Interview Waiver</h5></li>
                <li><h5 class="font_w500">Dropbox Documentation</h5></li>
            </ul>
        </div>
    </div>
</section>

<section class="immigrant w_100 h_fc padding_s5 primary_font bg_white padding_v10">
    <div class="immigrant_holder grid col_2 gap_2vw">
        <div class="left_immigrant w_100 flex_cl">
            <h2 class="line_h100">Immigrant <br> Visa Services</h2>

            <ul class="mtop_5vh mleft_2vw">
                <h5>Employment-Based:</h5><br>
                <li><h5 class="font_w500 light_color ">Employment First Preference (E1)</h5></li>
                <li><h5 class="font_w500 light_color ">Employment Second Preference (E2)</h5></li>
                <li><h5 class="font_w500 light_color ">Employment Third Preference (E3) Skilled Workers, Professionals, and Unskilled Workers (Other Workers)</h5></li>
            </ul>

              <ul class="mtop_5vh mleft_2vw">
                <h5>IR & Family Sponsored:</h5><br>
                <li><h5 class="font_w500 light_color ">Approval of an I-130 Petition K-3</h5></li>
                <li><h5 class="font_w500 light_color ">Family Members of U.S. Citizens: F1, F3, F4, IR2, CR2, IR5</h5></li>
                <li><h5 class="font_w500 light_color ">Family of LPR: F2A, F2B</h5></li>
                <li><h5 class="font_w500 light_color ">Fiancé(e) to U.S. Citizen & live in U.S K1</h5></li>
                <li><h5 class="font_w500 light_color ">Intl Adoption: IR3, IH3, IR4, IH4</h5></li>
                <li><h5 class="font_w500 light_color ">Spouse of a U.S. Citizen IR1 CR1</h5></li>
            </ul>

              <ul class="mtop_5vh mleft_2vw">
                <h5>Other Immigrants:</h5><br>
                <li><h5 class="font_w500 light_color ">Consular Report of Birth Abroad CRBA</h5></li>
                <li><h5 class="font_w500 light_color ">Diversity Immigrant Visa DV</h5></li>
                <li><h5 class="font_w500 light_color ">Religious Worker R1</h5></li>
                <li><h5 class="font_w500 light_color ">Returning Resident SB</h5></li>
            </ul>
        </div>

        <img src="{{ asset('./resources/images/services/4704.jpg') }}" alt="Immigrant Visa Services | next page Private Limited" class="w_100 h_100 obj_cover">
    </div>
</section>
<section class="services grid col_2 gap_2vw w_100 h_fc padding_s5 primary_font padding_v5">
    <div class="general_services w_100 h_fc bg_light">
        <h3><i class="ri-bard-fill secondary_color"></i> General Services</h3>

          <ul class="mleft_5 mtop_2vh">
                <li><h5 class="font_w500">Consular Application [ All kind of DS forms ]</h5></li>
                <li><h5 class="font_w500">Green Card & Citizenship Guidance</h5></li>
                <li><h5 class="font_w500">US Visa Sponsorship Guidance</h5></li>
                <li><h5 class="font_w500">Visa Profile</h5></li>
                <li><h5 class="font_w500">Expert Counseling & Interview Preparation</h5></li>
                <li><h5 class="font_w500">Appointment Booking</h5></li>
                <li><h5 class="font_w500">Post-Visa Approval Support</h5></li>
                <li><h5 class="font_w500">Travel Planning</h5></li>
                <li><h5 class="font_w500">Eligibility Assessments</h5></li>
                <li><h5 class="font_w500">Business & Investor Visas (E-2, L-1)</h5></li>
                <li><h5 class="font_w500">Student & Exchange Visitor Program [i.e : SEVP - F / M / J]</h5></li>
                <li><h5 class="font_w500">Exhibition Visit Support</h5></li>
            </ul>
    </div>

     <div class="general_services w_100 h_fc bg_light">
        <h3> <i class="ri-survey-line secondary_color "></i> Additional Services</h3>

        <ul class="mleft_5 mtop_2vh">
            <li><h5 class="font_w500">Emergency Requests</h5></li>
            <li><h5 class="font_w500">Lost Visa Cases</h5></li>
            <li><h5 class="font_w500">No-Show Case Handling</h5></li>
            <li><h5 class="font_w500">Accompaniment Requests</h5></li>
            <li><h5 class="font_w500">Special Accommodation</h5></li>
            <li><h5 class="font_w500">Interpreter Requests</h5></li>
        </ul>
    </div>
</section>
@endsection