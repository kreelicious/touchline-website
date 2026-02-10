(() => {
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const navigation = document.querySelector('[data-navigation]');

  if (!menuToggle || !navigation) {
    return;
  }

  menuToggle.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    navigation.classList.toggle('is-open', !isOpen);
  });
})();
