<?php

namespace App\Helper;

use App\Models\FinancialYear;
use App\Models\Liner;
use App\Models\Material;
use App\Models\Offset;
use App\Models\Setting;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class CommonHelper
{
    public static function getSettings()
    {
        return Setting::query()->first();
    }

    public static function getFileExtension($fileName): string
    {
        return substr(strrchr($fileName, '.'), 1);
    }

    public static function uploadFile(UploadedFile $file, $path, $oldFile = ''): string
    {
        if (!empty($file)) {
            // Remove Old file
            if (!empty($oldFile)) {
                Storage::delete('public/'.$path.'/' . $oldFile);                      // Delete file from local
            }

            // Upload image
            $path = $file->store('public/' . $path);
            $parts = explode("/", $path);
            return end($parts);
        }
        return '';
    }

    public static function removeOldFile($oldFile): void
    {
        // Remove Old file
        if (!empty($oldFile)) {
            // Storage::disk('s3')->delete($oldFile);    // Delete file from s3
            Storage::delete($oldFile);
            Log::info('File deleted1: ' . $oldFile);                   // Delete file from local
        }
    }
}
