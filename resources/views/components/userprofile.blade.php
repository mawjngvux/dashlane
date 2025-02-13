<div class="wrapped d-flex justify-content-between">
    <div class="title">
        <h1>{{$title}}</h1>
    </div>
    <div class="userprofile">
        <span class="nav-label">My account</span><i class="fa-solid fa-caret-down"></i>
        <ul class="list-unstyled">
            <li><img src="" alt=""></li>
            <li><p>LOGIN EMAIL</p></li>
            <li><p>{{$email}}</p></li>
            <li><a href=""><i class="fa-solid fa-gear"></i><span class="nav-label">Settings</span></a></li>
            <hr>
            <li><a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket"></i><span class="nav-label">Log out</span></a></li>
        </ul>            
    </div>
</div>