<?php

namespace Jurager\Teams\Models;

use Jurager\Teams\Teams;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

abstract class Group extends Model
{


	/**
	 * Get the team that the ability belongs to.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function team()
	{
		return $this->belongsTo(Teams::teamModel());
	}
}
