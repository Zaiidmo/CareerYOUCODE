<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Models\Announcement;
use App\Models\Company;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $skills = Skill::all();
        $announcements = Announcement::all();
        // dd($announcements->applicants->name);
        return view('announcements.index', compact('announcements', 'skills'));
    }

    /**
     * Display all the Announcements
     */

    public function discover()
    {
        $user = auth()->user();
        $announcements = Announcement::all();
        $Ann = new Announcement();
        $wantedSkill = $Ann->wantedSkills();
        // dd($wantedSkill);

        if ($user) {
            $recommendedAnnouncements = $user->recommendAnnouncements();
            return view('announcements.discover', compact('announcements', 'recommendedAnnouncements', 'wantedSkill'));
        }
        
        return view('announcements.discover', compact('announcements', 'wantedSkill'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        $companies = Company::all();
        return view('announcements.create', ['companies' => $companies], ['skills' => $skills]);
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
        $announcement = Announcement::create($data);
        $announcement->skills()->attach($request->skills);
        return redirect()->route('announcements.index')->with('message', 'Announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        $skills = Skill::all();
        return view('announcements.show', compact('announcement', 'skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        $skills = Skill::all();
        $companies = Company::all();
        return view('announcements.edit', ['announcement' => $announcement, 'companies' => $companies, 'skills' => $skills]);
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
        $announcement->skills()->sync($request->skills);
        return redirect()->route('announcements.index')->with('message', 'Announcement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Announcement::destroy($id);
        return redirect()->route('announcements.index')->with('message', 'Announcement deleted successfully.');
    }
}
