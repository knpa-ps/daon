<?php
class ApiController extends \BaseController {

	public function getDepartments() {
		$ts = Input::get('ts');
		if ($ts && $ts > 0) {
			$updatedAt = date('Y-m-d H:i:s', $ts / 1000);
			$query = Department::where('updated_at', '>=', $updatedAt);
		} else {
			$query = Department::query();
		}
		return $query->get();
	}

	public function getOfficers() {
		$ts = Input::get('ts');
		if ($ts && $ts > 0) {
			$updatedAt = date('Y-m-d H:i:s', $ts / 1000);
			$query = Officer::where('updated_at', '>=', $updatedAt);
		} else {
			$query = Officer::query();
		}
		return $query->get();
	}

}