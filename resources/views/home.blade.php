@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card-header">{{ __('All elements') }}</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif
    <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark indigo mb-4">
                <form class="form-inline md-form mr-auto mb-4" method="get" action="{{ route('home') }}">
                    @if(isset($search))
                        <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Search" aria-label="Search" value="{{$search}}">
                    @else
                        <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Search" aria-label="Search">
                    @endif
                    <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                </form>
                <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Provider</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Location</th>
                    <th scope="col">CPU</th>
                    <th scope="col">Drive</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->provider }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->cpu }}</td>
                        <td>{{ $item->drive }}</td>
                        <td>{{ $item->price }}</td>
                        <td><ul class="navbar-nav ml-auto"><a class="nav-link" style="color: darkgrey" href="{{ url("/edit-row/$item->slug") }}">edit</a></ul></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection
