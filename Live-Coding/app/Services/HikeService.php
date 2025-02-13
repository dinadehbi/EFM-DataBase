<?php

namespace App\Services;

use App\Models\Hike;

class HikeService
{
    
    public function getAllHikeRelation() {
        return Hike::with(['reviews.suggestions', 'reviews.user'])->get();
    }

    public function HikeViewIncrement(Hike $hike) {
        $hike->increment('views');
    }

    public function ReviewsViewIncrement(Hike $hike) {
       foreach($hike->reviews as $review){
         $review->increment('views');
       }
    }
    public function checkIfHikeIsRecommended(Hike $hike): bool
    {
        $reviewsCount = $hike->reviews->count();
                return $reviewsCount > 10;
    }
}
