
export const searchInputs = () => {
    //Get the search bar
    const searchBar = document.getElementById('search');

    //Get all the rows
    const rows = document.querySelectorAll('.table__content')

    //Adding event on the search bar to look up inputs
    searchBar.addEventListener("keyup", (e) => {
        rows.forEach(el => {
            //
                const firstChild = el.children.item(0)
              //  const firstChild = children.item(0);

                let name = firstChild.textContent.toLowerCase();
                let input = e.target.value.toLowerCase()
                let isVisible = name.includes(input);

                isVisible ? el.classList.remove('hidecard') :  el.classList.add('hidecard');
            }
        )
    })
}
