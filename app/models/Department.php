<?php

class Department extends \Eloquent {
	protected $fillable = [];

	public function officers() {
		return $this->hasMany('Officer', 'department_id', 'id');
	}

	public function children() {
		return $this->hasMany('Department', 'parent_id', 'id');
	}
}