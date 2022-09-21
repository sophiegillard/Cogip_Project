/**
 * 
 * @param {DOM} position 
 * @param {array} tableHeaders 
 */

export const createTableContent = (position, contentTable) =>{
    const tableDiv = document.getElementById(position);

    

   // let arrayLength = tableHeaders.length;
    contentTable.forEach(element => {
        const array = element;
        console.log(element)
        
        const rowGroup = document.createElement('div');
        rowGroup.classList.add('flex__table');
        rowGroup.classList.add('table__content');
        tableDiv.appendChild(rowGroup);

        element.forEach(elements => {
        let flexTableHeader = document.createElement('div');
        flexTableHeader.classList.add('flex__row');
        flexTableHeader.classList.add('row__content');
        rowGroup.append(flexTableHeader);
        flexTableHeader.innerHTML = elements;
        });

        
    });

}
