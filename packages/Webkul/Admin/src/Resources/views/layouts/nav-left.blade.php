<div class="navbar-left">

    {{-- button for expanding nav bar --}}
    <nav-slide-button id="nav-expand-button" icon-class="accordian-right-icon" style="display: none;"></nav-slide-button>

    {{-- left menu bar --}}
    <ul class="menubar">
        @foreach ($menu->items as $menuItem)
            <li class="menu-item {{ $menu->getActive($menuItem) }}">
                <a href="{{ count($menuItem['children']) ? current($menuItem['children'])['url'] : $menuItem['url'] }}">
                    @if (trans($menuItem['name']) == 'Velocity')
                    <span class="icon">
                    <span class="icon home-icon" style="font-size: x-large;border: #8e8e8e solid;width: 41px;padding: 5px;border-radius: 10px;">I</span>
                    </span>
                    <span>Ikksa</span>
                    @else
                    <span class="icon {{ $menuItem['icon-class'] }}"></span>
                    <span>{{ trans($menuItem['name']) }}</span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>

</div>
