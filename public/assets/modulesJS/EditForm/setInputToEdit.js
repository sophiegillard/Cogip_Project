/**
 * Set the datas to Edit in the Dashboard pages
 * @param input0
 * @param input1
 * @param input2
 * @param input3
 */
const setInputFormToEdit = (input0, input1, input2, input3) =>{
    //Get all the edit buttons
    const editButtons = document.querySelectorAll('.icon__edit');

    editButtons.forEach(button =>{
        //Add a click event on all buttons
        button.addEventListener('click', ()=>{
            //Get the gran-parent of button --> get the ROW
            const parent = button.parentElement.parentElement;

            //Get the innerHtml of all elements of the row
            const firstChild= parent.children[0].innerHTML
            const secondChild= parent.children[1].innerHTML
            const thirdChild= parent.children[2].innerHTML
            const fourthChild= parent.children[3].innerHTML

            //Set placeholder of each form input to NULL
            input0.placeholder = "";
            input1.placeholder = "";
            input2.placeholder = "";
            input3.placeholder = "";

            //Set the datas of the selected row in the form to edit them
            input0.value = firstChild;
            input1.value = secondChild;
            input2.value = thirdChild;
            input3.innerHTML = fourthChild;


        })
    })
}

/**
 * Function to set the datas to Edit in the invoice Dashboard page
 * @param input0
 * @param input1
 * @param input2
 * @param input3
 */
const setInputFormToEditInvoice = (input0, input1, input2, input3) =>{
    //Get all the edit buttons
    const editButtons = document.querySelectorAll('.icon__edit');

    editButtons.forEach(button =>{
        //Add a click event on all buttons
        button.addEventListener('click', ()=>{
            //Get the gran-parent of button --> get the ROW
            const parent = button.parentElement.parentElement;

            //Get the innerHtml of all elements of the row
            const firstChild= parent.children[0].innerHTML
            const secondChild= parent.children[1].innerHTML
            const thirdChild= parent.children[2].innerHTML
            const fourthChild= parent.children[3].innerHTML

            //Set placeholder of each form input to NULL
            input0.placeholder = "";
            //input1.placeholder = "";
            input2.placeholder = "";
            input3.placeholder = "";

            //Set the datas of the selected row in the form to edit them
            input0.value = firstChild;
            //input1.value = "";
            input2.innerHTML = thirdChild;
            input3.value = secondChild;

            const form= document.getElementById('invoice__form');
            form.action = '/dashboardUpdateInvoices';
        })
    })
}


//Functions called if on the right page
export const setInputEditInContact = () =>{
    if (document.title == "Cogip - Dashboard Contact"){
        const nameInput= document.getElementById('contactNameInput');
        const phone = document.getElementById('phoneNumberInput');
        const email = document.getElementById('contactEmailInput');
        const company = document.getElementById('companyInput');

        setInputFormToEdit(nameInput, phone, email, company)
    }
}

export const setInputEditInCompanies = () =>{
    if (document.title == "Cogip - Dashboard Companies"){
        const companyInput= document.getElementById('companyInput');
        const countryInput = document.getElementById('countryInput');
        const tvaInput = document.getElementById('tvaInput');
        const typeInput = document.getElementById('typeInput');

        setInputFormToEdit(companyInput, countryInput, tvaInput, typeInput)
    }
}

export const setInputEditInInvoices = () =>{
    if (document.title == "Cogip - Dashboard Invoices"){
        const referenceInput= document.getElementById('referenceInput');
        const priceInput = document.getElementById('priceInput');
        const companyInput = document.getElementById('companyInput');
        const dateInput = document.getElementById('dateInput');

        setInputFormToEditInvoice(referenceInput, priceInput, companyInput, dateInput)
    }
}

