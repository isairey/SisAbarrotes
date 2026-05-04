@extends('template')
@section('title','Editar Producto');

@push('css')
@endpush

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h1 class="fw-bold mb-0.2">Productos</h1>
            <ul class="breadcrumbs mb-0.3">
                <li class="nav-home">
                    <a href="{{route('panel')}}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('productos.index')}}">Productos</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="breadcrumb-item active">
                    <a href="">Editar Productos</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush