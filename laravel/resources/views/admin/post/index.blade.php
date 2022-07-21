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
              <li class="breadcrumb-item active"><a href="#">Post</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-6">
                      <h3 class="card-title">Data Post</h3>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                      <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambah" style="width: 20vh;"><i class="fas fa-plus-circle"></i></button>
                  </div>
                  <div class="modal fade" id="tambah">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Postingan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Nama Judul">
                                </div>
                                <div class="form-group">
                                  <label for="title">Kategori</label>
                                  <select class="form-control" name="category_id">
                                    @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Isi</label>
                                    <textarea class="ckeditor" id="ckedtor" name="body" placeholder="Isi Postingan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="title">Gambar Cover</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-group">
                                  <label>Tag</label>
                                  <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Pilih Tag" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>    
                                    @endforeach
                                  </select>
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal Publikasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{$loop->index +1 }}</td>
                    <td><img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" style="object-fit: cover;"/></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->published_at }}</td>
                    <td>{{ $post->status }}</td>
                    <td>
                        <div class="row">
                          <div class="col-3">
                            <a href="#" class="btn btn-block bg-gradient-success" data-toggle="modal" data-target="#comment{{ $post->id }}"><i class="fas fa-comment"></i></i></a>
                          </div>
                          <div class="col-3">
                            <a href="#" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#show{{ $post->id }}"><i class="fas fa-eye"></i></a>
                          </div>
                          <div class="col-3">
                            <a href="#" class="btn btn-block bg-gradient-warning" data-toggle="modal" data-target="#edit{{ $post->id }}"><i class="fas fa-edit"></i></a>
                          </div>
                          <div class="col-3">
                            <form action="{{ route('post.destroy',$post->id) }}" method="POST">
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
              @foreach ($posts as $post)
              <div class="modal fade" id="edit{{ $post->id }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Postingan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php
                            $id = $post->id;
                            $postingans = DB::table('posts')->where('id',$id)->get();
                        @endphp
                        @foreach ($postingans as $postingan)
                        <form action="{{ route('post.update',$postingan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" value="{{ $postingan->title }}" class="form-control" id="title" name="title" placeholder="Nama Judul">
                            </div>
                            <div class="form-group">
                              <label for="title">Kategori</label>
                              <select class="form-control" name="category_id">
                                <option value="" selected>--Pilih--</option>
                                @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="title">Status</label>
                              <select class="form-control" name="status">
                                <option value="" selected>--Pilih--</option>
                                <option value="publish">publish</option>
                                <option value="draft">draft</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Isi</label>
                                <textarea class="ckeditor" id="ckedtor" name="body" placeholder="Isi Postingan">{{ $postingan->body }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Gambar Cover</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{ Storage::url($postingan->image) }}" height="250" width="250" alt="" style="object-fit: cover;"/>
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
              @foreach ($posts as $post)
              <div class="modal fade" id="show{{ $post->id }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Postingan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php
                            $id = $post->id;
                            $postingans = DB::table('posts')->where('id',$id)->get();
                        @endphp
                        @foreach ($postingans as $postingan)
                        <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" value="{{ $postingan->title }}" class="form-control" id="title" name="title" placeholder="Nama Judul" disabled>
                            </div>
                            <div class="form-group">
                              <label for="title">Kategori</label>
                              @php
                                  $kategori = DB::table('category')->where('id',$postingan->category_id)->first();
                              @endphp
                              <input type="text" value="{{ $kategori->name }}" class="form-control" id="title" name="title" placeholder="Nama Judul" disabled>
                            </div>
                            <div class="form-group">
                              <label for="title">Status</label>
                              <input type="text" value="{{ $postingan->published_at }}" class="form-control" id="title" name="title" placeholder="Nama Judul" disabled>
                            </div>
                            <div class="form-group">
                                <label for="title">Isi</label>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="card">
                                      <div class="card-body">
                                        @php
                                          echo strip_tags($postingan->body,'<ol><ul><li><p><strong><hr><s><tabel><tr><tbody><td><th><thead><h1><h2><h3><h4><div>');
                                        @endphp
                                      </div>
                                    </div>
                                    {{-- {{ $postingan->body }} --}}
                                  </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <img src="{{ Storage::url($postingan->image) }}" height="250" width="250" alt="" style="object-fit: cover;"/>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                        @endforeach
                    </div>
                </div>
              </div>
              @endforeach
              @foreach ($posts as $post)
              <div class="modal fade" id="comment{{ $post->id }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Komentar Postingan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @php
                            $id = $post->id;
                            $komens = DB::table('commentblogs')->where('post_id',$id)->get();
                        @endphp
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Komentar</th>
                                    <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($komens as $komen)
                                  <tr>
                                    <td>{{$loop->index +1 }}</td>
                                    <td>{{ $komen->name }}</td>
                                    <td>{{ $komen->email }}</td>
                                    <td>{{ $komen->website }}</td>
                                    <td>{{ $komen->comment }}</td>
                                    <td>
                                            <form action="{{ url('/comment/hapus',$komen->id) }}" method="GET">
                                              @csrf
                                              <button type="submit" class="btn btn-block bg-gradient-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                    </td>
                                  </tr>
                                  @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
              </div>
              @endforeach
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
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script src="{{ asset('/assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
@endsection