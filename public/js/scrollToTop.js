/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scrollToTop.js":
/*!*************************************!*\
  !*** ./resources/js/scrollToTop.js ***!
  \*************************************/
/***/ (() => {

eval("//Get the button\nvar mybutton = document.getElementById(\"btn-back-to-top\"); // When the user scrolls down 20px from the top of the document, show the button\n\nwindow.onscroll = function () {\n  scrollFunction();\n};\n\nfunction scrollFunction() {\n  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {\n    mybutton.style.display = \"block\";\n  } else {\n    mybutton.style.display = \"none\";\n  }\n} // When the user clicks on the button, scroll to the top of the document\n\n\nmybutton.addEventListener(\"click\", scrollToTop);\n\nfunction scrollToTop() {\n  document.body.scrollTop = 0;\n  document.documentElement.scrollTop = 0;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJteWJ1dHRvbiIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJ3aW5kb3ciLCJvbnNjcm9sbCIsInNjcm9sbEZ1bmN0aW9uIiwiYm9keSIsInNjcm9sbFRvcCIsImRvY3VtZW50RWxlbWVudCIsInN0eWxlIiwiZGlzcGxheSIsImFkZEV2ZW50TGlzdGVuZXIiLCJzY3JvbGxUb1RvcCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2Nyb2xsVG9Ub3AuanM/NDZhOCJdLCJzb3VyY2VzQ29udGVudCI6WyIvL0dldCB0aGUgYnV0dG9uXG5sZXQgbXlidXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImJ0bi1iYWNrLXRvLXRvcFwiKTtcblxuLy8gV2hlbiB0aGUgdXNlciBzY3JvbGxzIGRvd24gMjBweCBmcm9tIHRoZSB0b3Agb2YgdGhlIGRvY3VtZW50LCBzaG93IHRoZSBidXR0b25cbndpbmRvdy5vbnNjcm9sbCA9IGZ1bmN0aW9uICgpIHtcbiAgICBzY3JvbGxGdW5jdGlvbigpO1xufTtcblxuZnVuY3Rpb24gc2Nyb2xsRnVuY3Rpb24oKSB7XG4gICAgaWYgKFxuICAgICAgICBkb2N1bWVudC5ib2R5LnNjcm9sbFRvcCA+IDIwIHx8XG4gICAgICAgIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5zY3JvbGxUb3AgPiAyMFxuICAgICkge1xuICAgICAgICBteWJ1dHRvbi5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIG15YnV0dG9uLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcbiAgICB9XG59XG4vLyBXaGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGUgYnV0dG9uLCBzY3JvbGwgdG8gdGhlIHRvcCBvZiB0aGUgZG9jdW1lbnRcbm15YnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBzY3JvbGxUb1RvcCk7XG5mdW5jdGlvbiBzY3JvbGxUb1RvcCgpIHtcbiAgICBkb2N1bWVudC5ib2R5LnNjcm9sbFRvcCA9IDA7XG4gICAgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCA9IDA7XG59XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBSUEsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsaUJBQXhCLENBQWYsQyxDQUVBOztBQUNBQyxNQUFNLENBQUNDLFFBQVAsR0FBa0IsWUFBWTtFQUMxQkMsY0FBYztBQUNqQixDQUZEOztBQUlBLFNBQVNBLGNBQVQsR0FBMEI7RUFDdEIsSUFDSUosUUFBUSxDQUFDSyxJQUFULENBQWNDLFNBQWQsR0FBMEIsRUFBMUIsSUFDQU4sUUFBUSxDQUFDTyxlQUFULENBQXlCRCxTQUF6QixHQUFxQyxFQUZ6QyxFQUdFO0lBQ0VQLFFBQVEsQ0FBQ1MsS0FBVCxDQUFlQyxPQUFmLEdBQXlCLE9BQXpCO0VBQ0gsQ0FMRCxNQUtPO0lBQ0hWLFFBQVEsQ0FBQ1MsS0FBVCxDQUFlQyxPQUFmLEdBQXlCLE1BQXpCO0VBQ0g7QUFDSixDLENBQ0Q7OztBQUNBVixRQUFRLENBQUNXLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DQyxXQUFuQzs7QUFDQSxTQUFTQSxXQUFULEdBQXVCO0VBQ25CWCxRQUFRLENBQUNLLElBQVQsQ0FBY0MsU0FBZCxHQUEwQixDQUExQjtFQUNBTixRQUFRLENBQUNPLGVBQVQsQ0FBeUJELFNBQXpCLEdBQXFDLENBQXJDO0FBQ0giLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2Nyb2xsVG9Ub3AuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scrollToTop.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/scrollToTop.js"]();
/******/ 	
/******/ })()
;