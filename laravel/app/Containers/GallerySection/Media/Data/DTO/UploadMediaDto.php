<?php declare(strict_types=1);

namespace App\Containers\GallerySection\Media\Data\DTO;

use Spatie\LaravelData\Data;

class UploadMediaDto extends Data
{
    public int $user_id;
    public array $media_paths;
    public function __construct()
    {
    }
}