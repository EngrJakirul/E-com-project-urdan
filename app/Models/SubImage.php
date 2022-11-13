<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static  $subImage, $imageName, $extension, $imagedirectory, $imageUrl;



    protected static function saveSubImage($subImageFile)
    {
        if ($subImageFile)
        {
            self::$imageName = 'product-sub-image'.rand(1, 10000).time().'.'.$subImageFile->getClientOriginalExtension();
            self::$imagedirectory = 'product-sub-image/';
            $subImageFile->move(self::$imagedirectory, self::$imageName);
            return self::$imagedirectory.self::$imageName;
        }
        else
        {
            return '';
        }
    }
//    public static function newSubImage($subImageFile)
//    {
//        if ($subImageFile)
//        {
//            self::$extension      = self::$image->getClientOriginalExtension();
//            self::$imageName      = 'product-sub-image_'.rand(1,10000).time().'.'.self::$image;
//            self::$directory      = 'product-images/';
//            $subImageFile->move(self::$directory, self::$imageName);
//            return self::$directory.self::$imageName;
//
//        }
//        else
//        {
//            return '';
//        }
//    }

    public static function newSubImage($request, $product)
    {
        foreach ($request->sub_image as $subImageFile)
        {
            self::$subImage               = new SubImage();
            self::$subImage->product_id   = $product->id;
            self::$subImage->image        = self::saveSubImage($subImageFile);
            self::$subImage->save();
        }
    }
}
