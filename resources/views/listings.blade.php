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


    <div class="container">
        <div class="row">
            @foreach($physicians as $physician)
                <div class="col-sm-12 pull-right listings">
                    <div class="row  listing-row">
                        <div class="col-sm-10">
                            <h3><a class=""  href="physician/{{ Round($physician->License_1,0)}}">{{$physician->first_1}} {{$physician->last_1}}</a></h3>
                            <p>{{($physician->address_12) }}</p>
                            <p>{{($physician->address_23) }}</p>
                            <p>{{($physician->city_1) }}, {{($physician->state_1) }} {{($physician->zip_1) }}</p>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
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