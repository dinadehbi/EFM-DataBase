@extends('layouts.app')

@section('content')
    <div>
        @if($hikes->count())
            <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Utilisateur</th>
                        <th>Description</th>
                        <th>Vues</th>
                        <th>Recommandée</th>
                        <th>Avis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hikes as $hike)
                        @if($hike->title && $hike->user && $hike->image)
                            <tr>
                                <td>{{ $hike->title }}</td>
                                <td>{{ $hike->user->name }}</td>
                                <td>{{ $hike->description ?? 'Pas de description' }}</td>
                                <td>{{ $hike->views ?? 0 }}</td>
                                <td>
                                    @if($hike->isRecommended)
                                        <span style="color: green; font-weight: bold;">Randonnée Recommandée</span>
                                    @else
                                        <span style="color: red;">Non recommandée</span>
                                    @endif
                                </td>
                                <td>
                                    @if($hike->reviews->count())
                                        <ul>
                                            @foreach ($hike->reviews as $review)
                                                @if($review->content && $review->user)
                                                    <li>
                                                        <strong>{{ $review->user->name }}</strong>: {{ $review->content }} <br>
                                                        <strong>Vues :</strong> {{ $review->views ?? 0 }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        Pas d'avis
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune randonnée disponible.</p>
        @endif
    </div>
@endsection
