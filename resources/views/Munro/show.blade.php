@extends('layouts/app')

@section('content')

<div class="block w100">
	@include('includes.headings')
</div>

<div class="row">

	<!-- col 1 - sidebar -->

	<div class="d-none d-sm-block col-sm-3">
		@include('/includes.nextPrevPage', ['tble'=>'munros', 'editTable'=>$page->amid, 'id'=>'amid', 'text'=>'Page'])<br />
		<h4 class="blu" style="font-style:italic;">Pages</h4>
		@foreach ($pages as $pge)
			<p><a href="{!! url('munros', [$pge->amid]) !!}">{!! $pge->amdescription !!}</a></p>
		@endforeach
	</div>	

	<!-- col 2 - main content -->

	<div class="col" style="max-width:520px;">		
		@include('includes.searches', ['tble' => 'SearchMunros'])
		<h3>{!! $page->amchapter !!}</h3>

		<table width="100%" ><tr><td width="10%" >
			<div class="d-sm-none"></div>
			<div class="hyphenate" id="fnote" style="text-align:justify;">
				{!! $page->aminfo !!}
			</div>		
		</td></tr><tr><td>
			<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'munros', 'editTable'=>$page->amid, 'id'=>'amid', 'textBook'=>'Chapter', 'textChap'=>'Page'])</span>
		</td></tr></table>
	</div>
	
	<!-- col 3 - blank -->

	<div class="d-none d-sm-block col-sm-1"></div>
</div> 

	<!-- MODAL -->

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable"> 
		<div class="modal-content">
			<div class="modal-body">
				<div class="container">
				<div class="row">
						<!-- <div class="col">
							<textarea id="name-text"></textarea>
					</div> -->
					<div class="row">
						<div class="col">
							<textarea id="message-text"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<script>
	$(function() {

		$('#myModal').on('show.bs.modal', function (event) {
			
			var id = $(event.relatedTarget).data('amid')
			$.get( "/munrofootnotes/" + id, function( data ) {
				var fn = $(data).find("#fnote").text()
				var modal = $('#myModal');
				modal.find('#message-text').html(fn);
			});
			
		});
	});
</script> 

<!-- - - - - -->		


@stop
