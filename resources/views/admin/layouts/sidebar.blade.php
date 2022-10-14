<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">The Perfume</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('dashboard')) ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-sync fa-spin"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('brand/*')) ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.show.brand.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-bold " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Brand</span>
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('category/*')) ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.show.category.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('department/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.department.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-door-closed"></i>
            </div>
            <span class="nav-link-text ms-1">Department</span>
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('order/*')) ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.show.order.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-money-bill-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Order</span>
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('product/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.product.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-product-hunt" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Product</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('review/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.review.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Reviews</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('scent/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.scent.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Scent&Notes</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('slider/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.slider.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sliders" aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Slider</span>
          </a>
         
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('type/*')) ? 'bg-gradient-primary' : '' }} " href="{{ route('admin.show.type.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-tram"></i>
            </div>
            <span class="nav-link-text ms-1">Type</span>
          </a>
         
        </li>


    
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (Request::is('profile/*')) ? 'bg-gradient-primary' : '' }}" href="{{ route('admin.show.profile.list') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li> --}}
      </ul>
    </div>
    {{-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div> --}}
  </aside>