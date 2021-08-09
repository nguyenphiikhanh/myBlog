<?php

namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait ImageUpload
{
    public function imageUpload(Request $request, $fieldName, $folderName)
    {

        if ($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(10) . '.' . $file->getClientOriginalExtension();

            $filepath = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . Auth::id(), $fileNameHash);

            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filepath),
            ];
            return $dataUploadTrait;
        } else return null;
    }
}
