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
              <h1>Data Mitra</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"><a href="#">Data Mitra</a></li>
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
                        <h3 class="card-title">Data Pendaftar Mitra</h3>
                    </div>
                    <div class="col-6">
                      <div class="d-flex flex-row justify-content-end">
                          <a href="{{ url('/data-mitra/export') }}" class="btn btn-primary">Ekspor Excel</a>
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
                          <th>Nama Perusahaan</th>
                          <th>No Telp</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitras as $mitra)
                            <tr>
                                <td>{{$loop->index +1 }}</td>
                                <td>{{ $mitra->nama_lengkap }}</td>
                                <td>{{ $mitra->nama_perusahaan }}</td>
                                <td>{{ $mitra->no_telp }}</td>
                                <td>{{ $mitra->email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#info{{ $mitra->id }}"><i class="fas fa-info-circle"></i></button>
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
@foreach ($mitras as $mitra)
<div class="modal fade" id="info{{ $mitra->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                Data Lengkap Mitra
            </div>
            <div class="modal-body">
                @php
                    $id = $mitra->id;
                    $details = DB::table('mitra')->where('id',$id)->get();
                @endphp
                @foreach ($details as $detail)
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>=</td>
                        <td>{{ $detail->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>=</td>
                        <td>{{ $detail->jekel }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>=</td>
                        <td>{{ $detail->email }}</td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>=</td>
                        <td>{{ $detail->no_telp }}</td>
                    </tr>
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td>=</td>
                        <td>{{ $detail->nama_perusahaan }}</td>
                    </tr>
                    <tr>
                        <td>Industri</td>
                        <td>=</td>
                        <td>{{ $detail->industri }}</td>
                    </tr>
                    <tr>
                        <td>Devisi</td>
                        <td>=</td>
                        <td>{{ $detail->devisi }}</td>
                    </tr>
                    <tr>
                        <td>Posisi</td>
                        <td>=</td>
                        <td>{{ $detail->posisi }}</td>
                    </tr>
                    <tr>
                        <td>ALamat Perusahaan</td>
                        <td>=</td>
                        <td>{{ $detail->alamat }}</td>
                    </tr>
                    @php
                        $informasis = DB::table('mitrainformasi')->where('mitra_id',$detail->id)->get();
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