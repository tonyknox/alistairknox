<x-singlecol-layout>

	<!--header--------------------------------->

	<x-slot:header>
	

	<span class="float-right mt-2"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>

	<h1 ><a href="/plans">The Plans of Alistair Knox</a></h1><br />
	<span style="font-size:large"><a href="/plans">Browse</a></big>	<br />	

	</x-slot:header>


	<!-- Main Content--------------------------->

	<x-slot:main>	

		<br />			
		{!! $plan->plinfo !!}
		<br /><br /><br />

	</div>

	</x-slot:main>
\

	<!--search------------------->

	<x-slot:search>


	</x-slot:search>


	<!--footer------------------->

	<x-slot:footer>
		&nbsp;
	</x-slot:footer>

</x-singlecol-layout>