<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\KaryawanRepository;

class KaryawanController extends Controller
{
    protected $model;

    public function __construct(KaryawanRepository $karyawan)
    {
        $this->model = $karyawan;
    }


    public function index()
    {
        $data = $this->model->index(10);
        return view('welcome', compact('data'));
    }

    public function search(Request $request)
    {
        $data = $this->model->cari($request)->paginate();
        return view('welcome', compact('data'));
    }

}
