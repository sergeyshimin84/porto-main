<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.main.index') }}">
            <span data-feather="main"></span>
            Главная <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.competencies.index') }}">
            <span data-feather="file"></span>
            Компетенции
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.certificates.index') }}">
          <span data-feather="file"></span>
          Сертификаты
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.portfolios.index') }}">
          <span data-feather="file"></span>
          Работы
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.greetings.index') }}">
          <span data-feather="file"></span>
          Приветствие
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.feedbacks.index') }}">
          <span data-feather="file"></span>
          Общение
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.calculator.index') }}">
          <span data-feather="file"></span>
          Калькулятор
          </a>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.references.index') }}">
          <span data-feather="file"></span>
          Рекомендации
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.projects.index') }}">
          <span data-feather="file"></span>
          Проекты
          </a>
        </li>         --}}

      </ul>
    </div>
  </nav>