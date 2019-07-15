(() => {
  const formGroup = document.querySelectorAll('.form-group');

  formGroup.forEach(item => {
    const inputValue = item.querySelector('.form-control').value;
    if(inputValue != ""){
      item.classList.add('focused');
    }
  })
  console.log('loading this script')
})();