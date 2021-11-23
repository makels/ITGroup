@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Films list') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="buttons-wrapper">
                        <button class="btn btn-primary" onclick="window.location.href='{{ url('/films/add') }}'">Add film</button>
                        <button class="btn btn-primary" onclick="window.location.href='{{ url('/genres/add') }}'">Add genre</button>
                    </div>

                    <table id="films_table">
                        <thead>
                            <tr>
                                <th>{{ __('Film ID') }}</th>
                                <th>{{ __('Poster') }}</th>
                                <th>{{ __('Film Name') }}</th>
                                <th>{{ __('Genres') }}</th>
                                <th>{{ __('Publish') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
