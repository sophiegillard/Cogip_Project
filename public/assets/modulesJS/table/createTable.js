import {createTableHeader4, createTableHeader5} from "./tableHeader.js";
import {createTableContent} from "./tableContent.js";


console.log('test');
const invoiceTitles = ['Invoice number', 'Due dates', 'Company', 'Created at']

const contentTable = [
    ['F20220915', '15/09/2022', 'Jouet Jean-Michel', '25/09/2020'],
    ['F20220900', '10/09/2022', 'Dunder Mifflin', '25/09/2020']
]

createTableHeader4('tableInvoice', invoiceTitles);

createTableContent('tableInvoice', contentTable);

