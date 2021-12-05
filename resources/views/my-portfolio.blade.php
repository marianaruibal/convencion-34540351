<h1>Bienvenido {{ $user->name }}!</h1>
@extends('admin.layouts.admin')

@section('main-content')


<section>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true">Datos básicos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">Redes Sociales</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Skills</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="ido-tab" data-bs-toggle="tab" data-bs-target="#ido" type="button" role="tab" aria-controls="ido" aria-selected="false">What I do</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
            @include('client.includes.basic-data')
        </div>
        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-redcreate-tab" data-bs-toggle="pill" data-bs-target="#v-pills-redcreate" type="button" role="tab" aria-controls="v-pills-redcreate" aria-selected="true">Crear redes</button>
                    <button class="nav-link" id="v-pills-rededitar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rededitar" type="button" role="tab" aria-controls="v-pills-rededitar" >Editar redes</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-redcreate" role="tabpanel" aria-labelledby="v-pills-redcreate-tab">

                        @include('client.includes.redes-create')
                    </div>
                    <div class="tab-pane fade" id="v-pills-rededitar" role="tabpanel" aria-labelledby="v-pills-rededitar-tab">

                        @include('client.includes.redes-edit')

                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-skillscrear-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skillscrear" type="button" role="tab" aria-controls="v-pills-skillscrear" aria-selected="true">Crear skill</button>
                    <button class="nav-link" id="v-pills-skillsedit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skillsedit" type="button" role="tab" aria-controls="v-pills-skillsedit" >Editar skill</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-skillscrear" role="tabpanel" aria-labelledby="v-pills-skillscrear-tab">

                        @include('client.includes.skills-create')
                    </div>
                    <div class="tab-pane fade" id="v-pills-skillsedit" role="tabpanel" aria-labelledby="v-pills-skillsedit-tab">

                        @include('client.includes.skills-edit')

                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="ido" role="tabpanel" aria-labelledby="ido-tab">

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-idotitle-tab" data-bs-toggle="pill" data-bs-target="#v-pills-idotitle" type="button" role="tab" aria-controls="v-pills-idotitle" aria-selected="true">Editar titulo</button>
                        <button class="nav-link" id="v-pills-idocrear-tab" data-bs-toggle="pill" data-bs-target="#v-pills-idocrear" type="button" role="tab" aria-controls="v-pills-idocrear" aria-selected="true">Crear what i do's</button>
                        <button class="nav-link" id="v-pills-idoedit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-idoedit" type="button" role="tab" aria-controls="v-pills-idoedit" >Editar What i do's</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-idotitle" role="tabpanel" aria-labelledby="v-pills-idotitle-tab">

                        @include('client.includes.whatido-title')
                        </div>
                        <div class="tab-pane fade" id="v-pills-idocrear" role="tabpanel" aria-labelledby="v-pills-idocrear-tab">
                            @include('client.includes.whatido-create')

                        </div>


                        <div class="tab-pane fade" id="v-pills-idoedit" role="tabpanel" aria-labelledby="v-pills-idoedit-tab">

                            @include('client.includes.whatido-edit')
                        </div>

                    </div>
                </div>
            </div>
    </div>
</section>

@endsection
