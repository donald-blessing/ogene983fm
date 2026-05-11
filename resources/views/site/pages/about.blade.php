@extends('layouts.pages.about')
@section('title')
About Us
@endsection
@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- About Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-title">
                    <h4>About Ogene 98.3 FM</h4>
                    <p class="mt-4">
                        Best indigenous Radio Station, South-East of the Niger. Infusing Local content, reaching out to upwardly mobile and locals. Bridging the gap between the urban contemporary and Indigenous broadcasting. If you ever find yourself in Anambra state, make sure you pick up OGENE.
                    </p>
                    <p>
                        Our mission is to provide high-quality broadcasting that celebrates our local culture and heritage while keeping our audience informed and entertained with the latest global and local happenings.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

@endsection
