import {createIndividualRow} from "./tableElement.js";

/**
 * 
 * @param {DOM} position 
 * @param {array} tableHeaders 
 */
export const createTableContent = (position, contentTable) =>{
    const tableDiv = document.getElementById(position);

   // let arrayLength = tableHeaders.length;
    contentTable.forEach(element => {
    
        const rowGroup = document.createElement('div');
        rowGroup.classList.add('flex__table');
        rowGroup.classList.add('table__content');
        tableDiv.appendChild(rowGroup);

        createIndividualRow(element, rowGroup);

        
    });

}
