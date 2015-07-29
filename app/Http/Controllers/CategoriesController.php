<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriesController extends Controller {


	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post' ));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('categories.index')
			->with('categories',Category::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Zobraz formular na pridanie kategorie
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Category::$rules);

		if($validator->passes()){
        	Category::create(Input::all());
    
        	return redirect('admin/categories')
        		->with('message','Category Created');
		}

		return redirect('admin/categories')
				->with('message','Something went wrong :-( ')
				->withErrors($validator)
				->withInput();
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = Category::findOrFail($id);

		if($category){
			$category->delete();
        	return redirect('admin/categories')
        		->with('message','Category Deleted !!! ');
		}

    	return redirect('admin/categories')
    		->with('message','Something went wrong :-( ');
	}

}
