<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tolongdong dapatkan semua data yang ada di Fruit
        $buah =  Fruit::all();
        return view('fruit.index', compact('buah'));
        // menjadikan data yg ada didlm fruit itu jadi array
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ini gk membawa data karna dia create/membuat
        return view('fruit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = [
            'nama_buah.required'    => 'Isi dulu gess nama buahnya, masih kosong nihhh!',
            'harga.required'    => 'harganya kosonggg, isi ddlu atuh!',
            'harga.min'    => 'yahhhh, harganya gk cukup',
        ];

        // yg menyimpan data yg kita masukkan didata input
        // required its mean diminta
        // validate itu pengakuan
        $request->validate([
            'nama_buah'      => 'required',
            'harga'          => 'required|min:4',
            // dia yg messege pesan error
        ], $pesan);
        //untuk melakukan testing apakah datanya sudh masuk atau gak
        // dd($request->all());
        $buah = new Fruit();

        $buah->nama_buah     = $request->nama_buah;
        $buah->harga         = $request->harga;

        $buah->save();

        return redirect()->route('fruit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //keyword untuk mencari data (findOrFail)
        $buah = Fruit::findOrFail($id);
        // menyertakan data kedalam view
        return view('fruit.show', compact('buah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // karna kita mau mendapatkan satu data aja makanya kita pke findOrFail
        $buah = Fruit::findOrFail($id);
        return view('fruit.edit', compact('buah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $buah = Fruit::findOrFail($id);

        $buah->nama_buah     = $request->nama_buah;
        $buah->harga         = $request->harga;

        $buah->update();

        return redirect()->route('fruit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $buah = Fruit::findOrFail($id);
        $buah->delete();
        return redirect()->route('fruit.index');
    }
}
