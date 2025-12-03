@extends('layouts.master')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
<div class="content-wrapper">
	<a href="{{ url('setting/start') }}" class="btn btn-primary">Start</a>
</div>
@endsection()