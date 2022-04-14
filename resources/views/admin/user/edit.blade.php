@extends('admin.layout.index')

@section('content')

<form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.errors.alerts')
<!-- /.row -->

<div class="row">
	<div class="col-md-9 col-sm-9 col-xs-9">
		<div class="panel panel-default">
            <div class="panel-heading">
                edit user
            </div>
			<div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label">Tên người dùng</label>
                  		<input value="{{$user->name}}" name='name' type="text" placeholder="Name ..." class="form-control">
        				
                        <label>Mã nv</label>
                        <input value="{{$user->code}}" name='code' type="text" placeholder="Mã nv ..." class="form-control ">
                        
                        <label>Phòng</label>
                        <select name='p_id' class="form-control">
                            @foreach($phong as $val)
                            <option <?php if($val->id == $user->p_id){echo "selected";} ?> value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>

                        <label>Chức vụ</label>
                        <select name='level' class="form-control">
                            <option <?php if ($user->level == 1) { echo "selected"; } ?> value="1">Giám Đốc</option>
                            <option <?php if ($user->level == 2) { echo "selected"; } ?> value="2">Trưởng Phòng</option>
                            <option <?php if ($user->level == 3) { echo "selected"; } ?> value="3">Nhân Viên</option>
                        </select>

                        <label>Số điện thoại</label>
                        <input value="{{$user->phone}}" name='phone' type="text" placeholder="Số điện thoại ..." class="form-control ">

                        <label>Ngày sinh</label>
                        <input value="{{$user->birthday}}" name='birthday' type="date" placeholder="Ngày sinh ..." class="form-control ">

        				
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Email</label>
                        <input required value="{{$user->email}}" name='email' type="email" placeholder="Email ..." class="form-control">
                            
                        <label class="control-label"></label>
                        <input type="checkbox" id='changepassword' name="changepassword" />  Edit password

                        <label class="control-label">Password</label>
                        <input  name='password' type="Password" placeholder="Password ..." class="form-control pass">

                        <label class="control-label">Password</label>
                        <input  name='passwordagain' type="Password" placeholder="Password ..." class="form-control pass">

        				<label class="control-label">Permission</label>
        			  	<select name='permission' class="form-control">
                            <option <?php if ($user->permission == 2) { echo "selected"; } ?> value="2">member</option>
                            <option <?php if ($user->permission == 1) { echo "selected"; } ?> value="1">admin</option>
        					<option <?php if ($user->permission == 0) { echo "selected"; } ?> value="0">superadmin</option>
        			  	</select>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-3">
    	<div class="panel panel-default">
            <div class="panel-body">
            	<div class="row">
            		<div class="col-lg-12">
                    	<div class="file-upload">
                            <button class="btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                            <div class="image-upload-wrap">
                                <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            </div>
                            <div class="file-upload-content" style="display: block;">
                                <img class="file-upload-image" src="data/themes/{{$user->avatar}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
	$(document).ready(function(){
		$('#changepassword').change(function(){
			if ($(this).is(":checked")) {
				$(".pass").removeAttr('disabled');
			}
			else
			{
				$(".pass").attr('disabled','');
			}
		});
	});
</script>		

@endsection

