<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use robertogallea\LaravelPython\Services\LaravelPython;

class BTSController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('app.bts');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$request->validate([
			'longitude' => 'required|numeric',
			'latitude' => 'required',
			'height' => 'required|numeric',
			'direction' => 'required|numeric|between:0,360',
			'cell_type' => 'required|in:1,2'
		]);
		$form = $request->except('_token');
		$service = new LaravelPython();
		$path = base_path() . '\resources\python\bts.py';
		$path = str_replace('\\', '/', $path);
		$result = trim($service->run($path, $form));

		$data = ['category' => $result];
		return response()->json($data, 200);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		//
	}
}
