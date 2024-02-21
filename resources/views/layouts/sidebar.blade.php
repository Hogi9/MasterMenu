<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="{{ url('/') }}" class="app-brand-link">
			<span class="app-brand-text demo menu-text text-capitalize fw-bolder ms-2">Master Login</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	@livewire('sidebar-menu')

	{{-- <ul class="menu-inner py-1">
		<!-- Dashboard -->
		<li class="menu-item {{ request()->is('/') || request()->is('dashboard*') ? 'active' : '' }}">
			<a href="{{ url('/') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Dashboard</div>
			</a>
		</li>
		<li class="menu-item {{ request()->is('menu*') ? 'active' : '' }}">
			<a href="{{ url('menu') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-food-menu"></i>
				<div data-i18n="Analytics">Menu</div>
			</a>
		</li>

		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Testing</span>
		</li>

		@foreach ($menus as $menu)
			<li class="menu-item {{ request()->is($menu['url'] . '*') ? 'active open' : '' }}">
				<a href="{{ $menu['have_child'] ? 'javascript:void(0);' : url($menu['url']) }}"
					class="menu-link {{ $menu['have_child'] ? 'menu-toggle' : '' }}">
					<i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
					<div data-i18n="Analytics">{{ $menu['title'] }}</div>
				</a>
				@if ($menu['have_child'])
					<ul class="menu-sub">
						@foreach ($menu->submenu as $sub)
							<li class="menu-item {{ request()->is($sub['url']) ? 'active' : '' }}">
								<a href="{{ url($sub['url']) }}" class="menu-link">
									<div data-i18n="Without menu">{{ $sub['title'] }}</div>
								</a>
							</li>
						@endforeach
					</ul>
				@endif
			</li>
		@endforeach


		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Template List</span>
		</li>

		<!-- Layouts -->
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-layout"></i>
				<div data-i18n="Layouts">Layouts</div>
			</a>

			<ul class="menu-sub">
				<li class="menu-item">
					<a href="#" class="menu-link">
						<div data-i18n="Without menu">Testing</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="layouts-without-navbar.html" class="menu-link">
						<div data-i18n="Without navbar">Without navbar</div>
					</a>
				</li>
			</ul>
		</li>

		</li>
		<li class="menu-item">
			<a href="{{ url('logout') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-copy"></i>
				<div>Logout</div>
			</a>
		</li>
	</ul> --}}
</aside>
