@extends("app")
@section("title", "Gerenciar Cursos")
@section("content")
    <div class="container mt-5">
        <h1 class="mb-4">Gerenciar Cursos</h1>

        <!-- Tabela de Cursos -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Cursos</h5>
                @if ($cursos->isEmpty())
                    <p class="text-muted">Nenhum curso cadastrado ainda.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Carga Horária</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cursos as $curso)
                                    <tr>
                                        <td>{{ $curso->curso_nome }}</td>
                                        <td>
                                            {{ $curso->curso_carga_horaria }}h
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <!-- Botão Editar -->
                                                <a
                                                    href="{{ route("cursos.edit", $curso) }}"
                                                    class="btn btn-sm btn-warning me-2 rounded"
                                                >
                                                    Editar
                                                </a>
                                                <!-- Botão Deletar -->
                                                <form
                                                    action="{{ route("cursos.destroy", $curso) }}"
                                                    method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir este curso?')"
                                                >
                                                    @csrf
                                                    @method("DELETE")
                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger rounded"
                                                    >
                                                        Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
