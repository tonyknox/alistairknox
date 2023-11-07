<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

	<div class="pl-4">
		
		<label class="block">
			<span class="text-gray-600" for="buildname">Name: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="buildname" type="text" name="buildname" value="{{ $building->buildname }}">
			@else
				<input class="form-input block w-full" id="buildname" type="text" name="buildname">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="client">Client: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="client" type="text" name="client" value="{{ $building->client }}">
			@else
				<input class="form-input block w-full" id="client" type="text" name="client">
			@endif
		</label>
	</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="date_built">Date Built: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="date_built" type="text" name="date_built" value="{{ $building->date_built }}">
			@else
				<input class="form-input block w-full" id="date_built" type="text" name="date_built">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="year_built">Year Built: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="year_built" type="text" name="year_built" value="{{ $building->year_built }}">
			@else
				<input class="form-input block w-full" id="year_built" type="text" name="year_built">
			@endif
		</label>
	</div>
	<div>	
		<label class="block">
			<span class="text-gray-600" for="jobnumber">Job Number: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="jobnumber" type="text" name="jobnumber" value="{{ $building->jobnumber }}">
			@else
				<input class="form-input block w-full" id="jobnumber" type="text" name="jobnumber">
			@endif
		</label>
	</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="project_pjid">Project ID: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="project_pjid" type="text" name="project_pjid" value="{{ $building->project_pjid }}">
			@else
				<input class="form-input block w-full" id="project_pjid" type="text" name="project_pjid">
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="address_adrid">Address ID: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="address_adrid" type="text" name="address_adrid" value="{{ $building->address_adrid }}">
			@else
				<input class="form-input block w-full" id="address_adrid" type="text" name="address_adrid">
			@endif
		</label>
	</div>
	<div >
		<label class="block">
			<span class="text-gray-600" for="numdrawings">Number of Drawings: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="numdrawings" type="text" name="numdrawings" value="{{ $building->numdrawings }}">
			@else
				<input class="form-input block w-full" id="numdrawings" type="text" name="numdrawings">
			@endif
		</label>	
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="buildsortnum">Building Sort: </SPAN>
				@if(isset($building))
					<input class="form-input block w-full" id="buildsortnum" type="text" name="buildsortnum" value="{{ $building->buildsortnum }}">
				@else
					<input class="form-input block w-full" id="buildsortnum" type="text" name="buildsortnum">
				@endif
		</label>
	</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="keywords">Keywords: </SPAN>
				@if(isset($building))
					<input class="form-input block w-full" id="keywords" type="text" name="keywords" value="{{ $building->keywords }}">
				@else
					<input class="form-input block w-full" id="keywords" type="text" name="keywords">
				@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="drawinglocation">Drawing Location: </SPAN>
				@if(isset($building))
					<input class="form-input block w-full" id="drawinglocation" type="text" name="drawinglocation" value="{{ $building->drawinglocation }}">
				@else
					<input class="form-input block w-full" id="drawinglocation" type="text" name="drawinglocation">
				@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="buildplan">Plan: </SPAN>
				@if(isset($building))
					<input class="form-input block w-full" id="buildplan" type="text" name="buildplan" value="{{ $building->buildplan }}">
				@else
					<input class="form-input block w-full" id="buildplan" type="text" name="buildplan">
				@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="otherprofessional">Other Professionals Employed: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="otherprofessional" type="text" name="otherprofessional" value="{{ $building->otherprofessional }}">
			@else
				<input class="form-input block w-full" id="otherprofessional" type="text" name="otherprofessional">
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="builddescription">Description: </SPAN>
			@if(isset($building))
				<textarea rows="3" class="form-input block w-full" id="builddescription" type="text" name="builddescription" value="{{ $building->builddescription }}">{{ $building->builddescription }}</textarea>
			@else
				<textarea rows="3" class="form-input block w-full" id="builddescription" type="text" name="builddescription"></textarea>
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="buildnote">Building Note: </SPAN>
			@if(isset($building))
				<textarea rows="3" class="form-input block w-full" id="buildnote" type="text" name="buildnote" value="{{ $building->buildnote }}">{{ $building->buildnote }}</textarea>
			@else
				<textarea rows="3" class="form-input block w-full" id="buildnote" type="text" name="buildnote"></textarea>
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="buildimage">Building Image: </SPAN>
			@if(isset($building))
				<textarea rows="2" class="form-input block w-full" id="buildimage" type="text" name="buildimage" value="{{ $building->buildimage }}"><{{ $building->buildimage }}/textarea>
			@else
				<textarea rows="2" class="form-input block w-full" id="buildimage" type="text" name="buildimage"></textarea>
			@endif
		</label>
	</div>
	<div>
		<label class="block">
			<span class="text-gray-600" for="drawingdescription">Drawing Description: </SPAN>
			@if(isset($building))
				<textarea rows="2" class="form-input block w-full" id="drawingdescription" type="text" name="drawingdescription" value="{{ $building->drawingdescription }}">{{ $building->drawingdescription }}</textarea>
			@else
				<textarea rows="2" class="form-input block w-full" id="drawingdescription" type="text" name="drawingdescription"></textarea>
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="manuscriptinfo">Manuscript Info: </SPAN>
			@if(isset($building))
				<textarea rows="2" class="form-input block w-full" id="manuscriptinfo" type="text" name="manuscriptinfo" value="{{ $building->manuscriptinfo }}">{{ $building->manuscriptinfo }}</textarea>
			@else
				<textarea rows="2" class="form-input block w-full" id="manuscriptinfo" type="text" name="manuscriptinfo"></textarea>
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="manuscriptcomment">Manuscript Comment: </SPAN>
			@if(isset($building))
				<textarea rows="2" class="form-input block w-full" id="manuscriptcomment" type="text" name="bkdescription" value="{{ $building->manuscriptcomment }}">{{ $building->manuscriptcomment }}</textarea>
			@else
				<textarea rows="2" class="form-input block w-full" id="manuscriptcomment" type="text" name="manuscriptcomment"></textarea>
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="manuscriptlocation">Manuscript Location: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="manuscriptlocation" type="text" name="manuscriptlocation" value="{{ $building->manuscriptlocation }}">
			@else
				<input class="form-input block w-full" id="manuscriptlocation" type="text" name="manuscriptlocation">
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="drawinglocation2">Drawing Location2: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="drawinglocation2" type="text" name="drawinglocation2" value="{{ $building->drawinglocation2 }}">
			@else
				<input class="form-input block w-full" id="drawinglocation2" type="text" name="drawinglocation2">
			@endif
		</label>
	</div>
	<div class="pl-4">
		<label class="block">
			<span class="text-gray-600" for="buildplan2">Building Plan2: </SPAN>
			@if(isset($building))
				<input class="form-input block w-full" id="buildplan2" type="text" name="buildplan2" value="{{ $building->buildplan2 }}">
			@else
				<input class="form-input block w-full" id="buildplan2" type="text" name="buildplan2">
			@endif
		</label>
	</div>
</div>
	
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>