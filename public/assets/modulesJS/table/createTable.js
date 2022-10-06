
import {createTableHeader4, createTableHeader5} from "./tableHeader.js";
import {createTableContent} from "./tableContent.js";


/*
const fetchfunc = async () =>{
    try{
        const response = await fetch ('../../../../Models/home.php', {
            method: 'POST',
            body: form,
        });
        const result = await response.json()

        alert('success') 
    }
    catch(e){
        alert('not found')
        console.log(e)
    }
}

fetchfunc();
*/






const invoiceTableTitles = ['Invoice number', 'Due dates', 'Company', 'Created at'];
const invoiceContactTitles = ['Name', 'Phone', 'Mail', 'Company', 'Created at'];
const invoiceCompaniesTitles = ['Name', 'TVA', 'Country', 'Type', 'Created at'];

const contentTable = [
    ['F20220915', '15/09/2022', 'Jouet Jean-Michel', '25/09/2020'],
    ['F20220900', '10/09/2022', 'Dunder Mifflin', '25/09/2020'],
    ['F20220900', '10/09/2022', 'Dunder Mifflin', '25/09/2020'],
    ['F20220900', '10/09/2022', 'Dunder Mifflin', '25/09/2020']
]

const testContacts = [
    ['Sophie', '555-4567', 'peter.gregory@raviga.com','Raviga', '25/09/2020'],
    ['Gregory', '555-4567', 'peter.gregory@raviga.com','Raviga', '25/09/2020'],
    ['Gregory', '555-4567', 'peter.gregory@raviga.com','Raviga', '25/09/2020'],
    ['Gregory', '555-4567', 'peter.gregory@raviga.com','Raviga', '25/09/2020'],
    ['Gregory', '555-4567', 'peter.gregory@raviga.com','Raviga', '25/09/2020']
]

//Create TABLE of INVOICE.PHP
/*
createTableHeader4('tableInvoices', invoiceTableTitles);
createTableContent('tableInvoices', contentTable);


//Create TABLES of HOME.PHP
createTableHeader4('tableLastInvoices', invoiceTableTitles);
createTableContent('tableLastInvoices', contentTable);

createTableHeader5('tableLastContacts', invoiceContactTitles);
createTableContent('tableLastContacts', testContacts)

createTableHeader5('tableLastCompanies', invoiceCompaniesTitles);
createTableContent('tableLastCompanies', testContacts)
*/
