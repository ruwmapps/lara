<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Quatrtext;

class QuatrtextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user_id = auth()->id();
        $quatrtexts = Quatrtext::all()->where('user_id',$user_id);
        $selectorder = Quatrtext::SELECT_ORDER;

        return view('quatrtext.index', compact('quatrtexts','selectorder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('quatrtext.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //$request->validate([
           //'title' => 'required|string|max:255',
           // 'slug' => 'required|string|max:255',
           // 'content' => 'required'
       // ]);

       // Quatrtext::create([
            //'title' => $request->title,
            //'slug' => \Str::slug($request->slug),
            //'content' => $request->content,
       // ]);

        return redirect()->route('quatrtext.index')->with('status', 'Quatrtext Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quatrtext $post): View
    {
        return view('quatrtext.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quatrtext $post): View
    {
        return view('quatrtext.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quatrtext $post): RedirectResponse
    {
        //$request->validate([
            //'title' => 'required|string|max:255',
           //'slug' => 'required|string|max:255',
           // 'content' => 'required'
       // ]);

        //$post->title = $request->title;
       //$post->slug = \Str::slug($request->slug);
        //$post->content = $request->content;
      //  $post->save();

        return redirect()->route('quatrtext.index')->with('status', 'Quatrtext Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quatrtext $post): RedirectResponse
    {
        //$post->delete();

        return redirect()->route('quatrtext.index')->with('status', 'Quatrtext Delete Successfully');
    }
}
