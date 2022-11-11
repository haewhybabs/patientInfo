@extends('admin.layouts.main')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All patients</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Weight</th>
                                    <th>Height</th>
                                    <th>Phone number</th>
                                    <th>More Info</th>
                                    <th>Observations</th>
                                    <th>Created at</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->email}}</td>
                                        <td>{{$patient->weight}}</td>
                                        <td>{{$patient->height}}</td>
                                        <td>{{$patient->phone_number}}</td>
                                        <td><a href="{{URL::TO('admin/patient?patient_id=')}}{{$patient->id}}" class="btn btn-info">view <i class="fa fa-eye"></i></a></td>
                                        <td><a href="{{URL::TO('admin/patient/observations?patient_id=')}}{{$patient->id}}" class="btn btn-info">view <i class="fa fa-eye"></i></a></td>
                                        <td>{{$patient->created_at}}</td>
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