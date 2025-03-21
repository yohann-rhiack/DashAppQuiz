@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.navbar')


@section('body')
<!-- Section pour ajouter un abonnement -->
<div class="d-flex justify-content-center mt-5">
    <div class="card card-warning" style="width: 50%;">
        <div class="card-header text-center">
            <h3 class="card-title">Ajouter un abonnement</h3>
        </div>
        <div class="card-body">
            <form action="/subscriptions" method="POST">
                <div class="form-group">
                    <label for="start_date">Date de début :</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="end_date">Date de fin :</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                </div>
                <div class="form-group form-check">
                    <label for="status" class="form-check-label">
                        Statut :
                    </label>
                    <input type="checkbox" id="status" name="status" value="1" class="form-check-input" checked>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        Ajouter l'abonnement
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Section pour la liste des abonnements -->
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-center">
                    <a href="{{ route('frontend.abonnement') }}" class="btn btn-block bg-gradient-primary w-25">
                        Ajouter un abonnement <span class="fas fa-plus"></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/01/2025</td>
                            <td>01/01/2026</td>
                            <td class="text-center">Actif</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-eye" style="color: blue; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-edit" style="color: green; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-trash" style="color: red; cursor: pointer;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>15/03/2025</td>
                            <td>15/03/2026</td>
                            <td class="text-center">Inactif</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-eye" style="color: blue; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-edit" style="color: green; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-trash" style="color: red; cursor: pointer;"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
@extends('layouts.script')
