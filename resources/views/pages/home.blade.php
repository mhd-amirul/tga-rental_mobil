@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5 ">
    <div class="col-lg-6 mt-5">
        <main class="form-registration mt-5">
            <form action="{{ route('hitung') }}" method="GET">
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Pilih Kriteria Mobil : </h6>
                    </div>
                </div>

                <div class="form-floating mb-1">
                        <select name="kritmerk" class="form-select" aria-label="Floating label select example">
                            @foreach ($merk as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                    </select>
                    <label for="merk_id">Merk</label>
                </div>

                {{-- <div class="row">
                    @foreach ($kriteria as $item)
                        <div class="col-sm-6">
                            <div class="form-floating mb-1">
                                <select name="{{ $item->nama."_id" }}" class="form-select" aria-label="Floating label select example">
                                    @foreach ($alternatif as $data)
                                        @if ($data->kriteria_id == $item->id)
                                            @if (old('merk_id') == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                <label for="{{ $item->nama."_id" }}">{{ $item->nama }}</label>
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button class="w-50 btn btn-sm btn-danger mt-2" type="submit">Search</button>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection
