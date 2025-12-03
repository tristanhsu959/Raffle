
@push('styles')
    <link href="{{ asset('styles/menu.css') }}" rel="stylesheet">
@endpush

@push('scripts')
@endpush

@section('menu')
<div class="menu">
	<ul class="menu-wrapper">
		<li>
			<img src="{{ asset('images/logo.png') }}" class="logo" />
		</li>
		<li>
			<div class="title">2026</div>
		</li>
		<li>
			@hasSection('winnerUrl')
			<a href="@yield('winnerUrl')"><i class="material-icons left">emoji_events</i>得獎名單</a>
			@endif
		</li>
	</ul>
</div>
@endsection()