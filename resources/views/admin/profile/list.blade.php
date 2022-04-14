@extends('admin.layout.index')
@section('profile')
class="active"
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.errors.alerts')
<!-- /.row -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          Trang cá nhân
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <div class="profile_img">
              <div id="crop-avatar">
                <img class="img-responsive avatar-view" src="data/themes/{{Auth::User()->avatar}}" alt="Avatar" >
              </div>
            </div>
            
            
          </div>
          <div class="col-md-9 col-xs-12">
		  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit m-right-xs"></i> Edit Password</button>
            <h3>{{Auth::User()->name}}</h3>
			<table>
				<tr>
					<td style='width: 80px;height: 27px;'>Email:</td>
					<td>{{Auth::User()->email}}</td>
				</tr>
				<tr>
					<td style='height: 27px;'>Mã nv:</td>
					<td>{{Auth::User()->code}}</td>
				</tr>
				<tr>
					<td style='height: 27px;'>Phòng:</td>
					<td>{{Auth::User()->phong->name}}</td>
				</tr>
				<tr>
					<td style='height: 27px;'>Chức vụ:</td>
					<td>
						@if(Auth::User()->level == 1) Giám đốc @endif
						@if(Auth::User()->level == 2) Trưởng phòng @endif
						@if(Auth::User()->level == 3) Nhân viên @endif
					</td>
				</tr>
				<tr>
					<td style='height: 27px;'>Điện thoại:</td>
					<td>{{Auth::User()->phone}}</td>
				</tr>
				<tr>
					<td style='height: 27px;'>Ngày sinh:</td>
					<td>{{Auth::User()->birthday}}</td>
				</tr>
			</table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<form action="admin/profile/edit/{{$profile->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
				<h4  class="modal-title text-center" id="myModalLabel">Chỉnh sửa thông tin cá nhân</h4>
			</div>
			<div class="modal-body">
				<label>Nhập Password *</label>
				<input  name='password' type="text" placeholder="Password *" class="form-control" />
				
				<label>Nhập lại Password *</label>
				<input  name='passwordagain' type="text" placeholder="passwordagain *" class="form-control" />
			</div>
			<div class="modal-footer text-center">
				<button type="submit" class="btn btn-success">Save changes</button>
			</div>
		</div>
	</div>
</div>
</form>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script> 
$(document).ready(function(){
	
    $("input#clickupdate").blur(function(){
    	// alert('ok');
        var bc = $(this).parents('.suagia').find('input[name="bc"]').val();
        var cn = $(this).parents('.suagia').find('input[name="cn"]').val();
        var da = $(this).parents('.suagia').find('input[name="da"]').val();
        var kc = $(this).parents('.suagia').find('input[name="kc"]').val();
        var tv_id = $(this).parents('.suagia').find('input[name="tv_id"]').val();
        var p_old = $(this).parents('.suagia').find('input[name="p_old"]').val();
        var price = $(this).parents('.suagia').find('input[name="price"]').val(); if(price == ''){ price = 0 }
    	// alert(bc);
        $.ajax({
            url:  'admin/profile/update/'+tv_id,
            type: 'GET',
            cache: false,
            data: {
            	"bc":bc,
            	"cn":cn,
            	"da":da,
            	"kc":kc,
            	"p_old":p_old,
            	"price":price
            },
            success: function(data){
                $('#content').html(data);
            }
        });
    });
});
</script>

@endsection


