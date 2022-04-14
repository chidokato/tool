@extends('admin.layout.index')

@section('dashboard') class="active" @endsection

@section('content')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">NEWSKY LAND</h1>
  </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div>Phiếu nghỉ phép</div>
            </div>
            <a href="admin/nghiphep/add">
                <div class="panel-footer">
                    <span class="pull-left">Thêm phiếu</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div>Phiếu công tác</div>
            </div>
            <a href="admin/congtac/add">
                <div class="panel-footer">
                    <span class="pull-left">Thêm phiếu</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div>Phiếu đi trễ về sớm</div>
            </div>
            <a href="admin/ditrevesom/add">
                <div class="panel-footer">
                    <span class="pull-left">Thêm phiếu</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <!--div class="col-lg-3 col-xs-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div style='font-size: 90%;'>Phiếu xác nhận công </div>
            </div>
            <a href="admin/xacnhancong/add">
                <div class="panel-footer">
                    <span class="pull-left">Thêm phiếu</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div-->

	
</div>



<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Danh sách phiếu chưa duyệt
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            @if(count($phieu)>0)
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <!-- <th>Phòng</th> -->
										<th>Trạng thái</th>
                                        <th>Loại Phiếu</th>
                                        <th>Ngày nghỉ</th>
                                        <th>Ngày đi làm</th>
                                        <th>Số ngày nghỉ</th>
                                        <th>Ngày C.tác(đi trễ về sớm)</th>
                                        <th>Thời gian</th>
                                        <th>Lý do</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($phieu as $val)
                                    <?php
                                        $ngay1 = date_format(date_create($val->ngay1),"l");
                                        $ngay2 = date_format(date_create($val->ngay2),"l");
                                    ?>
                                    <tr style="white-space: nowrap;">
                                        <!-- <td>{{$val->user->phong->name}}</td> -->
										<td>
                                            @if($val->status == 0)
                                            <a onClick="javascript:return window.confirm('Bạn muốn GỬI bản ghi này?');" href="admin/send/{{$val->id}}"><i class="fa fa-location-arrow"></i> Gửi</a> | 
                                            <a onClick="javascript:return window.confirm('Bạn muốn XÓA bản ghi này?');" href="admin/delete/{{$val->id}}"><i class="fa fa-trash-o"></i> Xóa</a>
                                            @elseif($val->status == 1)
                                            T.phòng duyệt...
                                            @elseif($val->status == 2)
                                            TP.Nhân sự duyệt...
                                            @endif
                                        </td>
                                        <td>{{$val->note}} @if($val->hinhthuc) ({{$val->hinhthuc}}) @endif </td>
                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            <?php if($val->buoi1=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay1) { 
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break; 
                                            } 
                                            ?> 
                                            (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)
                                            @else
                                            ---
                                            @endif
                                        </td>

                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            <?php if($val->buoi2=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay2) {
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break;
                                            }
                                            ?> <i> ({{ date_format(date_create($val->ngay2),"d/m/Y") }}) </i>
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            {{$val->songay}} ngày
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note != 'Nghỉ phép')
                                            <?php
                                            switch ($ngay1) {
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break;
                                            }
                                            ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note != 'Nghỉ phép')
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Danh sách phiếu đã duyệt
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
							@if(count($phieudont)>0)
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <!-- <th>Phòng</th> -->
                                        <th>Loại Phiếu</th>
                                        <th>Ngày nghỉ</th>
                                        <th>Ngày đi làm</th>
                                        <th>Số ngày nghỉ</th>
                                        <th>Ngày C.tác(đi trễ về sớm)</th>
                                        <th>Thời gian</th>
                                        <th>Lý do</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($phieudont as $val)
                                    <?php
                                        $ngay1 = date_format(date_create($val->ngay1),"l");
                                        $ngay2 = date_format(date_create($val->ngay2),"l");
                                    ?>
                                    <tr style="white-space: nowrap;">
                                        <!-- <td>{{$val->user->phong->name}}</td> -->
                                        <td>{{$val->note}} @if($val->hinhthuc) ({{$val->hinhthuc}}) @endif </td>
                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            <?php if($val->buoi1=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay1) { 
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break; 
                                            } 
                                            ?> 
                                            (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)
                                            @else
                                            ---
                                            @endif
                                        </td>

                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            <?php if($val->buoi2=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay2) {
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break;
                                            }
                                            ?> <i> ({{ date_format(date_create($val->ngay2),"d/m/Y") }}) </i>
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note == 'Nghỉ phép')
                                            {{$val->songay}} ngày
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note != 'Nghỉ phép')
                                            <?php
                                            switch ($ngay1) {
                                                case 'Monday': echo 'Thứ 2'; break; case 'Tuesday': echo 'Thứ 3'; break; case 'Wednesday': echo 'Thứ 4'; break; case 'Thursday': echo 'Thứ 5'; break; case 'Friday': echo 'Thứ 6'; break; case 'Saturday': echo 'Thứ 7'; break; case 'Sunday': echo 'Chủ Nhật';  break;
                                            }
                                            ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>
                                            @if($val->note != 'Nghỉ phép')
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                            @else
                                            ---
                                            @endif
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        <td>
                                            Duyệt xong !
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
							{{ $phieudont->links() }}
							@endif
                        </div>
						
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
