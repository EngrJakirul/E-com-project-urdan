<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private $units, $unit;

    public function addUnit()
    {
        return view('admin.unit.add-unit.index');
    }
    public function deleteUnit($id)
    {
        $this->unit = Unit::find($id);
        $this->unit->delete();
        return redirect()->back()->with('message', 'Unit deleted successfully');

    }
    public function editUnit($id)
    {
        $this->unit = Unit::find($id);
        return view('admin.unit.edit-unit.index', ['unit' => $this->unit]);

    }
    public function updateUnit()
    {

    }
    public function newUnit(Request $request)
    {
        Unit::newUnit($request);
        return redirect('/add-unit')->with('message', 'Unit added successfully');

    }

    public function manageUnit()
    {
        $this->units = Unit::orderBy('id', 'DESC')->get();
        return view('admin.unit.manage-unit.index', ['units' => $this->units]);

    }
}
