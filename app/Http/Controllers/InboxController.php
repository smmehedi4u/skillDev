<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInboxRequest;
use App\Http\Requests\UpdateInboxRequest;
use App\Models\Inbox;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newinboxes = Inbox::latest()->whereSeen(false)->get();

        $previnboxes = Inbox::latest()->whereSeen(true)->get();
        return view('admin.inbox.index',compact('newinboxes',"previnboxes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInboxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInboxRequest $request)
    {
        Inbox::create($request->all());

        return redirect()->back()->with("successInbox","Message Sended Successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function show(Inbox $inbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Inbox $inbox)
    {
        $inbox->update(["seen"=>true]);
        return view("admin.inbox.edit",compact('inbox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInboxRequest  $request
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInboxRequest $request, Inbox $inbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inbox $inbox)
    {
        //
    }
}
