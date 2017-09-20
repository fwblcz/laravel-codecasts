<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table='articles';
    protected $fillable=['title','content','published_at'];
    protected $dates=['published_at'];//把published_at作为carbon对象处理

    //setTitleAttribute
    //作用：数据在存入数据库之前  作预先的处理
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }

    public function user(){
        //文章属于某个用户
        return $this->belongsTo('App\User');
    }
}
