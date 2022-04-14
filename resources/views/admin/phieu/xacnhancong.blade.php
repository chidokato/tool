@extends('admin.layout.index')

@section('phieu') class="active" @endsection

@section('content')

<form action="admin/xacnhancong/add" method="POST" enctype="multipart/form-data">
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
                Phiếu xác nhận công
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="control-group">
                            <label>Ngày xác nhận công</label>
                            <input id="date" required name='ngay1' type="date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="control-group">
                            <label>Buổi</label>
                            <select name="buoi1" class=" form-control" id="sort_by">
                                <option value="Sáng">Sáng</option>
                                <option value="Chiều">Chiều</option>
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {
  $( 'input[type=date]' ).each( function() {
    $( this ).clone().attr( 'type', 'text' ).insertAfter( this ).datepicker().prev().remove();
  } );
} );  
</script>

@endsection


