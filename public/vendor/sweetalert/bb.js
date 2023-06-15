
function b1() {
  window.location.reload(true);
}
function b2() {

  document.querySelector('body').style.background="linear-gradient( rgb(87, 255, 255) ,rgb(255, 255, 255) , rgb(255, 255, 255) )";
  document.querySelector('body').style.color="black";

  document.querySelector('.con2').style.background="linear-gradient( -60deg , rgb(255, 230, 255) , rgb(255, 255, 255) ,rgb(255, 255, 255) ,  rgb(190, 255, 255) )";
  document.querySelector('.con2').style.color="black";

  document.querySelector('.b2').style.background="white";
  document.querySelector('.b2').style.filter="drop-shadow(0px 0px 0px black)";
  document.querySelector('.b1').style.color="black";
  document.querySelector('.b1').style.background="black";
  document.querySelector('.night_mood').style.background="white";
  
  document.querySelector('.btnn2').style.background="black";
  document.querySelector('.btnn2').style.color="white";

  document.querySelector('#btn1').style.background="black";
  document.querySelector('#btn1').style.color="white";

  document.querySelector('#btn2').style.background="white";
  document.querySelector('#btn2').style.border="1px solid black";
  document.querySelector('#btn2').style.color="black";

  //home
  document.querySelector('.advantages-content h2').style.color="black";
  document.querySelector('.advantages-content p').style.color="black";
  document.querySelector('.img2').style.display="none";
  

  document.querySelector('.btnn1').style.background="white";
  document.querySelector('.btnn1').style.color="black";
  
  //advangates
  document.querySelector('.card1').style.background="white";
  document.querySelector('.card1').style.color="black";
  document.querySelector('.advantages h2').style.color="black";

  document.querySelector('.card2').style.background="white";
  document.querySelector('.card2').style.color="black";

  document.querySelector('.card3').style.background="white";
  document.querySelector('.card3').style.color="black";

  document.querySelector('.con3').style.background="linear-gradient( -60deg , rgb(255, 230, 255) , rgb(255, 255, 255) ,rgb(255, 255, 255) ,  rgb(190, 255, 255) )";
  document.querySelector('.con3').style.color="black";

  //footer
  document.querySelector('footer').style.color="black";
  document.querySelector('.fo_ce').style.color="black";

  //services
  document.querySelector('.services').style.color="black";
  document.querySelector('.se_h').style.color="black";

  //packages
  document.querySelector('.packages .container h2').style.color="black";
  document.querySelector('.packages h2').style.color="black";
  document.querySelector('.ro').style.color="black";

  //chat
  document.querySelector('.chat-body').style.background="white";
  document.querySelector('.chatbox__footer').style.background="white";
  document.getElementsByClassName('message2').style.background="white";
  
  //contact_us
  document.querySelector('span').style.color="black";
  

  //header
  document.querySelector('.offcanvas').style.background="linear-gradient( -60deg , rgb(255, 230, 255) , rgb(255, 255, 255) ,rgb(255, 255, 255) ,  rgb(190, 255, 255) )";

  //card and button
  let comn1 = document.getElementsByClassName("card");
  let bt = document.getElementsByClassName("btn");
  for(var i=0 ; i<comn1.length ; i++){
    comn1[i].style.background="white";
  }
  for(var i=0 ; i<bt.length ; i++){
    bt[i].style.color="black";
  }
}
