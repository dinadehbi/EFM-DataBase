<?php

namespace App\Services;

use App\Models\Hike;
use App\Models\Review;
use App\Models\Suggestion;

class HikeService
{
    // Get all hikes with their related reviews and suggestions
    public function getAllHikeRelation() {
        return Hike::with(['reviews.suggestions', 'reviews.user'])->get();
    }

    // Increment the view count for a hike
    public function viewHikeIncrement(Hike $hike){
        $hike->increment('views'); // Ensure 'views' is the correct column name
    }

    // Increment the view count for each review of a hike
    public function viewReviewsIncrement(Hike $hike){
        foreach($hike->reviews as $review){
            $review->increment('views'); // Ensure 'views' is the correct column name
        }
    }

    // Check if the hike has more than 10 reviews
    public function checkIfReviewsRecommended(Hike $hike){
        $reviewsCount = $hike->reviews->count();
        return $reviewsCount > 10;
    }

    // Update the suggestions for a review
    public function updateReviewSuggestions(Review $review, array $suggestionsIds)
    {
        // Delete all the suggestions related to this review
        $review->suggestions()->delete();
    
        // Add new suggestions based on the IDs
        foreach ($suggestionsIds as $content) {
            $review->suggestions()->create([
                'content' => $content
            ]);
        }
    }
}
