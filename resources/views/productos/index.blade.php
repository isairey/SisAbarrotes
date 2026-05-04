@extends('template')
@section('title', 'Productos')

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
            <h1 class="fw-bold mb-3">Productos</h1>
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
                    <a href="">Productos</a>
                </li>
            </ul>
            <div class="ms-md-auto py-1 py-md-0">
                <a href="{{route('productos.create')}}" class="btn btn-primary btn-round">Agregar Producto</a>
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