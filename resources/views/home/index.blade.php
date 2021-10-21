@extends('layouts.app')

@section('header')
{{--    @include('partials.header')--}}
@endsection

@section('sideBar')
    @include('partials.sideBar')
@endsection

@section('content')

    @include('supplier.index')--}}
    {{--    @include('home.partials.cta')--}}
{{--    @include('home.partials.lists')--}}

@endsection

@section('footer')
{{--    @include('partials.brands')--}}
{{--    @include('partials.footer')--}}
@endsection

@section('scripts')

@endsection
