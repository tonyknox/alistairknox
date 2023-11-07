<div class="grid grid-cols-2 gap-6">

	<div class="pl-4 col-span-2">
		<label class="block">
			<span class="text-gray-600" for="chapname">Name: </span>
			@if(isset($chapter))
				<input class="form-input block w-full" id="chapname" type="text" name="chapname" value="{{ $chapter->chapname }}">
			@else
				<input class="form-input block w-full" id="chapname" type="text" name="chapname">
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="chapinfo">Info: </span>
			@if(isset($chapter))
				<textarea rows="24" class="form-input block w-full" id="chapinfo" type="text" name="chapinfo" value="{{ $chapter->chapinfo }}">{{ $chapter->chapinfo }}</textarea>
			@else
				<textarea rows="24" class="form-input block w-full" id="chapinfo" type="text" name="chapinfo"></textarea>
			@endif
		</label>
	</div>
	<div >
		<div>
		<label class="block">
			<span class="text-gray-600" for="keyword">Keyword: </span>
			@if(isset($chapter))
				<input class="form-input block w-full" id="keyword" type="text" name="keyword" value="{{ $chapter->keyword }}">
			@else
				<input class="form-input block w-full" id="keyword" type="text" name="keyword">
			@endif
		</label>
	<br />
		<label class="block">
			<span class="text-gray-600" for="book_bkid">Book ID: </span>
			@if(isset($chapter))
				<input class="form-input block w-full" id="book_bkid" type="text" name="book_bkid" value="{{ $chapter->book_bkid }}">
			@else
				<input class="form-input block w-full" id="book_bkid" type="text" name="book_bkid">
			@endif
		</label>
		<br />
	
		<label class="block">
			<span class="text-gray-600" for="sort_order">Sort: </span>
			@if(isset($chapter))
				<input class="form-input block w-full" id="sort_order" type="text" name="sort_order" value="{{ $chapter->sort_order }}">
			@else
				<input class="form-input block w-full" id="sort_order" type="text" name="sort_order">
			@endif
		</label>
	</div>
</div>
		
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>

