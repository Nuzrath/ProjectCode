@extends('layouts.admin')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Subject Create by Admin</div>
    
                    <div class="panel-body">
                      
                      {!! Form::open(['method'=>'POST', 'action'=> 'AdminSubjectController@store']) !!}

                        <div class="form-group">
                           
                                {!! Form::label('name', 'Subject Name :' ) !!}
                            
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                
                            </div>
    
                            
                            <div class="form-group">
                                {!! Form::submit('Add Subject') !!}
                            </div>
                            

                      {!! Form::close() !!}
                         

                     </div><!--//end panel body -->
                </div> <!--//end  panel default end--->
            </div><!--//col md closer-->
        </div><!-- //row closer-->
</div> <!--//end container fluid-->

@stop