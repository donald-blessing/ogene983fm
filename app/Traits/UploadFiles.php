<?php

namespace App\Traits;

use App\Helpers\Helper;
use App\Models\Upload\Upload;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

/**
 * Trait UploadFiles
 */
trait UploadFiles
{
    use UploadAble;

    /**
     * Upload file
     *
     * @param  string|array  $title
     * @param  string|array  $descriptions
     * @return false|string
     */
    public function upload(UploadedFile $files, $title = null, $descriptions = null, ?string $folder = null, ?string $filename = null)
    {
        DB::beginTransaction();
        try {
            if (is_array($files)) {
                foreach ($files as $key => $file) {
                    $upload = new Upload;
                    $upload->description = $descriptions[$key];
                    $upload->title = $title[$key];
                    $upload->file = $this->uploadFile($file, $folder, $filename);
                    $this->uploads()->save($upload);
                }
            } else {
                $upload = new Upload;
                $upload->title = $title;
                $upload->description = $descriptions;
                $upload->file = $this->uploadFile($files, $folder, $filename);
                $this->uploads()->save($upload);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();

        return true;
    }

    /**
     * Update upload in model
     *
     * @param  Upload  $uploadId
     * @param  string  $disk
     * @return bool
     */
    public function updateUpload(Upload $upload, ?UploadedFile $file = null, $title = null, $descriptions = null, $folder = null, $filename = null)
    {
        DB::beginTransaction();
        try {
            $helper = new Helper;
            $uploadFile = $upload->file;
            if ($folder == null) {
                $folder = $helper->getFileDirectoryName($uploadFile);
            }
            if ($file instanceof UploadedFile) {
                $upload->file = $this->uploadFile($file, \str_replace(asset(''), '', $folder), $filename);
                unlink(base_path($uploadFile));
            }
            $upload->title = $title;
            $upload->description = $descriptions;
            $upload->save();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();

        return true;
    }

    /**
     * Delete model uploads
     *
     * @return bool
     */
    public function deleteUpload(Upload $uploadId)
    {
        DB::beginTransaction();
        try {
            $uploadId = $uploadId->id;
            $uploadFile = Upload::findOrFail($uploadId);
            $this->deleteFile($uploadFile->file);
            $uploadFile->delete();
        } catch (\Throwable) {
            DB::rollback();

            return false;
        }
        DB::commit();

        return true;
    }

    /**
     * Uploads
     *
     * @return void
     */
    public function uploads()
    {
        return $this->morphMany(Upload::class, 'uploadable');
    }
}
