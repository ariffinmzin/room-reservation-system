<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::paginate(10);
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:rooms,name',
                'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'capacity' => 'required|integer|between:40,150',
        ],
        [
            'name.required' => 'Nama bilik diperlukan.', // Custom message if the name is required
            'name.unique' => 'Nama bilik telah sedia ada.', // Custom message for unique validation
            'photo.image' => 'Fail yang dimuat naik mestilah imej.',
            'photo.mimes' => 'Imej mestilah jenis fail: jpeg, jpg, png.',
            'photo.max' => 'Saiz imej tidak boleh melebihi 2MB.',
            'capacity.required' => 'Kapasiti diperlukan.',
            'capacity.integer' => 'Kapasiti mestilah nombor bulat.',
            'capacity.between' => 'Kapasiti mestilah di antara 40 hingga 150.',

        ]);


         // Check if a photo was uploaded
    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $image_name = 'room_' . time() . '.' . $image->getClientOriginalExtension();

        // Define the directory path relative to public
        $directory = 'uploads/rooms';
        $path = $image->storeAs($directory, $image_name, 'public');

        // Store the relative path in the validated data
        $validatedData['photo'] = $path;
    }

        Room::create($validatedData);

        return redirect()->back()->with('message','Room created successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
