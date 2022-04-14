<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\user;
use App\phieu;

class c_dashboard extends Controller
{
	public function dashboard()
    {
        $user = user::orderBy('id','desc')->get();
        $phieu = phieu::where('status','<',3)->where('u_id',Auth::user()->id)->orderBy('id','desc')->get();
        $phieudont = phieu::where('status',3)->where('u_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
    	return view('admin.dashboard',[
            'user'=>$user,
            'phieu'=>$phieu,
            'phieudont'=>$phieudont,
        ]);
    }

    public function send($id)
    {
        $phieu = phieu::find($id);
        if (Auth::user()->level == 2) {
            $phieu->status = '2';
        }else{
            $phieu->status = '1';
        }
        $phieu->save();
        return redirect('admin/dashboard')->with('Alerts','Thành công');
    }

    public function delete($id)
    {
        $phieu = phieu::find($id);
        $phieu->delete();
        return redirect('admin/dashboard')->with('Alerts','Thành công');
    }
}

