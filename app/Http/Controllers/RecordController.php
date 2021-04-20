<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Imports\RecordsImport;
use Maatwebsite\Excel\Facades\Excel;



class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Record::paginate($request->request_per_page);
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
                    
                    Excel::import(new RecordsImport, $path);

                    unlink($path);
                                                        
                }
                return redirect('/')->with('success', 'All good!');

                   

        }
    }

    public function show($id)
    {
        return Record::find($id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
