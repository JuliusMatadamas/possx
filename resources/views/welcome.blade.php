@extends('layouts.app')

@section('content')
<div class="container centrar">
	<div class="container-logo">
		<img src="{{ asset('img/brand-transparent.png') }}" class="img-fluid" alt="">
		<h1>Point Of Sales System X</h1>
		<hr>
		<a href="{{ route('login') }}" >
			<h2>
				<i class="fas fa-sign-in-alt"></i>
			</h2>
		</a>
	</div>
</div>
@endsection

@push('css')
    <style type="text/css">
    	.container-logo {
    		text-align: center;
    	}
    	.container-logo a {
    		color: #000;
    	}
    	.container-logo a:hover {
    		color:  #333;
    	}
    </style>
@endpush
