@extends('auth.layouts')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">

        <a href="{{ route('admin.masukan') }}" class="btn btn-danger mb-2">Kembali</a>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Edit Data Masukan</strong>
            </div>

            <div class="card-body">



                <form enctype="multipart/form-data" method="POST"
                    action="{{ route('admin.masukan_update', $masukan->id) }}">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>

                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $masukan->nama }}"
                            required>

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>

                        <input type="email" class="form-control" id="email" name="email" value="{{ $masukan->email }}"
                            required>

                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>

                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $masukan->no_hp }}"
                            required>

                    </div>


                    <div class="mb-3">
                        <label for="penilaiian" class="form-label">Penilaiian</label>

                        <input type="number" class="form-control" id="penilaiian" name="penilaiian"
                            value="{{ $masukan->penilaiian }}" required max="5">

                    </div>


                    <div class="mb-3">
                        <label for="penilaiian" class="form-label">Isi Masukan</label>

                        <textarea name="isi_masukan" id="isi_masukan" cols="30" rows="10"
                            class="form-control">{{ $masukan->isi_masukan }}</textarea>

                    </div>




                    <button type="submit" class="btn btn-primary w-100">Update Masukan</button>

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