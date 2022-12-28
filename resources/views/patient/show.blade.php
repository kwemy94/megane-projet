@extends('layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="color: black">
                            <h3 class="card-title">Détails <strong>{{$patient->name}}</strong></h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Nom complet du patient</td>
                                        <td>{{$patient->name}} </td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>{{$patient->age}} </td>
                                    </tr>
                                    <tr>
                                        <td>Téléphone</td>
                                        <td>{{$patient->phone}} </td>
                                    </tr>
                                    <tr>
                                        <td>Localité</td>
                                        <td>{{$patient->locality}} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
