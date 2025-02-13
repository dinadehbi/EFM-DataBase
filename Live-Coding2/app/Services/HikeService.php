<?php

namespace App\Services;

use App\Models\Hike;

class HikeService
{
    public function getAllHikeRelation() {
        return Hike::with(['reviews.suggestions', 'reviews.user'])->get();
    }
    public function ViewHikeIncrement(Hike $hike){
        $hike->increment('view');
    }
    public function ViewReviewsInrement(Hike $hike){
        foreach($hike->reviews as $review){
            $review->increment('view');
        }
    }
    public function checkIfReviewsRecomended(Hike $hike){
        $reviewsCount = $hike->reviews->count();
        return $reviewsCount>10;
    }
}
