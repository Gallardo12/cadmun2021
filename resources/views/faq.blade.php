@extends('layouts.app')

@section('page-active6')
active
@endsection

@section('page-name')
FAQ
@endsection

@section('description')
FAQ for CADMUN 2021
@endsection

@section('image-url')
images/Galeria/F0E40644-9250-4F34-974A-E3ADA1A0AAD1.jpg
@endsection

@section('page-url')
https://www.cadmun.org/frequently-asked-questions
@endsection

@section('summary')
FAQ for CADMUN 2021
@endsection

@section('alt-image')
FAQ
@endsection

@section('content')
<!--START INNER-->
<div class="inner-page">
    <div class="slider-item" style="background-image: url('images/Galeria/F0E40644-9250-4F34-974A-E3ADA1A0AAD1.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span>Frequently Asked Questions</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END INNER-->

<!--START FAQs-->
<section class="section blog element-animate">
    <div class="container">
        <div class="row justify-content-center mb-2 ">
            <div class="col-md-12 text-center">
                <!--CARDS-->
                <div id="accordion">
                    <!--CARD 1-->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="py-2">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne" style="font-size: 17px;">
                                    What is and how can I make a position paper?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                If you have questions about how to start your position paper, the CADMUN secretariat has
                                a guide for you! Feel free to take a look and we hope it turns out excellent.
                            </div>
                            <a href="PDFs/Position_Paper_Guide.pdf" target="_blank"
                                download="CADMUN _2021_Position_Paper_Guide" class="btn btn-primary mb-5 p-3">POSITION
                                PAPER GUIDE</a>
                        </div>
                    </div>
                    <!--CARD 2-->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo" style="font-size: 17px;">
                                    What is the parliamentary procedure used in CADMUN?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                Different MUNs may have minimal variations in the parliamentary procedure, this year
                                CADMUN has also changed a couple of things. Here is a document in which you can review
                                the parliamentary procedure.
                            </div>
                            <a href="PDFs/Parliamentary_Procedure.pdf" target="_blank"
                                download="CADMUN_2021_Parliamentary_Procedure"
                                class="btn btn-primary mb-5 p-3">Parliamentary Procedure</a>
                        </div>
                    </div>
                    <!--CARD 3-->
                    <!--div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                    style="font-size: 17px;">
                                    Does the ICJ committee have a different parliamentary procedure?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                One of the new committees in CADMUN 2021, <a href="/international-court-justice"
                                    target="_blank">The International Court of Justice</a> is one of a kind and has a
                                different parliamentary procedure than the rest of the committees. If you are a delegate
                                with a position in this committee, don't hesitate to take a look! If you have additional
                                questions about the committee, you can send an email to secretariat@cadmun.org or
                                icj@cadmun.org.
                            </div>
                            <a href="PDFs/ICJ_Rules_and_Procedure.pdf" target="_blank"
                                download="CADMUN_2021_ICJ_Rules_and_Procedure" class="btn btn-primary mb-5 p-3">ICJ
                                Rules and Procedure</a>
                        </div>
                    </div-->
                    <!--CARD 4-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                    style="font-size: 17px;">
                                    When and at what time is the event?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                CADMUN 2021 already has dates set! The event will take place on March 18, 19 and 20 of
                                this year. If you want to check the schedule, click <a href="/schedule"
                                    target="_blank">here</a>.
                            </div>
                        </div>
                    </div>
                    <!--CARD 5-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                    style="font-size: 15px;">
                                    Will there be a guest speaker, and will I be able to ask questions to that person?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                We are proud to announce our honored guest this year, Loung Ung. You will have an
                                opportunity to participate in a Q&A period after her speech.
                            </div>
                        </div>
                    </div>
                    <!--CARD 6-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix" style="font-size: 17px;">
                                    Will there be any social events on virtual CADMUN 2021?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                Yes! CADMUN 2021 Secretariat has organized the event including socializing activities
                                both during and after the sessions.
                            </div>
                        </div>
                    </div>
                    <!--CARD 7-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"
                                    style="font-size: 17px;">
                                    If CADMUN will be online, on which platform will it be carried out?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                CADMUN 2021 will be held in an online format for safety purposes regarding the COVID-19
                                pandemic. The event will be mainly carried out through the discord platform, do you want
                                to know more? Click <a href="https://discord.com/" target="_blank">here</a>.
                            </div>
                        </div>
                    </div>
                    <!--CARD 8-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"
                                    style="font-size: 17px;">
                                    How do I register to CADMUN and when is the deadline?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                The deadline to register is March 8! Detailed instructions to enroll in CADMUN are <a
                                    href="/registration" target="_blank">here</a>. Do not hesitate to send us an email
                                if you have any questions. You can send it to: secretariat@cadmun.org,
                                delegates.director.gallegos@cadmun.org, or delegates.director.lopez@cadmun.org.
                            </div>
                        </div>
                    </div>
                    <!--CARD 9-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"
                                    style="font-size: 17px;">
                                    What is the registration fee for CADMUN?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                Due to the complex challenges that the pandemic has presented, we have decided CADMUN
                                2021 will be free for delegates outside the American School of Durango.
                            </div>
                        </div>
                    </div>
                    <!--CARD 10-->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="py-2">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen"
                                    aria-expanded="false" aria-controls="collapseTen" style="font-size: 17px;">
                                    Will CADMUN have awards this year?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body" style="color: black; font-size: 20px;">
                                Yes, CADMUN will have virtual awards this year! For each committee there will be a Best
                                Position Paper, two Honorific Mentions, and a Best Delegate. And of course, a Delegate
                                of Delegates award which will be the only physical award and sent to the winner. If you
                                want to participate in winning the Best Position Paper award, you must send your
                                position paper to your chairs before March 10th!
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CARDS-->
            </div>
        </div>
    </div>
</section>
<!--END FAQs-->
@endsection
