@extends('dashboard.front.layouts.app')

@section('page_title', 'Dashboard')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hi User Welcome Back</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      @if(\Session::has('error'))
      <div class="alert alert-danger">
      {{\Session::get('error')}}
      </div>
      @endif
      @if(auth()->user()->subscription=="0")
      <div class="alert alert-warning" role="alert">Get a Premium Membership to downloads any beat without restiction.<a style="color: red;" href="{{route('membership')}}">Click here ! </a></div>
      @endif
      </div>
    </div>

    <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @permission('view.users')
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Users</h3>

              <p>Manage Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('view.users') }}" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        @endpermission

        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Songs</h3>

              <p>Total Songs</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="{{ route('view.pages') }}" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        

      
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Downloads</h3>

              <p>Total Song Downloads</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="{{ route('blog.category.view') }}" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
    </div>
    <!--/. container-fluid -->
  </section>

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">My Downloads</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Lyrics</th>
                    <th>Album</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($songs as $key=>$song)
                  <tr>
                    <td>{{ ++$key }}. </td>
                    <td>{{ $song->title }}</td>
                    <td><img src="../storage/songs/{{ $song->image }}" width="100px" height="50px"></td>
                    <td>{{ Str::limit($song->desc, 100) }}</td>
                    <td>{{ Str::limit($song->lyrics, 100) }}</td>
                    <td>{{ $song->albums->title }}</td>
                    <!-- <td><audio controls>
                    <source src="../storage/songs/{{ $song->song_file }}" type="audio/ogg">
                    <source src="../storage/songs/{{ $song->song_file }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                    </audio></td> -->
                    <td><a class="btn btn-info btn-sm " href="../storage/songs/{{ $song->song_file }}" download><i
                          class="fas fa-download mr-2"></i> Download</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@section('bottom_script')
@endsection