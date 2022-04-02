@section('additionalScripts')
<script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection
