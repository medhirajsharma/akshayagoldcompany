        <style>
            @media only screen and (max-width: 600px) {
                .text-end-{
                    text-align: center!important;
                    
                }
            }
          </style>
<section class="footer" style="background-color: #000;">
    
  <div class="container pt-5 pb-5 ">
      <div class="row text-white">
        <div class="col-lg-3 col-md-6 col-sm-12 h-center">
          <h4 class="border_style text-end-">WARNING </h4>

            <div class="pt-3 ps-0 text-end-">

              <img src="<?php echo base_url();?>/assets/images/warning.webp" width="111px" height="62px"><br>
              <span class="pt-3 ps-0 ">
                Akshaya Gold does not buy Stolen or unauthentic gold. Selling Stolen gold or fake gold is a crimimal offense and if found 
                person will handover to law enforcement authorities . Any one age of 21 or less can sell gold only with parent/guardian's written letter.
              </span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 quick_link h-center">
          <h4 class="border_style text-end-">BRANCHES NEAR YOU</h4>
          <ul class="pt-3 ps-0">
              <style>
                  .zoom-in-zoom-out {
  margin: 24px;
  /*width: 50px;*/
  animation: zoom-in-zoom-out 2s ease-out infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}
              </style>
            <li class="">
                <div class="zoom-in-zoom-out text-end-" ><a href="/branch_locator">Branch Locator</a></div>
                </li>   
          </ul>
          <div class="p-2 mt-2 text-center">
            <img src="/assets/images/logo.webp" width="112px" height="109px">
          </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 branch_locator ">
          <h4 class="border_style">OUR SERVICES</h4>
          <ul class="pt-3 ps-0 our_ser">
            <li><a href="<?php echo base_url();?>sell-gold">Sell Your Gold</a></li><br>
            <li><a href="<?php echo base_url();?>release-pledged-gold">Release Pledge Gold</a></li><br>
            <li><a href="<?php echo base_url();?>gold-buyers">Gold Buyers</a></li><br>
            <!--<li><a href="#">Close Gold loan </a></li><br>-->
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 contact_s ">
          <h4 class="border_style ">Contact Us</h4>
          <div class="pt-3 ps-0">
            <a href="tel:8880140140" style="text-decoration: none; color: #fff;">
                <b>Call : 8880140140  </b> </a><br><br>
            <a href="mailto:akshayagoldcompany916@gmail.com" style="text-decoration: none; color: #fff;">
               <b> Email : akshayagoldcompany916@gmail.com </b></a><br><br>
               
            <a href="JavaScript:" style="text-decoration: none; color: #fff;">
              <b> State Presence : Tamilnadu , karnataka </b></a><br><br>
        </div>

          <div class="footer_icon text-end text-end-">
            <ul >
              <li><a href="https://www.facebook.com/akshayagoldcompany/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true" style="background-color:#3a63bd; color: #fff;"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCB16b6mP9CelAdePfhDpjbA" target="_blank"><i class="fab fa-youtube" aria-hidden="true" style="background-color:#ff0600; color: #fff;"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-instagram" aria-hidden="true" style="background-image: linear-gradient(to right, #fdaa4e, #ff2130,#ad349e ); color: #fff;"></i></a></li>
            </ul>
          </div>
        </div>

      </div>
  </div>
</section>
<?php //echo footer_menu;?>

   <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link async rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js'></script>
<script>
      const swiper = new Swiper(".swiper", {
	// Optional parameters
	direction: "horizontal",
	loop: true,
	autoHeight: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination"
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}

	// And if we need scrollbar
	/*scrollbar: {
    el: '.swiper-scrollbar',
  },*/
});
  </script>
<script>
function inVisible(element) {
  //Checking if the element is
  //visible in the viewport
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  //animating the element if it is
  //visible in the viewport
  if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
    animate(element);
}


function inVisible2(element) {
  //Checking if the element is
  //visible in the viewport
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  //animating the element if it is
  //visible in the viewport
  if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
    $(element).addClass(' activeanimate')
}

function animate(element) {
  //Animating the element if not animated before
  if (!element.hasClass('ms-animated')) {
    var maxval = element.data('max');
    var html = element.html();
    element.addClass("ms-animated");
    $({
      countNum: element.html()
    }).animate({
      countNum: maxval
    }, {
      //duration 5 seconds
      duration: 5000,
      easing: 'linear',
      step: function() {
        element.html(Math.floor(this.countNum) + html);
      },
      complete: function() {
        element.html(this.countNum + html);
      }
    });
  }

}

