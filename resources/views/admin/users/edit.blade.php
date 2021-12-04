@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
        <form action="{{ route('user.update', $user) }}"
        method="POST">

            <div class="form-row">
                <div class="col-md">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Nombres
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                </div>
                <div class="col">
                    <label class="block text-gray-700 text-sm font-bold mb-2" >
                        Apellidos
                    </label>
                    <input id="job_title" type="text"  name="job_title" class="form-control" value="{{ old('job_title', $user->job_title) }}">
                </div>
            </div>




            @csrf
            @method('PUT')

            <button type="submit" class="site-btn">Guardar Cambios</button>
        </form>
    </div>
</div>

@endsection
