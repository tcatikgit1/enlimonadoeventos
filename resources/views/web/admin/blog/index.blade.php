@extends('layouts/layoutMaster')

@section('page-script')
    <script>
    const baseUrl = "{{ url('/admin/blogs') }}";
    </script>

    @vite(['resources/js/editblog.js'])
@endsection


@section('content')
    <div class="container py-5">
    <h2 class="mb-4">Gestión de Blog</h2>

    {{-- Tabla --}}
    <table class="table table-bordered" id="blogs-table">
    <thead>
    <tr>
    <th>Título</th>
    <th>Autor</th>
    <th>Fecha</th>
    <th>Imagen</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
    <tr data-id="{{ $blog->id }}" data-title="{{ $blog->title }}" data-author="{{ $blog->author }}"
    data-excerpt="{{ $blog->excerpt }}" data-content="{{ $blog->content }}"
    data-published="{{ $blog->published_at }}">
    <td>{{ $blog->title }}</td>
    <td>{{ $blog->author }}</td>
    <td>{{ $blog->published_at }}</td>
    <td><img src="{{ asset($blog->image) }}" width="60" height="40" style="object-fit: cover;"></td>
    <td>
    <button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
    data-bs-toggle="modal" data-bs-target="#editModal"><i class="ti ti-edit"></i></button>
    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-sm"
    onclick="return confirm('¿Seguro que deseas eliminar?')"><i class="ti ti-trash"></i></button>
    </form>
    </td>
    </tr>
  @endforeach
    </tbody>
    </table>

    {{-- Botón para abrir el modal de creación --}}
    <div class="mt-4">
    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#createModal">Añadir nuevo
    artículo</button>
    </div>
    </div>

    {{-- Modal de creación --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
    @csrf
    <div class="modal-header">
    <h5 class="modal-title" id="createModalLabel">Crear nuevo artículo</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
    @include('enlimonado.pages.blog.form')
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    </div>
    </form>
    </div>
    </div>

    {{-- Modal de edición --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
    <form id="editForm" method="POST" enctype="multipart/form-data" class="modal-content">
    @csrf @method('PUT')
    <div class="modal-header">
    <h5 class="modal-title" id="editModalLabel">Editar artículo</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
    @include('web.pages.blog.form')
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-warning">Actualizar</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    </div>
    </form>
    </div>
    </div>
@endsection
