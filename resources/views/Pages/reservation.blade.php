@extends('components.navbar')

@section('content')
<div>
    <div class="mt-5">
        <div class="card bg-white w-75 container-fluid d-flex justify-content-center">
            <h1 class="text-center mt-5">RESERVATION</h1>
            <div class="row g-2 py-5 mx-5">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control w-75" id="floatingInputGrid"
                            placeholder="Nombre de personne" value="">
                        <label for="floatingInputGrid">Nombre de personnes</label>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control w-75" id="" placeholder="Date prevu"
                            value="">
                        <label for="floatingInputGrid">Date prevu</label>
                    </div>
                </div>
            </div>

            <div class="row g-2  py-5 mx-5">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control w-75" id="floatingInputGrid"
                            placeholder="Nombre de personne" value="">
                        <label for="floatingInputGrid">Numero Telephone</label>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control w-75" id="" placeholder="Heure prevu"
                            value="">
                        <label for="floatingInputGrid">Heure prevu</label>
                    </div>
                </div>
            </div>
            <a href="#" class="btn text-white w-25" style="background-color: #E7272D; margin-left:35%">RESERVER MAINTENANT</a>
        </div>
    </div>
</div>
@endsection