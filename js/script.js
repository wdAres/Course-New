


// faq starts

$(document).ready(function(){



  // $(window).bind('scroll', function () {
  // var x = $('.navbar-template .scrolling-sm ul li.active').position();
            
  // var m = '138.5500030517578';
  // var p = x.left - m ;
  // console.log(p);
  // console.log(x.left);
  // console.log(m);
  // $('.scrolling-sm').scrollLeft(p);

  // });



  


    $('.answer').slideUp();
    $('.answer.show').slideDown();
  
    $(document).on('click', '.question',(function(){
      // $('.answer').slideToggle()
    
      $(this).parent().find('.answer').slideToggle();
    }));
  
  
      $('.dropdown').slideUp();
      $('.dropdown.show').slideDown();
    
      $(document).on('click', '.dropdown-btn',(function(){
        // $('.answer').slideToggle()
      
        $('.dropdown').slideToggle();
      }));
  
      $('.navbar-toggler').click(function(){
          $('.sidebar, .sidebar_bg').toggleClass('show')
        });
        $('.sidebar_bg').click(function(){
          $('.sidebar, .sidebar_bg').removeClass('show')
        });
  
       
     
    
  });
  
  // 
  // $('.plus3').click(function(){
  //   $('.answer3').toggleClass('show')
  // });
  // $('.plus4').click(function(){
  //   $('.answer4').toggleClass('show')
  // });
  
  $('.menu-close').click(function(){
    $('.navbar-collapse').removeClass('show');
  });
  $('.apply-now').click(function(){
    $('.apply-now-modal, .modal-bg').addClass('show')
  });
  $('.fa-times').click(function(){
    $('.apply-now-modal, .modal-bg').removeClass('show')
  });
  
  $('.download-brochure').click(function(){
    $('.download-brochure-modal, .modal-bg').addClass('show')
  });
  $('.download-brochure-modal-close').click(function(){
    $('.download-brochure-modal, .modal-bg').removeClass('show')
  });
  
  
  $('.master-certificate-btn-one').click(function(){
    $('.certificate-modal-one').addClass('show')
  });
  $('.certificate-close-btn').click(function(){
    $('.certificate-modal-one').removeClass('show')
  });
  
  $('.master-certificate-btn-two').click(function(){
    $('.certificate-modal-two').addClass('show')
  });
  $('.certificate-close-btn').click(function(){
    $('.certificate-modal-two').removeClass('show')
  });
  
  $('.more-skill').click(function(){
    $('.what-role-skill-to-master-max-height').toggleClass('show')
  });
  
  $('.more-img').click(function(){
    $('.what-tools-images-max-height').toggleClass('show')
  });
  
  
  
  $('.curriculum-answer').slideUp();
    $('.curriculum-answer.show').slideDown();
  $(document).on('click', '.curriculum-topics',(function(){
    $(this).toggleClass('show')
    $(this).parent().toggleClass('show').find('.curriculum-answer').slideToggle();
    $(this).parent().siblings('.card').removeClass('show').find('.curriculum-answer').slideUp();
    $(this).parent().siblings('.card').removeClass('show').find('.curriculum-topics').removeClass('show');
  }));
  
  // $('.curriculum-topic').click(function () {
  //   $(this).parent().toggleClass('show').find('.curriculum-answer').slideToggle();
  //   $(this).parent().siblings('.card').removeClass('show').find('.curriculum-answer').slideUp();
  
  $('.curriculum-topics').click(function(){
    
  });
  $('.project-tab').click(function(){
    $('.project-tab').removeClass('active')
    $(this).toggleClass('active')
  });
  
  
  $('.master-curriculum-view-more-btn').click(function(){
  });
  $(document).on('click', '.master-curriculum-view-more-btn',(function(){
    $(this).toggleClass('opened');
    $(this).parent().find('.master-curriculum-minimum-height').toggleClass('master-curriculum-maximum-height');
  }));
  
  
  // $('.nav-tabs .project-tabs').click(function(){
  //   $('.project-tabs.nav-link').removeClass('active');
  //   $(this).addClass('active');
  //   $('.master-career-services-tab-content .tab-pane').removeClass('active show');
  
  //   let index = $('.nav-tabs .project-tabs').index();
  
  //   console.log(index)
  //   $('.master-career-services-tab-content .tab-pane').eq(index).addClass('active');
  // });
  
  
  $(document).on('click','.nav-tabs .project-tabs', function(){
    $('.project-tabs.nav-link').removeClass('active');
          $(this).addClass('active');
         let i = $(this).parent().index();
         $('#master-career-services-tab-content .tab-pane').removeClass('active show');
  
         $('#master-career-services-tab-content .tab-pane').eq(i).addClass(' active show');
  
         console.log(i);
  })
  
  
  $(document).on('click','.nav_tab .career_nav_item', function(){
    $('.career_nav_item').removeClass('active');
          $(this).addClass('active');
         let i = $(this).index();
         $('.tab-content .tab-pane').removeClass('show');
  
         $('.tab-content .tab-pane').eq(i).addClass('show');
  
         console.log(i);
  })
  
  
  

  
  // $('.project-tabs-one').click(function(){
  //   $('.tab-pane-two, .tab-pane-three').removeClass('active');
  //   $(this).addClass('active');
  // });
  // $('.project-tabs-three').click(function(){
  //   $('.tab-pane-two, .tab-pane-one').removeClass('active');
  //   $(this).addClass('active');
  // });