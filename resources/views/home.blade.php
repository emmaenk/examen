@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        @foreach ($gasArray['results'] as $gas )
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">{{ $gas['razonsocial']}}</li>
                    <li class="list-group-item ">{{ $gas['_id']}}</li>
                    <li class="list-group-item ">{{ $gas['calle']}}</li>
                    <li class="list-group-item ">{{ $gas['rfc']}}</li>
                    <li class="list-group-item ">{{ $gas['premium']}}</li>
                    <li class="list-group-item ">{{ $gas['regular']}}</li>
                </ul>
                <br>
            </div>
        @endforeach
    </div>
</div>
@endsection
