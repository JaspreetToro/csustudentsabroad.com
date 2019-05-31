<?php


global $setting_list;
$setting_list = array();
$setting_list['s'] = "Suburban";
$setting_list['u'] = "Urban";
$setting_list['r'] = "Rural";


global $funding_list;
$funding_list = array();
$funding_list['pu'] = "Public";
$funding_list['pr'] = "Private";


global $school_size_list;
$school_size_list = array();
$school_size_list['s'] = "Small";
$school_size_list['m'] = "Medium";
$school_size_list['l'] = "Large";

global $tuition_list;
$tuition_list = array();
$tuition_list['l'] = 'Low';
$tuition_list['m'] = 'Medium';
$tuition_list['h'] = 'High';


global $admission_difficulty_list;
$admission_difficulty_list = array();
$admission_difficulty_list[1] = "Easiest";
$admission_difficulty_list[2] = "Easy";
$admission_difficulty_list[3] = "Moderate";
$admission_difficulty_list[4] = "Difficult";
$admission_difficulty_list[5] = "Most Difficult";


global $cost_list;
$cost_list = array();
$cost_list['l'] = 'Low';
$cost_list['m'] = 'Medium';
$cost_list['h'] = 'High';

global $status_list;
$status_list = array();
$status_list[0] = 'Saved';
$status_list[1] = 'Publish';
$cost_list['h'] = 'High';


global $feedback; 
$feedback = array(

'A.A.'					=> 'Community Colleges offer Associates degrees which take two years to complete. You can transfer to a four-year school after completing an AA degree.',
'B.A./B.S.'					=> 'A bachelor degree takes four years to complete and provides students with a high level of education.',
'M.S./M.A./M.B.A./Ph.D/J.D.'		=> 'Masters and Ph.D programs are the highest level of U.S. education and can take anywhere from 2-6 years to complete. Areas of study are limited so make sure that your university offers a program in your area of interest.',

'ONE_YEAR'				=> 'TOFEL certifications can be completed within 1 year or less. Check different universities for TOFEL programs',
'TWO_YEAR'				=> 'AA and MA degrees will take a minimum of 2 years to complete. Check requirements to determine which degree you qualify for.',
'FOUR_YEAR'				=> 'MA, BA/BS or Ph.D. degrees will take a minimum of 4 years to complete. Check requirements to determine which degree you qualify for.',

'PUBLIC'				=> 'Search for a public university if you prefer big university with a wide range of activities and degree options.',
'PRIVATE'				=> 'Search for a private university if you prefer a smaller university with more personal attention.',

'COST_LOW'				=> 'Attending community college ranging from $1,000-$13,000 per year is a great way to save money. In addition, choosing a public university farther away from major cities may help to reduce tuition.',
'COST_MEDIUM'			=> 'Public universities will cost in the mid-range of tuition of $13,000-$25,000 per year. Some financial aid is available as well.',
'COST_HIGH'				=> 'Private universities will cost the most from $25,000 and above per year, yet offer the best financial aid options.',

'CLIMATE'				=> 'Regions in the U.S. have very different climates from the west coast to the east coast.  Determine where you feel most comfortable and choose a school within that region.',
'AFFORDABILITY'			=> 'The cost of living is higher on the east coast and west coast compared to the middle of the U.S. High cost living areas are usually more desirable although living in a low cost area can save you more money.',
'OUTDOOR'				=> 'If you like to go skiing, be near the ocean, or partake in a wide range of outdoor activities look for schools in regions known for having these options nearby.',
'CULTURE'				=> 'Local culture varies by region or city and can add an exciting element to your life in the U.S. Look at the different regions that are known for their food, customs, music, and community interests.',

'RURAL'					=> 'Choose a university located in a rural environment where you will be exposed to a close-knit community and lots of outdoor activities.',
'SUBURBAN'				=> 'Choose a university located in a suburb where you can easily access the city yet live in less crowded area.',
'URBAN'					=> 'Choose a university located in the heart of one of America�s most exciting cities that offers a wide range of services and activities.',


'SIZE_SMALL'			=> 'A small university will provide you with more personal attention and interaction with professors and classmates.',
'SIZE_MEDIUM'			=> 'A medium size school will give you the benefit of some personal attention as well as some variety of activities, classes, and social opportunities.',
'SIZE_LARGE'			=> 'A large size school will give you limited personal attention yet provides the most options for areas of study and on-campus social activities.',

'SELECTIVITY_LOW'		=> 'For easier admission look for English language programs and community colleges that have few requirements.',
'SELECTIVITY_MEDIUM'	=> 'A university that is moderately selective will be your best option if you want a school that is somewhat distinguished yet is not highly competitive to be accepted into.',
'SELECTIVITY_HIGH'		=> 'Your desire to attend a highly competitive, distinguished university is admirable but make sure you apply to backup schools as well incase you are not accepted into your top choice school.',

'SPORT'					=> 'In addition to attending school sport events, check the student life programs (athletic, Greek, philanthropic, cultural clubs, etc.) to be sure they have programs that will fit your needs.',
'ART'					=> 'Don\'t forget to research the city or suburb of the university to make sure they have a lively art and music scene.',
'WORK'					=> 'Research the companies near the university you are interested in to make sure there are internship and job opportunities available in your field of interest.',

'HOUSE_PARENT'			=> 'Search for home stay programs to experience living with an American family and learning about the culture more in depth.',
'DORM'					=> 'Check the university�s campus housing options. Dorm life can be a great way to meet other students.',
'APARTMENT'				=> 'Research well beforehand the costs of the finding short term housing in the area surrounding the university. Your own apartment can be useful if you like to live by yourself and need more quiet time to study.'
);


