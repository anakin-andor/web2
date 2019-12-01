function dobozKiBe() {
    var id  = $(this).attr("id");
    var ssz = id.substr(3);
    if ($("#torzs" + ssz).css("display") == "none") {
      $("#torzs" + ssz).css("display", "block");
      $(this).attr({
        src: "images/block-close.gif",
        title: "Hagyományok ápolása"
      });
    } else {
      $("#torzs" + ssz).css("display", "none");
      $(this).attr({
        src: "images/block-open.gif",
        title: "részletek megjelenítése"
      });
    }
  }
  $(document).ready(function() {
    $(".doboztorzs").css("display", "none");
    $(".kep").attr({
      src: "images/block-open.gif",
      title: "részletek megjelenítése"
    }).css("cursor", "pointer");
    $(".kep").click(dobozKiBe);
  });