<?function Menu($menuItems){
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?
                foreach ($menuItems as $menuItem => $file) {
                    echo '<li class="nav-item"><a href="?page='. $file .'" class="nav-link">'.$menuItem.'</a></li>';
                }
                ?>
        </ul>
    </div>
</div>
</nav>
<?
}
?>


