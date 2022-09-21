/**
 * Create individual rows in tables. Main Divs must be created before using this function.
 * Each rows include 4 or 5 datas.
 * @param {array} array 
 */
export const createIndividualRow = (array, parent) =>{
    array.forEach(elements => {
        let flexTableHeader = document.createElement('div');
        flexTableHeader.classList.add('flex__row');
        flexTableHeader.classList.add('row__content');
        parent.append(flexTableHeader);
        flexTableHeader.innerHTML = elements;
        });
}

/**
 * Change the size of the columns --> 4 columns
 */
export const setDisplayTable4Columns= () => {
    let rows= document.querySelectorAll('.flex__row');
    rows.forEach(element => {
    element.style.width = 'calc(100% / 4)';
});
}

/**
 * Change the size of the columns --> 5 columns
 */
export const setDisplayTable5Columns= () => {
    let rows= document.querySelectorAll('.flex__row');
    rows.forEach(element => {
    element.style.width = 'calc(100% / 5)';
});
}