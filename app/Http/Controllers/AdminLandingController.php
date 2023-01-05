<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLandingController extends Controller
{
    //

    public function home()
    {
        # code...



        return view('admin.home');

    }


    public function master_pricelist()
    {
        # code...

        return view('admin.master_pricelist');


    }


    public function master_user()
    {
        # code...

        return view('admin.master_user');



    }


    public function master_rekanan()
    {
        # code...

        return view('admin.master_rekanan');

    }


    public function master_marketing()
    {
        # code...

        return view('admin.master_marketing');
    }



    public function master_tim_teknis()
    {
        # code...

        return view('admin.master_tim_teknis');

    }


    public function master_project()
    {
        # code...

        return view('admin.master_project');
    }


    public function tabel_piutang_project()
    {
        # code...

        return view('admin.tabel_piutang_project');

    }


    public function tabel_hutang_komisi()
    {
        # code...

        return view('admin.tabel_hutang_komisi');

    }


    public function tabel_hutang_gaji_tim_teknis()
    {
        # code...

        return view('admin.tabel_hutang_gaji_tim_teknis');

    }


    public function tabel_hutang_rekanan_pekerjaan()
    {
        # code...

        return view('admin.tabel_hutang_rekanan_pekerjaan');


    }




    public function tabel_pembukuan_keuangan()
    {
        # code...

        return view('admin.tabel_pembukuan_keuangan');

    }



    // public function FunctionName()
    // {
    //     # code...
    // }















}
