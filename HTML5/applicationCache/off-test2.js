function showVersionInfo()
{alert ('ver. 1.1');}

function checkNewVersion()
{applicationCache.update();}

window.onload = function(){
applicationCache.addEventListener(
 "updateready",
 function() {
	var b = confirm("find new version. update?");
	if (b) {
		applicationCache.swapCache();
		location.reload();
		}
	});
applicationCache.addEvernListener(
 "cached",
 function() {
	alert("Cached");
	});
applicationCache.addEvernListener(
 "noupdate",
 function() {
	alert("No Cached");
	});	
applicationCache.addEvernListener(
 "obsolete",
 function() {
	alert("manifest error");
	});	
applicationCache.addEvernListener(
 "error",
 function() {
	alert("error");
	});	
};