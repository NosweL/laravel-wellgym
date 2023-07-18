<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latihan;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class LatihanController extends Controller
{
    public function create()
    {
        return view('latihan.add_latihan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $latihan = new Latihan();
        $latihan->nama = $request->nama;
        $latihan->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $destinationPath = public_path('gambar_latihan');
            // Buat nama file yang unik
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // Pindahkan gambar yang diupload ke direktori tujuan
            $image->move($destinationPath, $filename);

            // Simpan path gambar yang baru ke dalam model Transaksi
            $latihan->foto = 'gambar_latihan/' . $filename;
        }

        $latihan->save();

        return redirect()->route('latihan.view')->with('success', 'Latihan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $latihan = Latihan::find($id);
        return view('latihan.edit_latihan', compact('latihan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|max:2048',
        ]);

        $latihan = Latihan::find($id);
        $latihan->nama = $request->nama;
        $latihan->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $destinationPath = public_path('gambar_latihan');
            // Buat nama file yang unik
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // Pindahkan gambar yang diupload ke direktori tujuan
            $image->move($destinationPath, $filename);

            // Hapus gambar lama jika ada
            if (!empty($latihan->foto)) {
                $oldImagePath = public_path($latihan->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan path gambar yang baru ke dalam model Transaksi
            $latihan->foto = 'gambar_latihan/' . $filename;
        }

        $latihan->save();

        return redirect()->route('latihan.view')->with('success', 'Latihan berhasil diperbarui');
    }

    public function view()
    {
        $latihans = Latihan::all();
        return view('latihan.view_latihan', compact('latihans'));
    }

    public function delete($id)
    {
        $latihan = Latihan::find($id);

        // Delete the image file if it exists
        if ($latihan->foto) {
            $imagePath = str_replace('gambar_latihan/', '', $latihan->foto);

            // Check if the file exists in storage
            if (Storage::exists($imagePath)) {
                // Delete the image file
                Storage::delete($imagePath);
            }
        }

        $latihan->delete();

        return redirect()->route('latihan.view')->with('success', 'Latihan berhasil dihapus');
    }
}