global $timeline_feedback; 
$timeline_feedback = array();

// 1-5 months
$timeline_feedback[1][1] = 'Student visas are required for all students who wish to study in the U.S. This is very important to complete on time before you enter the U.S. Check out <a href="visa.php" class="small_dark_grey_bold">Visa Resources</a> for more information about types of visas and requirements.';
$timeline_feedback[1][2] = 'The <a href="http://www.myisic.com/MyISIC/" target="_blank" class="small_dark_grey_bold">International Student Identity Card (ISIC)</a> offers international student insurance options. ';
$timeline_feedback[1][3] = 'There are several different housing options based on your needs. Check out the <a href="housing.php" class="small_dark_grey_bold">Housing page</a> to view the pros/cons about the type of setting you can live in and determine what works best for you. Contact the international studies department of the university you will be attending to find out what housing options they have available close to campus and if they can help you secure housing.';
$timeline_feedback[1][4] = 'Check with the local travel agent and on the Web for the best airfare prices. To get a better deal and more flight options, start searching early. <a href="http://www.statravel.com/cps/rde/xchg/us_division_web_live/hs.xsl/worldwide.htm" class="small_dark_grey_bold" target="_blank">STA Travel</a> is one website that offers low-cost student tickets 
';

// 6-12 months
$timeline_feedback[2][1] = 'The following forms and documents may be required by the school when you apply:  
<div class="marginleft25">
<ul>
	<li>Application form</li> 
	<li>Application essay or statement of purpose</li> 
	<li>Academic Transcripts</li>
	<li>Standardized test scores </li>
	<li>Letters of recommendation or references</li>  
	<li>Required financial statements</li>
	<li>Proof of financial support</li> 
	<li>Supporting material (a portfolio, evidence of past work experience)</li>
	<li>Application fee</li>
</ul>
</div>
<div>
	Look under the <a href="app_requirement.php" class="small_dark_grey_bold">Application Requirements</a> section about descriptions and where to find these forms. Send the required forms in as soon as possible if you wish to study in the U.S. in 10 months.
</div>';
$timeline_feedback[2][2] = 'Most schools require you to pay a fee when you send in your application. The cost is usually between $25 and $100';

// 13-17 months
$timeline_feedback[3][1] = 'Determine which of the following standardized tests are required by the programs you are applying to: TOEFL, SAT, ACT, GRE, LSAT, MCAT.   Check out the <a href="app_requirement.php" class="small_dark_grey_bold">Application Requirements</a> section for more information about how often these tests are given. You may want to take the tests as soon as possible if you plan on studying in the U.S. in one year.';
$timeline_feedback[3][2] = 'Go to the school\'s website under International Student Application and complete as soon as possible. ';
$timeline_feedback[3][3] = 'The Personal Statement form is found on the schools\' website under International Student Application. Here you will explain why you should be accepted into the school. ';
$timeline_feedback[3][4] = 'An educated person who is proficient in English will be able to give you advice and recommendations about grammar and content for your essay/personal statement. ';
$timeline_feedback[3][5] = 'These letters of recommendation should come from someone you have a strong relationship and knows your abilities. Provide them with any necessary information they will need about your goals, abilities, and the school/program you are applying to. ';
$timeline_feedback[3][6] = 'These records show your academic history and can be obtained from your past or current school.';

// 17+ months
$timeline_feedback[4][1] = 'Use resources such as <a href="http://colleges.usnews.rankingsandreviews.com/usnews/edu/college/rankings/rankindex_brief.php" class="small_dark_grey_bold" target="_blank">U.S. News</a>, <a href="http://www.princetonreview.com/college/research/rankings/rankings.asp" class="small_dark_grey_bold" target="_blank">Princeton Review</a>, <a href="http://www.businessweek.com/bschools/rankings/" class="small_dark_grey_bold" target="_blank">Business Week</a>, and <a href="http://opendoors.iienetwork.org/?p=113128" class="small_dark_grey_bold" target="_blank">Open Doors</a> to get an overview of programs offered by different schools that fit your academic goals. ';
$timeline_feedback[4][2] = 'After you research school options, choose a few schools to apply to with different levels of selectivity, including one school you are very likely to be accepted into.';
$timeline_feedback[4][3] = 'Faculty and staff at your home school can provide you with many resources about different programs, advice, and general life and culture in the U.S.';
$timeline_feedback[4][4] = 'The following forms and documents may be required by the school when you apply:  
<div class="marginleft25">
<ul>
	<li>Application form</li> 
	<li>Application essay or statement of purpose</li> 
	<li>Academic Transcripts</li>
	<li>Standardized test scores </li>
	<li>Letters of recommendation or references</li>  
	<li>Required financial statements</li>
	<li>Proof of financial support</li> 
	<li>Supporting material (a portfolio, evidence of past work experience)</li>
	<li>Application fee</li>
</ul>
</div>
<div>
	Look under the <a href="app_requirement.php" class="small_dark_grey_bold">Application Requirements section</a> for descriptions and where to find these forms
</div>';
$timeline_feedback[4][5] = 'Determine which of the following standardized tests are required by the programs you are applying to: TOEFL, SAT, ACT, GRE, LSAT, MCAT. Locate when and where these exams will take place and start studying early. You may wish to purchase study guides and take as many practice tests as you can. Check out the <a href="app_requirement.php" class="small_dark_grey_bold">Application Requirements section</a> for more information on these tests.';



global $state_list;
$state_list = array();
$state_list['AL'] = "Alabama";
$state_list['AK'] = "Alaska";
$state_list['AZ'] = "Arizona";
$state_list['AR'] = "Arkansas";
$state_list['CA'] = "California";
$state_list['CO'] = "Colorado";
$state_list['CT'] = "Connecticut";
$state_list['DE'] = "Delaware";
$state_list['DC'] = "District of Columbia";
$state_list['FL'] = "Florida";
$state_list['GA'] = "Georgia";
$state_list['HI'] = "Hawaii";
$state_list['ID'] = "Idaho";
$state_list['IL'] = "Illinois";
$state_list['IN'] = "Indiana";
$state_list['IA'] = "Iowa";
$state_list['KS'] = "Kansas";
$state_list['KY'] = "Kentucky";
$state_list['LA'] = "Louisiana";
$state_list['ME'] = "Maine";
$state_list['MD'] = "Maryland";
$state_list['MA'] = "Massachusetts";
$state_list['MI'] = "Michigan";
$state_list['MN'] = "Minnesota";
$state_list['MS'] = "Mississippi";
$state_list['MO'] = "Missouri";
$state_list['MT'] = "Montana";
$state_list['NE'] = "Nebraska";
$state_list['NV'] = "Nevada";
$state_list['NH'] = "New Hampshire";
$state_list['NJ'] = "New Jersey";
$state_list['NM'] = "New Mexico";
$state_list['NY'] = "New York";
$state_list['NC'] = "North Carolina";
$state_list['ND'] = "North Dakota";
$state_list['OH'] = "Ohio";
$state_list['OK'] = "Oklahoma";
$state_list['OR'] = "Oregon";
$state_list['PA'] = "Pennsylvania";
$state_list['RI'] = "Rhode Island";
$state_list['SC'] = "South Carolina";
$state_list['SD'] = "South Dakota";
$state_list['TN'] = "Tennessee";
$state_list['TX'] = "Texas";
$state_list['UT'] = "Utah";
$state_list['VT'] = "Vermont";
$state_list['VA'] = "Virginia";
$state_list['WA'] = "Washington";
$state_list['WI'] = "Wisconsin";
$state_list['WV'] = "West Virginia";
$state_list['WY'] = "Wyoming";


global $region_list;
$region_list = array();
$region_list['AL'] = "The South";
$region_list['AK'] = "The West";
$region_list['AZ'] = "The West";
$region_list['AR'] = "The South";
$region_list['CA'] = "The West";
$region_list['CO'] = "The West";
$region_list['CT'] = "North East";
$region_list['DE'] = "North East";
$region_list['DC'] = "North East";
$region_list['FL'] = "The South";
$region_list['GA'] = "The South";
$region_list['HI'] = "The West";
$region_list['ID'] = "The West";
$region_list['IL'] = "Mid West";
$region_list['IN'] = "Mid West";
$region_list['IA'] = "Mid West";
$region_list['KS'] = "Mid West";
$region_list['KY'] = "The South";
$region_list['LA'] = "The South";
$region_list['ME'] = "North East";
$region_list['MD'] = "North East";
$region_list['MA'] = "North East";
$region_list['MI'] = "Mid West";
$region_list['MN'] = "Mid West";
$region_list['MS'] = "The South";
$region_list['MO'] = "Mid West";
$region_list['MT'] = "The West";
$region_list['NE'] = "Mid West";
$region_list['NV'] = "The West";
$region_list['NH'] = "North East";
$region_list['NJ'] = "North East";
$region_list['NM'] = "The West";
$region_list['NY'] = "North East";
$region_list['NC'] = "The South";
$region_list['ND'] = "Mid West";
$region_list['OH'] = "Mid West";
$region_list['OK'] = "The South";
$region_list['OR'] = "The West";
$region_list['PA'] = "North East";
$region_list['RI'] = "North East";
$region_list['SC'] = "The South";
$region_list['SD'] = "Mid West";
$region_list['TN'] = "The South";
$region_list['TX'] = "The South";
$region_list['UT'] = "The West";
$region_list['VT'] = "North East";
$region_list['VA'] = "The South";
$region_list['WA'] = "The West";
$region_list['WI'] = "Mid West";
$region_list['WV'] = "North East";
$region_list['WY'] = "The West";


