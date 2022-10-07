/**
 * Set the datas to Edit in the company Dashboard page
 * @param input0
 * @param input1
 * @param input2
 * @param input3
 */
export const setInputFormToEditCompany = (input0, input1, input2, input3) =>{
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

            const form= document.getElementById('company__form');
            form.action = '/dashboardUpdateCompany';
        })
    })
}