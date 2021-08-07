@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    {{-- {{Session::get('success')}} --}}
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Veniam, amet voluptatibus ratione aspernatur officiis saepe maiores est illum mollitia corrupti, 
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
  entire
  soul, like these sweet mornings of spring which I enjoy with my whole heart.
</div>
@endif