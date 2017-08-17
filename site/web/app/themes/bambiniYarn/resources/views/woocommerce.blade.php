@extends('layouts.app') 
@section('content')
<div class="sidebar">
	@include('partials.sidebar') 
</div>
@php(woocommerce_content()) 
@include('partials.useful-info')
@endsection 