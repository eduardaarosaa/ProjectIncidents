<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Http\Requests\FormRequestIncident;

class IncidentController extends Controller
{
     private $totalPage = 5;

     public function __construct(Incident $incidents)
    {
        $this->incident = $incidents;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lista todos os incidentes
        $incidents = $this->incident->paginate($this->totalPage);
        return view('incidents', compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addIncident');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestIncident $request)
    {
        $dataForm = $request->except('_token');
        $dataForm['status'] = 1;

        $incidents = $this->incident->create($dataForm);

        if (!empty($incidents)) {
            toastr()->success('Incidente criando com sucesso!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao cadastrar um incidente');
            return redirect()->back();
        }
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
        $delete = Incident::find($id)->delete();
        if (!empty($delete)) {
            toastr()->success('Apagado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao apagar!!!');
            return redirect()->back();
        }
    }
}
