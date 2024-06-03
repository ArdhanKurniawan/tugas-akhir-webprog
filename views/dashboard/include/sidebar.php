<div class="db-sidebar bg-body">
    <aside class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
        <div class="sticky-area border-right">
            <div class="d-flex px-6 px-xl-10 w-100 border-bottom py-5 justify-content-between">
                <a href="dashboard" class="navbar-brand py-4">
                    <img class="lazy-image light-mode-img" data-src="assets/images/logo_delovery.webp" src="assets/images/delovery.webp" width="145" height="37" alt="Delovery Toko Rangkaian Bunga Online" />
                </a>

                <div class="ml-auto d-flex align-items-center">
                    <div class="d-flex align-items-center d-xl-none">
                        <div class="color-modes position-relative px-4">
                            <!--<a
                                class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                href="#"
                                aria-expanded="true"
                                data-bs-toggle="dropdown"
                                data-bs-display="static"
                                aria-label="Toggle theme (light)"
                            >
                                <svg class="bi my-1 theme-icon-active"><use href="#sun-fill"></use></svg>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                        <svg class="bi me-4 opacity-50 theme-icon"><use href="#sun-fill"></use></svg>
                                        Light
                                        <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                                    </button>
                                </li>
                                
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon"><use href="#moon-stars-fill"></use></svg>
                                        Dark
                                        <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                                    </button>
                                </li>
                                
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon"><use href="#circle-half"></use></svg>
                                        Auto
                                        <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                                    </button>
                                </li>
                            </ul>-->
                        </div>
                        
                        <div class="dropdown no-caret py-4 px-3 d-flex align-items-center notice me-6">
                            <a href="#" class="dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end" data-bs-toggle="dropdown">
                                <img src="assets/images/dashboard/avatar-2.png" alt="Ronald Hunter" class="rounded-circle" width="40" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end w-100">
                                <a class="dropdown-item" href="login/logout">Logout</a>
                            </div>
                        </div>
                    </div>
                    
                    <button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryMenuSidebar" aria-controls="primaryMenuSidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            
            <div class="collapse navbar-collapse bg-body position-relative z-index-5" id="primaryMenuSidebar">
                
                <ul class="list-group list-group-flush list-group-no-border w-100 p-6">
                    <li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
                        <a href="dashboard" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="Dashboard">
                            <span class="sidebar-item-icon w-40px d-inline-block text-muted">
                                <i class="fas fa-home-lg-alt"></i>
                            </span>
                            <span class="sidebar-item-text fs-14px fw-semibold">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
                        <a href="dashboard/pelamar" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="List Pelamar">
                            <span class="sidebar-item-icon w-40px d-inline-block text-muted">
                                <i class="fas fa-users"></i>
                            </span>
                            <span class="sidebar-item-text fs-14px fw-semibold">List Pelamar</span>
                        </a>
                    </li>
                    
                    <li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
                        <a href="dashboard/pelamar/freelance" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="List Pelamar">
                            <span class="sidebar-item-icon w-40px d-inline-block text-muted">
                                <i class="fas fa-laptop"></i>
                            </span>
                            <span class="sidebar-item-text fs-14px fw-semibold">List Pelamar Freelance</span>
                        </a>
                    </li>
                    
                    <li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
						<a href="#order"
						   class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
						   data-bs-toggle="collapse" aria-expanded="false" title="Order">
								<span class="sidebar-item-icon d-inline-block w-40px text-muted">
								   <i class="fas fa-screwdriver"></i>
								</span>
								<span class="sidebar-item-text fs-14px fw-semibold">Loker</span>
								<span class="position-absolute top-50 end-5 translate-middle-y"><i class="far fa-angle-down"></i></span>
						</a>
					
						<div class="collapse menu-collapse" id="order">
							<ul class="sub-menu list-unstyled">
					    		<li class="sidebar-item">
									<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
									   href="dashboard/loker/new" title="New Loker">New Loker</a>
								</li>
								
					    		<li class="sidebar-item">
									<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
									   href="dashboard/loker" title="List Loker">List Loker</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
                        <a href="dashboard/divisi" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="User">
                            <span class="sidebar-item-icon w-40px d-inline-block text-muted">
                                <i class="fas fa-newspaper"></i>
                            </span>
                            <span class="sidebar-item-text fs-14px fw-semibold">Divisi</span>
                        </a>
                    </li>
					
                    <li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
                        <a href="dashboard/user" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="User">
                            <span class="sidebar-item-icon w-40px d-inline-block text-muted">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="sidebar-item-text fs-14px fw-semibold">User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
