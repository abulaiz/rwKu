<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use Validator;
use Auth;

class SubmissionController extends Controller
{

    public function index(){
        if(Auth::user()->hasRole('rw')){
            $data = Submission::where('status', 2)->orWhere('status', 4)->orderBy('status', 'asc')->get();    
        } else {
            $rt = Auth::user()->rt;
            $data = Submission::whereHas('resident',function($q) use ($rt){
                                    $q->where('rt', $rt);
                                })->orderBy('status', 'asc')->get();
        }
        return view('admin/service/submission', compact('data'));         
    }

    public function store(Request $req){
        $rules = [
            'necessity'=>'required',
            'nik_asli'=>'required|exists:residents,nik'
        ];

        $v = Validator::make($req->all(),$rules);

        Submission::create([
        	'necessity' => $req->necessity,
        	'nik' => $req->nik_asli,
        	'kk_date' => '2018-12-12', 	
        	'skp_number' => ' - ',	
        	'skp_date' => '2018-12-12',
        	'status' => 1
        ]);

        if($v->passes()){
    		return redirect()->back()->with(['_msg'=>'Permintaan anda sudah terkirim, silahkan tunggu kofirmasi lebih lanjut','_e'=>'success']);        	
        } else {
    		return redirect()->back()->with(['_msg'=>'Silahkan Lengkapi formulir','_e'=>'warning']);        	        	
        }    	
    }
}
