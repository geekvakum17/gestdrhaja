<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;

class AbsenceController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function __construct()
  {
    $this->middleware('auth');
  }


  public function index()
  {
    $absence = Absence::all();
    return view('Conges.absence', compact('absence'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    try {
            $absence = new Absence();
            $absence->nomiterim = $request->nomiterim;
            $absence->objetabsence = $request->objetabsence;
            $absence->datedepart = $request->datedepart;
            $absence->dateretour = $request->dateretour;
            $absence->nbrejourouvrable = $request->nbrejourouvrable;
            $absence->statu = $request->statu;
            $absence->save();
      session()->flash('success', "Demande Faite avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('absence.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>