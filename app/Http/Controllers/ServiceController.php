<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $service = Service::all();
    return view('parametres.services', compact('service'));
    
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
      $service = new Service();
      $service->libelle = $request->libelle;
      $service->lieuservice = $request->lieuservice;
      $service->descriptionservice = $request->descriptionservice;
      $service->save();
      session()->flash('success',"Service {$service->libelle} ajouté avec succès !!!");
    }catch(\Exception $e){
        session()->flash('warning',$e->getMessage());
    }
  
  return redirect()->route('services.index');
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