<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Announcement;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile .
     */
    public function index()
    {
        $announcemet = Announcement::all();
        $skills = Skill::all();
        return view('profile.index', [
            'user' => Auth::user(),
            'skills' => $skills,
            'announcements' => $announcemet
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Initialize $avatar variable
        $avatar = null;

        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');

            // Generate a unique filename based on the user's name
            $filename = $user->name . '_' . time() . '.' . $avatarFile->getClientOriginalExtension();

            // Store the uploaded avatar file
            $avatarFile->storeAs('public/uploads/profiles', $filename);

            // Set the avatar filename
            $avatar = $filename;
        }

        // Fill the user model with validated data
        $user->fill($request->validated());

        // If email is being changed, reset email verification
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // If avatar was uploaded, update the user's avatar field
        if ($avatar !== null) {
            $user->avatar = $avatar;
        }

        // Save the updated user model
        $user->save();

        // Redirect back to the profile index with a success message
        return redirect()
            ->route('profile.index')
            ->with('status', 'Profile updated successfully.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function updateUserSkills(Request $request)
    {
        // $user->skills()->sync($request->skills);
        // return redirect()
        //     ->route('profile.index')
        //     ->with('status', 'Skills updated successfully.');
        $user = Auth::user();
        $user->skills()->sync($request->skills);

        return redirect()
            ->route('profile.index')
            ->with('status', 'Skills updated successfully.');
    }
}
