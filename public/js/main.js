window.addEventListener('scroll', function (e){

    var header= document.querySelector('.head-container');
    var head_logo = document.querySelector('.head-logo');
    var left = document.querySelector('.head-container .left');
    var right_texte = document.querySelector('.head-container .right');
    
    if(screen.width > 918){
      
      if (this.window.scrollY >= 1){
      //header.style.height = "160.5px";
       left.style.height = "69px";
       right_texte.style.height = "103px";
       head_logo.style.height = "100px";
       head_logo.style.textAlign = "center";
       console.log(window.screen.width)
     } else{
       //header.style.height = "217.5px";
       left.style.height = "106px";
       right_texte.style.height = "140px";
       head_logo.style.height = "9em";
     }
    }else{
      //alert(screen.width)
    }
  })