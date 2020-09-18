
@extends('layouts.template')

@section('Tabla ')
<?php

 $enfermo = array('El Paraiso','moroceli','danli','el pescadero')
?>

<table Border= 2px>
<thead><tr>
<th>
Procedencia del enfermo
</th>
</tr>


</thead>

<tbody>
@foreach($enfermo as enferm) <tr>
<td>{{$enferm}}</td>
</tr>
@empty
<tr>
<td>No hay Procedencia de enfermos
</td></tr>

</tbody>
@endforeach
</table>
@endsection


