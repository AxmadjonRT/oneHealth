@extends('Admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="w3-right btn btn-success" data-toggle="modal" data-target="#ModalCreate"><i class="bi bi-person-plus-fill"></i> Add Doctors</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Image</th>
                            <th>Tel. number</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->id}}</td>
                                <td>{{$slider->name}}</td>
                                <td>{{$slider->job}}</td>
                                <td><img width="50" src="{{url('public/images/'.$slider->image)}}" alt=""></td>
                                <td>{{$slider->tel}}</td>
                                <td>{{$slider->email}}</td>
                                <td class="text-center print_ignore">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ModalUpdate"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="{{ url('/admin/slider/destroy/'.$slider->id) }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Image</th>
                            <th>Tel. number</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    @include('Admin.admin.slider.create')
@endsection

@section('sliderJSFile')
{{--    <!-- jQuery -->--}}
{{--    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>--}}
{{--    <!-- Bootstrap 4 -->--}}
{{--    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}
    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}">
    </script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
