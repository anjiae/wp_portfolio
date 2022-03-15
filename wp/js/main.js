'use strict';
document.addEventListener('DOMContentLoaded', function () {
  const navigation = document.querySelector('.header__nav');

  // Header : Toggle menu
  const toggleBtn = document.querySelector('.toggleBtn');
  toggleBtn.addEventListener('click', () => {
    toggleBtn.classList.toggle('open');
    navigation.classList.toggle('open');
  });

  // Header : show sub-menu
  const mainMenu = document.querySelectorAll('.main-menu');
  mainMenu.forEach((btn) => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('open');
    });
    btn.addEventListener('mouseleave', () => {
      btn.classList.remove('open');
    });
  });

  document.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
      navigation.classList.remove('open');
    }
  });








});