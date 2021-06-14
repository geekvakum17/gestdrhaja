@extends('layouts.main')
@section('content')

 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Default form</h4>
              <p class="card-description">
                Basic form layout
              </p>
              <form class="forms-sample" method="POST" action="{{ route('absence.store') }}">
                @csrf()
                <div class="form-group">
                  <label for="exampleInputUsername1">Nom et Prénom de l'Intérim</label>
                  <input type="text" class="form-control" id="nomiterim" name="nomiterim" placeholder="Username">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Objet de l'Absence</label><br><br><br><br><br><br>

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Mariage" onclick="choice()" checked>
                      Mariage
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Naissance" onclick="choice()">
                      Naissance
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Décès" onclick="choice()">
                      Décès
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence3" name="objetabsence" onclick="choice()">
                      Autres
                    </label>
                    <input type="text" class="form-control" id="objetabsence4" name="objetabsence" style="display: none;">
                </div>

                </div>

                <script>
                    function choice() {

                        if ($('input[type=radio][id=objetabsence3]').is(':checked')) {
                            $('#objetabsence4').css("display", "block");
                        } else if ($('input[type=radio][id=objetabsence]').is(':checked')) {
                            $('#objetabsence4').css("display", "none");
                        }
                    }
                </script>

                <div class="form-group">
                    <label for="exampleInputUsername1">DATE DE DEPART</label>
                    <input type="text" class="form-control" id="datedepart" name="datedepart" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">DATE DE RETOUR PREVUE</label>
                    <input type="text" class="form-control" id="dateretour" name="dateretour" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Durée en Jours Ouvrables</label>
                    <input type="text" class="form-control" id="nbrejourouvrable" name="nbrejourouvrable" placeholder="">
                </div>
                <input type="hidden" class="form-control" id="statu" name="statu" value="3">



                <button type="submit" class="btn btn-success mr-2">Demandez</button>
                <button class="btn btn-danger">Annuller</button>
              </form>
            </div>
          </div>
        </div>

















        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Input size</h4>
              <p class="card-description">
                Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
              </p>
              <div class="form-group">
                <label>Large input</label>
                <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
              </div>
              <div class="form-group">
                <label>Default input</label>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
              </div>
              <div class="form-group">
                <label>Small input</label>
                <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Select size</h4>
              <p class="card-description">
                Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
              </p>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Large select</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Default select</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect3">Small select</label>
                <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic input groups</h4>
              <p class="card-description">
                Basic bootstrap input groups
              </p>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary text-white">$</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <div class="input-group-prepend">
                    <span class="input-group-text">0.00</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-primary" type="button">Search</button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username">
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-facebook" type="button">
                      <i class="mdi mdi-facebook"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Checkbox Controls</h4>
              <p class="card-description">Checkbox and radio controls (default appearance is in primary color)</p>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Default
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Checked
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" disabled>
                          Disabled
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" disabled checked>
                          Disabled checked
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                          Default
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                          Selected
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled>
                          Disabled
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked>
                          Selected and disabled
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              <p class="card-description">Add class <code>.form-check-{color}</code> for checkbox and radio controls in theme colors</p>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Primary
                        </label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Success
                        </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Info
                        </label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Danger
                        </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Warning
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked>
                          Primary
                        </label>
                      </div>
                      <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
                          Success
                        </label>
                      </div>
                      <div class="form-check form-check-info">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked>
                          Info
                        </label>
                      </div>
                      <div class="form-check form-check-danger">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked>
                          Danger
                        </label>
                      </div>
                      <div class="form-check form-check-warning">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked>
                          Warning
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Toggle Switch</h4>
              <p class="card-description">Add class <code>.toggle-switch-{color}</code> for toggle switch controls in theme colors</p>
              <div class="form-group row">
                <div class="col">
                  <p class="mb-2">Primary</p>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
                <div class="col">
                    <p class="mb-2">Success</p>
                  <label class="toggle-switch toggle-switch-success">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
                <div class="col">
                    <p class="mb-2">Danger</p>
                  <label class="toggle-switch toggle-switch-danger">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
                <div class="col">
                    <p class="mb-2">Info</p>
                  <label class="toggle-switch toggle-switch-info">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
                <div class="col">
                    <p class="mb-2">Warning</p>
                  <label class="toggle-switch toggle-switch-warning">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
                <div class="col">
                    <p class="mb-2">Dark</p>
                  <label class="toggle-switch toggle-switch-dark">
                    <input type="checkbox" checked>
                    <span class="toggle-slider round"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Inline forms</h4>
              <p class="card-description">
                Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row
              </p>
              <form class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                </div>
                <div class="form-check mx-sm-2">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Horizontal Two column</h4>
              <form class="form-sample">
                <p class="card-description">
                  Personal info
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Gender</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Date of Birth</label>
                      <div class="col-sm-9">
                        <input class="form-control" placeholder="dd/mm/yyyy"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>Category1</option>
                          <option>Category2</option>
                          <option>Category3</option>
                          <option>Category4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Membership</label>
                      <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                            Free
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                            Professional
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="card-description">
                  Address
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address 1</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">State</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address 2</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Postcode</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">City</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Country</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>America</option>
                          <option>Italy</option>
                          <option>Russia</option>
                          <option>Britain</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Select 2</h4>
              <div class="form-group">
                <label>Single select box using select 2</label>
                <select class="js-example-basic-single w-100">
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="AM">America</option>
                  <option value="CA">Canada</option>
                  <option value="RU">Russia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Multiple select using select 2</label>
                <select class="js-example-basic-multiple w-100" multiple="multiple">
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="AM">America</option>
                  <option value="CA">Canada</option>
                  <option value="RU">Russia</option>
                </select>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- content-wrapper ends -->

@endsection
