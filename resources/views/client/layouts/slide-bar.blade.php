 <div class="container">
     <nav class="main-menu d-flex navbar navbar-expand-lg ">

         <div class="d-flex d-lg-none align-items-end mt-3">
             <ul class="d-flex justify-content-end list-unstyled m-0">
                 <li>
                     <a href="account.html" class="mx-3">
                         <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                     </a>
                 </li>
                 <li>
                     <a href="wishlist.html" class="mx-3">
                         <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                     </a>
                 </li>

                 <li>
                     aria-controls="offcanvasCart">
                     <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                     <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                         03
                     </span>
                     </a>
                 </li>

                 <li>
                     <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                         aria-controls="offcanvasSearch">
                         <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                         </span>
                     </a>
                 </li>
             </ul>

         </div>

         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
             aria-controls="offcanvasNavbar">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">

             <div class="offcanvas-header justify-content-center">
                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>

             <div class="offcanvas-body justify-content-between">
                 <form action="{{ route('client.filterProducts') }}" method="GET">
                     <select name="category" id="category" onchange="this.form.submit()"
                         class="filter-categories border-0 mb-0 me-5">
                         <option>Shop by Category</option>
                         @foreach ($categories as $category)
                             <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                         @endforeach
                     </select>
                 </form>
                 <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                     <li class="nav-item">
                         <a href="{{ route('client.viewProducts') }}" class="nav-link active">Home</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                             aria-expanded="false">Pages</a>
                         <ul class="dropdown-menu" aria-labelledby="pages">
                             <li><a href="about.html" class="dropdown-item">About Us<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="shop.html" class="dropdown-item">Shop<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="single-product.html" class="dropdown-item">Single Product<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="cart.html" class="dropdown-item">Cart<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="wishlist.html" class="dropdown-item">Wishlist<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="checkout.html" class="dropdown-item">Checkout<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="blog.html" class="dropdown-item">Blog<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="single-post.html" class="dropdown-item">Single Post<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="contact.html" class="dropdown-item">Contact<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="faqs.html" class="dropdown-item">FAQs<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="account.html" class="dropdown-item">Account<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="thank-you.html" class="dropdown-item">Thankyou<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="error.html" class="dropdown-item">Error 404<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                             <li><a href="styles.html" class="dropdown-item">Styles<span
                                         class="badge bg-success text-dark ms-2">PRO</span></a></li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="shop.html" class="nav-link">Shop</a>
                     </li>
                     <li class="nav-item">
                         <a href="blog.html" class="nav-link">Blog</a>
                     </li>
                     <li class="nav-item">
                         <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">Others</a>
                     </li>
                 </ul>


                 <div class="d-none d-lg-flex align-items-end">
                     <ul class="d-flex justify-content-end list-unstyled m-0">
                         <li>
                             <a href="{{ route('client.loginUsers') }}" class="mx-3">
                                 <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                             </a>
                         </li>
                         <li>
                             <a href="wishlist.html" class="mx-3">
                                 <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                             </a>
                         </li>

                         <li class="">
                             <a href="#" class="mx-3" data-bs-toggle="offcanvas"
                                 data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                 <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                 {{-- <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                     
                                 </span> --}}
                             </a>
                         </li>
                     </ul>

                 </div>

             </div>

         </div>

     </nav>

 </div>
