<?php

namespace App\Http\Controllers;

use App\Nama_Siswa_RPL_1;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;
class NamaSiswaRPL1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json()
    {
        return Datatables::of(Nama_Siswa_RPL_1::all())->make(true);
    }
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nama_Siswa_RPL_1  $nama_Siswa_RPL_1
     * @return \Illuminate\Http\Response
     */
    public function show(Nama_Siswa_RPL_1 $nama_Siswa_RPL_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nama_Siswa_RPL_1  $nama_Siswa_RPL_1
     * @return \Illuminate\Http\Response
     */
    public function edit(Nama_Siswa_RPL_1 $nama_Siswa_RPL_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nama_Siswa_RPL_1  $nama_Siswa_RPL_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nama_Siswa_RPL_1 $nama_Siswa_RPL_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nama_Siswa_RPL_1  $nama_Siswa_RPL_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nama_Siswa_RPL_1 $nama_Siswa_RPL_1)
    {
        //
    }
}
