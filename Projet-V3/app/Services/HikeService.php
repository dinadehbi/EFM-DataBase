<?php

namespace App\Services;

use App\Models\Hike;
use Illuminate\Database\Eloquent\Collection;

class HikeService
{
    /**
     * Récupérer toutes les randonnées avec les relations user, reviews et suggestions
     */
   // Dans HikeService
public function getAllHikesWithRelations()
{
    return Hike::with(['reviews.suggestions', 'reviews.user'])->get();
}


    /**
     * Incrémenter le nombre de vues d'une randonnée
     */
    public function incrementHikeViews(Hike $hike): void
    {
        $hike->increment('views');
    }

    /**
     * Incrémenter les vues de chaque avis lié à une randonnée
     */
    public function incrementReviewsViews(Hike $hike): void
    {
        foreach ($hike->reviews as $review) {
            $review->increment('views');
        }
    }
}
