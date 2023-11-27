<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Facades\Http; 
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getDataFromApi()
    {
        $client = new Client();

        //HTTP request untuk mengambil data dari API
        $response = $client->post('https://recruitment.fastprint.co.id/tes/api_tes_programmer', [
            'form_params' => [
                'username' => 'tesprogrammer271123C21',
                'password' => 'db340b51212133433914ae03d4a3ba46'
            ],
        ]);

        // Ambil data dari respons JSON
        $data = json_decode($response->getBody(), true);
        
        // Simpan data ke dalam tabel produks
        foreach ($data['data'] as $item) {
            Produk::create([
                'nama_produk' => $item['nama_produk'],
                'harga' => $item['harga'],
                'kategori_id' => $item['kategori'],
                'status_id' => $item['status'],
            ]);
        }

        return view('data', ['data' => $data]);
    }

    public function index()
    {
        // Ambil data produk dari database
        $produks = Produk::all();

        // Tampilkan halaman dengan data produk
        return view('home', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
