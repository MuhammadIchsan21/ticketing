@extends('layouts.app')


@section('title')
Concert
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Website Tiket Terpercaya
        <br />
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beautiful of concert
        <br />
        moment you never see before
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4"> Get Started </a>
</header>

<!-- Main Content -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Join</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>4</h2>
                <p>Band</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>2</h2>
                <p>Lead Concert</p>
            </div>
            <div class="col-sm-3 col-md-2 stats-detail">
                <h2>10</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <section class="section-popular" id="popular">
        <div class="cotainer">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Concert Popular</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                {{-- @foreach (items as item) --}}
                <div class="col-sm-6 col-md-4 col-lg-3">
                    {{-- <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{item->galleries->count() ? Storage::url
                        (item->galleries->first()->image) : ''}}');"> --}}
                        <div class="travel-country">#</div>
                        <div class="travel-location">#</div>
                        <div class="travel-button mt-auto">
                            <a href="
                            #" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}

            </div>
        </div>
    </section>
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br />
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/Partner.png')}}" alt="Logo Partner" class="img-partner" />
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
