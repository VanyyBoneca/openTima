<div class="ui vertical menu">
<div class="item" >
<div style="padding: 25px;text-align: center;olor: #fff;text-align: center;">
  <a href="#">
    <img class="ui tiny circular centered image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
    <p>{{Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name}}</p>
  </a>
</div>
</div>
  <div class="item">
    <div class="ui input"><input placeholder="Search..." type="text"></div>
  </div>
  <div class="item">
    Home
    <div class="menu">
      <a class="active item">Search</a>
      <a class="item">Add</a>
      <a class="item">Remove</a>
    </div>
  </div>
  <a class="item">
    <i class="grid layout icon"></i> Browse
  </a>
  <a class="item">
    Messages
  </a>
  <div class="ui dropdown item">
    More
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item"><i class="edit icon"></i> Perfil</a>
      <a class="item"><i class="settings icon"></i>Config. da Conta</a>
      <a class="item" href="{{url('/logout')}}"><i class="sign out icon"></i> Logout</a>
    </div>
  </div>
</div>
