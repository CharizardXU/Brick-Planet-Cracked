<?php
$siteName = "BP Craxed"; // Replace with your site name
$siteLink = "Github.com"; // Replace with your link.
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta property="og:site_name" content="<?php echo $siteLink; ?>">
    <meta property="og:description" content="Find and create multiplayer games. Join a community of passionate gamers today!">
    <meta property="og:url" content="https://www.<?php echo $siteLink; ?>">
      <meta property="og:title" content="<?php echo $siteName; ?>">
        <link rel="stylesheet" href="/assets/stylesheets/normalize.css" />
    <link rel="stylesheet" href="/assets/stylesheets/base.css" />
    <link rel="stylesheet" href="/assets/stylesheets/brickplanet.css?r=12" />
    <link
      rel="stylesheet"
      href="https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.7.1/dist/cookieconsent.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<?php
if (!isset($_COOKIE['brickplanet_login'])) {
    // code to execute if the cookie is not set
    echo "<script defer src='https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.7.1/dist/cookieconsent.js'></script>
    <!-- Google tag (gtag.js) -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-78458167-1'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-78458167-1');
    </script>
  </head>
  <style>
  .dropdown-link {
    cursor: pointer;
  }
  select option {
    background: rgba(0, 0, 0, 0.9);
  }
  </style>
  <script>
  $(function() {
    $('#searchGamesBtn').click(function() {
      window.location.href = 'https://www.<?php echo $siteLink; ?>/games?search=' + searchQuery;
    });

    $('#searchPlayersBtn').click(function() {
      window.location.href = 'https://www.<?php echo $siteLink; ?>/players?search=' + searchQuery;
    });

    $('#searchShopBtn').click(function() {
      window.location.href = 'https://www.<?php echo $siteLink; ?>/shop?search=' + searchQuery;
    });

    $('#searchGuildsBtn').click(function() {
      window.location.href = 'https://www.<?php echo $siteLink; ?>/guilds?search=' + searchQuery + '&type=0';
    });
  });

  </script>
  <body>
    <nav class='navbar'>
      <ul class='navbar-nav me-auto flex-grow-1'>
        <li class='nav-item d-flex d-lg-none pe-2'>
          <a type='button' class='nav-link' id='mobile-dropdown'><i class='far fa-bars text-2xl lh-1 align-middle'></i></a>
        </li>
        <li class='nav-item'>
          <a href='https://www.brickplanet.com' class='nav-link nav-brand p-0' style='padding:0'>
            <img src='/assets/images/bp-primary1.png' width='200' class='d-none d-lg-block'/>
            <img src='/assets/images/bp-light.png' width='54' height='54' class='d-block d-lg-none'/>
          </a>
        </li>
        <li class='nav-item flex-grow-1 px-3 d-lg-block  d-none '>
          <form autocomplete='off' class='flex-grow-1' action='' method='get'>
            <main class='flex-grow-1 form-parent has-icon-right'>
              <input autocomplete='off' type='text' class='form' id='searchDropdown' data-bs-toggle='dropdown' aria-expanded='false' name='search' placeholder='Search $siteName...' value=''>
              <ul
                class='dropdown-menu w-100'
                aria-labelledby='searchDropdown'
                data-bs-popper='static'>
                <li class='dropdown-item'>
                  <a id='searchGamesBtn' class='dropdown-link'>
                    <i class='far fa-gamepad-alt dropdown-icon'></i>&nbsp;Search Games for '<span></span>'
                  </a>
                </li>
                <li class='dropdown-item'>
                  <a id='searchPlayersBtn' class='dropdown-link'>
                    <i class='far fa-user dropdown-icon'></i>&nbsp;Search Players for '<span></span>'
                  </a>
                </li>
                <li class='dropdown-item'>
                  <a id='searchShopBtn' class='dropdown-link'>
                    <i class='far fa-shopping-basket dropdown-icon'></i>&nbsp;Search Shop Items for '<span></span>'
                  </a>
                </li>
                <li class='dropdown-item'>
                  <a id='searchGuildsBtn' class='dropdown-link'>
                    <i class='far fa-swords dropdown-icon'></i>&nbsp;Search Guilds for '<span></span>'
                  </a>
                </li>
              </ul>
              <button type='submit' class='form-parent-icon far fa-search'></button>
            </main>
          </form>
        </li>
      </ul>
      <ul class='navbar-nav ms-auto'>
                <li class='nav-item gap-2'>
          <a href='/login' class='nav-link btn btn-success fw-semibold text-uppercase px-3 text-sm flex-shrink'>Log In</a>
          <a href='/register' class='nav-link btn btn-primary fw-semibold text-uppercase px-3 text-sm flex-shrink'>Play Now</a>
        </li>
                      </ul>
    </nav>";
}
?>
<?php
if (!isset($_COOKIE['brickplanet_login']) && preg_match('/old-hill.xyz/', $_SERVER['HTTP_HOST']) && $_SERVER['REQUEST_URI'] !== '/') {
echo "<style>
        @media (min-width: 993px) {
            .wrapper {
                padding-left: 220px;
            }
        }
    </style>
    <nav class='sidebar' style='overflow-y:auto'>
        <ul class='sidebar-nav'>
            <main class='divider'>Browse</main>
            <li class='sidebar-item'>
                <a href='/' class='sidebar-link '>
                    <i class='fas fa-house-chimney sidebar-icon text-xl'></i>
                    Home
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/games' class='sidebar-link '>
                    <i class='fas fa-gamepad-alt sidebar-icon text-xl'></i>
                    Games
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/shop' class='sidebar-link '>
                    <i class='fas fa-shopping-basket sidebar-icon text-xl'></i>
                    Shop
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/forum' class='sidebar-link '>
                    <i class='fas fa-messages sidebar-icon text-xl'></i>
                    Forum
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/upgrade' class='sidebar-link text-warning '>
                    <i class='fas fa-crown sidebar-icon text-warning text-xl'></i>
                    Upgrade
                </a>
            </li>
            <main class='divider'>Discover</main>
            <li class='sidebar-item'>
                <a href='/players' class='sidebar-link '>
                    <i class='fas fa-users sidebar-icon text-xl'></i>
                    Players
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/guilds' class='sidebar-link '>
                    <i class='fas fa-swords sidebar-icon text-xl'></i>
                    Guilds
                </a>
            </li>
            <li class='sidebar-item'>
                <a href='/economy' class='sidebar-link '>
                    <i class='fas fa-chart-mixed sidebar-icon text-xl'></i>
                    Economy
                </a>
            </li>
        </ul>
    </nav>";
}
?>
