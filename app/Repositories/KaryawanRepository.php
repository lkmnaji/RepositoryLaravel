<?php

namespace App\Repositories;

use App\Repositories\karyawan;
use Iluminate\Http\Request;

class KaryawanRepository
{
  // Style Edu-Tech 
  // protected $model;

  // public function __construct (karyawan $karyawan)
  // {
  //   $this->model = $karyawan;
  // }

  // public function index ($page){
  //   return $this->model->paginate($page);
  // }

  // public function cari($request){
  //   return $this->model->where('nama_karyawan', 'LIKE', '%' .$request->get('search'). '%');
  // }

      // Style Importir
      public function index($page)
      {
          return karyawan::paginate($page);
      }
      public function cari ($request)
      {
          return karyawan::where('nama_karyawan', 'LIKE', '%' . $request->get('search'). '%');
      }
}
