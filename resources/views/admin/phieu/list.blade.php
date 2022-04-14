@extends('admin.layout.index')

@section('phieu') class="active" @endsection

@section('content')

<form action="admin/nghiphep/add" method="POST" enctype="multipart/form-data">
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
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Phiếu nghỉ phép
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="control-group">
                            <label>Ngày nghỉ</label>
                            <input required name='ngay1' type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="control-group">
                            <label>Buổi</label>
                            <select name="buoi1" class=" form-control" id="sort_by">
                                <option value="0">Sáng</option>
                                <option value="0.5">Chiều</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="control-group">
                            <label>Ngày đi làm</label>
                            <input required name='ngay2' type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="control-group">
                            <label>Buổi</label>
                            <select name="buoi2" class=" form-control">
                                <option value="0">Sáng</option>
                                <option value="0.5">Chiều</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-5">
                        <div class="control-group">
                            <label>Tổng số ngày nghỉ</label>
                            <input disabled name='' type="text" value="2 ngày" class="form-control" />
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="control-group">
                            <label>Hình thức nghỉ</label>
                            <select name="hinhthuc" class="form-control">
                                <option value="Phép năm">Phép năm</option>
                                <option value="Không lương">Không lương</option>
                                <option value="Đặc biệt">Đặc biệt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
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


