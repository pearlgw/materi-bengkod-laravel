@extends('layout.app')

@section('title', 'Obat')

@section('nav-item')
    @include('dokter.components.nav_item')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Obat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dokter/dasboard">Home</a></li>
                        <li class="breadcrumb-item active">Obat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Obat</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="/dokter/obat">
                            @csrf
                            <div class="card-body">
                                {{-- <div class="form-group">
                                    <select class="form-control" name="user_id">
                                        <option selected>Open this select menu</option>
                                        @forelse ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                        @empty
                                            <option>User belum ada</option>
                                        @endforelse
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="nama_obat">Nama Obat</label>
                                    <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                                        placeholder="Masukkan nama obat" />
                                </div>
                                <div class="form-group">
                                    <label for="kemasan">Kemasan</label>
                                    <input type="text" class="form-control" id="kemasan" name="kemasan"
                                        placeholder="Masukkan kemasan obat" />
                                </div>
                                <div class="form-group">
                                    <label for="harega_obat">Harga</label>
                                    <input type="number" class="form-control" id="harega_obat" name="harga"
                                        placeholder="Masukkan harga obat" />
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
