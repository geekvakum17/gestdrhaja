<?php

namespace App\Http\Controllers;
use App\Models\Agenceregional;
use Illuminate\Http\Request;
use App\Models\Guichet;


class GuichetController extends Controller
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
    $guichet = Guichet::all();
    $agence = Agenceregional::all();
    return view('parametres.guichet',compact('guichet', 'agence'));
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
        $guichet = new Guichet();
        $guichet->libelle = $request->libelle;
        $guichet->description = $request->description;
        $guichet->agenceregional_id = $request->agenceregional_id;
        $guichet->save();
        session()->flash('success',"Guichet {$guichet->libelle} ajouté avec succès !!!");
      }catch(\Exception $e){
          session()->flash('warning',$e->getMessage());
      }

    return redirect()->route('guichet.index');
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
            $guichet = Guichet::findOrFail(request('guichet_id'));
            $guichet->update([
                'libelle'     => request('libelle'),
                'description' => request('description'),
                'agenceregional_id' => request('agenceregional_id'),
            ]);
            session()->flash('info', "Guichet {$guichet->libelle} modifié avec succès !!!");
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
        }

        return redirect()->route('guichet.index');
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
            Guichet::destroy(request('guichet_id'));
            //$direction->delete();
            session()->flash('danger', "Guichet supprimé avec succès !!!");
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
        }
        return redirect()->route('guichet.index');
  }

}

?>
