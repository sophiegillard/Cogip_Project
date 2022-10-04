<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="assets/css/reset.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/styles.css"
      rel="stylesheet"
      type="text/css"
    />

    <script 
      type="module" 
      src="assets/modulesJS/displayMenuDashborad.js" 
      defer>
    </script>
    <title>cogip - Dashboard</title>
</head>
<body>
    <main class="dashboard">
      <section class="dashboard__menu">
        <div class="dashboard__menu__profil">
        <img class="dashboard__menu__profil__return" src="assets/img/icons/arrow-left.svg" alt="">
          <img class="dashboard__menu__profil__img" src="assets/img/user/user2_henry.png" alt="">
          <h4 class="dashboard__menu__profil__name">Henry George</h4>
        </div>
        <nav class="dashboard__menu__nav">
          <a class="dashboard__menu__nav__dashboard actif" href="/dashboard"><img src="assets/img/icons/dashboard/Icon_dashboard.png" alt="">Dashboard</a>
          <a class="dashboard__menu__nav__invoices" href="/dashboard-invoices"><img src="assets/img/icons/dashboard/Icon_Invoices.png" alt="">Invoices</a>
          <a class="dashboard__menu__nav__companies" href="/dashboard-companies"><img src="assets/img/icons/dashboard/Icon_Companies.png" alt="">Companies</a>
          <a class="dashboard__menu__nav__contact" href="/dashboard-contact"><img src="assets/img/icons/dashboard/Icon_contact.png" alt="">Contact</a>
        </nav>
        <div class="dashboard__menu__logout">
          <img class="dashboard__menu__logout__img" src="assets/img/user/user2_henry.png" alt="">
          <a class="dashboard__menu__logout__button" href="">Logout</a>
        </div>
      </section>
      <section class="dashboard__header">
        <h3 class="dashboard__header__title"><img class="dashboard__header__title__menu" src="assets/img/icons/menu.svg" alt="">Dashboard</h3>
        <p class="dashboard__header__path">dashboard/</p>
        <div class="dashboard__header__banner">
          <h2 class="dashboard__header__banner__name">Welcome back Henry!</h2>
          <p class="dashboard__header__banner__text">You can here add an invoice, a company and some contacts</p>
        </div>
        <img class="dashboard__header__illustration" src="assets/img/5.illustration_dashboard.png" alt="">
      </section>
    </main>
</body>
</html>