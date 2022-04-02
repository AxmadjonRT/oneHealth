<form action="{{url('/admin/slider/store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ __('Create New Doctor')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3"> 
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ old('name')}}">
          </div>
          <div class="form-group mb-3">
            <label for="specialization">Specialization</label>
            <input name="specialization" type="text" class="form-control" id="specialization" value="{{ old('job')}}">
          </div>
          <div class="form-group mb-3">
            <label for="tel">Phone number</label>
            <input name="tel" type="number" class="form-control" id="tel" value="{{ old('tel')}}">
          </div>
          <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" value="{{ old('email')}}">
          </div>
          <div class="form-group mb-3">
            <label for="image">Image</label>
            <input name="image" type="file" id="profile_image" onchange="loadPreview(this);" class="form-control">
            <label for="profile_image"></label>
            <img id="preview_img" src="https://w3adda.com/wp-content/uploads/2019/09/No_Image-128.png"  width="200"/>
          </div>
          <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Save Doctor</button>
          </div>
        </div>
      </div>
    </div>
  </div>  
</form>

@include('Admin.admin.slider.form')