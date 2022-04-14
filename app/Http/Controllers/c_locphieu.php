<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\phieu;
use App\User;
use App\phong;

class c_locphieu extends Controller
{
    public function listphieu()
    {
    	$User = User::all();
    	$phong = phong::all();
        $phieu = phieu::orderBy('id','desc')->paginate(100);
        $tong = phieu::orderBy('id','desc')->get();
        return view('admin.phieu.locphieu',[
            'User'=>$User,
            'phong'=>$phong,
            'phieu'=>$phieu,
        ]);
    }

    public function locphieu(Request $Request)
    {
    	$i1 = $Request->ngay1;
    	$i2 = $Request->ngay2;
		
    	$User = User::all();
    	$phong = phong::all();
        $phieu = phieu::orderBy('id','desc');
        if($Request->uid){ $phieu->where('u_id',$Request->uid); }
        if($Request->pid){  $phieu->where('p_id',$Request->pid); }
        if($i1 && $i2){
            $phieu->where(function($query) use ($i1, $i2){
                $query->wherebetween('ngay1', [$i1,$i2])->orwherebetween('ngay2', [$i1,$i2]);
            });
        }
        $phieu = $phieu->paginate(100);
        return view('admin.phieu.locphieu',[
        	'User'=>$User,
            'phong'=>$phong,
            'phieu'=>$phieu,
            'date1'=>$Request->ngay1,
            'date2'=>$Request->ngay2,
            'uid'=>$Request->uid,
            'pid'=>$Request->pid,
        ]);
    }



}
