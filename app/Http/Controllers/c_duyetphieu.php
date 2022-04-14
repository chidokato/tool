<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;
use App\phieu;

class c_duyetphieu extends Controller
{
	public function listphieu()
    {
        if(Auth::user()->phong->id == 6){
			$pid = Auth::user()->phong->id;
            $phieu = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
				->where('users.p_id',$pid)
                ->where(function ($query) {
                    $query->where('status',1)
                        ->orwhere('status',2);
                    })
                ->where('tbl_phieu.note','Nghỉ phép')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
			$phieu1 = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('status',2)
                ->where('tbl_phieu.note','Nghỉ phép')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
            $congtac = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
				->where('users.p_id',$pid)
                 ->where(function ($query) {
                    $query->where('status',1)
                        ->orwhere('status',2);
                    })
                ->where('tbl_phieu.note','Công tác')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
			$congtac1 = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('status',2)
                ->where('tbl_phieu.note','Công tác')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
            $ditrvesom = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
				->where('users.p_id',$pid)
                 ->where(function ($query) {
                    $query->where('status',1)
                        ->orwhere('status',2);
                    })
                ->where('tbl_phieu.note','Đi trễ về sớm')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
			$ditrvesom1 = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('status',2)
                ->where('tbl_phieu.note','Đi trễ về sớm')
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
        }else{
            $pid = Auth::user()->phong->id;
            $phieu = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('users.p_id',$pid)
				->where('note','Nghỉ phép')
                ->where(function ($query) {
                    $query->where('status',1)
                        ->orwhere('status',2);
                    })
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
            $congtac = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('users.p_id',$pid)->where('note','Công tác')
                ->where(function ($query) {
                    $query->where('status',1)
                          ->orwhere('status',2);
                    })
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
            $ditrvesom = phieu::join('users', 'tbl_phieu.u_id', '=', 'users.id')
                ->where('users.p_id',$pid)->where('note','Đi trễ về sớm')
                
                ->where(function ($query) {
                    $query->where('status',1)
                          ->orwhere('status',2);
                    })
                ->select('tbl_phieu.*')
                ->orderBy('id','desc')
                ->get();
			$phieu1 = phieu::where('id',0)->get();
			$congtac1 = phieu::where('id',0)->get();
			$ditrvesom1 = phieu::where('id',0)->get();
        }
        return view('admin.duyetphieu.list',[
            'phieu'=>$phieu,
            'phieu1'=>$phieu1,
            'congtac'=>$congtac,
            'congtac1'=>$congtac1,
            'ditrvesom'=>$ditrvesom,
            'ditrvesom1'=>$ditrvesom1,
        ]);
    }

    public function duyet($id)
    {
        $phieu = phieu::find($id);
        $phieu->status = '3';
        $phieu->save();
        return redirect('admin/duyetphieu/list')->with('Alerts','Thành công');
    }

    public function guigd($id)
    {
        $phieu = phieu::find($id);
        $phieu->status = '2';
        $phieu->save();
        return redirect('admin/duyetphieu/list')->with('Alerts','Thành công');
    }

    public function trave($id)
    {
        $phieu = phieu::find($id);
        $phieu->status = '0';
        $phieu->save();
        return redirect('admin/duyetphieu/list')->with('Alerts','Thành công');
    }

    
}

