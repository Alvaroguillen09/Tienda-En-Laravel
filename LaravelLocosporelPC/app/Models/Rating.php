<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = [
        'user_id', 
        'prod_id', 
        'stars_rated'
    ];


    //crear get and set de id

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($value)
    {
        $this->attributes['id'] = $value;
    }

    public function getStarsRated()
    {
        return $this->attributes['stars_rated'];
    }

    public function setStarsRated($value)
    {
        $this->attributes['stars_rated'] = $value;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($value)
    {
        $this->attributes['user_id'] = $value;
    }

    public function getProdId()
    {
        return $this->attributes['prod_id'];
    }

    public function setProdId($value)
    {
        $this->attributes['prod_id'] = $value;
    }
}
