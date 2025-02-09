@extends('layouts.masteradmin', ['title'=>'Table'])


@section('content')

<!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">


                                        <h4 class="float-left">Table  </h4>


                                        <ol class="breadcrumb float-left float-md-right">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                            <li class="breadcrumb-item">Advanced Forms </li>
                                        </ol>


                                </div>
                            </div>
                        </div><!-- end .page title-->
                        <div class="row">
                            <div class="col-md-12">


                                <div class="card panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Order Status
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                               <div class="dropdown-menu panel-dropdown" role="menu">
                                                   <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
 
                                            </div>
                                        </div>
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
                                                            <strong>PURCHASED ON</strong>
                                                        </th>
                                                        <th>
                                                            <strong>CLIENT NAME</strong>
                                                        </th>
                                                        <th>
                                                            <strong>AMOUNT</strong>
                                                        </th>
                                                        <th>
                                                            <strong>QUANTITY</strong>
                                                        </th>
                                                        <th>
                                                            <strong>SHIPMENT</strong>
                                                        </th>
                                                        <th class="text-xs-center">
                                                            <strong>STATUS</strong>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0001</td>
                                                        <td>03/11/2015</td>
                                                        <td>Addison Nichols</td>
                                                        <td>$ 515.20</td>
                                                        <td>547</td>
                                                        <td>04/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0002</td>
                                                        <td>05/11/2015</td>
                                                        <td>Albert Watkins</td>
                                                        <td>$ 22.30</td>
                                                        <td>122</td>
                                                        <td>06/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0003</td>
                                                        <td>07/09/2015</td>
                                                        <td>Johnny Fernandez</td>
                                                        <td>$ 31.4</td>
                                                        <td>68</td>
                                                        <td>28/09/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00011</td>
                                                        <td>19/08/2015</td>
                                                        <td>Gilbert Edwards</td>
                                                        <td>$ 5115.12</td>
                                                        <td>51</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00012</td>
                                                        <td>20/07/2015</td>
                                                        <td>Norman Hill</td>
                                                        <td>$ 5124.13</td>
                                                        <td>41</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00013</td>
                                                        <td>22/07/2015</td>
                                                        <td>Samantha Murphy</td>
                                                        <td>$ 513.214</td>
                                                        <td>54</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00014</td>
                                                        <td>30/07/2015</td>
                                                        <td>Nora Lambert</td>
                                                        <td>$ 147.15</td>
                                                        <td>65</td>
                                                        <td>023/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00015</td>
                                                        <td>29/07/2015</td>
                                                        <td>Shelly Robertson</td>
                                                        <td>$ 15.016</td>
                                                        <td>12</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00016</td>
                                                        <td>15/12/2015</td>
                                                        <td>Carrie Cruz</td>
                                                        <td>$ 164.17</td>
                                                        <td>123</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00017</td>
                                                        <td>16/07/2015</td>
                                                        <td>Kyle Fleming</td>
                                                        <td>$ 174.18</td>
                                                        <td>1</td>
                                                        <td>027/03/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00018</td>
                                                        <td>12/07/2015</td>
                                                        <td>Everett Garcia</td>
                                                        <td>$ 188.19</td>
                                                        <td>65</td>
                                                        <td>029/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00019</td>
                                                        <td>10/07/2015</td>
                                                        <td>Mae Harper</td>
                                                        <td>$ 195.20</td>
                                                        <td>45</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0004</td>
                                                        <td>09/09/2015</td>
                                                        <td>Chloe Rodriquez</td>
                                                        <td>$ 4.55</td>
                                                        <td>21</td>
                                                        <td>10/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0005</td>
                                                        <td>01/09/2015</td>
                                                        <td>Stanley Austin</td>
                                                        <td>$ 55.6</td>
                                                        <td>57</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0006</td>
                                                        <td>212/08/2015</td>
                                                        <td>Ethel Torres</td>
                                                        <td>$ 62.7</td>
                                                        <td>115</td>
                                                        <td>13/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0007</td>
                                                        <td>24/08/2015</td>
                                                        <td>Ronnie Nelson</td>
                                                        <td>$ 78.8</td>
                                                        <td>154</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-danger">Rejected</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0008</td>
                                                        <td>25/08/2015</td>
                                                        <td>Stanley Olson</td>
                                                        <td>$ 85.9</td>
                                                        <td>74</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0009</td>
                                                        <td>16/08/2015</td>
                                                        <td>Jennie Cooper</td>
                                                        <td>$ 97.10</td>
                                                        <td>332</td>
                                                        <td>017/03/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00010</td>
                                                        <td>18/03/2015</td>
                                                        <td>Fernando Morrison</td>
                                                        <td>$ 5108.11</td>
                                                        <td>123</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
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
