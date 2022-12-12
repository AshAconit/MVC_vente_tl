<!-- 
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
      </div>


      <aside-right-menu :lang='"it"'></aside-right-menu>
      <login-popup :lang='"it"'></login-popup>
    </div>
    <script src="<?php echo URL ;?>Publics/js/librairie/manifest.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/vendor.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/frontend.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/imageMapResizer.min.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/ScrollSpy.min.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/jquery.timelinr-0.9.7.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/modernizr-custom.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/snap.svg-min.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/bodymovin.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/aos.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/main-event.js"></script>
    <script src="<?php echo URL ;?>Publics/js/librairie/jquery-3.6.1.min.js"></script>
    <script src="<?php echo URL ;?>Publics/js/main.js"></script>
    <script src="<?php echo URL ;?>Publics/js/script.js"></script>
  
   <script type="application/javascript">
      //check if is touch device:

      var is_touch = null;

      try {
        document.createEvent("TouchEvent");
        is_touch = true;
      } catch (e) {
        is_touch = false;
      }

      // start

      if (is_touch) {
        // Determining swipe direction
        let touchStartY;
        document.addEventListener(
          "touchstart",
          function (e) {
            touchStartY = e.touches[0].clientY;
          },
          false
        );

        // To prevent iOs bounce effect on scroll, simply add height:100% & overflow:hidden to body/html

        document.addEventListener(
          "touchend",
          function (e) {
            let touchEndY = e.changedTouches[0].clientY;
            if (touchStartY > touchEndY + 5) {
              $("footer").addClass("show");
            } else if (touchStartY < touchEndY - 5) {
              $("footer").removeClass("show");
            }
          },
          false
        );
      } else {
        // Handling wheeling properly
        let deltaWheel = 0;
        let wheelTimeout = 0;
        document.addEventListener("wheel", function (event) {
          deltaWheel += event.deltaY;
          clearTimeout(wheelTimeout);
          wheelTimeout = setTimeout(function () {
            if (deltaWheel < -5) {
              $("footer").removeClass("show");
            }
            if (deltaWheel > +5) {
              $("footer").addClass("show");
            }
            deltaWheel = 0;
          }, 10); // above 10 it sucks \w magic mouse
        });
      }

      $("[data-url]").on("click", function () {
        window.location.href = $(this).data("url");
      });
    </script>
    <script>
      $(window).on("load", function () {
        setTimeout(() => {
          anim.play();
        }, 400);

        setTimeout(function () {
          $(".loader").fadeOut();
        }, 1900);
      });
    </script>


</body>
</html>