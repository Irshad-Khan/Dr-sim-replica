<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="{{ Route::currentRouteName() === 'dashboard.index' ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}"
                        data-toggle="collapse"
                        data-target="#dashboard_dr">
                    <div class="pull-left">
                        <i class="zmdi zmdi-landscape mr-20"></i>
                        <span class="right-nav-text">Dashboard</span>
                    </div>
                    <div class="clearfix"></div>
                </a>

				</li>

                <li>
					<a class="{{ Route::currentRouteName() === 'mobile-brands.index' ? 'active' : '' ||
                        Route::currentRouteName() === 'mobile-brands.create' ? 'active' : '' ||
                        Route::currentRouteName() === 'mobile-brands.edit' ? 'active' : '' }}"
                    href="javascript:void(0);"
                        data-toggle="collapse"
                        data-target="#mobile_dropdown">
                        <div class="pull-left">
                            <i class="zmdi zmdi-smartphone-setup mr-20"></i>
                            <span class="right-nav-text">Mobiles</span>
                        </div>
                        <div class="pull-right">
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a>
					<ul id="mobile_dropdown" class="collapse collapse-level-1 {{ Route::currentRouteName() === 'mobile-brands.index' ? 'in' : '' ||
                        Route::currentRouteName() === 'mobile-brands.create' ? 'in' : '' ||
                        Route::currentRouteName() === 'mobile-brands.edit' ? 'in' : '' }}">
						<li>
							<a href="">Mobile Models</a>
						</li>
						<li>
							<a class="{{ Route::currentRouteName() === 'mobile-brands.index' ? 'active-page' : '' ||
                        Route::currentRouteName() === 'mobile-brands.create' ? 'active-page' : '' ||
                        Route::currentRouteName() === 'mobile-brands.edit' ? 'active-page' : '' }}"  href="{{ route('mobile-brands.index') }}">Mobile Brands</a>
						</li>
					</ul>
				</li>
                <li>
					<a class="{{ Route::currentRouteName() === 'customers.index' ? 'active' : '' ||
                        Route::currentRouteName() === 'customers.create' ? 'active' : '' || Route::currentRouteName() === 'customers.edit' ? 'active' : '' }}"
                        href="{{ route('customers.index') }}">
                        <div class="pull-left">
                            <i class="fa fa-user-md mr-20"></i>
                            <span class="right-nav-text">Customers</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>
                <li>
					<a class="{{ Route::currentRouteName() === 'network-providers.index' ? 'active' : '' ||
                        Route::currentRouteName() === 'network-providers.create' ? 'active' : '' ||
                        Route::currentRouteName() === 'network-providers.edit' ? 'active' : '' }}"
                         href="{{ route('network-providers.index') }}">
                        <div class="pull-left">
                            <i class="fa fa-sitemap mr-20"></i>
                            <span class="right-nav-text">Network Providers</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>

				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>configuration</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);">
                        <div class="pull-left">
                            <i class="zmdi zmdi-smartphone-setup mr-20"></i>
                            <span class="right-nav-text">Countries</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>
                {{--  <li>
					<a href="javascript:void(0);">
                        <div class="pull-left">
                           <i class="icon-notebook mr-20"></i>
                            <span class="right-nav-text">Cities</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>  --}}
                <li>
					<a href="javascript:void(0);">
                        <div class="pull-left">
                            <i class="icon-notebook mr-20"></i>
                            <span class="right-nav-text">Pages</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>

                <li class="navigation-header">
					<span>Authntication</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				 <li>
					<a class="{{ Route::currentRouteName() === 'admin.profile' ? 'active' : '' }}"
                        href="{{ route('admin.profile') }}">
                        <div class="pull-left">
                            <i class="fa fa-user-md mr-20"></i>
                            <span class="right-nav-text">Profile</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>
                <li>
					<a href="{{ route('admin.logout') }}">
                        <div class="pull-left">
                            <i class="icon-logout mr-20"></i>
                            <span class="right-nav-text">Logout</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
				</li>

			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
