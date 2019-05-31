<div class="left_content_top"> </div>
<div class="left_content_middle">
    <div id="program_sponsors_container">
        <div style="border-bottom: 1px dotted #CCC;"></div>
        <div id="program_sponsors_title">Sponsored Listings </div>
        <div style="border-bottom: 1px dotted #CCC;"></div>
        <div id="program_sponsors_results">
            <div id="program_sponsors1">
                <cfif IsDefined("url.pc") or isDefined("url.pi")>
                    <cfset myCountry=URLEncodedFormat(url.pc) />
                    <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
                    <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
                    <cfset myCity=URLEncodedFormat(url.pi) />
                    <cfset myCityVar=Replace(myCity,'%7F','','All') />
                    <cfset myPiVar=Replace(myCityVar,'%20','','All') />
                    <cfif myPcVar eq "Argentina" or arrayContains(arCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Australia" or arrayContains(auCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Austria" or arrayContains(atCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Belgium" or arrayContains(beCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Botswana" or arrayContains(bwCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Brazil" or arrayContains(brCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Canada" or arrayContains(caCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Chile" or arrayContains(clCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "China" or arrayContains(cnCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "CostaRica" or arrayContains(crCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "CzechRepublic" or arrayContains(czCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Denmark" or arrayContains(dkCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "DominicanRepublic" or arrayContains(doCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Ecuador" or arrayContains(ecCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Egypt" or arrayContains(egCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Finland" or arrayContains(fiCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "France" or arrayContains(frCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Germany" or arrayContains(deCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Ghana" or arrayContains(ghCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Greece" or arrayContains(grCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Hungary" or arrayContains(huCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "India" or arrayContains(inCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Ireland" or arrayContains(ieCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Italy" or arrayContains(itCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Japan" or arrayContains(jpCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Jordan" or arrayContains(joCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "KenyaCoastRepublic" or myPcVar eq "Kenya Coast Republic" or myPcVar eq "Kenya" or myPcVar eq "Kenya%20Coast%20Republic" or arrayContains(keCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Korea,South" or myPcVar eq "SouthKorea" or myPcVar eq "Korea%2CSouth" or myPcVar eq "KoreaSouth" or arrayContains(krCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Mexico" or arrayContains(mxCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Morocco" or arrayContains(maCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Netherlands" or arrayContains(nlCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "NewZealand" or myPcVar eq "New Zealand" or myPcVar eq "New%20Zealand" or arrayContains(nzCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Nicaragua" or arrayContains(niCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Peru" or arrayContains(peCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Poland" or arrayContains(plCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Portugal" or arrayContains(ptCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "RussianFederation" or myPcVar eq "Russia" or arrayContains(ruCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "SouthAfrica" or myPcVar eq "South Africa" or myPcVar eq "South%20Africa" or arrayContains(zaCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Spain" or arrayContains(esCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Sweden" or arrayContains(seCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Switzerland" or arrayContains(chCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Taiwan" or arrayContains(twCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Thailand" or arrayContains(thCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Turkey" or arrayContains(trCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "TurksandCaicosIslands" or arrayContains(tcCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "UnitedKingdom" or myPcVar eq "United Kingdom" or myPcVar eq "United%20Kingdom" or arrayContains(gbCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "UnitedStates" or myPcVar eq "UnitedStates" or myPcVar eq "United%20States" or arrayContains(usCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelseif myPcVar eq "Vietnam" or arrayContains(vnCityArray, myPiVar) eq "yes">
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                        <cfelse>
                        <div class="program_sponsors_list">
                            <div>
                                <cfset line1 = [ISAsponsorLogo] />
                                <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                                <cfset line3 = [ISAsponsorLogo] />
                                <cfset line4 = [GSsponsorLogo] />
                                <cfset lineTotal = [line1,line2,line3,line4] />
                                <cfoutput>
                                    <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                        <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                            <cfif #ArrayLen(lineTotal[i])# GT 1>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                        <cfif sponsorswap eq "#j#">
                                                            <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                        </cfif>
                                                    </ul>
                                                </div>
                                                <cfelse>
                                                <div id="listing#i#">
                                                    <ul>
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </ul>
                                                </div>
                                            </cfif>
                                        </cfloop>
                                    </cfloop>
                                </cfoutput> </div>
                        </div>
                    </cfif>
                    <cfelse>
                    <!-- General/Worldwide -->
                    <div class="program_sponsors_list">
                        <div>
                            <cfset line1 = [ISAsponsorLogo] />
                            <cfset line2 = [GSsponsorLogo,ISAsponsorLogo] />
                            <cfset line3 = [ISAsponsorLogo] />
                            <cfset line4 = [GSsponsorLogo] />
                            <cfset lineTotal = [line1,line2,line3,line4] />
                            <cfoutput>
                                <cfloop from="1" to="#ArrayLen(lineTotal)#" index="i">
                                    <cfloop from="1" to="#ArrayLen(lineTotal[i])#" index="j">
                                        <cfif #ArrayLen(lineTotal[i])# GT 1>
                                            <div id="listing#i#">
                                                <ul>
                                                    <cfparam name="sponsorswap" default="#randrange(1, i)#">
                                                    <cfif sponsorswap eq "#j#">
                                                        <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                    </cfif>
                                                </ul>
                                            </div>
                                            <cfelse>
                                            <div id="listing#i#">
                                                <ul>
                                                    <li><a href="#lineTotal[i][j].url#" target="_blank">#lineTotal[i][j].title#</a>: #lineTotal[i][j].listing_desc#</li>
                                                </ul>
                                            </div>
                                        </cfif>
                                    </cfloop>
                                </cfloop>
                            </cfoutput> </div>
                    </div>
                </cfif>
            </div>
        </div>
    </div>
</div>
<div class="left_content_bottom"></div>
