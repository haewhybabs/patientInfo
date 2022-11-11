@extends('admin.layouts.main')
@section('content')
<style>
    .headerMain{
        width: 100%;
        display: flex;
    }
    .addIcon{
        float:right;
        font-size: 30px;
    }
    .deleteIcon{
        color:#AF4035;
        padding-left:10px;
    }
    .textRight{
        text-align: center;
    }
</style>
<div class="content">
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ URL::TO('admin/users/add') }}">
                        @csrf
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control" name="name" required>
                        </div><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div><br>
                        <div class="textRight">
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div> -->
            </div>
        </div>
    </div>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="headerMain">
                            <div>
                                <strong class="card-title">Doctors</strong>
                            </div>
                            <div style="width:100%;">
                                <a  href="#" class="addIcon" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php $x=1 @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><i class="fa fa-edit" data-toggle="modal" data-target="#edit{{$x}}"></i>
                                            @if(auth()->user()->id!=$user->id)
                                            <i class="fa fa-trash deleteIcon" data-toggle="modal" data-target="#delete{{$x}}"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit{{$x}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ URL::TO('admin/users/update') }}">
                                                        @csrf
                                                        <input type="hidden" value="1" name="update">
                                                        <input type="hidden" value="{{$user->id}}" name="id">
                                                        <div class="form-group">
                                                            <label>Name </label>
                                                            <input type="text" class="form-control" value="{{$user->name}}" name="name" required>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" value="{{$user->email}}" name="email" required disabled>
                                                        </div><br>
                                                        <div class="textRight">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="delete{{$x}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                    {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ URL::TO('admin/users/delete') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{$user->id}}" name="id">
                                                        <div>
                                                            <h4>Are your sure you want to delete?</h4>
                                                            <div class="textRight"><br>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $x++ @endphp
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