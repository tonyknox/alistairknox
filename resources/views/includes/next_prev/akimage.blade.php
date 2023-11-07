<p >
	<strong><big>
		<a href="{{url('akimages', ['imgid' => $prevChap])}}" >< Previous Building</a>
			<br />
		<a href="{{url('akimages', ['imgid' => $prevPage])}}" >< Previous Image</a>
			&nbsp;:&nbsp;
		<a href="{{url('akimages', ['imgid' => $nextPage])}}" >Next Image ></a>
		<br />
		<a href="{{url('akimages', ['imgid' => $nextChap])}}" >Next  Building ></a></big>
	</strong>
<br />

@if (Auth::check())<a href='{!!url("akimages/$akimage->imgid/edit")!!}'>( Edit )</a>@endif
</p>