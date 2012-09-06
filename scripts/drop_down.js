// JavaScript Document

function getElementsByClassName(classname) {
    if (document.getElementsByTagName) {
         var els = document.getElementsByTagName("*");
         var c = new RegExp('/b^|' + classname + '|$/b');
         final = new Array();
         var n=0;
         for (var i=0; i < els.length; i++) {
              if (els[i].className) {
                   if(c.test(els[i].className)) {
                   final[n] = els[i];
                   n++;
                   }
              }
         }
		 //alert("class found");
         return final;
    } else{
		// alert("class not found");
		return false;}
	//alert("end function getElementsByClassName");
}

function startList(){
	//get all elements with class nav
	if(self.MM_preloadImages){
		MM_preloadImages( '/images/top_nav/home_f2.jpg'  );
	}
	//browser detection
	var browserName=navigator.appName; 
	var browserVer=parseInt(navigator.appVersion); 
	if (browserName=="Microsoft Internet Explorer" && browserVer <= 7) {
//	if (browserName=="Microsoft Internet Explorer") {
	 
		var navelements = getElementsByClassName('ulnav','leftulnav');
		//alert(navelements);
		for (j=0; j < navelements.length; j++) {
	
			navRoot = navelements[j];
	
			for (i=0; i<navRoot.childNodes.length; i++) {
	
				node = navRoot.childNodes[i];
				
				if (node.nodeName=="LI") {
	
					node.onmouseover=function() {
	
						this.className+=" over";
	
					}
	
					 node.onmouseout=function() {
	
						this.className=this.className.replace(" over", "");
	
					}
	
				}
	
			}
	
		}
	} //end browser detection

}
onload = function () { 
	startList(); 
	if(typeof setupZoom == 'function') { setupZoom(); }
	}