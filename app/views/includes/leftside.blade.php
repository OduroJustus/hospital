<!-- Left column -->
<p><a href="{{ URL::asset('dashboard') }}"><strong><i class="glyphicon glyphicon-th-large"></i> My Dashboard</strong></a></p>
<hr>
<!--Feature menu-->
<div class="menu-left">
<ul class="nav nav-pills nav-stacked">
    <li class="nav-header"><div data-toggle="collapse" data-target="#feature">
            <p>Asset Feature <i class="glyphicon glyphicon-chevron-right"></i></p>
        </div>
        <ul class="nav nav-pills nav-stacked collapse in" id="feature">
            <li><a href="{{ URL::asset('forms/assets') }}"><span class="glyphicon glyphicon-th-large"></span> Assets </a></li>
            <li ><a href="{{ URL::asset('forms/assets/editor') }}"><i class="glyphicon glyphicon-th-large"></i> Editor </a></li>
            <li><a href="{{ URL::asset('reports') }}"><i class="glyphicon glyphicon-th-large"></i> Reports </a></li>
        </ul>
    </li>
</ul>
<!--Forms menu-->
<ul class="nav nav-pills nav-stacked">
    <li class="nav-header"><div data-toggle="collapse" data-target="#form">
          <p>Forms <i class="glyphicon glyphicon-chevron-down"></i></p>
        </div>
        <ul class="nav nav-pills nav-stacked collapse out" id="form">

            <li><a href="{{ URL::asset('forms/stations') }}"><i class="glyphicon glyphicon-th-large"></i> Station </a></li>
            <li><a href="{{ URL::asset('forms/departments') }}"><i class="glyphicon glyphicon-th-large"></i> Departments </a></li>
            <li><a href="{{ URL::asset('forms/items') }}"><i class="glyphicon glyphicon-th-large"></i> Items </a></li>
            <li><a href="{{ URL::asset('forms/rooms') }}"><i class="glyphicon glyphicon-th-large"></i> Rooms</a></li>
        </ul>
    </li>
</ul>
</div>