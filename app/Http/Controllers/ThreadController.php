<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;
use App\Models\Thread;
use Inertia\Inertia;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $threads = Thread::with("comments")->orderBy('created_at', 'desc')->get();
        return Inertia::render('Threads/Threads', [
            'threads' => $threads,
        ]);
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
    public function store(StoreThreadRequest $request)
    {
        $validated = $request->validated();
        Thread::create($validated);

        return to_route('threads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Thread $thread)
    {
        $thread = Thread::find($id);
        return Inertia::render('Threads/Thread', [
            'thread' => $thread,
            'comments' => $thread->comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThreadRequest $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
