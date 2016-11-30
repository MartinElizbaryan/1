$(document).ready(function(){
    /*var mylogo=$('#forheader img');
     mylogo.hide(3000);
    mylogo.show(3000);
    mylogo.hide(3000).show(3000);*/
    /* homework 68
    var myLinkjQuery=$(' a[href$=PDF]');
    myLinkjQuery.hide().text('new text').show(2000);*/
    /* homework 69
    $('img:not([width=900])').hide(5000);*/
    /*homework 70  
       function wCAlc(element){
         var idFull="#"+element;
         var wElement=$(idFull).width();
         var hElement=$(idFull).height();
          $('#forresults').text('width is ' + wElement + ' height is ' + hElement);
       
    }
     wCAlc('div_form_1');
                            */
   
    /* homework 72 ???
    function elementOut(element,mytime) {
       
        if( mytime>10000 || mytime<500 || isNAN(mytime))
        {
            return false;
           
           
        }
        else{
             var idFull ='#'+element;
              $(idFull).fadeOut(mytime);
           
           
        }
   
    }
    elementOut('div_for_img',5000); */
    /*function change(element,atribute,myvalue){
        var idFull='#' + element;
            $(idFull).attr(atribute,myvalue);
       
    }
   
    change('moto_table','title','New title'); */
   
    /*homework 77
    $('#my_h3 span').removeClass('pq');
    $('#my_h3 span').css({
        'border': '1px solid #cc0000',
        'padding': '5px',
        'background-color': '#f6f6f6'
    }); */
    /* homework 78
    $('#img_2').css({'border':'1px solid #333333'}).animate({'borderWidth':'5px'},5000).fadeOut(5000);
    */
    /*$ homework 79
    ('body').append('<p id="newparagraph"> pieace of shit </p>');
    $('#newparagraph').css({'background-color':'#000000',
                             'color':'#ffffff'
   
                                                            }); */
    /*homework 80
    $('img').each( function(){
       
       
        if($(this).height()>50 && $(this).height()<100){
           
            $(this).css({'border':'2px solid #cc0000'});
        }
       
       
    }); */
    /* lesson 81
      var myDiv=$('div').size();
      alert(myDiv);
      $('div').get(0);// perviy blok div */
     
      /* lesson 82
      var myDiv=$('div_for_img').clone();
      $('#my_form').after(myDiv);
      var myForm= $('myform').remove();
      ('#moto_table').before(myForm); */
     /* homework 88_1
     $('#moto_models li').click(function(){
          var myText=$(this).text();
          $('#moto_table ').append('<tr><td>' + myText +' </td><td>25000</td></tr>');
         
         
         
      });*/
    /* homework 88_2
    var tableStr= $('#moto_table tr');
    tableStr.mouseover(function(){
         
         $(this).addClass('svet');
         
      });
        tableStr.mouseout(function(){
         
         $(this).removeClass('svet');
         
      }); */
   
/* homework 89
 
$('#my_button').hover(function(){
   
$(this).css({
    'background-color':'#32375D',
    'color':'#ffffff'  
    });
   
   
   
}, function(){
   
   
    $(this).css({
        'background-color':'#f6f6f6',
        'color':'#2C2C2C'
});
});
*/
/* ????
 $('#moto_table tbody tr').toggle(function(){
 
             $(this).addClass('svet');
   
   
},
function(){
   
      $(this).removeClass('svet');
   
   
}); */
/* homework90
$('#div_for_img img').toggle(function(eventObjekt){
   
    if(eventObjekt.shiftKey){
       
        $(this).css({'border':'4px solid #cc0000'});
    }
    else{
        $(this).css({'border':'4px solid #333333'});
       
    }
},
function(){
    $(this).css({'border':'none'});
});; */
/*
$('#my_button').click(function(eventObject){
   
    var answer=confirm('Are you sure that this is your personal data?');
    if(!answer){
        eventObject.preventDefault();
    }
   
}); */
/*$('#small a').click(function(eventObject){
    if($('#big img').attr('src')!=$(this).attr('href')){
   
    $('#big img').hide().attr('src',$(this).attr('href'));
    $('#big img').load(function(){
        $(this).fadeIn(2000);
   
       
    });
    }
    eventObject.preventDefault();
});
$('#switchGal').toggle(function(){
    $('#gallery').slideDown(2000);
   
},
   function(){
        $('#gallery').slideUp(2000);
       
       
       
   });
   $('#small a img').click(function(){
       $('#small a img').fadeTo(1000,1);
       $(this).fadeTo(1000,0.6);
   });
   */
  /* $('#hideForm').toggle(function(){
       
       $('#my_form').slideUp(2000);
   },
   function(){
   $('#my_form').slideDown(2000);
   });*/
   /*  $(':checkbox').fadeOut(5000); */
  /* $('#my_form :radio:checked').fadeOut(3000);*/
  /* homework 97
  var myEmail=$('#email');
  myEmail.focus(function(){
   
    if($(this).val()==$(this).attr('defaultValue')){
       
        $(this).val('');
    }
});
myEmail.blur(function(){
   
    if($(this).val==''){
        $(this).val($(this).attr('defaultValue'));
    }
       
}); */
}); //konec ready
 
 
 
 
 
 
 
  // var allImg=document.getElementsByTagName("img");
  //alert("we have "+ allImg.length + " images");
  // var moto= document.getElementById("img_1");
  //alert(moto.width);
  //$('p');
  //$('#main_h1');
  //$('#main_h1 +p');
  //$('#my_links a[href^=documents]');
  //$('#forfooter img[title=Производители]');
  //$('img [src$=jpg]');
  //$('img [src*=moto]');