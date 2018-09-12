<?php

namespace App\Http\Controllers;
use Validator;
use App\a;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;
class AController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json($value='')
    {
        return Datatables::of(a::all())->make(true);

    }
    public function index()
    {
        return view('coba');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $validation = Validator::make($request->all(), [
            'Nama' => 'required',
            'Lahir'  => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            if($request->get('button_action') == "insert")
            {
                $student = new a([
                    'Nama'    =>  $request->get('Nama'),
                    'Lahir'     =>  $request->get('Lahir')
                ]);
                $student->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function show(a $a)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function edit(a $a)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, a $a)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function destroy(a $a)
    {
        //
    }
}
