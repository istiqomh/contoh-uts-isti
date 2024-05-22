@extends('layouts.app')

@section('title', 'Create Tiket')

@section('contents')
    <h1 class="mb-0">Add Tiket</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="id" class="form-control" placeholder="ID">
            </div>
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="jenis_tiket" class="form-select">
                    <option value="reguler">Reguler</option>
                    <option value="ekonomi">Ekonomi</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
            <div class="col">
                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
            </div>
            <div class="col">
                <textarea class="form-control" name="email" placeholder="Email"></textarea>
            </div>
            <div class="col">
                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
            </div>
            <div class="col">
                <select name="status" class="form-select">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection