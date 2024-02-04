<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('table_produk')->join('table_kategori', 'table_produk.kategoriID', '=', 'table_kategori.id')
            ->select('table_produk.*', 'table_kategori.kategori')->get();
        return view('landingpage.cardproduk', compact('produk'));
    }
    public function orderID(string $id)
    {
        $produk = DB::table('table_produk')->where('id', $id)->first();
        return view('order.form', compact('produk'));
    }
    public function ListTransaksi()
    {
        $transaksi = Db::table('table_transaksi')->join('table_produk', 'table_transaksi.barang_id', '=', 'table_produk.id')
            ->select('table_transaksi.*', 'table_produk.*')->get();
        return view('transaksi.list', compact('transaksi'));
    }
    public function uploadBukti($id)
    {
        $buktiID = DB::table('table_transaksi')->where('id', $id)->get();
        return view('order.upload', compact('buktiID'));
    }
    public function upload(Request $request, string $id)
    {
        DB::table('table_transaksi')->where('id', $id)->update([
            'BuktiBayar' => $request->buktibayar->store('foto/bukti', 'public'),
        ]);
        return redirect('transaksi');
    }
    public function status(string $id)
    {
        $data = DB::table('table_transaksi')->where('id', $id)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 1) {
            DB::table('table_transaksi')->where('id', $id)->update([
                'status' => 0
            ]);
        } else {
            DB::table('table_transaksi')->where('id', $id)->update([
                'status' => 1
            ]);
        }
        return redirect('transaksi');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('table_transaksi')->insert([
            'barang_id' => $request->barang_id,
            'quantity' => $request->quantity,
        ]);
        return redirect('transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
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
        //
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
    }
}
