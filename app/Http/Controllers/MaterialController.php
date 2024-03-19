<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Absensi;
use App\Models\Material;
use CreateMaterialsTable;
use Illuminate\Http\Request;
class MaterialController extends Controller
{
    public function materipage()
    {
        $materi = Material::all();
        return view('materipage', ['materi' => $materi ]);
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

        Material::create($validatedData);
        return redirect('/materi')->with('success', 'Material successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Material $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */

    public function editmateri(Material $material)
    {
        return view('editmateri', [
            'materi' => $material]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialRequest  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $validatedData = $request->validate([
            'materi' => 'required|min:4|unique:materials',
        ]);

        Material::where('id', $material->id)->update($validatedData);
        return redirect('/materials')->with('success', 'Material has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $isAlreadyUsed = attendance::where('id_material', $material->id)->exists();

        if ($isAlreadyUsed) {
            return redirect('materials')->with('error', "You cannot delete this material because it is already used");
        };
        Material::destroy($material->id);
        return redirect('materials')->with('success', 'Material has been deleted');
    }
}
