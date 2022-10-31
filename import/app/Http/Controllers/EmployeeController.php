<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        Excel::import(new EmployeeImport,$request->file);
        return "data telah ter-upload";
    }
}
