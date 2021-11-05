@extends('layouts.admin')


@section('header')
<div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Halaman Index</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="container">
    <div class="row ml-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">Larapus</div>
                <div class="card-body">
                    Welcome Back <strong>Admin</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
