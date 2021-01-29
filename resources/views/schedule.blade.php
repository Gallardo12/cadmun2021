@extends('layouts.app')

@section('page-active4')
active
@endsection

@section('page-name')
Schedule
@endsection

@section('description')
Schedule for CADMUN 2021
@endsection

@section('image-url')
images/Galeria/schedule_img2.jpg
@endsection

@section('page-url')
https://www.cadmun.org/schedule
@endsection

@section('summary')
Schedule for CADMUN 2021
@endsection

@section('alt-image')
Schedule
@endsection

@section('content')
<!--START INNER-->
<div class="inner-page">
    <div class="slider-item" style="background-image: url('images/Galeria/schedule_img2.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span>Schedule</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END INNER-->

<!--START TABLE-->
<section class="section blog element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <table class="table table-bordered  table-striped">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col" style="color: white; font-size: 20px;">March 18th</th>
                            <th scope="col" style="color: white; font-size: 20px;">March 19th</th>
                            <th scope="col" style="color: white; font-size: 20px;">March 20th</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: black;">8:00 - 8:45 PRACTICE SESSION (optional)</td>
                            <td style="color: black;">8:45 - 9:00 RECEPTION</td>
                            <td style="color: black;">8:45 - 9:00 RECEPTION</td>
                        </tr>
                        <tr>
                            <td style="color: black;">9:00 - 9:30 OPENING CEREMONY</td>
                            <td style="color: black;">9:00 - 10:30 CONFERENCE</td>
                            <td style="color: black;">9:00 - 10:15 GAME SHOW</td>
                        </tr>
                        <tr>
                            <td style="color: black;">9:45 - 11:00 FIRST SESSION</td>
                            <td style="color: black;">10:30 - 10:45 BREAK</td>
                            <td style="color: black;">10:15 - 10:30 BREAK</td>
                        </tr>
                        <tr>
                            <td style="color: black;">11:00 - 11:15 BREAK</td>
                            <td style="color: black;">10:45 - 12:00 FOURTH SESSION </td>
                            <td style="color: black;">10:30 - 11:45 SEVENTH SESSION</td>
                        </tr>
                        <tr>
                            <td style="color: black;">11:15 - 12:30 SECOND SESSION</td>
                            <td style="color: black;">12:00 - 12:15 BREAK</td>
                            <td style="color: black;">11:45 - 12:00 BREAK</td>
                        </tr>
                        <tr>
                            <td style="color: black;">12:45 - 13:00 BREAK</td>
                            <td style="color: black;">12:15 - 13:30 FIFTH SESSION</td>
                            <td style="color: black;">12:00 - 13:15 EIGHTH SESSION</td>
                        </tr>
                        <tr>
                            <td style="color: black;">13:00 - 14:15 THIRD SESSION</td>
                            <td style="color: black;">13:30 - 13:45 BREAK</td>
                            <td style="color: black;">13:15 - 13:30 BREAK</td>
                        </tr>
                        <tr>
                            <td style="color: black;">14:15 - 14:30 RECEPTION</td>
                            <td style="color: black;">13:45 - 15:00 SIXTH SESSION</td>
                            <td style="color: black;">13:30 - 14:30 FUN SESSION</td>
                        </tr>
                        <tr>
                            <td style="color: black;">14:30 - 15:30 *FIRST DAY FUN ACTIVITY*</td>
                            <td style="color: black;">15:00 - 15:30 MEET & GREET SESSION</td>
                            <td style="color: black;">14:30 - 15:30 CLOSING CEREMONY</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-2 ">
            <div class="col-md-8 text-center">
                <p class="pt-5 mb-5 text-center">
                    <a href="PDFs/Schedule CADMUN 2021.pdf" download="Schedule CADMUN 2021"
                        class="btn btn-primary py-3 px-5">Download</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--END TABLE-->
@endsection
