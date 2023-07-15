<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionbank_quizzes;
use App\Models\Questionbank;
use App\Models\quizzes;

class Questionbank_quizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qbq = questionbank_quizzes::latest()->get();
        // $qb = questionbank::all();
        // $qs = quizzes::all();

        // $response = [
        //     'success' => true,
        //     'data' => $qbq,$qb,$qs
        // ];
        // return response()->json($response, 200);

     // $qbq = questionbank_quizzes::join('quizzes', 'quizzes.id', '=', 'questionbank_quizzes.quize_id')
     //                ->join('questionbank', 'questionbank.id', '=', 'questionbank_quizzes.questionbank_id')
     //                ->first(['questionbank.*', 'questionbank_quizzes.*','quizzes.*']);
        $data = questionbank_quizzes::with('quizzes', 'questionbank')->first();
        $response = [
            'success' => true,
            'data' => $data 
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
