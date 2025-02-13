{{-- @extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if($hikes->count())
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>User</th>
                    <th>Description</th>
                    <th>Views</th>
                    <th>Recommended</th>
                    <th>Reviews</th>
                    <th>Suggestions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hikes as $hike)
                    @if($hike->title && $hike->user && $hike->image)
                        @php
                            // Check if there are more than 10 reviews
                            $totalReviews = $hike->reviews->count();
                            $isRecommended = $hike->reviews->filter(function($review) {
                                return $review->isRecommended;
                            })->count() > $totalReviews / 2; // Majority recommendation
                        @endphp
                        <tr>
                            <td>{{ $hike->title }}</td>
                            <td>{{ $hike->user->name }}</td>
                            <td>{{ $hike->description ?? 'No description' }}</td>
                            <td>{{ $hike->views ?? 0 }}</td>
                            <td>
                                @if($isRecommended)
                                    <span class="text-success font-weight-bold">Recommended Hike</span>
                                @else
                                    <span class="text-danger">Not recommended</span>
                                @endif
                            </td>
                            <td>
                                @if($totalReviews > 10)
                                    <p><strong>{{ $totalReviews }} reviews available!</strong></p>
                                    <ul>
                                        @foreach ($hike->reviews as $review)
                                            @if($review->content && $review->user)
                                                <li>
                                                    <strong>{{ $review->user->name }}</strong>: {{ $review->content }} <br>
                                                    <strong>Views:</strong> {{ $review->views ?? 0 }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    @if($hike->reviews->count())
                                        <ul>
                                            @foreach ($hike->reviews as $review)
                                                @if($review->content && $review->user)
                                                    <li>
                                                        <strong>{{ $review->user->name }}</strong>: {{ $review->content }} <br>
                                                        <strong>Views:</strong> {{ $review->views ?? 0 }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        No reviews
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if($hike->reviews->count())
                                    @php $hasSuggestions = false; @endphp
                                    @foreach ($hike->reviews as $review)
                                        @if($review->suggestions->count())
                                            @php $hasSuggestions = true; @endphp
                                            <ul>
                                                @foreach($review->suggestions as $suggestion)
                                                    <li>{{ $suggestion->content }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                    @if(!$hasSuggestions)
                                        <p>No suggestions</p>
                                    @endif
                                @else
                                    <p>No reviews</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hikes available.</p>
    @endif
</div>
@endsection --}}



<h1>hello</h1>