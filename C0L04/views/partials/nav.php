<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/C0L04/' ? 'active' : ''); ?>"
                       aria-current="page" href="/C0L04/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/C0L04/about' ? 'active' : ''); ?>"
                       href="/C0L04/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/C0L04/contact' ? 'active' : ''); ?>"
                       href="/C0L04/contact">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/C0L04/contact' ? 'active' : ''); ?>"
                       href="/C0L04/skills">skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/C0L04/details' ? 'active' : ''); ?>"
                       href="/C0L04/details">details</a>
                </li>
                <!--                  <li class="nav-item dropdown">-->
                <!--                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                <!--                          Details-->
                <!--                      </a>-->
                <!--                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--                          <li><a class="dropdown-item" href="#">Action</a></li>-->
                <!--                          <li><a class="dropdown-item" href="#">Another action</a></li>-->
                <!--                          <li><hr class="dropdown-divider"></li>-->
                <!--                          <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                <!--                      </ul>-->
                <!--                  </li>-->
                <!--                  <li class="nav-item">-->
                <!--                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                <!--                  </li>-->
                <!--              </ul>-->
                <!--              <form class="d-flex">-->
                <!--                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <!--                  <button class="btn btn-outline-success" type="submit">Search</button>-->
                <!--              </form>-->
        </div>
    </div>
</nav>
