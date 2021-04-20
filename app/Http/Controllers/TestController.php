<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Imports\TestImport;
use Maatwebsite\Excel\Facades\Excel;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Test::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                if(request()->has('mycsv')){


                if (!file_exists(public_path('temp/'))) {
                    mkdir(public_path('temp/'), 0777, true);
                }

                $data = file(request()->mycsv);

                $header = $data[0];
                unset($data[0]);

                $chunks = array_chunk($data,1000);

                foreach($chunks as $key => $chunk){

                    $name = "tmp${key}.csv";

                    $path = public_path('temp/') . $name;

                    file_put_contents($path,$chunk);

                    $model = new TestImport;
                    
                    Excel::import($model, $path);

                    unlink($path);  

                }

                return back()->with('success', 'All good!');

                   

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
