<?php

namespace App\Http\Controllers;

use App\groupTool;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class GroupToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Auth=Auth::user();

        try {

            Log::info("User with email {$Auth->email} get groupTools successfully");
            return response()->json(GroupTool::with(['categoryTools'])->paginate(15), 200);
        } catch (\Exception $exception) {
            Log::error("User with email {$Auth->email} try get groupTools but not successfully!");
            return response()->json(['error' => $exception->getMessage()], $exception->getCode());

        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\groupTool  $groupTool
     * @return \Illuminate\Http\Response
     */
    public function show(groupTool $groupTool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\groupTool  $groupTool
     * @return \Illuminate\Http\Response
     */
    public function edit(groupTool $groupTool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\groupTool  $groupTool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groupTool $groupTool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\groupTool  $groupTool
     * @return \Illuminate\Http\Response
     */
    public function destroy(groupTool $groupTool)
    {
        //
    }
}
