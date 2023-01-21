@extends('layouts.app')


@section('header-title')
    Halaman Tambah
@endsection

@section('title')
    Tambah Resi
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="noresi" class="form-label">No Resi</label>
                                <input type="text" class="form-control" name="no_resi" placeholder="No Resi"
                                    id="noresi">
                            </div>
                            <div class="mb-3">
                                <label for="tujuan" class="form-label">Pembuatan</label>
                                <input type="text" class="form-control" name="pembuatan" placeholder="Pembuatan"
                                    id="tujuan">
                            </div>

                            <div class="mb-3">
                                <label for="Desa" class="form-label">Desa</label>
                                <input type="text" class="form-control" name="desa" placeholder="Desa" id="Desa">
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Resis</label>
                                <input type="datetime-local" class="form-control" name="tanggal_resi"
                                    placeholder="Tanggal Resi" id="tanggal">
                            </div>

                            <div class="mb-3 text-right">
                                <a class="btn btn-danger btn-sm" href="{{ route('Resi') }}">Kembali</a>
                                <button class="btn btn-primary btn-sm" type="submit">simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">

                            <strong>* {{ $error }}</strong>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
