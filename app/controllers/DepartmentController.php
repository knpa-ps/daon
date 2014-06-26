<?php

class DepartmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /department
	 *
	 * @return Response
	 */
	public function index()
	{
		return Department::whereNull('parent_id')->get();
	}

	/**
	 * Display the specified resource.
	 * GET /department/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Department::where('parent_id', '=', $id)->with('officers')->get();
	}

}