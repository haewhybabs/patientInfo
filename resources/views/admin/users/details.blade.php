@extends('admin.layouts.main')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Quotes Details</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <h4>Quote Sumary</h4><br>
                            <p>Name: {{$quote->full_name}}</p>
                            <p>Email : {{$quote->email}}</p>
                            <p>Phone Number : {{$quote->phone_number}}</p>
                            <p>Address : {{$quote->address}}</p>
                            <p>City : {{$quote->city}}</p>
                            <p>Province : {{$quote->province}}</p>
                            <p>APT : {{$quote->apt}}</p>
                            <p>Expecting Date : {{$quote->date}}</p>
                            <p>Expecting Time : {{$quote->time}}</p>
                            <p>Message : {{$quote->message}}</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>Service Sumary</h4><br>
                                @foreach($quote->quoteItems as $item)
                                
                                <p>{{$item->variationItem ? $item->variationItem->name: null}}</p>
                                
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                <h4>Extra Sumary</h4><br>
                                @foreach($quote->quoteItems as $item)
                                
                                <p>{{$item->extra ? $item->extra_qty: null}} {{$item->extra ? $item->extra->name: null}}</p>
                                 
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Quote Total : ${{number_format($quote->quote_total)}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection