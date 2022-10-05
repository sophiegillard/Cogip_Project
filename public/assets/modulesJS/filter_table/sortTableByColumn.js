/**
*SORT HTML TABLE
*
* @param {HTMLTableElement} table ID of the table to sort
* @param {HTMLTableElement} row The class of the table's rows
* @param {number} row The index of the column to sort
* @param {boolean} asc Determine whether the sorting is in ascending order
*/
export const sortTableByColumn = (table, row, column, asc = true) =>{
    const dirModifier = asc ? 1 : -1;
    const tBody= document.getElementById(table);
    const rows = Array.from(tBody.querySelectorAll(row))

    //sort each row
    const sortData = rows.sort((a,b)=>{
        const aColText = a.querySelector(`div:nth-child(${column + 1})`).textContent.trim();
        const bColText = b.querySelector(`div:nth-child(${column + 1})`).textContent.trim();


        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    //Remove all existing rows from the table
    while(tBody.querySelector(row)){
        const childToRemove = tBody.querySelector(row);
        tBody.removeChild(childToRemove)
    }

    //Add the newly sorted rows
    tBody.append(...sortData);

    //remember how the column is currently sorted
    const fleches = document.getElementsByClassName('arrow__down')

    for (const fleche of fleches) {
        fleche.classList.remove("th-sort-asc", "th-sort-desc");
        fleche.classList.toggle("th-sort-asc", asc);
        fleche.classList.toggle("th-sort-desc", !asc);
    }
}

/**
 * Add Event listener to all Arrows
 */
export const sortColumnOnClick = () => {
    //Select all the arrows
    const fleches = document.querySelectorAll('.arrow__down');

    //Event for each
    fleches.forEach(fleche =>

        fleche.addEventListener('click', (e) => {
            //Check whether the arrow has already on ascending or descending order
            const currentAsc = fleche.classList.contains("th-sort-asc");

            //Get the index of the column
            const index = e.target.id;

            //Get the table
            const table = fleche.parentElement.parentElement.parentElement;

            //Get the id of the table
            const tableId = table.id;

            sortTableByColumn(tableId, ".table__content", parseInt(index), !currentAsc);

        })
    );
}