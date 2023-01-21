<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-12 row mb-5 mb-md-0">
        <div class="col-md-7 col-12 mb-4 mb-md-0">
          <h3>ABOUT US</h3>
          <p class="min2-font">Online studies are designed for students whose scheduling commitments would otherwise make it difficult to enroll in a full-time higher education program. Offered for individual courses, diplomas, associate’s degrees and certificate programs, online studies are a valuable option. The resulting qualification a graduate receives after successfully completing.</p>
        </div>
        <div class="col-md-5 col-12">
          <h3>POLICIES</h3>
          <ul>
            <li>Terms & Conditions</li>
            <li>Privacy & Policy</li>
            <li>Refund/Cancelation Policy</li>
          </ul>
          <a href="https://play.google.com/store/apps/details?id=co.jorah.sripa&hl=en_IN&gl=US">
            <img src="./assets/playstore.png" alt="" class="playstore">
          </a>
        </div>
      </div>
      <!-- <div class="col-md-5 col-12 mb-5 mb-md-0">
        <h3>LINUX2CLOUD COURSE DETAIL</h3>
        <div class="foot-video">
          <iframe  src="https://www.youtube.com/embed/C1jjpTSyZiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div> -->
    </div>

  </div>
  <div class="foot-bottom">
    <div class="container">
      <div>
        <div>
          <img src="./assets/fevicon.png" alt="" class="me-2">
        </div>
        <p class="mb-0">Copyright © 2020 Linux2Cloud PVT LTD. All Rights Reserve.</p>
      </div>
    </div>
  </div>

</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- swiper-carousel -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>

<script>
  $(window).bind('scroll', function() {
    var currentTop = $(window).scrollTop() + 100;
    var elems = $('.scrollspy');
    elems.each(function(index) {
      var elemTop = $(this).offset().top;
      var elemBottom = elemTop + $(this).height();
      if (currentTop >= elemTop && currentTop <= elemBottom) {
        var id = $(this).attr('id');
        var navElem = $('a[href="#' + id + '"]');
        navElem.parent().addClass('active').siblings().removeClass('active');
      }
    })
  });
</script>

<script>
  var swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".fa-chevron-right",
      prevEl: ".fa-chevron-left",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
  });


  
  $('input[type=number]').parent().append("<div class='span-danger'><div/>");
  $(document).on('input', 'input[type=number]', function() {

    const inp = this ;
    // console.log(inp);

    let length = $(inp).val().length;

    // console.log('clicked', length);
    if (length != 10) {
      $(inp).parent().find('.span-danger').html("<span>Enter 10 Digit Mobile Number <span/>");
      $(inp).parent().parent().find('button[type=submit]').attr('disabled', 'disabled');
    } else {
      $(inp).parent().find('.span-danger').html("<span><span/>");
      $(inp).parent().parent().find('button[type=submit]').removeAttr('disabled');
    }
  })


    $("form").on("submit", function(e) {
      var dataString = $(this).serialize();
      var Ele = this; 
      alert('form submitted!')
      e.preventDefault(e);
      $.ajax({
            type: "POST",
            url: "index.php",
            data: dataString,
            success: function() {
              
              // console.log(this)
                $('input').val("");
                $('textarea').val("");
                // $(`.msg_reply`).html("<div class='message'></div>");
                // $(".message")
                //     .html("<h5>Contact Form Submitted!</h5>")
                //     .append("<p>We will be in touch soon.</p>")
                //     .hide()
                //     .fadeIn(1500, function() {
                //         $(".message").append(

                //         );
                //     })
                //     .fadeOut(3000, function() {
                //         $(".message").append(

                //         );
                //       });
            }
        });
    });


    
  var pdfUrl = "./docs/RHCSA and RHCE PDF.pdf";

$('#form-contact').on('submit', function () {
    window.open(pdfUrl, '_blank');
});


</script>


</body>

</html>