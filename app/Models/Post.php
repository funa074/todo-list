<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    protected $fillable = ['title'];
    //titleカラムの値の代入を可能にするために、Postモデルのクラスの$fillableプロパティにtitleを配列にいれている。
}