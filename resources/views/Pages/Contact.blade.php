@extends('essentials.navbar')
@section('title', 'Contact')
@section('content')
<section class="contact_page w_100 h_100vh grid col_2 justify_sb gap_2vw padding_s5 primary_font padding_v10">
    <div class="left_contact_page">
        <h1 class="line_h95">Let's Get in Touch</h1>

        <h3 class="mtop_5vh">Don't be afraid to say hello to us!</h3>

        <div class="contact_details w_100 mtop_5vh">
            <div class="call_holder">
                <h4 class="light_color font_w500">Phone</h4>
                <h5 class="font_w500">(+977) 01-4547347</h5>
            </div>

            <div class="whatsapp mtop_2vh">
                <h4 class="light_color font_w500">Whatsapp</h4>
                <h5 class="font_w500">(+977) 9844735845</h5>
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