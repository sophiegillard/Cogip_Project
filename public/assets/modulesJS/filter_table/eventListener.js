import {sortTableByColumn} from "./filter_table/sortTableByColumn.js";

const setEventListener = (sign, action) => {
    const button = document.getElementById(sign);
    button.addEventListener('toggle', action)
}

setEventListener('arrowCreatedAtInContact', sortTableByColumn('tableContacts', ".table__content", 0, false));