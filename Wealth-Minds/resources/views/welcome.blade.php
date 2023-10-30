@extends('layouts.app')

@section('heading', 'Unlock Your Financial Potential with WealthMinds')

@section('paragraph', 'Ready to take control of your finances and build a prosperous future?')

@section('content')
  <!-- --- Welcome Section --- -->
@include('sections.welcome')

  <!-- --- Services Section --- -->
@include('sections.services')

<!-- --- Review Section --- -->
  @include('sections.review')

<!-- --- Contact Section --- -->
@include('partials.contactForm')


 
@endsection
