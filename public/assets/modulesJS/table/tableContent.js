/**
 * 
 * @param {DOM} position 
 * @param {array} tableHeaders 
 */

export const createTableContent = (position, contentTable) =>{
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
