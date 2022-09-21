<?php require 'elements/header.php'; ?>

<main class=home>

    <section class='tables'>
        <article class="article__container invoices">
            <h2 class="article__title"> Last invoices </h2>
            <div class="table__container" id="tableLastInvoices" role="table" aria-label="Last invoices"></div>
        </article>

        <article class="article__container contacts">
            <h2 class="article__title"> Last contacts </h2>
            <div class="table__container" id="tableLastContacts" role="table" aria-label="Last contacts"></div>
        </article>

        <article class="article__container companies">
            <h2 class="article__title"> Last companies </h2>
            <div class="table__container" id="tableLastCompanies" role="table" aria-label="Last companies"></div>
        </article>
    </section>

    <section class='illustration'>
        <p class="illustration__text"> work better in your company </p>
        <div class="illustration__image">
            <div class="illustration__image__background"></div>
            <img class="illustration__image__source" src="assets/img/2_illustration_home_footer.png" alt="">
        </div>
    </section>

</main>

<?php require 'elements/footer.php' ?>