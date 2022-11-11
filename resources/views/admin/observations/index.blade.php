@extends('admin.layouts.main')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="display: flex; justify-content:space-between">
                        <div class="card-header">
                            <strong class="card-title">{{$patient->name}}</strong>
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add observation</button>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Observation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action={{URL::TO('admin/create-observation')}}>
                                        @csrf
                                            <div class="form-group">
                                                <label>Diagnosis</label>
                                                <input class="form-control" required name="diagnosis" placeholder="Enter diagnosis" required />
                                            </div>
                                            <input type="hidden" name="patient_id" value={{$patient->id}} />

                                            <div class="form-group">
                                                <label>Observation</label>
                                                <textarea class="form-control" required name="observation" rows="5">

                                                </textarea>
                                            </div>
                                            <button type="submt" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Diagnosis</th>
                                    <th>Observations</th>
                                    <th>Doctor</th>
                                    <th>Created at</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php $x=1 @endphp
                                @foreach($patient->observations as $observation)
                                    <tr>
                                        <td>{{$x}}</td>
                                        <td>{{$observation->diagnosis}}</td>
                                        <td>{{$observation->observation}}</td>
                                        <td>{{$observation->doctor->name}}</td>
                                        <td>{{$observation->created_at}}</td>
                                    </tr>
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