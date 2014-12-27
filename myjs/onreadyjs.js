$(document).ready(function() { 


  var prgs=0;
  var page=1;
  var error=true;

  $('#myCarousel').carousel('pause');



  $('#gradDegree').select2();  

     

  $('#nextButton').click(function(){


    if($('#myCarousel .active').index('#myCarousel .item')==0)
    {
      error=true;
     if($('#userName').val().trim()=="")
     {
       document.getElementById("userNameGroup").className="has-error";
       error=false;
     }
     else{

      document.getElementById("userNameGroup").className="has-success";
    }

    if(!validateEmail())
    {
     document.getElementById("userMailGroup").className="has-error";
     error=false;
    }
    else
    {

      document.getElementById("userMailGroup").className="has-success";
    }

    if($('#e1').select2('val') == "")
    {
      document.getElementById("userUgUnivGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userUgUnivGroup").className="has-success";
    }

    if($('#userUgMajor').val().trim()=="")
    {
      document.getElementById("userUgMajorGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userUgMajorGroup").className="has-success";
    }

    if($('#userUgGpa').val().trim()=="")
    {
      document.getElementById("userUgGpaGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userUgGpaGroup").className="has-success";
    }

    if(error)
    {

      $('#myCarousel').carousel('next');
      prgs+=20;      
      $('.progress-bar').css('width', prgs+'%').attr('aria-valuenow', prgs);
      $('#prevButton').css('visibility','visible');
      $error=true;
      page++;
      alert($('#pgUniv').select2('val')+"yeah");
    }
  }//end of page 1 js

  if($('#myCarousel .active').index('#myCarousel .item')==1)
  {

    if($('#gre').val().trim()=="")
    {
      document.getElementById("GreGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("GreGroup").className="has-success";
    }

    if($('#toefl').val().trim()=="")
    {
      document.getElementById("toeflGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("toeflGroup").className="has-success";
    }

     if($('#pgUniv').val().trim()=="")
    {
      document.getElementById("userPgUnivGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userPgUnivGroup").className="has-success";
    }

    if($('#gradDegree').val()=="Choose your Graduate degree")
    {
      document.getElementById("gradDegreeUnivGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("gradDegreeUnivGroup").className="has-success";
    }
    
    if($('#userPgMajor').val().trim()=="")
    {
      document.getElementById("userPgMajorGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userPgMajorGroup").className="has-success";
    }



  }//end of page 2 next click events


}); //end of click


/*--------------------Start of Blur events-------------------------------------*/

//-----------Page 1

$('#userName').blur(function(){

  if($('#userName').val().trim()=="")
  {
   document.getElementById("userNameGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("userNameGroup").className="has-success";
}
}); //end of username blur

$('#userMail').blur(function(){

 if(!validateEmail())
 {
   document.getElementById("userMailGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("userMailGroup").className="has-success";
}

});

$('#e1').blur(function(){

  if($('#e1').select2('val') == "")
  {
   document.getElementById("userUgUnivGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("userUgUnivGroup").className="has-success";
}

});

$('#userUgMajor').blur(function(){

  if($('#userUgMajor').val().trim()=="")
  {
   document.getElementById("userUgMajorGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("userUgMajorGroup").className="has-success";
}

});

$('#userUgGpa').blur(function(){

 if($('#userUgGpa').val().trim()=="")
 {
   document.getElementById("userUgGpaGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("userUgGpaGroup").className="has-success";
}
});

//-----------Page 2

$('#gre').blur(function(){

 if($('#gre').val().trim()=="")
 {
   document.getElementById("GreGroup").className="has-error";
   error=false;
 }
 else{

  document.getElementById("GreGroup").className="has-success";
}
});

$('#toefl').blur(function(){

  if($('#toefl').val().trim()=="")
    {
      document.getElementById("toeflGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("toeflGroup").className="has-success";
    }
 
});

$('#pgUniv').blur(function(){

    if($('#pgUniv').select2('val')=="")
    {
      document.getElementById("userPgUnivGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userPgUnivGroup").className="has-success";
    }
 
});

$('#gradDegree').blur(function(){

  if($('#gradDegree').val()=="Choose your Graduate degree")
    {
      document.getElementById("gradDegreeUnivGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("gradDegreeUnivGroup").className="has-success";
    }
 
});

$('#userPgMajor').blur(function(){

 if($('#userPgMajor').val().trim()=="")
    {
      document.getElementById("userPgMajorGroup").className="has-error";
      error=false;
    }
    else
    {
      document.getElementById("userPgMajorGroup").className="has-success";
    }
});








/*--------------------End of Blur events-------------------------------------*/

$('#prevButton').click(function(){

  $('#myCarousel').carousel('prev');

});

function validateEmail()
{
  var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
  if (reg.test($('#userMail').val())){
    return true; 
  }
  else{
    return false;
  }
}

});