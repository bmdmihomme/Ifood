@extends('layouts.masteradmin', ['title'=>'List des ventes'])


@section('content')

<!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">


                                        <h4 class="float-left">Commande  </h4>


                                        <ol class="breadcrumb float-left float-md-right">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                            <li class="breadcrumb-item">Advanced Forms </li>
                                        </ol>


                                </div>
                            </div>
                        </div><!-- end .page title-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-card margin-b-30">
                                </div>
                            </div>
                    </div>

                     <div class="row">
                            <div class="col-md-12">
                                <div class="card panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Status des commandes
                                    </div>
                                    <div class="card-block text-xs-center">
                                        <div class="table-responsive table-commerce">
                                            <table id="dataBmd" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="w80">
                                                            <strong>ID</strong>
                                                        </th>
                                                        <th>
                                                            <strong>CODE</strong>
                                                        </th>
                                                        <th>
                                                            <strong>DATE COMMANDE</strong>
                                                        </th>
                                                        <th>
                                                            <strong>CLIENT</strong>
                                                        </th>
                                                        <th>
                                                            <strong>STATUS</strong>
                                                        </th>
                                                        <th>
                                                            <strong>ACTION</strong>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $id = 1?>
                                                @foreach($commandes as $commande)
                                                @if($commande->restaurant_id==$restaurant->id)
                                                    <tr>
                                                        <td>{{$id++}}</td>
                                                        <td>{{$commande->code_commande}}</td>
                                                        <td>{{$commande->date_commande}}</td>
                                                        <td>{{$commande->clients->nom_complet}}</td>
                                                        <td class="text-xs-center">
                                                            <a href="/detail-commande/{{$commande->id}}" ><span class="btn btn-warning btn-sm  fa fa-eye"></span></a>
                                                        </td>
                                                        <td>
                                                            @if($commande->status=="Non livré")
                                                            <a href="/commande-non/{{$commande->id}}" title="Cliquez pour livrer la commande" data-toggle="tooltip"><span class="btn btn-danger ">Non Livré</span></a>
                                                        @else
                                                            <a href="#" title="Commande déjà livrer" data-toggle="tooltip"><span class="btn btn-primary ">Déjà livré</span></a>
                                                        @endif
                                                        </td>

                                                    </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div><!-- End .panel -->


                            </div>
                        </div>
                    <div class="clearfix"></div>
                    <div class="footer">
                        <div class="float-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company © 2017
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->

@endsection
