<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\phieu;
use DateTime;
use DatePeriod;
use DateInterval;
use Mail;

class c_phieu extends Controller
{
    public function getlist()
    {
    	return view('admin.phieu.list');
    }
    public function postadd(Request $Request)
    {
        // đếm tổng số ngày
        $tongsongay = 0;
        $first_date = strtotime($Request->ngay1);
        $second_date = strtotime($Request->ngay2);
        $datediff = abs($first_date - $second_date);
        $tongsongay = floor($datediff / (60*60*24)); //tổng số ngày
        // đếm tổng số ngày
        // đếm số ngày thư 7 chủ nhật
        $period = new DatePeriod(
            new DateTime($Request->ngay1),
            new DateInterval('P1D'),
            new DateTime($Request->ngay2)
        );
        $thuBay = 0;
        $chuNhat = 0;
        foreach ($period as $key => $value) {
            $timestamp = strtotime($value->format('Y-m-d'));    
            $day = date('l', $timestamp);
            if($day == 'Saturday')
                $thuBay++;
            if($day == 'Sunday')
                $chuNhat++;
        }
        $thuBay = $thuBay/2;  //số ngày thứ 7
        $chuNhat; //số ngày chủ nhật
        $tongsongay = $tongsongay-$thuBay-$chuNhat-$Request->buoi1+$Request->buoi2;
    	//if($tongsongay <= 0)
		//	return false;
		$phieu = new phieu;
        $phieu->u_id = Auth::User()->id;
        $phieu->p_id = Auth::User()->phong->id;
        $phieu->ngay1 = date_format(date_create($Request->ngay1),"Y-m-d");
        $phieu->buoi1 = $Request->buoi1;
        $phieu->ngay2 = date_format(date_create($Request->ngay2),"Y-m-d");
        $phieu->buoi2 = $Request->buoi2;
        $phieu->hinhthuc = $Request->hinhthuc;
        $phieu->lydo = $Request->lydo;
        $phieu->songay = $tongsongay;
        $phieu->note = 'Nghỉ phép';
        $phieu->status = '0';
        $phieu->ngaylamphieu = date("Y-m-d");
        $phieu->save();
        return redirect('admin/dashboard')->with('Alerts','Thành công');
    }

    public function congtac()
    {
        return view('admin.phieu.congtac');
    }
    public function luuphieuct(Request $Request)
    {
        $phieu = new phieu;
        $phieu->u_id = Auth::User()->id;
        $phieu->p_id = Auth::User()->phong->id;
        $phieu->ngay1 = date_format(date_create($Request->ngay1),"Y-m-d");
        $phieu->gio1 = $Request->gio1;
        $phieu->gio2 = $Request->gio2;
        $phieu->phut1 = $Request->phut1;
        $phieu->phut2 = $Request->phut2;
        $phieu->lydo = $Request->lydo;
        $phieu->note = 'Công tác';
        $phieu->status = '0';
        $phieu->ngaylamphieu = date("Y-m-d");
        $phieu->save();
		
		//Mail::send('email_feedback', array('name'=>$name,'phone'=>$phone,'email'=>$email,'link'=>$link,'content'=>$content,'date'=>$date), function($message){
		//	$message->from('tuan.pn92@gmail.com', 'Duyệt Phiếu - Maivietland');
		//	$message->to('tuan.pn92@gmail.com', 'Duyệt Phiếu - Maivietland')->subject('Duyệt Phiếu - Maivietland');
        //});
        
		return redirect('admin/dashboard')->with('Alerts','Thành công');
    }

    public function ditrevesom()
    {
        return view('admin.phieu.ditrevesom');
    }
    public function luuphieudtvs(Request $Request)
    {
        $phieu = new phieu;
        $phieu->u_id = Auth::User()->id;
        $phieu->p_id = Auth::User()->phong->id;
        $phieu->ngay1 = $i1 = date_format(date_create($Request->ngay1),"Y-m-d");
        $phieu->gio1 = $Request->gio1;
        $phieu->gio2 = $Request->gio2;
        $phieu->phut1 = $Request->phut1;
        $phieu->phut2 = $Request->phut2;
        $phieu->lydo = $Request->lydo;
        $phieu->note = 'Đi trễ về sớm';
        $phieu->status = '0';
        $phieu->ngaylamphieu = date("Y-m-d");
        $phieu->save();
        return redirect('admin/dashboard')->with('Alerts','Thành công');
    }
	
	public function xacnhancong()
    {
        return view('admin.phieu.xacnhancong');
    }
    public function luuphieuxnc(Request $Request)
    {
        $phieu = new phieu;
        $phieu->u_id = Auth::User()->id;
        $phieu->p_id = Auth::User()->phong->id;
        $phieu->ngay1 = $i1 = date_format(date_create($Request->ngay1),"Y-m-d");
        $phieu->buoi1 = $Request->buoi1;
        $phieu->lydo = $Request->lydo;
        $phieu->note = 'Xác nhận công';
        $phieu->status = '0';
        $phieu->ngaylamphieu = date("Y-m-d");
        $phieu->save();
        return redirect('admin/dashboard')->with('Alerts','Thành công');
    }

}
