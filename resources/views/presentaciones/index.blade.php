@extends('template')

@section('title','presentaciones')

@push('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Jo3J5HZw6zYrKd4xDhTCFkDjsZLu3iSa3EYbwURBe9nP1n9AIK3sMfXIFMkfD3uw" crossorigin="anonymous">
@endpush

@section('content')
<!-- Cada vez que nuestra sesión tenga la clave succes quiero que muestre esto -->
@if (session('success'))
<script>
    let message = "{{session('success')}}"
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: message
    });
</script>
@endif

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h1 class="fw-bold mb-3">Presentaciones</h1>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{route('panel')}}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="breadcrumb-item active">
                    <a href="">Presentaciones</a>
                </li>
            </ul>
            <div class="ms-md-auto py-1 py-md-0">
                <a href="{{route('presentaciones.create')}}" class="btn btn-primary btn-round">Agregar
                    Presentaciones</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Para recorrer usamos foreach y creamos una variable -->
                            @foreach ( $presentaciones as $presentacione)
                            <tr>
                                <td>{{$presentacione->caracteristica->nombre}}</td>
                                <td>{{$presentacione->caracteristica->descripcion}}</td>
                                <td>
                                    @if($presentacione->caracteristica->estado ==1)
                                    <spam>Activo</spam>
                                    @else
                                    <spam>Inactivo</spam>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group justify-content-center" role="group"
                                        aria-label="Basic mixed styles example">
                                        <!-- Se pone la ruta, y para editar hace falta enviar la marca a editar, para ello se pone lo de despues del corchete -->
                                        <form
                                            action="{{route('presentaciones.edit', ['presentacione'=>$presentacione])}}"
                                            method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-primary me-2">Editar</button>
                                        </form>
                                        @if ($presentacione->caracteristica->estado==1)
                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmModalCenterTitle-{{$presentacione->id}}">
                                            <!-- Se envia el id de la marca a eliminar(cambiar estado) -->
                                            Desactivar
                                        </button>
                                        @else
                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#confirmModalCenterTitle-{{$presentacione->id}}">
                                            <!-- Se envia el id de la marca a eliminar(cambiar estado) -->
                                            Restaurar
                                        </button>
                                        @endif
                                    </div>
                                </td>

                                <!-- Modal -->
                                <!-- En el id se recive la información de la marca a eliminar -->
                                <div class="modal fade" id="confirmModalCenterTitle-{{$presentacione->id}}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Mensaje de
                                                    confirmación</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Para que aparezca el nombre de la marca -->
                                                {{$presentacione->caracteristica->estado==1 ? '¿Estás seguro que quieres desactivar esta presentacion?':'¿Estás seguro que quieres activar esta presentación?'}}

                                            </div>
                                            <div class="modal-footer">
                                                <form
                                                    action="{{route('presentaciones.destroy',['presentacione'=>$presentacione])}}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Confirmar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});
    });
</script>

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>
@endpush