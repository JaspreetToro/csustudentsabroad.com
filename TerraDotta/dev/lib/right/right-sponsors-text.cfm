<div>
	<cfif IsDefined("url.pc") or isDefined("url.pi")>
    <cfset myCountry=URLEncodedFormat(url.pc) />
    <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
    <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
    <cfset myCity=URLEncodedFormat(url.pi) />
    <cfset myCityVar=Replace(myCity,'%7F','','All') />
    <cfset myPiVar=Replace(myCityVar,'%20','','All') />

	<cfif myPcVar eq "Argentina" or arrayContains(arCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />  
    <cfelseif myPcVar eq "Australia" or arrayContains(auCityArray, myPiVar) eq "yes">
		<cfset line1 = [IESAbroadsponsorLogo.gen] />
        <cfset line2 = [CIEEsponsorLogo.gen] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1, line2] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Austria" or arrayContains(atCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />       
    <cfelseif myPcVar eq "Belgium" or arrayContains(beCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />       
    <cfelseif myPcVar eq "Botswana" or arrayContains(bwCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Brazil" or arrayContains(brCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Canada" or arrayContains(caCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Chile" or arrayContains(clCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "China" or arrayContains(cnCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />     
    <cfelseif myPcVar eq "CostaRica" or arrayContains(crCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "CzechRepublic" or arrayContains(czCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Denmark" or arrayContains(dkCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "DominicanRepublic" or arrayContains(doCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Ecuador" or arrayContains(ecCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Egypt" or arrayContains(egCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Finland" or arrayContains(fiCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "France" or arrayContains(frCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Germany" or arrayContains(deCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Ghana" or arrayContains(ghCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Greece" or arrayContains(grCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Hungary" or arrayContains(huCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "India" or arrayContains(inCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Ireland" or arrayContains(ieCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Italy" or arrayContains(itCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Japan" or arrayContains(jpCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Jordan" or arrayContains(joCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "KenyaCoastRepublic" or myPcVar eq "Kenya Coast Republic" or myPcVar eq "Kenya" or myPcVar eq "Kenya%20Coast%20Republic" or arrayContains(keCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Korea,South" or myPcVar eq "SouthKorea" or myPcVar eq "Korea%2CSouth" or myPcVar eq "KoreaSouth" or arrayContains(krCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Mexico" or arrayContains(mxCityArray, myPiVar) eq "yes">
 		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />     
    <cfelseif myPcVar eq "Morocco" or arrayContains(maCityArray, myPiVar) eq "yes">
 		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />     
    <cfelseif myPcVar eq "Netherlands" or arrayContains(nlCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "NewZealand" or myPcVar eq "New Zealand" or myPcVar eq "New%20Zealand" or arrayContains(nzCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Nicaragua" or arrayContains(niCityArray, myPiVar) eq "yes">
 		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />   
    <cfelseif myPcVar eq "Panama" or arrayContains(plCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />            
    <cfelseif myPcVar eq "Peru" or arrayContains(peCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISAsponsorLogo.pe] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Poland" or arrayContains(plCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Portugal" or arrayContains(ptCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "RussianFederation" or myPcVar eq "Russia" or arrayContains(ruCityArray, myPiVar) eq "yes">
 		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />     
    <cfelseif myPcVar eq "SouthAfrica" or myPcVar eq "South Africa" or myPcVar eq "South%20Africa" or arrayContains(zaCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Spain" or arrayContains(esCityArray, myPiVar) eq "yes">
		<cfset line1 = [HTHsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "Sweden" or arrayContains(seCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Switzerland" or arrayContains(chCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Taiwan" or arrayContains(twCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Thailand" or arrayContains(thCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Turkey" or arrayContains(trCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "TurksandCaicosIslands" or arrayContains(tcCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "UnitedKingdom" or myPcVar eq "United Kingdom" or myPcVar eq "United%20Kingdom" or arrayContains(gbCityArray, myPiVar) eq "yes">
		<cfset line1 = [ISOSsponsorLogo.gen] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [line1] />  
        <cfset textDisplay = "yes" />      
    <cfelseif myPcVar eq "UnitedStates" or myPcVar eq "UnitedStates" or myPcVar eq "United%20States" or arrayContains(usCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelseif myPcVar eq "Vietnam" or arrayContains(vnCityArray, myPiVar) eq "yes">
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    <cfelse>
    	<!-- General/Worldwide -->
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    </cfif>
    <cfelse>
    <!-- main/General/Worldwide -->
		<cfset line1 = [] />
        <cfset line2 = [] />
        <cfset line3 = [] />
        <cfset line4 = [] />
        <cfset lineTotal = [] />  
        <cfset textDisplay = "no" />      
    </cfif>   
       
    <cfif textDisplay eq "yes">    
    <div id="main_sub_sponsors_featured">
        <div id="sponsors_list">
            <div class="program_text_sponsors_list">
                <div>
                    <cfoutput>
                        <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                            <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                <cfif #ArrayLen(lineTotal[i])# GT 1>
                                    <div class="text_listing">
                                        <ul>
                                            <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                            <cfif sponsorswap eq "#j#">
                                                <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a></li>
                                            </cfif>
                                        </ul>
                                    </div>
                                    <cfelse>
                                    <div class="text_listing">
                                        <ul>
                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a></li>
                                        </ul>
                                    </div>
                                </cfif>
                            </cfloop>
                        </cfloop>
                    </cfoutput> </div>
            </div>
        </div>
    </div>
    </cfif>
</div>