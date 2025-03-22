@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.navbar')


@section('body')
<!-- Section pour ajouter une matière -->
<div class="d-flex justify-content-center mt-5">
    <div class="card card-warning" style="width: 50%;">
        <div class="card-header text-center">
            <h3 class="card-title">Ajouter une matière</h3>
        </div>
        <div class="card-body">
            <form action="/subjects" method="POST">
                <div class="form-group">
                    <label for="title">Titre de la matière :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        Ajouter la matière
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Section pour la liste des matières -->
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-center">
                    <a href="{{ route('frontend.subject') }}" class="btn btn-block bg-gradient-primary w-25">
                        Ajouter une matière <span class="fas fa-plus"></span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathématiques</td>
                            <td>Étude des nombres, des structures et des formes.</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-eye" style="color: blue; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-edit" style="color: green; margin-right: 10px; cursor: pointer;"></i>
                                    <i class="fas fa-trash" style="color: red; cursor: pointer;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Physique</td>
                            <td>Comprendre les lois fondamentales de la nature.</td>
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
