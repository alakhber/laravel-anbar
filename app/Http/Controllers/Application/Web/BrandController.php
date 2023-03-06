<?php

namespace App\Http\Controllers\Application\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Appilication\Web\Brand\StoreBrandRequest;
use App\Http\Requests\Appilication\Web\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::whereUserId(auth()->user()->id)->get();

        return view('brands.index', ['brands' => $brands]);
    }


    public function create()
    {
        return view('brands.create');
    }
    public function store(StoreBrandRequest $request)
    {
        try {
            $request = $request->validated();
            DB::beginTransaction();
            $request['foto'] = _imgUpload($request['foto'], 'brand');
            Brand::create($request);
            DB::commit();
            return redirect()->route('admin.brand.index')->with('success', 'Brend ugurla daxil edildi!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.brand.index')->with('warning', 'Brend Əlavə Olunan Zaman Bilinməyən Xəta Baş Verdi');
        }
    }


    public function show(Brand $brnd)
    {
        return view('brands.show', ['brand' => $brnd]);
    }


    public function update(UpdateBrandRequest $request, Brand $brnd)
    {

        try {
            DB::beginTransaction();
            $request = $request->validated();
            if (isset($request['foto'])) {
                $request['foto']     =  _imgUpload($request['foto'], 'brand');
            } else {
                unset($request['foto']);
            }
            $brnd->update($request);
            DB::commit();
            return redirect()->route('admin.brand.index')->with('success', 'Brend Uğurla Yeniləndi !');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.brand.index')->with('warning', 'Brend Yenilənən Zaman Bilinməyən Xəta Baş Verdi');
        }
    }


    public function destroy(Brand $brnd)
    {
        try {
            DB::beginTransaction();
            _imgDelete($brnd->foto);
            $brnd->delete();
            DB::commit();
            return redirect()->route('admin.brand.index')->with('success', 'Brend Uğurla Silindi!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.brand.index')->with('warning', 'Brend Silinən Zaman Bilinməyən Xəta Baş Verdi');
        }
    }

    public function search(Request $post)
    {
        if ($post->ajax()) {

            $list = Brand::where('brand', 'LIKE', '%' . $post->search . '%')->get();
            $output = "";

            foreach ($list as $i => $info) {
                $output .= '<tr>' .
                    '<tr>
            <td>' . ($i += 1) . '</td>
            <td>' . '<img src="' . $info->foto . '" style="weight:70px; height:60px">' . '</td>
            <td>' . $info->brand . '</td>
            <td>' . '<a href="/brandsil/' . $info->id . '">' . '<button type="button" class="btn btn-danger">Sil</button>' . '</a>
            ' . '<a href="/brandedit/' . $info->id . '">' . '<button type="button" class="btn btn-primary">Redaktə et</button>' . '</a>
            </td>
            </tr>';
            }

            return Response($output);
        }
    }
}
