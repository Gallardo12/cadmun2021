@extends('layouts.app')

@section('page-name')
Registration
@endsection

@section('description')
Please follow the instructions below carefully in order to register. Registration closes on February 17
@endsection

@section('image-url')
images/Galeria/registration-img.jpg
@endsection

@section('page-url')
https://www.cadmun.org/registration
@endsection

@section('summary')
Please follow the instructions below carefully in order to register. Registration closes on February 17
@endsection

@section('alt-image')
Registration process
@endsection

@section('content')
<!--START INNER-->
<div class="inner-page">
    <div class="slider-item" style="background-image: url('images/Galeria/registration-img.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span>Registration</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END INNER-->

<!--START INSTRUCTIONS-->
<section class="section blog element-animate">
    <div class="container">
        <div class="row justify-content-center mb-2 ">
            <div class="col-md-8 text-center">
                <h2 class=" heading mb-4">Registration Process to CADMUN 2021</h2>
                <p class="mb-5 lead" style="font-size: 25px;">Please follow the instructions below
                    carefully in order to
                    register. Registration closes on <u><i>February 17.</i></u></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8" style="font-size: 17px;">
                <p>1) Please email to <a href="mailto:secretariat@cadmun.org"><b>secretariat@cadmun.org</b></a>
                    the
                    following information: </p>
                <div class="container ml-5">
                    <p>a) Delegation (School Name)</p>
                    <p>b) School Address, including Zip Code, City, State, and Country.</p>
                    <p>c) Amount of countries requested / committee division</p>
                    <div class="container ml-5">
                        <p style="color: #ffff00;">i. Yellow division (7th - 9th)</p>
                        <p style="color: #ff0000;">ii. Red division (7th - 10th)</p>
                        <p style="color: #1155cc;">iii. Blue division (9th - 12th)</p>
                        <p style="color: #741b47;">iv. Purple division (10th - College)</p>
                    </div>
                    <p>d) Payment receipt.</p>
                    <div class="container ml-5">
                        <p>i. 500MXN / delegate fee should be paid to the following account: </p>
                        <div class="container ml-5">
                            <p>1. Bank name: GRUPO FINANCIERO BANORTE</p>
                            <p>2. Account holder: COLEGIO AMERICANO DE DURANGO AC</p>
                            <p>3. Account number: 0641552447</p>
                            <p>4. CLABE (for national transactions): 072190006415524479</p>
                            <p>5. SWIFT (for international transactions): MENOMXMTXXX</p>
                        </div>
                        <p>ii. The deposit/transfer concept should include:</p>
                        <p>FIRST NAME LAST NAME, SCHOOL, CADMUN 2021.</p>
                        <p>EXAMPLE: DANIELA RIVAS. AMERICAN SCHOOL OF DURANGO. CADMUN 2021.</p>
                    </div>
                </div>
                <p>2) CADMUN 2021 will provide the available countries and committees according to your
                    selection.</p>
                <p>3) Please email your selection back within 3 business days of receiving the options
                    to guarantee
                    those selections.</p>
                <div class="container ml-5">
                    <p>a) Include Delegate’s full names in the provided spreadsheet.</p>
                    <p>b) Diplomas will be issued with names as written on the spreadsheet.</p>
                </div>
                <p>4) CADMUN 2021 will confirm your selection.</p>
            </div>
        </div>
    </div>
</section>
<!--END INSTRUCTIONS-->
@endsection
