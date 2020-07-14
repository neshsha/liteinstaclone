<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $guarded = [];

	public function profileImage() {
		return ($this->image) ? '/storage/' . $this->image : '/storage/profile/XrFRQILaOMnN5B9YRYNFuMPfjgBMy9ZmG9KIEKtX.png';
	}
    public function user() {



    	return $this->belongsTo(User::class);
    }

    public function followers() {
    	return $this->belongsToMany(User::class);
    }


}
