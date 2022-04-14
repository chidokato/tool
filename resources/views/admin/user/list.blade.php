@extends('admin.layout.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a href="admin/user/add"><button type="button" class="btn btn-primary btn-sm"><i class='fa fa-plus'></i> ADD</button></a>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<div class="row">
  	<div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> User
            </div>
			<div class="panel-body table-responsive">
				@if(count($user) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
				<table  width="100%" class="table table-striped table-bordered table-hover" >
					<thead>
						<tr style="white-space: nowrap;">
							<th>Mã NV</th>
							<th>Tên NV</th>
							<th>Phòng</th>
							<th>Chức vụ</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Permission</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $val)
						<tr style="white-space: nowrap;">
							<td>{{$val->code}}</td>
							<td>{{$val->name}}</td>
							<td>{{$val->phong->code}} - {{$val->phong->name}}</td>
							<td>
								<?php 
									switch ($val->level) {
										case '1':
											echo "Giám Đốc";
											break;
										case '2':
											echo "Trưởng Phòng";
											break;
										case '3':
											echo "Nhân Viên";
											break;
									}
								?>
							</td>
							<td>{{$val->email}}</td>
							<td>{{$val->phone}}</td>
							<td><?php 
								switch ($val->permission) {
									case '0':
										echo "superadmin";
										break;
									case '1':
										echo "admin";
										break;
									case '2':
										echo "Member";
										break;
								}?>
							</td>
							<td  class="text-center">
								<a href="admin/user/edit/{{$val->id}}">
									<i class="fa fa-pencil"></i> sửa
								</a> |
								<a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/user/delete/{{$val->id}}">
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