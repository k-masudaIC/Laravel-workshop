<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . '歳)';
    }

    //nameが$strと等しいデータを取得するスコープ
    public static function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }
}
