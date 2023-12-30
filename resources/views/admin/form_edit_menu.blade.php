@extends('auth.layouts')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">

        <a href="{{ route('admin.menu') }}" class="btn btn-danger mb-2">Kembali</a>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Edit Data Menu</strong>
            </div>

            <div class="card-body">



                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.menu_update', $menu->id) }}">
                    @csrf

                    <div class="mb-3">
                        <label for="gambar_menu" class="form-label">Gambar Menu</label>

                        <input type="file" class="form-control @error('gambar_menu') is-invalid @enderror"
                            id="gambar_menu" name="gambar_menu" accept="image/*">



                        <div class="form-text"><sup>*</sup> Ukuran gambar maksimal adalah 2mb</div>
                        <div class="form-text"><sup>*</sup> Pilih gambar jika ingin diubah</div>

                        @error('gambar_menu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>



                    <div class="mb-3">
                        <label for="nama_menu" class="form-label">Nama Menu</label>

                        <input type="text" class="form-control @error('nama_menu') is-invalid @enderror" id="nama_menu"
                            name="nama_menu" required placeholder="Contoh: Ayam Bakar" value="{{ $menu->nama_menu }}">


                        @error('nama_menu')
                        <div class=" invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary w-100">Edit Menu</button>

                </form>


            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')
<!-- jQuery MaskMoney -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>



@endsection