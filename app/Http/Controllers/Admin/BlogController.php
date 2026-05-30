<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataToshow = Blog::all();
        return view('admin.admin_contents.showdata.blogtable', compact('dataToshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_contents.addform.addblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portos', 'public');
        }
        $dataToinsert = $request->all();
        $dataToinsert['title'] = $request->title ?? 'Blog';
        $dataToinsert['content'] = $request->content ?? 'AnyThing';
        $dataToinsert['image'] = $imagePath;
        $dataToinsert['author_name'] = $request->author_name ?? 'Jad';
        $dataToinsert['category'] = $request->category ?? 'cate';
        $dataToinsert['published_at'] = $request->published_at ?? now();
        Blog::create($dataToinsert);
        return redirect()->route('blog.index');
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
        $dataToupdate = Blog::findOrFail($id);
        return view('admin.admin_contents.updateform.blogupdate', compact('dataToupdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes: png,jpg,jpeg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portos', 'public');
        }
        $dataToupdate['title'] = $request->title;
        $dataToupdate['content'] = $request->content;
        $dataToupdate['image'] = $imagePath;
        $dataToupdate['author_name'] = $request->author_name;
        $dataToupdate['category'] = $request->category;
        $dataToupdate['published_at'] = $request->published_at;
        Blog::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataTodelete = Blog::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('blog.index');
    }
}
