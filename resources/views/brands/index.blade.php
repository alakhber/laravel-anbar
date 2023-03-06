@extends('layouts.app')
@section('_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <a href="{{ route('admin.brand.create') }}" class="btn btn-success">Yeni Brand</a>
        </div>
        <div class="col-lg-4">
            <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Search" id="search" name="search" aria-label="Search">

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Brend</th>
                <th></th>
            </tr>
        </thead>

        <tbody class="alldata">
            @foreach ($brands as $i => $brand)
                <tr>
                    <td>{{ $i += 1 }}</td>
                    <td><img src="{{ _asset('storage/' . $brand->foto) }}" style="weight:70px; height:60px"></td>
                    <td>{{ $brand->brand }}</td>
                    <td>
                        <a class="btn btn-danger "  href="{{ route('admin.brand.delete', $brand) }}"><i class="bi bi-trash-fill"></i>
                          
                        </a>
                        <a href="{{ route('admin.brand.edit', $brand) }}"><button type="button" class="btn btn-primary" title="REDAKTƏ"><i class="bi bi-pen-fill"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tbody id="content" class="searchdata"></tbody>
    </table>
@endsection
@section('_scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
  
        $(document).ready(function() {

            $('#search').on('keyup', function() {
                $value = $(this).val();
                if ($value) {
                    $('.alldata').hide();
                    $('.searchdata').show();

                } else {
                    $('.alldata').show();
                    $('.searchdata').hide();
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    type: 'GET',
                    url: '{{ route('admin.brand.search') }}',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            });
        })
    </script>
@endsection
