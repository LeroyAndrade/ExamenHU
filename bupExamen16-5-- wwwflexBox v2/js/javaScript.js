
//Nav button klik:
const menuKnop        = document.querySelector(    '.nav__knop' );
const navigationItems = document.querySelectorAll( '.nav__link' );
const menuItem = document.querySelector( '.geopendeMenuItems' );

const menuAchtergrond = document.getElementById( 'menuAchtergrond::after' );
const geopendeMenuItems = document.getElementById( 'geopendeMenuItems' );


menuKnop.addEventListener( 'click', () => {
    navigationItems.forEach( (item, index) => {

        setTimeout( () => {
            item.classList.toggle( 'nav__link--schuif-in' );
        }, 100 * index );

    });
    document.querySelector( '.hamburger_button'  ).classList.toggle( 'verbergen' );
    document.querySelector( '.sluitKnop'         ).classList.toggle( 'verbergen' );
    document.querySelector( '.geopendeMenuItems' ).classList.toggle( 'verbergen' );
    document.querySelector( '.menuAchtergrond'   ).classList.toggle( 'verbergen' );
});

//Wanneer schermgrootte een laptop / desktop is, dan haal ik de menu items uit de parrent
// en maak ze een parrent in de Display Flex

// let laptopScreenSize = window.innerWidth;
//
// if (laptopScreenSize > 1023) {
//     menuAchtergrond.remove();
// }

//    test1 menu
// // Create an "li" node:
//     const node = document.createElement("li");
//
// // Create a text node:
//     const textnode = document.createTextNode("Water");
//
// // Append the text node to the "li" node:
//     node.appendChild(textnode);

    //test2
// Append the "li" node to the list:
//     document.write().appendChild(node);
    // desktopMenuA.setAttribute('class', 'navigationItems nav__item uuuuuuuuuuuuu');
    // const textnode = document.createTextNode("Water");
    // desktopMenuA.setAttribute('href', 'javascript:showSignature(xyz)');
    //
    // desktopMenuA.appendChild(desktopMenuA);
