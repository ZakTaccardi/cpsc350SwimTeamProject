function hoverLI(node){
  if (node) {
  	for (var i=0; i<node.length; i++) {
	  node[i].onmouseout=function() { hoverSelect('visible'); this.className=this.className.replace(" over", ""); }
      node[i].onmouseover=function() { hoverSelect('hidden'); this.className+=" over"; }
  	}
  }
}
function hoverSelect(state) {
  var node=document.getElementsByTagName("select");
  if (node) for(var i=0;i<node.length;i++) node[i].style.visibility=state;
}
function initULMenu(id) {
  // check for IE 7, mozilla, safari, opera 9
  if (window.XMLHttpRequest) 
    return;
    
  // IE6, older browsers
  if (document.all && document.getElementById) {
    var node = document.getElementById(id);
  	if (node) hoverLI( node.getElementsByTagName('li') );
  }
}

//iemenufix = function() { hoverLI( dcoument.getElementsByTagName('li') ) }
//if (window.attachEvent) window.attachEvent("onload", iemenufix);