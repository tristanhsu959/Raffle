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
	<ul class="winner-list1">
		@foreach($winnerInfo as $winner)
		<li class="winner1">
			<div class="department">{{ $winner['Department'] }}</div>
			<div class="info">
				<span class="id-num">{{ $winner['EmployeeNo'] }}</span>
				<span class="name">{{ $winner['Name'] }}</span>
			</div>
		</li>
		@endforeach
	</ul>
</div>
@endsection()