@extends('admin.layout.index')

@section('phong') class="active" @endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<div class="row">
    <div class="col-lg-12">
        @if(isset($data))
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="admin/phong/edit/{{$data->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <label>Tên Phòng</label>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                            <div class="control-group">
                                <input required value="{{$data->name}}" name='name' type="text" placeholder="phong ..." class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                            <div class="control-group">
                                <input value="{{$data->code}}" name='code' type="text" placeholder="Mã Phòng ..." class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="control-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="admin/phong/add" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <label>Tên phòng</label>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                            <div class="control-group">
                                <input required name='name' type="text" placeholder="phong ..." class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                            <div class="control-group">
                                <input name='code' type="text" placeholder="Mã Phòng ..." class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="control-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                phong
            </div>
            <div class="panel-body table-responsive">
                @if(count($phong) == 0)
                    <h3 style="color:red">The list is empty !!</h3>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" style="white-space: nowrap;">
                    <thead>
                        <tr >
                            <th class="text-center">Tên phòng</th>
                            <th class="text-center">Mã phòng</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phong as $val)
                        <tr class="editview" >
                            <td>{{$val->name}}</td>
                            <td>{{$val->code}}</td>
                            <td  class="text-center">
                                <a href="admin/phong/edit/{{$val->id}}">
                                    <i class="fa fa-pencil"></i> sửa
                                </a> |
                                <a onClick="javascript:return window.confirm('Bạn muốn xóa kênh này?');" href="admin/phong/delete/{{$val->id}}">
                                    <i class="fa fa-trash-o"></i> xóa
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
