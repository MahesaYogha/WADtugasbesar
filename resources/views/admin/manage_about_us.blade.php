@extends('auth.layouts')

@section('addStyle')


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
                <strong>Kelola About Us</strong>

            </div>

            <div class="card-body">

                {{-- <img src="" alt=""> --}}

                <form action="{{ route('admin.update_about_us', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Place the first <script> tag in your HTML's <head> -->

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">

                    </div>

                    <textarea id="myTextarea" name="isi">{!! $about_us->isi !!}</textarea>

                    <button type="submit" class="btn btn-primary mt-4 w-100">Submit</button>


                </form>



            </div>
        </div>
    </div>
</div>
@endsection

@section('addScript')

<script src="https://cdn.tiny.cloud/1/9nf544vakjr5ojrlp1lawpnd13s2xks8hk05c3xnu0t67qhq/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: '#myTextarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });

     
</script>
@endsection