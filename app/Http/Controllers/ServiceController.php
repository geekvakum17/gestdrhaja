<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
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
    try {
      $service = Service::findOrFail(request('service_id'));
      $service->update([
        'libelle'     => request('libelle'),
        'lieuservice' => request('lieuservice'),
        'descriptionservice' => request('descriptionservice'),
      ]);
      session()->flash('info', "Service {$service->libelle} modifié avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }

    return redirect()->route('services.index');

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
      Service::destroy(request('service_id'));
      //$direction->delete();
      session()->flash('danger', "Service supprimé avec succès !!!");
    } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
    }
    return redirect()->route('services.index');
  }

}

?>
