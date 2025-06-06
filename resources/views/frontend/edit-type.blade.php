@extends('layouts.main')
@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.navbar')

@section('body')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Modifier le type</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('type.update', $type->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Nom du type</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $type->title) }}" required>
                        </div><br>

                        <div class="row">
                            <!-- Update Button -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success w-100">Mettre à Jour</button>
                            </div>

                            <!-- Back to List Button -->
                            <div class="col-md-6">
                                <a href="{{ route('frontend.type') }}" class="btn btn-secondary w-100">Retour à la Liste</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
@extends('layouts.script')
