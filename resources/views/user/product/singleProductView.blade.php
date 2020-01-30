@extends('user.includes.userlayout')

@section('content')
    <section class="site-section pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{$data['row']->product_name}}</h1>
                            <div class="card-body">
                                @if(session()->has('success_message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="icon-remove"></i>
                                        </button>
                                        {{session()->get('success_message')}}
                                    </div>
                                @endif

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row mb-0">
                                                <div class="col-md-12 offset-md-2">
                                                    <b>Product Name:</b>   {{$data['row']->product_name}}<br>
                                                    <b>Quantity Available:</b>  {{$data['row']->quantity_size}}<br>
                                                    <b>Price:</b>   {{$data['row']->price}}<br>
                                                    <b>Availability:</b>
                                                    @if ($data['row']->status == 1)
                                                        <span class="p-1 mb-2 bg-success text-white">In Stock</span>
                                                    @else
                                                        <span class="p-1 mb-2 bg-warning text-white">Out of Stock</span>
                                                    @endif
                                                    <br>
                                                    <a href="{{route('user.order.placeorder',$data['row']->id)}}" class="btn btn-primary">
                                                        Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <img height="400px" width="400px" src="{{asset('image/products/'.$data['row']->image)}}">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
