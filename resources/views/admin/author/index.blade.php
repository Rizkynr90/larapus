@extends('layouts.admin')

@section('header')
<h3>Halaman Index</h3>
@endsection

@section('content')
<div class="container">
    <div class="'row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Penulis</div>
                    <a href="{{ route('author.create') }}" class="btn btn-primary">Tambah Data</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Fullname</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($author as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->firstname }}</td>
                                    <td>{{ $data->lastname }}</td>
                                    <td>Fullname</td>
                                    <td>
                                        <form action="{{ route('author.destroy', $data->id)}}" method="post">
                                        @csrf
                                        <a href="{{ route('author.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('author.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
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
