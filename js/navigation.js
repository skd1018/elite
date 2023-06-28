/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

const popupMenu = "#mobile";
const popupEl = document.querySelector(popupMenu);
const menuButton = document.querySelector("#trigger");
const page = document.querySelector("#primary");

// Dynamically add menu closeout button
var mobileMenu = document.getElementById('mobile');
const closeButton = document.createElement('button');
mobileMenu.append(closeButton);
closeButton.textContent = '\uF659';
closeButton.classList.add('toggle');
closeButton.setAttribute("id", "collapse");
const menuCollapse = document.getElementById("collapse");
// handle nav collapse button
menuCollapse.addEventListener('click', function() {
    mobileMenu.classList.remove('open');
    page.classList.remove('slidemargin');
});
// Hide nav on outside click
// Toggle slide menu on icon click
menuButton.addEventListener("click", () => {
    setTimeout(() => {
        if (!popupEl.classList.contains("open")) {
            popupEl.classList.add("open");
            page.classList.add('slidemargin');
        }
    }, 20);
});
// Submenu handler
function mobileNav() {
    const subMenu = document.querySelectorAll('.mobile-navigation .sub-menu');
    subMenu.forEach(subMenu => {
        subMenu.setAttribute('id', 'sub')
    });

    // Add dropdown toggle that displays child menu items.
    const subMenus = document.querySelectorAll(' .mobile-navigation .menu-item-has-children > a');
    subMenus.forEach(subMenus => {
        const button = document.createElement('button');
        subMenus.after(button);
        button.textContent = '\uF282';
        button.classList.add('dropDown');
        button.setAttribute('id', 'slide');

    });
    //* slidetoggle function 
    var slideBtn = document.querySelectorAll('.dropDown');
    slideBtn.forEach(slideBtn => {
        slideBtn.addEventListener('click', event => {
            var menu = slideBtn.nextElementSibling;
            menu.classList.toggle("active");
        })
    });

}
mobileNav();


var theMenu = document.getElementById('sub');
document.addEventListener("click", (e) => {
    const isClosest = e.target.closest(popupMenu);
    // If `isClosest` equals falsy & popup has the class `show`
    // then hide the menu
    if (!isClosest && popupEl.classList.contains("open")) {
        popupEl.classList.remove("open");
        page.classList.remove('slidemargin');
    }
});

(function() {
    const siteNavigation = document.getElementById('h');

    // Return early if the navigation doesn't exist.
    if (!siteNavigation) {
        return;
    }

    const button = siteNavigation.getElementsByTagName('button')[0];

    // Return early if the button doesn't exist.
    if ('undefined' === typeof button) {
        return;
    }

    const menu = siteNavigation.getElementsByTagName('ul')[0];

    // Hide menu toggle button if menu is empty and return early.
    if ('undefined' === typeof menu) {
        button.style.display = 'none';
        return;
    }

    if (!menu.classList.contains('nav-menu')) {
        menu.classList.add('nav-menu');
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    menuButton.addEventListener('click', function() {
        menuDiv.classList.toggle('open');

        if (button.getAttribute('aria-expanded') === 'true') {
            button.setAttribute('aria-expanded', 'false');
        } else {
            button.setAttribute('aria-expanded', 'true');
        }
    });

    // Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
    document.addEventListener('click', function(event) {
        const isClickInside = menu.contains(event.target);

        if (!isClickInside) {
            menuDiv.classList.remove('open');
            button.setAttribute('aria-expanded', 'false');
        }
    });


    // Get all the link elements within the menu.
    const links = menu.getElementsByTagName('a');

    // Get all the link elements with children within the menu.
    const linksWithChildren = popupMenu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

    // Toggle focus each time a menu link is focused or blurred.
    for (const link of links) {
        link.addEventListener('focus', toggleFocus, true);
        link.addEventListener('blur', toggleFocus, true);
    }

    // Toggle focus each time a menu link with children receive a touch event.
    for (const link of linksWithChildren) {
        link.addEventListener('touchstart', toggleFocus, false);
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        if (event.type === 'focus' || event.type === 'blur') {
            let self = this;
            // Move up through the ancestors of the current link until we hit .nav-menu.
            while (!self.classList.contains('nav-menu')) {
                // On li elements toggle the class .focus.
                if ('li' === self.tagName.toLowerCase()) {
                    self.classList.toggle('focus');
                }
                self = self.parentNode;
            }
        }

        if (event.type === 'touchstart') {
            const menuItem = this.parentNode;
            event.preventDefault();
            for (const link of menuItem.parentNode.children) {
                if (menuItem !== link) {
                    link.classList.remove('focus');
                }
            }
            menuItem.classList.toggle('focus');
        }
    }


}());


function topBar() {
    var doc = document.documentElement;
    var w = window;
    var curScroll = prevScroll = w.scrollY || doc.scrollTop;
    var curDirection = prevDirection = 0;
    var theHeader = document.getElementById('masthead');


    var checkScroll = function() {
        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
            curDirection = 2;
        } else {
            curDirection = 1;
        }

        if (curDirection !== prevDirection) {
            toggleHeader();
        }
        prevDirection = curDirection;
        prevScroll = curScroll;
    };

    var toggleHeader = function() {
        if (curDirection === 2) {
            theHeader.classList.add('hideit');
        } else if (curDirection === 1) {
            theHeader.classList.remove('hideit');
        }
    };

    window.addEventListener('scroll', checkScroll);
}

topBar();