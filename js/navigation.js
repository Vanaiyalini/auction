// navigation.js
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('a[data-page]');
  
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const page = this.getAttribute('data-page');
      window.location.href = page + '.html';
    });
  });
});