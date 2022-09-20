<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

    <script src="tableHeader.js" defer></script>

    <title>Cogip - table</title>
</head>
<body>

<h1>table</h1>

<div class="table-container" id="tableInvoice" role="table" aria-label="Destinations">
    <div class="flex-table header" role="rowgroup">
        <div class="flex-row" role="columnheader">Invoice number</div>
        <div class="flex-row" role="columnheader">Dates due</div>
        <div class="flex-row" role="columnheader">Company</div>
        <div class="flex-row" role="columnheader">Created at</div>
    </div>
    <div class="flex-table row" role="rowgroup">
        <div class="flex-row" role="cell">F20220915-001</div>
        <div class="flex-row" role="cell">15/09/2022</div>
        <div class="flex-row" role="cell">15/09/2022</div>
        <div class="flex-row" role="cell">25/09/2020</div>
    </div>
    <div class="flex-table row" role="rowgroup">
        <div class="flex-row first"  role="cell"><span class="flag-icon flag-icon-ca"></span> Canada</div>
        <div class="flex-row" role="cell">Vancouver to Victoria and Butchart Gardens Tour </div>
        <div class="flex-row" role="cell">23 Sep, 1:30p.m.</div>
        <div class="flex-row" role="cell">US$387</div>
    </div>
    <div class="flex-table row">
        <div class="flex-row first" role="cell"><span class="flag-icon flag-icon-au"></span> Australia</div>
        <div class="flex-row">Blue Mountains Tours</div>
        <div class="flex-row">9 Sep, 2p.m.</div>
        <div class="flex-row">US$400</div>
    </div>
    <div class="flex-table row">
        <div class="flex-row first"><span class="flag-icon flag-icon-nz"></span> New Zealand</div>
        <div class="flex-row">Milford Sound Coach & Cruise</div>
        <div class="flex-row">12 Sep, 2p.m.</div>
        <div class="flex-row">US$400</div>
    </div>
</div>

</body>

<script>
/**
 * 
 * @param {DOM} position 
 * @param {array} tableHeaders 
 */

const invoiceTitles = ['number', 'dates', 'Company', 'Created', 'test']


const createTableHeaderInvoice = (position, tableHeaders) =>{
    const tableDiv = document.getElementById(position);

    const headerDiv = document.createElement('div');
    headerDiv.classList.add('flex-table');
    headerDiv.classList.add('header');
    tableDiv.appendChild(headerDiv);

   // let arrayLength = tableHeaders.length;
    tableHeaders.forEach(element => {
        let flexTableHeader = document.createElement('div');
        flexTableHeader.classList.add('flex-row');
        headerDiv.append(flexTableHeader);
        flexTableHeader.innerHTML = element;
    });
    let arrayLength = tableHeaders.length;
    let rows= document.querySelectorAll('.flex-row');
    rows.forEach(element => {
        element.style.width = 'calc(100% / 5)';
    });

}
const contentTable = [
    ['F20220915', '15/09/2022', 'Jouet Jean-Michel', '25/09/2020'],
    ['F20220900', '10/09/2022', 'Dunder Mifflin', '25/09/2020']
]

 const createTableContentInvoice = (position, tableHeaders) =>{
     const tableDiv = document.getElementById(position);
 
     const rowGroup = document.createElement('div');
     rowGroup.classList.add('flex-table');
     rowGroup.classList.add('row');
     tableDiv.appendChild(rowGroup);
 
    // let arrayLength = tableHeaders.length;
     contentTable.forEach(element => {
        const array = element;
        console.log(element)
        element.forEach(elements => {
        let flexTableHeader = document.createElement('div');
         flexTableHeader.classList.add('flex-row');
         rowGroup.append(flexTableHeader);
         flexTableHeader.innerHTML = elements;
        });

         
     });
 
 }
 

createTableHeaderInvoice('tableInvoice', invoiceTitles);
createTableContentInvoice('tableInvoice', invoiceTitles);

    </script>