<?php


namespace App\Domain\Support\Traits;


use App\Domain\Bit\Models\Image;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

Trait LivewireImageUploader
{
    use WithFileUploads;

    private function uploadImage(TemporaryUploadedFile $field, $path="photos", $disk="spaces"): Image {

        $filename = $field->storePublicly($path, $disk);

        return Image::create([
            'name' => $filename,
            'disk' => $disk,
            'path' => $path,
        ]);
    }

}
