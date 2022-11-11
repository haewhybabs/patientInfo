@extends('admin.layouts.main')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Patient Information</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <p>Name: {{$patient->name}}</p>
                            <p>Email : {{$patient->email}}</p>
                            <p>Phone Number : {{$patient->phone_number}}</p>
                            <p>Address : {{$patient->address}}</p>
                            <p>Date of birth : {{$patient->dob}}</p>
                            <p>Weight : {{$patient->weight}}</p>
                            <p>Height : {{$patient->height}}</p>
                            <p>Date Created : {{$patient->created_at}}</p>
                            <br><br>
                            <h4>Next of Kin</h4> 
                            <br>
                            <p>Name : {{$patient->nok_name}}</p>
                            <p>Email : {{$patient->nok_email}}</p>
                            <p>Phone Number : {{$patient->nok_phone_number}}</p>
                        </div>
                        <hr>
                        <div class="row">
                            {{-- <div class="col-sm-6">
                                <h4>Service Sumary</h4><br>
                                @foreach($patient->quoteItems as $item)
                                
                                <p>{{$item->variationItem ? $item->variationItem->name: null}}</p>
                                
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                <h4>Extra Sumary</h4><br>
                                @foreach($patient->quoteItems as $item)
                                
                                <p>{{$item->extra ? $item->extra_qty: null}} {{$item->extra ? $item->extra->name: null}}</p>
                                 
                                @endforeach
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection