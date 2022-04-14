@extends('admin.layout.index')

@section('dashboard') class="active" @endsection

@section('content')
<?php use App\phieu; ?>
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">{{Auth::User()->phong->name}}</h1>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Phiếu nghỉ phép
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <th>Hành động</th>
                                        <th>Tên nhân viên</th>
                                        <th>Phòng ban</th>
                                        <th>Ngày nghỉ</th>
                                        <th>Ngày đi làm</th>
                                        <th>Số ngày nghỉ</th>
                                        <th>Lý do</th>
                                        <th>Loại Phiếu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($phieu as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt Phiếu ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php if($val->buoi1=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td><?php if($val->buoi2=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay2) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> <i> ({{ date_format(date_create($val->ngay2),"d/m/Y") }}) </i></td>
                                        <td>{{$val->songay}} ngày</td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} ({{$val->hinhthuc}})</td>
                                    </tr>
                                    @endforeach
									@if(count($phieu1) > 0)
									@foreach($phieu1 as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt Phiếu ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php if($val->buoi1=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td><?php if($val->buoi2=='0'){echo'Sáng ';}else{echo'Chiều ';}
                                            switch ($ngay2) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> <i> ({{ date_format(date_create($val->ngay2),"d/m/Y") }}) </i></td>
                                        <td>{{$val->songay}} ngày</td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} ({{$val->hinhthuc}})</td>
                                    </tr>
                                    @endforeach
									@endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Phiếu Công tác
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <th>Hành động</th>
                                        <th>Tên nhân viên</th>
                                        <th>Phòng ban</th>
                                        <th>Ngày công tác</th>
                                        <th>Thời gian</th>
                                        <th>Lý do</th>
                                        <th>Loại Phiếu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($congtac as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td>
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} </td>
                                    </tr>
                                    @endforeach
									@foreach($congtac1 as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td>
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>  
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Phiếu đi trễ về sớm
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="white-space: nowrap;">
                                        <th>Hành động</th>
                                        <th>Tên nhân viên</th>
                                        <th>Phòng ban</th>
                                        <th>Ngày đi trễ về sớm</th>
                                        <th>Thời gian</th>
                                        <th>Lý do</th>
                                        <th>Loại Phiếu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ditrvesom as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php 
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td>
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} </td>
                                    </tr>
                                    @endforeach
									@foreach($ditrvesom1 as $val)
                                    <tr style="white-space: nowrap;">
                                        <?php
                                            $ngay1 = date_format(date_create($val->ngay1),"l");
                                            $ngay2 = date_format(date_create($val->ngay2),"l");
                                        ?>
                                        <td>
                                            @if(Auth::user()->phong->id == 6)
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @else
                                            @if($val->status == 2)
                                            GD duyệt...
                                            @else
                                            <a class="btn-primary btn-sm" onClick="javascript:return window.confirm('Duyệt luôn ?');" href="admin/duyetphieu/duyet/{{$val->id}}">Duyệt</a> 
                                            <a style="background: #7d8a19;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Gửi GĐ ?');" href="admin/duyetphieu/guigd/{{$val->id}}">Gửi GĐ</a>
                                            <a style="background: #bb0808;" class="btn-primary btn-sm" onClick="javascript:return window.confirm('Trả về ?');" href="admin/duyetphieu/trave/{{$val->id}}">Trả về</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{$val->user->name}}</td>
                                        <td>{{ $val->user->phong->name }}</td>
                                        <td><?php 
                                            switch ($ngay1) {
                                                case 'Monday':
                                                    echo 'Thứ 2';
                                                    break;
                                                case 'Tuesday':
                                                    echo 'Thứ 3';
                                                    break;
                                                case 'Wednesday':
                                                    echo 'Thứ 4';
                                                    break;
                                                case 'Thursday':
                                                    echo 'Thứ 5';
                                                    break;
                                                case 'Friday':
                                                    echo 'Thứ 6';
                                                    break;
                                                case 'Saturday':
                                                    echo 'Thứ 7';
                                                    break;
                                                case 'Sunday':
                                                    echo 'Chủ Nhật';
                                                    break;
                                            }
                                        ?> (<i>{{ date_format(date_create($val->ngay1),"d/m/Y") }}</i>)</td>
                                        <td>
                                            {{$val->gio1}}h{{$val->phut1}} - {{$val->gio2}}h{{$val->phut2}}
                                        </td>
                                        <td>{{$val->lydo}}</td>
                                        <td>{{$val->note}} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>        
    </div>
</div>

@endsection
