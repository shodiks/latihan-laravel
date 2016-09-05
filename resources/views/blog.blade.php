
@extends('templates.index')
@section('content')

@if(count($blogs))
	<ul>
		@foreach($blogs as $blog)
		<li>Judul : <a href="{{ url('blog',$blog->id) }}">{{ $blog->judul }}</a></li>
		@endforeach
		</ul>
		@else
		<p>Post tidak ada.</p>
		@endif
		
		<p>tes</p>

		<p>tes2</p>
@stop