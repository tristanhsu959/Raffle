@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/raffle/home.css') }}" rel="stylesheet">
@endpush

@push('scripts')
@endpush

@section('actionbar-left')
	<!--a href="{{ url('prizes') }}" class="btn" alt="抽獎"><span class="material-symbols-outlined">playing_cards</span></a-->
@endsection

@section('content')
<div class="content-wrapper">
	<a href="{{ url('prizes') }}">
		<img src="{{ asset('images/logo.svg') }}" />
	</a>
	<div class="desc">2025<span class="zhtw">尾牙</span></div>
</div>
@endsection()