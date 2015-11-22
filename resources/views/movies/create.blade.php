@extends('master_layout')

@section('content')
	<h2>Insert New Song</h2>
	{!! Form::open(['url'=>'songs', 'id'=>'song_form']) !!}
	<div class="row">
	    <div class="small-12 medium-2 columns">
	      <label for="middle-label" class="text-right middle">Title</label>
	    </div>
	    <div class="small-12 medium-10 columns">
	      <input type="text" id="middle-label" placeholder="insert song title" name="title">
	    </div>
	</div>
	<div class="row">
	    <div class="small-12 medium-2 columns">
	      <label for="middle-label" class="text-right middle">Artist</label>
	    </div>
	    <div class="small-12 medium-10 columns">
	      <input type="text" id="middle-label" placeholder="insert artist name" name="artist">
	    </div>
	</div>
	<div class="row">
	    <div class="small-12 medium-2 columns">
	      <label for="genre" class="text-right middle">Genre</label>
	    </div>
	    <div class="small-12 medium-10 columns">
	    	<select id="genre" name="genre">
	    		<option disabled selected>Select Genre</option>
			@foreach ($genres as $genre)
				<option value="{{ $genre->id }}"> {{ $genre->name }} </option>
			@endforeach
	    	</select>
	    </div>
	</div>
	<div class="row">
	    <div class="small-12 medium-2 columns">
	      <label for="genre" class="text-right middle">Label</label>
	    </div>
	    <div class="small-12 medium-10 columns">
	    	<div class="callout">
	    		<span class="label">Guitar Solo <button class="label-delete" type="button">&times;</button></span>
	    		<span class="label">Piano <button class="label-delete" type="button">&times;</button></span>
	    		<span class="label">Violin <button class="label-delete" type="button">&times;</button></span>
	    	</div>
    		<div class="input-group">
    			<input class="input-group-field" type="text" id="new_label">
				<a class="button input-group-button">&plus;</a>
    		</div>
	    	<p class="help-text" id="passwordHelpText">Add tags related to this song</p>
	    	
	    </div>
	</div>

	<div class="row">
		<div class="small-12 text-right">
			<input type="submit" class="button" value="Simpan Data">
		</div>
	</div>
	{!! Form::close() !!}
@stop

@section('script')
<script type="text/javascript">
	var form = $("#song_form")

	$(document).ready(function(){
		form.on("submit", function(){
			var _token = $(this).find("input[name=_token]").val();
			alert(_token);
		});
	});
</script>
@stop