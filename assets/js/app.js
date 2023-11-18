$(document).ready(function () {

  // ------------- SPECIES DETAILED FORM --------------
  const speciesDetailed = document.querySelector('.species__detailed'),
        speciesDetailedHeader = document.querySelector('.species__detailed-title'),
        speciesDetailedForm = document.querySelector('.species__detailed-form');
  speciesDetailedHeader.addEventListener('click', () => {
    if (speciesDetailed.classList.contains('open')) {
      speciesDetailed.classList.remove('open');
      speciesDetailedForm.removeAttribute('style');
    } else {
      speciesDetailed.classList.add('open');
      speciesDetailedForm.style.height = speciesDetailedForm.scrollHeight + 'px';
    }
  })

  // -------------------- SELECT2 ---------------------
  $(".js-select2").select2({
    dropdownPosition: 'below',
    placeholder: 'Выбрать',
    closeOnSelect: true,
  });
  $('.js-select2').one('select2:open', function(e) {
    $('input.select2-search__field').prop('placeholder', 'Поиск');
  });
});