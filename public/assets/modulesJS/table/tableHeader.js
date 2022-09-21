import {createIndividualRow, setDisplayTable4Columns, setDisplayTable5Columns} from "./tableElement.js";


/**
 * 
 * @param {DOM} position 
 * @param {array} tableHeaders 
 */
export const createTableHeader4 = (position, tableHeaders) =>{
    //Get the position of the main container
    const tableDiv = document.getElementById(position);

    //Create new main div
    const headerDiv = document.createElement('div');
    headerDiv.classList.add('flex__table');
    headerDiv.classList.add('table__header');
    tableDiv.appendChild(headerDiv);

    //Create div for each elements
    createIndividualRow(tableHeaders, headerDiv);
    //Adapting the column size
    setDisplayTable4Columns()
}

export const createTableHeader5 = (position, tableHeaders) =>{
    //Get the position of the main container
    const tableDiv = document.getElementById(position);

    //Create new main div
    const headerDiv = document.createElement('div');
    headerDiv.classList.add('flex__table');
    headerDiv.classList.add('table__header');
    tableDiv.appendChild(headerDiv);

    //Create div for each elements
    createIndividualRow(tableHeaders, headerDiv);
    //Adapting the column size
    setDisplayTable5Columns();
}

