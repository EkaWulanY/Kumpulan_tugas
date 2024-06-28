const table = document.querySelector('table');

table.addEventListener('mouseover', (event) => {
  const target = event.target;

  if (target.dataset.variable || target.dataset.value) {
    target.classList.add('highlight');
  }

  if (target.id === 'hasil') {
    const variableA = document.querySelector('[data-variable="a"]').dataset.value;
    const variableB = document.querySelector('[data-variable="b"]').dataset.value;
    const variableC = document.querySelector('[data-variable="c"]').dataset.value;

    document.getElementById('hasil').textContent = parseInt(variableA) + parseInt(variableB) + 
    parseInt(variableC);
  }
});

table.addEventListener('mouseout', (event) => {
  const target = event.target;

  if (target.dataset.variable || target.dataset.value) {
    target.classList.remove('highlight');
  }
});
