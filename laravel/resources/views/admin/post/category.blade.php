@extends('admin.layouts')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"><a href="#">Category</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content-header">
        <div class="container-fluid">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
                      <h3 class="card-title">Data Category</h3>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                      <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambah" style="width: 20vh;">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                  </div>
                    <div class="modal fade" id="tambah">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Kategori</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name-category">Nama Kategori</label>
                                        <input type="text" class="form-control" id="name-category" name="name" placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($categorys as $category)
                  <tr>
                    <td>{{$loop->index +1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="row">
                            {{-- <div class="col-4">
                                <a href="#" class="btn btn-block bg-gradient-primary"><i class="fas fa-eye"></i></a>
                            </div> --}}
                            <div class="col-6">
                                <a href="#" class="btn btn-block bg-gradient-warning" data-toggle="modal" data-target="#edit{{ $category->id }}"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-block bg-gradient-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              @foreach ($categorys as $category)
              <div class="modal fade" id="edit{{ $category->id }}">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Kategori</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @php
                                $id = $category->id;
                                $kategoris = DB::table('category')->where('id',$id)->get();
                            @endphp
                            @foreach ($kategoris as $kategori)
                            <form action="{{ route('category.update',$kategori->id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name-category">Nama Kategori</label>
                                    <input type="text" class="form-control" value="{{ $kategori->name }}" id="name-category" name="name" placeholder="Nama Kategori">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
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