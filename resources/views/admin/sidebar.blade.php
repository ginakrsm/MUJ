<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{asset('vendor/assets')}}/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                </div>
                <div class="sidebar-profile-details">
                    <span>{{ Auth::user()->name }}<br><small>Developer</small></span>
                </div>
            </div>
        </div>
        <ul class="menu accordion-menu">
            @foreach($laravelAdminMenus->menus as $section)
                @if($section->items)
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th-list"></span><p>{{$section->section}}</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        @foreach($section->items as $menu)
                            <li><a href="{{ url($menu->url) }}">{{ $menu->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>
</div>
