<?php

namespace App\Http\Controllers\Resident;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\KkNumber;

class KKController extends Controller
{
    public function list($keyword){
    	$data = KkNumber::where('number', $keyword);
    	if( $data->exists() ) {
    		$resident = [];
    		$kk = $data->get()[0];
    		foreach ($kk->resident as $items) {
    			$resident[] = [
                    'nik' => $item->nik,
					'nama' => $item->name,
					'jenis_kelamin' => $item->sex,
					'tempat_lahir' => $item->place_of_birth,
					'tanggal_lahir' => $item->date_of_birth,
					'kewarganegaraan' => $item->citizenship,
					'nikah' => $item->married,
					'pekerjaan' => $item->job,
					'agama' => $item->religion,
					'alamat' => $item->address
    			];
    		}
    		return response()->json(['exists' => true, 'resident' => $resident]);
    	} else {
    		return response()->json(['exists' => false]);
    	}
    }
}
