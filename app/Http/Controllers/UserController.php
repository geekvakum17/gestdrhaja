<?php

namespace App\Http\Controllers;

use App\Models\Agenceregional;
use App\Models\Diplome;
use App\Models\Direction;
use App\Models\Grade;
use App\Models\Niveauetude;
use App\Models\Service;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
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
    $user = User::all();
    $direction = Direction::all();
    $sousdirection = Sousdirection::all();
    $service = Service::all();
    $grade = Grade::all();
    $agence = Agenceregional::all();
    $role = Role::get();
    $diplome = Diplome::all();
    $niveauetude = Niveauetude::all();
    return view('gestionUsers.user', compact('user', 'direction', 'service', 'grade', 'agence', 'sousdirection','role', 'diplome', 'niveauetude'));
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
            'name' => 'sometimes|required',
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
            $user->matricule = $request->matricule;
            $user->datenaissance = $request->datenaissance;
            $user->situationmatri = $request->situationmatri;
            $user->lieuxnaissance = $request->lieuxnaissance;
            $user->niveauetude = $request->Niveauetude;
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
            $user->password = Hash::make($request->password);
            $user->contact = $request->contact;
            $user->service_id = $request->service_id;
            $user->sousdirection_id = $request->sousdirection_id;
            $user->save();

            $role_r = Role::where('id', '=', $request->poste)->firstOrFail();
            $user->assignRole($role_r);

            session()->flash('success', "Utilisateur {$user->name} ajouté avec succès !!!");

        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());

        }

    return redirect()->route('user.index');
  }

  public function search()
  {
    $recherche = request()->input('recherche');
    $users = User::where('matricule', 'like', "%$recherche%")
          ->orwhere('nomprenom', 'like', "%$recherche%")->get();
          //dd($users);
          return view('gestionUsers.search')->with('users', $users);

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
      $user = User::findOrFail(request('user_id'));
      $user->update([
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'situationmatri'     => request('situationmatri'),
          'lieuxnaissance' => request('lieuxnaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
          'nomprenom'     => request('nomprenom'),
          'datenaissance' => request('datenaissance'),
      ]);
      session()->flash('info', "Utilisateur {$user->libelle} modifié avec succès !!!");
  } catch (\Exception $e) {
      session()->flash('warning', $e->getMessage());
  }

  return redirect()->route('user.index');


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

        User::destroy(request('user_id'));
        //$direction->delete();
        session()->flash('danger', "Utilisateur supprimé avec succès !!!");
      } catch (\Exception $e) {
        session()->flash('warning', $e->getMessage());
      }
      return redirect()->route('user.index');
    }



}

?>
