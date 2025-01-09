@extends('layouts.app')
  
@section('title', 'Create Pelayanan')
  
@section('contents')
    <h1 class="mb-0">Add Pelayanan</h1>
    <hr />
    <form action="{{ route('pelayanans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan">
            </div>
            <div class="col">
                <input type="text" name="tarif" class="form-control" placeholder="Tarif">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_layanan" class="form-control" placeholder="Kode Layanan">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection