@if(strlen($building->client))	
	<strong>Client:</strong> {!!$building->client!!}
@endif
<!--address-->
@if(!empty($building->address) && strlen($building->address->suburb))<br />
	<strong>Address:</strong>  
	{!! $address = addressString($building->address->suite,$building->address->lot_number,$building->address->stnmbr,$building->address->street,$building->address->suburb,$building->address->postcode,$building->address->state); !!}
@endif
@if(strlen($building->date_built)>1) <br />
	<strong>Plan Dated:</strong> {!! $building->date_built !!}
@elseif(strlen($building->year_built)>1)
	<strong>Year Built:</strong> {!! $building->year_built !!}
@endif
@if(strlen($building->jobnumber))<br />
	<strong>Job Number:</strong> {!!$building->jobnumber!!}
@endif
<!-- drawing info -->
@if(strlen($building->builddescription)>1)<br />
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Description:</strong> {!!$building->builddescription!!}
	</div>
@endif
@if(strlen($building->builddescription2)>1)<br />
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Description:</strong> {!!$building->builddescription2!!}
	</div>
@endif
@if(strlen($building->drawinglocation)>1)<br />
	<strong>Drawing Location:</strong> {!!$building->drawinglocation!!}
@endif
@if(strlen($building->drawinglocation2)>1)<br />
	<strong>Drawing Location:</strong> {!!$building->drawinglocation2!!}
@endif					
<!--manuscript info-->
@if(strlen($building->manuscriptlocation)>1)<br />
	<strong>Manuscript Location:</strong> {!!$building->manuscriptlocation!!}
@endif
@if(strlen($building->manuscriptinfo)>1)<br />
	<strong>Manuscript Info:</strong> {!!$building->manuscriptinfo!!}
@endif
@if(strlen($building->manuscriptcomment)>1)<br />
	<strong>Manuscript Comment:</strong> {!!$building->manuscriptcomment!!}
@endif 
<!--images-->
@if(strlen($building->buildplan)>6)<br />
	<strong>Plans:</strong><br />
	<div style="margin-left:20px">
		<a href="{!!url('BuildingsController/edit', [$building->buildid])!!}">{!!$building->buildplan!!}</a>
	</div>
@endif
@if(strlen($building->buildplan2)>1)<br />
	<strong>Plans:</strong> {!!$building->buildplan2!!}
@endif
<!--notes-->
@if(strlen($building->buildnote)>1)<br />
	<div class="hyphenate" style="max-width:520px;text-align:justify;">
		<strong>Notes:</strong> {!!$building->buildnote!!}
	</div>
@endif
@if(strlen($building->keywords)>1)<br />
	<strong>Keywords:</strong> {!!$building->keywords!!}
@endif
@if(strlen($building->otherprofessional)>1)<br />
	<strong>Other Professional Employed:</strong> {!!$building->otherprofessional!!}
@endif