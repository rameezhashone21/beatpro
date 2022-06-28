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
      </div>
    </div>

    <section class="content">
    <div class="container-fluid">
    <div class="col-md-7 text-center justify-content-center mx-auto">
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}" >
                        {{ csrf_field() }}
                        <input id="amount" type="hidden" value="1.00" class="form-control" name="amount" autofocus>
                        <div class="membership_box bg_orange">
                            <h2 class="color_dard_grey title_box">Elite VIP <span>/ (Premium) </span></h2>
                            <h3 class="color-orange title_box_2">$36.99 <span>/ (Monthly) </span></h3>
                            <ul>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                                <li class="mb-2"><span class="color-orange me-2">&#10004;</span>Lorem ipsum dolor sit amet, consectetur</li>
                            </ul>
                            <h4 class="color_dard_grey title_box">Detail</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            </p>
                            <div class="mb-3">
                            <button type="submit" class="box_button"> Purchase Subscription </button>
                            </div>
                        </div>
                  </form>
      </div>
    </div>
    </section>

  </section>
  <!-- /.content -->
</div>
@endsection

@section('bottom_script')
@endsection