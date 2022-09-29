<?php 

namespace App\Interfaces;

interface ShowTimesInterface{
	public function create(array $movieDetails);
	public function index();
	public function show($id);
	public function createForm();
	public function updateForm($id);
	public function update($id, array $movieDetails);
	public function destroy($id);
}