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
    <form method="POST" action="admin/locphieu/loc">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="col-lg-2">
            <div class="control-group">
                <label>Ngày đầu</label>
                <input  name='ngay1' type="date" @if(isset($date1)) value="{{$date1}}" @endif class="form-control" />
            </div>
        </div>
        <div class="col-lg-2">
            <div class="control-group">
                <label>Ngày cuối</label>
                <input  name='ngay2' type="date" @if(isset($date2)) value="{{$date2}}" @endif class="form-control" />
            </div>
        </div>
        <div class="col-lg-2">
            <div class="control-group">
                <label>Tên nhân viên</label>
                <select name="uid" class="form-control" id='select2'>
                    <option value="">---</option>
                    @foreach($User as $val)
                    <option <?php if(isset($uid) && $uid == $val->id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="control-group">
                <label>Phòng</label>
                <select name="pid" class="form-control">
                    <option value="">---</option>
                    @foreach($phong as $val)
                    <option <?php if(isset($pid) && $pid == $val->id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="control-group">
                <label>Lọc</label>
                <input value="Lọc" type="submit" class="form-control" />
            </div>
        </div>
    </form>
</div>
<br>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Tổng phiếu {{count($phieu)}}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            @if(count($phieu)>0)
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <th>Tên nhân viên</th>
                                        <th>Mã</th>
                                        <th>Phòng</th>
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
                                    @foreach($phieu as $val)
                                    <?php
                                        $ngay1 = date_format(date_create($val->ngay1),"l");
                                        $ngay2 = date_format(date_create($val->ngay2),"l");
                                    ?>
                                    <tr style="white-space: nowrap;">
                                        <td>{{$val->user->name}}</td>
                                        <td>{{$val->user->code}}</td>
                                        <td>{{$val->user->phong->name}}</td>
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
                                            @if($val->status == 0)
                                                Chưa gửi
                                            @elseif($val->status == 1)
                                                T.phòng đang duyệt
                                            @elseif($val->status == 2)
                                                G.đốc đang duyệt
                                            @elseif($val->status == 3)
                                                Duyệt xong
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
								
                            </table>
							{{ $phieu->links() }}
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


        
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() { $('#select2').select2({ placeholder: 'Select ...' }); });
</script>

@endsection
