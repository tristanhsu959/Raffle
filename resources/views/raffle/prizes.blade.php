@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/raffle/prizes.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src=""></script>
@endpush

@section('actionbar-left')
	<a href="{{ url('/home') }}" class="btn" alt="Back"><span class="material-symbols-outlined">arrow_back</span></a>
@endsection

@section('content')
<div class="signin">{{-- $signInCount --}}</div>
	
<div class="content-wrapper">
	<div class="prize-group">
		@foreach($prizes as $item)
		<a href="{{ url('raffle') }}" class="item">
			<h4 class="title">{{ $item['title'] }}</h4>
			<div class="desc">{{ $item['description'] }}</div>
			<div class="quantity">{{ $item['quantity'] }}</div>
		</a>
		@endforeach
	</div>
</div>
@endsection()