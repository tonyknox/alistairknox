<x-guest-layout>

	<!--header------------------------->

	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchBuildings'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="max-w-[520px]">Buildings</h1>
		@endif

	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<h5>
			@include('includes.menus.buildings')
		</h4>
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>

		@foreach($buildings as $build) 
			<div class="flex flex-col  sm:flex-row sm:pl-6 align-top  align-text-top">
					
				<!-- image -->	
				<div class="w-[150px] pr-6 shrink-0">
					@if(isset($build->akimage))
						@foreach($build->akimage as $img)
							@if($loop->first)
							<strong><a href="{{ url('buildings', [$build->buildid]) }}"><img  src="{{$img->imgpath}}/{{$img->imgname}}.{{$img->imgextension}}" alt="{{$img->alt }}" width="100%" /></a><br /><br />
							@endif
						@endforeach
					@endif
					@if(isset($build->plan) )
						@foreach($build->plan as $plan)
							@if($loop->first)
							<strong><a href="{{ url('buildings', [$build->buildid]) }}">{!!$plan->thumbs!!}</a>
							@endif
						@endforeach

					@else
						&nbsp;
					@endif
				</div>		

				<!-- info ----------->
				<div class="max-w-[620px] grow ">
						
				<!-- building -->
					<strong><a href="{{ url('buildings', [$build->buildid]) }}">{{ $build->buildname }}</a></strong>
					Client: {{ $build->client }},
						@if($build->address)
							{!! $address = addressString($build->address->suite,$build->address->lot_number,$build->address->stnmbr,$build->address->street,$build->address->suburb,$build->address->postcode,$build->address->state); !!}
						@endif

					<br /><br />
					<!-- @if (Auth::check())<br /><a href="{{url('Buildings/edit', [$build->buildid])}}">( Edit )</a>@endif -->				
				</div>
			</div>		
		@endforeach
		
	{!! $buildings->links() !!}

</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes/searches', ['tble' => 'SearchBuildings'])</span>

</x-slot:search>

<!--footer------------------->

<x-slot:footer>
	
</x-slot:footer> 

</x-guest-layout>
