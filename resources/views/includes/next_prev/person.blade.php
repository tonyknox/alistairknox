<p >
	<strong><big>
	
		<a href="{{url('people', ['ppid' => $prevPage])}}" >< Previous Person</a>
			&nbsp;:&nbsp;
		<a href="{{url('people', ['ppid' => $nextPage])}}" >Next Person ></a>

		<br />
	@if (Auth::check())<a href='{!!url("People/$person->ppid/edit")!!}'>( Edit )</a>@endif
	

</p>

