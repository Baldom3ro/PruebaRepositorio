<?php

namespace App\Http\Controllers;

use App\Models\tutor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutor = tutor::paginate(5);
        return view('admin/tutors/index', compact('tutor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/tutors/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        tutor::create($data);
        return to_route(route: 'tutors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tutor $tutor)
    {
        return view('admin/tutors/show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tutor $tutor)
    {
        return view('admin/tutors/edit', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tutor $tutor)
    {
        $data= $request->all();
        $tutor->update($data);
        return to_route(route: 'tutors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(tutor $tutor){
        echo view('Admin/tutors/delete', compact('tutor'));
    }
    public function destroy(tutor $tutor)
    {
        $tutor->delete();
        return to_route('tutors.index');
    }
}
