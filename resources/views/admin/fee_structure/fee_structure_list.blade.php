@extends('admin.layout')
@section('customCss')
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
<div class="content-wrapper">

  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Fee Structure</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                      <li class="breadcrumb-item active">Fee Structure List</li>
                  </ol>
              </div>
          </div>
      </div>
  </section>

  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                     <div class="card-header">
                        <h3 class="card-title">Fee Structure List</h3>
                      <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Academic Year</th>
                                      <th>class</th>
                                      <th>Fee head</th>
                                      <th>April</th>
                                      <th>May</th>
                                      <th>June</th>
                                      <th>July</th>
                                      <th>August</th>
                                      <th>September</th>
                                      <th>October</th>
                                      <th>November</th>
                                      <th>December</th>
                                      <th>January</th>
                                      <th>February</th>
                                      <th>March</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($feeStructure as $fee)
                                <tr>
                                    <td>{{$fee->id}}</td>
                                    <td>{{$fee->AcademicYear->name}}</td>
                                    <td>{{$fee->Classes->name}}</td>
                                     <td>{{$fee->FeeHead->name}}</td>
                                     <td>{{$fee->april}}</td>
                                     <td>{{$fee->may}}</td>
                                     <td>{{$fee->june}}</td>
                                     <td>{{$fee->july}}</td>
                                     <td>{{$fee->august}}</td>
                                     <td>{{$fee->september}}</td>
                                     <td>{{$fee->october}}</td>
                                     <td>{{$fee->november}}</td>
                                     <td>{{$fee->december}}</td>
                                     <td>{{$fee->january}}</td>
                                     <td>{{$fee->february}}</td>
                                     <td>{{$fee->march}}</td>
                                    <td><a  href="{{route('fee_structure.edit',$fee->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{route('fee_structure.delete',$fee->id)}}" onClick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>
                                   <td>{{$fee->created_at}}</td>
                                </tr>
                                @endforeach
                          </table>
                      </div>

                  </div>

              </div>

          </div>

      </div>

  </section>

</div>
@endsection
@section('customJS')
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection