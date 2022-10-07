// Variables dashboard menu ordinateur
let dashboard = document.getElementsByClassName("dashboard__menu__nav__dashboard")[0];
let invoices = document.getElementsByClassName("dashboard__menu__nav__invoices")[0];
let companies = document.getElementsByClassName("dashboard__menu__nav__companies")[0];
let contact = document.getElementsByClassName("dashboard__menu__nav__contact")[0];
// Variables dashboard menu phone
let dashboardPhone = document.getElementsByClassName("phoneMenu__dashboard")[0];
let invoicesPhone = document.getElementsByClassName("phoneMenu__invoices")[0];
let companiesPhone = document.getElementsByClassName("phoneMenu__companies")[0];
let contactPhone = document.getElementsByClassName("phoneMenu__contact")[0];
let url = window.location.pathname;

export function changeActiveClass() {
    if (url === "/dashboardInvoices") {
        // ordinateur
        dashboard.classList.remove("active");
        invoices.classList.add("active");
        companies.classList.remove("active");
        contact.classList.remove("active");
        // téléphone
        dashboardPhone.classList.remove("activePhone");
        invoicesPhone.classList.add("activePhone");
        companiesPhone.classList.remove("activePhone");
        contactPhone.classList.remove("activePhone");
    } else if (url === "/dashboardCompanies") {
        // ordinateur
        dashboard.classList.remove("active");
        invoices.classList.remove("active");
        companies.classList.add("active");
        contact.classList.remove("active");
        // téléphone
        dashboardPhone.classList.remove("activePhone");
        invoicesPhone.classList.remove("activePhone");
        companiesPhone.classList.add("activePhone");
        contactPhone.classList.remove("activePhone");
    } else if (url === "/dashboardContact") {
        // ordinateur
        dashboard.classList.remove("active");
        invoices.classList.remove("active");
        companies.classList.remove("active");
        contact.classList.add("active");
        // téléphone
        dashboardPhone.classList.remove("activePhone");
        invoicesPhone.classList.remove("activePhone");
        companiesPhone.classList.remove("activePhone");
        contactPhone.classList.add("activePhone");
    } else {
        // ordinateur
        dashboard.classList.add("active");
        invoices.classList.remove("active");
        companies.classList.remove("active");
        contact.classList.remove("active");
        // téléphone
        dashboardPhone.classList.add("activePhone");
        invoicesPhone.classList.remove("activePhone");
        companiesPhone.classList.remove("activePhone");
        contactPhone.classList.remove("activePhone");
    }
}
