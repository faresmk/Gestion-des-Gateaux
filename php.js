window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });





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
              { 'right'   : '320px' }, 
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


let progress = document.getElementById('progressbar');
let totalheight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function(){
    let progressHieght = (window.pageYOffset / totalheight) * 100;
    progress.style.height = progressHieght + "%";
}
/*
const buttons = document.querySelectorAll('span');
buttons.forEach(btn => {
  btn.addEventListener('click', function(e) {

    let v = e.clientX - e.target.offsetLeft;
    let z = e.clientY - e.target.offsetTop;
    
    let ripples = document.createElement('span');
      ripples.style.Left = v + 'px';
      ripples.style.Top = z + 'px';
      this.appendChild(ripples);
      document.getElementsByTagName('span')[6].className = "addadmin1"
  
      setTimeout(()=> {
        ripples.remove()
      },1000);
  })
})*/