<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statu;

class StatuController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   * 
   */

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $statu = Statu::all();
    return view('parametres.statu', compact('statu'));
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
      $statu = new Statu();
      $statu->libelle = $request->libelle;
      //$grade->description = $request->description;
      $statu->save();
      session()->flash('success',"STATU {$statu->libelle} ajouté avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }

  return redirect()->route('statu.index');
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
      $statu = Statu::findOrFail(request('statu_id'));
      $statu->update([
        'libelle'     => request('libelle'),
      ]);
      session()->flash('info', "Grade {$statu->libelle} modifié avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('statu.index');
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
      Statu::destroy(request('statu_id'));
      //$direction->delete();
      session()->flash('danger', "Statu supprimé avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }
    return redirect()->route('statu.index');
  }
  
  
}

?>