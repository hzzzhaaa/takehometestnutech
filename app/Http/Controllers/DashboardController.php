<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function profile()
    {
        $user = Auth::user();
        return view ('profile',["data"=>$user]);
    }
    public function produk(Request $request)
    {
        $produk = Produk::all();
        // $produk = json_decode($produk);
        // dd($produk);
        return view ('produk',["data"=>$produk]);
    }

    public function tambahproduk()
    {
        return view ('tambahproduk');
    }

    public function _tambahproduk(Request $request)
    {
        $nama = $request->nama;
        $kategori = $request->kategori;
        $hargabeli = $request->hargabeli;
        $hargajual = $request->hargajual;
        $stok = $request->stok;

        $image = $request->file('image');
        // dd($image);
        $imageName = $nama.".".$image->extension();
        $imagePath1 = "img/$kategori";
        // dd($imagePath);
        $image->move(public_path($imagePath1),$imageName);
        $imagePath = "img/$kategori/$imageName";

        $u = Produk::create([
            'image' => $imagePath,
            'name'=> $nama,
            'categories' => $kategori,
            'buyprice'=>$hargabeli,
            'sellprice'=>$hargajual,
            'stock'=>$stok,
        ]);
        return redirect()->route("produk");
    }

    public function deleteProduk($id)
    {
        $produk = Produk::find($id)->delete();
        return redirect()->route("produk");
    }
}
