@extends('layouts.app')
@section('_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <form method="post" action="{{ route('admin.brand.update',$brand) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        Foto:<br>
        <div>
            <img src="{{ url($brand->foto) }}" style="weight:70px; height:60px"><br>
            <input type="file" class="form-control" name="foto" ><br>
        </div>
        ADINIZ:<br>
        <div>
            <input type="text" class="form-control" name="brand" value="{{ $brand->brand }}"><br>
        </div>
        <button type="submit" class="btn btn-success">Yenile</button>
        <a href="{{ route('admin.brand.index') }}"><button type="button" class="btn btn-dark">Legv et</button></a>
    </form>
@endsection
@section('_scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endsection
