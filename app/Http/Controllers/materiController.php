<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Absensi;
use App\Models\materi;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function materi()
    {
        $materi = materi::all();
        return view('materials.index', [
            'materials' => $materi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'materi' => 'required|min:4|unique:materials',
        ]);

        materi::create($validatedData);
        return redirect('/materi')->with('success', 'Material successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi $materi
     * @return \Illuminate\Http\Response
     */
    public function show(materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */

    // public function edit(materi $material)
    // {
    //     return view('materi.edit', [
    //         'materi' => $materi
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialRequest  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materi $material)
    {
        $validatedData = $request->validate([
            'materi' => 'required|min:4|unique:materials',
        ]);

        materi::where('id', $material->id)->update($validatedData);
        return redirect('/materials')->with('success', 'Material has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $material)
    {
        $isAlreadyUsed = Absensi::where('id_material', $material->id)->exists();

        if ($isAlreadyUsed) {
            return redirect('materials')->with('error', "You cannot delete this material because it is already used");
        };
        materi::destroy($material->id);
        return redirect('materials')->with('success', 'Material has been deleted');
    }
}