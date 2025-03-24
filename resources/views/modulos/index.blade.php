@extends("app")
@section("title", "Gerenciar Módulos")
@section("content")
    <div class="container mt-5">
        <h1 class="mb-4">Gerenciar Módulos</h1>

        <!-- Tabela de Módulos -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Módulos</h5>
                @if ($modulos->isEmpty())
                    <p class="text-muted">Nenhum modulo cadastrado ainda.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Nome</th>
                                    <th>Ordem</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modulos as $modulo)
                                    <tr>
                                        <td>
                                            {{ $modulo->curso->curso_nome }}
                                        </td>
                                        <td>{{ $modulo->modulo_nome }}</td>
                                        <td>
                                            {{ $modulo->modulo_ordem }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <!-- Botão Editar -->
                                                <a
                                                    href="{{ route("modulos.edit", $modulo) }}"
                                                    class="btn btn-sm btn-warning me-2 rounded"
                                                >
                                                    Editar
                                                </a>
                                                <!-- Botão Deletar -->
                                                <form
                                                    action="{{ route("modulos.destroy", $modulo) }}"
                                                    method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir este modulo?')"
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
