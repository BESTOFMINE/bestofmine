function submitForm(){$.ajax({type:"POST",url:"form-process.php",data:jQuery("#contactForm").serialize(),success:function(o){"success"==o?formSuccess("contactForm"):(formError("contactForm"),submitMSG(!1,o))}})}function submitFormPopup(){$.ajax({type:"POST",url:"popup-email.php",data:jQuery("#bookPdfFrom").serialize(),success:function(o){"success"==o?(formSuccess("bookPdfFrom"),startDownload()):(formError("bookPdfFrom"),submitMSG(!1,o))}})}function startFreeTrialForm(){$.ajax({type:"POST",url:"form-process-trial.php",data:jQuery("#startFreeTrial").serialize(),success:function(o){"success"==o?formSuccess("startFreeTrial"):(formError("startFreeTrial"),submitMSG(!1,o))}})}function startDownload(){window.open("Email-Marketing-Infographics.pdf","Download")}function formSuccess(o){$("#"+o)[0].reset(),submitMSG(!0,"Thanks for contacting us! We will be in touch with you shortly.")}function formError(o){$("#"+o).removeClass().addClass("shake animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass()})}function submitMSG(o,t){if(o)var e="h5 mb-3 text-center tada animated text-success";else e="h5 mb-3 text-center text-danger";$("#msgSubmit").removeClass().addClass(e).text(t)}!function(c){function o(){c(window).width()<992&&c(window).scroll(function(){20<c(window).scrollTop()?c("#navbarSupportedContent").addClass("sticky"):c("#navbarSupportedContent").removeClass("sticky")})}c(".lazy").Lazy(),c(".case-slider").slick({infinite:!0,slidesToShow:2,slidesToScroll:1,dots:!1,arrows:!0,responsive:[{breakpoint:1100,settings:{slidesToShow:2,slidesToScroll:1,dots:!0,arrows:!1}},{breakpoint:992,settings:{slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1}}]}),c(".home-cs-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1,responsive:[]}),c(".expertise-slider").slick({slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,dots:!0,adaptiveHeight:!0,responsive:[{breakpoint:1200,settings:"unslick"},{breakpoint:767,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!0,adaptiveHeight:!0}}]}),c(window).on("resize",function(){c(".expertise-slider").slick("resize")}),o(),c(window).on("resize",o),c(".img-parallax").each(function(){var a=c(this),l=c(this).parent();function o(){var o=a.data("speed"),t=l.offset().top,e=c(this).scrollTop(),s=c(this).height(),i=l.innerHeight(),r=e+s;if(t<r&&e<t+i)var n=(r-t)*o/(s+i)*100+(50-50*o);a.css({top:n+"%",transform:"translate(-50%, -"+n+"%)"})}c(document).on({scroll:function(){o()},ready:function(){o()}})}),c(".alphabat-only").bind("keyup blur",function(){var o=c(this);o.val(o.val().replace(/[^a-zA-Z\s]/g,""))}),c(".numbers-only").bind("keyup blur",function(){var o=c(this);o.val(o.val().replace(/\D/g,""))}),c(".text-numbers-only").bind("keyup blur",function(){var o=c(this);o.val(o.val().replace(/[^a-zA-Z0-9]/g,""))}),c('input[type="text"], input[type="email"], input[type="tel"]').change(function(){this.value=c.trim(this.value)}),setTimeout(function(){c("#bookPDF").modal("show")},6e4),c("#contactForm").on("submit",function(o){o.isDefaultPrevented()?(formError(),submitMSG(!1,"Did you fill in the form properly?")):(o.preventDefault(),submitForm())}),c("#contactForm").on("submit",function(o){o.isDefaultPrevented()?(formError("contactForm"),submitMSG(!1,"Did you fill in the form properly?")):(o.preventDefault(),submitForm())}),c("#bookPdfFrom").on("submit",function(o){o.isDefaultPrevented()?(formError("bookPdfFrom"),submitMSG(!1,"Did you fill in the form properly?")):(o.preventDefault(),submitFormPopup())}),c("#startFreeTrial").on("submit",function(o){o.isDefaultPrevented()?(formError("startFreeTrial"),submitMSG(!1,"Did you fill in the form properly?")):(o.preventDefault(),startFreeTrialForm())}),c("#goToTop").click(function(){c("html").animate({scrollTop:0},"slow")}),c(".content").mCustomScrollbar({axis:"x"})}(jQuery),AOS.init({duration:1200});var mybutton=document.getElementById("goToTop");function scrollFunction(){20<document.body.scrollTop||20<document.documentElement.scrollTop?mybutton.style.display="block":mybutton.style.display="none"}window.onscroll=function(){scrollFunction()};