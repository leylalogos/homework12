<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class File extends Model
{
    protected $fillable = [
        'name',
        'extention',
        'size',
        'user_id',
        'path'
    ];

    protected $attributes = [
        'download_count' => 0,
        'is_approved' => false,

    ];
    // use HasFactory;
    public static function getUserFilesInformation($user_id)
    {
        $download_count = DB::table('files')->where('user_id', $user_id)->sum('download_count');
        $size = DB::table('files')->where('user_id', $user_id)->sum('size');
        $res = [
            'download_count' => $download_count,
            'size' => $size
        ];
        return $res;
    }
}
