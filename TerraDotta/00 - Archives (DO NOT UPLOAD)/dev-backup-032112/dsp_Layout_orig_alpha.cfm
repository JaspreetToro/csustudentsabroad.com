<cfset AccountLinks = saObj.getAccountLinks() />
<cfset queryAddColumn(AccountLinks, "NEW_XFA", arrayNew(1)) />
<cfmodule template="#_sPubHostRelativeRoot#_customtags/ct_MakeTree.cfm" query="#AccountLinks#" result="AccountLinks" unique="Link_ID" parent="Parent_ID">

<cfhtmlhead text='
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#links.js"></script>
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#plugin.js"></script>
	<script type="text/javascript" language="javascript">
	<!--
	// <![CDATA[
		// this variable determines if menu options that have children
		// are allowed to have links
              //test
		var allowParentLinks = true;
		var i18n = new Array("#jsStringFormat_sa(i18n(1268))#","#jsStringFormat_sa(i18n(4283))#","#jsStringFormat_sa(i18n(13261))#");
	// ]]>
	//-->
	</script>
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#getAnnouncements.js"></script>
' />

<cfoutput>
<div id="mainContainer">


<div id="rightColumnInside">
	<cfmodule template="#_sPubHostRelativeRoot#_customtags/ct_Tabs.cfm" tabs="#Tabs#">#trim(Fusebox.Layout)#</cfmodule>
</div>

<div style="clear:both;"></div>

<div id="footer">
<div id="footerTop">
			</div>
			<div id="footerBottom">
			 <cfif isDefined("_sStockLayoutFooterImage") and len(trim(_sStockLayoutFooterImage))>
				<div align="#_sStockLayoutFooterOrentation#"><a href="index.cfm?FuseAction=Abroad.Home" title="#_sAccountName# - #_sAccountInstitution#"><img border="0" src="hosts/#_hostDir#/#_sStockLayoutFooterImage#" alt="#_sAccountName# - #_sAccountInstitution#" /></a></div>
				<cfelse>
				<a href="http://terradotta.com" target="_blank"><img src="#_sPubHostRelativeRoot#_themes/stock/poweredbyterradotta.png" alt="#i18n(12829)#" border="0" /></a>
			</cfif>
			</div>
		</div>
</div>
</cfoutput>