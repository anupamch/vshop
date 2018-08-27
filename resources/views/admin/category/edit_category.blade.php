@extends('admin_layout')

@section('content')
@include('admin.common.breadcrumb')
<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            
               <div class="col-lg-12 outerdiv" >
                    <div class="card">
                      <div class="card-header"><strong>Edit Category</strong><small> Form</small></div>
                       <form action="{{url('admin/updateCategory')}}" method="post" id="categoy_frm">
                        {!! csrf_field() !!}
                        <input type="hidden" name="cid" value="{{Crypt::encryptString($category->id)}}">
                      <div class="card-body card-block">
                        <div class="form-group">
                        	<label for="company" class=" form-control-label">Category Name</label>
                        	<input type="text" id="name" name="name" placeholder="Enter category name" class="form-control" value="{{$category->category_name}}"></div>
                        
                        <div class="form-group">
                        	<button type="submit" class="btn btn-primary btn-sm">
		                          <i class="fa fa-dot-circle-o"></i> Submit
		                    </button>
		                    <button type="reset" class="btn btn-danger btn-sm">
	                          <i class="fa fa-ban"></i> Reset
	                        </button>
                        </div>
                        
                      </div>
                  </form>
                    </div>
                  </div>
            
        </div>
    </div>
</div>
                 
@endsection
@section('script')

<script type="text/javascript" src="{{url('resources/assets/js/lib/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
   (function($){
         jQuery("#categoy_frm").validate({
               rules:{
                     name: "required",

               }
         })
   })(jQuery)
</script>

@endsection