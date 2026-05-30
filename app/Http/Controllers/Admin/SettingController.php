
<?php
/*
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{

    public function index()
    {
        $dataToshow = Setting::all();
        return view('admin.admin_contents.showdata.settingtable', compact('dataToshow'));
    }


    public function create()
    {
        return view('admin.admin_contents.showdata.settingtable');
    }


    public function store(Request $request)
    {
        $dataToinsert = $request->all();
        $dataToinsert['key'] = $request->key ?? 'default_key';
        $dataToinsert['value'] = $request->vaue ?? '';
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $dataToupdate = Setting::findOrfail($id);
        return view('admin.admin_contents.updateform.settingform', compact('dataToupdate'));
    }


    public function update(Request $request, string $id)
    {
        $dataToupdate['key'] = $request->key;
        $dataToupdate['value'] = $request->vaue;
        Setting::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('setting.index');
    }


    public function destroy(string $id)
    {
        $dataTodelete = Setting::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('blog.index');
    }
}
