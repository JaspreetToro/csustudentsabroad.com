<div>
    <div id="student_handbook_title_container">
        <cfif IsDefined("url.pc") or isDefined("url.pi")>
            <cfset myCountry=URLEncodedFormat(url.pc) />
            <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
            <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
            <cfset myCity=URLEncodedFormat(url.pi) />
            <cfset myCityVar=Replace(myCity,'%7F','','All') />
            <cfset myPiVar=Replace(myCityVar,'%20','','All') />
            <cfif myPcVar eq "Argentina"
                                        or myPiVar eq "Bariloche"
                                        or myPiVar eq "BuenosAires"
                                        or myPiVar eq "Cairns"
                                        or myPiVar eq "Cordoba"
                                        or myPiVar eq "Corrientes"
                                        or myPiVar eq "LibertadorSanMartin"
                                        or myPiVar eq "MardelPlata"			
                                        or myPiVar eq "Mendoza"
                                        or myPiVar eq "Patagonia"
                                        or myPiVar eq "Rosario"
                                        or myPiVar eq "Salta"
                                        or myPiVar eq "SanCarlosdeBariloche"
                                        or myPiVar eq "SanMigueldeTucuman"
                                        or myPiVar eq "Ushuaia"
                                        or myPiVar eq "Victoria">
                <div id="student_handbook_title">Argentina <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Australia"
                                        or myPiVar eq "Adelaide"
                                        or myPiVar eq "Albury-Wodonga"
                                        or myPiVar eq "Albury%2DWodonga"
                                        or myPiVar eq "AliceSprings"
                                        or myPiVar eq "Armidale"
                                        or myPiVar eq "AthertonTablelands"
                                        or myPiVar eq "AyersRock"
                                        or myPiVar eq "Ballarat"
                                        or myPiVar eq "Bathurst"
                                        or myPiVar eq "Bendigo"
                                        or myPiVar eq "Brisbane"
                                        or myPiVar eq "Bundoora"
                                        or myPiVar eq "ByronBay"
                                        or myPiVar eq "Byron Bay"
                                        or myPiVar eq "Byron%20Bay" 
                                        or myPiVar eq "Cairns"
                                        or myPiVar eq "Callagan"
                                        or myPiVar eq "Callaghan"
                                        or myPiVar eq "Canberra"
                                        or myPiVar eq "Darwin"
                                        or myPiVar eq "FraserIsland"
                                        or myPiVar eq "Fremantle"
                                        or myPiVar eq "Geelong"
                                        or myPiVar eq "GoldCoast"
                                        or myPiVar eq "GreatBarrierReef"
                                        or myPiVar eq "HerveyBay"
                                        or myPiVar eq "Hobart"
                                        or myPiVar eq "Kakadu"
                                        or myPiVar eq "KataTjuta"
                                        or myPiVar eq "Launceston"
                                        or myPiVar eq "Lismore"
                                        or myPiVar eq "Macarthur"
                                        or myPiVar eq "MagneticIsland"
                                        or myPiVar eq "MagneticIsland,"
                                        or myPiVar eq "Magnetic Island"
                                        or myPiVar eq "Magnetic Island,"
                                        or myPiVar eq "Magnetic%20Island"
                                        or myPiVar eq "Magnetic%20Island,"
                                        or myPiVar eq "MagneticIsland%2C"
                                        or myPiVar eq "Maroochydore"
                                        or myPiVar eq "Melbourne"
                                        or myPiVar eq "Mildura"
                                        or myPiVar eq "Mt. Buller"
                                        or myPiVar eq "Mt.%20Buller"
                                        or myPiVar eq "Mt%2EBuller"
                                        or myPiVar eq "Mt%2E%20Buller"
                                        or myPiVar eq "NewCastle"
                                        or myPiVar eq "NorthRyde"
                                        or myPiVar eq "Perth"
                                        or myPiVar eq "Queensland"
                                        or myPiVar eq "Robina"
                                        or myPiVar eq "Rockhampton"
                                        or myPiVar eq "St%2ELucia"
                                        or myPiVar eq "SunshineCoast"
                                        or myPiVar eq "Sydney"
                                        or myPiVar eq "Tasmania"
                                        or myPiVar eq "Toowoomba"
                                        or myPiVar eq "Townsville"
                                        or myPiVar eq "Uluru"
                                        
                                        or myPiVar eq "Victoria"
                                        or myPiVar eq "WaggaWagga"
                                        or myPiVar eq "Warrnambool"
                                        or myPiVar eq "Wollongong">
                <div id="student_handbook_title">Australia <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Austria"
                                        or myPiVar eq "Braunau"
                                        or myPiVar eq "Bregenz"
                                        or myPiVar eq "Graz"
                                        or myPiVar eq "Innsbruck"
                                        or myPiVar eq "Kitzbuhel"
                                        or myPiVar eq "Klagenfurt"
                                        or myPiVar eq "Lebon"
                                        or myPiVar eq "Leoben"
                                        or myPiVar eq "Linz"
                                        or myPiVar eq "Prien"
                                        or myPiVar eq "Salzburg"
                                        or myPiVar eq "Strobl"
                                        or myPiVar eq "Vienna"
                                        or myPiVar eq "WienerNeustadt">
                <div id="student_handbook_title">Austria <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Belgium"
                                        or myPiVar eq "Antwerp"
                                        or myPiVar eq "Brussels"
                                        or myPiVar eq "Leuven"
                                        or myPiVar eq "Liege"
                                        or myPiVar eq "Louvain">
                <div id="student_handbook_title">Belgium <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Brazil"
                                        or myPiVar eq "Bahia"
                                        or myPiVar eq "Belém"
                                        or myPiVar eq "BeloHorizonte"
                                        or myPiVar eq "Bahia"
                                        or myPiVar eq "Brazilia"
                                        or myPiVar eq "Campinas"
                                        or myPiVar eq "Curitiba"
                                        or myPiVar eq "Ecoversidade"
                                        or myPiVar eq "Florianopolis"
                                        or myPiVar eq "Fora"
                                        or myPiVar eq "Fortaleza"
                                        or myPiVar eq "Ilheus"
                                        or myPiVar eq "Imbituba"
                                        or myPiVar eq "JoãoPessoa"
                                        or myPiVar eq "Maceio"
                                        or myPiVar eq "Manaus"
                                        or myPiVar eq "Mariana"
                                        or myPiVar eq "Niteroi"
                                        or myPiVar eq "OuroPreto"
                                        or myPiVar eq "Parana"
                                        or myPiVar eq "Paranagua"
                                        or myPiVar eq "Parati"
                                        or myPiVar eq "Piracicaba"
                                        or myPiVar eq "PontaGrossa"
                                        or myPiVar eq "PonteAlegre"
                                        or myPiVar eq "PortoAlegre"
                                        or myPiVar eq "Recife"
                                        or myPiVar eq "RiodeJaneiro"
                                        or myPiVar eq "RioGrande"
                                        or myPiVar eq "Sabara"
                                        or myPiVar eq "Salvador"
                                        or myPiVar eq "SalvadordaBahia" 
                                        or myPiVar eq "Santarem"
                                        or myPiVar eq "Santos"
                                        or myPiVar eq "SaoPaulo"
                                        or myPiVar eq "SãoPaulo"
                                        or myPiVar eq "Viçosa"
                                        or myPiVar eq "Vitoria">
                <div id="student_handbook_title">Brazil <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Botswana" or myPiVar eq "Gaborone" or myPiVar eq "Maun">
                <div id="student_handbook_title">Botswana <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Canada"
                                        or myPiVar eq "Calgary"
                                        or myPiVar eq "Chicoutimi"
                                        or myPiVar eq "Edmonton"
                                        or myPiVar eq "GreaterSudbury"
                                        or myPiVar eq "Halifax"
                                        or myPiVar eq "Kamloops"
                                        or myPiVar eq "Lennoxville"
                                        or myPiVar eq "Montreal"
                                        or myPiVar eq "Ottawa"
                                        or myPiVar eq "Quebec"
                                        or myPiVar eq "Saskatoon"
                                        or myPiVar eq "Sherbrooke"
                                        or myPiVar eq "St%2ECatherines"
                                        or myPiVar eq "St%2CCatherines"
                                        or myPiVar eq "Sudbury"
                                        or myPiVar eq "Vancouver"
                                        or myPiVar eq "Whitehorse">
                <div id="student_handbook_title">Canada <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Chile"
										or myPiVar eq "Antofagasta"
										or myPiVar eq "Arica"
										or myPiVar eq "Chillan"
										or myPiVar eq "Concepcion"
										or myPiVar eq "Coquimbo"
										or myPiVar eq "Pichelemu"
										or myPiVar eq "Santiago"
										or myPiVar eq "Temecu"
										or myPiVar eq "Temuco"
										or myPiVar eq "Valdivia"
										or myPiVar eq "Valparaiso"
										or myPiVar eq "VinadelMar">
                <div id="student_handbook_title">Chile <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "China"
										or myPiVar eq "Baotou"
										or myPiVar eq "Beijing"
										or myPiVar eq "Changchun"
										or myPiVar eq "Changsha"
										or myPiVar eq "Chengde"
										or myPiVar eq "Chengdu"
										or myPiVar eq "Chongqing"
										or myPiVar eq "Dalian"
										or myPiVar eq "Dongfang"
										or myPiVar eq "Fenyan"
										or myPiVar eq "Fuzhou"
										or myPiVar eq "Guangzhou"
										or myPiVar eq "Guilin"
										or myPiVar eq "GuiyangCity"
										or myPiVar eq "Haikou"
										or myPiVar eq "Haimen"
										or myPiVar eq "Hainan"
										or myPiVar eq "Hangdan" 
										or myPiVar eq "Handan"
										or myPiVar eq "Hangzhou"
										or myPiVar eq "Harbin"
										or myPiVar eq "HongKong"
										or myPiVar eq "Jiamusi"
										or myPiVar eq "Jilin"
										or myPiVar eq "Jinan"
										or myPiVar eq "Kham"
										or myPiVar eq "Kunming"
										or myPiVar eq "Lianyunang"
										or myPiVar eq "Lianyungang"
										or myPiVar eq "Lijiang"
										or myPiVar eq "Luoyang"
										or myPiVar eq "Macao"
										or myPiVar eq "Macau"
										or myPiVar eq "Nanjing"
										or myPiVar eq "Ningbo"
										or myPiVar eq "PearlRiverDelta"
										or myPiVar eq "Pingyao"
										or myPiVar eq "Qingdao"
										or myPiVar eq "Qinhuangdao"
										or myPiVar eq "Qufu"
										or myPiVar eq "Shandong"
										or myPiVar eq "Shanghai"
										or myPiVar eq "Shantou"
										or myPiVar eq "Shenyang"
										or myPiVar eq "Shenzhen"
										or myPiVar eq "Shijiazhuang" 
										or myPiVar eq "Shichuan" 
										or myPiVar eq "Sichuan" 
										or myPiVar eq "Suzhou" 
										or myPiVar eq "TangShan" 
										or myPiVar eq "Tianjin"
										or myPiVar eq "Tsinghua" 
										or myPiVar eq "Whenzhou" or myPiVar eq "Wenzhou"
										or myPiVar eq "Wuhan" 
										or myPiVar eq "Xi'an" 
										or myPiVar eq "Xi%27an" 
										or myPiVar eq "Xiamen" 
										or myPiVar eq "Xingang" 
										or myPiVar eq "Yangshuo" 
										or myPiVar eq "Yantai" 
										or myPiVar eq "Yiwu" 
										or myPiVar eq "Zhangjiang" 
										or myPiVar eq "Zhangzhou" 
										or myPiVar eq "Zhongdian">
                <div id="student_handbook_title">China <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "CostaRica"
										or myPiVar eq "Alajuela" 
										or myPiVar eq "Alahuela" 
										or myPiVar eq "Atenas" 
										or myPiVar eq "Coronado" 
										or myPiVar eq "FlamingoBeach" 
										or myPiVar eq "Guanacaste" 
										or myPiVar eq "Heredia" 
										or myPiVar eq "JacoBeach" 
										or myPiVar eq "LaSuerte" 
										or myPiVar eq "ManuelAntonio" 
										or myPiVar eq "MonteVerde" 
										or myPiVar eq "Puntarenas" 
										or myPiVar eq "Samara" 
										or myPiVar eq "SanJoaquin" 
										or myPiVar eq "SanJose" 
										or myPiVar eq "SanLuisValley" 
										or myPiVar eq "SanPedro" 
										or myPiVar eq "SanRamon" 
										or myPiVar eq "SantaAna" 
										or myPiVar eq "Turrialba">
                <div id="student_handbook_title">Costa Rica <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "CzechRepublic" or myPiVar eq "Brno" or myPiVar eq "Olomouc" or myPiVar eq "Prague">
                <div id="student_handbook_title">Czech Republic <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Denmark" 
										or myPiVar eq "Aalborg" 
										or myPiVar eq "Aarhus" 
										or myPiVar eq "Copenhagen" 
										or myPiVar eq "Esbjerg" 
										or myPiVar eq "Frederiksberg" 
										or myPiVar eq "Kolding" 
										or myPiVar eq "Lyngby" 
										or myPiVar eq "Lyingby"
										or myPiVar eq "Odense" 
										or myPiVar eq "Randers" 
										or myPiVar eq "Roskilde" 
										or myPiVar eq "Sonderborg" 
										or myPiVar eq "Thy" 
										or myPiVar eq "Tjele">
                <div id="student_handbook_title">Denmark <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "DominicanRepublic" 
										or myPiVar eq "Jarabacoa" 
										or myPiVar eq "LaRomana" 
										or myPiVar eq "Samana" 
										or myPiVar eq "Santiago" 
										or myPiVar eq "SantoDomingo" 
										or myPiVar eq "Sosua" 
										or myPiVar eq "Sosúa">
                <div id="student_handbook_title">Dominican Republic <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Ecuador" 
										or myPiVar eq "Cuenca" 
										or myPiVar eq "Galapagos" 
										or myPiVar eq "Guayaquil" 
										or myPiVar eq "Mindo" 
										or myPiVar eq "Montañita" 
										or myPiVar eq "NapoRegion" 
										or myPiVar eq "Quito" 
										or myPiVar eq "SanCristobal">
                <div id="student_handbook_title">Ecuador <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Egypt" 
										or myPiVar eq "Cairo" 
										or myPiVar eq "Alexandria" 
										or myPiVar eq "Edfu" 
										or myPiVar eq "Luxor" 
										or myPiVar eq "PortSaid" 
										or myPiVar eq "SharmElSheikh" 
										or myPiVar eq "Sinai">
                <div id="student_handbook_title">Egypt <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Finland"
										or myPiVar eq "Vaasa"
										or myPiVar eq "Abo"
										or myPiVar eq "Helsinki"
										or myPiVar eq "Joensuu"
										or myPiVar eq "Jyvaskyla"
										or myPiVar eq "Koupio"
										or myPiVar eq "Lappeenranta"
										or myPiVar eq "Oulu"
										or myPiVar eq "Tampere"
										or myPiVar eq "Turku">
                <div id="student_handbook_title">Finland <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "France"
										or myPiVar eq "AixenProvence"
										or myPiVar eq "Aix-en-Provence" or myPiVar eq "Aix%2Den%2DProvence" or myPiVar eq "Aix%2Den%2DProvence"
										or myPiVar eq "Paris"
										or myPiVar eq "Cannes"
										or myPiVar eq "Nice"								
										or myPiVar eq "Lyon"
										or myPiVar eq "Montpellier"
										or myPiVar eq "Normandy"
										or myPiVar eq "Grenoble"
										or myPiVar eq "Strasbourg"
										or myPiVar eq "Biarritz"
										or myPiVar eq "Bordeaux"
										or myPiVar eq "Caen"
										or myPiVar eq "Angers"
										or myPiVar eq "Annecy"
										or myPiVar eq "Chambery"
										or myPiVar eq "SophiaAntipolis"
										or myPiVar eq "Rennes"
										or myPiVar eq "Agen"
										or myPiVar eq "Albi"
										or myPiVar eq "Amboise"
										or myPiVar eq "Amiens"
										or myPiVar eq "Vezelay"
										or myPiVar eq "Vichy"
										or myPiVar eq "VilleFranche"
										or myPiVar eq "Tonnerre"
										or myPiVar eq "Toulouse"
										or myPiVar eq "Tours"
										or myPiVar eq "Troyes"
										or myPiVar eq "Vernon"
										or myPiVar eq "Versailles"
										or myPiVar eq "St%2EDenis"
										or myPiVar eq "St%2EEtienne"
										or myPiVar eq "St%2EMalo"
										or myPiVar eq "Talloires"
										or myPiVar eq "Pontlevoy"
										or myPiVar eq "Roubaix"
										or myPiVar eq "Rouen"
										or myPiVar eq "Royan"
										or myPiVar eq "Saint-Laurent-du-Var" or myPiVar eq "Saint%2DLaurent%2Ddu%2DVar"
										or myPiVar eq "Orleans"
										or myPiVar eq "Orsay"
										or myPiVar eq "Pau"
										or myPiVar eq "Perpignan"
										or myPiVar eq "Poitiers"
										or myPiVar eq "Mulhouse"
										or myPiVar eq "Nancy"
										or myPiVar eq "Nantes"
										or myPiVar eq "Nimes"
										or myPiVar eq "Marseille"
										or myPiVar eq "Metz"
										or myPiVar eq "Mont-St-Michel" or myPiVar eq "Mont%2DSt%2DMichel"
										or myPiVar eq "Montbard"
										or myPiVar eq "MonteCarlo"
										or myPiVar eq "LeMans"
										or myPiVar eq "Lille"
										or myPiVar eq "Lisieux"
										or myPiVar eq "LoireValley"
										or myPiVar eq "Macon"
										or myPiVar eq "Hyeres"
										or myPiVar eq "LaNapoule"
										or myPiVar eq "LaRochelle"
										or myPiVar eq "LaRosiere"
										or myPiVar eq "LeHavre"
										or myPiVar eq "Compiegne"
										or myPiVar eq "Dijon"
										or myPiVar eq "Epernay"
										or myPiVar eq "Fontainebleau"
										or myPiVar eq "Futuroscope"
										or myPiVar eq "Gap"
										or myPiVar eq "Cergy-pontoise" or myPiVar eq "Cergy%2Dpontoise"
										or myPiVar eq "Chartres"
										or myPiVar eq "Cheverny"
										or myPiVar eq "Cholet"
										or myPiVar eq "Collonges-sous-Saleve" or myPiVar eq "Collonges%2Dsous%2DSaleve"
										or myPiVar eq "Brest"
										or myPiVar eq "Brittany"
										or myPiVar eq "Cachan"
										or myPiVar eq "Auxerre"
										or myPiVar eq "Avignon"
										or myPiVar eq "Azay-le-Rideau" or myPiVar eq "Azay%2Dle%2DRideau"
										or myPiVar eq "Belfort"
										or myPiVar eq "Besancon"
										or myPiVar eq "Antibes"
										or myPiVar eq "Archamps"
										or myPiVar eq "Arles"
										or myPiVar eq "Arromanches">
                <div id="student_handbook_title">France <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Germany"
								or myPiVar eq "Aachen"
								or myPiVar eq "Berlin"
								or myPiVar eq "Bielefeld"
								or myPiVar eq "Bonn"
								or myPiVar eq "Braunschweig"
								or myPiVar eq "Bremen"
								or myPiVar eq "Cologne"
								or myPiVar eq "Cottbus"
								or myPiVar eq "Darmstadt"
								or myPiVar eq "Dortmund"
								or myPiVar eq "Dresden"
								or myPiVar eq "Duisburg"
								or myPiVar eq "Dusseldorf"
								or myPiVar eq "Eichstatt"
								or myPiVar eq "Erlangen-Nurnberg" or myPiVar eq "Erlangen%2DNurnberg"
								or myPiVar eq "Frankfurt"
								or myPiVar eq "Freiburg"
								or myPiVar eq "GieBen"
								or myPiVar eq "Gottingen"
								or myPiVar eq "Hamburg"
								or myPiVar eq "Hannover"
								or myPiVar eq "Heidelberg"
								or myPiVar eq "Hohenheim"
								or myPiVar eq "Jena"
								or myPiVar eq "Karlsruhe"
								or myPiVar eq "Kiel"
								or myPiVar eq "Konstanz"
								or myPiVar eq "Leipzig"
								or myPiVar eq "Lemgo"
								or myPiVar eq "Lüneburg"
								or myPiVar eq "Mainz"
								or myPiVar eq "Mannheim"
								or myPiVar eq "Marburg"
								or myPiVar eq "Mittweida"
								or myPiVar eq "Munchen"
								or myPiVar eq "Munich"
								or myPiVar eq "Munster"
								or myPiVar eq "Oestrich-winkel" or myPiVar eq "Oestrich%2Dwinkel"
								or myPiVar eq "Osnabrück"
								or myPiVar eq "Regensberg"
								or myPiVar eq "SchwabishHall"
								or myPiVar eq "Stuttgart"
								or myPiVar eq "Trier"
								or myPiVar eq "Tubingen"
								or myPiVar eq "Ulm"
								or myPiVar eq "Vallendar"
								or myPiVar eq "Weimar">
                <div id="student_handbook_title">Germany <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Ghana"
										or myPiVar eq "Accra"
										or myPiVar eq "Benin"
										or myPiVar eq "CapeCoast"
										or myPiVar eq "Ho"
										or myPiVar eq "Kimasi"
										or myPiVar eq "Kumasi"
										or myPiVar eq "Legon"
										or myPiVar eq "Nungua"
										or myPiVar eq "Togo">
                <div id="student_handbook_title">Ghana <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Greece"
or myPiVar eq "Athens" or myPiVar eq "Paros"
or myPiVar eq "Thessaloniki" or myPiVar eq "Ioannina"
or myPiVar eq "Piraeus" or myPiVar eq "Rhodes"
or myPiVar eq "Skopelos" or myPiVar eq "Volos">
                <div id="student_handbook_title">Greece <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Hungary"
										or myPiVar eq "Budapest"
										or myPiVar eq "Debrecen">
                <div id="student_handbook_title">Hungary <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "India"
										or myPiVar eq "Pune" or myPiVar eq "Hyderabad"
										or myPiVar eq "Manipal" or myPiVar eq "Varanasi"
										or myPiVar eq "Jaipur" or myPiVar eq "Mumbai"
										or myPiVar eq "BodhGaya" or myPiVar eq "Bangalore"
										or myPiVar eq "Agra" or myPiVar eq "Ahmedabad"
										or myPiVar eq "Auroville" or myPiVar eq "Zanskar"
										or myPiVar eq "Shilong" or myPiVar eq "Spiti"
										or myPiVar eq "TamilNadu" or myPiVar eq "Thiruvananthapuram"
										or myPiVar eq "Trivandrum" or myPiVar eq "Mysore"
										or myPiVar eq "NewDelhi" or myPiVar eq "Pondicherry"
										or myPiVar eq "Rajasthan" or myPiVar eq "Kolkata"
										or myPiVar eq "Ladakh" or myPiVar eq "Madras"
										or myPiVar eq "Madurai" or myPiVar eq "Mahabalipuram"
										or myPiVar eq "Kanchipuram" or myPiVar eq "Kerala"
										or myPiVar eq "Khajuraho" or myPiVar eq "Kochi"
										or myPiVar eq "Bombay" or myPiVar eq "Chennai"
										or myPiVar eq "Delhi" or myPiVar eq "Dharamsala"
										or myPiVar eq "Dhrangadhra" or myPiVar eq "Gangtok">
                <div id="student_handbook_title">India<br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Ireland"
or myPiVar eq "Limerick" or myPiVar eq "Dublin"
or myPiVar eq "Maynooth" or myPiVar eq "Cork"
or myPiVar eq "Galway" or myPiVar eq "Ballyvaughan"
or myPiVar eq "Belfast" or myPiVar eq "Carlow"
or myPiVar eq "Coleraine" or myPiVar eq "Newtownabbey"
or myPiVar eq "Jordanstown" or myPiVar eq "Londonderry"
or myPiVar eq "Magee">
                <div id="student_handbook_title">Ireland<br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Israel" or myPiVar eq "BeerSheva" or myPiVar eq "Haifa" or myPiVar eq "Jerusalem" or myPiVar eq "Nazareth" or myPiVar eq "TelAviv">
                <div id="student_handbook_title">Israel <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Italy"
										or myPiVar eq "Milan"
										or myPiVar eq "Rome" or myPiVar eq "Florence"
										or myPiVar eq "Siena" or myPiVar eq "Taormina"
										or myPiVar eq "Venice" or myPiVar eq "Tuscania"
										or myPiVar eq "Lecce" or myPiVar eq "Perugia"
										or myPiVar eq "Syracuse" or myPiVar eq "Sicily"
										or myPiVar eq "Padua" or myPiVar eq "Tuscany"
										or myPiVar eq "Naples" or myPiVar eq "Catania"
										or myPiVar eq "Ferrara" or myPiVar eq "Arezzo"
										or myPiVar eq "AscoliPiceno" or myPiVar eq "Assisi"
										or myPiVar eq "Bologna" or myPiVar eq "Cagliari"
										or myPiVar eq "CastiglionFiorentino"
										or myPiVar eq "Urbino" or myPiVar eq "Verona"
										or myPiVar eq "Vicenza" or myPiVar eq "Viterbo"
										or myPiVar eq "Trento" or myPiVar eq "Trieste"
										or myPiVar eq "Turin" or myPiVar eq "Pistoia"
										or myPiVar eq "Sanremo" or myPiVar eq "Sorrento"
										or myPiVar eq "PadernodelGrappa" or myPiVar eq "Padova"
										or myPiVar eq "Pavia" or myPiVar eq "Pisa"
										or myPiVar eq "Grado" or myPiVar eq "Lucca"
										or myPiVar eq "Orbetello" or myPiVar eq "Cortona"
										or myPiVar eq "Elba" or myPiVar eq "Genoa">
                <div id="student_handbook_title">Italy <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Japan"
										or myPiVar eq "Kyoto" or myPiVar eq "Tokyo"
										or myPiVar eq "Osaka" or myPiVar eq "Akita"
										or myPiVar eq "Asahikawa" or myPiVar eq "Ashikaga"
										or myPiVar eq "Beppu" or myPiVar eq "Chiba"
										or myPiVar eq "Yamato-machi" or myPiVar eq "Yokohama"
										or myPiVar eq "Zentsuji" or myPiVar eq "Sapporo"
										or myPiVar eq "Sendai" or myPiVar eq "Seta"
										or myPiVar eq "Toyama" or myPiVar eq "Tsukuba"
										or myPiVar eq "Nara" or myPiVar eq "Niigata"
										or myPiVar eq "Nishinomiya" or myPiVar eq "Oita"
										or myPiVar eq "Okoyama" or myPiVar eq "MitakaCity"
										or myPiVar eq "Morioka" or myPiVar eq "Nagano"
										or myPiVar eq "Nagasaki" or myPiVar eq "Nagoya"
										or myPiVar eq "Nakajo" or myPiVar eq "Kasugai"
										or myPiVar eq "Kawasaki" or myPiVar eq "Kobe"
										or myPiVar eq "KyotoCity" or myPiVar eq "Mishima"
										or myPiVar eq "Fukuoka" or myPiVar eq "Hikone"
										or myPiVar eq "HirakataCity" or myPiVar eq "Hiratsuka"
										or myPiVar eq "Hiroshima" or myPiVar eq "Kanazawa"
										or myPiVar eq "Yamato%2Dmachi">
                <div id="student_handbook_title">Japan <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Jordan" or myPiVar eq "Amman" or myPiVar eq "Irbid" or myPiVar eq "Madaba">
                <div id="student_handbook_title">Jordan <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "KenyaCoastRepublic"
										or myPcVar eq "Kenya Coast Republic"
										or myPcVar eq "Kenya%20Coast%20Republic"
										or myPiVar eq "CoastalKenya"
										or myPiVar eq "Eldoret"	
										or myPiVar eq "KilimanjaroBushCamp"
										or myPiVar eq "Kisumu"
										or myPiVar eq "KoobiFora"
										or myPiVar eq "Lamu"
										or myPiVar eq "Mombasa"
										or myPiVar eq "Nairobi">
                <div id="student_handbook_title">Kenya <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Korea,South"
										or myPcVar eq "SouthKorea"
										or mypcVar eq "Korea%2CSouth"
										or mypcVar eq "KoreaSouth"
										or myPiVar eq "Seoul"
										or myPiVar eq "AnsungCity"
										or myPiVar eq "Asan"
										or myPiVar eq "Busan"
										or myPiVar eq "Chuncheon"
										or myPiVar eq "Daegu"
										or myPiVar eq "Gyeongsan"
										or myPiVar eq "Pohang"
										or myPiVar eq "Pusan"
										or myPiVar eq "Suwon"
										or myPiVar eq "Taegu">
                <div id="student_handbook_title">South Korea <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Mexico"
										or myPiVar eq "Akumal" 
										or myPiVar eq "BahiaMagdalena"
										or myPiVar eq "BuenaVista"
										or myPiVar eq "Chiapas"
										or myPiVar eq "Cholula%2CPuebla"
										or myPiVar eq "Cholula,Puebla"
										or myPiVar eq "CiudaddeMexico"								
										or myPiVar eq "Cuernavaca"
										or myPiVar eq "EstadodeMexico"								
										or myPiVar eq "Guadalajara"
										or myPiVar eq "Guanajuato" 
										or myPiVar eq "Hermosillo"
										or myPiVar eq "LaManzanilla"
										or myPiVar eq "Mazatlan"
										or myPiVar eq "Merida"
										or myPiVar eq "MexicoCity"
										or myPiVar eq "Monterrey"
										or myPiVar eq "Morelia"
										or myPiVar eq "Oaxaca"
										or myPiVar eq "PlayadelCarmen"
										or myPiVar eq "PueblaCity"
										or myPiVar eq "PuertoMorelos"
										or myPiVar eq "PuertoSanCarlos"								
										or myPiVar eq "PuertoVallarta" 								
										or myPiVar eq "Queretaro"
										or myPiVar eq "SanCristobal" 
										or myPiVar eq "SanLuisPotosi"						
										or myPiVar eq "SanMigueldeAllende"
										or myPiVar eq "Taxco"  
										or myPiVar eq "TiburonIsland"
										or myPiVar eq "Toluca" 
										or myPiVar eq "Xalapa">
                <div id="student_handbook_title">Mexico <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Morocco" 
										or myPiVar eq "Casablanca" 
										or myPiVar eq "Fez" 
										or myPiVar eq "Ifrane" 
										or myPiVar eq "Meknes" 
										or myPiVar eq "Rabat" 
										or myPiVar eq "Tetouan">
                <div id="student_handbook_title">Morocco <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Netherlands"
										or myPiVar eq "Amsterdam"
										or myPiVar eq "Delft"
										or myPiVar eq "DenHaag"
										or myPiVar eq "Groningen"
										or myPiVar eq "Leiden"
										or myPiVar eq "Maastricht"
										or myPiVar eq "Masstricht"
										or myPiVar eq "Nijmegen"
										or myPiVar eq "Rotterdam"
										or myPiVar eq "TheHague"
										or myPiVar eq "Tilburg"
										or myPiVar eq "Utrecht"
										or myPiVar eq "Wageningen">
                <div id="student_handbook_title">Netherlands <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "NewZealand" 
										or myPcVar eq "New Zealand"  
										or myPcVar eq "New%20Zealand" 
										or myPiVar eq "Granada" 
										or myPiVar eq "Auckland"
										or myPiVar eq "NorthIsland" 
										or myPiVar eq "Christchurch"
										or myPiVar eq "Dunedin" 
										or myPiVar eq "Wellington"
										or myPiVar eq "Hamilton" 
										or myPiVar eq "PalmerstonNorth"
										or myPiVar eq "Canterbury" 
										or myPiVar eq "Queenstown"
										or myPiVar eq "Rotorua" 
										or myPiVar eq "Taradale"
										or myPiVar eq "Tauranga" 
										or myPiVar eq "Waikato"
										or myPiVar eq "Kaiaua" 
										or myPiVar eq "Mana"
										or myPiVar eq "Napier" 
										or myPiVar eq "Otago">
                <div id="student_handbook_title">New Zealand <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Nicaragua"
										or myPiVar eq "Granada"
										or myPiVar eq "Managua"
										or myPiVar eq "Bluefields">
                <div id="student_handbook_title">Nicaragua <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Peru"
										or myPiVar eq "Lima" 
										or myPiVar eq "Manu" 
										or myPiVar eq "Cuzco"
										or myPiVar eq "Ayacucho" 
										or myPiVar eq "Arequipa">
                <div id="student_handbook_title">Peru <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Poland" 
										or myPiVar eq "Krakow" 
										or myPiVar eq "Poznan"
										or myPiVar eq "Warsaw"
										or myPiVar eq "Wolin"
										or myPiVar eq "Wroclaw">
                <div id="student_handbook_title">Poland <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Portugal"
										or myPiVar eq "Lisbon" 
										or myPiVar eq "Porto"
										or myPiVar eq "Aveiro" 
										or myPiVar eq "Coimbra"
										or myPiVar eq "Faro" 
										or myPiVar eq "PraiadasMacas">
                <div id="student_handbook_title">Portugal <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "RussianFederation"
										 or myPcVar eq "Russia"
										or myPiVar eq "Irkutsk"
										or myPiVar eq "Khabarovsk"
										or myPiVar eq "Moscow"
										or myPiVar eq "NizhnyNovgorod"
										or myPiVar eq "NovgorodTheGreat"
										or myPiVar eq "Novosibirsk"
										or myPiVar eq "StPetersburg"
										or myPiVar eq "St%2EPetersburg"
										or myPiVar eq "Yaroslavl"
										or myPiVar eq "Vladimir"
										or myPiVar eq "Vladivostok">
                <div id="student_handbook_title">Russia <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "SouthAfrica" 
										or myPcVar eq "South Africa" 
										or myPcVar eq "South%20Africa"
										or myPiVar eq "Stellenbosch" 
										or myPiVar eq "CapeTown"
										or myPiVar eq "Bellville" 
										or myPiVar eq "PortElizabeth"
										or myPiVar eq "Johannesburg" 
										or myPiVar eq "Alice"
										or myPiVar eq "Bloemfontein" 
										or myPiVar eq "Durban"
										or myPiVar eq "Grahamstown" 
										or myPiVar eq "Swaziland"
										or myPiVar eq "Tygerberg" 
										or myPiVar eq "Lesotho"
										or myPiVar eq "Pietermaritzburg" 
										or myPiVar eq "Pretoria"
										or myPiVar eq "RichardsBay">
                <div id="student_handbook_title">South Africa <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Spain" 
										or myPiVar eq "Madrid" 
										or myPiVar eq "Cadiz"
										or myPiVar eq "Seville" 
										or myPiVar eq "Barcelona"
										or myPiVar eq "Alicante" 
										or myPiVar eq "Granada"
										or myPiVar eq "Malaga" 
										or myPiVar eq "PalmadeMallorca"
										or myPiVar eq "Salamanca" 
										or myPiVar eq "SanSebastian"
										or myPiVar eq "Sevilla" 
										or myPiVar eq "Valencia"
										or myPiVar eq "Vitora" 
										or myPiVar eq "Denia"
										or myPiVar eq "Tenerife" 
										or myPiVar eq "Herradura"
										or myPiVar eq "Marbella" 
										or myPiVar eq "Pamplona"
										or myPiVar eq "Bilbao" 
										or myPiVar eq "Girona"
										or myPiVar eq "Toledo" 
										or myPiVar eq "Mallorca"
										or myPiVar eq "Burgos" 
										or myPiVar eq "Menorca"
										or myPiVar eq "Alcala" 
										or myPiVar eq "Almeria"
										or myPiVar eq "Avila" 
										or myPiVar eq "Vic"
										or myPiVar eq "Vigo" 
										or myPiVar eq "Vitoria"
										or myPiVar eq "Valladolid" 
										or myPiVar eq "Ronda"
										or myPiVar eq "Santander" 
										or myPiVar eq "SantiagodeCompostela"
										or myPiVar eq "Segovia" 
										or myPiVar eq "Murcia"
										or myPiVar eq "Logrono" 
										or myPiVar eq "Cordoba"
										or myPiVar eq "Getafe" 
										or myPiVar eq "Oviedo">
                <div id="student_handbook_title">Spain <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Sweden"
										or myPiVar eq "Alnarp" 
										or myPiVar eq "Karlstad"
										or myPiVar eq "Kristianstad" 
										or myPiVar eq "Lulea"
										or myPiVar eq "Lund" 
										or myPiVar eq "Malmo"
										or myPiVar eq "Orebro" 
										or myPiVar eq "Stockholm"
										or myPiVar eq "Trollhättan" 
										or myPiVar eq "Uppsala"
										or myPiVar eq "Vasteras" 
										or myPiVar eq "Vaxjo">
                <div id="student_handbook_title">Sweden <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Switzerland"
										or myPiVar eq "Lucerne" 
										or myPiVar eq "Geneva"
										or myPiVar eq "Lugano" 
										or myPiVar eq "Bern"
										or myPiVar eq "Fribourg" 
										or myPiVar eq "Lausanne"
										or myPiVar eq "Leysin" 
										or myPiVar eq "Montreux"
										or myPiVar eq "Nyon" 
										or myPiVar eq "Zurich">
                <div id="student_handbook_title">Switzerland <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Taiwan" 
										or myPiVar eq "Hsinchu" 
										or myPiVar eq "Taipei" 
										or myPiVar eq "Taoyuan">
                <div id="student_handbook_title">Taiwan <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Thailand"
										or myPiVar eq "Singburi" 
										or myPiVar eq "Bangkok"
										or myPiVar eq "KhonKaen" 
										or myPiVar eq "ChiangMai"
										or myPiVar eq "ChaingMai" 
										or myPiVar eq "Cha-am" 
										or myPiVar eq "Cha%2Dam"
										or myPiVar eq "Chainat" 
										or myPiVar eq "ChonBuri"
										or myPiVar eq "Salaya" 
										or myPiVar eq "Trang"
										or myPiVar eq "HatYai" 
										or myPiVar eq "Lopburi"
										or myPiVar eq "MuakLek" 
										or myPiVar eq "NakhonPathon"
										or myPiVar eq "NakhonRatchasima">
                <div id="student_handbook_title">Thailand <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Turkey" 
										or myPiVar eq "Alanya"
										or myPiVar eq "Ankara" 
										or myPiVar eq "Antayla"
										or myPiVar eq "Bodrum"
										or myPiVar eq "CadirHoyuk"
										or myPiVar eq "CentralAnatolia"
										or myPiVar eq "Istanbul">
                <div id="student_handbook_title">Turkey <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "UnitedKingdom" 
										or myPcVar eq "United Kingdom" 
										or myPcVar eq "United%20Kingdom" 
										or myPiVar eq "London"
										or myPiVar eq "Edinburgh" 
										or myPiVar eq "Leeds"
										or myPiVar eq "Stirling" 
										or myPiVar eq "Aberdeen"
										or myPiVar eq "Bangor" 
										or myPiVar eq "Belfast"
										or myPiVar eq "Glasgow" 
										or myPiVar eq "St%2EAndrews"
										or myPiVar eq "Swansea" 
										or myPiVar eq "Durham"
										or myPiVar eq "Lancaster" 
										or myPiVar eq "Oxford"
										or myPiVar eq "Cambridge" 
										or myPiVar eq "Manchester"
										or myPiVar eq "Nottingham" 
										or myPiVar eq "Brighton"
										or myPiVar eq "York" 
										or myPiVar eq "Coleraine"
										or myPiVar eq "Cardiff" 
										or myPiVar eq "Dundee"
										or myPiVar eq "Kingston-upon-Thames" or myPiVar eq "Kingston%2Dupon%2DThames" 
										or myPiVar eq "Ormskirk"
										or myPiVar eq "Bath" 
										or myPiVar eq "Bedford"
										or myPiVar eq "Whitby" 
										or myPiVar eq "Wolverhampton"
										or myPiVar eq "Worthing" 
										or myPiVar eq "Wroxton"
										or myPiVar eq "Stafford" 
										or myPiVar eq "Stratford-upon-Avon" or myPiVar eq "Stratford%2Dupon%2DAvon"
										or myPiVar eq "Sunderland" 
										or myPiVar eq "Totnes"
										or myPiVar eq "Plymouth" 
										or myPiVar eq "Preston"
										or myPiVar eq "Reading" 
										or myPiVar eq "Sheffield"
										or myPiVar eq "Southampton" 
										or myPiVar eq "NewtonAbbot"
										or myPiVar eq "Newtownabbey" 
										or myPiVar eq "Norwich"
										or myPiVar eq "Liverpool" 
										or myPiVar eq "Londonderry"
										or myPiVar eq "Middlesbrough" 
										or myPiVar eq "Newcastle"
										or myPiVar eq "Kingston-upon-Hull" or myPiVar eq "Kingston%2Dupon%2DHull" or myPiVar eq "Lancashire"
										or myPiVar eq "Leicester" 
										or myPiVar eq "Huddersfield"
										or myPiVar eq "Hull" 
										or myPiVar eq "Inverness"
										or myPiVar eq "Jordanstown" 
										or myPiVar eq "Keele"
										or myPiVar eq "Kent" 
										or myPiVar eq "Exeter"
										or myPiVar eq "Exmouth" 
										or myPiVar eq "Findhorn"
										or myPiVar eq "Grantham" 
										or myPiVar eq "Haworth"
										or myPiVar eq "Dorset" 
										or myPiVar eq "EastSussex"
										or myPiVar eq "Eastbourne" 
										or myPiVar eq "Courtauld"
										or myPiVar eq "Coventry" 
										or myPiVar eq "Cuper"
										or myPiVar eq "Dartington" 
										or myPiVar eq "Derry"
										or myPiVar eq "Dorchester" 
										or myPiVar eq "Canterbury"
										or myPiVar eq "Cheltenham" 
										or myPiVar eq "Chester"
										or myPiVar eq "Colchester" 
										or myPiVar eq "Birmingham"
										or myPiVar eq "Bradford" 
										or myPiVar eq "Bristol">
                <div id="student_handbook_title">United Kingdom <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "UnitedStates" 
										or myPcVar eq "UnitedStates" 
										or myPcVar eq "United%20States" 
										or myPiVar eq "Chicago" 
										or myPiVar eq "LosAngeles" 
										or myPiVar eq "WashingtonDC" 
										or myPiVar eq "Oahu,Hawaii" 
										or myPiVar eq "Oahu%2CHawaii" 
										or myPiVar eq "Amherst,MA" 
										or myPiVar eq "Amherst%2CMA" 
										or myPiVar eq "Atlanta,GA" 
										or myPiVar eq "Atlanta%2CGA" 
										or myPiVar eq "Brunswick,ME" 
										or myPiVar eq "Brunswick%2CME" 
										or myPiVar eq "Hartford,CT" 
										or myPiVar eq "Hartford%2CCT"
										or myPiVar eq "SanDiego.CA" 
										or myPiVar eq "SanDiego%2ECA" 
										or myPiVar eq "SouthHadley,MA" 
										or myPiVar eq "SouthHadley%2CMA" 
										or myPiVar eq "Waterford,CT" 
										or myPiVar eq "Waterford%2CCT" 
										or myPiVar eq "Wellesley,MA" 
										or myPiVar eq "Wellesley%2CMA" 
										or myPiVar eq "Woods HoleMA" 
										or myPiVar eq "NewYork" 
										or myPiVar eq "Northampton,MA" 
										or myPiVar eq "Northampton%2CMA" 
										or myPiVar eq "Norton,MA" 
										or myPiVar eq "Norton%2CMA" 
										or myPiVar eq "Philadelphia" 
										or myPiVar eq "Poughkeepsie,NY" 
										or myPiVar eq "Poughkeepsie%2CNY" 
										or myPiVar eq "Honolulu,HI" 
										or myPiVar eq "Honolulu%2CHI" 
										or myPiVar eq "Middletown,CT" 
										or myPiVar eq "Middletown%2CCT" 
										or myPiVar eq "Minneapolis%2DSaintPaul" 
										or myPiVar eq "MinneapolisSaintPaul"
										or myPiVar eq "Mystic,CT" 
										or myPiVar eq "Mystic%2CCT" 
										or myPiVar eq "NewLondon,CT" 
										or myPiVar eq "NewLondon%2CCT" 
										or myPiVar eq "Jackson" 
										or myPiVar eq "NewOrleans"
										or myPiVar eq "WoodsHoleMA">
                <div id="student_handbook_title">United States <br />
                    Student Handbook</div>
                <cfelseif myPcVar eq "Vietnam"
										or myPiVar eq "AnGiang"
										or myPiVar eq "CanTho"
										or myPiVar eq "Danang"
										or myPiVar eq "HaiPhong"
										or myPiVar eq "HalongBay"
										or myPiVar eq "Hanoi"
										or myPiVar eq "HoChiMinhCity"
										or myPiVar eq "Hue"
										or myPiVar eq "PhnomPenh"
										or myPiVar eq "Reap"
										or myPiVar eq "Seam"
										or myPiVar eq "VungTau">
                <div id="student_handbook_title">Vietnam <br />
                    Student Handbook</div>
                <cfelse>
                <div id="student_handbook_title">Study Abroad <br />
                    Student Handbook</div>
            </cfif>
            <!--<cfoutput><div>#myPcVar#</div><div>#myPiVar#</div></cfoutput>-->
            <cfelse>
            <div id="student_handbook_title">Study Abroad <br />
                Student Handbook</div>
        </cfif>
    </div>
</div>
<div>
    <div class="student_handbook_menu">
        <cfif IsDefined("url.pc") or isDefined("url.pi")>
            <cfset myCountryhb=URLEncodedFormat(url.pc) />
            <cfset myCountryVarhb=Replace(myCountryhb,'%7F','','All') />
            <cfset myPcVar=Replace(myCountryVarhb,'%20',' ','All') />
            <cfset myCityhb=URLEncodedFormat(url.pi) />
            <cfset myCityVarhb=Replace(myCityhb,'%7F','','All') />
            <cfset myPiVar=Replace(myCityVarhb,'%20','','All') />
            <cfif myPcVar eq "Argentina"
                                        or myPiVar eq "Bariloche"
                                        or myPiVar eq "BuenosAires"
                                        or myPiVar eq "Cairns"
                                        or myPiVar eq "Cordoba"
                                        or myPiVar eq "Corrientes"
                                        or myPiVar eq "LibertadorSanMartin"
                                        or myPiVar eq "MardelPlata"			
                                        or myPiVar eq "Mendoza"
                                        or myPiVar eq "Patagonia"
                                        or myPiVar eq "Rosario"
                                        or myPiVar eq "Salta"
                                        or myPiVar eq "SanCarlosdeBariloche"
                                        or myPiVar eq "SanMigueldeTucuman"
                                        or myPiVar eq "Ushuaia"
                                        or myPiVar eq "Victoria">
                <cfset myPcVar="Argentina" />
                <cfelseif myPcVar eq "Australia"
                                        or myPiVar eq "Adelaide"
                                        or myPiVar eq "Albury-Wodonga"
                                        or myPiVar eq "Albury%2DWodonga"
                                        or myPiVar eq "AliceSprings"
                                        or myPiVar eq "Armidale"
                                        or myPiVar eq "AthertonTablelands"
                                        or myPiVar eq "AyersRock"
                                        or myPiVar eq "Ballarat"
                                        or myPiVar eq "Bathurst"
                                        or myPiVar eq "Bendigo"
                                        or myPiVar eq "Brisbane"
                                        or myPiVar eq "Bundoora"
                                        or myPiVar eq "ByronBay"
                                        or myPiVar eq "Byron Bay"
                                        or myPiVar eq "Byron%20Bay" 
                                        or myPiVar eq "Cairns"
                                        or myPiVar eq "Callagan"
                                        or myPiVar eq "Callaghan"
                                        or myPiVar eq "Canberra"
                                        or myPiVar eq "Darwin"
                                        or myPiVar eq "FraserIsland"
                                        or myPiVar eq "Fremantle"
                                        or myPiVar eq "Geelong"
                                        or myPiVar eq "GoldCoast"
                                        or myPiVar eq "GreatBarrierReef"
                                        or myPiVar eq "HerveyBay"
                                        or myPiVar eq "Hobart"
                                        or myPiVar eq "Kakadu"
                                        or myPiVar eq "KataTjuta"
                                        or myPiVar eq "Launceston"
                                        or myPiVar eq "Lismore"
                                        or myPiVar eq "Macarthur"
                                        or myPiVar eq "MagneticIsland"
                                        or myPiVar eq "MagneticIsland,"
                                        or myPiVar eq "Magnetic Island"
                                        or myPiVar eq "Magnetic Island,"
                                        or myPiVar eq "Magnetic%20Island"
                                        or myPiVar eq "Magnetic%20Island,"
                                        or myPiVar eq "MagneticIsland%2C"
                                        or myPiVar eq "Maroochydore"
                                        or myPiVar eq "Melbourne"
                                        or myPiVar eq "Mildura"
                                        or myPiVar eq "Mt. Buller"
                                        or myPiVar eq "Mt.%20Buller"
                                        or myPiVar eq "Mt%2EBuller"
                                        or myPiVar eq "Mt%2E%20Buller"
                                        or myPiVar eq "NewCastle"
                                        or myPiVar eq "NorthRyde"
                                        or myPiVar eq "Perth"
                                        or myPiVar eq "Queensland"
                                        or myPiVar eq "Robina"
                                        or myPiVar eq "Rockhampton"
                                        or myPiVar eq "St%2ELucia"
                                        or myPiVar eq "SunshineCoast"
                                        or myPiVar eq "Sydney"
                                        or myPiVar eq "Tasmania"
                                        or myPiVar eq "Toowoomba"
                                        or myPiVar eq "Townsville"
                                        or myPiVar eq "Uluru"
                                        
                                        or myPiVar eq "Victoria"
                                        or myPiVar eq "WaggaWagga"
                                        or myPiVar eq "Warrnambool"
                                        or myPiVar eq "Wollongong">
                <cfset myPcVar="Australia" />
                <cfelseif myPcVar eq "Austria"
                                        or myPiVar eq "Braunau"
                                        or myPiVar eq "Bregenz"
                                        or myPiVar eq "Graz"
                                        or myPiVar eq "Innsbruck"
                                        or myPiVar eq "Kitzbuhel"
                                        or myPiVar eq "Klagenfurt"
                                        or myPiVar eq "Lebon"
                                        or myPiVar eq "Leoben"
                                        or myPiVar eq "Linz"
                                        or myPiVar eq "Prien"
                                        or myPiVar eq "Salzburg"
                                        or myPiVar eq "Strobl"
                                        or myPiVar eq "Vienna"
                                        or myPiVar eq "WienerNeustadt">
                <cfset myPcVar="Austria" />
                <cfelseif myPcVar eq "Belgium"
                                        or myPiVar eq "Antwerp"
                                        or myPiVar eq "Brussels"
                                        or myPiVar eq "Leuven"
                                        or myPiVar eq "Liege"
                                        or myPiVar eq "Louvain">
                <cfset myPcVar="Belgium" />
                <cfelseif myPcVar eq "Brazil"
                                        or myPiVar eq "Bahia"
                                        or myPiVar eq "Belém"
                                        or myPiVar eq "BeloHorizonte"
                                        or myPiVar eq "Bahia"
                                        or myPiVar eq "Brazilia"
                                        or myPiVar eq "Campinas"
                                        or myPiVar eq "Curitiba"
                                        or myPiVar eq "Ecoversidade"
                                        or myPiVar eq "Florianopolis"
                                        or myPiVar eq "Fora"
                                        or myPiVar eq "Fortaleza"
                                        or myPiVar eq "Ilheus"
                                        or myPiVar eq "Imbituba"
                                        or myPiVar eq "JoãoPessoa"
                                        or myPiVar eq "Maceio"
                                        or myPiVar eq "Manaus"
                                        or myPiVar eq "Mariana"
                                        or myPiVar eq "Niteroi"
                                        or myPiVar eq "OuroPreto"
                                        or myPiVar eq "Parana"
                                        or myPiVar eq "Paranagua"
                                        or myPiVar eq "Parati"
                                        or myPiVar eq "Piracicaba"
                                        or myPiVar eq "PontaGrossa"
                                        or myPiVar eq "PonteAlegre"
                                        or myPiVar eq "PortoAlegre"
                                        or myPiVar eq "Recife"
                                        or myPiVar eq "RiodeJaneiro"
                                        or myPiVar eq "RioGrande"
                                        or myPiVar eq "Sabara"
                                        or myPiVar eq "Salvador"
                                        or myPiVar eq "SalvadordaBahia" 
                                        or myPiVar eq "Santarem"
                                        or myPiVar eq "Santos"
                                        or myPiVar eq "SaoPaulo"
                                        or myPiVar eq "SãoPaulo"
                                        or myPiVar eq "Viçosa"
                                        or myPiVar eq "Vitoria">
                <cfset myPcVar="Brazil" />
                <cfelseif myPcVar eq "Botswana" or myPiVar eq "Gaborone" or myPiVar eq "Maun">
                <cfset myPcVar="Botswana" />
                <cfelseif myPcVar eq "Canada"
                                        or myPiVar eq "Calgary"
                                        or myPiVar eq "Chicoutimi"
                                        or myPiVar eq "Edmonton"
                                        or myPiVar eq "GreaterSudbury"
                                        or myPiVar eq "Halifax"
                                        or myPiVar eq "Kamloops"
                                        or myPiVar eq "Lennoxville"
                                        or myPiVar eq "Montreal"
                                        or myPiVar eq "Ottawa"
                                        or myPiVar eq "Quebec"
                                        or myPiVar eq "Saskatoon"
                                        or myPiVar eq "Sherbrooke"
                                        or myPiVar eq "St%2ECatherines"
                                        or myPiVar eq "St%2CCatherines"
                                        or myPiVar eq "Sudbury"
                                        or myPiVar eq "Vancouver"
                                        or myPiVar eq "Whitehorse">
                <cfset myPcVar="Canada" />
                <cfelseif myPcVar eq "Chile"
										or myPiVar eq "Antofagasta"
										or myPiVar eq "Arica"
										or myPiVar eq "Chillan"
										or myPiVar eq "Concepcion"
										or myPiVar eq "Coquimbo"
										or myPiVar eq "Pichelemu"
										or myPiVar eq "Santiago"
										or myPiVar eq "Temecu"
										or myPiVar eq "Temuco"
										or myPiVar eq "Valdivia"
										or myPiVar eq "Valparaiso"
										or myPiVar eq "VinadelMar">
                <cfset myPcVar="Chile" />
                <cfelseif myPcVar eq "China"
										or myPiVar eq "Baotou"
										or myPiVar eq "Beijing"
										or myPiVar eq "Changchun"
										or myPiVar eq "Changsha"
										or myPiVar eq "Chengde"
										or myPiVar eq "Chengdu"
										or myPiVar eq "Chongqing"
										or myPiVar eq "Dalian"
										or myPiVar eq "Dongfang"
										or myPiVar eq "Fenyan"
										or myPiVar eq "Fuzhou"
										or myPiVar eq "Guangzhou"
										or myPiVar eq "Guilin"
										or myPiVar eq "GuiyangCity"
										or myPiVar eq "Haikou"
										or myPiVar eq "Haimen"
										or myPiVar eq "Hainan"
										or myPiVar eq "Hangdan" 
										or myPiVar eq "Handan"
										or myPiVar eq "Hangzhou"
										or myPiVar eq "Harbin"
										or myPiVar eq "HongKong"
										or myPiVar eq "Jiamusi"
										or myPiVar eq "Jilin"
										or myPiVar eq "Jinan"
										or myPiVar eq "Kham"
										or myPiVar eq "Kunming"
										or myPiVar eq "Lianyunang"
										or myPiVar eq "Lianyungang"
										or myPiVar eq "Lijiang"
										or myPiVar eq "Luoyang"
										or myPiVar eq "Macao"
										or myPiVar eq "Macau"
										or myPiVar eq "Nanjing"
										or myPiVar eq "Ningbo"
										or myPiVar eq "PearlRiverDelta"
										or myPiVar eq "Pingyao"
										or myPiVar eq "Qingdao"
										or myPiVar eq "Qinhuangdao"
										or myPiVar eq "Qufu"
										or myPiVar eq "Shandong"
										or myPiVar eq "Shanghai"
										or myPiVar eq "Shantou"
										or myPiVar eq "Shenyang"
										or myPiVar eq "Shenzhen"
										or myPiVar eq "Shijiazhuang" 
										or myPiVar eq "Shichuan" 
										or myPiVar eq "Sichuan" 
										or myPiVar eq "Suzhou" 
										or myPiVar eq "TangShan" 
										or myPiVar eq "Tianjin"
										or myPiVar eq "Tsinghua" 
										or myPiVar eq "Whenzhou" or myPiVar eq "Wenzhou"
										or myPiVar eq "Wuhan" 
										or myPiVar eq "Xi'an" 
										or myPiVar eq "Xi%27an" 
										or myPiVar eq "Xiamen" 
										or myPiVar eq "Xingang" 
										or myPiVar eq "Yangshuo" 
										or myPiVar eq "Yantai" 
										or myPiVar eq "Yiwu" 
										or myPiVar eq "Zhangjiang" 
										or myPiVar eq "Zhangzhou" 
										or myPiVar eq "Zhongdian">
                <cfset myPcVar="China" />
                <cfelseif myPcVar eq "CostaRica"
										or myPiVar eq "Alajuela" 
										or myPiVar eq "Alahuela" 
										or myPiVar eq "Atenas" 
										or myPiVar eq "Coronado" 
										or myPiVar eq "FlamingoBeach" 
										or myPiVar eq "Guanacaste" 
										or myPiVar eq "Heredia" 
										or myPiVar eq "JacoBeach" 
										or myPiVar eq "LaSuerte" 
										or myPiVar eq "ManuelAntonio" 
										or myPiVar eq "MonteVerde" 
										or myPiVar eq "Puntarenas" 
										or myPiVar eq "Samara" 
										or myPiVar eq "SanJoaquin" 
										or myPiVar eq "SanJose" 
										or myPiVar eq "SanLuisValley" 
										or myPiVar eq "SanPedro" 
										or myPiVar eq "SanRamon" 
										or myPiVar eq "SantaAna" 
										or myPiVar eq "Turrialba">
                <cfset myPcVar="Costa Rica" />
                <cfelseif myPcVar eq "CzechRepublic" or myPcVar eq "Czech Republic" or myPcVar eq "Czech%20Republic" or myPiVar eq "Prague">
                <cfset myPcVar="Czech Republic" />
                <cfelseif myPcVar eq "Denmark" 
										or myPiVar eq "Aalborg" 
										or myPiVar eq "Aarhus" 
										or myPiVar eq "Copenhagen" 
										or myPiVar eq "Esbjerg" 
										or myPiVar eq "Frederiksberg" 
										or myPiVar eq "Kolding" 
										or myPiVar eq "Lyngby" 
										or myPiVar eq "Lyingby"
										or myPiVar eq "Odense" 
										or myPiVar eq "Randers" 
										or myPiVar eq "Roskilde" 
										or myPiVar eq "Sonderborg" 
										or myPiVar eq "Thy" 
										or myPiVar eq "Tjele">
                <cfset myPcVar="Denmark" />
                <cfelseif myPcVar eq "DominicanRepublic" or myPcVar eq "Dominican Republic" or myPcVar eq "Dominican%20Republic"
										or myPiVar eq "Jarabacoa" 
										or myPiVar eq "LaRomana" 
										or myPiVar eq "Samana" 
										or myPiVar eq "Santiago" 
										or myPiVar eq "SantoDomingo" 
										or myPiVar eq "Sosua" 
										or myPiVar eq "Sosúa">
                <cfset myPcVar="Dominican Republic" />
                <cfelseif myPcVar eq "Ecuador" 
										or myPiVar eq "Cuenca" 
										or myPiVar eq "Galapagos" 
										or myPiVar eq "Guayaquil" 
										or myPiVar eq "Mindo" 
										or myPiVar eq "Montañita" 
										or myPiVar eq "NapoRegion" 
										or myPiVar eq "Quito" 
										or myPiVar eq "SanCristobal">
                <cfset myPcVar="Ecuador" />
                <cfelseif myPcVar eq "Egypt" 
										or myPiVar eq "Cairo" 
										or myPiVar eq "Alexandria" 
										or myPiVar eq "Edfu" 
										or myPiVar eq "Luxor" 
										or myPiVar eq "PortSaid" 
										or myPiVar eq "SharmElSheikh" 
										or myPiVar eq "Sinai">
                <cfset myPcVar="Egypt" />
                <cfelseif myPcVar eq "Finland"
										or myPiVar eq "Vaasa"
										or myPiVar eq "Abo"
										or myPiVar eq "Helsinki"
										or myPiVar eq "Joensuu"
										or myPiVar eq "Jyvaskyla"
										or myPiVar eq "Koupio"
										or myPiVar eq "Lappeenranta"
										or myPiVar eq "Oulu"
										or myPiVar eq "Tampere"
										or myPiVar eq "Turku">
                <cfset myPcVar="Finland" />
                <cfelseif myPcVar eq "France"
										or myPiVar eq "AixenProvence"
										or myPiVar eq "Aix-en-Provence" or myPiVar eq "Aix%2Den%2DProvence" or myPiVar eq "Aix%2Den%2DProvence"
										or myPiVar eq "Paris"
										or myPiVar eq "Cannes"
										or myPiVar eq "Nice"								
										or myPiVar eq "Lyon"
										or myPiVar eq "Montpellier"
										or myPiVar eq "Normandy"
										or myPiVar eq "Grenoble"
										or myPiVar eq "Strasbourg"
										or myPiVar eq "Biarritz"
										or myPiVar eq "Bordeaux"
										or myPiVar eq "Caen"
										or myPiVar eq "Angers"
										or myPiVar eq "Annecy"
										or myPiVar eq "Chambery"
										or myPiVar eq "SophiaAntipolis"
										or myPiVar eq "Rennes"
										or myPiVar eq "Agen"
										or myPiVar eq "Albi"
										or myPiVar eq "Amboise"
										or myPiVar eq "Amiens"
										or myPiVar eq "Vezelay"
										or myPiVar eq "Vichy"
										or myPiVar eq "VilleFranche"
										or myPiVar eq "Tonnerre"
										or myPiVar eq "Toulouse"
										or myPiVar eq "Tours"
										or myPiVar eq "Troyes"
										or myPiVar eq "Vernon"
										or myPiVar eq "Versailles"
										or myPiVar eq "St%2EDenis"
										or myPiVar eq "St%2EEtienne"
										or myPiVar eq "St%2EMalo"
										or myPiVar eq "Talloires"
										or myPiVar eq "Pontlevoy"
										or myPiVar eq "Roubaix"
										or myPiVar eq "Rouen"
										or myPiVar eq "Royan"
										or myPiVar eq "Saint-Laurent-du-Var" or myPiVar eq "Saint%2DLaurent%2Ddu%2DVar"
										or myPiVar eq "Orleans"
										or myPiVar eq "Orsay"
										or myPiVar eq "Pau"
										or myPiVar eq "Perpignan"
										or myPiVar eq "Poitiers"
										or myPiVar eq "Mulhouse"
										or myPiVar eq "Nancy"
										or myPiVar eq "Nantes"
										or myPiVar eq "Nimes"
										or myPiVar eq "Marseille"
										or myPiVar eq "Metz"
										or myPiVar eq "Mont-St-Michel" or myPiVar eq "Mont%2DSt%2DMichel"
										or myPiVar eq "Montbard"
										or myPiVar eq "MonteCarlo"
										or myPiVar eq "LeMans"
										or myPiVar eq "Lille"
										or myPiVar eq "Lisieux"
										or myPiVar eq "LoireValley"
										or myPiVar eq "Macon"
										or myPiVar eq "Hyeres"
										or myPiVar eq "LaNapoule"
										or myPiVar eq "LaRochelle"
										or myPiVar eq "LaRosiere"
										or myPiVar eq "LeHavre"
										or myPiVar eq "Compiegne"
										or myPiVar eq "Dijon"
										or myPiVar eq "Epernay"
										or myPiVar eq "Fontainebleau"
										or myPiVar eq "Futuroscope"
										or myPiVar eq "Gap"
										or myPiVar eq "Cergy-pontoise" or myPiVar eq "Cergy%2Dpontoise"
										or myPiVar eq "Chartres"
										or myPiVar eq "Cheverny"
										or myPiVar eq "Cholet"
										or myPiVar eq "Collonges-sous-Saleve" or myPiVar eq "Collonges%2Dsous%2DSaleve"
										or myPiVar eq "Brest"
										or myPiVar eq "Brittany"
										or myPiVar eq "Cachan"
										or myPiVar eq "Auxerre"
										or myPiVar eq "Avignon"
										or myPiVar eq "Azay-le-Rideau" or myPiVar eq "Azay%2Dle%2DRideau"
										or myPiVar eq "Belfort"
										or myPiVar eq "Besancon"
										or myPiVar eq "Antibes"
										or myPiVar eq "Archamps"
										or myPiVar eq "Arles"
										or myPiVar eq "Arromanches">
                <cfset myPcVar="France" />
                <cfelseif myPcVar eq "Germany"
										or myPiVar eq "Aachen"
										or myPiVar eq "Berlin"
										or myPiVar eq "Bielefeld"
										or myPiVar eq "Bonn"
										or myPiVar eq "Braunschweig"
										or myPiVar eq "Bremen"
										or myPiVar eq "Cologne"
										or myPiVar eq "Cottbus"
										or myPiVar eq "Darmstadt"
										or myPiVar eq "Dortmund"
										or myPiVar eq "Dresden"
										or myPiVar eq "Duisburg"
										or myPiVar eq "Dusseldorf"
										or myPiVar eq "Eichstatt"
										or myPiVar eq "Erlangen-Nurnberg" or myPiVar eq "Erlangen%2DNurnberg"
										or myPiVar eq "Frankfurt"
										or myPiVar eq "Freiburg"
										or myPiVar eq "GieBen"
										or myPiVar eq "Gottingen"
										or myPiVar eq "Hamburg"
										or myPiVar eq "Hannover"
										or myPiVar eq "Heidelberg"
										or myPiVar eq "Hohenheim"
										or myPiVar eq "Jena"
										or myPiVar eq "Karlsruhe"
										or myPiVar eq "Kiel"
										or myPiVar eq "Konstanz"
										or myPiVar eq "Leipzig"
										or myPiVar eq "Lemgo"
										or myPiVar eq "Lüneburg"
										or myPiVar eq "Mainz"
										or myPiVar eq "Mannheim"
										or myPiVar eq "Marburg"
										or myPiVar eq "Mittweida"
										or myPiVar eq "Munchen"
										or myPiVar eq "Munich"
										or myPiVar eq "Munster"
										or myPiVar eq "Oestrich-winkel" or myPiVar eq "Oestrich%2Dwinkel"
										or myPiVar eq "Osnabrück"
										or myPiVar eq "Regensberg"
										or myPiVar eq "SchwabishHall"
										or myPiVar eq "Stuttgart"
										or myPiVar eq "Trier"
										or myPiVar eq "Tubingen"
										or myPiVar eq "Ulm"
										or myPiVar eq "Vallendar"
										or myPiVar eq "Weimar">
                <cfset myPcVar="Germany" />
                <cfelseif myPcVar eq "Ghana"
										or myPiVar eq "Accra"
										or myPiVar eq "Benin"
										or myPiVar eq "CapeCoast"
										or myPiVar eq "Ho"
										or myPiVar eq "Kimasi"
										or myPiVar eq "Kumasi"
										or myPiVar eq "Legon"
										or myPiVar eq "Nungua"
										or myPiVar eq "Togo">
                <cfset myPcVar="Ghana" />
                <cfelseif myPcVar eq "Greece"
										or myPiVar eq "Athens" or myPiVar eq "Paros"
										or myPiVar eq "Thessaloniki" or myPiVar eq "Ioannina"
										or myPiVar eq "Piraeus" or myPiVar eq "Rhodes"
										or myPiVar eq "Skopelos" or myPiVar eq "Volos">
                <cfset myPcVar="Greece" />
                <cfelseif myPcVar eq "Hungary"
										or myPiVar eq "Budapest"
										or myPiVar eq "Debrecen">
                <cfset myPcVar="Hungary" />
                <cfelseif myPcVar eq "India"
										or myPiVar eq "Pune" or myPiVar eq "Hyderabad"
										or myPiVar eq "Manipal" or myPiVar eq "Varanasi"
										or myPiVar eq "Jaipur" or myPiVar eq "Mumbai"
										or myPiVar eq "BodhGaya" or myPiVar eq "Bangalore"
										or myPiVar eq "Agra" or myPiVar eq "Ahmedabad"
										or myPiVar eq "Auroville" or myPiVar eq "Zanskar"
										or myPiVar eq "Shilong" or myPiVar eq "Spiti"
										or myPiVar eq "TamilNadu" or myPiVar eq "Thiruvananthapuram"
										or myPiVar eq "Trivandrum" or myPiVar eq "Mysore"
										or myPiVar eq "NewDelhi" or myPiVar eq "Pondicherry"
										or myPiVar eq "Rajasthan" or myPiVar eq "Kolkata"
										or myPiVar eq "Ladakh" or myPiVar eq "Madras"
										or myPiVar eq "Madurai" or myPiVar eq "Mahabalipuram"
										or myPiVar eq "Kanchipuram" or myPiVar eq "Kerala"
										or myPiVar eq "Khajuraho" or myPiVar eq "Kochi"
										or myPiVar eq "Bombay" or myPiVar eq "Chennai"
										or myPiVar eq "Delhi" or myPiVar eq "Dharamsala"
										or myPiVar eq "Dhrangadhra" or myPiVar eq "Gangtok">
                <cfset myPcVar="India" />
                <cfelseif myPcVar eq "Israel" or myPiVar eq "BeerSheva" or myPiVar eq "Haifa" or myPiVar eq "Jerusalem" or myPiVar eq "Nazareth" or myPiVar eq "TelAviv">
                <cfset myPcVar="Israel" />
                <cfelseif myPcVar eq "Italy"
										or myPiVar eq "Milan"
										or myPiVar eq "Rome" or myPiVar eq "Florence"
										or myPiVar eq "Siena" or myPiVar eq "Taormina"
										or myPiVar eq "Venice" or myPiVar eq "Tuscania"
										or myPiVar eq "Lecce" or myPiVar eq "Perugia"
										or myPiVar eq "Syracuse" or myPiVar eq "Sicily"
										or myPiVar eq "Padua" or myPiVar eq "Tuscany"
										or myPiVar eq "Naples" or myPiVar eq "Catania"
										or myPiVar eq "Ferrara" or myPiVar eq "Arezzo"
										or myPiVar eq "AscoliPiceno" or myPiVar eq "Assisi"
										or myPiVar eq "Bologna" or myPiVar eq "Cagliari"
										or myPiVar eq "CastiglionFiorentino"
										or myPiVar eq "Urbino" or myPiVar eq "Verona"
										or myPiVar eq "Vicenza" or myPiVar eq "Viterbo"
										or myPiVar eq "Trento" or myPiVar eq "Trieste"
										or myPiVar eq "Turin" or myPiVar eq "Pistoia"
										or myPiVar eq "Sanremo" or myPiVar eq "Sorrento"
										or myPiVar eq "PadernodelGrappa" or myPiVar eq "Padova"
										or myPiVar eq "Pavia" or myPiVar eq "Pisa"
										or myPiVar eq "Grado" or myPiVar eq "Lucca"
										or myPiVar eq "Orbetello" or myPiVar eq "Cortona"
										or myPiVar eq "Elba" or myPiVar eq "Genoa">
                <cfset myPcVar="Italy" />
                <cfelseif myPcVar eq "Japan"
										or myPiVar eq "Kyoto" or myPiVar eq "Tokyo"
										or myPiVar eq "Osaka" or myPiVar eq "Akita"
										or myPiVar eq "Asahikawa" or myPiVar eq "Ashikaga"
										or myPiVar eq "Beppu" or myPiVar eq "Chiba"
										or myPiVar eq "Yamato-machi" or myPiVar eq "Yokohama"
										or myPiVar eq "Zentsuji" or myPiVar eq "Sapporo"
										or myPiVar eq "Sendai" or myPiVar eq "Seta"
										or myPiVar eq "Toyama" or myPiVar eq "Tsukuba"
										or myPiVar eq "Nara" or myPiVar eq "Niigata"
										or myPiVar eq "Nishinomiya" or myPiVar eq "Oita"
										or myPiVar eq "Okoyama" or myPiVar eq "MitakaCity"
										or myPiVar eq "Morioka" or myPiVar eq "Nagano"
										or myPiVar eq "Nagasaki" or myPiVar eq "Nagoya"
										or myPiVar eq "Nakajo" or myPiVar eq "Kasugai"
										or myPiVar eq "Kawasaki" or myPiVar eq "Kobe"
										or myPiVar eq "KyotoCity" or myPiVar eq "Mishima"
										or myPiVar eq "Fukuoka" or myPiVar eq "Hikone"
										or myPiVar eq "HirakataCity" or myPiVar eq "Hiratsuka"
										or myPiVar eq "Hiroshima" or myPiVar eq "Kanazawa"
										or myPiVar eq "Yamato%2Dmachi">
                <cfset myPcVar="Japan" />
                <cfelseif myPcVar eq "Jordan" or myPiVar eq "Amman" or myPiVar eq "Irbid" or myPiVar eq "Madaba">
                <cfset myPcVar="Jordan" />
                <cfelseif myPcVar eq "KenyaCoastRepublic"
										or myPcVar eq "Kenya Coast Republic"
										or myPcVar eq "Kenya%20Coast%20Republic"
										or myPiVar eq "CoastalKenya"
										or myPiVar eq "Eldoret"	
										or myPiVar eq "KilimanjaroBushCamp"
										or myPiVar eq "Kisumu"
										or myPiVar eq "KoobiFora"
										or myPiVar eq "Lamu"
										or myPiVar eq "Mombasa"
										or myPiVar eq "Nairobi">
                <cfset myPcVar="Kenya" />
                <cfelseif myPcVar eq "Korea,South"
										or myPcVar eq "SouthKorea"
										or mypcVar eq "Korea%2CSouth"
										or mypcVar eq "KoreaSouth"
										or myPiVar eq "Seoul"
										or myPiVar eq "AnsungCity"
										or myPiVar eq "Asan"
										or myPiVar eq "Busan"
										or myPiVar eq "Chuncheon"
										or myPiVar eq "Daegu"
										or myPiVar eq "Gyeongsan"
										or myPiVar eq "Pohang"
										or myPiVar eq "Pusan"
										or myPiVar eq "Suwon"
										or myPiVar eq "Taegu">
                <cfset myPcVar="South Korea" />
                <cfelseif myPcVar eq "Mexico"
										or myPiVar eq "Akumal" 
										or myPiVar eq "BahiaMagdalena"
										or myPiVar eq "BuenaVista"
										or myPiVar eq "Chiapas"
										or myPiVar eq "Cholula%2CPuebla"
										or myPiVar eq "Cholula,Puebla"
										or myPiVar eq "CiudaddeMexico"								
										or myPiVar eq "Cuernavaca"
										or myPiVar eq "EstadodeMexico"								
										or myPiVar eq "Guadalajara"
										or myPiVar eq "Guanajuato" 
										or myPiVar eq "Hermosillo"
										or myPiVar eq "LaManzanilla"
										or myPiVar eq "Mazatlan"
										or myPiVar eq "Merida"
										or myPiVar eq "MexicoCity"
										or myPiVar eq "Monterrey"
										or myPiVar eq "Morelia"
										or myPiVar eq "Oaxaca"
										or myPiVar eq "PlayadelCarmen"
										or myPiVar eq "PueblaCity"
										or myPiVar eq "PuertoMorelos"
										or myPiVar eq "PuertoSanCarlos"								
										or myPiVar eq "PuertoVallarta" 								
										or myPiVar eq "Queretaro"
										or myPiVar eq "SanCristobal" 
										or myPiVar eq "SanLuisPotosi"						
										or myPiVar eq "SanMigueldeAllende"
										or myPiVar eq "Taxco"  
										or myPiVar eq "TiburonIsland"
										or myPiVar eq "Toluca" 
										or myPiVar eq "Xalapa">
                <cfset myPcVar="Mexico" />
                <cfelseif myPcVar eq "Morocco" 
										or myPiVar eq "Casablanca" 
										or myPiVar eq "Fez" 
										or myPiVar eq "Ifrane" 
										or myPiVar eq "Meknes" 
										or myPiVar eq "Rabat" 
										or myPiVar eq "Tetouan">
                <cfset myPcVar="Morocco" />
                <cfelseif myPcVar eq "Netherlands"
										or myPiVar eq "Amsterdam"
										or myPiVar eq "Delft"
										or myPiVar eq "DenHaag"
										or myPiVar eq "Groningen"
										or myPiVar eq "Leiden"
										or myPiVar eq "Maastricht"
										or myPiVar eq "Masstricht"
										or myPiVar eq "Nijmegen"
										or myPiVar eq "Rotterdam"
										or myPiVar eq "TheHague"
										or myPiVar eq "Tilburg"
										or myPiVar eq "Utrecht"
										or myPiVar eq "Wageningen">
                <cfset myPcVar="Netherlands" />
                <cfelseif myPcVar eq "NewZealand" 
										or myPcVar eq "New Zealand"  
										or myPcVar eq "New%20Zealand" 
										or myPiVar eq "Granada" 
										or myPiVar eq "Auckland"
										or myPiVar eq "NorthIsland" 
										or myPiVar eq "Christchurch"
										or myPiVar eq "Dunedin" 
										or myPiVar eq "Wellington"
										or myPiVar eq "Hamilton" 
										or myPiVar eq "PalmerstonNorth"
										or myPiVar eq "Canterbury" 
										or myPiVar eq "Queenstown"
										or myPiVar eq "Rotorua" 
										or myPiVar eq "Taradale"
										or myPiVar eq "Tauranga" 
										or myPiVar eq "Waikato"
										or myPiVar eq "Kaiaua" 
										or myPiVar eq "Mana"
										or myPiVar eq "Napier" 
										or myPiVar eq "Otago">
                <cfset myPcVar="New Zealand" />
                <cfelseif myPcVar eq "Nicaragua"
										or myPiVar eq "Granada"
										or myPiVar eq "Managua"
										or myPiVar eq "Bluefields">
                <cfset myPcVar="Nicaragua" />
                <cfelseif myPcVar eq "Peru"
										or myPiVar eq "Lima" 
										or myPiVar eq "Manu" 
										or myPiVar eq "Cuzco"
										or myPiVar eq "Ayacucho" 
										or myPiVar eq "Arequipa">
                <cfset myPcVar="Peru" />
                <cfelseif myPcVar eq "Poland" 
										or myPiVar eq "Krakow" 
										or myPiVar eq "Poznan"
										or myPiVar eq "Warsaw"
										or myPiVar eq "Wolin"
										or myPiVar eq "Wroclaw">
                <cfset myPcVar="Poland" />
                <cfelseif myPcVar eq "Portugal"
										or myPiVar eq "Lisbon" 
										or myPiVar eq "Porto"
										or myPiVar eq "Aveiro" 
										or myPiVar eq "Coimbra"
										or myPiVar eq "Faro" 
										or myPiVar eq "PraiadasMacas">
                <cfset myPcVar="Portugal" />
                <cfelseif myPcVar eq "RussianFederation"
										 or myPcVar eq "Russia"
										or myPcVar eq "Russian Federation"
										or myPcVar eq "Russian%20Federation"
										or myPiVar eq "Irkutsk"
										or myPiVar eq "Khabarovsk"
										or myPiVar eq "Moscow"
										or myPiVar eq "NizhnyNovgorod"
										or myPiVar eq "NovgorodTheGreat"
										or myPiVar eq "Novosibirsk"
										or myPiVar eq "StPetersburg"
										or myPiVar eq "St%2EPetersburg"
										or myPiVar eq "Yaroslavl"
										or myPiVar eq "Vladimir"
										or myPiVar eq "Vladivostok">
                <cfset myPcVar="Russia" />
                <cfelseif myPcVar eq "SouthAfrica" 
										or myPcVar eq "South Africa" 
										or myPcVar eq "South%20Africa"
										or myPiVar eq "Stellenbosch" 
										or myPiVar eq "CapeTown"
										or myPiVar eq "Bellville" 
										or myPiVar eq "PortElizabeth"
										or myPiVar eq "Johannesburg" 
										or myPiVar eq "Alice"
										or myPiVar eq "Bloemfontein" 
										or myPiVar eq "Durban"
										or myPiVar eq "Grahamstown" 
										or myPiVar eq "Swaziland"
										or myPiVar eq "Tygerberg" 
										or myPiVar eq "Lesotho"
										or myPiVar eq "Pietermaritzburg" 
										or myPiVar eq "Pretoria"
										or myPiVar eq "RichardsBay">
                <cfset myPcVar="South Africa" />
                <cfelseif myPcVar eq "Spain" 
										or myPiVar eq "Madrid" 
										or myPiVar eq "Cadiz"
										or myPiVar eq "Seville" 
										or myPiVar eq "Barcelona"
										or myPiVar eq "Alicante" 
										or myPiVar eq "Granada"
										or myPiVar eq "Malaga" 
										or myPiVar eq "PalmadeMallorca"
										or myPiVar eq "Salamanca" 
										or myPiVar eq "SanSebastian"
										or myPiVar eq "Sevilla" 
										or myPiVar eq "Valencia"
										or myPiVar eq "Vitora" 
										or myPiVar eq "Denia"
										or myPiVar eq "Tenerife" 
										or myPiVar eq "Herradura"
										or myPiVar eq "Marbella" 
										or myPiVar eq "Pamplona"
										or myPiVar eq "Bilbao" 
										or myPiVar eq "Girona"
										or myPiVar eq "Toledo" 
										or myPiVar eq "Mallorca"
										or myPiVar eq "Burgos" 
										or myPiVar eq "Menorca"
										or myPiVar eq "Alcala" 
										or myPiVar eq "Almeria"
										or myPiVar eq "Avila" 
										or myPiVar eq "Vic"
										or myPiVar eq "Vigo" 
										or myPiVar eq "Vitoria"
										or myPiVar eq "Valladolid" 
										or myPiVar eq "Ronda"
										or myPiVar eq "Santander" 
										or myPiVar eq "SantiagodeCompostela"
										or myPiVar eq "Segovia" 
										or myPiVar eq "Murcia"
										or myPiVar eq "Logrono" 
										or myPiVar eq "Cordoba"
										or myPiVar eq "Getafe" 
										or myPiVar eq "Oviedo">
                <cfset myPcVar="Spain" />
                <cfelseif myPcVar eq "Sweden"
										or myPiVar eq "Alnarp" 
										or myPiVar eq "Karlstad"
										or myPiVar eq "Kristianstad" 
										or myPiVar eq "Lulea"
										or myPiVar eq "Lund" 
										or myPiVar eq "Malmo"
										or myPiVar eq "Orebro" 
										or myPiVar eq "Stockholm"
										or myPiVar eq "Trollhättan" 
										or myPiVar eq "Uppsala"
										or myPiVar eq "Vasteras" 
										or myPiVar eq "Vaxjo">
                <cfset myPcVar="Sweden" />
                <cfelseif myPcVar eq "Switzerland"
										or myPiVar eq "Lucerne" 
										or myPiVar eq "Geneva"
										or myPiVar eq "Lugano" 
										or myPiVar eq "Bern"
										or myPiVar eq "Fribourg" 
										or myPiVar eq "Lausanne"
										or myPiVar eq "Leysin" 
										or myPiVar eq "Montreux"
										or myPiVar eq "Nyon" 
										or myPiVar eq "Zurich">
                <cfset myPcVar="Switzerland" />
                <cfelseif myPcVar eq "Taiwan" 
										or myPiVar eq "Hsinchu" 
										or myPiVar eq "Taipei" 
										or myPiVar eq "Taoyuan">
                <cfset myPcVar="Taiwan" />
                <cfelseif myPcVar eq "Thailand"
										or myPiVar eq "Singburi" 
										or myPiVar eq "Bangkok"
										or myPiVar eq "KhonKaen" 
										or myPiVar eq "ChiangMai" 
										or myPiVar eq "Cha-am" 
										or myPiVar eq "Cha%2Dam"
										or myPiVar eq "Chainat" 
										or myPiVar eq "ChonBuri"
										or myPiVar eq "Salaya" 
										or myPiVar eq "Trang"
										or myPiVar eq "HatYai" 
										or myPiVar eq "Lopburi"
										or myPiVar eq "MuakLek" 
										or myPiVar eq "NakhonPathon"
										or myPiVar eq "NakhonRatchasima">
                <cfset myPcVar="Thailand" />
                <cfelseif myPcVar eq "Turkey" 
										or myPiVar eq "Alanya"
										or myPiVar eq "Ankara" 
										or myPiVar eq "Antayla"
										or myPiVar eq "Bodrum"
										or myPiVar eq "CadirHoyuk"
										or myPiVar eq "CentralAnatolia"
										or myPiVar eq "Istanbul">
                <cfset myPcVar="Turkey" />
                <cfelseif myPcVar eq "UnitedKingdom" 
										or myPcVar eq "United Kingdom" 
										or myPcVar eq "United%20Kingdom" 
										or myPiVar eq "London"
										or myPiVar eq "Edinburgh" 
										or myPiVar eq "Leeds"
										or myPiVar eq "Stirling" 
										or myPiVar eq "Aberdeen"
										or myPiVar eq "Bangor" 
										or myPiVar eq "Belfast"
										or myPiVar eq "Glasgow" 
										or myPiVar eq "St%2EAndrews"
										or myPiVar eq "Swansea" 
										or myPiVar eq "Durham"
										or myPiVar eq "Lancaster" 
										or myPiVar eq "Oxford"
										or myPiVar eq "Cambridge" 
										or myPiVar eq "Manchester"
										or myPiVar eq "Nottingham" 
										or myPiVar eq "Brighton"
										or myPiVar eq "York" 
										or myPiVar eq "Coleraine"
										or myPiVar eq "Cardiff" 
										or myPiVar eq "Dundee"
										or myPiVar eq "Kingston-upon-Thames" or myPiVar eq "Kingston%2Dupon%2DThames" 
										or myPiVar eq "Ormskirk"
										or myPiVar eq "Bath" 
										or myPiVar eq "Bedford"
										or myPiVar eq "Whitby" 
										or myPiVar eq "Wolverhampton"
										or myPiVar eq "Worthing" 
										or myPiVar eq "Wroxton"
										or myPiVar eq "Stafford" 
										or myPiVar eq "Stratford-upon-Avon" or myPiVar eq "Stratford%2Dupon%2DAvon"
										or myPiVar eq "Sunderland" 
										or myPiVar eq "Totnes"
										or myPiVar eq "Plymouth" 
										or myPiVar eq "Preston"
										or myPiVar eq "Reading" 
										or myPiVar eq "Sheffield"
										or myPiVar eq "Southampton" 
										or myPiVar eq "NewtonAbbot"
										or myPiVar eq "Newtownabbey" 
										or myPiVar eq "Norwich"
										or myPiVar eq "Liverpool" 
										or myPiVar eq "Londonderry"
										or myPiVar eq "Middlesbrough" 
										or myPiVar eq "Newcastle"
										or myPiVar eq "Kingston-upon-Hull" or myPiVar eq "Kingston%2Dupon%2DHull" or myPiVar eq "Lancashire"
										or myPiVar eq "Leicester" 
										or myPiVar eq "Huddersfield"
										or myPiVar eq "Hull" 
										or myPiVar eq "Inverness"
										or myPiVar eq "Jordanstown" 
										or myPiVar eq "Keele"
										or myPiVar eq "Kent" 
										or myPiVar eq "Exeter"
										or myPiVar eq "Exmouth" 
										or myPiVar eq "Findhorn"
										or myPiVar eq "Grantham" 
										or myPiVar eq "Haworth"
										or myPiVar eq "Dorset" 
										or myPiVar eq "EastSussex"
										or myPiVar eq "Eastbourne" 
										or myPiVar eq "Courtauld"
										or myPiVar eq "Coventry" 
										or myPiVar eq "Cuper"
										or myPiVar eq "Dartington" 
										or myPiVar eq "Derry"
										or myPiVar eq "Dorchester" 
										or myPiVar eq "Canterbury"
										or myPiVar eq "Cheltenham" 
										or myPiVar eq "Chester"
										or myPiVar eq "Colchester" 
										or myPiVar eq "Birmingham"
										or myPiVar eq "Bradford" 
										or myPiVar eq "Bristol">
                <cfset myPcVar="United Kingdom" />
                <cfelseif myPcVar eq "UnitedStates" 
										or myPcVar eq "UnitedStates" 
										or myPcVar eq "United%20States" 
										or myPiVar eq "Chicago" 
										or myPiVar eq "LosAngeles" 
										or myPiVar eq "WashingtonDC" 
										or myPiVar eq "Oahu,Hawaii" 
										or myPiVar eq "Oahu%2CHawaii" 
										or myPiVar eq "Amherst,MA" 
										or myPiVar eq "Amherst%2CMA" 
										or myPiVar eq "Atlanta,GA" 
										or myPiVar eq "Atlanta%2CGA" 
										or myPiVar eq "Brunswick,ME" 
										or myPiVar eq "Brunswick%2CME" 
										or myPiVar eq "Hartford,CT" 
										or myPiVar eq "Hartford%2CCT"
										or myPiVar eq "SanDiego.CA" 
										or myPiVar eq "SanDiego%2ECA" 
										or myPiVar eq "SouthHadley,MA" 
										or myPiVar eq "SouthHadley%2CMA" 
										or myPiVar eq "Waterford,CT" 
										or myPiVar eq "Waterford%2CCT" 
										or myPiVar eq "Wellesley,MA" 
										or myPiVar eq "Wellesley%2CMA" 
										or myPiVar eq "Woods HoleMA" 
										or myPiVar eq "NewYork" 
										or myPiVar eq "Northampton,MA" 
										or myPiVar eq "Northampton%2CMA" 
										or myPiVar eq "Norton,MA" 
										or myPiVar eq "Norton%2CMA" 
										or myPiVar eq "Philadelphia" 
										or myPiVar eq "Poughkeepsie,NY" 
										or myPiVar eq "Poughkeepsie%2CNY" 
										or myPiVar eq "Honolulu,HI" 
										or myPiVar eq "Honolulu%2CHI" 
										or myPiVar eq "Middletown,CT" 
										or myPiVar eq "Middletown%2CCT" 
										or myPiVar eq "Minneapolis%2DSaintPaul" 
										or myPiVar eq "MinneapolisSaintPaul"
										or myPiVar eq "Mystic,CT" 
										or myPiVar eq "Mystic%2CCT" 
										or myPiVar eq "NewLondon,CT" 
										or myPiVar eq "NewLondon%2CCT" 
										or myPiVar eq "Jackson" 
										or myPiVar eq "NewOrleans"
										or myPiVar eq "WoodsHoleMA">
                <cfset myPcVar="United States" />
                <cfelseif myPcVar eq "Vietnam"
										or myPiVar eq "AnGiang"
										or myPiVar eq "CanTho"
										or myPiVar eq "Danang"
										or myPiVar eq "HaiPhong"
										or myPiVar eq "HalongBay"
										or myPiVar eq "Hanoi"
										or myPiVar eq "HoChiMinhCity"
										or myPiVar eq "Hue"
										or myPiVar eq "PhnomPenh"
										or myPiVar eq "Reap"
										or myPiVar eq "Seam"
										or myPiVar eq "VungTau">
                <cfset myPcVar="Vietnam" />
                <cfelse>
                <cfset myPcVar="General" />
            </cfif>
            <ul class="student_handbook_container">
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Understanding Study Abroad <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/introduction.php?country=<cfoutput>#myPcVar#</cfoutput>">Introduction</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/why-study-abroad.php?country=<cfoutput>#myPcVar#</cfoutput>">Why Study Abroad?</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/why-learn-a-language.php?country=<cfoutput>#myPcVar#</cfoutput>">Why Learn a Language?</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/advice-for-parents.php?country=<cfoutput>#myPcVar#</cfoutput>">Advice for Parents</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Choosing a Program <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/finding-quality-program.php?country=<cfoutput>#myPcVar#</cfoutput>">Finding a Quality Program</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/select-the-right-program.php?country=<cfoutput>#myPcVar#</cfoutput>">Selecting the Right Program for You</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/who-runs-your-program.php?country=<cfoutput>#myPcVar#</cfoutput>">Who Runs Your Program</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/">Financing Study Abroad</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/application-process.php?country=<cfoutput>#myPcVar#</cfoutput>">Application Process</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Practical Information <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/pre-departure-planning.php?country=<cfoutput>#myPcVar#</cfoutput>">Pre-Departure Planning</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/how-foreign-laws-apply-to-you.php?country=<cfoutput>#myPcVar#</cfoutput>">How Foreign Law Apply to You</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/communication-while-abroad.php?country=<cfoutput>#myPcVar#</cfoutput>">Communication While Abroad</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/housing.php?country=<cfoutput>#myPcVar#</cfoutput>">Housing</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/packing.php?country=<cfoutput>#myPcVar#</cfoutput>">Packing</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/expectations.php?country=<cfoutput>#myPcVar#</cfoutput>">Expectations</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Health and Security <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/medical-care-and-insurance.php?country=<cfoutput>#myPcVar#</cfoutput>">Medical Care and Insurance</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/basic-health-and-safety.php?country=<cfoutput>#myPcVar#</cfoutput>">Basic Health and Safety</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/strategies-to-reduce-risk.php?country=<cfoutput>#myPcVar#</cfoutput>">Risk Factors and Strategies to Reduce Risk</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/special-issues.php?country=<cfoutput>#myPcVar#</cfoutput>">Special Issues</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/crisis-management.php?country=<cfoutput>#myPcVar#</cfoutput>">Crisis Management</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/adjustments-and-culture-shock.php?country=<cfoutput>#myPcVar#</cfoutput>">Adjustments and Culture Shock</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Coming Home <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/airport-procedures.php?country=<cfoutput>#myPcVar#</cfoutput>">Airport Safety, Duties, and Customs</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/reverse-culture-shock.php?country=<cfoutput>#myPcVar#</cfoutput>">Reverse Culture Shock</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/continuing-benefits-of-study-abroad.php?country=<cfoutput>#myPcVar#</cfoutput>">Continuing Benefits of Study Abroad</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Tools for Planning <span> </span> </a> </li>
                        <li class="dropdown">
                            <div class="submenu_title">Study Abroad Handbook</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/questions.php?country=<cfoutput>#myPcVar#</cfoutput>">Questions</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/checkliSt%2Ephp?country=<cfoutput>#myPcVar#</cfoutput>">Checklist</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/resources.php?country=<cfoutput>#myPcVar#</cfoutput>">Resources</a> </li>
                            </ul>
                            <div class="submenu_title">Communication</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/communication-info-sheets.php?country=<cfoutput>#myPcVar#</cfoutput>">Communication Info Sheet</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/words-to-know.php?country=<cfoutput>#myPcVar#</cfoutput>">Words to Know</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/phrases-to-know.php?country=<cfoutput>#myPcVar#</cfoutput>">Phrases to Know</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/help-images.php?country=<cfoutput>#myPcVar#</cfoutput>">Help Images</a> </li>
                            </ul>
                            <div class="submenu_title">Emergency</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/emergency-planning.php?country=<cfoutput>#myPcVar#</cfoutput>">Emergency Planning</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/emergency-action-plan-steps.php?country=<cfoutput>#myPcVar#</cfoutput>">Emergency Action Plan Steps</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/personal-emergency-action-plan.php?country=<cfoutput>#myPcVar#</cfoutput>">Personal Emergency Action Plan</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/emergency-card.php?country=<cfoutput>#myPcVar#</cfoutput>">Emergency Card</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
            <!-- <cfoutput><div>#myPcVar#</div><div>#myPiVar#</div></cfoutput>-->
            <cfelse>
            <ul class="student_handbook_container">
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Understanding Study Abroad <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/introduction.php?country=general">Introduction</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/why-study-abroad.php?country=general">Why Study Abroad?</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/why-learn-a-language.php?country=general">Why Learn a Language?</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/advice-for-parents.php?country=general">Advice for Parents</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Choosing a Program <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/finding-quality-program.php?country=general">Finding a Quality Program</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/select-the-right-program.php?country=general">Selecting the Right Program for You</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/who-runs-your-program.php?country=general">Who Runs Your Program</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/">Financing Study Abroad</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/application-process.php?country=general">Application Process</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Practical Information <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/pre-departure-planning.php?country=general">Pre-Departure Planning</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/how-foreign-laws-apply-to-you.php?country=general">How Foreign Law Apply to You</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/communication-while-abroad.php?country=general">Communication While Abroad</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/housing.php?country=general">Housing</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/packing.php?country=general">Packing</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/expectations.php?country=general">Expectations</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Health and Security <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/medical-care-and-insurance.php?country=general">Medical Care and Insurance</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/basic-health-and-safety.php?country=general">Basic Health and Safety</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/strategies-to-reduce-risk.php?country=general">Risk Factors and Strategies to Reduce Risk</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/special-issues.php?country=general">Special Issues</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/crisis-management.php?country=general">Crisis Management</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/adjustments-and-culture-shock.php?country=general">Adjustments and Culture Shock</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Coming Home <span> </span> </a> </li>
                        <li class="dropdown">
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/airport-procedures.php?country=general">Airport Safety, Duties, and Customs</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/reverse-culture-shock.php?country=general">Reverse Culture Shock</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/continuing-benefits-of-study-abroad.php?country=general">Continuing Benefits of Study Abroad</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <ul>
                        <li class="button"> <a href="#" class="dropdown_button">Tools for Planning <span> </span> </a> </li>
                        <li class="dropdown">
                            <div class="submenu_title">Study Abroad Handbook</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/questions.php?country=general">Questions</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/checkliSt%2Ephp?country=general">Checklist</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/resources.php?country=general">Resources</a> </li>
                            </ul>
                            <div class="submenu_title">Communication</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/communication-info-sheets.php?country=general">Communication Info Sheet</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/words-to-know.php?country=general">Words to Know</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/phrases-to-know.php?country=general">Phrases to Know</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/help-images.php?country=general">Help Images</a> </li>
                            </ul>
                            <div class="submenu_title">Emergency</div>
                            <ul>
                                <li> <a href="http://studentsabroad.com/handbook/emergency-planning.php?country=general">Emergency Planning</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/emergency-action-plan-steps.php?country=general">Emergency Action Plan Steps</a> </li>
                                <li> <a href="http://studentsabroad.com/handbook/personal-emergency-action-plan.php?country=general">Personal Emergency Action Plan</a> </li>
                                <li class="last"> <a href="http://studentsabroad.com/handbook/emergency-card.php?country=general">Emergency Card</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
        </cfif>
    </div>
</div>
