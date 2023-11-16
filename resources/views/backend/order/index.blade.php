@extends('layouts.backend.admin')
@section('title',$title??'Trang Quản Lý')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="text-transform: uppercase;  ">{{ $title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}" style="text-transform: capitalize;">bảng điều khiển</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <form action="{{ route('order.trash_multi') }}" name="form1" method="post"  >
            @csrf
        
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                                <i class="fas fa-trash"></i> Xóa sản phẩm đã chọn
                            </button>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
                    @includeIf('backend.message_alert')
                    <table class="table table-bordered" id="myTable">
                        <thead class="bg-orange">
                            <tr>
                                <th>
                                  #  
                                </th>
                                <th>Khách hàng</th>
                                <th>Email</th>
                                <th>Điện thoai</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                                <th>ID</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($order as $row)
                            @if ($row->status <6)
                                
                            
                           
                            <tr>
                                <td class="text-center" style="width:20px">
                                    
                                </td>
                                <td>
                                    {{ $row->user_name }}
                                </td>
                                <td>
                                    {{ $row->user_email }}

                                </td>
                                <td>
                                    {{ $row->user_phone }}

                                </td>

                                <td class="text-center">
                                    {{ $row->created_at }}

                                </td>
                                <td class="text-center">
                                    <div class='btn btn-sm btn-{{   $list_status[$row->status]['type'] }}'>
                                        {{   $list_status[$row->status]['text'] }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    
                                   
                                    
                                    <a class="btn btn-sm btn-info"
                                        href="{{ route('order.show',['order'=> $row->id]) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td class="text-center" style="width:20px">
                                    {{ $row->id }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                                <i class="fas fa-trash"></i> Xóa sản phẩm đã chọn
                            </button>
                        </div>
                        
                    </div>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            </form>
        <!-- /.card-footer-->
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>

@endsection


