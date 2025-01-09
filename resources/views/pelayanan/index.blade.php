@extends('layouts.app')
  
@section('title', 'Data Pelayanan')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pelayanan</h1>
        <a href="{{ route('pelayanans.create') }}" class="btn btn-primary">Tambah Layanan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama Layanan</th>
                <th>Tarif</th>
                <th>Kode Pelayanan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($pelayanan->count() > 0)
                @foreach($pelayanan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_layanan }}</td>
                        <td class="align-middle">{{ $rs->tarif }}</td>
                        <td class="align-middle">{{ $rs->kode_layanan }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pelayanans.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pelayanans.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pelayanans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pelayanan not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection