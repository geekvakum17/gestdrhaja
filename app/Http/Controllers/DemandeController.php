<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;

class DemandeController extends Controller 
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
    $demande = Demande::all();
    return view('Conges.demande', compact('demande'));
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
      $demande = new Demande();
      $demande->fonctionIterim = $request->fonctionIterim;
      $demande->datedebutca = $request->datedebutca;
      $demande->datefinca = $request->datefinca;
      $demande->dureeconge = $request->dureeconge;
      $demande->datereprise = $request->datereprise;
      $demande->statu = $request->statu;
      $demande->save();
      session()->flash('success',"Demande Faite avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }

  return redirect()->route('demande.index');
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