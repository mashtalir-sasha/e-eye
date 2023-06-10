<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function setImage1Attribute($image)
    {
        if (isset($this->attributes['image1']) && $this->attributes['image1'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image1'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image1'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage2Attribute($image)
    {
        if (isset($this->attributes['image2']) && $this->attributes['image2'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image2'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image2'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage3Attribute($image)
    {
        if (isset($this->attributes['image3']) && $this->attributes['image3'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image3'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image3'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage4Attribute($image)
    {
        if (isset($this->attributes['image4']) && $this->attributes['image4'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image4'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image4'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage5Attribute($image)
    {
        if (isset($this->attributes['image5']) && $this->attributes['image5'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image5'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image5'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage6Attribute($image)
    {
        if (isset($this->attributes['image6']) && $this->attributes['image6'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image6'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image6'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }

    public function setImage7Attribute($image)
    {
        if (isset($this->attributes['image7']) && $this->attributes['image7'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image7'];
            if (file_exists($file)) {
                @unlink($file);
            }
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image7'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->upsize();
            $constraint->aspectRatio();
        });
        $img->save($file, 100);

        $img->fit(220, 140, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }
}
