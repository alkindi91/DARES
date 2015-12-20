<div class="col-sm-12 col-md-2 js-thumbnail">
<div class="thumbnail" style='height:100px;width:100px;position:relative'>
        @if(substr($file->file->contentType(),0,5)=='image')
            <img src="{{ asset($file->file->url()) }}" style='width:100%;height:100%;display:block' />
        @else
        <i class="glyphicon glyphicon-file"></i>
        @endif
        @if($registration->step->upload_files)
        <a href='{{ route('registration.registrar.files.delete',$file->id) }}' class='btn js-delete-file btn-danger btn-xs' style='position:absolute;left:10px;bottom:0'>
            <i class="fa fa-times"></i>
        </a>
        @endif
</div>
</div>