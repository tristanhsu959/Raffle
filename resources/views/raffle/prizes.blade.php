@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/raffle/prizes.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src=""></script>
@endpush

@section('actionbar-left')
<a href="{{ url('home') }}" class="btn" alt="Back"><span class="material-symbols-outlined">arrow_back</span></a>
<div class="register">
	<h6>抽獎人數</h6>
	<div class="seniority senior">{{ $seniorEmployees }}</div>
	<div class="seniority junior">{{ $juniorEmployees }}</div>
</div>
@endsection

@section('content')
<div class="content-wrapper">
	<div class="prize-group">
	@foreach($prizes as $key => $item)
		@if (in_array($key, $raffleStatus))
		<a href="#" class="item {{ ($item['yearLimit'] == 5) ? 'senior' : 'junior' }} disabled">
			<div class="title">{{ $item['title'] }}</div>
			<div class="desc">{!! $item['description'] !!}</div>
			<div class="quantity">已結束</div>
		</a>
		@else
		<a href="{{ route('prepareDrawing', ['configKey' => $key]) }}" class="item {{ ($item['yearLimit'] == 5) ? 'senior' : 'junior' }}">
			<div class="title">{{ $item['title'] }}</div>
			<div class="desc">{!! $item['description'] !!}</div>
			<div class="quantity">{{ $item['quantity'] }}</div>
		</a>
		@endif
	@endforeach
	</div>
</div>
@endsection()