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

    <form action="{{ route('user.update', $user) }}" enctype="multipart/form-data" method="POST">

            <div class="form-row">
                <h2>Datos básicos</h2>
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

        <div class="row">
            <h2>Sobre mí</h2>

                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Titulo
                    </label>
                    <input id="title" type="text"  name="title" class="form-control" value="{{ old('title', $user->about_title) }}">
                    @error('title')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Descripción sobre mí
                    </label>
                    <input id="about_description" type="text"  name="about_description" class="form-control" value="{{ old('about_description', $user->about_description) }}">
                    @error('about_description')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" >
                        Nombre botón cargar documento
                    </label>
                    <input id="about_cv" type="text"  name="about_cv" class="form-control" value="{{ old('about_cv', $user->about_cv) }}">
                    @error('about_cv')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mt-2 mb-2 w-100">
                    @if ($user->about_image)
                        <img class="card-img-top w-25" src="{{ $user->get_about_image }}" alt="{{ $user->about_title }}">
                    @else
                        <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
                    @endif
                    <input type="file" name="about_image">
                    @error('about_image')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{ $user->id }}">

        </div>
            @csrf
            @method('PUT')
            <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Guardar Cambios</button>
        </form>

</div>
