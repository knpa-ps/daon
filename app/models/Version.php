<?php

class Version extends \Eloquent {
	protected $visible = ['code', 'name', 'download_url'];
	protected $fillable = [];
}