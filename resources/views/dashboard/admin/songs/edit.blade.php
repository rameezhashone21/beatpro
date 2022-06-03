@extends('dashboard.admin.layouts.app')

@section('page_title', 'Edit Songs')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hi Admin Welcome Back</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/categories') }}">Songs</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Messages -->
          @include('dashboard.admin.includes.messages')

          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Song</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/admin/song/'.$song->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="inputTitle">Name</label>
                  <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter name"
                    value="{{ $song->title }}">
                </div>           

                <div class="form-group">
                  <label for="editor">Description</label>
                  <textarea name="desc" rows="3" class="form-control">{{ $song->desc }}</textarea>
                </div>

                <div class="form-group">
                  <label for="editor">lyrics</label>
                  <textarea name="lyrics" id="editor" rows="3" class="form-control">{{ $song->lyrics }}</textarea>
                </div>

                <div class="form-group">
                  <label for="inputFile">Image</label><br>
                  <figure class="figure">
                    <img src="{{ url('/storage/songs/'.$song->image) }}"
                      class="figure-img img-fluid rounded img-thumbnail" alt="Profile photo">
                  </figure>
                  <input type="file" name="image" class="form-control" id="inputFile">
                </div>

                <div class="form-group">
                  <label for="inputFile">Song</label><br>
                  <figure class="figure">
                    <img src="{{ url('/storage/songs/mp3logo.png') }}"
                      class="figure-img img-fluid rounded img-thumbnail" alt="Profile photo">
                  </figure>
                  <input type="file" name="song_file" class="form-control" id="inputFile">
                </div>

                <div class="form-group">
                <label for="inputFile">Album</label><br>
                <select class="form-control" name="album">
                @foreach($albums as $album)
                <option value="{{ $album->id }}" {{ $album->id == $song->album_id ? 'selected' : '' }}>{{ $album->title }}</option>
                @endforeach
                </select>
                </div>
                
                
                
                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select class="form-control" name="status" id="inputStatus">
                    <option value="1" @if($song->status == 1) {{ __('selected') }} @endif>Active</option>
                    <option value="0" @if($song->status == 0) {{ __('selected') }} @endif>Deactive</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('/admin/albums') }}" class="btn btn-default float-right">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@section('bottom_script')
<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
<script>
  // CKEditor configuration //
  ClassicEditor.create(document.querySelector("#editor"))
      .then((editor) => {
          console.log(editor);
      })
      .catch((error) => {
          console.error(error);
      });
  // END / CKEditor configuration //
</script>
@endsection