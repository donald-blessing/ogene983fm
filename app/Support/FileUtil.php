<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUtil
{
    /**
     * Upload a file to a specified folder.
     */
    public static function upload(UploadedFile $file, string $folder, ?string $filename = null, string $disk = 'public'): string
    {
        $name = $filename ? $filename : Str::random(25);
        $fullName = $name.'.'.$file->getClientOriginalExtension();

        return $file->storeAs($folder, $fullName, $disk);
    }

    /**
     * Delete a file from a specified disk.
     */
    public static function delete(string $path, string $disk = 'public'): bool
    {
        if (Storage::disk($disk)->exists($path)) {
            return Storage::disk($disk)->delete($path);
        }

        return false;
    }

    /**
     * Get unique file path if it already exists.
     */
    public static function getUniquePath(string $path): string
    {
        $info = pathinfo($path);
        $dir = $info['dirname'] === '.' ? '' : $info['dirname'].'/';
        $name = $info['filename'];
        $ext = isset($info['extension']) ? '.'.$info['extension'] : '';

        $newPath = $path;
        $i = 1;

        while (file_exists($newPath)) {
            $newPath = $dir.$name.'_'.$i.$ext;
            $i++;
        }

        return $newPath;
    }

    /**
     * Check if a filename is a video.
     */
    public static function isVideo(string $filename): bool
    {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        return in_array($ext, ['mp4', 'mov', 'mpg', 'mpeg', 'wmv', 'mkv', 'ogg', 'webm']);
    }
}
