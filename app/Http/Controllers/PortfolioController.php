<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\ContactMessage;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display Arif's portfolio home view.
     */
    public function index()
    {
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        $projects = Project::where('is_featured', true)->orderBy('sort_order')->get();
        $experiences = Experience::orderBy('sort_order')->get();
        $organizations = Organization::orderBy('sort_order')->get();
        $education = Education::orderBy('sort_order')->first();
        $certifications = Certification::orderBy('sort_order')->get();

        return view('home', compact(
            'skills',
            'projects',
            'experiences',
            'organizations',
            'education',
            'certifications'
        ));
    }

    /**
     * Store incoming contact message into MySQL database.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        $message = ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? 'Portfolio Inquiry',
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil terkirim! Arif akan segera membalas email Anda.',
            ]);
        }

        return redirect()->to(url('/#contact'))
            ->with('success', 'Pesan Anda berhasil terkirim! Arif akan segera membalas email Anda.');
    }
}
