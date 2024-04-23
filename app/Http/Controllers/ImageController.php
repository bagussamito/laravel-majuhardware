<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $carouselImages = Image::where('type', 'carousel')->get();
        $promoGadgetImages = Image::where('type', 'promo_gadget')->take(6)->get();
        $promoLaptopImages = Image::where('type', 'promo_laptop')->take(6)->get();
        $promoKomputerImages = Image::where('type', 'promo_komputer')->take(6)->get();
        $promoElektronikImages = Image::where('type', 'promo_elektronik')->take(6)->get();
        $promoAksessorisImages = Image::where('type', 'promo_aksesoris')->take(6)->get();
        $promoElcvehicleImages = Image::where('type', 'promo_elcvehicle')->take(6)->get();
        $datas = Image::all();
        return view('pages.dashboard', compact('datas', 'carouselImages', 'promoGadgetImages', 'promoLaptopImages', 'promoKomputerImages', 'promoElektronikImages', 'promoAksessorisImages', 'promoElcvehicleImages',));
    }

    public function admin()
    {
        $datas = Image::all();
        return view('pages.admin', compact('datas'));
    }

    public function create()
    {
        return view('pages.tambah');
    }

     public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'type' => 'required',
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10400', // Contoh validasi untuk file gambar
    ]);

    // Tentukan direktori penyimpanan berdasarkan tipe gambar
    $directory = 'images/' . $request->type;

    // Simpan gambar ke dalam server
    $filename = time() . '.' . $request->image->extension();
    $request->image->storeAs('public/' . $directory, $filename);

    // Simpan data ke dalam database
    $image = new Image();
    $image->type = $request->type;
    $image->title = $request->title;
    $image->image_path = $directory . '/' . $filename; // Simpan path gambar relatif terhadap direktori 'public'

    $image->save();

    // Tampilkan pesan sukses
    return redirect()->route('pages.admin')->with('success', 'Data gambar berhasil disimpan!');
}


    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function destroy(Image $image)
    {
        // Hapus gambar dari database
        $image->delete();

        // Redirect ke halaman yang sesuai
        return redirect()->route('pages.dashboard')
                         ->with('success', 'Image deleted successfully');
    }
}
