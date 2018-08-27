@extends('admin_layout')
@section('style')
<link rel="stylesheet" href="{{url('resources/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
@include('admin.common.breadcrumb')
 <div class="content mt-3">
 	       
            <div class="animated fadeIn">
                <div class="row">
                 @if(Session::has('message') || Session::has('success')  || Session::has('error'))
 	        <div class="col-sm-12">
 	        	@if(Session::has('success'))
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <!-- <span class="badge badge-pill badge-success">Success</span> -->{{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Category List</strong>
                            <div style="float: right;">
                           <a href="{{url('admin/addCategory')}}" class="btn btn-primary">Add New</a>
                        </div>  
                        </div>
                      
                 <div class="card-body">
                  
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($categories as $cat)
                      <tr>
                        <td>{{$cat->category_name}}</td>
                        <td>@if($cat->status==1) active @endif</td>
                        <td><a href="{{url('admin/editCategory')}}/{{Crypt::encryptString($cat->id)}}"><span class="ti-pencil"></span></a></td>
                       
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
@section('script')

    
	<script src="{{url('resources/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{url('resources/assets/js/lib/data-table/datatables-init.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
         // $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

@endsection