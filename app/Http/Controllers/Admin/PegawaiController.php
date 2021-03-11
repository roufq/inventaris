<?php

namespace App\Http\Controllers\Admin;
use App\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pegawai'] = Pegawai::all();
        return view('admin.pegawai.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pegawai;
        $data->nama_pegawai = $request->get('nama_pegawai');
        $data->nip = $request->get('nip');
        $data->alamat = $request->get('alamat');
        $data->save();
        return redirect('admin/pegawai');
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
        $pegawai = Pegawai::where('id',$id)->first();
        return view('admin.pegawai.edit',compact('pegawai'));
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
        $pegawai = Pegawai::FindOrFial();
        $data = $request->all();
        $data['is_parent']=$request->input('is_parent',0);
        $setatus=$pegawai->fill($data)->save();
        if($setatus){
            request()->session()->flash('success','Pegawai Berhasil Di Edit');
        }else{
            request()->session()->flash('gagal','Pegawai Gagal Di Edit');
        }
        return redirect('admin/pegawai');
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
