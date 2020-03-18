<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_buku = \App\Buku::all();
        return view('buku.index',['data_buku' => $data_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App\Buku::create($request->all());
        return redirect('/buku')->with('sukses','Data Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = \App\Buku::find($id);
        return view('buku/edit',['buku' => $buku]);
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
        $buku = \App\Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = \App\Buku::find($id);
        $buku->delete($buku);
        return redirect('/buku')->with('sukses','Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $buku = \App\Buku::find($id);
        return view('buku/detail',['buku' => $buku]);
    }
}
