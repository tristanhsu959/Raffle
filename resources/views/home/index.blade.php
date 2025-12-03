@extends('layouts.master')

@push('styles')
    <link href="{{ asset('styles/home/index.css') }}" rel="stylesheet">
@endpush

@push('scripts')
@endpush

@section('actionbar-left')
	<a href="" class="btn" alt="得獎名單"><span class="material-symbols-outlined">rewarded_ads</span></a>
	<a href="{{ url('/raffle') }}" class="btn" alt="抽獎"><span class="material-symbols-outlined">how_to_vote</span></a>
@endsection

@section('content')
<div class="content-wrapper">
	<img src="{{ asset('images/logo.svg') }}" />
	<div class="desc">2025<span class="zhtw">尾牙</span></div>
</div>
@endsection()