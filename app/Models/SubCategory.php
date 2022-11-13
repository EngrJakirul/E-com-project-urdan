<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $category_id, $subCategory, $image, $imageName, $extension, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName        = 'e-com_'.time().'.'.self::$extension;
        self::$directory        = 'sub-category-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newSubCategory($request)
    {
        self::$subCategory                   = new SubCategory();
        self::$subCategory->category_id      = $request->category_id;
        self::$subCategory->name             = $request->name;
        self::$subCategory->description      = $request->description;
        self::$subCategory->image            = self::getImageUrl($request);
        self::$subCategory->status           = $request->status;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);

        if($request->file('image'))
        {
            if (file_exists(self::$subCategory->image))
            {
                unlink(self::$subCategory->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$subCategory->image;
        }
        self::$subCategory->category_id      = $request->category_id;
        self::$subCategory->name             = $request->name;
        self::$subCategory->description      = $request->description;
        self::$subCategory->image            = self::$imageUrl;
        self::$subCategory->status           = $request->status;
        self::$subCategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (file_exists(self::$subCategory->image))
        {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
