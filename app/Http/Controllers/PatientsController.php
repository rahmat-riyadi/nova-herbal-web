<?php

namespace App\Http\Controllers;

use App\Events\NewMedicineEvent;
use App\Events\PatientAddedEvent;
use App\Events\PatientEvent;
use App\Models\Disease;
use App\Models\History;
use App\Models\LabResults;
use App\Models\Medicine;
use App\Models\Note;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

use function Sodium\compare;

class PatientsController extends Controller
{
    
    private $folderName;

    public function __construct(){
        $this->folderName = 'patient';
    }

    public function index(){

        if(request()->ajax()){
            $patients = Patients::all();
            return DataTables::of($patients)->addIndexColumn()->make(true);
        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    
    public function show(Patients $patients){
        $medicine = Medicine::all();
        $total = History::where('patients_id', '=',$patients->id)->count();
        return view('admin.'.$this->folderName.'.detail', compact('patients', 'medicine', 'total'));
    }

    public function edit(Patients $patients){
        return view('admin.'.$this->folderName.'.form', compact('patients'));
    }

    public function store(Request $request){

        $idPatient = Patients::max('id_patient') + 1;

        try {
            Patients::create([...$request->all(), 'id_patient' => $idPatient]);
            event(new PatientAddedEvent());
            $msg = 'Patient Berhasil Ditambah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient')->with('message', $msg);

    }

    public function update(Request $request, Patients $patients){
        
        try {
            Patients::find($patients->id)->update($request->all());
            event(new PatientAddedEvent());
            $msg = 'Patient Berhasil Diubah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient')->with('message', $msg);

    }

    public function delete(Patients $patients) {

        try {
            Patients::destroy($patients->id);
            event(new PatientAddedEvent());
            $msg = 'Patient Berhasil dihapus';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient')->with('message', $msg);

    }

    public function createMedicine(Request $request,Patients $patients){

        try {
            History::create([...$request->all(), 'name' => $patients->name]);
            $msg = 'Obat Berhasil Ditambah';
            event(new NewMedicineEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('message', $msg);
    }

    public function showAllMedicine(Patients $patients){
        $medicine = Medicine::all();
        return view('admin.'.$this->folderName.'.allHistory', compact('patients', 'medicine'));
    }

    public function updateMedicine(Request $request, Patients $patients, History $history){

        try {
            History::find($history->id)->update($request->all());
            $msg = 'Obat Berhasil Diubah';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('message', $msg);

    }

    public function deleteMedicine(Patients $patients, History $history){

        try {

            History::destroy($history->id);
            event(new PatientEvent());
            $msg = 'Obat Berhasil Dihapus';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('message', $msg);

    }

    public function createDiseaseHistory(Request $request,Patients $patients){

        try {
            Disease::create([...$request->all(), 'name' => $patients->name]);
            $msg = 'Riawayat Penyakit Berhasil Ditambah';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('diseaseMessage', $msg);
    }

    public function updateDiseaseHistory(Request $request, Patients $patients, Disease $disease){

        try {
            Disease::find($disease->id)->update($request->all());
            $msg = 'Riawayat Penyakit Berhasil Diubah';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('diseaseMessage', $msg);

    }

    public function deleteDiseaseHistory(Patients $patients, Disease $disease){

        try {
            Disease::destroy($disease->id);
            $msg = 'Riwayat Penyakit Berhasil Dihapus';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('diseaseMessage', $msg);

    }

    public function storeLabPhoto(Request $request, Patients $patients){

        $img = $request->file('image')->store('lab-result');

        try {
            LabResults::create([
                'patients_id' => $patients->id,
                'image' => $img,
                'note' => $request->note
            ]);
            event(new PatientEvent());
            $msg = 'Foto Berhasil Ditambah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('labMessage', $msg);

    }

    public function updateLabPhoto(Request $request, Patients $patients, LabResults $labResults){

        $data = $request->validate([
            'note' => 'required',
            'image' => 'nullable'
        ]);

        if($request->image){
            Storage::delete($labResults->image);
            $data['image'] = $request->file('image')->store('lab-result');
        }

        try {
            LabResults::find($labResults->id)->update($data);
            event(new PatientEvent());
            $msg = 'Foto Berhasil Diubah';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('labMessage', $msg);

    }

    public function deleteLabPhoto(Patients $patients, LabResults $labResults){

        try {
            Storage::delete($labResults->image);
            LabResults::destroy($labResults->id);
            event(new PatientEvent());
            $msg = 'Hasil Laboratorium Berhasil Dihapus';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('labMessage', $msg);

    }

    public function createNote(Request $request, Patients $patients){

        try {
            Note::create($request->all());
            $msg = 'Catatan Berhasil Ditambah';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('noteMessage', $msg);        

    }

    public function updateNote(Request $request, Patients $patients, Note $note){

        try {
            Note::find($note->id)->update($request->all());
            $msg = 'Catatan Berhasil Diubah';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('noteMessage', $msg);        

    }

    public function deleteNote(Patients $patients, Note $note){

        try {
            Note::destroy($note->id);
            $msg = 'Catatan Berhasil Dihapus';
            event(new PatientEvent());
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/admin/patient/show/'. $patients->id)->with('noteMessage', $msg);      

    }


}
