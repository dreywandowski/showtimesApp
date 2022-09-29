<?php

namespace App\Repositories;

use App\Interfaces\ShowTimesInterface;
use App\Models\ShowTimes;
use App\Models\Movies;
use App\Models\Cinemas;


class ShowTimesRepository implements ShowTimesInterface{
	public function index(){
		return ShowTimes::all();
	}
	public function createForm(){
		
	}
	public function updateForm($id){
		
	}
	public function create(array $movieDetails){
		return ShowTimes::create($movieDetails);
	}
	public function show($id){
		return ShowTimes::findOrFail($id);
	}
	public function update($id, array $movieDetails){
		return ShowTimes::whereId($id)->update($movieDetails);
	}
	public function destroy($id){
		return ShowTimes::destroy($id);
	}
}
