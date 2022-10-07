import {setInputFormToEditInvoice} from "./setInputFormToEditInvoice.js";
import {setInputFormToEditCompany} from "./setInputFormToEditCompany.js";
import {setInputFormToEditContact} from "./setInputFormToEditContact.js";


//Functions called if on the right page
export const setInputEditInContact = () =>{
    if (document.title == "Cogip - Dashboard Contact"){
        const nameInput= document.getElementById('contactNameInput');
        const phone = document.getElementById('phoneNumberInput');
        const email = document.getElementById('contactEmailInput');
        const company = document.getElementById('companyInput');

        setInputFormToEditContact(nameInput, phone, email, company)
    }
}

export const setInputEditInCompanies = () =>{
    if (document.title == "Cogip - Dashboard Companies"){
        const companyInput= document.getElementById('companyInput');
        const countryInput = document.getElementById('countryInput');
        const tvaInput = document.getElementById('tvaInput');
        const typeInput = document.getElementById('typeInput');

        setInputFormToEditCompany(companyInput, countryInput, tvaInput, typeInput)
    }
}

export const setInputEditInInvoices = () =>{
    if (document.title == "Cogip - Dashboard Invoices"){
        const referenceInput= document.getElementById('referenceInput');
        const priceInput = document.getElementById('priceInput');
        const companyInput = document.getElementById('companyInput');
        const dateInput = document.getElementById('dateInput');

        setInputFormToEditInvoice(referenceInput, priceInput, companyInput, dateInput)
    }
}

