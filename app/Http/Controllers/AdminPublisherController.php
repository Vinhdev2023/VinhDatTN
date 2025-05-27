<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path='admin.publishers.index';
        $publishers = Publisher::orderBy('updated_at', 'desc')->get();
        return view('admin.publisher.publishers', compact('path', 'publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path='admin.publishers.create';
        return view('admin.publisher.create', compact('path'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:publishers,name'
        ]);

        Publisher::create($validated);

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher is Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        $path='admin.publishers.edit';
        return view('admin.publisher.edit', compact('path', 'publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:publishers,name'
        ]);

        $publisher->update($validated);

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        if($publisher->load('book')->book()->exists()){
            return redirect()->route('admin.publishers.index')->with('fail', 'Publisher Cannot Deleted Because It Has Some Book!');
        }

        $publisher->delete();

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher Deleted!');
    }
}
