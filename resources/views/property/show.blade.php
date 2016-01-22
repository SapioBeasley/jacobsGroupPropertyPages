@extends('layouts.default')

@section('title', $property['streetAddress'] . ' ' . $property['city'] . ' ' . $property['state'] . ' ' . $property['zipcode'])

@section('content')

        <!-- INTRO
        ============================================= -->
        <section id="intro">
            @include('includes.intro')
        </section>

        <!-- PRICING
        ============================================= -->
        <section id="details">
            @include('includes.details')
        </section>

        <!-- STATISTIC BANNER
        ============================================= -->
        <div id="statistic_banner">
            @include('includes.stats')
        </div>

        <!-- PORTFOLIO
        ============================================= -->
        <section id="images">
            @include('includes.portfolio')
        </section>

        <!-- CLIENTS
        ============================================= -->
        {{-- <div id="clients">
            @include('includes.clients')
        </div> --}}

        <!-- BOTTOM PROMO LINE
        ============================================= -->
        <div id="inquire">
            @include('includes.bottomLine')
        </div>

@endsection
