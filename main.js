AOS.init({
    duration: 800,
    easing: "slide",
  });


  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  (function ($) {
    "use strict";
    $(window).stellar({
      responsive: false,
      parallaxBackgrounds: true,
      parallaxElements: true,
      horizontalScrolling: false,
      hideDistantElements: false,
      scrollProperty: "scroll",
    });
    //   full height
    var fullHeight = function () {
      $(".js-fullheight").css("height", $(window).height());
      $(window).resize(function () {
        $(".js-fullheight").css("height", $(window).height());
      });
    };
    fullHeight(); //call that function
  
    // navbar scroll

  

    //   carousel
    var carousel = function () {
      $(".home-slider").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        nav: true ,
        dots: false ,
        autoplayHoverPause: false,
        items: 1,
        navText: [
          "<span class = 'ion-ios-arrow-back'></span>",
          "<span class = 'ion-ios-arrow-forward'></span>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    };
    carousel();
    $("#book_date").datepicker({
      format: "m/d/yyyy",
      autoclose: true,
    });
    $("#book_time").timepicker();
  })(jQuery);

  var w = window.innerWidth,
    h = window.innerHeight,
    canvas = document.getElementById('bubble'),
    canvas1 = document.getElementById('bubble1'),
    ctx = canvas.getContext('2d'),
    ctx1 = canvas1.getContext('2d'),
    rate = 60,
    arc = 100,
    time,
    count,
    size = 7,
    speed = 20,
    lights = new Array,
    colors = ['#c8a97e','#ffffff','#704227','#cf7693'];

canvas.setAttribute('width',w);
canvas.setAttribute('height',h);
canvas1.setAttribute('width',w);
canvas1.setAttribute('height',h);

function init() {
  time = 0;
  count = 0;

  for(var i = 0; i < arc; i++) {
    lights[i] = {
      x: Math.ceil(Math.random() * w),
      y: Math.ceil(Math.random() * h),
      toX: Math.random() * 5 + 1,
      toY: Math.random() * 5 + 1,
      c: colors[Math.floor(Math.random()*colors.length)],
      size: Math.random() * size
    }
  }
}

function bubble() {
  ctx.clearRect(0,0,w,h);
  ctx1.clearRect(0,0,w,h);

  for(var i = 0; i < arc; i++) {
    var li = lights[i];
    
    ctx.beginPath();
    ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx.fillStyle = li.c;
    ctx.fill();

    ctx1.beginPath();
    ctx1.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx1.fillStyle = li.c;
    ctx1.fill();
    
    li.x = li.x + li.toX * (time * 0.05);
    li.y = li.y + li.toY * (time * 0.05);
    
    if(li.x > w) { li.x = 0; }
    if(li.y > h) { li.y = 0; }
    if(li.x < 0) { li.x = w; }
    if(li.y < 0) { li.y = h; }
  }
  if(time < speed) {
    time++;
  }
  timerID = setTimeout(bubble,1000/rate);
}
init();
bubble(); 



//navigation (this is my code)
var animation = 'easeOutCubic';
    delay     = 60;

$(document)
  .on('click', '.fa-bars', function(){
    var i = 0;
    $('header').before($('#bubble'));
    $('#bubble').fadeIn();
    $('#mainnav').find('li').each(function(){
      var that = $(this);
      i++;
      (function(i, that){
          setTimeout(function(){
            that
              .animate(
                { 'right'   : '290px' }, 
                { duration : 100, 
                  easing   : animation })
              .fadeIn({queue: false});
          }, delay * i)
      }(i, that))
    }); 
    $('.fa-bars').fadeOut(100,function(){
      $(this)
        .removeClass('fa-bars')
        .addClass('fa-times')
        .fadeIn(); 
    });
  })
  .on('click', '#bubble, .fa-times', function(){ 
    $('#bubble').fadeOut();
    $('#mainnav').find('li')
      .animate(
        { 'right'   : '-200px' }, 
        { duration : 200 })
      .fadeOut({queue: false});
    
    $('.hamb').fadeOut(100, function(){
      $(this)
        .find($('i'))
        .removeClass('fa-times')
        .addClass('fa-bars')
        .end()
        .fadeIn();
    });
  }) 





var gallery2 = document.getElementById('gellry1')



buildTable1(gallery,gallery2)

function buildTable1(data,gallery2){
  for (var i = 0; i < data.length; i++){
    var row = `
<div class="col-lg-3 col-md-4 col-6 p-0">
  <div class="gallery__pic">
    <img src="${data[i].picgallery}" alt="">
  </div>
</div>
`
gallery2.innerHTML +=row
  }
}

var seet = document.getElementById('set1')
buildTable2(set,seet)
 seet = document.getElementById('set2')
buildTable2(set,seet)
 seet = document.getElementById('set3')
buildTable2(set,seet)

function buildTable2(data,seet){
  for (var i = 0; i < data.length; i++){
    var row = `<div><img src="${data[i].s_e_t}"></div>`
    seet.innerHTML +=row


  }
}




  function add()
  {
    
    var des = document.getElementById("rowarea");
    
    if(document.getElementById("ck1").checked)
    {
      
      var tx = `<div class="inputbox" id = "inputbox" >
      <textarea  required  id = "move" name = "observ" ></textarea>
      <span class="text">Commentaire</span>
      <span class="Line"></span>
      </div>`;

      des.innerHTML +=tx;
    }
    else
    {
      var remo = document.createElement('div');
      var old = document.getElementById('inputbox');
      var card = document.querySelector('.ffs')

       card.replaceChild(remo, old);
      

    }
    
  }

 

  


function validation()
{

 



  
  
   var name1 = document.getElementById("name1").value;
   var mail = document.getElementById("mail").value;
   var num = document.getElementById("num").value;
   var Address = document.getElementById("address").value;
  
   var error_message = document.getElementById("error_message");
   var text;
   var i = 1;
   error_message.style.padding = "10px";

   if(name1.length <5)
   {
       text = "Please Enter Valid First Name"
       error_message.innerHTML = text;
        i = 0;
       return false;
   }
      if(mail.indexOf("@") == -1 || mail.length < 6)
   {
       text = "Please Enter Valid Email"
       error_message.innerHTML = text;
        i = 0;
       return false;
   }
   if(isNaN(num) || num.length != 10)
   {
       text = "Please Enter Valid Phone Number (10 numbers) "
       error_message.innerHTML = text;
        i = 0;
       return false;
   }
   if(Address.indexOf("Tours") == -1 || Address.length < 10 )
   {
     text = "you have to be in tours and please enter valid address"
     error_message.innerHTML = text;
      i = 0;
     return false;
   }
  

}



let progress = document.getElementById('progressbar');
let totalheight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function(){
    let progressHieght = (window.pageYOffset / totalheight) * 100;
    progress.style.height = progressHieght + "%";
}







 