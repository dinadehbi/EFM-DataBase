@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($hike as $hikes)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h5>{{ $hikes->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $hikes->description }}</p>
                            <p><strong>Views:</strong> <span class="badge bg-warning">{{ $hikes->views }}</span></p>
                            <p><strong>User ID:</strong> <span class="badge bg-secondary">{{ $hikes->user_id }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
