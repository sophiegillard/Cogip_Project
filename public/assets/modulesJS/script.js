import {sortColumnOnClick} from "./filter_table/sortTableByColumn.js";
import {searchInputs} from "./searchBar/searchBar.js";
import { toggleMenu } from "./displayMenuPhone.js";
import { displayLogin } from "./displayLogin.js";
import { hoverActived } from "./displayLogin.js";

displayLogin();
hoverActived();

toggleMenu();

searchInputs('search');

sortColumnOnClick();
