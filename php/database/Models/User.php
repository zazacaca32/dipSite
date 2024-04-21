<?php

namespace DB\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $guarded = [];
    // protected $fillable = ['bill_id', 'vk_id'];
	
	// public function card()
    // {
        // return $this->hasOne(Card::class, "id", "card_id");
    // }
}