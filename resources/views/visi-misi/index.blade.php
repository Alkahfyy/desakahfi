@extends('layouts.app')

@section('title')
    Visi Misi Desa
@endsection

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
                    <form action="{{ route('update-visimisi', $visiMisi) }}" method="POST">
                        @csrf 
                        @method('patch')
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-control-label">Visi</label>
                                <textarea class="form-control @error('visi') is-invalid @enderror" name="visi">{{ old('visi', $visiMisi->visi) }}</textarea>
                                @error('visi')
                                    <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            @error('visi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-control-label">Misi</label>
                                <textarea class="form-control @error('misi') is-invalid @enderror" name="misi">{{ old('misi', $visiMisi->misi) }}</textarea>
                                @error('misi')
                                    <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            @error('misi')
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
        $(document).ready(function() {
            $("textarea").summernote({
                dialogsInBody: true,
                placeholder: 'Silahkan isi konten',
                tabsize: 2,
                height: 300
            });
        });
    </script>
@endpush
