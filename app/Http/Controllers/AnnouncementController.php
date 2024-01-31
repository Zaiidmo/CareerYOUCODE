<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementRequest $request)
    {
        //Storing Data 
        $data = [];
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['company'] = $request->input('company');

        //Handling File Upload
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');

            //Generate a unique filename based on the announcement title
            $fileName = $data['title'] . '_' . time() . '.' . $file->getClientOriginalExtension();

            //Move the file to the "storage/app/public/uploads/jobs_image" directory
            $file->storeAs('public/uploads/jobs_image', $fileName);

            //Save the filename to the database
            $data['picture'] = $fileName;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
