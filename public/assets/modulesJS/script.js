import {sortColumnOnClick} from "./filter_table/sortTableByColumn.js";
import {searchInputs} from "./searchBar/searchBar.js";
import { toggleMenu } from "./displayMenuPhone.js";
import { displayLogin } from "./displayLogin.js";
import { CloseLoginBackground } from "./displayLogin.js";
import { displaySignUp } from "./displaySignUp.js";
import { CloseSignUpBackground } from "./displaySignUp.js";

displayLogin();
displaySignUp();
CloseSignUpBackground();
CloseLoginBackground();

toggleMenu();

searchInputs('search');

sortColumnOnClick();
