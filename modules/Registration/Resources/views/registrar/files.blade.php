@extends('layouts.registered')
@section('content')
<div class="x_panel">
	<div class="x_title">
		<h2>@lang('registration::files.upload_files')</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		@if($registration->step->upload_receipt || $files->where('type', 'receipt')->count())
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.receipt') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','receipt') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_receipt)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class="dropzone" style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i> @lang('registration::files.upload',['name'=>@config('registration.files.types.receipt')]) </span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='receipt'>
					</form>
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		@endif
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.marriage') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','marriage') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
							@lang('registration::files.upload',['name'=>@config('registration.files.types.marriage')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='marriage'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.job') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','job') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
							@lang('registration::files.upload',['name'=>@config('registration.files.types.job')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='job'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.transcript') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','transcript') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
							@lang('registration::files.upload',['name'=>@config('registration.files.types.transcript')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='transcript'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.conf.photo') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','photo') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
						@lang('registration::files.upload',['name'=>@config('registration.files.types.photo')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='photo'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.nid') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','nid') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
						@lang('registration::files.upload',['name'=>@config('registration.files.types.nid')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='nid'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				{{ config('registration.files.types.certificate') }}
			</div>
			<div class='panel-body js-files-container' style='padding-top:10px'>
				
				@foreach($files->where('type','certificate') as $file)
				
				@include('registration::registrar.files._file')
				
				@endforeach
				@if($registration->step->upload_files)
				<div class="col-sm-12 col-md-2">
					<form id='dropzone-nid' action="{{ route('registration.registrar.files.store')}}"  method='post' enctype="multipart/form-data" class='dropzone' style="background:#1ABB9C;color:white;border: 1px solid #1ABB9C;min-height:50px;height:100px;width:100px ">
						
						<div class="dz-message" data-dz-message><span><i class="fa fa-plus"></i>
						@lang('registration::files.upload',['name'=>@config('registration.files.types.certificate')])
						</span></div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						{{ csrf_field() }}
						<input type="hidden" name='type' value='certificate'>
					</form>
					
				</div>
				@endif
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		@if($registration->step->upload_files || $registration->step->upload_receipt)
		<div class="text-center">
			<a href="{{ route('registration.registrar.uploadDone')}}" class="btn btn-success">
		<i class="fa fa-check"></i>
		إضغط هنا عند انتهائك من رفع المستندات
		</a>
		</div>
		@endif
	</div>
</div>
@stop
@section('footer')
<!-- PNotify -->
<script type="text/javascript" src="{{ asset('template/js/notify/pnotify.core.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/notify/pnotify.buttons.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/notify/pnotify.nonblock.js') }}"></script>
<!-- dropzone -->
<script src="{{ asset('template/js/dropzone/dropzone.js') }}"></script>
<script>
	jQuery(document).ready(function($) {
		var $fileContainer = $('.js-files-container');
		$('body').on('click', '.js-delete-file' ,function(e){
			var $this = $(this);
			e.preventDefault();
			$.ajax({
				url: $this.attr('href')
			})
			.done(function(response) {
				$this.closest('.js-thumbnail').remove();
				new PNotify({
text: '@lang('registration::files.delete_success')',
type: 'success'
			});
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
Dropzone.options.dropzoneNid = {
init: function() {
this.on("success", function(file ,response) {
		addnewFile(response, $(this.element).closest('.js-files-container'));
		
		this.removeFile(file);
});
}
};
function addnewFile(file ,container) {
	new PNotify({
text: '@lang('registration::files.upload_success')',
type: 'success'
			});
	var $newFile = $('<div>',{class:'col-sm-12 col-md-2 js-thumbnail'}),$newThumb=$('<div>',{'class':'thumbnail',style:'height:100px;width:100px;position:relative'});
								if(file.isImage) {
									$newThumb.prepend($('<img>',{src:file.file_url,style:'width:100%;height:100%;display:block'}));
								}else{
									$newThumb.prepend($('<i>',{class:'glyphicon glyphicon-file'}));
								}
								$newThumb.append('<a href="{{ route("registration.registrar.files.delete",null) }}/'+file.id+'" class="btn js-delete-file btn-danger btn-xs" style="position:absolute;left:10px;bottom:0"><i class="fa fa-times"></i></a>');
								
								$newFile.append($newThumb);
								container.prepend($newFile);
				}
					});
					
	</script>
	@stop