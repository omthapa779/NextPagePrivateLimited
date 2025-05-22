@extends('essentials.navbar')
@section('title', 'Services')
@section('meta_description', 'Explore our comprehensive visa solutions including regular, premium, situational, immigrant, and other specialized visa processing services with Next Page Pvt. Ltd.')
@section('meta_keywords', 'Visa Services, Visa Solutions, Regular Visa Processing, Premium Visa Processing, Immigrant Visa, Next Page Pvt. Ltd.')
@section('meta_author', 'Next Page Pvt. Ltd.')
@section('content')
<section class="hero_section w_100 h_83vh primary_font padding_s5 grid col_2 overflow_hidden">
    <div class="left_service_hero w_100 h_100 flex_cl justify_fs padding_v10">
        <h2 class="line_h100">Our Comprehensive <br> <span class="secondary_color">Visa Solutions</span></h2>
        <h4 class="w_60 font_w500 mtop_5vh service_hero_description ">Whether you're applying for a tourist, work, or student visa, we offer expert guidance tailored to your U.S. immigration goals. Navigate the process with confidence—backed by trusted 
            consultants and a track record of proven success.</h4>
    </div>
    <div class="service_hero_image w_100 h_100 flex justify_c align_c">
        <img src="{{ asset('./resources/images/services_hero.png') }}" alt="Visa Solutions | Next Page Private Solution" class="h_100 w_100">
    </div>
</section>

<section class="service_page_holder w_100 h_fc padding_s5 primary_font padding_v10 bg_light flex_cl gap_2vw">
    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw">
        <div class="service_page_title w_100" id="4702">
            <h3>4702 <br> [ Regular Processing ]</h3>
        </div>
        <div class="service_description w_100">
            <h5>* Visa Application Process Include</h5>
            <h5 class="font_w500">- Profile Evaluation</h5>
            <h5 class="font_w500">- DS 160 Application</h5>
            <h5 class="font_w500">- US Visa Fee Payment</h5>
            <h5 class="font_w500">- Visa Interview Counselling</h5>
        </div>
        <img src="{{ asset('./resources/images/services/4702.jpg') }}" alt="Visa Preparation | Next Page Private Limited" class="  w_100 obj_cover">
    </div>
    
    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw" id="4703">
        <div class="service_page_title w_100">
            <h3>4703 <br> [ Premium Processing ]</h3>
        </div>
        <div class="service_description w_100">
            <h5>* All included in 4702 Plus</h5>
            <h5 class="font_w500">- Evaluate your Visa Approval Factors</h5>
            <h5 class="font_w500">- Assess Your Denial Risks</h5>
            <h5 class="font_w500">- Custom plan to boost chances of Approval</h5>
            <h5 class="font_w500">- Visa Interview Counseling</h5>
            <h5 class="font_w500">- Pre Departure Orientation</h5>
            <h5 class="font_w500">- Post Departure Assistance if needed</h5>
        </div>
        <img src="{{ asset('./resources/images/services/4703.jpg') }}" alt="Counsultation about Visa Interview | Next Page Private Limited" class="  w_100 obj_cover">
    </div>

    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw" id="4704">
        <div class="service_page_title w_100">
            <h3>4704 <br> [ Situational Processing ]</h3>
        </div>
        <div class="service_description w_100">
            <h5>* Whole Processing will be done in Tailor-Made mode.</h5>
            <h5 class="font_w500">- Dynamic Pricing Depending on Client/Case</h5>
        </div>
        <img src="{{ asset('./resources/images/services/4704.jpg') }}" alt="Personalized Visa Guidance | Next Page Private Limited" class="  w_100 obj_cover">
    </div>

    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw" id="4704R">
        <div class="service_page_title w_100">
            <h3>4704 <br> [ Renewal of Visa ]</h3>
        </div>
        <div class="service_description w_100">
            <h5>* DS-160 Processing</h5>
            <h5 class="font_w500">- US Visa Fee Payment Processing </h5>
            <h5 class="font_w500">- Assess Your Denial Risks</h5>
            <h5 class="font_w500">- Interview Waiver Processing</h5>
            <h5 class="font_w500">- Dropbox Documentation</h5>
        </div>
        <img src="{{ asset('./resources/images/services/4704_renewal.png') }}" alt="CGI Payment Processing | Next Page Private Limited" class="  w_100 obj_cover">
    </div>

    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw" id="immigrant_processing">
        <div class="service_page_title w_100">
            <h3>Immigrant Processings</h3>
        </div>
        <div class="service_description w_100">
            <h5 class="font_w500">- U.S Citizens Appointment</h5>
            <h5 class="font_w500">- CRBA</h5>
            <h5 class="font_w500">- SB-1 Returning Visa</h5>
            <h5 class="font_w500">- Green card Abandonment</h5>
            <h5 class="font_w500">- Spouse/Marriage Visa (K1, IR1)</h5>
            <h5 class="font_w500">- Green Card & Citizenship documentation /Counseling </h5>
            <h5 class="font_w500">- Diversity Visa (DV) Processing</h5>
            <h5 class="font_w500">- Petition Filing: I-130 / I 864 Forms </h5>
            <h5 class="font_w500">- All US DS Forms  </h5>
        </div>
        <img src="{{ asset('./resources/images/services/greencard.jpg') }}" alt="Green Card Processing | Next Page Private Limited" class="  w_100 obj_cover">
    </div>

    <div class="service_page_card w_100 h_40vh grid col_right_3 justify_sb gap_4vw" id="other_processing">
        <div class="service_page_title w_100">
            <h3>Other Processings</h3>
        </div>
        <div class="service_description w_100">
            <h5 class="font_w500">- Emergency Request</h5>
            <h5 class="font_w500">- Visa Lost Case</h5>
            <h5 class="font_w500">- No-Show Case</h5>
            <h5 class="font_w500">- Accompany Request</h5>
            <h5 class="font_w500">- Special accomodation Request</h5>
            <h5 class="font_w500">- Sign/Other Language Interpreter Request</h5>
        </div>
        <img src="{{ asset('./resources/images/services/visa_lost.jpg') }}" alt="Visa Lost | Next Page Private Limited" class="  w_100 obj_cover">
    </div>
</section>
@endsection