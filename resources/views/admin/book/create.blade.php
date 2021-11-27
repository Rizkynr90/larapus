@extends('layouts.admin')

@section('header')
<h3>Halaman Create</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Add Book</div>
                <div class="card-body">
                    <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Book Title</label>
                        <input type="text" name="title" class="form-control @error('title')
                            is-invalid
                        @enderror">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Book Writer</label>
                        <select name="author_id" class="form-control @error('author_id') is invalid @enderror">
                            <option value="">Pilih Penulis</option>
                            @foreach ($author as $data)
                                <option value="{{ $data->id }}">{{ $data->fullname() }}</option>
                            @endforeach
                    </select>
                    @error('author_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" name="amount" class="form-control @error('amount')
                            is-invalid
                        @enderror">
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Cover</label>
                        <input type="file" name="cover" class="form-control @error('cover')
                            is-invalid
                        @enderror">
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success">Tambah</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
