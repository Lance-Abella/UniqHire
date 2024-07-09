@extends('layout')

@section('page-title', 'Home')
@section('page-content')

<div class="row">
    <div class="col-5">
        <div class="row">
            <h1>Find Opportunity in UniqHire</h1>
        </div>

        <div class="row">
            <p>Welcome to Uniqhire, where every ability finds opportunity! Creating bridges to people with special needs, fostering inclusivity and celebrating diverse talents. Join us in building a world where everyone thrives!</p>
        </div>
    </div>
    <div class="col">
        <div id="carouselExample" class="carousel slide carousel-container">
            <div class="carousel-inner">
                @foreach ( $images as $index => $image )
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset($image) }}" class="d-block w-100" alt="...">

                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div>

@endsection