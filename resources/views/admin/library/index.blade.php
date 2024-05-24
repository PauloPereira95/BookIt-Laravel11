@extends('admin/layouts/app')
@section('title', 'Book It - Em cada História uma Aventrua !')
@section('header')
    @include('admin/partials/header')
@endsection
@section('navbar')
    @include('admin/partials/navbar')
@endsection
@section('library_content')
    @include('admin/library/create')
@endsection
@section('footer')
    @include('admin/partials/footer')
@endsection
