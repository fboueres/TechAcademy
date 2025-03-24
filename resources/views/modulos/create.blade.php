@extends("app")
@section("title", "Novo Módulo")
@section("content")
    <div class="container mt-5">
        <h1 class="mb-4">Criar Novo Módulo</h1>

        <!-- Form -->
        <form
            action="{{ route("modulos.store") }}"
            method="POST"
            class="col-md-6"
        >
            @csrf

            <div class="row">
                <div class="col-12">
                    <!-- Curso Field (Select) -->
                    <div class="form-group mb-3">
                        <label for="curso_id" class="form-label">Curso</label>
                        <select
                            name="curso_id"
                            id="curso_id"
                            class="form-control @error("curso_id") is-invalid @enderror"
                        >
                            <option value="">Selecione um curso</option>
                            @foreach ($cursos as $curso)
                                <option
                                    value="{{ $curso->id }}"
                                    {{ old("curso_id") == $curso->id ? "selected" : "" }}
                                >
                                    {{ $curso->curso_nome }}
                                </option>
                            @endforeach
                        </select>
                        @error("curso_id")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <!-- Nome Field -->
                    <div class="form-group mb-3">
                        <label for="modulo_nome" class="form-label">Nome</label>
                        <input
                            type="text"
                            name="modulo_nome"
                            id="modulo_nome"
                            value="{{ old("modulo_nome") }}"
                            class="form-control @error("modulo_nome") is-invalid @enderror"
                            placeholder="Digite o nome do módulo"
                        />
                        @error("modulo_nome")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <!-- Ordem Field -->
                    <div class="form-group mb-3">
                        <label for="modulo_ordem" class="form-label">
                            Ordem
                        </label>
                        <input
                            type="number"
                            name="modulo_ordem"
                            id="modulo_ordem"
                            value="{{ old("modulo_ordem") }}"
                            class="form-control @error("modulo_ordem") is-invalid @enderror"
                            placeholder="Digite a ordem do módulo"
                            min="1"
                        />
                        @error("modulo_ordem")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    Criar Módulo
                </button>
                <a
                    href="{{ route("modulos.index") }}"
                    class="btn btn-secondary ml-2"
                >
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
