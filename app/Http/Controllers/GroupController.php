<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Professor;
use App\Group;
use App\Http\Requests;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups['groups'] = Group::all();
        foreach ($groups['groups'] as $group) {
          $group->id_professor = Professor::find($group->id_professor);
        }
        foreach ($groups['groups'] as $group) {
          $group->id_course = Course::find($group->id_course);
        }
        return view('groups.index', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['professors'] = Professor::all();
        $data['courses'] = Course::all();
        // dd($data);
        return view('groups.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Group::create($request->all());
        // $group = new Group;
        // $group->id_professor = $request->id_professor;
        return redirect('group');
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
