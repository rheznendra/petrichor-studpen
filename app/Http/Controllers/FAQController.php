<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use robertogallea\LaravelPython\Services\LaravelPython;

class FAQController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('app.faq');
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
			'message' => 'required'
		]);
		$form = $request->except('_token');
		$service = new LaravelPython();
		$path = base_path() . '\resources\python\faq.py';
		$path = str_replace('\\', '/', $path);
		$result = trim($service->run($path, $form));

		$data = ['response' => $result];
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
