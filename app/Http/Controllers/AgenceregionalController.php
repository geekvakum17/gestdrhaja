<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenceregional;

class AgenceregionalController extends Controller
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
    $agence = Agenceregional::all();
    return view('parametres.agenceregional', compact('agence'));
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
      $agence = new Agenceregional();
      $agence->libelle = $request->libelle;
      //$agence->description = $request->description;
      $agence->save();
      session()->flash('success',"Agence Regional {$agence->libelle} ajouté avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }

  return redirect()->route('agenceregional.index');
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
      $agence = Agenceregional::findOrFail(request('agenceregional_id'));
      $agence->update([
        'libelle'     => request('libelle'),
      ]);
      session()->flash('info', "Agence Regional {$agence->libelle} modifié avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('agenceregional.index');
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
      Agenceregional::destroy(request('agenceregional_id'));
      //$direction->delete();
      session()->flash('danger', "Agence Regionale supprimé avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }
    return redirect()->route('agenceregional.index');
  }


}

?>
