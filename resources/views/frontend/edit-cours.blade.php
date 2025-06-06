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
                    <h3 class="card-title">Modifier le cours</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('course.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Pour spécifier qu'il s'agit d'une mise à jour -->
                    
                        <h5 class="font-weight-bold mb-4">COURS</h5>
                        <div class="form-group">
                            <label for="title">Titre du cours :</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $course->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Description :</label>
                            <textarea id="content" name="content" class="form-control" rows="3" required>{{ $course->content }}</textarea>
                        </div>

                        <!-- Champ enum pour les thèmes -->
                        <div class="mb-4">
                            <label for="theme" class="form-label fw-semibold">Thème</label>
                            <select id="theme" name="theme" class="form-select rounded-pill shadow-sm" required>
                                <option value="" disabled {{ old('theme', $course->theme ?? '') == '' ? 'selected' : '' }}>Choisissez un thème</option>
                                <option value="SCIENCES" {{ old('theme', $course->theme ?? '') == 'SCIENCES' ? 'selected' : '' }}>Sciences</option>
                                <option value="LETTRES" {{ old('theme', $course->theme ?? '') == 'LETTRES' ? 'selected' : '' }}>Lettres</option>
                                <option value="ECONOMIE" {{ old('theme', $course->theme ?? '') == 'ECONOMIE' ? 'selected' : '' }}>Économie</option>
                                <option value="TECHNOLOGIE" {{ old('theme', $course->theme ?? '') == 'TECHNOLOGIE' ? 'selected' : '' }}>Technologie</option>
                                <option value="LANGUES" {{ old('theme', $course->theme ?? '') == 'LANGUES' ? 'selected' : '' }}>Langues</option>
                            </select>
                        </div>
                    
                        <hr style="width: 75%; border: 1.5px dashed solid #000;">
                        <h5 class="font-weight-bold mb-4">CHAPITRES ET RESUMES</h5>
                    
                        <div id="chapters-container">
                            @foreach($course->chapters as $chapter)
                            <div class="chapter-item border p-3 mb-3">
                                <input type="hidden" name="chapter_id[]" value="{{ $chapter->id }}">
                                <div class="form-group">
                                    <label>Titre du chapitre :</label>
                                    <input type="text" name="chapter_title[]" class="form-control" value="{{ $chapter->title }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Description du chapitre :</label>
                                    <textarea name="chapter_description[]" class="form-control" rows="2" required>{{ $chapter->chapter_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description du résumé :</label>
                                    <textarea name="chapter_summary_description[]" class="form-control" rows="3" required>{{ optional($chapter->summary)->summary_description ?? '' }}</textarea>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm remove-chapter">Supprimer</button>
                            </div>
                            @endforeach
                        </div>
                    
                        <button type="button" class="btn btn-secondary btn-sm" id="add-chapter-btn">Ajouter un chapitre</button>
                        
                        <br><br><br>
                        <div class="row">
                            <!-- Update Button -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success w-100">Mettre à Jour</button>
                            </div>
                
                            <!-- Back to School List Button -->
                            <div class="col-md-6">
                                <a href="{{ route('frontend.cours') }}" class="btn btn-secondary w-100">Retour à la Liste</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chaptersContainer = document.getElementById("chapters-container");
        const addChapterBtn = document.getElementById("add-chapter-btn");
    
        addChapterBtn.addEventListener("click", function () {
            let chapterHTML = `
                <div class="chapter-item border p-3 mb-3">
                    <div class="form-group">
                        <label>Titre du chapitre :</label>
                        <input type="text" name="chapter_title[]" class="form-control" placeholder="Entrez le titre du chapitre" required>
                    </div>
                    <div class="form-group">
                        <label>Description du chapitre :</label>
                        <textarea name="chapter_description[]" class="form-control" rows="2" placeholder="Entrez la description du chapitre" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description du résumé :</label>
                        <textarea name="chapter_summary_description[]" class="form-control" rows="3" placeholder="Entrez la description du résumé" required></textarea>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-chapter">Supprimer</button>
                </div>
            `;
            chaptersContainer.insertAdjacentHTML("beforeend", chapterHTML);
        });
    
        chaptersContainer.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-chapter")) {
                e.target.closest(".chapter-item").remove();
            }
        });
    });
</script>
@endsection

@extends('layouts.footer')
@extends('layouts.script')
