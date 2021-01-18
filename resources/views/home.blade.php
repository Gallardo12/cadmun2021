@extends('layouts.app')

@section('page-name')
Dashboard
@endsection

@section('content')
<!--START INNER-->
<div class="inner-page">
    <div class="slider-item" style="background-image: url('images/Galeria/secretariat-img-2.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span>Dashboard</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END INNER-->
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
