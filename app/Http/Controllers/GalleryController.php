<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'galleries' => Gallery::orderBy('id', 'desc')->get()
        ];

        return view('gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'gambar' => ['required', 'image']
        ]);

        $gallery = new Gallery();
        $gallery->gambar = $request->file('gambar')->store('gallery');
        $gallery->save();

        Alert::success('Gambar berhasil ditambahkan');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        $data = [
            'gallery' => $gallery
        ];

        return view('gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
        $request->validate([
            'gambar' => ['required', 'image']
        ]);

        Storage::delete($gallery->gambar);
        $gallery->gambar = $request->file('gambar')->store('gallery');
        $gallery->save();

        Alert::success('Gambar berhasil diupdate');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        Storage::delete($gallery->gambar);
        $gallery->delete();

        Alert::success('Gambar berhasil dihapus');

        return back();
    }
}
