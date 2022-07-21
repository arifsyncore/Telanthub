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
              <h1>Data Dosen</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"><a href="#">Data Dosen</a></li>
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
                        <h3 class="card-title">Data Pendaftar Dosen</h3>
                    </div>
                    <div class="col-6">
                      <div class="d-flex flex-row justify-content-end">
                          <a href="{{ url('/data-dosen/export') }}" class="btn btn-primary">Ekspor Excel</a>
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
                          <th>NIDN</th>
                          <th>No Telp</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                            <tr>
                                <td>{{$loop->index +1 }}</td>
                                <td>{{ $dosen->nama_lengkap }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->no_telp }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#info{{ $dosen->id }}"><i class="fas fa-info-circle"></i></button>
                                        </div>
                                    </div>
                                </td>
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
@foreach ($dosens as $dosen)
<div class="modal fade" id="info{{ $dosen->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                Data Lengkap Dosen
            </div>
            <div class="modal-body">
                @php
                    $id = $dosen->id;
                    $details = DB::table('dosen')->where('id',$id)->get();
                @endphp
                @foreach ($details as $detail)
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>=</td>
                        <td>{{ $detail->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <td>Nim</td>
                        <td>=</td>
                        <td>{{ $detail->nidn }}</td>
                    </tr>
                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td>=</td>
                        <td>{{ $detail->perguruan_tinggi }}</td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>=</td>
                        <td>{{ $detail->fakultas }}</td>
                    </tr>
                    <tr>
                        <td>Gelar</td>
                        <td>=</td>
                        <td>{{ $detail->gelar }}</td>
                    </tr>
                    <tr>
                        <td>Penelitian</td>
                        <td>=</td>
                        <td>{{ $detail->penelitian }}</td>
                    </tr>
                    @php
                        $informasis = DB::table('doseninformasi')->where('dosen_id',$detail->id)->get();
                    @endphp
                    <tr>
                      <td>Informasi Yang Di Dapat</td>
                      <td>=</td>
                      <td>
                          @foreach ($informasis as $informasi)
                          {{ $informasi->informasi }},
                          @endforeach
                      </td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach
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