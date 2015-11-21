@extends('master_layout')

@section('content')
<h2>Song Index</h2>

<table>
	<thead>
		<th>Title</th>
		<th>Artist</th>
		<th>Genre</th>
		<th>Tags</th>
	</thead>

	<tbody>
	@foreach ($songs as $song)
	<tr>
		<td>{{ $song->title }}</td>
		<td>{{ $song->artist }}</td>
		<td>{{ $song->genre->name }}</td>
		<td></td>	
	</tr>
	@endforeach
	</tbody>
	
</table>
@stop