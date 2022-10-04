<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <title>cogip - dashboard Invoices</title>
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
          <a class="dashboard__menu__nav__dashboard" href="/dashboard"><img src="assets/img/icons/dashboard/Icon_dashboard.png" alt="">Dashboard</a>
          <a class="dashboard__menu__nav__invoices actif" href="/dashboard-invoices"><img src="assets/img/icons/dashboard/Icon_Invoices.png" alt="">Invoices</a>
          <a class="dashboard__menu__nav__companies" href="/dashboard-campanies"><img src="assets/img/icons/dashboard/Icon_Companies.png" alt="">Companies</a>
          <a class="dashboard__menu__nav__contact" href="/dashboard-contact"><img src="assets/img/icons/dashboard/Icon_contact.png" alt="">Contact</a>
        </nav>
        <div class="dashboard__menu__logout">
          <img class="dashboard__menu__logout__img" src="assets/img/user/user2_henry.png" alt="">
          <a class="dashboard__menu__logout__button" href="">Logout</a>
        </div>
      </section>
      
      <section>
        <h1>New invoice</h1>
        <form action="">
          <input type="text" name="reference" id="" placeholder="Reference">
          <input type="text" name="price" id="" placeholder="Price">
          <select name="campaniesName" id="">
            <option value="none" selected disabled hidden>Select an Companies</option>
            <option value="phoqueOff">Phoque Off</option>
          </select>
          <input type="submit" value="Save">
        </form>
      </section>
    </main>
</body>
</html>
</body>
</html>