//When the document is ready
$(function() {
  //This is triggered when the
  //user scrolls the page
  $(window).scroll(function() {
    //Checking if each items to animate are 
    //visible in the viewport
    $("span[data-max]").each(function() {
      inVisible($(this));
    });
  })
  
   $(window).scroll(function() {
    //Checking if each items to animate are 
    //visible in the viewport
    $(".heading_border").each(function() {
      inVisible2($(this));
    });
  })
  
  
   
});
$('.herder_logo').find('img').attr('src','/uploads/admin/<?php echo $c_setting['logo']; ?>');

</script>
 <script>
          $("#login_Box_Div").show();
        

        $(document).ready(function(){
            
            $(".read_more_btn").click(function(){
                $(".read_more_data").toggle();
                
            });
       });
  </script>
  
  <script>
    $('.location_btn').click(function(event){
        event.preventDefault();
        
        // alert('done');
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        } else {
        // x.innerHTML = "Geolocation is not supported by this browser.";
        
        $('.lat_long').html("<h1><span style='color: green;'>GeeksforGeeks"+
              "</span><br>This is the content inside the div"+
              " after changing innerHTML</h1>")
        }
        
    });
    
    function showPosition(position) {
       
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        var url = "welcome/branch_lat_long";
        $.ajax({
          url: url,
          type: "POST",
          data:{"lat":lat,
                "long":long
         }
        }).done(function(data) {
            $(".data-list").html(data);
             
        });

    }
</script>

<a href="tel:+918880140140" target="_blank">
    <div id="callme">
  <div id="callmeMain"></div>
</div></a>
<style>

 


#callme {
    position: fixed;
    left: 50px;
    bottom: 100px;
    width: 70px;
    height: 70px;
    cursor: pointer;
 
    z-index: 99990;
    margin: 13px -36px -45px -34px;
    color: rgb(191 58 58);
    /*color:rgb(8 253 39);*/
}

#callme #callmeMain {
    -moz-border-radius: 50% !important;
    -webkit-border-radius: 50% !important;
    border-radius: 50% !important;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
     background-clip: padding-box; 
     background-color:rgb(30 138 34);
     width: 70px; 
     height: 70px; 
    -webkit-animation: zcwmini2 1.5s 0s ease-out infinite;
    /*-moz-animation: zcwmini2 1.5s 0s ease-out infinite;*/
    animation: zcwmini2 1.5s 0s ease-out infinite;
}

#callme #callmeMain:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-image: url(https://sungoldbuyers.com/assets/images/mini.png);
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-animation: zcwphone2 1.5s linear infinite;
    /*-moz-animation: zcwphone2 1.5s linear infinite;*/
    animation: zcwphone2 1.5s linear infinite;
}

@-webkit-keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    100% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
}
@-moz-keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    100% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
}
@keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    100% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
}
@-webkit-keyframes zcwphone2 {
    0% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    25% {-ms-transform:rotate(30deg);-webkit-transform:rotate(30deg);transform:rotate(30deg);}
    50% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    75% {-ms-transform:rotate(-30deg);-webkit-transform:rotate(-30deg);transform:rotate(-30deg);}
    100% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
}
@-moz-keyframes zcwphone2 {
    0% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    25% {-ms-transform:rotate(30deg);-webkit-transform:rotate(30deg);transform:rotate(30deg);}
    50% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    75% {-ms-transform:rotate(-30deg);-webkit-transform:rotate(-30deg);transform:rotate(-30deg);}
    100% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
}
@keyframes zcwphone2 {
    0% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    25% {-ms-transform:rotate(30deg);-webkit-transform:rotate(30deg);transform:rotate(30deg);}
    50% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    75% {-ms-transform:rotate(-30deg);-webkit-transform:rotate(-30deg);transform:rotate(-30deg);}
    100% {-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);}
}
</style>
<script type="text/javascript">
  var date_now = new Date();
  var hours    = date_now.getUTCHours();
  var minutes  = date_now.getUTCMinutes();
  if((hours < 13 || (hours == 14 && minutes <= 30)) && (hours >=3 || (hours == 2 && minutes >= 30)))
  {
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"8282e4bbc7dc68e7f9ddd63cf3efaf87dfc13a1e2cfa0ec4cc1e332e8dc7c707a4307fbf270af67b5b5d7e2e6362208e", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
  }
</script>