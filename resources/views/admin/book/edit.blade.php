@extends('layouts.admin')

@section('header')
<h3>Halaman Edit</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Book</div>
                <div class="card-body">
                    <form action="{{ route('books.update', $book->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Book Title</label>
                        <input type="text" name="title" value="{{ $book->title }}" class="form-control
                        @error('title')
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
                        <select name="author_id" class="form-control @error('author_id') is-invalid @enderror">
                            <option value=""></option>
                            @foreach ($author as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $book->author_id ? 'selected="selected"' : ''}}>
                                    {{ $data->fullname() }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Amount Book</label>
                        <input type="number" name="amount" value="{{ $book->amount }}" class="form-control @error('amount')
                            is-invalid
                        @enderror">
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
