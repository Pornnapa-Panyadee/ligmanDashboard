@extends('layouts.app_admin', ['activePage' => 'listadmin', 'titlePage' => __('Create Account')])

@section('content')
<div class="content">
    <div class="container-fluid">
        @if (session('status'))
            <div class="row">
                <div class="col-sm-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                </div>
                </div>
            </div>
        @endif
    <!-- add Device -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <a class="btn btn-warning mr-4"  href="{{ route('adminForm.admin.create_device') }}">
                        <i class="material-icons">add_circle_outline</i>
                            <span>Add Device</span>
                        </a>
                    </div>
                    <div class="material-datatables">
                        <!-- table -->
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" style="width:100%">
                        <thead>
                                <tr> 
                                    <th></th>
                                    <th>Device</th>
                                    <th>Username</th>
                                    <th>Pole</th>
                                    <th>Link</th>
                                    <th class="disabled-sorting text-right" width=20%>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0 ?>
                                @foreach ($devices_list as $device)
                                <tr>
                                    <td><?php echo ++$i ?></td>
                                    <td>{{ $device->device_name }}</td>
                                    <td>{{ $device->device_username }}</td>
                                    <td>{{ $device->pole_id }}</td>
                                    <td>{{ $device->api_link }}</td>
                                    <td class="td-actions text-right">
                                        <form action={{ url('admin/editdevice/'.$device->id) }} method="GET" style="display: inline;">
                                            {{ csrf_field() }}  
                                            <button class="btn btn-success">
                                                <i class="material-icons">edit_note</i> Edit
                                            </button>
                                        </form>
                                        <form action={{ url('admin/deldevice'.$device->id) }} method="POST" style="display: inline;">
                                            {{ csrf_field() }}                           
                                            <button class="btn btn-danger" onclick="if(confirm('Do you have sure ?')){}else{return false;};">
                                                <i class="material-icons">delete_outline</i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <!-- add Location Pole -->
        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <a class="btn btn-warning mr-4"  href="{{ route('adminForm.admin.location') }}">
                        <i class="material-icons">add_circle_outline</i>
                            <span>Add Location</span>
                        </a>
                    </div>
                    <div class="material-datatables">
                        <!-- table -->
                        <table id="datatables" class="table table-striped table-no-bordered table-hover"  style="width:100%; text-align:center;">
                            <thead>
                                <tr> 
                                    <th>Pole</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Location</th>
                                    <th class="disabled-sorting text-right" width=20%>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0 ?>
                                @foreach ($poles_list as $pole)
                                <tr>
                                    <td><?php echo ++$i ?></td>
                                    <td>{{ $pole->latitude }}</td>
                                    <td>{{ $pole->longitude }}</td>
                                    <td>{{ $pole->location }}</td>
                                    <td class="td-actions text-right">
                                        <form action={{ url('admin/editpole/'.$pole->id) }} method="GET" style="display: inline;">
                                            {{ csrf_field() }}  
                                            <button class="btn btn-success">
                                                <i class="material-icons">edit_note</i> Edit
                                            </button>
                                        </form>
                                        <form action={{ url('admin/delpole'.$pole->id) }} method="POST" style="display: inline;">
                                            {{ csrf_field() }}                           
                                            <button class="btn btn-danger">
                                                <i class="material-icons">delete_outline</i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach                            
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection