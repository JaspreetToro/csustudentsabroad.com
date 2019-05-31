<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StudentsAbroad.com - Program Search: Explore your Options</title>
<link rel="icon" href="http://studentsabroad.com/favicon.png" type="image/png" />
<style>
#BreadCrumbs {
	visibility: hidden !important;
	display: none !important;
}
#header-container {
	visibility: hidden !important;
	display: none !important;
}
html, body {
	/*overflow: hidden;*/
	height: 100%;
	margin: 0px;
	padding: 0px;
}
</style>
</head>
<body>
<cfset AccountLinks = saObj.getAccountLinks() />
<cfset queryAddColumn(AccountLinks, "NEW_XFA", arrayNew(1)) />
<cfmodule template="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_customtags/ct_MakeTree.cfm" query="#AccountLinks#" result="AccountLinks" unique="Link_ID" parent="Parent_ID">
<cfhtmlhead text='
	<script type="text/javascript" language="javascript" src="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_themes/#LAYOUT_VARS.SLAYOUT#links.js"></script>
	<script type="text/javascript" language="javascript" src="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_themes/#LAYOUT_VARS.SLAYOUT#plugin.js"></script>
	<script type="text/javascript" language="javascript">
	<!--
	// <![CDATA[
		 // this variable determines if menu options that have children
		// are allowed to have links
			  //test
		var allowParentLinks = true;
		var i18n = new Array("#Utils.jsStringFormat_sa(i18n(1268))#","#Utils.jsStringFormat_sa(i18n(4283))#","#Utils.jsStringFormat_sa(i18n(13261))#");
	// ]]>
	//-->
	</script>
	<script type="text/javascript" language="javascript" src="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_themes/#LAYOUT_VARS.SLAYOUT#getAnnouncements.js"></script>
' />
<div> <cfoutput>
        <div id="mainContainer">
            <div id="rightColumnInside">
                <cfmodule template="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_customtags/ct_Tabs.cfm" tabs="#Tabs#">
                #trim(Fusebox.Layout)#
                </cfmodule>
            </div>
            <!-- <div style="clear:both;"></div> -->
            <div id="footerTD">
                <div id="footerTopTD"> </div>
                <div id="footerBottomTD">
                    <cfif isDefined("LAYOUT_VARS.SSTOCKLAYOUTFOOTERIMAGE") and len(trim(LAYOUT_VARS.SSTOCKLAYOUTFOOTERIMAGE))>
                        <div align="#LAYOUT_VARS.SSTOCKLAYOUTFOOTERORENTATION#"><a href="index.cfm?FuseAction=Abroad.Home" title="#LAYOUT_VARS.SACCOUNTNAME# - #LAYOUT_VARS.SACCOUNTINSTITUTION#"><img border="0" src="hosts/#_hostDir#/#LAYOUT_VARS.SSTOCKLAYOUTFOOTERIMAGE#" alt="#LAYOUT_VARS.SACCOUNTNAME# - #LAYOUT_VARS.SACCOUNTINSTITUTION#" /></a></div>
                        <cfelse>
                        <a href="http://terradotta.com" target="_blank"><img src="#LAYOUT_VARS.SPUBHOSTRELATIVEROOT#_themes/stock/poweredbyterradotta.png" alt="#i18n(12829)#" border="0" /></a>
                    </cfif>
                </div>
            </div>
        </div>
    </cfoutput> </div>
</body>
</html>