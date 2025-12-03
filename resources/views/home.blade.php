@extends('layouts.master')

@section('winnerUrl', url('/getWinnerList'))

@push('styles')
    <link href="{{ asset('styles/home.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src=""></script>
@endpush

@section('content')
<div class="signin">{{ $signInCount }}</div>
	
<div class="content-wrapper">
	<div class="prize-group">
		@foreach($prize as $item)
		<a href="{{ url('raffle') }}" class="item">
			<h4 class="title">{{ $item['title'] }}</h4>
			<div class="desc">{{ $item['description'] }}</div>
			<div class="quantity">{{ $item['quantity'] }}</div>
		</a>
		@endforeach
	</div>
</div>
@endsection()