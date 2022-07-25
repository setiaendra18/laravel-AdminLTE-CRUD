<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function __construct()
    {
        //global variabel untuk setting untuk judul halaman
        $this->title = "Dependent Dropdown API";
    }
    public function index()
    {
        return view("pages.produk.produk", ["title" => $this->title]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
