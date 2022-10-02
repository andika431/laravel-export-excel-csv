<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(){
        $employee = [
            ["name"=>"alice","email"=>"alice@gmail.com","phone"=>"93747583"],
            ["name"=>"ahmad","email"=>"ahmad@gmail.com","phone"=>"98846375"],
            ["name"=>"abdul","email"=>"abdul@gmail.com","phone"=>"98134527"],
        ];
        Employee::insert($employee);
        return "Record are inserted";
    }

    public function ExportIntoExcel(){
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }
    public function ExportIntoCSV(){
        return Excel::download(new EmployeeExport,'employeelist.csv');
    }
}
