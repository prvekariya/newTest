@extends('layouts.main')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
  <!-- begin col-10 -->
  <div class="col-xl-12">
    <!-- begin panel -->
    <div class="panel panel-inverse">
      <!-- begin panel-heading -->
      <div class="panel-heading">
        <h4 class="panel-title">Applications List</h4>
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
      </div>
      <!-- end panel-heading -->
      <!-- begin alert -->
      <!-- <div class="alert alert-secondary fade show">
        <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <!-- end alert -->
      <!-- begin panel-body -->
      <div class="panel-body">
        @if(Session::has('sucess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ Session::get('sucess') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle">
          <thead>
            <tr>
              <th width="1%"></th>
              <th class="text-nowrap">Name</th>
              <th class="text-nowrap">Email</th>
              <th class="text-nowrap">Address</th>
              <th class="text-nowrap">Gender</th>
              <th class="text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $rec)
            <tr class="odd gradeX">
              <td width="1%" class="f-s-600 text-inverse">1</td>
              <td>{{$rec->name}}</td>
              <td>{{$rec->email}}</td>
              <td>{{$rec->address}}</td>
              <td>{{$rec->gender}}</td>
              <td><a href="{{route('view',['id'=>$rec->id])}}" class="btn btn-default">View</a>&nbsp;<a href="{{route('edit',['id'=>$rec->id])}}" class="btn btn-success">Edit</a>&nbsp;<a href="{{route('delete',['id'=>$rec->id])}}" class="btn btn-danger">Delete</a>&nbsp;</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- end panel-body -->
    </div>
    <!-- end panel -->
  </div>
  <!-- end col-10 -->
</div>
<!-- end row -->

@endsection
@push('css')
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endpush
@push('js')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/demo/table-manage-responsive.demo.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
@endpush
