<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">
              <span
                  class="logo-name">ManagementApp
              </span>
            </a>
        </div>

        <ul class="sidebar-menu">
{{--            <li class="menu-header">Main</li>--}}


{{--            class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span>--}}

            <li class="dropdown">
                <a href={{route("supplier.index")}} ><i data-feather="monitor"></i><span>Suppliers</span></a>
            </li>

            <li class="dropdown">
                <a href={{route("tasks.index")}} ><i data-feather="sliders"></i><span>Enter Tasks Details</span></a>
            </li>
            <li class="menu-header">Only Accessed By Admin</li>
            <li class="dropdown">
                <a href={{route("projects.index")}} class="menu-toggle nav-link has-dropdown">
                <i data-feather="layout"></i>
                <span>Projects</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" name="project" href={{route("projects.index")}}>All</a></li>
                @foreach($projects as $project)
                    <li><a class="nav-link" name="project" href="{{ route('project.fillByProject', ['project' => $project->id]) }}">{{$project->project}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </aside>
</div>
