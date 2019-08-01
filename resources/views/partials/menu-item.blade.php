@if (is_string($item))

    <hr class="sidebar-divider">

	<div class="sidebar-heading">
	  	{{ $item }}
	</div>

@else

	@if (isset($item['submenu']))

	    <li class="nav-item">
	      	<a class="nav-link collapsed" href="{{ isset($item['url'])? $item['url'] : '#' }}" data-toggle="collapse" data-target="#{{ $item['text'] }}" aria-expanded="true" aria-controls="{{ $item['text'] }}">
	        	<i class="fas fa-fw {{ $item['icon'] }}"></i>
	        	<span>{{ $item['text'] }}</span>
	      	</a>
	      	<div id="{{ $item['text'] }}" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
	        	<div class="bg-white py-2 collapse-inner rounded">
	          		@each('sbadmin2::partials.submenu-item', $item['submenu'], 'item')
	        	</div>
	      	</div>
	    </li>
		
	@else

		<li class="nav-item">
		  <a class="nav-link" href="{{ isset($item['url'])? $item['url'] : '#' }}">
		    <i class="fas fa-fw {{ $item['icon'] }}"></i>
		    <span>{{ $item['text'] }}</span></a>
		</li>

	@endif


@endif