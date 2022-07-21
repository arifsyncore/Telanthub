@extends('admin.layouts')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Pelanggan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"><a href="#">Data Pelanggan</a></li>
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
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                        <h3 class="card-title">Data Pelanggan</h3>
                    </div>
                    <div class="col-6">
                      <div class="d-flex flex-row justify-content-end">
                          <a href="{{ url('/data-pelanggan/export') }}" class="btn btn-primary">Ekspor Excel</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>E-Mail</th>
                          <th>No Telp</th>
                          <th>Perusahaan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($langganans as $langganan)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $langganan->nama }}</td>
                                <td>{{ $langganan->email }}</td>
                                <td>{{ $langganan->no_telp }}</td>
                                <td>{{ $langganan->perusahaan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>

@endsection
@section('js')
<script src="{{ asset('/assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection