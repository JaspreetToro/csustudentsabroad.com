
<cfif IsDefined("url.pc") or isDefined("url.pi")>
	<cfset pcCount = ListLen(url.pc) />
	<cfset piCount = ListLen(url.pi) />
	<cfset myCountry=URLEncodedFormat(url.pc) />
	<cfset myCountryVar=Replace(myCountry,'%7F','','All') />
	<cfset myPcVar=Replace(myCountryVar,'%20','','All') />
	<cfset myCity=URLEncodedFormat(url.pi) />
	<cfset myCityVar=Replace(myCity,'%7F','','All') />
	<cfset myPiVar=Replace(myCityVar,'%20','','All') />
	<cfif pcCount LT 2>

		<cfif myPcVar eq "Italy" or arrayContains(itCityArray, myPiVar) eq "yes">
		<div class="left_content_top"></div>
            <div class="left_content_middle">
                <div id="sponsors_banner_container">
                    <div>
                        <cfset bannerBox1 = [CEAsponsorLogo.it] />
                        <cfset bannerBoxTotal = [bannerBox1] />
                        <cfoutput>
                            <cfloop from="1" to="#ArrayLen(bannerBoxTotal)#" index="i">
                                <cfloop from="1" to="#ArrayLen(bannerBoxTotal[i])#" index="j">
                                    <cfif #ArrayLen(bannerBoxTotal[i])# GT 1>
                                        <div>
                                            <cfparam name="imageswap" default="#randrange(1, i)#">
                                            <cfif imageswap eq "#j#">
                                                <a href="#bannerBoxTotal[i][j].url#" target="_blank"><img src="#bannerBoxTotal[i][j].banner_1#" alt="#bannerBoxTotal[i][j].title_desc#" /></a>
                                            </cfif>
                                        </div>
                                        <cfelse>
                                        <div> <a href="#bannerBoxTotal[i][j].url#" target="_blank"><img src="#bannerBoxTotal[i][j].banner_1#" alt="#bannerBoxTotal[i][j].title_desc#" /></a> </div>
                                    </cfif>
                                </cfloop>
                            </cfloop>
                        </cfoutput>
                    </div>
                </div>
                <!-- end of sponsors_banner_container -->
        	</div>
        <div class="left_content_bottom"></div>
        <script type="text/javascript" language="javascript">renderDiv(5);</script>
		</cfif>
	</cfif>            
</cfif>