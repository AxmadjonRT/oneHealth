<form action="{{url('/admin/slider/update'.$slider->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="modal fade text-left" id="ModalUpdate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Edit Doctor's Details')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3"> 
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$slider->name }}">
          </div>
          <div class="form-group mb-3">
            <label for="specialization">Specialization</label>
            <input name="specialization" type="text" class="form-control" id="specialization" value="{{$slider->job }}">
          </div>
          <div class="form-group mb-3">
            <label for="tel">Phone number</label>
            <input name="tel" type="number" class="form-control" id="tel" value="{{$slider->tel }}">
          </div>
          <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" value="{{$slider->email }}">
          </div>
          <div class="form-group mb-3">
            <label for="image">Image</label>
            <input name="image" type="file" id="profile_image" onchange="loadPreview(this);" class="form-control">
            <label for="profile_image"></label>
            <img id="preview_img" src="{{url('public/images/'.$slider->image)}}"  width="200"/>
          </div>
          <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Update Doctor</button>
          </div>
        </div>
      </div>
    </div>
  </div>  
</form>