<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::get();
        $siswa = [
            'siswas' => $siswa
        ];
        return view('siswa.index', $siswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        Siswa::insert([
            'nama_siswa' => $req->nama,
            'gender' => $req->gender,
            'umur' => $req->umur,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_siswa = Siswa::where('id', '=', $id)
            ->first();
        $tampil_siswa = [
            "siswa" => $data_siswa
        ];
        return view('siswa.show', $tampil_siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_siswa = Siswa::where('id', '=', $id)
            ->first();
        $data_siswa = [
            'siswa' => $edit_siswa
        ];
        return view('siswa/edit', $data_siswa);
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
    function deleteSiswa($id) {
        Siswa::where('id',$id)->delete();
            return redirect('siswa');
    }
    
    public function destroy($id)
    {
        //
    }
}
