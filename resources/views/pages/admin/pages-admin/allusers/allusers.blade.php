@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Data Pengguna : </h5></div></div>
<div class="row justify-content-center">
    <div class="col-lg-2">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('dashboard.index') }}">
                        <i class="mr-2 bi bi-house"> Dashboard</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allusers.create') }}">
                        <i class="mr-2 bi bi-plus-circle"> Add User</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allshops.index') }}">
                        <i class="mr-2 bi bi-house-fill"> Toko</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-info">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allkriteria.index') }}">
                        <i class="mr-2 bi bi-card-list"> Kriteria</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-success">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allalternatif.index') }}">
                        <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 mt-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Pengguna : </h5>
    </div>
</div>

<form action="{{ route('allusers.index') }}">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="search.." name="searchUser" value="{{ request('searchUser') }}">
    <button class="btn btn-secondary" type="submit">Search</button>
</div>
</form>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }} 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($user->count())
<div class="container">
    <div class="row">
        @foreach( $user as $user )
            <div class="col-md-4 mb-3">
                <div class="card">
                    @if ($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->image }}" class="card-img-top">
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="null" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->Username }}</h5>
                        <p>
                            <small>
                                Username : <a href="#" class="text-decoration-none text-black">{{ $user->Username }}</a>
                            </small>
                        </p>
                        <p class="card-text">
                            ID : {{ $user->id }} <br> Email : {{ $user->email }} <br> Role : {{ $user->role }} <br> No Hp : {{ $user->no_hp }} <br> Created At : {{ $user->created_at }}
                        </p>
                        <a href="{{ route('allusers.show',$user->id) }}" class="btn-sm btn-primary"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                        
                        <form action="{{ route('allusers.destroy', $user->id) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4 mt-5 mb-5">Empty !!!</p>
@endif
@endsection