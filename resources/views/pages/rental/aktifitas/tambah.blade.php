@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-sm-9">
        <div class="card mb-2 mt-2 bg-secondary text-white">
            <div class="card-body p-2">
                <h6 class="card-title m-0">Tambah Aktifitas :</h5>
            </div>
        </div>
    </div>
    <form action="{{ route('activityStore', $shop->id) }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="form-floating">
                    <input type="text" name="nama_pinjam" class="form-control rounded-top @error('nama_pinjam') is-invalid @enderror" id="nama_pinjam" placeholder="Nama Peminjam" value="{{ old('nama_pinjam') }}" required>
                    <label for="nama_pinjam">Nama Peminjam</label>
                    @error('nama_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating">
                    <input type="datetime-local" name="tgl_pinjam" class="form-control rounded-top @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" placeholder="Tanggal Peminjaman" value="{{ old('tgl_pinjam') }}" required>
                    <label for="tgl_pinjam">Tanggal Peminjaman</label>
                    @error('tgl_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-4">
                <div class="form-floating">
                    <input type="text" name="nik_pinjam" class="form-control rounded-top @error('nik_pinjam') is-invalid @enderror" id="nik_pinjam" placeholder="NIK" value="{{ old('nik_pinjam') }}" required>
                    <label for="nik_pinjam">NIK</label>
                    @error('nik_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating">
                    <input type="datetime-local" name="batas_pinjam" class="form-control rounded-top @error('batas_pinjam') is-invalid @enderror" id="batas_pinjam" placeholder="Batas Peminjaman" value="{{ old('batas_pinjam') }}" required>
                    <label for="batas_pinjam">Batas Peminjaman</label>
                    @error('batas_pinjam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-4 mt-3">
                <div class="form-floating mb-1">
                    <select name="car_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($cars as $car)
                            <option data-image_="" value="{{ $car->id }}" selected>{{ $loop->iteration.' . '.$car->merk->nama.' (Plat : '.'BL1232AH'.' )' }}</option>
                        @endforeach
                    </select>
                    <label for="car_id">Mobil Rental</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="berkas_pinjam">Upload Berkas (PDF)</label>
                <input type="file" class="form-control @error('berkas_pinjam') is-invalid @enderror" id="berkas_pinjam" name="berkas_pinjam">
                    @error('berkas_pinjam')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                    @enderror
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Tambah</button>
            </div>
        </div>
    </form>
</div>
@endsection