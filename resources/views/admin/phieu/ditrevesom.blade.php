@extends('admin.layout.index')

@section('phieu') class="active" @endsection

@section('content')

<form action="admin/ditrevesom/add" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Phiếu đi trễ về sớm
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="control-group">
                            <label>Ngày</label>
                            <input required name='ngay1' type="date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="control-group">
                            <label>Từ</label>
                            <select name="gio1" class="form-control">
                            @for ($i=8; $i <= 17 ; $i++)
                                <option value='{{$i}}'>{{$i}} Giờ</option>
                            @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="control-group">
                            <label style="color: #fff">Phút</label>
                            <select name="phut1" class="form-control">
                                <option value='00'>00 Phút</option>
                            @for ($i=15; $i < 60 ; $i=$i+15)
                                <option value="{{$i}}">{{$i}} Phút</option>
                            @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="control-group">
                            <label>Đến</label>
                            <select name="gio2" class="form-control">
                            @for ($i=8; $i <= 17 ; $i++)
                                <option value='{{$i}}'>{{$i}} Giờ</option>
                            @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="control-group">
                            <label style="color: #fff">Phút</label>
                            <select name="phut2" class="form-control">
                                <option value='00'>00 Phút</option>
                            @for ($i=15; $i < 60 ; $i=$i+15)
                                <option value="{{$i}}">{{$i}} Phút</option>
                            @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="control-group">
                            <label>Lý do</label>
                            <textarea name="lydo" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
</form>

@endsection


