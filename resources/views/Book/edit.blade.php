<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $book->bkname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>


	<form method="POST" action = "{{route('books.update', $book->bkid)}}" >
		@csrf
		@method('PUT')
		@include ('Book._form')
	</form>


	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
