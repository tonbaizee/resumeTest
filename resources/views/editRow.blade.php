@extends('layouts.app')

@section('content')


    <div class="container">

                    <div class="card-header">{{ __('Edit row') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(!isset($product))
                            <form method="post">
                                <div class="form-group" style="display:none;">
                                    <label for="id" style="display: none">id</label>
                                    <input type="number" class="form-control" id="id" aria-describedby="provider_name" style="display: none" >
                                </div>
                                <div class="form-group">
                                    <label for="provider_name">Provider name</label>
                                    <input type="text" class="form-control" id="provider_name" aria-describedby="provider_name" placeholder="Enter provider name" >
                                </div>
                                <div class="form-group">
                                    <label for="provider">Provider</label>
                                    <input type="text" class="form-control" id="provider" aria-describedby="provider" placeholder="Enter provider" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Location</label>
                                    <input type="text" class="form-control" id="location" aria-describedby="location" placeholder="Enter location" >
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="Enter city" >
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" aria-describedby="country" placeholder="Enter country" >
                                </div>
                                <div class="form-group">
                                    <label for="datacenter">Datacenter</label>
                                    <input type="text" class="form-control" id="datacenter" aria-describedby="datacenter" placeholder="Enter datacenter" >
                                </div>
                                <div class="form-group">
                                    <label for="brand_label">Brand label</label>
                                    <input type="text" class="form-control" id="brand_label" aria-describedby="brand_label" placeholder="Enter brand label" >
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <input type="text" class="form-control" id="brand" aria-describedby="brand" placeholder="Enter brand" >
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" id="model" aria-describedby="model" placeholder="Enter model" >
                                </div>
                                <div class="form-group">
                                    <label for="cpu">Cpu</label>
                                    <input type="text" class="form-control" id="cpu" aria-describedby="cpu" placeholder="Enter cpu" >
                                </div>
                                <div class="form-group">
                                    <label for="core">Core</label>
                                    <input type="number" class="form-control" id="core" aria-describedby="core" placeholder="Enter core" >
                                </div>
                                <div class="form-group">
                                    <label for="ram">Ram</label>
                                    <input type="number" class="form-control" id="ram" aria-describedby="ram" placeholder="Enter ram" >
                                </div>
                                <div class="form-group">
                                    <label for="drive_label">Drive label</label>
                                    <input type="text" class="form-control" id="drive_label" aria-describedby="drive_label" placeholder="Enter drive label" >
                                </div>
                                <div class="form-group">
                                    <label for="drive">Drive</label>
                                    <input type="number" class="form-control" id="drive" aria-describedby="drive" placeholder="Enter drive" >
                                </div>
                                <div class="form-group">
                                    <label for="bandwidth">Bandwidth</label>
                                    <input type="number" class="form-control" id="bandwidth" aria-describedby="bandwidth" placeholder="Enter bandwidth" >
                                </div>
                                <div class="form-group">
                                    <label for="ip">Ip</label>
                                    <input type="number" class="form-control" id="ip" aria-describedby="ip" placeholder="Enter ip" >
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="Enter price" >
                                </div>
                                <div class="form-group">
                                    <label for="show_bw">Show bw</label>
                                    <input type="number" class="form-control" id="show_bw" aria-describedby="show_bw" placeholder="Enter show bw" >
                                </div>
                                <div class="form-group">
                                    <label for="sell_out_start">Sell out start</label>
                                    <input type="text" class="form-control" id="sell_out_start" aria-describedby="sell_out_start" placeholder="Enter sell out start" >
                                </div>
                                <div class="form-group">
                                    <label for="sell_out_end">Sell out end</label>
                                    <input type="number" class="form-control" id="sell_out_end" aria-describedby="sell_out_end" placeholder="Enter sell out end" >
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="number" class="form-control" id="discount" aria-describedby="discount" placeholder="Enter discount" >
                                </div>
                                <a class="btn btn-success" style="color: white" onclick="AddRow()">Add row</a>

                            </form>
                            @else
                                <form action="POST">
                                    <div class="form-group" style="display:none;">
                                        <label for="id" style="display: none">Provider name</label>
                                        <input type="number" class="form-control" id="id" aria-describedby="provider_name" style="display: none" value="{{$product->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provider_name">Provider name</label>
                                        <input type="text" class="form-control" id="provider_name" aria-describedby="provider_name" placeholder="Enter provider name" value="{{$product->provider_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="provider">Provider</label>
                                        <input type="text" class="form-control" id="provider" aria-describedby="provider" placeholder="Enter provider" value="{{$product->provider}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="location" class="form-control" id="location" aria-describedby="location" placeholder="Enter location" value="{{$product->location}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="Enter city" value="{{$product->city}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" aria-describedby="country" placeholder="Enter country" value="{{$product->country}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="datacenter">Datacenter</label>
                                        <input type="text" class="form-control" id="datacenter" aria-describedby="datacenter" placeholder="Enter datacenter" value="{{$product->datacenter}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand_label">Brand label</label>
                                        <input type="text" class="form-control" id="brand_label" aria-describedby="brand_label" placeholder="Enter brand label" value="{{$product->brand_label}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" class="form-control" id="brand" aria-describedby="brand" placeholder="Enter brand" value="{{$product->brand}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" class="form-control" id="model" aria-describedby="model" placeholder="Enter model" value="{{$product->model}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="cpu">Cpu</label>
                                        <input type="text" class="form-control" id="cpu" aria-describedby="cpu" placeholder="Enter cpu" value="{{$product->cpu}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="core">Core</label>
                                        <input type="number" class="form-control" id="core" aria-describedby="core" placeholder="Enter core" value="{{$product->core}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ram">Ram</label>
                                        <input type="number" class="form-control" id="ram" aria-describedby="ram" placeholder="Enter ram" value="{{$product->ram}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="drive_label">Drive label</label>
                                        <input type="text" class="form-control" id="drive_label" aria-describedby="drive_label" placeholder="Enter drive label" value="{{$product->drive_label}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="drive">Drive</label>
                                        <input type="number" class="form-control" id="drive" aria-describedby="drive" placeholder="Enter drive" value="{{$product->drive}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bandwidth">Bandwidth</label>
                                        <input type="number" class="form-control" id="bandwidth" aria-describedby="bandwidth" placeholder="Enter bandwidth" value="{{$product->bandwidth}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ip">Ip</label>
                                        <input type="number" class="form-control" id="ip" aria-describedby="ip" placeholder="Enter ip" value="{{$product->ip}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="Enter price" value="{{$product->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="show_bw">Show bw</label>
                                        <input type="number" class="form-control" id="show_bw" aria-describedby="show_bw" placeholder="Enter show bw" value="{{$product->show_bw}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sell_out_start">Sell out start</label>
                                        <input type="text" class="form-control" id="sell_out_start" aria-describedby="sell_out_start" placeholder="Enter sell out start" value="{{$product->sell_out_start}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sell_out_end">Sell out end</label>
                                        <input type="number" class="form-control" id="sell_out_end" aria-describedby="sell_out_end" placeholder="Enter sell out end" value="{{$product->sell_out_end}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" class="form-control" id="discount" aria-describedby="discount" placeholder="Enter discount" value="{{$product->discount}}">
                                    </div>
                                    <a class="btn btn-primary" style="color: white" onclick="EditRows()">Edit</a>
                                    <a class="btn btn-danger" style="color: white" onclick="DeleteRow()">Delete</a>
                                </form>
                        @endif
                    </div>
                </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function DeleteRow() {
            let id =document.getElementById("id").value;
            jQuery.ajax({
                url: '{{ url('api/delete') }}',
                data: {'id':id},
                type: 'POST',
                success: function(data) {
                    alert(data['message']);
                    window.location.replace(data['data']);
                }
            });
        }
        function GetAllDataFromInputs()
        {
            let arr ={
                'provider_name':document.getElementById("provider_name").value,
                'provider':document.getElementById("provider").value,
                'location':document.getElementById("location").value,
                'city':document.getElementById("city").value,
                'country':document.getElementById("country").value,
                'datacenter':document.getElementById("datacenter").value,
                'brand_label':document.getElementById("brand_label").value,
                'brand':document.getElementById("brand").value,
                'model':document.getElementById("model").value,
                'cpu':document.getElementById("cpu").value,
                'core':document.getElementById("core").value,
                'ram':document.getElementById("ram").value,
                'drive_label':document.getElementById("drive_label").value,
                'drive':document.getElementById("drive").value,
                'ip':document.getElementById("ip").value,
                'price':document.getElementById("price").value,
                'show_bw':document.getElementById("show_bw").value,
                'sell_out_start':document.getElementById("sell_out_start").value,
                'sell_out_end':document.getElementById("sell_out_end").value,
                'discount':document.getElementById("discount").value,
            };
            return arr;
        }
        function AddRow(){
            let array = GetAllDataFromInputs();
            jQuery.ajax({
                url: '{{ url('api/add-row') }}',
                data: {
                    'provider_name':array['provider_name'],
                    'provider':array['provider'],
                    'location':array['location'],
                    'city':array['city'],
                    'country':array['country'],
                    'datacenter':array['datacenter'],
                    'brand_label':array['brand_label'],
                    'brand':array['brand'],
                    'model':array['model'],
                    'cpu':array['cpu'],
                    'core':array['core'],
                    'ram':array['ram'],
                    'drive_label':array['drive_label'],
                    'drive':array['drive'],
                    'ip':array['ip'],
                    'price':array['price'],
                    'show_bw':array['show_bw'],
                    'sell_out_start':array['sell_out_start'],
                    'sell_out_end':array['sell_out_end'],
                    'discount':array['discount'],
                },
                type: 'POST',
                success: function(data) {
                    alert(data['message']);
                    window.location.replace(data['data']);

                }
            });
        }
        function EditRow(){
            let array = GetAllDataFromInputs();
            let id =document.getElementById("id").value;

            jQuery.ajax({
                url: '{{ url('api/edit-row') }}',
                data: {
                    'id':id,
                    'provider_name':array['provider_name'],
                    'provider':array['provider'],
                    'location':array['location'],
                    'city':array['city'],
                    'country':array['country'],
                    'datacenter':array['datacenter'],
                    'brand_label':array['brand_label'],
                    'brand':array['brand'],
                    'model':array['model'],
                    'cpu':array['cpu'],
                    'core':array['core'],
                    'ram':array['ram'],
                    'drive_label':array['drive_label'],
                    'drive':array['drive'],
                    'ip':array['ip'],
                    'price':array['price'],
                    'show_bw':array['show_bw'],
                    'sell_out_start':array['sell_out_start'],
                    'sell_out_end':array['sell_out_end'],
                    'discount':array['discount'],
                },
                type: 'POST',
                success: function(data) {
                    alert(data['message']);
                    window.location.replace(data['data']);

                }
            });
        }
        function EditRows() {
            let id =document.getElementById("id").value;
            let array = GetAllDataFromInputs();
            jQuery.ajax({
                url: '{{ url('api/edit-row') }}',
                data: {
                    'id':id,
                    'provider_name':array['provider_name'],
                    'provider':array['provider'],
                    'location':array['location'],
                    'city':array['city'],
                    'country':array['country'],
                    'datacenter':array['datacenter'],
                    'brand_label':array['brand_label'],
                    'brand':array['brand'],
                    'model':array['model'],
                    'cpu':array['cpu'],
                    'core':array['core'],
                    'ram':array['ram'],
                    'drive_label':array['drive_label'],
                    'drive':array['drive'],
                    'ip':array['ip'],
                    'price':array['price'],
                    'show_bw':array['show_bw'],
                    'sell_out_start':array['sell_out_start'],
                    'sell_out_end':array['sell_out_end'],
                    'discount':array['discount'],
                },
                type: 'POST',
                success: function(data) {
                    alert(data['message']);
                    window.location.replace(data['data']);
                }
            });
        }
    </script>

@endsection
