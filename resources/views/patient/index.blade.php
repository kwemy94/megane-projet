@extends('layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="color: black">
                            <h3 class="card-title">Liste des patients</h3>
                            <a href="{{url('enregistrement')}}" >
                                <span class="fas fa-plus float-right  "  title="Ajouter patient"> Nouveau</span>
                            </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nom complet</th>
                                        <th>Age</th>
                                        <th style="">Téléphone</th>
                                        <th style="">Lacalisation</th>
                                        <th style="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                    <tr>
                                        <td>1.</td>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->age}} </td>
                                        <td>{{$patient->phone}}</td>
                                        <td>{{$patient->locality}}</td>
                                        <td>
                                            <span class="fas fa-pen" title='editer'></span>
                                            <a href="{{route('patient-show', $patient->id)}}"><span class="fas fa-eye" title='Voir'></span></a>
                                            <span class="fas fa-trash" title='Supprimer'></span>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
