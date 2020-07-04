<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function index() {
        $registers = Register::orderBy('id', 'desc')->get();
        return response()->json($registers);
    }

    public function show($id) {
        return Register::find($id);
    }

    public function store(Request $request) {
        return Register::create($request->all());
    }

    public function update(Request $request, $id) {
        $register = Register::findOrFail($id);
        $register->update($request->all());

        return $register;
    }

    public function destroy($id) {
        $register = Register::findOrFail($id);
        $register->delete();

        return 204;
    }
}
