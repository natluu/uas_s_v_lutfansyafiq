@extends('layouts.app')
  
@section('title', 'Edit Pelayanan')
  
@section('contents')
    <h1 class="mb-0">Edit Pelayanan</h1>
    <hr />
    <form action="{{ route('pelayanans.update', $pelayanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan" value="{{ $pelayanan->nama_layanan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tarif</label>
                <input type="text" name="tarif" class="form-control" placeholder="Tarif" value="{{ $pelayanan->tarif }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Pelayanan Code</label>
                <input type="text" name="kode_layanan" class="form-control" placeholder="Kode Layanan" value="{{ $pelayanan->kode_layanan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" >{{ $pelayanan->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row col mb-3">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection