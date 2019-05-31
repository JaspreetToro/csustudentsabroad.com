<div class="left_content_top"></div>
<div class="left_content_middle">
    <div id="sponsors_banner_container">
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
                <cfif myPcVar eq "Argentina" or arrayContains(arCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Australia" or arrayContains(auCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Austria" or arrayContains(atCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Belgium" or arrayContains(beCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Botswana" or arrayContains(bwCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Brazil" or arrayContains(brCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Canada" or arrayContains(caCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Chile" or arrayContains(clCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "China" or arrayContains(cnCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "CostaRica" or arrayContains(crCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "CzechRepublic" or arrayContains(czCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Denmark" or arrayContains(dkCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "DominicanRepublic" or arrayContains(doCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Ecuador" or arrayContains(ecCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Egypt" or arrayContains(egCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Finland" or arrayContains(fiCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "France" or arrayContains(frCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Germany" or arrayContains(deCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Ghana" or arrayContains(ghCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Greece" or arrayContains(grCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Hungary" or arrayContains(huCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "India" or arrayContains(inCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Ireland" or arrayContains(ieCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Italy" or arrayContains(itCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Japan" or arrayContains(jpCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Jordan" or arrayContains(joCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "KenyaCoastRepublic" or myPcVar eq "Kenya Coast Republic" or myPcVar eq "Kenya" or myPcVar eq "Kenya%20Coast%20Republic" or arrayContains(keCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Korea,South" or myPcVar eq "SouthKorea" or myPcVar eq "Korea%2CSouth" or myPcVar eq "KoreaSouth" or arrayContains(krCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Mexico" or arrayContains(mxCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Morocco" or arrayContains(maCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Netherlands" or arrayContains(nlCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "NewZealand" or myPcVar eq "New Zealand" or myPcVar eq "New%20Zealand" or arrayContains(nzCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Nicaragua" or arrayContains(niCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Peru" or arrayContains(peCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Poland" or arrayContains(plCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Portugal" or arrayContains(ptCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "RussianFederation" or myPcVar eq "Russia" or arrayContains(ruCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "SouthAfrica" or myPcVar eq "South Africa" or myPcVar eq "South%20Africa" or arrayContains(zaCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Spain" or arrayContains(esCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Sweden" or arrayContains(seCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Switzerland" or arrayContains(chCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Taiwan" or arrayContains(twCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Thailand" or arrayContains(thCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Turkey" or arrayContains(trCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "TurksandCaicosIslands" or arrayContains(tcCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "UnitedKingdom" or myPcVar eq "United Kingdom" or myPcVar eq "United%20Kingdom" or arrayContains(gbCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "UnitedStates" or myPcVar eq "UnitedStates" or myPcVar eq "United%20States" or arrayContains(usCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelseif myPcVar eq "Vietnam" or arrayContains(vnCityArray, myPiVar) eq "yes">
                    <div>
                        <cfset bannerBox1 = [ISAsponsorLogo] />
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
                        </cfoutput> </div>
                    <cfelse>
                    <!-- Worldwide -->
                    <div>
                        <cfset bannerBox1 = [GSsponsorLogo, ISAsponsorLogo] />
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
                        </cfoutput> </div>
                </cfif>
            </cfif>
            <cfelse>
            <!-- Main -->
            <div>
                <cfset bannerBox1 = [GSsponsorLogo, ISAsponsorLogo] />
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
                </cfoutput> </div>
        </cfif>
    </div>
    <!-- end of sponsors_banner_container -->
</div>
<div class="left_content_bottom"></div>
