import {sortColumnOnClick} from "./filter_table/sortTableByColumn.js";

sortColumnOnClick();

const searchBar = document.getElementById('search');
console.log(searchBar.value);

const values = document.getElementsByClassName('row__content')
const test = document.querySelectorAll('.row__content:nth-child(1)')
const companies = [...test].map(n => n.textContent)

const filtered = [...test].filter(n => n.textContent.includes('Jouet'))
console.log(filtered)

console.log(test);




searchBar.addEventListener('keyup', (e)=>{
    console.log(e.target.value);
    let i = searchBar.value;

    companies.forEach(company => {
        console.log('test ' + company + ' = ')
        console.log('entry '+ i)

    })
})