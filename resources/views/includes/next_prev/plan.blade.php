<p >
	<strong><big>
	
		<a href="{{url('plans', ['plid' => $prevPage])}}" >< Previous Plan</a>
			&nbsp;:&nbsp;
		<a href="{{url('plans', ['plid' => $nextPage])}}" >Next Plan ></a>

		<br />
	@if (Auth::check())<a href='{!!url("plans/$plan->plid/edit")!!}'>( Edit )</a>@endif

</p>

