@extends('Layouts/HTMLStructureB4')

@section('content')

<br />
<br />
   
<center> 
    <h4 class="text-center text-danger">Descarga de material</h4>
    <br />
    <div class="alert alert-danger">
        Aqui podras descargar material de los profesores de la academia de matemáticas
    </div>
</center>
    
    <div id="accordion">

    @php($i = 0);

        @foreach($Materiales as $item)
    
        <div class="card">
        
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapse{{$i}}">
                    <img class="Iconos" src="../icono.png" />
                    {{$item->NombreArchivo}}, {{$item->Asignatura}} de {{$item->Nombre." ".$item->Apellidos}}
                </a>
            </div>
            <div id="collapse{{$i}}" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    @switch($item->Acceso)
                        @case(1)
                            <label class="text-danger"><b>Material para grupo(s):</b></label> {{$item->Grupo}}.  
                            <br />

                            <label class="text-danger"><b>Tipo de acceso: </b></label> Restringido.
                            <br />
                            <i class="text-danger">Necesitas contraseña para poder descargar el archivo.</i>
                            <br />
                            <div class="d-flex justify-content-end">
                                <button type='button' class='btn btn-primary'>Descargar</button>
                            </div>
                            @break
                        
                        @case(0)
                            <label class="text-success"><b>Material para grupo(s):</b></label> {{$item->Grupo}}.  
                            <br />

                            <label class="text-success"><b>Tipo de acceso: </b></label> Libre.
                            <br />
                            <i class="text-success">Puedes descargar el archivo sin clave.</i>
                            <br />
                            <div class="d-flex justify-content-end">
                                <button type='button' class='btn btn-primary'>Descargar</button>
                            </div>
                            @break
                    @endswitch     

                </div>
            </div>
        </div>
        @php($i += 1);
        @endforeach() 
    </div>
    
    <center><a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a></center>

    <br />
    <br />
    