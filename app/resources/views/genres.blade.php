@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Genres list') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="buttons-wrapper">
                            <button class="btn btn-primary" onclick="return false;">Add film</button>
                            <button class="btn btn-primary" onclick="return false;">Add genre</button>
                        </div>

                        <table id="genres_table">
                            <thead>
                            <tr>
                                <th>{{ __('Genre ID') }}</th>
                                <th>{{ __('Name') }}</th>
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

