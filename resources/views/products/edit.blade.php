@extends('layouts.app')
  
@section('title', 'Edit Tiket')
  
@section('contents')
    <h1 class="mb-0">Edit tiket</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID</label>
                <input type="text" name="id" class="form-control" placeholder="DI" value="{{ $product->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">jenis_tiket</label>
                <input type="text" name="jenis_tiket" class="form-control" placeholder="Jenis Tiket" value="{{ $product->jenis_tiket }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">telephone</label>
                <input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{ $product->telephone }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $product->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">tanggal</label>
                <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $product->status }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection