@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="text-decoration:solid;font-family:Times New Roman">Enregistrement</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <form action="{{route('patient-store')}}" method="POST">
                    @csrf
                    <div
                        class="card-header"style="background-image: linear-gradient(to right,#16bffd,rgba(86, 139, 255, 0.948)">
                        <h3 class="card-title"
                            style="text-decoration:solid;font-family:Times New Roman;color:rgba(254, 254, 255, 0.948)">
                            Données du patient</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name"style="font-family:Times New Roman;font-size:20px">Noms</label>
                                    <input type="text" name="name"style="width:350px"required>

                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="age"
                                        style="width:50px;font-family:Times New Roman;font-size:20px">age</label>
                                    <input type="integer" name="age"style="width:50px"required>
                                    <input type="radio" name="age"value="jour"style="width:50px"required>jour(s)
                                    <input type="radio" name="age"value="moi"style="width:50px"required>mois
                                    <input type="radio" name="age"value="année"style="width:50px"required>an(s)
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="taille"style="font-family:Times New Roman;font-size:20px">taille en
                                        m</label>
                                    <input type="float" name="taille"required>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="sexe"style="font-family:Times New Roman;font-size:20px">sexe : </label>
                                    <input type="radio"name="sexe"value="Masculin"style="width:50px"required>M
                                    <input type="radio"name="sexe"value="Femme"style="width:50px"required>F
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="temperature"style="font-family:Times New Roman;font-size:20px">température
                                        en 0C</label>
                                    <input type="float"name="temperature"style="width:250px"required>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="rhesus"style="font-family:Times New Roman;font-size:20px">rhesus :</label>
                                    <input type="radio" name="rhesus" value="rhesus"style="width:50px"required>RH-
                                    <input type="radio" name="rhesus" value="rhesus"style="width:50px"required>RH+
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label style="font-family:Times New Roman;font-size:20px">groupe sanguin</label>
                                    <div>
                                        <select class="select2" data-placeholder="Select a State"
                                            data-dropdown-css-class="select2-purple" style="width: 30%;"required>
                                            <option value="O">O</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="bombay">bombay <BOdy>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label
                                        for="locality"style="font-family:Times New Roman;font-size:20px">localisation</label>
                                    <input type="text" name="locality" style="width:350px"required>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="phone"style="width:80px;font-family:Times New Roman;font-size:20px">tel:</label>
                                    <input type="text" name="phone" pattern="[0-9]{9}"style="width:350px"required>
                                </div>
                            </div>
                            <div class="row">
                                <input
                                    type="submit"value="enregistrer"style=" background-color:#16bffd;
                  background-position: center;border-radius:5px;border-style:none;padding:10px;font-size:16px;color:rgb(249, 250, 251)">
                            </div>
                        </div>
                        <!-- /.card-body -->
                </form>
    </section>
@endsection