global $language;
$language = array();
$language[0]="Afrikaans";
$language[1]="Akkadian";
$language[2]="Albanian";
$language[3]="American Sign Language (ASL)";
$language[4]="Arabic";
$language[5]="Aramaic"; 
$language[6]="Armenian";
$language[7]="Assyrian";
$language[8]="Aymara";
$language[9]="Bahasa Malaysia (Malay)";
$language[10]="Bangala";
$language[11]="Basque";
$language[12]="Bavarian";
$language[13]="Belorusian (Byelorussian)";
$language[14]="Bengali";
$language[15]="Berber (Tamazight)";
$language[16]="Braille";
$language[17]="Breton";
$language[18]="Bulgarian";
$language[19]="Burmese";
$language[20]="Cambodian";
$language[21]="Cantonese";
$language[22]="Catalan";
$language[23]="Cherokee (Tsalagi)";
$language[24]="Croatian";
$language[25]="Czech";
$language[26]="Dakota";
$language[27]="Danish";
$language[28]="Dauphinois";
$language[29]="Dutch";
$language[30]="Egyptian, Ancient";
$language[31]="Egyptian, Middle";
$language[32]="English";
$language[33]="Esperanto"; 
$language[34]="Estonian";
$language[35]="Finnish";
$language[36]="Flemish";
$language[37]="French";
$language[38]="French Sign Language";
$language[39]="Frisian";
$language[40]="Fukienese";
$language[41]="Gaelic";
$language[42]="Galician";
$language[43]="Georgian";
$language[44]="German";
$language[45]="Greek, Ancient";
$language[46]="Greek, Koine (Biblical)"; 
$language[47]="Greek, Modern";
$language[48]="Guarani";
$language[49]="Gujarati";
$language[50]="Hakka";
$language[51]="Halaka";
$language[52]="Hausa";
$language[53]="Hawaiian";
$language[54]="Hebrew, Biblical"; 
$language[55]="Hebrew, Modern";
$language[56]="Hundustani (Hindi)";
$language[57]="Hungarian";
$language[58]="Icelandic";
$language[59]="Indonesian";
$language[60]="Interlingua (designed)";
$language[61]="Italian";
$language[62]="Japanese";
$language[63]="Javanese";
$language[64]="Kamilaroi";
$language[65]="Klingon (designed)";
$language[66]="Korean";
$language[67]="Kurdish";
$language[68]="Ladino";
$language[69]="Latin"; 
$language[70]="Latin, Church";
$language[71]="Latvian";
$language[72]="Lithuanian";
$language[73]="Lojban";
$language[74]="Low German";
$language[75]="Luganda";
$language[76]="Macedonian";
$language[77]="Malayalam";
$language[78]="Maltese";
$language[79]="Mandarin (Chinese)";
$language[80]="Manx";
$language[81]="Maori";
$language[82]="Mixtec";
$language[83]="Mohawk";
$language[84]="Mon";
$language[85]="Mongolian";
$language[86]="Morse Code (designed)";
$language[87]="Myanmar";
$language[88]="Nahuatl";
$language[89]="Navajo";
$language[90]="Nepalese";
$language[91]="Norman";
$language[92]="Norwegian";
$language[93]="Occitan";
$language[94]="Ojibwe";
$language[95]="Oneida";
$language[96]="Papiamentu";
$language[97]="Persian";
$language[98]="Phoenician"; 
$language[99]="Pidgin";
$language[100]="Pitcairn";
$language[101]="Polish";
$language[102]="Portuguese";
$language[103]="Punjabi";
$language[104]="Quechua (Kechwa)";
$language[105]="Rasta (Patois)";
$language[106]="Romanian";
$language[107]="Romansch";
$language[108]="Romany";
$language[109]="Russian";
$language[110]="Sanskrit";
$language[111]="Sardinian";
$language[112]="Saxon"; 
$language[113]="Scots";
$language[114]="Serbian";
$language[115]="Sinhalese";
$language[116]="lovak";
$language[117]="Slovenian";
$language[118]="Spanish";
$language[119]="Sranan";
$language[120]="Sudanese";
$language[121]="Swabian";
$language[122]="Swahili";
$language[123]="Swedish";
$language[124]="Tagalog";
$language[125]="Talossan (designed)";
$language[126]="Tamil";
$language[127]="elugu";
$language[128]="Thai";
$language[129]="Tlingit";
$language[130]="Turkish";
$language[131]="Ukranian";
$language[132]="Urdu";
$language[133]="Viennese";
$language[134]="Vietnamese";
$language[135]="Welsh";
$language[136]="Wu";
$language[137]="Yiddish";
$language[138]="Zapotec";



