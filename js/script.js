/* Navigation */
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});


/* Hamburger Button */
const hamburgerButton = document.querySelector('.hamburger-button');

hamburgerButton.addEventListener('click', () => {
    const isOpened = hamburgerButton.getAttribute('aria-expanded');
    if (isOpened === 'false') {
        hamburgerButton.setAttribute('aria-expanded', 'true');
    } else {
        hamburgerButton.setAttribute('aria-expanded', 'false')
    }
})
const navbarLinks = document.getElementsByClassName('.navigation')
hamburgerButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
  })