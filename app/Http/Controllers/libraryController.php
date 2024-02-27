<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function index()
    {
        $library = library::all();
        return view('library.index', compact('library'));
    }

    public function create()
    {
        return view('library.create');
    }

    public function store(Request $request)
    {
        library::create($request->all());
        return redirect()->route('library.index');
    }

    public function show($id)
    {
        $library = library::findOrFail($id);
        return view('library.show', compact('library'));
    }

    public function edit($id)
    {
        $library = library::findOrFail($id);
        return view('library.edit', compact('library'));
    }

    public function update(Request $request, $id)
    {
        $library = library::findOrFail($id);
        $library->update($request->all());
        return redirect()->route('library.index');
    }

    public function destroy($id)
    {
        $library = library::findOrFail($id);
        $library->delete();
        return redirect()->route('library.index');
    }
}
