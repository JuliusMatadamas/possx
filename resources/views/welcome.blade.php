@extends('layouts.app')

@section('content')
<div class="container centrar">
	<div class="container-logo">
		<img src="{{ asset('img/brand-transparent.png') }}" alt="">
		<h1>Point Of Sales System X</h1>
	</div>
</div>
@endsection

@push('css')
    <style type="text/css">
    	.container-logo {
    		text-align: center;
    	}
    </style>
@endpush
