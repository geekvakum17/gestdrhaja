<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $grade = Grade::all();
    return view('parametres.grade', compact('grade'));
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

    try{
      $grade = new Grade();
      $grade->libelle = $request->libelle;
      //$grade->description = $request->description;
      $grade->save();
      session()->flash('success',"Grade {$grade->libelle} ajouté avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }

  return redirect()->route('grade.index');

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
    try {
      $grade = Grade::findOrFail(request('grade_id'));
      $grade->update([
        'libelle'     => request('libelle'),
      ]);
      session()->flash('info', "Grade {$grade->libelle} modifié avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('grade.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    try {
      // $direction = Direction::findOrFail(request('direction_id'));
      Grade::destroy(request('grade_id'));
      //$direction->delete();
      session()->flash('danger', "Grade supprimé avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }
    return redirect()->route('grade.index');
  }

}

?>
