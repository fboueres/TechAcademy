<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tech Academy</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{ route("home") }}"
                    >
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("cursos.index") }}"
                            >
                                Cursos
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("cursos.create") }}"
                            >
                                Novo Curso
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Módulos
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("modulos.index") }}"
                            >
                                Módulos
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route("modulos.create") }}"
                            >
                                Novo Módulo
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
