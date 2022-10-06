/**
 *FUNCTION to search items with search bar
 */
export const searchInputs = (id) => {
    //Get the search bar
    const searchBar = document.getElementById(id);

    //Get all the rows
    const rows = document.querySelectorAll('.table__content')

    //Adding event on the search bar to look up inputs
    searchBar.addEventListener("keyup", (e) => {
        rows.forEach(el => {

                // Get the first element of each row. Filter is based on this input.
                const firstChild = el.children.item(0)

                // Get the text of the first Child and set it to lower case
                let name = firstChild.textContent.toLowerCase();

                // Get the text of the search bar and set it to lower case
                let input = e.target.value.toLowerCase()

                // Check if the inputs form the table include the value of the search bar
                let isVisible = name.includes(input);

                // Show or hide elements
                isVisible ? el.classList.remove('hidecard') :  el.classList.add('hidecard');
                isVisible ? el.classList.remove('hidecard') :  el.classList.add('hidecard');
            }
        )
    })
}
