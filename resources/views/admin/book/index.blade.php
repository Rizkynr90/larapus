@extends('layouts.admin')

@section('header')
<h3>Halaman Index</h3>
@endsection

@section('content')
<div class="container">
    <div class="'row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Buku</div>
                    <a href="{{ route('books.create') }}" class="btn btn-outline-primary">Tambah Data</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Book Title</th>
                                <th>Book Writer</th>
                                <th>Amount Book</th>
                                <th>Cover</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($books as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->author->fullname() }}</td>
                                    <td>{{ $data->amount }}</td>
                                    <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px" alt="cover"></td>
                                    <td>
                                        <form action="{{ route('books.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('books.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('books.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-outline-danger">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
