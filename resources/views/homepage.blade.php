@extends('layout')

@section('page-title', 'Home')
@section('page-content')

<div class="row mb-5 border-bottom home-top">
    <div class="col-5 home-captions">
        <div class="header-caption mb-3">
            <h1>Find Opportunity in UniqHire</h1>
        </div>
        <div class="sub-caption mb-4">
            <p>Welcome to Uniqhire, where every ability finds opportunity! Creating bridges to people with disabilities, fostering inclusivity and celebrating diverse talents. Join us in building a world where everyone thrives!</p>
        </div>
        <div class="">
            <button type="button" class="btn-outline">Explore</button>
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
<!-- <hr> -->
<div class="row mt-5 dev-info">
    <div class="row mb-5">
        <div class="col " id="about">
            <h2>About Us</h2>
            <p class="mb-4">UniqHire is dedicated to creating opportunities for individuals with disabilities. We believe in a world where everyone, regardless of their abilities, can thrive and contribute to the workforce. Our platform connects talented individuals with disabilities to training programs and job opportunities tailored to their unique skills and aspirations.</p>
            <h4>Mission</h4>
            <p>Our mission is to empower people with disabilities by providing access to quality training and employment opportunities. We strive to create an inclusive environment where everyone can develop their potential and achieve their career goals.</p>

        </div>
        <div class="col" id="socials">
            <h2>Socials</h2>
            <div class="row">
                <div class="col">
                    <div>
                        <span>
                            <i class='bx bxl-facebook-circle'></i> Facebook
                            <p><a href="#">facebook.com/uniqhire</a></p>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class='bx bxl-instagram-alt'></i> Instagram
                            <p><a href="#">instagram.com/uniqhire</a></p>
                        </span>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <span>
                            <i class='bx bxl-twitter'></i> Twitter
                            <p><a href="#">twitter.com/uniqhire</a></p>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class='bx bxl-youtube'></i> Youtube
                            <p><a href="#">youtube.com/uniqhire</a></p>
                        </span>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="" id="contact">
            <h2>Contact Us</h2>
            <p>Introduce your platform and its mission. Explain what makes it unique and how it helps people with disabilities enhance their skills and find employment opportunities.</p>
        </div>

    </div>

</div>


@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>