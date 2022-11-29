<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class MasterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Siswa::all();

        return view('admin.MasterSiswa',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.TambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = './template/img';;
        $file->move($tujuan_upload,$nama_file);


        Siswa::create ([
            'nama'=>$request->nama,
            'jk'=>$request->jk,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'about'=>$request->about,
            'foto'=>$nama_file
        ]);

        return redirect ('/MasterSiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id);
        $Kontak = $data->Kontak();
        $project = $data->project();
        //return ($kontak);
        return view('admin.ShowSiswa',compact('data','Kontak','project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('admin.EditSiswa',compact('data'));
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
    public function hapus($id)
    {
        $data=Siswa::find($id)->delete();
        return redirect('/MasterSiswa');
    }
}
