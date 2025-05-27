@extends('essentials.navbar')
@section('title', 'Contact')
@section('meta_description', 'Get in touch with next Page Pvt. Ltd., your trusted partner for USA visa services in Nepal.')
@section('meta_keywords', 'Contact next Page, Visa Assistance Nepal, USA Visa Nepal')
@section('meta_author', 'next Page Pvt. Ltd.')
@section('content')
<section class="contact_page w_100 h_100vh grid col_2 justify_sb gap_2vw padding_s5 primary_font padding_v10">
    <div class="left_contact_page">
        <h1 class="line_h95">Let's Get in Touch</h1>

        <h4 class="mtop_5vh font_w500">We’re here to help you with your immigration and non-immigration needs.</h4>

        <div class="contact_details w_100 mtop_5vh">
            <div class="call_holder">
                <h4 class="light_color font_w500">Phone</h4>
                <h5 class="font_w500">+977 1 4547347 (Dial 01 4547347 within Nepal)</h5>
            </div>

             <div class="office mtop_2vh">
                <h4 class="light_color font_w500">Office</h4>
                <h5 class="font_w500">Maharajgunj, Kathmandu, Nepal</h5><br>
            </div>

            <div class="Email">
                <h4 class="light_color font_w500">Email</h4>
                <h5 class="font_w500">nextpageusa@gmail.com</h5><br>
            </div>
        </div>
    </div>

    <div class="contact_form w_100 h_100">
        @include('components.Inquiry_form')
    </div>
</section>
@endsection