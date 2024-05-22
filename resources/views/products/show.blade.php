@extends('layouts.app')
  
@section('title', 'Show Tiket')
  
@section('contents')
    <h1 class="mb-0">Detail tiket</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">id</label>
            <input type="text" name="id" class="form-control" placeholder="ID" value="{{ $product->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $product->nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">jenis_tiket</label>
            <input type="text" name="jenis_tiket" class="form-control" placeholder="Product Code" value="{{ $product->jenis_tiket }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">telephone</label>
            <textarea class="form-control" name="telephone" placeholder="telephone" readonly>{{ $product->telephone }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $product->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">tanggal</label>
            <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $product->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection