@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/raffle/winners.css') }}" rel="stylesheet"/>
@endpush

@push('scripts')
   
@endpush

@section('actionbar-left')
	<a href="{{ url('prizes') }}" class="btn" alt="Back"><span class="material-symbols-outlined">arrow_back</span></a>
	<a href="{{ url('home') }}" class="btn" alt="Home"><span class="material-symbols-outlined">home</span></a>
	<div class="prize-desc">
		<div class="title">{{ $prizeSetting['title'] }}</div>
		<div>{{ $prizeSetting['description'] }}</div>
	</div>
@endsection

@section('actionbar-right')
<div class="quantity">得獎名單<span class="winner-count">{{ $prizeSetting['quantity'] }}</span>名</div>
@endsection

@section('content')
<div class="content-wrapper">
	<div id="carouselWinners" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
		<div class="carousel-inner">
			@foreach($winnerInfo as $key => $winner)
			<div class="carousel-item {{ ($key == 0)?'active':'' }}">
				<div class="winner">
					<span class="no">No.{{$key+1}}</span>
					<div class="name">{{ $winner['Name'] }}</div>
					<div class="prize">{{ $prizeSetting['title'] }}</div>
					<div class="info">
						<div class="id-num">{{ $winner['EmployeeNo'] }}</div>
						<div class="department">{{ $winner['Department'] }}</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselWinners" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselWinners" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
@endsection()