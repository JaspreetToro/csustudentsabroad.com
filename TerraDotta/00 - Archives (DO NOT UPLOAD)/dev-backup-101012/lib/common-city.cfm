<cfset arCityArray = ["Bariloche","BuenosAires","Cairns","Cordoba","Corrientes","LibertadorSanMartin","MardelPlata","Mendoza","Patagonia","Rosario","Salta","SanCarlosdeBariloche","SanMigueldeTucuman","Ushuaia","Victoria"] /> 
	<cfset auCityArray = ["Adelaide","Albury-Wodonga","Albury%2DWodonga","AliceSprings","Armidale","AthertonTablelands","AyersRock","Ballarat","Bathurst","Bendigo","Brisbane","Bundoora","ByronBay","Byron Bay","Byron%20Bay" ,"Cairns","Callagan","Callaghan","Canberra","Darwin","FraserIsland","Fremantle","Geelong","GoldCoast","GreatBarrierReef","HerveyBay","Hobart","Kakadu","KataTjuta","Launceston","Lismore","Macarthur","MagneticIsland","MagneticIsland,","Magnetic Island","Magnetic Island,","Magnetic%20Island","Magnetic%20Island,","MagneticIsland%2C","Maroochydore","Melbourne","Mildura","Mt. Buller","Mt.%20Buller","Mt%2EBuller","Mt%2E%20Buller" ,"NewCastle","NorthRyde","Perth","Queensland","Robina","Rockhampton","St%2ELucia","SunshineCoast","Sydney","Tasmania","Toowoomba","Townsville","Uluru","Victoria","WaggaWagga","Warrnambool","Wollongong"] />
    <cfset atCityArray = ["Braunau","Bregenz","Graz","Innsbruck","Kitzbuhel","Klagenfurt","Lebon","Leoben","Linz","Prien","Salzburg","Strobl","Vienna","WienerNeustadt"] />
    <cfset beCityArray = ["Antwerp","Brussels","Leuven","Liege","Louvain"] />
    <cfset bwCityArray = ["Gaborone", "Maun"] />
    <cfset brCityArray = ["Bahia","Belém","BeloHorizonte","Bahia","Brazilia","Campinas","Curitiba","Ecoversidade","Florianopolis","Fora","Fortaleza","Ilheus","Imbituba","JoãoPessoa","Maceio","Manaus","Mariana","Niteroi","OuroPreto","Parana","Paranagua","Parati","Piracicaba","PontaGrossa","PonteAlegre","PortoAlegre","Recife","RiodeJaneiro","RioGrande","Sabara","Salvador","SalvadordaBahia" ,"Santarem","Santos","SaoPaulo","SãoPaulo","Viçosa","Vitoria"] />
    <cfset caCityArray = ["Calgary","Chicoutimi","Edmonton","GreaterSudbury","Halifax","Kamloops","Lennoxville","Montreal","Ottawa","Quebec","Saskatoon","Sherbrooke","St%2ECatherines","St%2CCatherines","Sudbury","Vancouver","Whitehorse"] />
     
    <cfset cnCityArray = ["Baotou","Beijing","Changchun","Changsha","Chengde","Chengdu","Chongqing","Dalian","Dongfang","Fenyan","Fuzhou","Guangzhou","Guilin","GuiyangCity","Haikou","Haimen","Hainan","Hangdan","Handan","Hangzhou","Harbin","HongKong","Jiamusi","Jilin","Jinan","Kham","Kunming","Lianyunang","Lianyungang","Lijiang","Luoyang","Macao","Macau","Nanjing","Ningbo","PearlRiverDelta","Pingyao","Qingdao","Qinhuangdao","Qufu","Shandong","Shanghai","Shantou","Shenyang","Shenzhen","Shijiazhuang","Shichuan","Sichuan","Suzhou","TangShan","Tianjin","Tsinghua","Whenzhou","Wenzhou","Wuhan","Xi'an","Xi%27an","Xiamen","Xingang","Yangshuo","Yantai","Yiwu","Zhangjiang","Zhangzhou","Zhongdian"] />
    
    <cfset clCityArray = ["Antofagasta","Arica","Chillan","Concepcion","Coquimbo","Pichelemu","Santiago","Temecu","Temuco","Valdivia","Valparaiso","VinadelMar"] />   
    <cfset crCityArray = ["Alajuela","Alahuela","Atenas","Coronado","FlamingoBeach","Guanacaste","Heredia","JacoBeach","LaSuerte","ManuelAntonio","MonteVerde","Puntarenas","Samara","SanJoaquin","SanJose","SanLuisValley","SanPedro","SanRamon","SantaAna","Turrialba"] />
    <cfset czCityArray = ["Brno","Olomouc","Prague"] />
    <cfset dkCityArray = ["Aalborg","Aarhus","Copenhagen","Esbjerg","Frederiksberg","Kolding","Lyngby","Lyingby","Odense","Randers","Roskilde","Sonderborg","Thy","Tjele"] />
    <cfset doCityArray = ["Jarabacoa","LaRomana","Samana","Santiago","SantoDomingo","Sosua","Sosúa"] />
    <cfset ecCityArray = ["Cuenca","Galapagos","Guayaquil","Mindo","Montañita","NapoRegion","Quito","SanCristobal"] />
    <cfset egCityArray = ["Cairo","Alexandria","Edfu","Luxor","PortSaid","SharmElSheikh","Sinai"] />
    <cfset fiCityArray = ["Vaasa","Abo","Helsinki","Joensuu","Jyvaskyla","Koupio","Lappeenranta","Oulu","Tampere","Turku"] />
    <cfset frCityArray = ["AixenProvence","Aix-en-Provence","Aix%2Den%2DProvence","Aix%2Den%2DProvence","Paris","Cannes","Nice","Lyon","Montpellier","Normandy","Grenoble","Strasbourg","Biarritz","Bordeaux","Caen","Angers","Annecy","Chambery","SophiaAntipolis","Rennes","Agen","Albi","Amboise","Amiens","Vezelay","Vichy","VilleFranche","Tonnerre","Toulouse","Tours","Troyes","Vernon","Versailles","St%2EDenis","St%2EEtienne","St%2EMalo","Talloires","Pontlevoy","Roubaix","Rouen","Royan","Saint-Laurent-du-Var","Saint%2DLaurent%2Ddu%2DVar","Orleans","Orsay","Pau","Perpignan","Poitiers","Mulhouse","Nancy","Nantes","Nimes","Marseille","Metz","Mont-St-Michel","Mont%2DSt%2DMichel","Montbard","MonteCarlo","LeMans","Lille","Lisieux","LoireValley","Macon","Hyeres","LaNapoule","LaRochelle","LaRosiere","LeHavre","Compiegne","Dijon","Epernay","Fontainebleau","Futuroscope","Gap","Cergy-pontoise","Cergy%2Dpontoise","Chartres","Cheverny","Cholet","Collonges-sous-Saleve","Collonges%2Dsous%2DSaleve","Brest","Brittany","Cachan","Auxerre","Avignon","Azay-le-Rideau","Azay%2Dle%2DRideau","Belfort","Besancon","Antibes","Archamps","Arles","Arromanches"] />
    <cfset deCityArray = ["Aachen","Berlin","Bielefeld","Bonn","Braunschweig","Bremen","Cologne","Cottbus","Darmstadt","Dortmund","Dresden","Duisburg","Dusseldorf","Eichstatt","Erlangen-Nurnberg","Erlangen%2DNurnberg","Frankfurt","Freiburg","GieBen","Gottingen","Hamburg","Hannover","Heidelberg","Hohenheim","Jena","Karlsruhe","Kiel","Konstanz","Leipzig","Lemgo","Lüneburg","Mainz","Mannheim","Marburg","Mittweida","Munchen","Munich","Munster","Oestrich-winkel","Oestrich%2Dwinkel","Osnabrück","Regensberg","SchwabishHall","Stuttgart","Trier","Tubingen","Ulm","Vallendar","Weimar"] />    
    <cfset ghCityArray = ["Accra","Benin","CapeCoast","Ho","Kimasi","Kumasi","Legon","Nungua","Togo"] />
    <cfset grCityArray = ["Athens","Paros","Thessaloniki","Ioannina","Piraeus","Rhodes","Skopelos","Volos"] />
    <cfset huCityArray = ["Budapest","Debrecen"] />
    <cfset inCityArray = ["Pune","Hyderabad","Manipal","Varanasi","Jaipur","Mumbai","BodhGaya","Bangalore","Agra","Ahmedabad","Auroville","Zanskar","Shilong","Spiti","TamilNadu","Thiruvananthapuram","Trivandrum","Mysore","NewDelhi","Pondicherry","Rajasthan","Kolkata","Ladakh","Madras","Madurai","Mahabalipuram","Kanchipuram","Kerala","Khajuraho","Kochi","Bombay","Chennai","Delhi","Dharamsala","Dhrangadhra","Gangtok"] />
    
    <cfset tcCityArray = ["SouthCaicos"] />
    <cfset gbCityArray = ["London","Edinburgh","Leeds","Stirling","Aberdeen","Bangor","Belfast","Glasgow","St%2EAndrews","Swansea","Durham","Lancaster","Oxford","Cambridge","Manchester","Nottingham","Brighton","York","Coleraine","Cardiff","Dundee","Kingston-upon-Thames","Kingston%2Dupon%2DThames","Ormskirk","Bath","Bedford","Whitby","Wolverhampton","Worthing","Wroxton","Stafford","Stratford-upon-Avon","Stratford%2Dupon%2DAvon","Sunderland","Totnes","Plymouth","Preston","Reading","Sheffield","Southampton","NewtonAbbot","Newtownabbey","Norwich","Liverpool","Londonderry","Middlesbrough","Newcastle","Kingston-upon-Hull","Kingston%2Dupon%2DHull","Lancashire","Leicester","Huddersfield","Hull","Inverness","Jordanstown","Keele","Kent","Exeter","Exmouth","Findhorn","Grantham","Haworth","Dorset","EastSussex","Eastbourne","Courtauld","Coventry","Cuper","Dartington","Derry","Dorchester","Canterbury","Cheltenham","Chester","Colchester","Birmingham","Bradford","Bristol"] />
    <cfset usCityArray = ["Chicago","LosAngeles","WashingtonDC","Oahu,Hawaii","Oahu%2CHawaii","Amherst,MA","Amherst%2CMA","Atlanta,GA","Atlanta%2CGA","Brunswick,ME","Brunswick%2CME","Hartford,CT","Hartford%2CCT","SanDiego.CA","SanDiego%2ECA","SouthHadley,MA","SouthHadley%2CMA","Waterford,CT","Waterford%2CCT","Wellesley,MA","Wellesley%2CMA","Woods HoleMA","NewYork","Northampton,MA","Northampton%2CMA","Norton,MA","Norton%2CMA","Philadelphia","Poughkeepsie,NY","Poughkeepsie%2CNY","Honolulu,HI","Honolulu%2CHI","Middletown,CT","Middletown%2CCT","Minneapolis%2DSaintPaul","MinneapolisSaintPaul","Mystic,CT","Mystic%2CCT","NewLondon,CT","NewLondon%2CCT","Jackson","NewOrleans","WoodsHoleMA"] />
    <cfset vnCityArray = ["AnGiang","CanTho","Danang","HaiPhong","HalongBay","Hanoi","HoChiMinhCity","Hue","PhnomPenh","Reap","Seam","VungTau"] />
    <cfset joCityArray = ["Amman","Irbid","Madaba"] />
    <cfset ieCityArray = ["Limerick","Dublin","Maynooth","Cork","Galway","Ballyvaughan","Belfast","Carlow","Coleraine","Newtownabbey","Jordanstown","Londonderry","Magee"] />
    <cfset itCityArray = ["Milan","Rome","Florence","Siena","Taormina","Venice","Tuscania","Lecce","Perugia","Syracuse","Sicily","Padua","Tuscany","Naples","Catania","Ferrara","Arezzo","AscoliPiceno","Assisi","Bologna","Cagliari","CastiglionFiorentino","Urbino","Verona","Vicenza","Viterbo","Trento","Trieste","Turin","Pistoia","Sanremo","Sorrento","PadernodelGrappa","Padova","Pavia","Pisa","Grado","Lucca","Orbetello","Cortona","Elba","Genoa"] />
    <cfset jpCityArray = ["Kyoto","Tokyo","Osaka","Akita","Asahikawa","Ashikaga","Beppu","Chiba","Yamato-machi","Yokohama","Zentsuji","Sapporo","Sendai","Seta","Toyama","Tsukuba","Nara","Niigata","Nishinomiya","Oita","Okoyama","MitakaCity","Morioka","Nagano","Nagasaki","Nagoya","Nakajo","Kasugai","Kawasaki","Kobe","KyotoCity","Mishima","Fukuoka","Hikone","HirakataCity","Hiratsuka","Hiroshima","Kanazawa","Yamato%2Dmachi"] />
    <cfset keCityArray = ["CoastalKenya","Eldoret","KilimanjaroBushCamp","Kisumu","KoobiFora","Lamu","Mombasa","Nairobi"] />
    <cfset nlCityArray = ["Amsterdam","Delft","DenHaag","Groningen","Leiden","Maastricht","Masstricht","Nijmegen","Rotterdam","TheHague","Tilburg","Utrecht","Wageningen"] />
    <cfset krCityArray = ["Seoul","AnsungCity","Asan","Busan","Chuncheon","Daegu","Gyeongsan","Pohang","Pusan","Suwon","Taegu"] />
    <cfset mxCityArray = ["Akumal","BahiaMagdalena","BuenaVista","Chiapas","Cholula%2CPuebla","Cholula,Puebla","CiudaddeMexico","Cuernavaca","EstadodeMexico","Guadalajara","Guanajuato","Hermosillo","LaManzanilla","Mazatlan","Merida","MexicoCity","Monterrey","Morelia","Oaxaca","PlayadelCarmen","PueblaCity","PuertoMorelos","PuertoSanCarlos","PuertoVallarta","Queretaro","SanCristobal","SanLuisPotosi","SanMigueldeAllende","Taxco","TiburonIsland","Toluca","Xalapa"] />
    <cfset maCityArray = ["Casablanca","Fez","Ifrane","Meknes","Rabat","Tetouan"] />
    <cfset nzCityArray = ["Granada","Auckland","NorthIsland","Christchurch","Dunedin","Wellington","Hamilton","PalmerstonNorth","Canterbury","Queenstown","Rotorua","Taradale","Tauranga","Waikato","Kaiaua","Mana","Napier","Otago"] />
    <cfset niCityArray = ["Granada","Managua","Bluefields"] />
    <cfset peCityArray = ["Lima","Manu","Cuzco","Ayacucho","Arequipa"] />
    <cfset plCityArray = ["Krakow","Poznan","Warsaw","Wolin","Wroclaw"] />
    <cfset ptCityArray = ["Lisbon","Porto","Aveiro","Coimbra","Faro","PraiadasMacas"] />    
    <cfset ruCityArray = ["Irkutsk","Khabarovsk","Moscow","NizhnyNovgorod","NovgorodTheGreat","Novosibirsk","StPetersburg","St%2EPetersburg","Yaroslavl","Vladimir","Vladivostok"] />
    <cfset zaCityArray = ["Stellenbosch","CapeTown","Bellville","PortElizabeth","Johannesburg","Alice","Bloemfontein","Durban","Grahamstown","Swaziland","Tygerberg","Lesotho","Pietermaritzburg","Pretoria","RichardsBay"] />
    <cfset esCityArray = ["Madrid","Cadiz","Seville","Barcelona","Alicante","Granada","Malaga","PalmadeMallorca","Salamanca","SanSebastian","Sevilla","Valencia","Vitora","Denia","Tenerife","Herradura","Marbella","Pamplona","Bilbao","Girona","Toledo","Mallorca","Burgos","Menorca","Alcala","Almeria","Avila","Vic","Vigo","Vitoria","Valladolid","Ronda","Santander","SantiagodeCompostela","Segovia","Murcia","Logrono","Cordoba","Getafe","Oviedo"] />
    <cfset seCityArray = ["Alnarp","Karlstad","Kristianstad","Lulea","Lund","Malmo","Orebro","Stockholm","Trollhättan","Uppsala","Vasteras","Vaxjo"] />
    <cfset chCityArray = ["Lucerne","Geneva","Lugano","Bern","Fribourg","Lausanne","Leysin","Montreux","Nyon","Zurich"] />
    <cfset twCityArray = ["Hsinchu","Taipei","Taoyuan"] />     
    <cfset thCityArray = ["Singburi","Bangkok","KhonKaen","ChiangMai","ChaingMai","Cha-am","Cha%2Dam","Chainat","ChonBuri","Salaya","Trang","HatYai","Lopburi","MuakLek","NakhonPathon","NakhonRatchasima"] />
    <cfset trCityArray = ["Alanya","Ankara","Antayla","Bodrum","CadirHoyuk","CentralAnatolia","Istanbul"] />