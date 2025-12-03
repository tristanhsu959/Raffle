@extends('layouts.master')

@section('backUrl', url('home'))

@push('styles')
    <link href="{{ asset('styles/winner.list.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src=""></script>
@endpush

@section('content')
<div class="content-wrapper">
	<div class="card winner">
		<span class="card-title">三獎</span>
        <div class="card-content">
			<ul class="collection">
				<li class="collection-item">
					<p>資訊處全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
			</ul>
        </div>
	</div>
	<div class="card winner">
		<span class="card-title">N獎</span>
        <div class="card-content">
			<ul class="collection">
				<li class="collection-item">
					<p>資訊處全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
			</ul>
        </div>
	</div>
	<div class="card winner">
		<span class="card-title">N獎</span>
        <div class="card-content">
			<ul class="collection">
				<li class="collection-item">
					<p>資訊處全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
				<li class="collection-item">
					<p>全球策略發展中心</p>
					<p>T20251010</p>
					<p>路人甲</p>
				</li>
			</ul>
        </div>
	</div>
</div>
@endsection()
