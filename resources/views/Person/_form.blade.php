<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

	<div class="pl-4">
		
		<label class="block">
			<span class="text-gray-600" for="ppfirst_name">First Name: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppfirst_name" type="text" name="ppfirst_name" value="{{ $person->ppfirst_name }}">
			@else
				<input class="form-input block w-full" id="ppfirst_name" type="text" name="ppfirst_name">
			@endif
		</label>
	</div>

	<div >
		<label class="block">
			<span class="text-gray-600" for="ppname">Surname: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppname" type="text" name="ppname" value="{{ $person->ppname }}">
			@else
				<input class="form-input block w-full" id="ppname" type="text" name="ppname">
			@endif
		</label>
	</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="ppinfo">Info: </span>
			@if(isset($person))
				<textarea rows="24" class="form-input block w-full" id="ppinfo" type="text" name="ppinfo" value="{{ $person->chapinfo }}">{{ $person->ppinfo }}</textarea>
			@else
				<textarea rows="24" class="form-input block w-full" id="ppinfo" type="text" name="ppinfo"></textarea>
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="ppdescription">Description: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppdescription" type="text" name="ppdescription" value="{{ $person->ppdescription }}">
			@else
				<input class="form-input block w-full" id="ppdescription" type="text" name="ppdescription">
			@endif
		</label>
		<br />
		<label class="block">
			<span class="text-gray-600" for="pptype">Person or Place: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="pptype" type="text" name="pptype" value="{{ $person->pptype }}">
			@else
				<input class="form-input block w-full" id="pptype" type="text" name="pptype">
			@endif
		</label>
		<br />
		<label class="block">
			<span class="text-gray-600" for="ppimgpath">Image Path: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppimgpath" type="text" name="ppimgpath" value="{{ $person->ppimgpath }}">
			@else
				<input class="form-input block w-full" id="ppimgpath" type="text" name="ppimgpath">
			@endif
		</label>
		<br />
		<label class="block">
			<span class="text-gray-600" for="ppimgname">Image Name: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppimgname" type="text" name="ppimgname" value="{{ $person->ppimgname }}">
			@else
				<input class="form-input block w-full" id="ppimgname" type="text" name="ppimgname">
			@endif
		</label>
		<br />
		<label class="block">
			<span class="text-gray-600" for="ppimgext">Image Extension: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppimgext" type="text" name="ppimgext" value="{{ $person->ppimgext }}">
			@else
				<input class="form-input block w-full" id="ppimgext" type="text" name="ppimgext">
			@endif
		</label>
		<br />
	
		<label class="block">
			<span class="text-gray-600" for="ppalt">Image alt: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppalt" type="text" name="ppalt" value="{{ $person->ppalt }}">
			@else
				<input class="form-input block w-full" id="ppalt" type="text" name="ppalt">
			@endif
		</label>
		<br />
		<label class="block">
			<span class="text-gray-600" for="ppcaption">Image Caption: </span>
			@if(isset($person))
				<input class="form-input block w-full" id="ppcaption" type="text" name="ppcaption" value="{{ $person->ppcaption }}">
			@else
				<input class="form-input block w-full" id="ppcaption" type="text" name="ppcaption">
			@endif
		</label>
	</div>
</div>

<div > <button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>

