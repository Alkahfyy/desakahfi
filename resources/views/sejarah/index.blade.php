@extends('layouts.app')

@section('title', 'Sejarah Desa')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    .ikon {
        font-family: fontAwesome;
    }
</style>
@endsection

@section('content-header')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/cover-bg-profil.jpg') }}); background-size: cover; background-position: center top;">

        <!-- Mask -->
        <span class="mask bg-gradient-primary opacity-6"></span>
        <!-- Header container -->
        {{-- <div class="container-fluid d-flex align-items-center">

            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Desa {{ $desa->nama_desa }}</h1>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Informasi Profil Desa</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('layouts.components.alert')
                    <form action="{{ route('update-sejarah', $sejarah) }}" method="POST">
                        @csrf 
                        @method('patch')
                        <div class="form-group">
                            <label class="form-control-label" for="konten">Sejarah</label>
                            <div class="form-group">
                                <textarea class="form-control @error('konten') is-invalid @enderror" name="konten">{{ old('konten', $sejarah->konten) }}</textarea>
                                @error('konten')
                                    <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            @error('konten')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        function uploadImage(inputFile) {
            if (inputFile.files && inputFile.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(inputFile).siblings('img').attr("src", e.target.result);
                }
                reader.readAsDataURL(inputFile.files[0]);
            }
        }
        $(document).ready(function() {
            $(document).on("submit", "form", function() {
                $(this).children("button:submit").attr('disabled', 'disabled');
                $(this).children("button:submit").html(
                    `<img height="20px" src="{{ url('/storage/loading.gif') }}" alt=""> Loading ...`);
            });

            $("textarea").summernote({
                dialogsInBody: true,
                placeholder: 'Silahkan isi konten',
                tabsize: 2,
                height: 300
            });
        });
    </script>
@endpush
