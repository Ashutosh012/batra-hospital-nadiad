@extends('layouts.app')


@section('header')
	@include('layouts.includes.header')
@endsection

@section('banner')
	@include('banner')
@endsection

@section('services')
	@include('services')
@endsection

@section('facilities')
	@include('facilities')
@endsection

@section('ourteam')
	@include('ourteam')
@endsection

@section('appointment')
	@include('appointment')
@endsection

@section('timing')
	@include('timing')
@endsection

@section('review')
	@include('review')
@endsection

@section('blog')
	@include('blog')
@endsection

@section('footer')
	@include('layouts.includes.footer')
@endsection