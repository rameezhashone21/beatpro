@extends('dashboard.admin.layouts.app')

@section('page_title', 'Edit Albums')

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
            <li class="breadcrumb-item"><a href="{{ url('/admin/categories') }}">Users</a></li>
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
              <h3 class="card-title">Edit Album</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/admin/album/'.$album->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="inputTitle">Name</label>
                  <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter name"
                    value="{{ $album->title }}">
                </div>           

                <div class="form-group">
                  <label for="editor">Description</label>
                  <textarea name="desc" id="editor" rows="3" class="form-control">{{ $album->desc }}</textarea>
                </div>

                <div class="form-group">
                  <label for="inputTitle">Price</label>
                  <input type="text" name="price" class="form-control" id="inputTitle" placeholder="Enter price"
                    value="{{ $album->price }}">
                </div>

                <div class="form-group">
                  <label for="inputTitle">genre</label>
                  <input type="text" name="genre" class="form-control" id="inputTitle" placeholder="Enter genre"
                    value="{{ $album->genre_id }}">
                </div>
                
                <div class="form-group">
                  <label for="inputFile">Image</label><br>
                  <figure class="figure">
                    <img src="{{ url('/storage/albums/'.$album->image) }}"
                      class="figure-img img-fluid rounded img-thumbnail" alt="Profile photo">
                  </figure>
                  <input type="file" name="image" class="form-control" id="inputFile">
                </div>
                
                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select class="form-control" name="status" id="inputStatus">
                    <option value="1" @if($album->status == 1) {{ __('selected') }} @endif>Active</option>
                    <option value="0" @if($album->status == 0) {{ __('selected') }} @endif>Deactive</option>
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