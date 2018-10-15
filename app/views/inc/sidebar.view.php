<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      	<?php foreach ($menus as $menu): ?>
      		<li class="nav-item">
        		<a class="nav-link active" href="<?= $menu['link']; ?>"> 
          		<?= $menu['nome']; ?>
        		</a>
      		</li>
      	<?php endforeach;?>
    </ul>
  </div>
</nav>