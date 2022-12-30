<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{

    public function index(){

        $patients = Patient::all();

        // dd($patients);
        return view('patient.index', compact('patients'));
    }

    public function show($patient_id){
        $patient = Patient::findOrFail($patient_id);
        // dd($patient);
        return view('patient.show', compact('patient'));
    }
    public function edit(){
        // return ('patient.edit',)
    }
    public function store(Request $request){
        $valide=$request->validate(['name'=>'required|unique:patients','age'=>'required|integer']);
        $patient=new Patient; //creation d'un objet vide de type patient
        $patient->name=$request['name'];//modification des attributs de l'objet patient
        $patient->age=$request['age'];
        $patient->save();//enregistrer l'objet patient
        return redirect()->route('patient-index')->with('success', 'Patient crée avec success');
    }

    public function destroy($id) {
        $patient = Patient::find($id);

        if ($patient) {
            $patient->delete();

            return redirect()->route('patient-index')->with('success', 'Patient supprimé avec success');
        }

        return redirect()->route('patient-index')->with('error', 'Impossible de supprimer le patient');
    }
}
