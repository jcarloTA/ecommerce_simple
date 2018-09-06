'use strict';

/**
 * Created by Álvaro on 7/3/2016.
 */
var menu = document.querySelector('#menu'),
    openMenu = document.querySelector('#open-menu'),
    closeMenu = document.querySelector('#close-menu');

openMenu.addEventListener('click', function () {
  menu.classList.add('mostrar');
});

closeMenu.addEventListener('click', function () {
  menu.classList.remove('mostrar');
});