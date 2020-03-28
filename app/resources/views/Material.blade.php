@extends('Layouts/HTMLStructure')

@section('content')

<br />
<br />
   
<center> 
    <h3>Descarga de material</h3>
    <br />
  
    <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Buscar Archivo..">    </center>
        
    <br />      
<center>
    <table class="table table-bordered table-striped">
   
        <thead>
            <tr>
                <th><center>Nombre</center></th>
                <th><center>Asignatura</center></th>
                <th><center>Grupo</center></th>
                <th><center>Profesor</center></th>
                <th><center>Acceso</center></th>
                <th><center>Descargar</center></th>
            </tr>
        </thead>
    
        <tbody id="myTable" style="width: 50%;">
            
            @foreach($Materiales as $item)
            <tr>
                <th scope="row"><center>{{$item->idMaterial}}</center></th>
                <td><center>{{$item->Asignatura}}</center></td>
                <td><center>{{$item->Grupo}}</center></td>
                <td><center>{{$item->Nombre()}}</center></td>

                @switch($item->Acceso)
                    @case(1)
                        <td><center>Restringido</center></td>
                        <td><center><input type='button' class='btn btn-primary' value='Descargar Archivo'></center></td>
                        @break
                    
                    @case(0)
                        <td><center>Libre</center></td>
                        <td><center><input type='button' class='btn btn-primary' value='Descargar Archivo'></center></td>
                        @break
                @endswitch
            </tr>         
            @endforeach()
        </tbody>
    </table>

    <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a>
</center>

<br />
<br />
        
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>