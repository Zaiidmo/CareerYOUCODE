<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Models\Announcement;
use App\Models\Company;

class AnnouncementController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('checkUserRole:staff')->except(['discover', 'show']);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('announcements'));
    }

    /**
     * Display all the Announcements
     */

    public function discover()
    {
        $announcements = Announcement::all();
        return view('announcements.discover', compact('announcements'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('announcements.create', ['companies' => $companies]);
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
        $data['company_id'] = $request->input('company_id');

        //Handling File Upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            //Generate a unique filename based on the announcement title
            $fileName = $data['title'] . '_' . time() . '.' . $file->getClientOriginalExtension();

            //Move the file to the "storage/app/public/uploads/jobs_image" directory
            $file->storeAs('public/uploads/jobs_image', $fileName);

            //Save the filename to the database
            $data['image'] = $fileName;
        }
        //Create an announcement using the data array
        Announcement::create($data);
        return redirect()
            ->route('announcements.index')
            ->with('message', 'Announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        $companies = Company::all();
        return view('announcements.edit', ['announcement' => $announcement, 'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            //Generate a unique filename based on the announcement title
            $fileName = $data['title'] . '_' . time() . '.' . $file->getClientOriginalExtension();

            //Move the file to the "storage/app/public/uploads/jobs_image" directory
            $file->storeAs('public/uploads/jobs_image', $fileName);

            //Save the filename to the database
            $data['image'] = $fileName;
        }
        $announcement->update($data);
        return redirect()
            ->route('announcements.index')
            ->with('message', 'Announcement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Announcement::destroy($id);
        return redirect()
            ->route('announcements.index')
            ->with('message', 'Announcement deleted successfully.');
    }
}
