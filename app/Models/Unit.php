<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Unit extends Model
{
    use HasFactory;
    private static $unit, $name, $description, $status;

    public static function newUnit($request)
    {
        self::$unit                 = new Unit();
        self::$unit->name           = $request->name;
        self::$unit->description    = $request->description;
        self::$unit->status         = $request->status;
        self::$unit->save();

    }

    public static function updateUnit($request)
    {
        self::$unit                = Unit::find($request->unit_id);
        self::$unit->name          = $request->name;
        self::$unit->description   = $request->description;
        self::$unit->status         = $request->status;
        self::$unit->save();
    }
}
