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
              <h1>Data Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active"><a href="#">Data Mahasiswa</a></li>
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
                        <h3 class="card-title">Data Pendaftar Mahasiswa</h3>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-row justify-content-end">
                            <a href="{{ url('/data-mahasiswa/export') }}" class="btn btn-primary">Ekspor Excel</a>
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
                          <th>Nim</th>
                          <th>Layanan Yang Dipilih</th>
                          <th>Program Yang Dipilih</th>
                          <th>No Telp</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{$loop->index +1 }}</td>
                                <td>{{ $mahasiswa->nama_lengkap }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama_layanan }}</td>
                                <td>{{ $mahasiswa->nama_program }}</td>
                                <td>{{ $mahasiswa->no_telp }}</td>
                                <td>{{ $mahasiswa->email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#info{{ $mahasiswa->id }}"><i class="fas fa-info-circle"></i></button>
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
@foreach ($mahasiswas as $mahasiswa)
<div class="modal fade" id="info{{ $mahasiswa->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                Data Lengkap Mahasiswa
            </div>
            <div class="modal-body">
                @php
                    $id = $mahasiswa->id;
                    $details = DB::table('mahasiswas')
                        ->join('layanan','mahasiswas.id_layanan','=','layanan.id_layanan')
                        ->join('program','mahasiswas.id_program','=','program.id_program')
                        ->where('id',$id)->get();
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
                        <td>{{ $detail->nim }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>=</td>
                        <td>{{ $detail->pendidikan_terakhir }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>=</td>
                        <td>{{ $detail->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>=</td>
                        <td>{{ $detail->jekel }}</td>
                    </tr>
                    <tr>
                        <td>Layanan Yang Dipilih</td>
                        <td>=</td>
                        <td>{{ $detail->nama_layanan }}</td>
                    </tr>
                    <tr>
                        <td>Program Yang Dipilih</td>
                        <td>=</td>
                        <td>{{ $detail->nama_program }}</td>
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
                        <td>Prodi</td>
                        <td>=</td>
                        <td>{{ $detail->prodi }}</td>
                    </tr>
                    <tr>
                        <td>Gelar</td>
                        <td>=</td>
                        <td>{{ $detail->gelar }}</td>
                    </tr>
                    <tr>
                        <td>Mulai dan Berakhir Kuliah</td>
                        <td>=</td>
                        <td>{{ $detail->mulai_bulan }}/{{ $detail->mulai_thn }}</td>
                        <td>-</td>
                        <td>{{ $detail->akhir_bulan }}/{{ $detail->akhir_thn }}</td>
                    </tr>
                    @php
                        $bidangs = DB::table('mhsbidang')->where('mhs_id',$detail->id)->get();
                        $keahlians = DB::table('mhskeahlian')->where('mhs_id',$detail->id)->get();
                        $informasis = DB::table('mhsinformasi')->where('mhs_id',$detail->id)->get();
                    @endphp
                    <tr>
                        <td>Bidang Yang Diminati</td>
                        <td>=</td>
                        <td>
                            @foreach ($bidangs as $bidang)
                            {{ $bidang->bidang }},
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>Keahlian</td>
                        <td>=</td>
                        <td>
                            @foreach ($keahlians as $keahlian)
                            {{ $keahlian->keahlian }},
                            @endforeach
                        </td>
                    </tr>
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