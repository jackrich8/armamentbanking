/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
 
var dsLVPURLMainPage = "http://demo.verticalorb.com/skyebank/";


var doctitle = document.title;
//var parmArray = new Array();
//parmArray = doctitle.split("-");

var title = document.title;//jQuery.trim(parmArray[1]);
var LastVisitedPageURL;

 
// block of functions for work with cookies
function createCookie(name,value,title,days) {
	 if (days) {
		  var date = new Date();
		  date.setTime(date.getTime()+(days*24*60*60*1000));
  		var expires = "; expires="+date.toGMTString();
	 }
	else var expires = "";
	document.cookie = name+"="+value+"~~"+title+expires+"; path=/";
}

function readCookie(name) {
	 var nameEQ = name + "=";
 	var ca = document.cookie.split(';');
 	for(var i=0;i < ca.length;i++) {
  		var c = ca[i];
  		while (c.charAt(0)==' ') c = c.substring(1,c.length);
  		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
 	}
	return null;
}

function eraseCookie(name) {
	 createCookie(name,"",-1);
}


// kickstart
(function($){
   $(document).ready(function () {
      // Reset Font Size
	  var originalFontSize = $('body').css('font-size');
	    $(".resetFont").click(function(){
	    $('body').css('font-size', originalFontSize);
	  });
	  // Increase Font Size
	  $(".increaseFont").click(function(){
	    var currentFontSize = $('body').css('font-size');
	    var currentFontSizeNum = parseFloat(currentFontSize, 10);
	    var newFontSize = currentFontSizeNum*1.05;
	    $('body').css('font-size', newFontSize);
	    return false;
	  });
	  // Decrease Font Size
	  $(".decreaseFont").click(function(){
	    var currentFontSize = $('body').css('font-size');
	    var currentFontSizeNum = parseFloat(currentFontSize, 10);
	    var newFontSize = currentFontSizeNum*0.91;
	    $('body').css('font-size', newFontSize);
	    return false;
	  });
	  
	   $("#myPreference").on("click",function(){
		if($('#myPreference').is(":checked")){
		   // checks if cookies are enabled
			var doctitle = document.title;
//			alert(doctitle);
			//var parmArray = new Array();
			//parmArray = doctitle.split("-");
			var title = document.title;// jQuery.trim(parmArray[1]);
		   createCookie("dsLVPURL", encodeURI(document.location),title, 365);		
		   
		}else{
		   // checks if cookies are enabled
		   eraseCookie("dsLVPURL");
		}
          });
          
          //redirecting user to last visited page if he
	//enters the site through main page
	//if(document.location == dsLVPURLMainPage) {
	  //redirect only if user navigates to main page first time
	  //in current session (if referrer not contains main page address)
	  var storedData = readCookie("dsLVPURL");
	  
	  var mySkyeHomeTitle = null;
	  if(storedData != null){
		  var mySkyeHomeArray = new Array();
		  mySkyeHomeArray = storedData.split("~~");
		  mySkyeHomeLink = mySkyeHomeArray[0];
		  mySkyeHomeTitle = jQuery.trim(mySkyeHomeArray[1]);
		  if(storedData != null && document.referrer.indexOf(dsLVPURLMainPage) == -1) {
		    LastVisitedPageURL = decodeURI(mySkyeHomeLink);
		    if(LastVisitedPageURL != null) {
				if(mySkyeHomeTitle == title){
					//document.getElementById("myPreference").checked = true;	
					//Boxy.alert('You have been automatically redirected to your preferred Skye Home Page', null, {title: 'My Skye Home Page'});
				}      
		    }
		  }
		  if(mySkyeHomeLink != null) {
			if(mySkyeHomeTitle == title){
					$("#myPreference").attr("checked" ,"checked" );
			}      
		  }
	  }
	//}

   });
   
})(jQuery);
  
  // script body
// setting default values for parameters
if(typeof(dsLVPURLMainPage) == "undefined") {
  var loc = document.location.toString().split('/');
  var dsLVPURLMainPage = "http://" + loc[2] + "/";
}

if(typeof(dsLVPNotification) == "undefined")
  var dsLVPNotification = "You have been automatically redirected to your preferred Skye Home Page.";


//redirecting user to last visited page if he
//enters the site through main page
  
if(document.location == dsLVPURLMainPage) {
  //redirect only if user navigates to main page first time
  //in current session (if referrer not contains main page address)
  var storedData = readCookie("dsLVPURL");
  if(storedData != null){
	  var mySkyeHomeArray = new Array();
	  mySkyeHomeArray = storedData.split("~~");
	  mySkyeHomeLink = mySkyeHomeArray[0];
	  mySkyeHomeTitle = mySkyeHomeArray[1];
	  if(document.referrer.indexOf(dsLVPURLMainPage) == -1 && storedData != null) {
	    LastVisitedPageURL = decodeURI(mySkyeHomeLink);
	    if(LastVisitedPageURL != null && LastVisitedPageURL != dsLVPURLMainPage) {
	      document.location = LastVisitedPageURL;
	      //dsLVPMessage = dsLVPNotification;
	    }
	  }
  }
}
// storing last visited page for a year in cookie
//if(typeof(dsLVPDisabled) == "undefined")
//	createCookie("dsLVPURL", encodeURI(document.location), 365);	
