<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sousdirection;

class SousdirectionController extends Controller
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

    $sousdirection = Sousdirection::all();
    return view('parametres.sousdirection', compact('sousdirection'));
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
      $sousdirection = new Sousdirection();
      $sousdirection->libelle = $request->libelle;
      $sousdirection->lieudirection = $request->lieudirection;
      $sousdirection->description = $request->description;
      $sousdirection->save();
      session()->flash('success',"Sous-Direction {$sousdirection->libelle} ajouté avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }

  return redirect()->route('sousdirection.index');
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
      $sousdirection = Sousdirection::findOrFail(request('sousdirection_id'));
      $sousdirection->update([
        'libelle'     => request('libelle'),
        'lieudirection' => request('lieudirection'),
        'description' => request('description'),
      ]);
      session()->flash('info', "Sous-direction {$sousdirection->libelle} modifié avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('sousdirection.index');
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
      Sousdirection::destroy(request('sousdirection_id'));
      //$direction->delete();
      session()->flash('danger', "Sous-direction supprimé avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }
    return redirect()->route('sousdirection.index');
  }

  }



?>
