@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/raffle/drawing.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('scripts/raffle/drawing.js') }}" defer></script>
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
<div class="quantity"><span class="winner-count">0</span> / {{ $prizeSetting['quantity'] }}</div>
@endsection


@section('content')
<form action="{{ url('drawing/start') }}" method="post" id="startDrawingForm">
	@csrf
	<input type="hidden" name="configKey" value="{{ $prizeSetting['configKey'] }}" />
	<div class="start-btn-wrapper">
		<button type="button" class="btn btn-start {{ (in_array($prizeSetting['configKey'], $raffleStatus))?'disabled':'' }}">開始抽獎</button>
	</div>
</form>
	
<div class="content-wrapper">
	<ul class="winner-list">
		<li class="winner">
			<div class="department">紅樹林 各區業務辦公室 高雄分公司</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人甲</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">全球策略發展中心總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人乙</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人丙</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">全球策略發展中心</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人甲</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">全球策略發展中心總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人乙</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人丙</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">全球策略發展中心</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人甲</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">全球策略發展中心總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人乙</span>
			</div>
		</li>
		<li class="winner">
			<div class="department">總務處</div>
			<div class="info">
				<span class="id-num">T20251010</span>
				<span class="name">路人丙</span>
			</div>
		</li>
	</ul>
</div>
@endsection()
