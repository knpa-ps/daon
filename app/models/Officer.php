<?php

class Officer extends \Eloquent {
	protected $fillable = [];

	public function department() {
		return $this->belongsTo('Department', 'department_id', 'id');
	}

}