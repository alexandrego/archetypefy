const radioInputs = document.querySelectorAll('input[type="radio"]');

radioInputs.forEach(radioInput => {
  const questionsDiv = radioInput.parentElement;
  const label = questionsDiv.querySelector('label');

  radioInput.addEventListener('change', function() {
    if (this.checked) {
      // Remover a classe 'checked' de todas as outras divs e labels
      radioInputs.forEach(input => {
        input.parentElement.classList.remove('checked');
        input.nextElementSibling.classList.remove('checked');
      });

      // Adicionar a classe 'checked' à div e label atuais
      questionsDiv.classList.add('checked');
      label.classList.add('checked');
    } else {
      questionsDiv.classList.remove('checked');
      label.classList.remove('checked');
    }
  });
});
