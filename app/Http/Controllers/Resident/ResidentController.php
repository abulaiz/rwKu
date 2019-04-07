<?php

namespace App\Http\Controllers\Resident;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Resident;
use App\Models\KkNumber;

class ResidentController extends Controller
{
    public function page_add(){
      $kk = KkNumber::all();
      return view("admin.resident.add", compact("kk"));
    }

    public function page_list(){
      return view("admin.resident.list");
    }

    public function store(Request $req){
      ($req->type != 'kk') ? Self::store_resident($req) : Self::store_kk($req);
      return redirect()->back()->withSuccess(sprintf("Berhasil Menambah Data!"));
    }

    public function store_resident($req){
      $this->validate($req, [
        "kk_number" => "required|numeric",
        "nik" => "required|numeric|digits:16",
        "name" => "required|string",
        "sex" => "required|string",
        "place_of_birth" => "required|string",
        "date_of_birth" => "required|date",
        "citizenship" => "required|string",
        "marital_status" => "required",
        "job" => "required|string",
        "religion" => "required|string",
        "address" => "required|string",
        "rt" => "required|numeric",
        "rw" => "required|numeric",
        "kel_village" => "required|string",
        "sub_district" => "required|string"
      ]);

      $resident = new Resident;
      $resident->nik = $req->nik;
      $resident->kk_number_id = $req->kk_number;
      $resident->name = ucwords($req->name);
      $resident->sex = ucwords($req->sex);
      $resident->place_of_birth = ucwords($req->place_of_birth);
      $resident->date_of_birth = $req->date_of_birth;
      $resident->address = ucwords($req->address);
      $resident->rt = $req->rt;
      $resident->rw = $req->rw;
      $resident->kel_village = ucwords($req->kel_village);
      $resident->sub_district = ucwords($req->sub_district);
      $resident->religion = ucwords($req->religion);
      $resident->married = ($req->marital_status == 'on') ? 1 : 0 ;
      $resident->job = ucwords($req->job);
      $resident->citizenship = ucwords($req->citizenship);
      $resident->save();
    }

    public function store_kk($req){
      $this->validate($req, [
        'kk_number' => 'required|numeric|digits:16',
      ]);

      $kk = new KkNumber;
      $kk->number = $req->kk_number;
      $kk->save();
    }
}
