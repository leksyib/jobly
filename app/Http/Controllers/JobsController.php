<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use Auth;
use Carbon\Carbon;

class JobsController extends Controller
{



        public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Job $jobs)
    {
        $alljobs = $jobs::all();
        return view('welcome', compact('alljobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Job $job)
    {

        // Need to validate this
        $job->title = $request->title;
        $job->description = $request->description;
        $job->provider = $request->provider;
        $job->location = $request->location;
        $job->user_id = Auth::id();
        $job->type = $request->type;
        $job->classification = $request->classification;
        $job->applicationsclose = Carbon::now();
        $job->save();

        // Show the newly created job. 
        $id = $job->id;
        return redirect()->action('JobsController@show', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $job = Job::where('id', $id)->first();
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::where('id', $id)->first();
        return view('jobs.edit', compact('job'));
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
        $job = Job::where('id', $id)->first();
         $job->title = $request->title;
        $job->description = $request->description;
        $job->provider = $request->provider;
        $job->location = $request->location;
        $job->user_id = Auth::id();
        $job->type = $request->type;
        $job->classification = $request->classification;
        $job->applicationsclose = Carbon::now();
        $job->save();
        $id = $job->id;
        return redirect()->action('JobsController@show', compact('id'));

    }


    public function delete($id){

        $job = Job::where('id', $id)->first();
        return view('jobs.delete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $job = Job::where('id', $id)->first();
     $job->delete();



     return redirect()->action('HomeController@index');
    }


}
