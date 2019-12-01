function kattintas() {
    $(this).toggleClass("hatteres");
  }
  $(document).ready(function() {
    $("p.erzekeny").click(kattintas);
  });