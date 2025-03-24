@extends("app")
@section("title", "Novo Curso")
@section("content")
    <div class="container mt-5">
        <h1 class="mb-4">Criar Novo Curso</h1>

        <!-- Form -->
        <form
            action="{{ route("cursos.store") }}"
            method="POST"
            class="col-md-6"
        >
            @csrf

            <div class="row">
                <div class="col-6">
                    <!-- Nome Field -->
                    <div class="form-group mb-3">
                        <label for="curso_nome" class="form-label">Nome</label>
                        <input
                            type="text"
                            name="curso_nome"
                            id="curso_nome"
                            value="{{ old("curso_nome") }}"
                            class="form-control @error("curso_nome") is-invalid @enderror"
                            placeholder="Digite o nome do curso"
                        />
                        @error("curso_nome")
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <!-- Carga Horária Field -->
                    <div class="form-group mb-3">
                        <label for="curso_carga_horaria" class="form-label">
                            Carga Horária (em horas)
                        </label>
                        <input
                            type="number"
                            name="curso_carga_horaria"
                            id="curso_carga_horaria"
                            value="{{ old("curso_carga_horaria") }}"
                            class="form-control @error("curso_carga_horaria") is-invalid @enderror"
                            placeholder="Digite a carga horária"
                            min="1"
                        />
                    </div>
                    @error("curso_carga_horaria")
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    Criar Curso
                </button>
                <a
                    href="{{ route("cursos.index") }}"
                    class="btn btn-secondary ml-2"
                >
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
