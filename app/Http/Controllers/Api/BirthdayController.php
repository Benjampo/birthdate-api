<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBirthdayRequest;
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
     * @param Birthday $birthday
     * @return \Illuminate\Http\Response
     */
    public function show(Birthday $birthday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Birthday $birthday
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
     * @param Birthday $birthday
     * @return JsonResponse
     */
    public function update(StoreBirthdayRequest $request, Birthday $birthday)
    {
        $old_birthday=$birthday;
        $birthday->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'old_birthday' => $old_birthday,
            'birthday' => $birthday
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Birthday $birthday
     * @return JsonResponse
     */
    public function destroy(Birthday $birthday)
    {

        $birthday->delete();
        $old_birthday=$birthday;

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
            'deleted_birthday' => $old_birthday
        ], 200);
    }
}
