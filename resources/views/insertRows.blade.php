@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">{{ __('Insert rows to database') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('api.insert-all-to-db') }}">
                @csrf
                <div class="form-group">
                    <label for="url">URL json data</label>
                    <input type="text" name="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter url">
                    <small id="urlHelp" class="form-text text-muted">{{ __('Paste the link to write data from json file.') }}</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

    </script>
@endsection
