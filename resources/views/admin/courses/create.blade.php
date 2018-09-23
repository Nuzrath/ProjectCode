@extends('layouts.admin')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Create by Admin</div>
    
                    <div class="panel-body">
                        {!! Form::open(['method'=>'POST', 'action'=> 'AdminCourseController@store']) !!}

                            <div class="form-group">
                            
                                {!! Form::label('name', 'Course Name :' ) !!}
                                
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                
                            </div>

                            <div class="form-group">
                            
                                {!! Form::label('duration', 'Duration :' ) !!}
                                
                                {!! Form::text('duration', null, ['class'=>'form-control']) !!}
                                
                            </div>

                            <div class="form-group">
                            
                                    {!! Form::label('fee', 'Fee Amount :' ) !!}
                                    
                                    {!! Form::text('fee', null, ['class'=>'form-control']) !!}
                                    
                            </div>

                            
                            <div class="form-group">
                                {!! Form::submit('Add Course') !!}
                            </div>
                            
                            




                        {!! Form::close() !!}

                    </div><!--//end panel body -->
                </div> <!--//end  panel default end--->
            </div><!--//col md closer-->
        </div><!-- //row closer-->
</div> <!--//end container fluid-->

@stop