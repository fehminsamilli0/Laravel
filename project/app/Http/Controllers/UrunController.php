<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index($slug_urunadi){
        $urun =Urun::whereSlug($slug_urunadi)->firstorFail();
        $kategoriler=$urun->kategoriler()->distinct()->get();
        return view('urun',compact('urun','kategoriler'));
    }

    public function ara(){
        $aranan=request()->input('aranan');
        $urunler=Urun::where('urun_adi','like',"%$aranan%")
            ->orWhere('aciklama','like',"%$aranan%")
            ->paginate(3);
        request()->flash();
        return view('arama',compact('urunler'));
    }


}
