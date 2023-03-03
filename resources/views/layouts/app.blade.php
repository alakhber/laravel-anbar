<?php

use App\Models\User;
$yoxla = User::where('id', '=', auth()->id())
    ->where('blok', '=', 1)
    ->count();

if ($yoxla > 0) {
    auth()->logout();
    return redirect()
        ->route('daxilol')
        ->with('error', 'Siz bloklandiniz');
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('partials._head')
<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
      @include('partials._header')
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('partials._left-side')
        <div class="page-wrapper">
            <div class="container-fluid">
                {{-- her page ucun yield istifade etmeye ehtiya yoxdu bir yield  --}}
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials._scripts')
</body>

</html>
