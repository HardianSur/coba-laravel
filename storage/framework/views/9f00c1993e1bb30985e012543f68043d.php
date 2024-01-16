<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary h-100">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        My Posts
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="nav-link d-flex align-items-center gap-2 " type="submit"><i
                            class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\coba-laravel\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>