<?php

namespace App\Http\Controllers;

use App\Models\Agenceregional;
use App\Models\Direction;
use App\Models\Grade;
use App\Models\Service;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $user = User::all();
    $direction = Direction::all();
    $sousdirection = Sousdirection::all();
    $service = Service::all();
    $grade = Grade::all();
    $agence = Agenceregional::all();
    $role = Role::get();
    return view('gestionUsers.user', compact('user', 'direction', 'service', 'grade', 'agence', 'sousdirection','role'));
    //dd();
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

        $this->validate(request(), [
            'nomprenom' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users',
            'password' => 'sometimes',
        ]);

        $data = request()->all();

        if (request()->has('password')) {
            $data['password'] = bcrypt(request('password'));
        }

        try {

            $user = new User();
            $user->nomprenom = $request->nomprenom;
            $user->datenaissance = $request->datenaissance;
            $user->situationmatri = $request->situationmatri;
            $user->lieuxnaissance = $request->lieuxnaissance;
            $user->Niveauetude = $request->Niveauetude;
            $user->grade_id = $request->grade_id;
            $user->villeresidence = $request->villeresidence;
            $user->suphierachique = $request->suphierachique;
            $user->datepriseservice = $request->datepriseservice;
            $user->nbrenfant = $request->nbrenfant;
            $user->agenceregional_id = $request->agenceregional_id;
            $user->diplome = $request->diplome;
            $user->poste = $request->poste;
            $user->direction_id = $request->direction_id;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->contact = $request->contact;
            $user->service_id = $request->service_id;
            $user->sousdirection_id = $request->sousdirection_id;
            $user->save();

            $role_r = Role::where('id', '=', $request->poste)->firstOrFail();
            $user->assignRole($role_r);

            session()->flash('success', "Utilisateur {$user->nomprenom} ajouté avec succès !!!");
            
        } catch (\Exception $e) {

            session()->flash('warning', $e->getMessage());

        }

    return redirect()->route('user.index');
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
