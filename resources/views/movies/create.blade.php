@extends('master_layout')

@section('content')
	<h2>Insert New Song</h2>
	{!! Form::open(['url'=>'songs']) !!}
	<div class="row">
	    <div class="small-2 columns">
	      <label for="middle-label" class="text-right middle">Title</label>
	    </div>
	    <div class="small-10 columns">
	      <input type="text" id="middle-label" placeholder="insert song title" name="title">
	    </div>
	</div>
	<div class="row">
	    <div class="small-2 columns">
	      <label for="middle-label" class="text-right middle">Artist</label>
	    </div>
	    <div class="small-10 columns">
	      <input type="text" id="middle-label" placeholder="insert song title" name="artist">
	    </div>
	</div>
	<div class="row">
	    <div class="small-2 columns">
	      <label for="genre" class="text-right middle">Genre</label>
	    </div>
	    <div class="small-10 columns">
	    	<select id="genre"  name="genre">
			@foreach ($genres as $genre)
				<option value="{{ $genre->genre_id }}"> {{ $genre->name }} </option>
			@endforeach
	    	</select>
	    </div>
	</div>
	<div class="row">
	    <div class="small-2 columns">
	      <label for="genre" class="text-right middle">Label</label>
	    </div>
	    <div class="small-10 columns">
	    	<div class="callout">
	    		<span class="secondary badge">2</span>
	    		<a class="tiny button" href="#">Add Label</a>
	    	</div>
	    </div>
	</div>

	<div class="row">
		<div class="small-12 text-right">
			<input type="submit" class="button" value="Simpan Data">
		</div>
	</div>
	{!! Form::close() !!}
@stop