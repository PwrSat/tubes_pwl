<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\Berita; // Update the import statement
use App\Models\kategori;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function landing()
    {
        $beritas = Berita::all();

        return view("welcome", compact('beritas'));
    }
    public function utama()
    {
        $beritas = Berita::all();

        return view("user.utama", compact('beritas'));
    }
    public function teknologi()
    {
        $beritas = Berita::where('kategori', 3)->get();

        return view("user.teknologi",[
            'beritas' => $beritas
        ]);
    }
    public function politik()
    {
        $beritas = Berita::where('kategori', 4)->get();

        return view("user.politik",[
            'beritas' => $beritas
        ]);
    }
    public function olahraga()
    {
        $beritas = Berita::where('kategori', 1)->get();

        return view("user.olahraga",[
            'beritas' => $beritas
        ]);
    }
    public function hiburan()
    {
        $beritas = Berita::where('kategori', 5)->get();

        return view("user.hiburan",[
            'beritas' => $beritas
        ]);
    }
    public function dunia()
    {
        $beritas = Berita::where('kategori', 2)->get();

        return view("user.dunia",[
            'beritas' => $beritas
        ]);
    }
    public function kriminal()
    {
        $beritas = Berita::where('kategori', 6)->get();

        return view("user.criminal",[
            'beritas' => $beritas
        ]);
    }
    public function detail($id)
    {
        $beritas = Berita::find($id);
        $beritas->dilihat += 1;
        $beritas->save();

        return view("user.detail", compact('beritas'));
    }
    public function buat_berita(){
        $kategori = kategori::all();
        return view("user.buat_berita", compact('kategori'));
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
    public function store(Request $request){
        berita::create([
            'author' => $request->user_id,
            'judul' => $request->judul,
            'berita' => $request->body,
            'detail_berita' => $request->excerpt,
            'kategori' => $request->kategori,
        ]);
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
