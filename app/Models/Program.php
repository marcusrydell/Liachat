<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Channel;

class Program extends Model
{
	use HasFactory;
	protected $dateFormat = 'Y-m-d H:i:s.u';

	protected $fillable = [
		'program_id',
		'channel_id',
	];

	public function channels()
	{
		return $this->hasMany(Channel::class);
	}
}
