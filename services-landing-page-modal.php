<?php

add_action('wp_footer', function () {
  ?>
  <script>
  document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('service-selector-modal');
    if (!modal) return;

    const seenKey = 'netscaling_modal_seen';

    if (!sessionStorage.getItem(seenKey)) {
      setTimeout(() => {
        modal.style.display = 'flex';
        modal.style.alignItems = 'center';
        modal.style.justifyContent = 'center';
        document.body.style.overflow = 'hidden';
      }, 800);
    }

    function closeModal() {
      modal.style.display = 'none';
      document.body.style.overflow = '';
      sessionStorage.setItem(seenKey, 'true');
    }

    // 👉 CLOSE WHEN CLICKING THE OVERLAY
    modal.addEventListener('click', function (event) {
      if (event.target === modal) {
        closeModal();
      }
    });

    // 👉 BUTTON ACTIONS
    document.getElementById('btn-residential')?.addEventListener('click', () => {
      closeModal();
      window.location.href = '/residential-services';
    });

    document.getElementById('btn-commercial')?.addEventListener('click', () => {
      closeModal();
      window.location.href = '/services';
    });
	  
// 	 document.getElementById('btn-newsletter')?.addEventListener('click', () => {
//       closeModal();
//       window.location.href = '/';
//     });  
	  

  });
  </script>
  <?php
});
