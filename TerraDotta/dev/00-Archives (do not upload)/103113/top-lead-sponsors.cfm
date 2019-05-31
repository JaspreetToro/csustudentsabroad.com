<div id="lead_sponsors_container">
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
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Australia" or arrayContains(auCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Austria" or arrayContains(atCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bahamas" 
or myPiVar eq "AndrosIsland"
or myPivar eq "Nassau"
or myPiVar eq "SanSalvador">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bangladesh"
or myPiVar eq "Dhaka">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Belgium" or arrayContains(beCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Belize" 
or myPiVar eq "BelizeCity"
or myPiVar eq "Belmopan"
or myPiVar eq "CalabashCaye"
or myPiVar eq "Dangriga"
or myPiVar eq "LaMilpa"
or myPiVar eq "Lamanai"
or myPiVar eq "SanIgnacio">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bermuda" 
or myPiVar eq "St%2EGeorge%27s">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bhutan"
or myPiVar eq "Jakar">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bolivia"
or myPiVar eq "Cochabamba"
or myPiVar eq "SantaCruz"
or myPiVar eq "Sucre">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Brazil" or arrayContains(brCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Botswana" or arrayContains(bwCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Bulgaria"
or myPiVar eq "Blagoevgrad"
or myPiVar eq "Varna"
or myPiVar eq "VelikoTarnovo">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "BurkinaFaso"
or myPiVar eq "Ouagadougou">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Cambodia"
or myPiVar eq "PhnomPenh"
or myPiVar eq "Samraong"
or myPiVar eq "SiemReap">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Cameroon"
or myPiVar eq "Buea"
or myPiVar eq "Dschang"
or myPiVar eq "Yaounde">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Canada" or arrayContains(caCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "CaymanIslands"
or myPiVar eq "LittleCayman">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Chile" or arrayContains(clCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "China" or arrayContains(cnCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Colombia"
or myPiVar eq "Bogota"
or myPiVar eq "Cartagena">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "CostaRica" or arrayContains(crCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Croatia"
or myPcVar eq "Croatia%2CRepublicof"
or myPiVar eq "Zagreb"
or myPiVar eq "Dubrovnik">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Cuba" 
or myPiVar eq "Havana">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Cyprus"
or myPiVar eq "Atheniou"
or myPiVar eq "Nicosia">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "CzechRepublic" or arrayContains(czCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Denmark" or arrayContains(dkCityArray, myPiVar) eq "yes"> 
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "DominicanRepublic" or arrayContains(doCityArray, myPiVar) eq "yes"> 
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Ecuador" or arrayContains(ecCityArray, myPiVar) eq "yes"> 
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Egypt" or arrayContains(egCityArray, myPiVar) eq "yes"> 
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "ElSalvador" or myPiVar eq "SanSalvador">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "EquatorialGuinea"
or myPiVar eq "BiokoIsland"
or myPiVar eq "Malabo">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Ethiopia" 
or myPiVar eq "AddisAbaba">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Estonia" 
or myPiVar eq "Tartu">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Fiji" or myPiVar eq "Suva">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Finland" or arrayContains(fiCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "France" or arrayContains(frCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "FrenchGuiana" 
or myPiVar eq "Cayenne">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "FrenchPolynesia" 
or myPiVar eq "Moorea"
or myPiVar eq "NukuHiva"
or myPiVar eq "Papeete,Tahiti"
or myPiVar eq "Papeete%2CTahiti">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Germany" or arrayContains(deCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Ghana" or arrayContains(ghCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Greece" or arrayContains(grCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Grenada" 
or myPiVar eq "Carriacou"
or myPiVar eq "St%2EGeorge%27s">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Guatemala" 
or myPiVar eq "Antigua"
or myPiVar eq "Chichicastenango"
or myPiVar eq "Guatemala"
or myPiVar eq "LakeAtitlan"
or myPiVar eq "PuertoQuetzal"
or myPiVar eq "Quetzaltenango">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Guadeloupe"
or myPiVar eq "PointeaPitre">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Honduras" 
or myPiVar eq "Copán"
or myPiVar eq "LaCeiba"
or myPiVar eq "RoatanIsland"
or myPiVar eq "Zamorano">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "HongKong" 
or myPiVar eq "Kowloon"
or myPiVar eq "Shatin">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Hungary" or arrayContains(huCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "India" or arrayContains(inCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Iceland"
or myPiVar eq "Reykjavik">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Indonesia"
or myPiVar eq "Bedulu"
or myPiVar eq "Ubud">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Ireland" or arrayContains(ieCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Israel" or myPiVar eq "BeerSheva" or myPiVar eq "Haifa" or myPiVar eq "Jerusalem" or myPiVar eq "Nazareth" or myPiVar eq "TelAviv">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Italy" or arrayContains(itCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Jamaica"
or myPiVar eq "Falmouth"
or myPiVar eq "Kingston"
or myPiVar eq "PortAntonio"
or myPiVar eq "Yallahs">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Japan" or arrayContains(jpCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Jordan" or arrayContains(joCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "KenyaCoastRepublic" or myPcVar eq "Kenya Coast Republic" or myPcVar eq "Kenya" or myPcVar eq "Kenya%20Coast%20Republic" or arrayContains(keCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Kyrgyzstan"
or myPiVar eq "Bishkek">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Korea,South" or myPcVar eq "SouthKorea" or myPcVar eq "Korea%2CSouth" or myPcVar eq "KoreaSouth" or arrayContains(krCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Iceland"
or myPiVar eq "Reykjavik">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Latvia"
or myPiVar eq "Riga">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Lebanon"
or myPiVar eq "Beirut">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Liberia"
or myPiVar eq "Monrovia">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Liechtenstein" 
or myPiVar eq "Vaduz">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Lithuania" 
or myPiVar eq "Vilnius">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Macedonia"
or myPiVar eq "Skopje">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Madagascar"
or myPiVar eq "Antananarivo"
or myPiVar eq "FortDauphin">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Malaysia" 
or myPiVar eq "Kuching"
or myPiVar eq "Penang">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Mali" 
or myPiVar eq "Bamako">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Malta" 
or myPiVar eq "Msida">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Martinique"
or myPiVar eq "PointeaPitre"
or myPiVar eq "Schoelcher">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Mexico" or arrayContains(mxCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Mongolia" 
or myPiVar eq "Ulaanbaatar">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Montenegro"
or myPiVar eq "Podgorica">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Montserrat"
or myPiVar eq "Plymouth">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Morocco" or arrayContains(maCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Namibia"
or myPiVar eq "WalvisBay"
or myPiVar eq "Windhoek">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Nepal"
or myPiVar eq "Kathmandu">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Netherlands" or arrayContains(nlCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "NetherlandsAntilles"
or myPiVar eq "Bonaire">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "NewZealand" or myPcVar eq "New Zealand" or myPcVar eq "New%20Zealand" or arrayContains(nzCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Nicaragua" or arrayContains(niCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Niger" 
or myPiVar eq "Niamey">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Norway" 
or myPiVar eq "As"
or myPiVar eq "Bergen"
or myPivar eq "Bodo"
or myPiVar eq "Oslo"
or myPiVar eq "Vestfold">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Oman"
or myPiVar eq "Muscat">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "PalestinianTerritories" 
or myPiVar eq "Bethlehem"
or myPiVar eq "Nablus"
or myPiVar eq "Ramallah">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Panama"
or myPiVar eq "BocasdelToro"
or myPiVar eq "Panamá"
or myPiVar eq "PanamaCity">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Paraguay"
or myPiVar eq "Asuncion">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Peru" or arrayContains(peCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Philippines"
or myPiVar eq "Manila"
or myPiVar eq "Manilla"
or myPiVar eq "QuezonCity">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Poland" or arrayContains(plCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Portugal" or arrayContains(ptCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "PuertoRico"
or myPiVar eq "SanJuan"
or myPiVar eq "RioPiedras">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Qatar"
or myPiVar eq "Doha">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "RussianFederation" or myPcVar eq "Russia" or arrayContains(ruCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Rwanda" 
or myPiVar eq "Kigali">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Samoa" 
or myPiVar eq "Apia">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "SaintVincentandtheGrenadines" 
or myPiVar eq "Bequia">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Senegal" 
or myPiVar eq "Dakar"
or myPiVar eq "St%2ELouis"
or myPiVar eq "Saint%2DLouis">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Serbia" 
or myPiVar eq "Belgrade"
or myPiVar eq "Nis">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Singapore"
or myPiVar eq "Singapore">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Slovenia"
or myPiVar eq "Ljubljana">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "SouthAfrica" or myPcVar eq "South Africa" or myPcVar eq "South%20Africa" or arrayContains(zaCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Spain" or arrayContains(esCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studiesabroad.com/spain"><img src="http://studentsabroad.com/images/sponsors/logo/ISA-ls-Spain.gif" alt="ISA Spain" /></a>
                </cfif>
                <cfelseif myPcVar eq "Sweden" or arrayContains(seCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Switzerland" or arrayContains(chCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Syria" 
or myPiVar eq "Aleppo"
or myPivar eq "Damascus"
or myPiVar eq "Telles%2DSweyhat">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Taiwan" or arrayContains(twCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Tanzania" 
or myPiVar eq "Arusha"
or myPiVar eq "DaresSalaam"
or myPiVar eq "Kilimanjaro"
or myPiVar eq "MojoHillCamp"
or myPiVar eq "Morogoro"
or myPiVar eq "Moshi"
or myPiVar eq "MoyoHillCamp"
or myPiVar eq "StoneTown"
or myPiVar eq "Zanzibar">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Thailand" or arrayContains(thCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Tibet" 
or myPiVar eq "Lhasa">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "TrinidadandTobago"
or myPiVar eq "St%2EAugustine"
or myPiVar eq "PortofSpain">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Tunisia" 
or myPiVar eq "Tunis">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "TurksandCaicosIslands" or arrayContains(tcCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Turkey" or arrayContains(trCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Uganda" 
or myPiVar eq "Gulu"
or myPiVar eq "Kampala">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Ukraine" 
or myPiVar eq "Kharkiv"
or myPiVar eq "Kiev"
or myPiVar eq "Kyiv"
or myPiVar eq "Lviv"
or myPiVar eq "Odessa">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "UnitedArabEmirates"
or myPiVar eq "Dubai"
or myPiVar eq "Sharjah">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "UnitedKingdom" or myPcVar eq "United Kingdom" or myPcVar eq "United%20Kingdom" or arrayContains(gbCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studiesabroad.com/england"><img src="http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" alt="ISA United Kingdom" /></a>
                </cfif>
                <cfelseif myPcVar eq "UnitedStates" or myPcVar eq "UnitedStates" or myPcVar eq "United%20States" or arrayContains(usCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "U.S.VirginIslands"
or myPcVar eq "U%2ES%2EVirginIslands"
or myPiVar eq "St%2ECroix">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Uruguay" 
or myPiVar eq "Montevideo">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Venezuela" 
or myPiVar eq "Caracas"
or myPiVar eq "ColoradoBeach"
or myPiVar eq "Merida">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelseif myPcVar eq "Vietnam" or arrayContains(vnCityArray, myPiVar) eq "yes">
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
                <cfelse>
                <!-- General/Worldwide -->
                <cfparam name="bannerswap" default="#randrange(1, 1)#">
                <cfif bannerswap is "1">
                    <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
                </cfif>
            </cfif>
            <cfelse>
            <!-- General/Worldwide -->
            <cfparam name="bannerswap" default="#randrange(1, 1)#">
            <cfif bannerswap is "1">
                <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
            </cfif>
        </cfif>
        <cfelse>
        <!-- General/Worldwide -->
        <cfparam name="bannerswap" default="#randrange(1, 1)#">
        <cfif bannerswap is "1">
            <a href="http://studentsabroad.com/sponsor/"><img src="http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" alt="Center for Global Education Sponsorship Opportunities" /></a>
        </cfif>
    </cfif>
</div>
<!-- end of top_lead_sponsors_container -->
