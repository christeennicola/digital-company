<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataToshow = Statistic::all();
        return view('admin.admin_contents.showdata.statistictable', compact('dataToshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_contents.showdata.statistictable');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataToinsert = $request->all();
        $dataToinsert['skill_name'] = $request->skill_name ?? 'PHP / Laravel';
        $dataToinsert['percentage'] = $request->percentage ?? 0;
        Statistic::create($dataToinsert);
        return redirect()->route('statistic.index');
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
        $dataToupdate = Statistic::findOrFail($id);
        return view('admin.admin_contents.updateform.statisticupdate', compact('dataToupdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataToupdate['skill_name'] = $request->skill_name;
        $dataToupdate['precentage'] = $request->precentage;
        Statistic::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('statistic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataTodelete = Statistic::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('statistic.index');
    }
}
