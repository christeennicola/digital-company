<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataToshow = Service::all();
        return view('admin.admin_contents.showdata.servicetable', compact('dataToshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_contents.addform.addservice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'required|string',
        ]);

        $dataToinsert = $request->all();
        Service::create($dataToinsert);
        return redirect()->route('service.index');
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
        $dataToupdate = Service::findOrFail($id);
        return view('admin.admin_contents.updateform.serviceupdate', compact('dataToupdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataToupdate['title'] = $request->title;
        $dataToupdate['description'] = $request->description;
        $dataToupdate['icon'] = $request->icon;
        Service::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataTodelete = Service::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('service.index');
    }
}
