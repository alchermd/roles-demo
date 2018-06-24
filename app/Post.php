<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @var array */
    protected $fillable = ['body', 'user_id'];

    /**
     * A Post belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
