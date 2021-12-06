
<div class="row">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger" role="alert">
        {{ session('danger') }}
    </div>
    @endif
    <form
        action="{{ route('user.update', $user) }}"
        enctype="multipart/form-data"
        method="POST">

        <div class="row mb-4">
            <h2>Datos personales</h2>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Nombres
                </label>
                <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                @error('name')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Mensaje
                </label>
                <input id="cute_message" type="text"  name="top_message" class="form-control" value="{{ old('top_message', $user->top_message) }}">
                @error('top_message')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ top_message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Titulo
                </label>
                <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                @error('title_job')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Teléfono
                </label>
                <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                @error('tel')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Dirección
                </label>
                <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $user->address) }}">
                @error('address')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-md-4 mt-2 mb-2 w-100">
                @if ($user->image)
                <img class="card-img-top w-25" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
                @endif
                <input type="file" name="file">
                @error('file')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $user->id }}">
        @csrf
        @method('PUT')

        <button type="submit" class="site-btn">Guardar Cambios</button>
    </form>
</div>
