let dashboard = document.getElementsByClassName("dashboard__menu__nav__dashboard")[0];
let invoices = document.getElementsByClassName("dashboard__menu__nav__invoices")[0];
let companies = document.getElementsByClassName("dashboard__menu__nav__companies")[0];
let contact = document.getElementsByClassName("dashboard__menu__nav__contact")[0];

export function changeActiveClass() {
    let url = window.location.pathname;

    if (url === "/dashboardInvoices") {
        dashboard.classList.remove("active");
        invoices.classList.add("active");
        companies.classList.remove("active");
        contact.classList.remove("active");
    } else if (url === "/dashboardCompanies") {
        dashboard.classList.remove("active");
        invoices.classList.remove("active");
        companies.classList.add("active");
        contact.classList.remove("active");
    } else if (url === "/dashboardContact") {
        dashboard.classList.remove("active");
        invoices.classList.remove("active");
        companies.classList.remove("active");
        contact.classList.add("active");
    } else {
        dashboard.classList.add("active");
        invoices.classList.remove("active");
        companies.classList.remove("active");
        contact.classList.remove("active");
    }
}
