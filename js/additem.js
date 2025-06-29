// additem.js

const contactForm = document.querySelector('.contact-form form');
const nameInput = document.querySelector('input[name="name"]');
const numberInput = document.querySelector('input[name="number"]');
const emailInput = document.querySelector('input[name="email"]');
const stateInput = document.querySelector('input[name="state"]');
const itemInput = document.querySelector('input[name="item"]');
const messageInput = document.querySelector('textarea[name="message"]');


contactForm.addEventListener('submit', (event) => {
  event.preventDefault(); 

  const name = nameInput.value.trim();
  const number = numberInput.value.trim();
  const email = emailInput.value.trim();
  const state = stateInput.value.trim();
  const item = itemInput.value.trim();
  const message = messageInput.value.trim()

  if (name && number && email && state && item) {
    
    console.log('Form data:', { name, number, email, state, item, message });
    
  } else {
    alert('Please fill in all required fields.');
  }

  contactForm.reset();
});