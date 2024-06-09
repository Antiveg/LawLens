@extends('/layouts/main_layout')

@section('container')
    @include('/home/hero-section')
    @include('/home/service-card')
    @include('/home/news-carousel')
    @include('/home/testimonial')
@endsection