@extends('layouts.admin')

@section('header')
<h3>Halaman Show</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Book</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Book Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $book->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Author ID</label>
                        <input type="text" name="author_id" class="form-control" value="{{ $book->author->fullname() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" name="amount" class="form-control" value="{{ $book->amount }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Cover</label>
                        <input type="text" name="cover" class="form-control" value="{{ $book->cover }}" readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ url('admin/books') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
