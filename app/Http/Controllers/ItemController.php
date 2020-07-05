<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;
class ItemController extends Controller
{
    /**
     * Didsplay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ArtikelModel::getAll();
        return view('/artikel/index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/artikel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        ArtikelModel::saveArtikel($request->all());
        return redirect('/artikel')->with('success','Berhasil tambah Artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = ArtikelModel::get($id);
        return view('artikel/detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data = ArtikelModel::get($id);
        return view('/artikel/edit',compact('data'));
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
        ArtikelModel::editArtikel($id, $request->all());
        return redirect('/artikel')->with('edit','Berhasil Edit Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArtikelModel::destroy($id);
        return redirect('/artikel')->with('destroy','Berhasil hapus artikel');
    }

    public function contohuser()
    {   
        ArtikelModel::contohUser();
        return redirect('/artikel')->with('contohuser','berhasil membuat 5 user');
    }
}
