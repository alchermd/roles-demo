@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (auth()->user()->hasPermissionTo('write posts'))
                    <form action="/posts" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="account_type">{{ __('Add a premium only post') }}</label>
                            <textarea name="body" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                    @else
                        <p>Please upgrade to a premium account.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
