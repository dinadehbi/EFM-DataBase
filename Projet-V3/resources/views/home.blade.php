@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            @if ($hikes && $hikes->count() > 0)
                @foreach ($hikes as $hike)
                    <div class="col-md-8 mb-4">
                        <div class="card shadow-lg rounded-lg">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">{{ $hike->title }}</h3>
                                <p class="card-subtitle text-muted">By <strong>{{ $hike->user->name }}</strong></p>
                            </div>
                            <div class="card-body">
                                <!-- Randonnée image from public/hike-images folder -->
                                <img src="{{ asset('hike-images/' . $hike->image) }}" class="img-fluid mb-3 rounded" alt="Hike Image">
                                <p class="card-text">{{ $hike->description }}</p>
                                <p><strong>Views:</strong> <span class="badge bg-warning">{{ $hike->views }}</span>
                                 
                                <hr>

                                <!-- Affichage des avis de cette randonnée -->
                                <div class="reviews mt-4">
                                    <h4 class="text-primary">Avis :</h4>
                                    @foreach ($hike->reviews as $review)
                                        <div class="review mb-3 p-3 bg-light rounded">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <!-- User Profile Icon (Font Awesome) -->
                                                    <i class="fas fa-user-circle me-2" style="font-size: 40px; color: #007bff;"></i>
                                                    <p><strong>{{ $review->user->name }}</strong></p>
                                                </div>
                                                <p class="text-muted">{{ $review->created_at->diffForHumans() }}</p>
                                            </div>
                                            <p class="review-content">{{ $review->content }}</p>
                                            <p><strong>Views:</strong> <span class="badge bg-success">{{ $review->views }}</span></p>
                                            
                                            <!-- Affichage des suggestions pour cet avis -->
                                            @if ($review->suggestions->count() > 0)
                                                <div class="suggestions mt-3">
                                                    <h5 class="text-secondary">Suggestions :</h5>
                                                    @foreach ($review->suggestions as $suggestion)
                                                        <div class="suggestion mb-2">
                                                            <p><em>{{ $suggestion->content }}</em></p>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="text-muted">Aucune suggestion pour cet avis.</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="alert alert-warning">Aucune randonnée disponible.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
