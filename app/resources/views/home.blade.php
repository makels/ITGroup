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
                        <button class="btn btn-primary" onclick="return false;">Add film</button>
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
                            @foreach($films as $film)
                                <tr>
                                    <td>{{ $film['id'] }}</td>
                                    <td><img class="poster_img" src="{{ url($film['preview_url']) }}" alt="{{ $film['film_name'] }}" /></td>
                                    <td>{{ $film['film_name'] }}</td>
                                    <td>
                                        @foreach($film['genres'] as $genre)
                                            {{ $genre['genre_name'] }}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $film['publish'] == 0 ? __("Not publish") : __("Publish") }}</td>
                                    <td><a href="#">Preview</a>&nbsp;|&nbsp;<a href="#">Edit</a>&nbsp;|&nbsp;<a href="#">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
