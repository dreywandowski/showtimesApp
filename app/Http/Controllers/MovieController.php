<?php

namespace App\Http\Controllers;

use App\Interfaces\ShowTimesInterface;
use Illuminate\Http\Request;
use Session;



class MovieController extends Controller
{

    private ShowTimesInterface $showTimesInterface;

    public function __construct(ShowTimesInterface $showTimesInterface){
        $this->showTimesInterface = $showTimesInterface;
    }

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->showTimesInterface->index();

    
        return view ('cinemas', ['data' => $data]);
    }


 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        return view ('cinemas/create_form');
    }


    /**
     * creates a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $movieDetails = $request->only([
            'movie',
            'cinema',
            'showtime']);
         

        $this->showTimesInterface->create($movieDetails);

         $data = $this->showTimesInterface->index();
        Session::flash('message', 'New Movie listing created successfully!');
                             Session::flash('alert-class', 'alert-success');
        return view ('cinemas', ['data' => $data]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $movieId = $request->input('id');
        $data = $this->showTimesInterface->show($id)->toArray();


        return view ('cinemas/show', ['data' => $data]);
    }


// Show the form for updating a resource.
public function updateForm($id)
    {
        $data = $this->showTimesInterface->show($id)->toArray();

        return view ('cinemas/update_form', ['data' => $data]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $movieId = $request->input('id');

        $movieDetails = $request->only([
            'movie',
            'cinema',
            'showtime']);

        $this->showTimesInterface->update($id, $movieDetails);
          $data = $this->showTimesInterface->index();
           Session::flash('message', 'Movie listing updated successfully!');
                             Session::flash('alert-class', 'alert-success');

        return view ('cinemas', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $movieId = $request->input('id');
      
         $this->showTimesInterface->destroy($id);

         $data = $this->showTimesInterface->index();
        Session::flash('message', 'Movie listing deleted successfully!');
                             Session::flash('alert-class', 'alert-success');

         return view ('cinemas', ['data' => $data]);
    }
}
