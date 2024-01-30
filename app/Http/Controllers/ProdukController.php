<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = DB::table('table_kategori')->get();
        $produk = DB::table('table_produk')->join('table_kategori', 'kategoriID', '=', 'table_kategori.id')
            ->select('table_produk.*', 'table_kategori.kategori')->get();
        $title = 'Delete Data!';
        $text = 'Are You Sure Want To Delete?';
        confirmDelete($title, $text);
        return view('produk.index', compact('kategori', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('table_kategori')->get();
        return view('produk.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('table_produk')->insert([
            'namaproduk' => $request->namaproduk,
            'kategoriID' => $request->namakategori,
            'harga' => $request->harga,
            'fotoproduk' => $request->fotoproduk->store('foto/produk', 'public'),
            'deskripsi' => $request->deskripsi
        ]);
        Alert::success('Hore!', 'Categories Berhasil');
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('table_kategori')->get();
        $produk = DB::table('table_produk')->where('id', $id)->get();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('table_produk')->where('id', $id)->update([
            'namaproduk' => $request->namaproduk,
            'kategoriID' => $request->namakategori,
            'harga' => $request->harga,
            'fotoproduk' => $request->fotoproduk->Store('foto/produk', 'public'),
            'deskripsi' => $request->deskripsi
        ]);
        Alert()->success('Hore!', 'Categories Berhasil');
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('table_produk')->where('id', $id)->delete();
        return redirect('produk');
    }
}
