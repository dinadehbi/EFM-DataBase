<?php

namespace App\Http\Controllers;

use App\Services\HikeService;
use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    protected $hikeService;

    public function __construct(HikeService $hikeService)
    {
        $this->hikeService = $hikeService;
    }

    public function index()
    {
        // Récupérer toutes les randonnées avec leurs relations
        $hikes = $this->hikeService->getAllHikeRelation();

        // Vérifier si chaque randonnée est recommandée (plus de 10 avis)
        foreach ($hikes as $hike) {
            $hike->isRecommended = $this->hikeService->checkIfReviewsRecommended($hike);
        }

        // Passer les données à la vue
        return view('home', compact('hikes'));
    }
}
