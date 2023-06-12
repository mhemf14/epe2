// Obtener elementos del DOM
const loginWindow = document.getElementById('loginWindow');
const selectWorkWindow = document.getElementById('selectWorkWindow');
const checklistWindow = document.getElementById('checklistWindow');
const summaryWindow = document.getElementById('summaryWindow');

const loginButton = document.getElementById('loginButton');
const continueButton = document.getElementById('continueButton');
const previousButton = document.getElementById('previousButton');
const nextButton = document.getElementById('nextButton');
const submitButton = document.getElementById('submitButton');
const editButton = document.getElementById('editButton');

// Event listeners para los botones
loginButton.addEventListener('click', () => {
  window.location.href = 'seleccionar-obra.html';
});

continueButton.addEventListener('click', () => {
    window.location.href = 'checklist.html';
  });
  


