<?php declare(strict_types=1);

use App\Containers\MusicSection\Artist\UI\Actions\GetArtistAction;
use Illuminate\Support\Facades\Route;

Route::get('music/albums/{albums}', GetArtistAction::class)
     ->middleware(['auth:api']);
