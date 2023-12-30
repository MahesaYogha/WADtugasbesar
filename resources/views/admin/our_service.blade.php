@extends('auth.layouts')

@section('addStyle')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')



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
                <strong>Kelola Service</strong>
                <a href="{{ route('admin.create_service') }}" class="btn btn-primary ml-auto">Tambah Service</a>
            </div>

            <div class="card-body">


                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($service as $item)

                        <tr>
                            <td>
                                <img src="{{ asset('/') }}storage/{{ $item->gambar }}" class="img-fluid" alt=""
                                    style="width: 200px;height: 200px;">
                            </td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>
                                <a href="{{ route('admin.delete_service', $item->id) }}" class="btn btn-danger">
                                    <span class="fas fa-trash"></span>
                                </a>

                                <a href="{{ route('admin.update_service', $item->id) }}" class="btn btn-warning">
                                    <span class="fas fa-pencil"></span>
                                </a>
                            </td>

                        </tr>

                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Isi</th>
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