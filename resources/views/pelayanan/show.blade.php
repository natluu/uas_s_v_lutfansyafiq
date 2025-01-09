@extends('layouts.app')
  
@section('title', 'Menampilkan Pelayanan')
  
@section('contents')
    <h1 class="mb-0">Detail Pelayanan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan" value="{{ $pelayanan->nama_layanan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tarif</label>
            <input type="text" name="tarif" class="form-control" placeholder="Tarif" value="{{ $pelayanan->tarif }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Layanan</label>
            <input type="text" name="kode_layanan" class="form-control" placeholder="Kode Layanan" value="{{ $pelayanan->kode_layanan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" readonly>{{ $pelayanan->deskripsi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $pelayanan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diubah pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $pelayanan->updated_at }}" readonly>
        </div>
    </div>
    <div class="row col mb-3">
            <div class="d-grid">
                <a class="btn btn-primary" href ="/pelayanans">Selesai</a>
            </div>
        </div>
@endsection