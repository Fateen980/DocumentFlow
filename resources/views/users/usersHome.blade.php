		@extends('templates.layouts.master')

{{-- This comment will not be present in the rendered HTML --}}


  		@section('title', 'DWF')

			@section('sidebar')
			
			@if($name == 'Fateen')
				{{ $name }}
			@endif
			<p>This is appended to the master sidebar.</p>
			@endsection

			@section('content')
			    <p>This is my body content.</p>
			@endsection