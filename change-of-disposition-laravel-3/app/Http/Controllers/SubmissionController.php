<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\submission;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        //return submission::all();
        $submission = submission::all();
        return view('rims-change-of-disposition')->with('submission', $submission);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rims-change-of-disposition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submission = new Submission;
        $user = auth()->user();

        $submission->current_disposition = request('current_disposition');
        $submission->current_id_description = request('current_id_description');
        $submission->new_disposition = request('new_disposition');
        $submission->id_description = request('id_description');
        $submission->serial_number = request('serial_number');
        $submission->new_defect = request('new_defect');
        $submission->notes = request('notes');
        $submission->person_changing_disposition = request("person_changing_disposition");

        $submission -> save();

        $submission = submission::all();
        return view('rims-change-of-disposition')->with('submission', $submission);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
