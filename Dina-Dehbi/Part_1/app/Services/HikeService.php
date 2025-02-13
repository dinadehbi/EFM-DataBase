<?php

namespace App\Services;

use App\Models\Hike;

class HikeService
{
    public function getAllHikeRelation() 
    {
        // Récupérer toutes les randonnées avec les relations nécessaires
        return Hike::with(['reviews.suggestions', 'reviews.user'])->get();
    }

    public function ViewHikeIncrement(Hike $hike)
    {
        $hike->increment('view');
    }

    public function ViewReviewsInrement(Hike $hike)
    {
        foreach($hike->reviews as $review) {
            $review->increment('view');
        }
    }

    public function checkIfReviewsRecommended(Hike $hike)
    {
        // Vérifier si une randonnée a plus de 10 avis
        $reviewsCount = $hike->reviews->count();
        return $reviewsCount > 10;  // Si plus de 10 avis, elle est recommandée
    }
}
