@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add film') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url("/films/add") }}">
                            @csrf
                            <input name="action", value="save" type="hidden"/>
                            <div class="form-group row">
                                <label for="film_name" class="col-md-4 col-form-label text-md-right">{{ __('Film name') }}</label>

                                <div class="col-md-6">
                                    <input id="film_name" type="text" class="form-control @error('empty') is-invalid @enderror" name="film_name" value="{{ old('film_name') }}" required autofocus>

                                    @error('empty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ "Film name is empty" }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="genre_name" class="col-md-4 col-form-label text-md-right">{{ __('Genres') }}</label>
                                <div class="col-md-6">
                                    <ul class="genre-list">
                                    @foreach($genres as $genre)
                                            <li><input type="checkbox" name="genre[{{ $genre->id }}]" /><label>{{ $genre->genre_name }}</label></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="poster" class="col-md-4 col-form-label text-md-right">{{ __('Poster image') }}</label>

                                <div class="col-md-6">
                                    <input id="poster" type="file" class="form-control" name="poster" value="{{ old('poster') }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
