<div class="grid grid-cols-1 pl-4">

	<div>
		<label class="block">
			<span class="text-gray-600" for="plinfo">Info: </span>
			@if(isset($plans))
				<input class="form-input block w-full" id="plinfo" type="text" name="plinfo" value="{{ $plans->plinfo }}">
			@else
				<input class="form-input block w-full" id="plinfo" type="text" name="plinfo">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="thumbs">Thumbnails: </span>
			@if(isset($plans))
				<input class="form-input block w-full" id="thumbs" type="text" name="thumbs" value="{{ $plans->thumbs }}">
			@else
				<input class="form-input block w-full" id="thumbs" type="text" name="thumbs">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="plname">Name: </span>
			@if(isset($plans))
				<input class="form-input block w-full" id="plname" type="text" name="plname" value="{{ $plans->plname }}">
			@else
				<input class="form-input block w-full" id="plname" type="text" name="plname">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="adress_adrid">Address ID: </span>
			@if(isset($plans))
				<input class="form-input block w-full" id="adress_adrid" type="text" name="adress_adrid" value="{{ $plans->adress_adrid }}">
			@else
				<input class="form-input block w-full" id="adress_adrid" type="text" name="adress_adrid">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="building_buildid">Building ID: </span>
			@if(isset($plans))
				<input class="form-input block w-full" id="building_buildid" type="text" name="building_buildid" value="{{ $plans->building_buildid }}">
			@else
				<input class="form-input block w-full" id="building_buildid" type="text" name="building_buildid">
			@endif
		</label>
	</div></div>
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>