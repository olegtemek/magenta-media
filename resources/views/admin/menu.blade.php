<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.home.index')}}" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item  mt-4"">
          <a href="{{route('admin.setting.index')}}" class="nav-link {{(request()->is('admin/setting*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Основные настройки</p>
          </a>
        </li>

        <li class="nav-item  mt-4"">
          <a href="{{route('admin.page.index')}}" class="nav-link {{(request()->is('admin/page*')) ? 'active' : ''}}">
          
            <i class="far nav-icon fa-layer-group"></i>
            <p>Все страницы</p>
          </a>
        </li>

        @if ($global_data['pages'])
        
          @foreach ($global_data['pages'] as $page)
          <li class="nav-item mt-4">
            <a href="#" class="nav-link">
              <i class="far fa-print nav-icon"></i>
            <p>
            {{$page->title}}
            <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('admin.product.index', $page->id)}}" class="nav-link {{(request()->is('admin/product/' . $page->id . '*')) ? 'active' : ''}}">
                  <i class="far fa-file-invoice-dollar nav-icon"></i>
                  <p>Товары</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.gallery.index', $page->id)}}" class="nav-link {{(request()->is('admin/gallery/' . $page->id . '*')) ? 'active' : ''}}">
                  <i class="far nav-icon fa-images"></i>
                  <p>Наши работы</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.photo.index', $page->id)}}" class="nav-link {{(request()->is('admin/photo/' . $page->id . '*')) ? 'active' : ''}}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Страница все фотографии</p>
                </a>
              </li>
            </ul>
          </li>
          @endforeach
        @endif
        
        
       
        <li class="nav-item  mt-4"">
          <a href="{{route('admin.insta.index')}}" class="nav-link {{(request()->is('admin/insta*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Инстаграм</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>