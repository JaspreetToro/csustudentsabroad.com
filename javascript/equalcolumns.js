var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari"
		},
		{
			prop: window.opera,
			identity: "Opera"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]

};
BrowserDetect.init();

if(BrowserDetect.browser != "Explorer")
{

	//** Dynamic Drive Equal Columns Height script v1.01 (Nov 2nd, 06)
	//** http://www.dynamicdrive.com/style/blog/entry/css-equal-columns-height-script/
	
	var ddequalcolumns=new Object()
	//Input IDs (id attr) of columns to equalize. Script will check if each corresponding column actually exists:
	ddequalcolumns.columnswatch=["left_navigation","subpage_content"]
	
	ddequalcolumns.setHeights=function(reset){
	var tallest=0
	var resetit=(typeof reset=="string")? true : false
	for (var i=0; i<this.columnswatch.length; i++){
	if (document.getElementById(this.columnswatch[i])!=null){
	if (resetit)
	document.getElementById(this.columnswatch[i]).style.height="auto"
	if (document.getElementById(this.columnswatch[i]).offsetHeight>tallest)
	tallest=document.getElementById(this.columnswatch[i]).offsetHeight
	}
	}
	if (tallest>0){
	for (var i=0; i<this.columnswatch.length; i++){
	if (document.getElementById(this.columnswatch[i])!=null)
	document.getElementById(this.columnswatch[i]).style.height=tallest+"px"
	}
	}
	}
	
	ddequalcolumns.resetHeights=function(){
	this.setHeights("reset")
	}
	
	ddequalcolumns.dotask=function(target, functionref, tasktype){ //assign a function to execute to an event handler (ie: onunload)
	var tasktype=(window.addEventListener)? tasktype : "on"+tasktype
	if (target.addEventListener)
	target.addEventListener(tasktype, functionref, false)
	else if (target.attachEvent)
	target.attachEvent(tasktype, functionref)
	}
	
	ddequalcolumns.dotask(window, function(){ddequalcolumns.setHeights()}, "load")
	ddequalcolumns.dotask(window, function(){if (typeof ddequalcolumns.timer!="undefined") clearTimeout(ddequalcolumns.timer); ddequalcolumns.timer=setTimeout("ddequalcolumns.resetHeights()", 200)}, "resize")
	
}