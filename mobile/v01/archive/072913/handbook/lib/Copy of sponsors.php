<?php
function getSponsors($country_name)
{
		switch (strtolower($country_name))
		{
			case "general":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
				break;
			case "australia":
				$main_sponsors = "<a href=\"http://globalinksabroad.org/\" target=\"_blank\"><img src=\"/images/logo/GlobalLinks-logo.jpg\" alt=\"GlobaLinks logo\"/></a><a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			case "austria":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "belgium":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
			break;
			case "brazil":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "canada":
				$main_sponsors = "<a href=\"http://conahec.org/\" target=\"_blank\"><img src=\"/images/logo/CONAHEC-logo.jpg\" alt=\"CONAHEC logo\"/></a>";
			break;
			case "chile":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
			break;
			case "china":
				$main_sponsors = "<a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			break;
			case "costa rica":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
			break;
			case "czech republic":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
			break;
			case "denmark":
				$main_sponsors = "<a href=\"http://www.dis.dk/\" target=\"_blank\"><img src=\"/images/logo/Danish-Institute-for-Study-Abroad-logo.jpg\" alt=\"Danish Institute for Study Abroad logo\"/></a>";
			break;
			case "egypt":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "finland":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "france":
				$main_sponsors = "<a href=\"http://www.iaufrance.org/\" target=\"_blank\"><img src=\"/images/logo/Institute-for-American-Universities-logo.jpg\" alt=\"Institute for American Universities logo\"/></a><a href=\"http://studiesabroad.com/\" target=\"_blank\"><a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			break;
			case "germany":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a><a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			break;
			case "greece":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "india":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "ireland":
				$main_sponsors = "<a href=\"http://ciee.org/\" target=\"_blank\"><img src=\"/images/logo/CIEE-logo.jpg\" alt=\"GlobalScholar logo\"/></a>";
			break;
			case "italy":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "japan":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a><a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			break;
			case "mexico":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "netherlands":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "new zealand":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "portugal":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "russia":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "south africa":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "south korea":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "spain":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a>";
			break;
			case "sweden":
				$main_sponsors = "<a href=\"http://globalscholar.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalScholar-logo.jpg\" alt=\"GlobalScholar logo\"/></a><a href=\"http://allabroad.us/\" target=\"_blank\"><img src=\"/images/logo/AllAbroad-logo.jpg\" alt=\"AllAbroad logo\"/></a>";
			break;
			case "united kingdom":
				$main_sponsors = "<a href=\"http://studiesabroad.com/\" target=\"_blank\"><img src=\"/images/logo/International-Studies-Abroad-ISA-logo.jpg\" alt=\"International Studies Abroad ISA logo\"/></a><a href=\"http://studyabroad.com/\" target=\"_blank\"><img src=\"/images/logo/StudyAbroad-logo.jpg\" alt=\"StudyAbroad logo\"/></a>";
			break;
			case "united states":
				$main_sponsors = "<a href=\"http://uStudy.us/\" target=\"_blank\"><img src=\"/images/logo/uStudy-logo.jpg\" alt=\"uStudy logo\"/></a><a href=\"http://globaled.us/\" target=\"_blank\"><img src=\"/images/logo/GlobalEd-logo.jpg\" alt=\"Globaled logo\"/></a>";
			break;
			default:
				case "united states":
				$main_sponsors = "<img src=\"/images/logo/default-logo.jpg\" alt=\"Default logo\"/>";
			
		}
		return;
}

function getSubSponsors($country_name)
{
		switch (strtolower($country_name))
		{
			case "general":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				<li><a href=\"http://www.ciee.org/\" target=\"_blank\">CIEE</a></li>
				</ul>";
				break;
			case "australia":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			case "austria":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "belgium":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "brazil":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "canada":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "chile":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "china":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "costa rica":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "czech republic":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "denmark":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "egypt":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "finland":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "france":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "germany":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "greece":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "india":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "ireland":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "italy":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>

				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "japan":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "mexico":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "netherlands":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "new zealand":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "portugal":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "russia":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "south africa":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "south korea":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "spain":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "sweden":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "united kingdom":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			case "united states":
				$sub_sponsors = "<ul><li><a href=\"http://www.hthworldwide.com/\" target=\"_blank\">HTH Worldwide</a></li>
				<li><a href=\"http://www.internationalsos.com/en//\" target=\"_blank\">International SOS</a></li>
				<li><a href=\"http://www.myisic.com/\" target=\"_blank\">ISIC</a> / <a href=\"http://www.statravel.com/\" target=\"_blank\">STA Travel</a></li>
				</ul>";
			break;
			default:
				case "united states":
				$main_sponsors = "<img src=\"/images/logo/default-logo.jpg\" alt=\"Default logo\"/>";
			
		}
		return;
}
?>