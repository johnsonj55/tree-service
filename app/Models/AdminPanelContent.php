<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AdminPanelContent extends Model
{
    use HasFactory;

    protected $fillable = ['homepage_text', 'telephone_number', 'image_path_1', 'image_path_2', 'image_path_3'];

    /**
     * Get the full URL for the first image.
     *
     * @return string
     */
    public function getImageUrl1Attribute()
    {
        return $this->getImageUrl('image_path_1');
    }

    /**
     * Get the full URL for the second image.
     *
     * @return string
     */
    public function getImageUrl2Attribute()
    {
        return $this->getImageUrl('image_path_2');
    }

    /**
     * Get the full URL for the third image.
     *
     * @return string
     */
    public function getImageUrl3Attribute()
    {
        return $this->getImageUrl('image_path_3');
    }

    /**
     * Get the full URL for the specified image path.
     *
     * @param string $imagePath
     * @return string|null
     */
    protected function getImageUrl($imagePath)
    {
        $path = $this->attributes[$imagePath] ?? null;

        if ($path) {
            return Storage::url($path);
        }

        return null;
    }
}
