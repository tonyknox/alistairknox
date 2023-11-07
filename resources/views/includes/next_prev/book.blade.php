<p >
	<strong><big>
	
		<a href="{{url('books', ['bkid' => $prevPage])}}" >< Previous Book</a>
			&nbsp;:&nbsp;
		<a href="{{url('books', ['bkid' => $nextPage])}}" >Next Book ></a>

		<br />
	@if (Auth::check())<a href='{!!url("books/$book->bkid/edit")!!}'>( Edit )</a>@endif
</p>

