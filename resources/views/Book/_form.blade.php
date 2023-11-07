<div class="grid grid-cols-1 sm:grid-cols-2 gap=6">

	<div class="pl-6">


<label class="block">
	<span class="text-gray-600" for="bkname">Name</span>
	@if(isset($book))
		<input class="form-input block w-full" id="bkname" type="text" name="bkname" value="{{ $book->bkname }}">
	@else
		<input class="form-input block w-full" id="bkname" type="text" name="bkname">
	@endif
</label>

<label class="block">
	<span class="text-gray-600" for="bkdescription">Description</span>
	@if(isset($book))
		<textarea rows="3" class="form-input block w-full" id="bkdescription" type="text" name="bkdescription" value="{{ $book->bkdescription }}">{{ $book->bkdescription }}</textarea>
	@else
		<textarea rows="3" class="form-input block w-full" id="bkdescription" type="text" name="bkdescription"></textarea>
	@endif
</label>

<label class="block">
	<span class="text-gray-600" for="bkinfo">Info</span>
	@if(isset($book))
	<textarea rows="3"  class="form-input block w-full" id="bkinfo" type="text" name="bkinfo" value="{{ $book->bkinfo }}">{{ $book->bkinfo }}</textarea>
	@else
	<textarea rows="3"  class="form-input block w-full" id="bkinfo" type="text" name="bkinfo"></textarea>
	@endif
</label>

</div>
<div class="pl-6">
	
	<label class="block">
	<span class="text-gray-600" for="author">Author</span>
	@if(isset($book))
		<input class="form-input block w-full" id="author" type="text" name="author" value="{{ $book->author }}">
	@else
		<input class="form-input block w-full" id="author" type="text" name="author">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="book_sort">Sort</span>
	@if(isset($book))
		<input class="form-input block w-full" id="book_sort" type="text" name="book_sort" value="{{ $book->book_sort }}">
	@else
		<input class="form-input block w-full" id="book_sort" type="text" name="book_sort">
	@endif
</label>

<label class="block">
	<span class="text-gray-600" for="bktype">Type</span>
	@if(isset($book))
		<input class="form-input block w-full" id="bktype" type="text" name="bktype" value="{{ $book->bktype }}">
	@else
		<input class="form-input block w-full" id="bktype" type="text" name="bktype">
	@endif
</label>

	<label class="block">
	<span class="text-gray-600" for="thumb">Thumbnail</span>
	@if(isset($book))
		<input class="form-input block w-full" id="thumb" type="text" name="thumb" value="{{ $book->thumb }}">
	@else
		<input class="form-input block w-full" id="thumb" type="text" name="thumb">
	@endif
</label>
</div>
</div>
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>


