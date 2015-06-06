@extends('master')
@section('maincontent')
    <div class="jumbotron home-tron-search well ">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="home-tron-search-inner">

                        <div class="row">
                            @include('minisearch')
                        </div>


                            <div class="col-sm-4 col-xs-3" style="text-align: center">
                                <div class="row">
                                    <div class="col-sm-11 pull-right">
                                        <button class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="listings-page">
        <div class="row">
            <div class="col-sm-12 listing-wrapper listings-top listings-bottom">
                <br />
                <br />

                <div class="row">
                    <div class="col-sm-7">
                        <h1>{{$physician->first_1}} {{$physician->last_1 }} {{$physician->deg_1 }}</h1>
                        <p> {{$physician->address_12}}</p>
                        <p> {{$physician->address_23}}</p>
                        <p> {{$physician->city_1}}, {{$physician->state_1}} {{$physician->zip_1}}</p>
                    </div>
                </div>
                <hr />

                <div class="row">

                    <div class="col-sm-7">
                        <h3>Physician Information</h3>
                        <div class="row">
                            <div class="col-xs-6">
                                <table class="table">

                                    <tbody>
                                    <tr>
                                        <th>Speciality</th>
                                        <td>{{$physician->spec_des_1}}</td>
                                    </tr>
                                    <tr>
                                        <th>School</th>
                                        <td>{{$physician->med_name_1}}</td>
                                    </tr>
                                    <tr>
                                        <th>Graduation Year</th>
                                        <td>{{$physician->Year_1}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-6">
                                <table class="table">

                                    <tbody>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$physician->status_12}}</td>
                                    </tr>
                                    <tr>
                                        <th>License Number:</th>
                                        <td>{{$physician->License_1}}</td>
                                    </tr>
                                    <tr>
                                        <th>Expire</th>
                                        <td>{{$physician->expire_1}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 center">
                        <div class="row center">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <a href="#myModal" data-toggle="modal" data-target="#myModal"  ><button class="btn btn-info "><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Medicaid</button></a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-danger"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Not Medicaid</button>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-info "><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;New Patients</button>
                                    <button class="btn btn-danger "><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;No New Patients</button>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="col-sm-12" style="text-align: center; margin: 0 auto">
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 listings">
                    <br />
                    <div class="row">

                        <div class="panel panel-default recent-listings hidden-xs">
                            <div class="panel-heading">Community Updates</div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-5">
                                                <p class="ad-description">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Reply to Alan</h4>
                    <p class="hidden-xs">about "Porsche Boxster S, 2.9 2dr reg Apr 2007"</p>
                </div>
                <div class="modal-body">
                    <form class="form-vertical">
                        <fieldset>

                            <div class="row">
                                <div class="col-sm-12" >

                                    <div class="form-group">
                                        <label>Message</label>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control " placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control " placeholder="Enter email">
                                    </div>
                                    <div class="form-group hidden-xs">
                                        <label>Phone Number (Optional):</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>


                                    <div class="alert alert-info hidden-xs">
                                        <p>
                                            Follow these simple steps for a safe and successful buying experience:<br />
                                            1. Meet face to face to see the item and exchange money.<br /> 2. Make sure you are completely happy with the item before handing over any money. <br />3. Although we do not recommend paying for an item you haven't seen, if you are planning to do this, please use a secure payment method.<br />

                                        </p>
                                    </div>

                                </div>




                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div><!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Sign in to your account</h4>
                </div>
                <div class="modal-body">
                    <p>If you have an account with us, please enter your details below.</p>

                    <form method="POST" action="account_dashboard.html" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                        <div class="form-group">
                            <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                        <div class="form-group">
                            <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer" style="text-align: center">
                    <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.html">Register now</a></p></div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Modal -->
    <div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot your password?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your email to continue</p>

                    <form role="form">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email address">
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                            </div><div class="col-md-6">
                                <a href="my_account.html" class="btn btn-primary pull-right">Continue</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop