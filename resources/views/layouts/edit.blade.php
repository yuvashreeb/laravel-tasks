
@extends('layouts.app')
@section('content')
<section class="content">
<table id="timezone" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th>
            <th>Save</th>
        </tr>
    </thead>
    <tbody>
        @foreach($view as $value)
        <tr>
            
           <td><form id="form1" method="post" action="{{URL::Route('SaveRows')}}"><input id="form1" type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></form></td>
            <td><input form="form1" type='' name='Id' value='{{$value['Id']}}'></td>
            <td><input form="form1" type='text' name='Name' value='{{$value['Name']}}'</td>
            <td><input form="form1" type='text' name="Offset" value='{{$value['Offset']}}'</td>
            <td><input form="form1" type='submit' value='Save'></td>
        </tr> 
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th>
           
            <th>Save</th>
        </tr>
    </tfoot>
</table>

@stop
</section>





















