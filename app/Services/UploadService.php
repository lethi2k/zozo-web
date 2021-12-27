<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function uploadImage($file, $path = '')
    {
        $imgPath = $file->store(sprintf('public%s', empty($path) ? '' : '/' . $path));
        return ['image_url' => Storage::url($imgPath)];
    }
}
