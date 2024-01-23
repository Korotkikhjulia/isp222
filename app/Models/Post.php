<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; //разное именование таблиц и модели
    // protected $primeryKey = 'post_id';//указать на столбик id
    // public $incrementing = false;
    // protected $keyType = 'string'; // если первичный ключ не увеличивающееся целочисленное значение
    // public $timestamps = false;// не использовать временную метку
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

}
