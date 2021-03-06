<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;

class DirectionController extends Controller
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
    $direction = Direction::all();
    return view('parametres.direction',compact('direction'));
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
        $direction = new Direction();
        $direction->libelle = $request->libelle;
        $direction->description = $request->description;
        $direction->save();
        session()->flash('success',"Direction {$direction->libelle} ajouté avec succès !!!");
      }catch(\Exception $e){
          session()->flash('warning',$e->getMessage());
      }

    return redirect()->route('direction.index');
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
  public function update(Request $request,$id)
  {
        try {
            $direction = Direction::findOrFail(request('direction_id'));
            $direction->update([
                'libelle'     => request('libelle'),
                'description' => request('description'),
            ]);
            session()->flash('info', "Direction {$direction->libelle} modifié avec succès !!!");
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
        }

        return redirect()->route('direction.index');
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
            Direction::destroy(request('direction_id'));
            //$direction->delete();
            session()->flash('danger', "Direction supprimé avec succès !!!");
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
        }
        return redirect()->route('direction.index');
  }

}

?>
