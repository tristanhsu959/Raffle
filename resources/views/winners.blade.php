@extends('layouts.master')

@section('backUrl', url('home'))

@push('styles')
    <link href="{{ asset('styles/raffle.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src=""></script>
@endpush

@section('content')
<div class="quota">20</div>
	
<div class="content-wrapper">
	<div class="action-btn start">
		<a class="btn-floating">START</a>
	</div>
	
	<ul class="winner-list">
		<li class="winner">
			<div class="department">紅樹林＋各區業務辦公室＋高雄分公司</div>
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
