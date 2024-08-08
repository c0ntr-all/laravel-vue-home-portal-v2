<?php declare(strict_types=1);

namespace App\Containers\MusicSection\Album\Data\Collections;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Collections\EloquentCollection;

/**
 * @template TKey of array-key
 * @template TModel of User
 *
 * @extends EloquentCollection<TKey, TModel>
 */
class AlbumCollection extends EloquentCollection
{
}