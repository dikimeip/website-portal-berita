@extends('template.master')
@section('isi')
<h1>Dasboard</h1>
@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
@endsection