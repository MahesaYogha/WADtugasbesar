@extends('auth.layouts')

@section('addStyle')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')

@php

function format_rupiah($nilai){

$nilai_rupiah = "Rp " . number_format($nilai, 0, ',', '.');

// Output hasil
return $nilai_rupiah;

}

@endphp

<div class="row justify-content-center">
    <div class="col-md-12">



        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Kelola Menu</strong>
                <a href="{{ route('admin.create_menu') }}" class="btn btn-primary ml-auto">Tambah Menu</a>
            </div>

            <div class="card-body">


                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Gambar Menu</th>
                            <th>Nama Menu</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($menu as $item)

                        <tr>
                            <td>
                                <img src="{{ asset('/') }}storage/{{ $item->gambar_menu }}" class="img-fluid" alt=""
                                    style="width: 200px;height: 200px;">
                            </td>
                            <td>{{ $item->nama_menu }}</td>
                            <td>
                                <a href="{{ route('admin.delete_menu', $item->id) }}" class="btn btn-danger">
                                    <span class="fas fa-trash"></span>
                                </a>

                                <a href="{{ route('admin.update_menu', $item->id) }}" class="btn btn-warning">
                                    <span class="fas fa-pencil"></span>
                                </a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Gambar Menu</th>
                            <th>Nama Menu</th>
                            <th>Aksi</th>

                        </tr>
                    </tfoot>
                </table>


            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#example');
</script>

@endsection