@extends('admin/layouts/app')
@section('title', 'Book It - Em cada História uma Aventrua !')
@section('header')
    @include('admin/partials/header')
@endsection
@section('navbar')
    @include('admin/partials/navbar')
@endsection
@section('herobaner')
    @include('admin/partials/home/herobaner')
@endsection
@section('features')
    @include('admin/partials/home/features')
@endsection
@section('home_categories')
    @include('admin/partials/home/home_categories')
@endsection
