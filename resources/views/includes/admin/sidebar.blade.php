<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-header">Панель Админа</li>
      <li class="nav-item">
        <a href="{{route('admin.dict.index')}}" class="nav-link">
          <i class="nav-icon fas fa-align-justify"></i>
          <p>
            Пользователи
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.dictations.index')}}" class="nav-link">
          <i class="nav-icon fas fa-align-justify"></i>
          <p>
            Диктанты
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.userDictations.index')}}" class="nav-link">
          <i class="nav-icon fas fa-align-justify"></i>
          <p>
            Результаты диктантов
          </p>
        </a>
      </li>
    </ul>
  </nav>