/**
 * Function to set the datas to Edit in the invoice Dashboard page
 * @param input0
 * @param input1
 * @param input2
 * @param input3
 */
export const setInputFormToEditInvoice = (input0, input1, input2, input3) =>{
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
            //input2.placeholder = "";
            input3.placeholder = "";


//------------------------------
//try to get the index selected
            /*let selId = document.getElementById("selectId");
            let items = selId.options;//Javascript get select all option

            for (var i = 1; i < items.length; i++) {
                console.log(thirdChild)
                console.log(items[i].index)
                console.log(items[i].innerHTML)

                const indexSelect= items[i].index;
                const valueSelect = items[i].innerText;
                console.log(valueSelect);

                if(thirdChild === valueSelect){
                    document.getElementById('companyInput').value= items[i].index;
                    console.log('index')
                    console.log(items[i].index)
                    console.log(items[i])
                }
            }*/
//------------------------------


            //Set the datas of the selected row in the form to edit them
            input0.value = firstChild;
            //input1.value = "";
            input2.innerHTML = thirdChild;
            input2.selected = true;
            input3.value = secondChild;


            const idDiv= parent.id

            const form= document.getElementById('invoice__form');
            form.action = '/dashboardUpdateInvoices?id=' + idDiv;

        })
    })
}