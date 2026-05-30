<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Porto;
use App\Models\Blog;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.contents.home');
    }

    public function about()
    {
        return view('website.contents.about');
    }

    public function service()
    {
        $services = Service::all();
        return view('website.contents.service', compact('services'));
    }

    public function porto()
    {
        $portos = Porto::all();
        return view('website.contents.porto', compact('portos'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('website.contents.blog', compact('blogs'));
    }

    public function message()
    {
        return view('website.contents.message');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
