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
    headerDiv.classList.add('flex-table');
    headerDiv.classList.add('header');
    tableDiv.appendChild(headerDiv);

    //Create div for each elements
    tableHeaders.forEach(element => {
        let flexTableHeader = document.createElement('div');
        flexTableHeader.classList.add('flex-row');
        headerDiv.append(flexTableHeader);
        flexTableHeader.innerHTML = element;
    });
    //Adapting the column size
    let rows= document.querySelectorAll('.flex-row');
    rows.forEach(element => {
        element.style.width = 'calc(100% / 4)';
    });
}

export const createTableHeader5 = (position, tableHeaders) =>{
    //Get the position of the main container
    const tableDiv = document.getElementById(position);

    //Create new main div
    const headerDiv = document.createElement('div');
    headerDiv.classList.add('flex-table');
    headerDiv.classList.add('header');
    tableDiv.appendChild(headerDiv);

    //Create div for each elements
    tableHeaders.forEach(element => {
        let flexTableHeader = document.createElement('div');
        flexTableHeader.classList.add('flex-row');
        headerDiv.append(flexTableHeader);
        flexTableHeader.innerHTML = element;
    });
    //Adapting the column size
    let rows= document.querySelectorAll('.flex-row');
    rows.forEach(element => {
        element.style.width = 'calc(100% / 5)';
    });
}

