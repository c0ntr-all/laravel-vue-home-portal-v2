<?php declare(strict_types=1);

namespace App\Containers\GallerySection\Image\Data\DTO;

use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;

class UploadImageFromDeviceDto extends Data
{
    public string $user_id;
    public UploadedFile $file;
    public function __construct()
    {
    }
}