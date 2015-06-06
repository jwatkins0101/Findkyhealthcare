@extends('master')
@section('maincontent')
    <div class="jumbotron home-search" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <p class="main_description">Search thousands of Kentucky Medicaid health care providers all in one place</p>

                    <br><br>
                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2" style="text-align: center">
                            <div class="row">

                                <div class="col-sm-10 col-sm-offset-1">
                                    {!! Form::open(array('url' => 'listings')) !!}

                                    <div class="input-group">
                                        <span class="input-group-addon input-group-addon-text">Find me a Doctor in</span>
                                        {!!  Form::text('zipcode','',array('class'=>'form-control col-sm-3', 'placeholder'=>'Zipcode')) !!}
                                        <div class=" input-group-addon hidden-xs">
                                            <div class="btn-group">
                                                <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                                                    All categories <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    @foreach($spec_des_1 as $cat)
                                                        <li><a href="#">{{$cat}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: center">
                            {!! Form::submit('Search',array('class'=>'btn btn-primary search-btn')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12" style="text-align: center">

                            <div id="quotes">
                                <div class="text-item" style="display: none;">Your x-ray showed a broken rib, but we fixed it with photoshop.</div>
                                <div class="text-item" style="display: none;">My doctor told me to avoid any unnecessary stress, so I didn't open my bill.</div>
                                <div class="text-item" style="display: none;">Won't go to the doctor today, I don't feel well enough.</div>
                                <div class="text-item" style="display: none;">A man goes to a psychiatrist and says no one listens to him and the psychiatrist replies, "Next!"</div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop