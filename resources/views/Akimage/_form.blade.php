<div class="grid grid-cols-1 sm:grid-cols-2 gap=6">

	<div class="pl-6">
		
	<label class="block">
	<span class="text-gray-600" for="imgid">ID: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="imgid" type="text" name="imgid" value="{{ $akimage->imgid }}">
	@else
		<input class="form-input block w-full" id="imgid" type="text" name="imgid">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="imgname">Image Name: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="imgname" type="text" name="imgname" value="{{ $akimage->imgname }}">
	@else
		<input class="form-input block w-full" id="imgname" type="text" name="imgname">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="imgpath">Path: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="imgpath" type="text" name="imgpath" value="{{ $akimage->imgpath }}">
	@else
		<input class="form-input block w-full" id="imgpath" type="text" name="imgpath">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="imgextension">Extension: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="imgextension" type="text" name="imgextension" value="{{ $akimage->imgextension }}">
	@else
		<input class="form-input block w-full" id="imgextension" type="text" name="imgextension">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="alt">Alt: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="alt" type="text" name="alt" value="{{ $akimage->alt }}">
	@else
		<input class="form-input block w-full" id="alt" type="text" name="alt">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="caption">Caption: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="caption" type="text" name="caption" value="{{ $akimage->caption }}">
	@else
		<input class="form-input block w-full" id="caption" type="text" name="caption">
	@endif
</label>

</div>
<div class="pl-6">
	
<label class="block">
	<span class="text-gray-600" for="credit">Credit: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="credit" type="text" name="credit" value="{{ $akimage->credit }}">
	@else
		<input class="form-input block w-full" id="credit" type="text" name="credit">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="buildings_buildid">Buildings ID: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="buildings_buildid" type="text" name="buildings_buildid" value="{{ $akimage->buildings_buildid }}">
	@else
		<input class="form-input block w-full" id="buildings_buildid" type="text" name="buildings_buildid">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="people_ppid">People ID: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="people_ppid" type="text" name="people_ppid" value="{{ $akimage->people_ppid }}">
	@else
		<input class="form-input block w-full" id="people_ppid" type="text" name="people_ppid">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="directories_dirid">Directories ID: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="directories_dirid" type="text" name="directories_dirid" value="{{ $akimage->directories_dirid }}">
	@else
		<input class="form-input block w-full" id="directories_dirid" type="text" name="directories_dirid">
	@endif
</label>
<label class="block">
	<span class="text-gray-600" for="chapters_chapid">Chapters ID: </span>
	@if(isset($akimage))
		<input class="form-input block w-full" id="chapters_chapid" type="text" name="chapters_chapid" value="{{ $akimage->chapters_chapid }}">
	@else
		<input class="form-input block w-full" id="chapters_chapid" type="text" name="chapters_chapid">
	@endif
</label>
</div></div>
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
