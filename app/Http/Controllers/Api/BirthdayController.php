<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Birthday;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $birthdays = Birthday::all();

        return response()->json([
            'status' => true,
            'birthdays' => $birthdays
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return JsonResponse
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $birthday = Birthday::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Birthday Created successfully!",
            'birthday' => $birthday
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function show(Birthday $birthday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function edit(Birthday $birthday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Birthday  $birthday
     * @return JsonResponse
     */
    public function update(Request $request, Birthday $birthday): JsonResponse
    {
        $birthday->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'birthday' => $birthday
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return JsonResponse
     */
    public function destroy(Birthday $birthday)
    {
        $birthday->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
