// Arquivo JS vazio para ser utilizado para seu próprio JS, caso necessário.$(function() {
  $('#carousel').carouFredSel({
    responsive: true,
    items: {
      visible: 1,
      width: 900,
      height: 500
    },
    scroll: {
      duration: 250,
      timeoutDuration: 2500,
      fx: 'uncover-fade'
    },
    pagination: '#pager'
  });
});
