<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $chapter->chapname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	<form method="POST" action = "{{route('chapters.update', $chapter->chapid)}}" >
		@csrf
		@method('PUT')
		@include ('Chapter._form')
	</form>

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