//list of countries
global $country;
$country = array();
$country["GEN"] = "General";
/*$country["AF"]="Afghanistan";
$country["AL"]="Albania";
$country["DZ"]="Algeria";
$country["AS"]="American Samoa";
$country["AD"]="Andorra";
$country["AO"]="Angola";
$country["AI"]="Anguilla";
$country["AG"]="Antigua and Barbuda";*/
$country["AR"]="Argentina";
/*$country["AM"]="Armenia";
$country["AW"]="Aruba";*/
$country["AU"]="Australia";
$country["AT"]="Austria";
/*$country["AZ"]="Azerbaijan";
$country["BS"]="Bahamas";
$country["BH"]="Bahrain";
$country["BD"]="Bangladesh";
$country["BB"]="Barbados";
$country["BY"]="Belarus";*/
$country["BE"]="Belgium";
/*$country["BZ"]="Belize";
$country["BJ"]="Benin";
$country["BM"]="Bermuda";
$country["BT"]="Bhutan";
$country["BO"]="Bolivia";
$country["BA"]="Bosnia and Herzegovina";
$country["BW"]="Botswana";
$country["BV"]="Bouvet Island";*/
$country["BR"]="Brazil";
/*$country["IO"]="British Indian Ocean Territory";
$country["VG"]="British Virgin Islands";
$country["BN"]="Brunei";
$country["BG"]="Bulgaria";
$country["BF"]="Burkina Faso";
$country["BI"]="Burundi";
$country["KH"]="Cambodia";
$country["CM"]="Cameroon";*/
$country["CA"]="Canada";
/*$country["CV"]="Cape Verde";
$country["KY"]="Cayman Islands";
$country["CF"]="Central African Republic";
$country["TD"]="Chad";*/
$country["CL"]="Chile";
$country["CN"]="China";
/*$country["CX"]="Christmas Island";
$country["CC"]="Cocos (Keeling) Islands";
$country["CO"]="Colombia";
$country["KM"]="Comoros";
$country["CG"]="Congo";
$country["CD"]="Congo - Democratic Republic of";
$country["CK"]="Cook Islands";*/
$country["CR"]="Costa Rica";
/*$country["CI"]="Cote d'Ivoire";
$country["HR"]="Croatia";*/
$country["CU"]="Cuba";
/*$country["CY"]="Cyprus";
$country["CZ"]="Czech Republic";
$country["DK"]="Denmark";
/*$country["DJ"]="Djibouti";
$country["DM"]="Dominica";
$country["DO"]="Dominican Republic";
$country["TP"]="East Timor";
$country["EC"]="Ecuador";*/
$country["EG"]="Egypt";
/*$country["SV"]="El Salvador";
$country["GQ"]="Equitorial Guinea";
$country["ER"]="Eritrea";
$country["EE"]="Estonia";
$country["ET"]="Ethiopia";
$country["FK"]="Falkland Islands (Islas Malvinas)";
$country["FO"]="Faroe Islands";
$country["FJ"]="Fiji";*/
$country["FI"]="Finland";
$country["FR"]="France";
/*$country["GF"]="French Guyana";
$country["PF"]="French Polynesia";
$country["TF"]="French Southern and Antarctic Lands";
$country["GA"]="Gabon";
$country["GM"]="Gambia";
$country["GZ"]="Gaza Strip";
$country["GE"]="Georgia";*/
$country["DE"]="Germany";
/*$country["GH"]="Ghana";
$country["GI"]="Gibraltar";*/
$country["GR"]="Greece";
/*$country["GL"]="Greenland";
$country["GD"]="Grenada";
$country["GP"]="Guadeloupe";
$country["GU"]="Guam";
$country["GT"]="Guatemala";
$country["GN"]="Guinea";
$country["GW"]="Guinea-Bissau";
$country["GY"]="Guyana";
$country["HT"]="Haiti";
$country["HM"]="Heard Island and McDonald Islands";
$country["VA"]="Holy See (Vatican City)";
$country["HN"]="Honduras";
$country["HK"]="Hong Kong";
$country["HU"]="Hungary";
$country["IS"]="Iceland";*/
$country["IN"]="India";
/*$country["ID"]="Indonesia";
$country["IR"]="Iran";
$country["IQ"]="Iraq";*/
$country["IE"]="Ireland";
/*$country["IL"]="Israel";*/
$country["IT"]="Italy";
/*$country["JM"]="Jamaica";*/
$country["JP"]="Japan";
/*$country["JO"]="Jordan";
$country["KZ"]="Kazakhstan";
$country["KE"]="Kenya";
$country["KI"]="Kiribati";
$country["KW"]="Kuwait";
$country["KG"]="Kyrgyzstan";
$country["LA"]="Laos";
$country["LV"]="Latvia";
$country["LB"]="Lebanon";
$country["LS"]="Lesotho";
$country["LR"]="Liberia";
$country["LY"]="Libya";
$country["LI"]="Liechtenstein";
$country["LT"]="Lithuania";
$country["LU"]="Luxembourg";
$country["MO"]="Macau";
$country["MK"]="Macedonia - The Former Yugoslav Republic of";
$country["MG"]="Madagascar";
$country["MW"]="Malawi";
$country["MY"]="Malaysia";
$country["MV"]="Maldives";
$country["ML"]="Mali";
$country["MT"]="Malta";
$country["MH"]="Marshall Islands";
$country["MQ"]="Martinique";
$country["MR"]="Mauritania";
$country["MU"]="Mauritius";
$country["YT"]="Mayotte";*/
$country["MX"]="Mexico";
/*$country["FM"]="Micronesia - Federated States of";
$country["MD"]="Moldova";
$country["MC"]="Monaco";
$country["MN"]="Mongolia";
$country["MS"]="Montserrat";
$country["MA"]="Morocco";
$country["MZ"]="Mozambique";
$country["MM"]="Myanmar";
$country["NA"]="Namibia";
$country["NR"]="Naura";
$country["NP"]="Nepal";*/
$country["NL"]="Netherlands";
/*$country["AN"]="Netherlands Antilles";
$country["NC"]="New Caledonia";*/
$country["NZ"]="New Zealand";
$country["NI"]="Nicaragua";
/*$country["NE"]="Niger";
$country["NG"]="Nigeria";
$country["NU"]="Niue";
$country["NF"]="Norfolk Island";
$country["KP"]="North Korea";
$country["MP"]="Northern Mariana Islands";
$country["NO"]="Norway";
$country["OM"]="Oman";
$country["PK"]="Pakistan";
$country["PW"]="Palau";
$country["PA"]="Panama";
$country["PG"]="Papua New Guinea";
$country["PY"]="Paraguay";*/
$country["PE"]="Peru";
/*$country["PH"]="Philippines";
$country["PN"]="Pitcairn Islands";
$country["PL"]="Poland";*/
$country["PT"]="Portugal";
/*$country["PR"]="Puerto Rico";
$country["QA"]="Qatar";
$country["RE"]="Reunion";
$country["RO"]="Romania";*/
$country["RU"]="Russia";
/*$country["RW"]="Rwanda";
$country["KN"]="Saint Kitts and Nevis";
$country["LC"]="Saint Lucia";
$country["VC"]="Saint Vincent and the Grenadines";
$country["WS"]="Samoa";
$country["SM"]="San Marino";
$country["ST"]="Sao Tome and Principe";
$country["SA"]="Saudi Arabia";
$country["SN"]="Senegal";
$country["CS"]="Serbia and Montenegro";
$country["SC"]="Seychelles";
$country["SL"]="Sierra Leone";
$country["SG"]="Singapore";
$country["SK"]="Slovakia";
$country["SI"]="Slovenia";
$country["SB"]="Solomon Islands";
$country["SO"]="Somalia";*/
$country["ZA"]="South Africa";
/*$country["GS"]="South Georgia and the South Sandwich Islands";*/
$country["KR"]="South Korea";
$country["ES"]="Spain";
/*$country["LK"]="Sri Lanka";
$country["SH"]="St. Helena";
$country["PM"]="St. Pierre and Miquelon";
$country["SD"]="Sudan";
$country["SR"]="Suriname";
$country["SJ"]="Svalbard";
$country["SZ"]="Swaziland";*/
$country["SE"]="Sweden";
$country["CH"]="Switzerland";
/*$country["SY"]="Syria";
$country["TW"]="Taiwan";
$country["TJ"]="Tajikistan";
$country["TZ"]="Tanzania";*/
$country["TH"]="Thailand";
/*$country["TG"]="Togo";
$country["TK"]="Tokelau";
$country["TO"]="Tonga";
$country["TT"]="Trinidad and Tobago";
$country["TN"]="Tunisia";*/
$country["TR"]="Turkey";
/*$country["TM"]="Turkmenistan";
$country["TC"]="Turks and Caicos Islands";
$country["TV"]="Tuvalu";
$country["UG"]="Uganda";
$country["UA"]="Ukraine";
$country["AE"]="United Arab Emirates";*/
$country["GB"]="United Kingdom";
/*$country["US"]="United States";*/
/*$country["VI"]="United States Virgin Islands";
$country["UY"]="Uruguay";
$country["UZ"]="Uzbekistan";
$country["VU"]="Vanuatu";
$country["VE"]="Venezuela";
$country["VN"]="Vietnam";
$country["WF"]="Wallis and Futuna";
$country["PS"]="West Bank";
$country["EH"]="Western Sahara";
$country["YE"]="Yemen";
$country["ZM"]="Zambia";
$country["ZW"]="Zimbabwe";*/
?>