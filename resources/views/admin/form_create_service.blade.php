@extends('auth.layouts')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">

        <a href="{{ route('admin.our_service') }}" class="btn btn-danger mb-2">Kembali</a>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Tambah Data Service</strong>
            </div>

            <div class="card-body">



                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.service_store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>

                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>

                        <div class="form-text">Ukuran gambar maksimal adalah 2mb</div>


                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>

                        <input type="text" class="form-control " id="judul" name="judul" required
                            placeholder="Contoh: Ayam Bakar">




                    </div>

                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>

                        <textarea class="form-control" name="isi" id="isi" cols="30" rows="5"></textarea>

                    </div>

                    <button type="submit" class="btn btn-primary w-100">Tambah Service</button>

                </form>


            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')
<!-- jQuery MaskMoney -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

<script>
    $(document).ready(function() {
      // Inisialisasi MaskMoney
      $('#harga_menu').maskMoney({
        thousands: '.',
        decimal: ',',
        precision: 0, // Jika ingin menggunakan desimal, ubah menjadi 2 misalnya
        allowZero: true, // Memungkinkan input nol
        allowNegative: false, // Memungkinkan input nilai negatif
        prefix: 'Rp. ', // Menambahkan prefix "Rp."
      });
  
      // Opsional: Format awal jika input sudah memiliki nilai
      var initialValue = $('#harga_menu').val();
      if (initialValue !== '') {
        $('#harga_menu').maskMoney('mask', initialValue);
      }
  
      // Event ketika nilai input berubah
      $('#harga_menu').on('change', function() {
        // Format ulang nilai setelah perubahan
        var value = $(this).val();
        $(this).maskMoney('mask', value);
      });
    });
</script>



@endsection