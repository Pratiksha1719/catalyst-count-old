<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Datatables;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::select('id','name')->get();
    dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                    })->rawColumns(['action'])

                    ->make(true);

        }

          

        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create',[
            'categories' => Category::where('having_subcategory',1)->get()
        ]);
    }

}
