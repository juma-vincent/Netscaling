<?php

add_action('wp_footer', function () {
?>
<script>
window.addEventListener("load", function () {

  const menu = document.querySelector(".mobile-menu");
  const overlay = document.getElementById("menuOverlay");
  const toggle = document.getElementById("menuToggle");
  const closeBtn = document.getElementById("menuClose");

  /* OPEN MENU */
  toggle.addEventListener("click", () => {
    menu.classList.add("open");
    overlay.classList.add("open");
  });

  /* CLOSE MENU FUNCTION */
  function closeMenu() {
    menu.classList.remove("open");
    overlay.classList.remove("open");
  }

  /* CLOSE BUTTON */
  closeBtn.addEventListener("click", closeMenu);

  /* CLICK OUTSIDE */
  overlay.addEventListener("click", closeMenu);

  /* SUBMENU OPEN */
  document.querySelectorAll(".open-submenu").forEach(item => {
    item.addEventListener("click", function () {
      const targetID = this.dataset.menu;
      const panel = document.getElementById(targetID);
      if(panel) panel.classList.add("active");
    });
  });

  /* BACK BUTTON */
  document.querySelectorAll(".back").forEach(btn => {
    btn.addEventListener("click", function () {
      this.closest(".menu-panel").classList.remove("active");
    });
  });

});
</script>
<?php
});