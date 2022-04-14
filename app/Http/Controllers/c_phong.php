<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\phong;

class c_phong extends Controller
{
    public function getlist()
    {
    	$phong = phong::all();
    	return view('admin.phong.list',['phong'=>$phong]);
    }

    public function postadd(Request $Request)
    {
    	$phong = new phong;
        $phong->name = $Request->name;
        $phong->code = $Request->code;
        $phong->save();
        return redirect('admin/phong/list')->with('Alerts','Success');
    }

    public function getedit($id)
    {
        $data = phong::findOrFail($id);
        $phong = phong::all();
    	return view('admin.phong.list',['data'=>$data, 'phong'=>$phong]);
    }

    public function postedit(Request $Request,$id)
    {
        $phong = phong::find($id);
        $phong->name = $Request->name;
        $phong->code = $Request->code;
        $phong->save();
        return redirect('admin/phong/list/')->with('Success','Success');
    }

    public function getdelete($id)
    {
        $phong = phong::find($id);
        $phong->delete();
        return redirect('admin/phong/list')->with('Success','Success');
    }
}
