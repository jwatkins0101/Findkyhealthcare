<div class="col-sm-8 col-xs-9" style="text-align: center">
    <div class="row">
        {!! Form::open(array('url' => 'listings')) !!}
        <div class="col-sm-12 col-sm-offset-1">
            <div class="input-group">
                <span class="input-group-addon input-group-addon-text hidden-xs">Find me a Doctor in</span>
                {!!  Form::text('zipcode','',array('class'=>'form-control col-sm-3', 'placeholder'=>'Zipcode')) !!}
                <div class=" input-group-addon hidden-xs">
                    <div class="btn-group" >
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
            {!! Form::close() !!}
        </div>