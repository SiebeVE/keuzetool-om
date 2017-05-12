@extends('layouts.app')

@section('content')

<content>
	<header>
		<h2>Keuzevakken</h2>		
		<form id="logout-form" action="/logout" method="POST">
			{{ csrf_field() }}
		 	<button type="submit" class="button">Uitloggen</button>
		</form>
	</header>
	<div class="info">
		<ul>
			<li>
				<span class="label">Naam:</span>
				<span class="data">{{ Auth::user()->first_name }} {{ Auth::user()->surname }}</span>
			</li>
			<li>
				<span class="label">E-mailadres:</span>
				<span class="data">{{ Auth::user()->email }}</span>
			</li>
			<li>
				<span class="label">Studentennummer:</span>
				<span class="data">{{ Auth::user()->student_id }}</span>
			</li>
		</ul>
	</div>
	<div class="category">
		<div class="card_container">
			@foreach($electives as $elective)
				<div class="card_category">
					<a href="/{{ $elective->id }}/choices">{{$elective->name}}</a>
				</div>
		    @endforeach
	    </div>

		@if($passiveElectives)
			<h3>Kijk jouw keuzes na: </h3>
			@if($message)
				<p class="message">{{ $message }}</p>
			@endif
			@foreach($passiveElectives as $elective)
				<div class="card_category">
					<a href="/{{ $elective->id }}/consultCoices">{{$elective->name}}</a>
				</div>
			@endforeach
		@endif
    </div>
</content>
@endsection