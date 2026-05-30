<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Porto;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataToshow = Porto::all();
        return view('admin.admin_contents.showdata.portotable', compact('dataToshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_contents.addform.addporto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes: png,jpg,jpeg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portos', 'public');
        }
        $dataToinsert = $request->all();
        $dataToinsert['title'] = $request->title ?? 'Porto';
        $dataToinsert['icon'] = $request->icon ?? 'bi-code';
        $dataToinsert['image'] = $imagePath;
        $dataToinsert['link'] = $request->link ?? '#';
        Porto::create($dataToinsert);
        return redirect()->route('porto.index');
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
        $dataToupdate = Porto::findOrFail($id);
        return view('admin.admin_contents.updateform.portoupdate', compact('dataToupdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes: png,jpg,jpeg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portos', 'public');
        }
        $dataToupdate['title'] = $request->title;
        $dataToupdate['icon'] = $request->icon;
        $dataToupdate['image'] = $imagePath;
        $dataToupdate['link'] = $request->link;
        //dd(Porto::findOrFail($id));
        Porto::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('porto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataTodelete = Porto::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('porto.index');
    }
}
