<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KkNumber;

class SementaraController extends Controller
{
    public function index(){

    	$kk = KkNumber::all();
    	$kk_res = [];
    	$nik = [];

    	$i = 0;
    	foreach ($kk as $item) {
    		$niks = [];
    		foreach ($item->resident as $item2) {
    			$nik[] = [
					'nama' => $item2->name,
					'jenis_kelamin' => $item2->sex,
					'tempat_lahir' => $item2->place_of_birth,
					'tanggal_lahir' => $item2->date_of_birth,
					'kewarganegaraan' => $item2->citizenship,
					'nikah' => $item2->married,
					'pekerjaan' => $item2->job,
					'agama' => $item2->religion,
					'alamat' => $item2->address
    			];
    			$niks[] = "$i";
    			$i++;
     		}

            $kk_res[] = [
            	'no_kk' => $item->number, 'niks' => $niks
            ];
    	}

    	// dd(['1' => $kk_res, '2' => $nik]);

		return view('service.covering-letter.index', compact('kk_res', 'nik'));    	
    }
}
