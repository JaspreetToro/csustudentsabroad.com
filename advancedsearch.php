<?php 

include "lib/common.php";

include "lib/conn_data.php";



//***************************************************main function***************************************************************



printHeader(2, "PROGRAM SEARCH");

printBody();

printFooter();



//***************************************************end of main function*******************************************************





function printBody()

{

global $user;

global $SPONSORS;

global $COUNTRY_SPONSORS;    

global $SPONSORS_BANNER;



global $main_sponsors;

global $banner;

?>

<div id="content">

    <div id="left_content">
    	<div id="left_content_top">
            <div id="left_content_top_upper">
                <div id="left_content_top_upper1">STUDY ABROAD PROGRAMS
                </div>
                <div id="left_content_top_upper2">The California State University
                </div> 
            </div>
            <div id="left_content_top_lower">
                <span class="xyz"><img src="caliglobe.gif" style="width: 100%;"></span>
                <span class="xyz" style="padding-left: 18px;">
                    <ul style="padding-left:15px;">
                        <li><a href="Los_Angeles.php">CSU Chancellor’s Office</a></li>
                        <li><a href="Los_Angeles.php">CSU Channel Islands</a></li>
                        <li><a href="Los_Angeles.php">CSU Dominguez Hills</a></li>
                        <li><a href="Los_Angeles.php">Fresno State</a></li>
                        <li><a href="Los_Angeles.php">Humboldt State</a></li>
                        <li><a href="Los_Angeles.php">CSU Los Angeles</a></li>
                        <li><a href="Los_Angeles.php">CSU Monterey Bay</a></li>
                        <li><a href="Los_Angeles.php">Cal Poly Pomona</a></li>
                        <li><a href="Los_Angeles.php">CSU San Bernardino</a></li>
                        <li><a href="Los_Angeles.php">San Francisco State</a></li>
                        <li><a href="Los_Angeles.php">Cal Poly San Luis Obispo</a></li>
                        <li><a href="Los_Angeles.php">Monterey Bay</a></li>
                        <li><a href="Los_Angeles.php">CSU Stanislaus</a></li>
                        
                    </ul>
                        
                </span>
                
                <span class="xyz">
                    <ul style="padding-left: 25px;">
                        <li><a href="Los_Angeles.php">CSU Bakersfield</a></li>
                        <li><a href="Los_Angeles.php">Chico State</a></li>
                        <li><a href="Los_Angeles.php">CSU East Bay</a></li>
                        <li><a href="Los_Angeles.php">CSU Fullerton</a></li>
                        <li><a href="Los_Angeles.php">Long Beach State</a></li>
                        <li><a href="Los_Angeles.php">Cal Maritime</a></li>
                        <li><a href="Los_Angeles.php">CSU Northridge</a></li>
                        <li><a href="Los_Angeles.php">Sacramento State</a></li>
                        <li><a href="Los_Angeles.php">San Diego State</a></li>
                        <li><a href="Los_Angeles.php">San Jose State</a></li>
                        <li><a href="Los_Angeles.php">CSU San Marcos</a></li>
                        <li><a href="Los_Angeles.php">Sonoma State</a></li>
                        
                    </ul>
                </span>
            </div>
        </div>
        <div id="spacing">
            
        </div>

        
<div id="left_content_middle">

  <div class="left_content_main_bottom"> <?php printFeaturedPrograms()?> </div>

        </div>
<div style="clear:both;"></div>

    </div>

    <!-- end of left_content -->

    <div id="right_content">
        <div id="right_content_top_index">
        	
                <div id="box1_top" title="STUDY ABROAD PROGRAM SEARCH">
                        <span class="box_title">
                        STUDY ABROAD PROGRAM SEARCH
                        </span>
                        <div id="program_search_title_container">
                            <div class="program_search_title1">Study Abroad</div>
                            <div class="program_search_title2">Program Search</div>
                        </div>
                </div>
                <div id="box1_middle"><?php printProgramSearchForm(); ?></div>
                <div id="box1_bottom"></div>
             
        </div>
        <div id="spacing" style="background-color:#BFBFBF;">   
        </div>
        <div id="box2_top" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">
                <span class="box_title">
                        COUNTRY SPECIFIC STUDENT HANDBOOKS
                </span>
                        <div id="country_specific_title_container">
                            <div class="country_specific_title1">Country Specific</div>
                            <div class="country_specific_title2">Student Handbooks</div>
                        </div>
        </div>
        <div id="student_handbooks_form_sm">

                            <form name="pch_searchForm" method="get" action="" onsubmit="return validateCountrySM();" class="pch_form">

                                <div class="pch_select_container">

                                    <div class="pch_country">

                                        <div class="pch_label">

                                            <label for="pch_selProgCntry">Select A Country</label>

                                        </div>

                                        <div class="pch_list">

                                            <select name="country" id="pch_selProgCntry">

                                                <option value="Choose">Choose One</option><option value="General" selected="selected">Choose One</option><option value="Argentina">Argentina</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="China">China</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Guatemala">Guatemala</option><option value="Hungary">Hungary</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kenya">Kenya</option><option value="Mexico">Mexico</option><option value="Morocco">Morocco</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Norway">Norway</option><option value="Peru">Peru</option><option value="Portugal">Portugal</option><option value="Russia">Russia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Thailand">Thailand</option><option value="Turkey">Turkey</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="pch_search_button">

                                        <input type="image" name="btnSubmit" src="/images/search_button_gold.gif" alt="Search" title="Search">

                                    </div>

                                    <div class="pch_bottom"></div>

                                </div>

                            </form>

                        </div>
        <div id="right_content_middle">
            <div id="sponsors">
                
                
                </div>
                <div id="study_abroad_resources">
                    <div id="student_handbook_title_container">
                        <div id="student_handbook_title">Study Abroad <br />
                            Student Handbook</div>
                    </div>
                    <div class="student_handbook_menu"> <?php printStudentHandbookMenu()?> </div>
                </div>
                <div id="quicklinks_container">
                    <div id="quicklinks_title_container">
                        <div class="quicklinks_title">Quick Links</div>
                    </div>
                    <div id="quicklinks_content">
                        <div id="quicklinks_top"></div>
                        <div id="quicklinks_middle">
                            <div id="quicklinks">
                                <ul>
                                    <li><a href="handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health &amp; Safety Tips</a></li>
                                    <li><a href="handbook/communication-info-sheets.php?country=General">Communication Info Sheets</a></li>
                                    <li style="border-bottom:none;"><a href="handbook/emergency-planning.php?country=General">Emergency Planning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="quicklinks_bottom"></div>
                    </div>
                </div>
            </div>
            <!-- end of right_content_middle -->
            <div id="right_content_bottom"></div>
        </div>
        <!-- end of right_content -->
    </div>

    <!-- end of content -->

</div>

<?php

}

//end of printBody



function printFeaturedPrograms()

{

?>



      <form name="searchForm" method="post" action="search.php" class="form-horizontal">
      <div>
	<input type="hidden" name="FuseAction" value="Programs.SearchResults" />

	<div class="panel panel-primary">
		<!--<div class="panel-heading">
			Program Search:
		</div>
		 <div class="panel-body">
			<div class="form-group form-inline">
				<label for="txtProgramName" class="config-form-label control-label" >Program Name:</label>
				<div class="config-form-element">
					<input type="text" maxlength="255" name="Program_Name" id="txtProgramName" class="form-control"/>
				</div>
			</div>
			
				<div class="form-group form-inline">
					<label for="selType" class="config-form-label control-label" >Show:</label>
					<div class="config-form-element">
						<select class="form-control" id="selType" name="Program_Type_ID" aria-label="Program_Type_ID" ><option value="1" selected="selected">Directory</option></select>
					</div>
				</div>
			
		</div> -->
	</div>
	<div class="panel panel-primary">
		<div class="" style="font-size:15pt;color:white;background-color:burlywood;padding:10px">
			Program Search:
		</div>
		<div class="panel-body">
			
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group inlineform">
							<label for="selProgCity" class="config-form-label control-label" >City</label>
							<div class="config-form-element">
								<select name="pi" id="selProgCity" multiple="multiple" class="form-control">

								<option value="" selected="selected">Any</option>
						
							<option value="Aachen">Aachen</option>
						
							<option value="Aalborg">Aalborg</option>
						
							<option value="Aarhus">Aarhus</option>
						
							<option value="Aberdeen">Aberdeen</option>
						
							<option value="Abo">Abo</option>
						
							<option value="Accra">Accra</option>
						
							<option value="Addis Ababa">Addis Ababa</option>
						
							<option value="Adelaide">Adelaide</option>
						
							<option value="Agen">Agen</option>
						
							<option value="Agra">Agra</option>
						
							<option value="Ahmedabad">Ahmedabad</option>
						
							<option value="Aix en Provence">Aix en Provence</option>
						
							<option value="Aix-en-Provence">Aix-en-Provence</option>
						
							<option value="Akita">Akita</option>
						
							<option value="Akumal">Akumal</option>
						
							<option value="Alajuela">Alajuela</option>
						
							<option value="Alanya">Alanya</option>
						
							<option value="Albi">Albi</option>
						
							<option value="Albury-Wodonga">Albury-Wodonga</option>
						
							<option value="Alcala">Alcala</option>
						
							<option value="Aleppo">Aleppo</option>
						
							<option value="Alexandria">Alexandria</option>
						
							<option value="Algerciras">Algerciras</option>
						
							<option value="Alicante">Alicante</option>
						
							<option value="Alice">Alice</option>
						
							<option value="Alice Springs">Alice Springs</option>
						
							<option value="Almeria">Almeria</option>
						
							<option value="Almería">Almería</option>
						
							<option value="Alnarp">Alnarp</option>
						
							<option value="Amboise">Amboise</option>
						
							<option value="Amherst, MA">Amherst, MA</option>
						
							<option value="Amiens">Amiens</option>
						
							<option value="Amman">Amman</option>
						
							<option value="Amsterdam">Amsterdam</option>
						
							<option value="An Giang">An Giang</option>
						
							<option value="Andros Island">Andros Island</option>
						
							<option value="Angers">Angers</option>
						
							<option value="Ankara">Ankara</option>
						
							<option value="Annecy">Annecy</option>
						
							<option value="Ansung City">Ansung City</option>
						
							<option value="Antananarivo">Antananarivo</option>
						
							<option value="Antayla">Antayla</option>
						
							<option value="Antibes">Antibes</option>
						
							<option value="Antigua">Antigua</option>
						
							<option value="Antofagasta">Antofagasta</option>
						
							<option value="Antwerp">Antwerp</option>
						
							<option value="Apia">Apia</option>
						
							<option value="Archamps">Archamps</option>
						
							<option value="Arenal Volcano">Arenal Volcano</option>
						
							<option value="Arequipa">Arequipa</option>
						
							<option value="Arezzo">Arezzo</option>
						
							<option value="Arica">Arica</option>
						
							<option value="Arles">Arles</option>
						
							<option value="Armidale">Armidale</option>
						
							<option value="Arromanches">Arromanches</option>
						
							<option value="Arusha">Arusha</option>
						
							<option value="As">As</option>
						
							<option value="Asahikawa">Asahikawa</option>
						
							<option value="Asan">Asan</option>
						
							<option value="Ascoli Piceno">Ascoli Piceno</option>
						
							<option value="Ashikaga">Ashikaga</option>
						
							<option value="Assisi">Assisi</option>
						
							<option value="Asuncion">Asuncion</option>
						
							<option value="Atenas">Atenas</option>
						
							<option value="Atheniou">Atheniou</option>
						
							<option value="Athens">Athens</option>
						
							<option value="Atherton Tablelands">Atherton Tablelands</option>
						
							<option value="Atlanta, GA">Atlanta, GA</option>
						
							<option value="Auckland">Auckland</option>
						
							<option value="Aurangabad">Aurangabad</option>
						
							<option value="Auroville">Auroville</option>
						
							<option value="Auxerre">Auxerre</option>
						
							<option value="Aveiro">Aveiro</option>
						
							<option value="Avignon">Avignon</option>
						
							<option value="Avila">Avila</option>
						
							<option value="Ayacucho">Ayacucho</option>
						
							<option value="Ayers Rock">Ayers Rock</option>
						
							<option value="Azay-le-Rideau">Azay-le-Rideau</option>
						
							<option value="Bahia">Bahia</option>
						
							<option value="Bahía de Caráquez">Bahía de Caráquez</option>
						
							<option value="Bahia Magdalena">Bahia Magdalena</option>
						
							<option value="Ballarat">Ballarat</option>
						
							<option value="Ballyvaughan">Ballyvaughan</option>
						
							<option value="Bamako">Bamako</option>
						
							<option value="Bandung">Bandung</option>
						
							<option value="Bangalore">Bangalore</option>
						
							<option value="Bangkok">Bangkok</option>
						
							<option value="Bangor">Bangor</option>
						
							<option value="Baotou">Baotou</option>
						
							<option value="Barcelona">Barcelona</option>
						
							<option value="Bariloche">Bariloche</option>
						
							<option value="Barranquilla">Barranquilla</option>
						
							<option value="Bath">Bath</option>
						
							<option value="Bathurst">Bathurst</option>
						
							<option value="Bedford">Bedford</option>
						
							<option value="Bedulu">Bedulu</option>
						
							<option value="Beer Sheva">Beer Sheva</option>
						
							<option value="Beijing">Beijing</option>
						
							<option value="Beirut">Beirut</option>
						
							<option value="Belém">Belém</option>
						
							<option value="Belfast">Belfast</option>
						
							<option value="Belfort">Belfort</option>
						
							<option value="Belgrade">Belgrade</option>
						
							<option value="Belize City">Belize City</option>
						
							<option value="Bellville">Bellville</option>
						
							<option value="Belmopan">Belmopan</option>
						
							<option value="Belo Horizonte">Belo Horizonte</option>
						
							<option value="Bendigo">Bendigo</option>
						
							<option value="Benin">Benin</option>
						
							<option value="Beppu">Beppu</option>
						
							<option value="Bequia">Bequia</option>
						
							<option value="Bergen">Bergen</option>
						
							<option value="Berlin">Berlin</option>
						
							<option value="Bern">Bern</option>
						
							<option value="Besancon">Besancon</option>
						
							<option value="Biarritz">Biarritz</option>
						
							<option value="Bielefeld">Bielefeld</option>
						
							<option value="Bilbao">Bilbao</option>
						
							<option value="Bioko Island">Bioko Island</option>
						
							<option value="Birmingham">Birmingham</option>
						
							<option value="Bishkek">Bishkek</option>
						
							<option value="Blagoevgrad">Blagoevgrad</option>
						
							<option value="Bloemfontein">Bloemfontein</option>
						
							<option value="Bluefields">Bluefields</option>
						
							<option value="Bocas del Toro">Bocas del Toro</option>
						
							<option value="Bodh Gaya">Bodh Gaya</option>
						
							<option value="Bodo">Bodo</option>
						
							<option value="Bodrum">Bodrum</option>
						
							<option value="Bogota">Bogota</option>
						
							<option value="Bologna">Bologna</option>
						
							<option value="Bombay">Bombay</option>
						
							<option value="Bonaire">Bonaire</option>
						
							<option value="Bonn">Bonn</option>
						
							<option value="Bordeaux">Bordeaux</option>
						
							<option value="Boston, MA">Boston, MA</option>
						
							<option value="Bournemouth">Bournemouth</option>
						
							<option value="Bradford">Bradford</option>
						
							<option value="Bratislava">Bratislava</option>
						
							<option value="Braunau">Braunau</option>
						
							<option value="Braunschweig">Braunschweig</option>
						
							<option value="Brazilia">Brazilia</option>
						
							<option value="Bregenz">Bregenz</option>
						
							<option value="Bremen">Bremen</option>
						
							<option value="Brest">Brest</option>
						
							<option value="Brighton">Brighton</option>
						
							<option value="Brisbane">Brisbane</option>
						
							<option value="Bristol">Bristol</option>
						
							<option value="Brittany">Brittany</option>
						
							<option value="Brixen">Brixen</option>
						
							<option value="Brno">Brno</option>
						
							<option value="Brunswick, ME">Brunswick, ME</option>
						
							<option value="Brussels">Brussels</option>
						
							<option value="Budapest">Budapest</option>
						
							<option value="Buea">Buea</option>
						
							<option value="Buena Vista">Buena Vista</option>
						
							<option value="Buenavista">Buenavista</option>
						
							<option value="Buenos Aires">Buenos Aires</option>
						
							<option value="Bulawayo">Bulawayo</option>
						
							<option value="Bundoora">Bundoora</option>
						
							<option value="Burgos">Burgos</option>
						
							<option value="Busan">Busan</option>
						
							<option value="Bushbuckridge">Bushbuckridge</option>
						
							<option value="Byron Bay">Byron Bay</option>
						
							<option value="Cachan">Cachan</option>
						
							<option value="Cadir Hoyuk">Cadir Hoyuk</option>
						
							<option value="Cadiz">Cadiz</option>
						
							<option value="Caen">Caen</option>
						
							<option value="Cagliari">Cagliari</option>
						
							<option value="Cairns">Cairns</option>
						
							<option value="Cairo">Cairo</option>
						
							<option value="Calabash Caye">Calabash Caye</option>
						
							<option value="Calakmul">Calakmul</option>
						
							<option value="Calgary">Calgary</option>
						
							<option value="Callaghan">Callaghan</option>
						
							<option value="Cambridge">Cambridge</option>
						
							<option value="Campeche">Campeche</option>
						
							<option value="Campinas">Campinas</option>
						
							<option value="Can Tho">Can Tho</option>
						
							<option value="Canberra">Canberra</option>
						
							<option value="Cannes">Cannes</option>
						
							<option value="Canterbury">Canterbury</option>
						
							<option value="Cape Coast">Cape Coast</option>
						
							<option value="Cape Town">Cape Town</option>
						
							<option value="Capri">Capri</option>
						
							<option value="Caracas">Caracas</option>
						
							<option value="Cardiff">Cardiff</option>
						
							<option value="Carlow">Carlow</option>
						
							<option value="Carriacou">Carriacou</option>
						
							<option value="Cartagena">Cartagena</option>
						
							<option value="Cartago">Cartago</option>
						
							<option value="Casablanca">Casablanca</option>
						
							<option value="Castiglion Fiorentino">Castiglion Fiorentino</option>
						
							<option value="Catania">Catania</option>
						
							<option value="Cayenne">Cayenne</option>
						
							<option value="Central Anatolia">Central Anatolia</option>
						
							<option value="Cergy-pontoise">Cergy-pontoise</option>
						
							<option value="Cha-am">Cha-am</option>
						
							<option value="Chainat">Chainat</option>
						
							<option value="Chaing Mai">Chaing Mai</option>
						
							<option value="Chambery">Chambery</option>
						
							<option value="Changchun">Changchun</option>
						
							<option value="Changsha">Changsha</option>
						
							<option value="Chartres">Chartres</option>
						
							<option value="Cheltenham">Cheltenham</option>
						
							<option value="Chengde">Chengde</option>
						
							<option value="Chengdu">Chengdu</option>
						
							<option value="Chennai">Chennai</option>
						
							<option value="Chesapeake Bay">Chesapeake Bay</option>
						
							<option value="Chester">Chester</option>
						
							<option value="Cheverny">Cheverny</option>
						
							<option value="Chiang Mai">Chiang Mai</option>
						
							<option value="Chiapas">Chiapas</option>
						
							<option value="Chiba">Chiba</option>
						
							<option value="Chicago">Chicago</option>
						
							<option value="Chichicastenango">Chichicastenango</option>
						
							<option value="Chicoutimi">Chicoutimi</option>
						
							<option value="Chillan">Chillan</option>
						
							<option value="Chisinau">Chisinau</option>
						
							<option value="Cholet">Cholet</option>
						
							<option value="Cholula, Puebla">Cholula, Puebla</option>
						
							<option value="Chon Buri">Chon Buri</option>
						
							<option value="Chongqing">Chongqing</option>
						
							<option value="Christchurch">Christchurch</option>
						
							<option value="Chuncheon">Chuncheon</option>
						
							<option value="Cienfuegos">Cienfuegos</option>
						
							<option value="Ciudad de Mexico">Ciudad de Mexico</option>
						
							<option value="Coastal Kenya">Coastal Kenya</option>
						
							<option value="Cochabamba">Cochabamba</option>
						
							<option value="Cockburn Harbour">Cockburn Harbour</option>
						
							<option value="Coimbra">Coimbra</option>
						
							<option value="Colchester">Colchester</option>
						
							<option value="Coleraine">Coleraine</option>
						
							<option value="Collonges-sous-Saleve">Collonges-sous-Saleve</option>
						
							<option value="Cologne">Cologne</option>
						
							<option value="Colombo">Colombo</option>
						
							<option value="Colorado Beach">Colorado Beach</option>
						
							<option value="Compiegne">Compiegne</option>
						
							<option value="Concepcion">Concepcion</option>
						
							<option value="Copán">Copán</option>
						
							<option value="Copenhagen">Copenhagen</option>
						
							<option value="Coquimbo">Coquimbo</option>
						
							<option value="Cordoba">Cordoba</option>
						
							<option value="Córdoba">Córdoba</option>
						
							<option value="Cork">Cork</option>
						
							<option value="Coronado">Coronado</option>
						
							<option value="Corrientes">Corrientes</option>
						
							<option value="Cortona">Cortona</option>
						
							<option value="Cottbus">Cottbus</option>
						
							<option value="Courtauld">Courtauld</option>
						
							<option value="Coventry">Coventry</option>
						
							<option value="Crete">Crete</option>
						
							<option value="Cuenca">Cuenca</option>
						
							<option value="Cuernavaca">Cuernavaca</option>
						
							<option value="Cuper">Cuper</option>
						
							<option value="Curitiba">Curitiba</option>
						
							<option value="Cuzco">Cuzco</option>
						
							<option value="Czestochowa">Czestochowa</option>
						
							<option value="Daegu">Daegu</option>
						
							<option value="Daejeon">Daejeon</option>
						
							<option value="Dakar">Dakar</option>
						
							<option value="Dalian">Dalian</option>
						
							<option value="Damascus">Damascus</option>
						
							<option value="Danang">Danang</option>
						
							<option value="Dangriga">Dangriga</option>
						
							<option value="Dar es Salaam">Dar es Salaam</option>
						
							<option value="Darmstadt">Darmstadt</option>
						
							<option value="Dartington">Dartington</option>
						
							<option value="Darwin">Darwin</option>
						
							<option value="Debrecen">Debrecen</option>
						
							<option value="Delft">Delft</option>
						
							<option value="Delhi">Delhi</option>
						
							<option value="Delos">Delos</option>
						
							<option value="Delphi">Delphi</option>
						
							<option value="Den Haag">Den Haag</option>
						
							<option value="Denia">Denia</option>
						
							<option value="Denpasar">Denpasar</option>
						
							<option value="Derry">Derry</option>
						
							<option value="Dhaka">Dhaka</option>
						
							<option value="Dharamsala">Dharamsala</option>
						
							<option value="Dhrangadhra">Dhrangadhra</option>
						
							<option value="Differdange">Differdange</option>
						
							<option value="Dijon">Dijon</option>
						
							<option value="Doha">Doha</option>
						
							<option value="Dongfang">Dongfang</option>
						
							<option value="Dorchester">Dorchester</option>
						
							<option value="Dorset">Dorset</option>
						
							<option value="Dortmund">Dortmund</option>
						
							<option value="Dresden">Dresden</option>
						
							<option value="Dschang">Dschang</option>
						
							<option value="Dubai">Dubai</option>
						
							<option value="Dublin">Dublin</option>
						
							<option value="Dubrovnik">Dubrovnik</option>
						
							<option value="Duisburg">Duisburg</option>
						
							<option value="Dundee">Dundee</option>
						
							<option value="Dunedin">Dunedin</option>
						
							<option value="Durban">Durban</option>
						
							<option value="Durham">Durham</option>
						
							<option value="Dusseldorf">Dusseldorf</option>
						
							<option value="East Sussex">East Sussex</option>
						
							<option value="Eastbourne">Eastbourne</option>
						
							<option value="Easter Island">Easter Island</option>
						
							<option value="Ecoversidade">Ecoversidade</option>
						
							<option value="Edfu">Edfu</option>
						
							<option value="Edinburgh">Edinburgh</option>
						
							<option value="Edmonton">Edmonton</option>
						
							<option value="Eichstatt">Eichstatt</option>
						
							<option value="Elba">Elba</option>
						
							<option value="Eldoret">Eldoret</option>
						
							<option value="Epernay">Epernay</option>
						
							<option value="Epidauros">Epidauros</option>
						
							<option value="Erlangen-Nurnberg">Erlangen-Nurnberg</option>
						
							<option value="Esbjerg">Esbjerg</option>
						
							<option value="Estado de Mexico">Estado de Mexico</option>
						
							<option value="Exeter">Exeter</option>
						
							<option value="Exmouth">Exmouth</option>
						
							<option value="Falmouth">Falmouth</option>
						
							<option value="Famagusta">Famagusta</option>
						
							<option value="Faro">Faro</option>
						
							<option value="Fenyan">Fenyan</option>
						
							<option value="Ferrara">Ferrara</option>
						
							<option value="Fez">Fez</option>
						
							<option value="Findhorn">Findhorn</option>
						
							<option value="Flamingo Beach">Flamingo Beach</option>
						
							<option value="Florence">Florence</option>
						
							<option value="Florianopolis">Florianopolis</option>
						
							<option value="Fontainebleau">Fontainebleau</option>
						
							<option value="Fora">Fora</option>
						
							<option value="Fort Dauphin">Fort Dauphin</option>
						
							<option value="Fortaleza">Fortaleza</option>
						
							<option value="Frankfurt">Frankfurt</option>
						
							<option value="Fraser Island">Fraser Island</option>
						
							<option value="Frederiksberg">Frederiksberg</option>
						
							<option value="Freiburg">Freiburg</option>
						
							<option value="Fremantle">Fremantle</option>
						
							<option value="Fribourg">Fribourg</option>
						
							<option value="Fukuoka">Fukuoka</option>
						
							<option value="Futuroscope">Futuroscope</option>
						
							<option value="Fuzhou">Fuzhou</option>
						
							<option value="Gaborone">Gaborone</option>
						
							<option value="Galapagos">Galapagos</option>
						
							<option value="Galashiels">Galashiels</option>
						
							<option value="Gallipoli">Gallipoli</option>
						
							<option value="Galway">Galway</option>
						
							<option value="Gangtok">Gangtok</option>
						
							<option value="Gap">Gap</option>
						
							<option value="Geelong">Geelong</option>
						
							<option value="Geneva">Geneva</option>
						
							<option value="Genoa">Genoa</option>
						
							<option value="Getafe">Getafe</option>
						
							<option value="Ghent">Ghent</option>
						
							<option value="Gibraltar">Gibraltar</option>
						
							<option value="GieBen">GieBen</option>
						
							<option value="Giessen">Giessen</option>
						
							<option value="Girona">Girona</option>
						
							<option value="Glasgow">Glasgow</option>
						
							<option value="Gold Coast">Gold Coast</option>
						
							<option value="Gottingen">Gottingen</option>
						
							<option value="Grado">Grado</option>
						
							<option value="Grahamstown">Grahamstown</option>
						
							<option value="Granada">Granada</option>
						
							<option value="Grantham">Grantham</option>
						
							<option value="Graz">Graz</option>
						
							<option value="Great Barrier Reef">Great Barrier Reef</option>
						
							<option value="Greater Sudbury">Greater Sudbury</option>
						
							<option value="Grenoble">Grenoble</option>
						
							<option value="Groningen">Groningen</option>
						
							<option value="Guadalajara">Guadalajara</option>
						
							<option value="Guanacaste">Guanacaste</option>
						
							<option value="Guanajuato">Guanajuato</option>
						
							<option value="Guangzhou">Guangzhou</option>
						
							<option value="Guatemala">Guatemala</option>
						
							<option value="Guayaquil">Guayaquil</option>
						
							<option value="Guilin">Guilin</option>
						
							<option value="Guiyang City">Guiyang City</option>
						
							<option value="Gulu">Gulu</option>
						
							<option value="Gwangju">Gwangju</option>
						
							<option value="Gyeongsan">Gyeongsan</option>
						
							<option value="Hai Phong">Hai Phong</option>
						
							<option value="Haifa">Haifa</option>
						
							<option value="Haikou">Haikou</option>
						
							<option value="Haimen">Haimen</option>
						
							<option value="Hainan">Hainan</option>
						
							<option value="Halifax">Halifax</option>
						
							<option value="Halong Bay">Halong Bay</option>
						
							<option value="Hamburg">Hamburg</option>
						
							<option value="Hamilton">Hamilton</option>
						
							<option value="Handan">Handan</option>
						
							<option value="Hangzhou">Hangzhou</option>
						
							<option value="Hannover">Hannover</option>
						
							<option value="Hanoi">Hanoi</option>
						
							<option value="Harbin">Harbin</option>
						
							<option value="Hartford, CT">Hartford, CT</option>
						
							<option value="Hat Yai">Hat Yai</option>
						
							<option value="Havana">Havana</option>
						
							<option value="Haworth">Haworth</option>
						
							<option value="Heidelberg">Heidelberg</option>
						
							<option value="Helsinki">Helsinki</option>
						
							<option value="Heraklion">Heraklion</option>
						
							<option value="Heredia">Heredia</option>
						
							<option value="Hermosillo">Hermosillo</option>
						
							<option value="Herradura">Herradura</option>
						
							<option value="Hervey Bay">Hervey Bay</option>
						
							<option value="Hikone">Hikone</option>
						
							<option value="Hirakata City">Hirakata City</option>
						
							<option value="Hiratsuka">Hiratsuka</option>
						
							<option value="Hiroshima">Hiroshima</option>
						
							<option value="Ho">Ho</option>
						
							<option value="Ho Chi Minh City">Ho Chi Minh City</option>
						
							<option value="Hobart">Hobart</option>
						
							<option value="Hohenheim">Hohenheim</option>
						
							<option value="Hong Kong">Hong Kong</option>
						
							<option value="Honolulu, HI">Honolulu, HI</option>
						
							<option value="Hsinchu">Hsinchu</option>
						
							<option value="Huddersfield">Huddersfield</option>
						
							<option value="Hue">Hue</option>
						
							<option value="Huia">Huia</option>
						
							<option value="Hull">Hull</option>
						
							<option value="Hyderabad">Hyderabad</option>
						
							<option value="Hyeres">Hyeres</option>
						
							<option value="Ifrane">Ifrane</option>
						
							<option value="Ilheus">Ilheus</option>
						
							<option value="Imbituba">Imbituba</option>
						
							<option value="Innsbruck">Innsbruck</option>
						
							<option value="Inverness">Inverness</option>
						
							<option value="Ioannina">Ioannina</option>
						
							<option value="Iquitos">Iquitos</option>
						
							<option value="Irbid">Irbid</option>
						
							<option value="Iringa">Iringa</option>
						
							<option value="Irkutsk">Irkutsk</option>
						
							<option value="Istanbul">Istanbul</option>
						
							<option value="Izmir">Izmir</option>
						
							<option value="Jackson">Jackson</option>
						
							<option value="Jaco Beach">Jaco Beach</option>
						
							<option value="Jaipur">Jaipur</option>
						
							<option value="Jakar">Jakar</option>
						
							<option value="Jakarta">Jakarta</option>
						
							<option value="Jarabacoa">Jarabacoa</option>
						
							<option value="Jena">Jena</option>
						
							<option value="Jerusalem">Jerusalem</option>
						
							<option value="Jiamusi">Jiamusi</option>
						
							<option value="Jilin">Jilin</option>
						
							<option value="Jinan">Jinan</option>
						
							<option value="João Pessoa">João Pessoa</option>
						
							<option value="Joensuu">Joensuu</option>
						
							<option value="Johannesburg">Johannesburg</option>
						
							<option value="Jordanstown">Jordanstown</option>
						
							<option value="Juiz de Fora">Juiz de Fora</option>
						
							<option value="Jyvaskyla">Jyvaskyla</option>
						
							<option value="Jyväskylä">Jyväskylä</option>
						
							<option value="Kaiaua">Kaiaua</option>
						
							<option value="Kakadu">Kakadu</option>
						
							<option value="Kalambaka">Kalambaka</option>
						
							<option value="Kalmar">Kalmar</option>
						
							<option value="Kamloops">Kamloops</option>
						
							<option value="Kampala">Kampala</option>
						
							<option value="Kanazawa">Kanazawa</option>
						
							<option value="Kanchipuram">Kanchipuram</option>
						
							<option value="Kandy">Kandy</option>
						
							<option value="Karlsruhe">Karlsruhe</option>
						
							<option value="Karlstad">Karlstad</option>
						
							<option value="Kasugai">Kasugai</option>
						
							<option value="Kata Tjuta">Kata Tjuta</option>
						
							<option value="Kathmandu">Kathmandu</option>
						
							<option value="Kauai">Kauai</option>
						
							<option value="Kawasaki">Kawasaki</option>
						
							<option value="Keele">Keele</option>
						
							<option value="Kent">Kent</option>
						
							<option value="Kerala">Kerala</option>
						
							<option value="Khabarovsk">Khabarovsk</option>
						
							<option value="Khajuraho">Khajuraho</option>
						
							<option value="Kham">Kham</option>
						
							<option value="Kharkiv">Kharkiv</option>
						
							<option value="Khon Kaen">Khon Kaen</option>
						
							<option value="Kibbutz Ketura">Kibbutz Ketura</option>
						
							<option value="Kiel">Kiel</option>
						
							<option value="Kiev">Kiev</option>
						
							<option value="Kigali">Kigali</option>
						
							<option value="Kilimanjaro">Kilimanjaro</option>
						
							<option value="Kilimanjaro Bush Camp">Kilimanjaro Bush Camp</option>
						
							<option value="Kimasi">Kimasi</option>
						
							<option value="Kingston">Kingston</option>
						
							<option value="Kingston-upon-Hull">Kingston-upon-Hull</option>
						
							<option value="Kingston-upon-Thames">Kingston-upon-Thames</option>
						
							<option value="Kisumu">Kisumu</option>
						
							<option value="Kitzbuhel">Kitzbuhel</option>
						
							<option value="Klagenfurt">Klagenfurt</option>
						
							<option value="Kobe">Kobe</option>
						
							<option value="Kochi">Kochi</option>
						
							<option value="Kolding">Kolding</option>
						
							<option value="Kolkata">Kolkata</option>
						
							<option value="Konstanz">Konstanz</option>
						
							<option value="Koobi Fora">Koobi Fora</option>
						
							<option value="Koupio">Koupio</option>
						
							<option value="Kowloon">Kowloon</option>
						
							<option value="Krakow">Krakow</option>
						
							<option value="Kristianstad">Kristianstad</option>
						
							<option value="Kuala Lumpur">Kuala Lumpur</option>
						
							<option value="Kuching">Kuching</option>
						
							<option value="Kumasi">Kumasi</option>
						
							<option value="Kunming">Kunming</option>
						
							<option value="Kyiv">Kyiv</option>
						
							<option value="Kyoto">Kyoto</option>
						
							<option value="Kyoto City">Kyoto City</option>
						
							<option value="Kyrenia">Kyrenia</option>
						
							<option value="La Ceiba">La Ceiba</option>
						
							<option value="La Coruna">La Coruna</option>
						
							<option value="La Manzanilla">La Manzanilla</option>
						
							<option value="La Milpa">La Milpa</option>
						
							<option value="La Napoule">La Napoule</option>
						
							<option value="La Paz">La Paz</option>
						
							<option value="La Rochelle">La Rochelle</option>
						
							<option value="La Romana">La Romana</option>
						
							<option value="La Rosiere">La Rosiere</option>
						
							<option value="La Serena">La Serena</option>
						
							<option value="La Suerte">La Suerte</option>
						
							<option value="Ladakh">Ladakh</option>
						
							<option value="Lake Atitlan">Lake Atitlan</option>
						
							<option value="Lamanai">Lamanai</option>
						
							<option value="Lamu">Lamu</option>
						
							<option value="Lancashire">Lancashire</option>
						
							<option value="Lancaster">Lancaster</option>
						
							<option value="Lappeenranta">Lappeenranta</option>
						
							<option value="Larnaca">Larnaca</option>
						
							<option value="Launceston">Launceston</option>
						
							<option value="Lausanne">Lausanne</option>
						
							<option value="Le Havre">Le Havre</option>
						
							<option value="Le Mans">Le Mans</option>
						
							<option value="Lebon">Lebon</option>
						
							<option value="Lecce">Lecce</option>
						
							<option value="Leeds">Leeds</option>
						
							<option value="Legon">Legon</option>
						
							<option value="Leicester">Leicester</option>
						
							<option value="Leiden">Leiden</option>
						
							<option value="Leipzig">Leipzig</option>
						
							<option value="Lemgo">Lemgo</option>
						
							<option value="Lennoxville">Lennoxville</option>
						
							<option value="Leoben">Leoben</option>
						
							<option value="Lesotho">Lesotho</option>
					
							<option value="Leuven">Leuven</option>
						
							<option value="Leysin">Leysin</option>
						
							<option value="Lhasa">Lhasa</option>
						
							<option value="Lianyungang">Lianyungang</option>
						
							<option value="Libertador San Martin">Libertador San Martin</option>
						
							<option value="Liege">Liege</option>
						
							<option value="Lille">Lille</option>
						
							<option value="Lima">Lima</option>
						
							<option value="Limassol">Limassol</option>
						
							<option value="Limerick">Limerick</option>
						
							<option value="Limpopo">Limpopo</option>
						
							<option value="Linz">Linz</option>
						
							<option value="Lisbon">Lisbon</option>
					
							<option value="Lisieux">Lisieux</option>
					
							<option value="Lismore">Lismore</option>
						
							<option value="Little Cayman">Little Cayman</option>
						
							<option value="Liverpool">Liverpool</option>
						
							<option value="Livingstone">Livingstone</option>
						
							<option value="Ljubljana">Ljubljana</option>
						
							<option value="Logrono">Logrono</option>
						
							<option value="Loire Valley">Loire Valley</option>
						
							<option value="London">London</option>
						
							<option value="Londonderry">Londonderry</option>
						
							<option value="Lopburi">Lopburi</option>
						
							<option value="Los Angeles">Los Angeles</option>
						
							<option value="Louvain">Louvain</option>
						
							<option value="Luang Prabang">Luang Prabang</option>
						
							<option value="Lublin">Lublin</option>
						
							<option value="Lucca">Lucca</option>
						
							<option value="Lucerne">Lucerne</option>
						
							<option value="Lugano">Lugano</option>
						
							<option value="Lulea">Lulea</option>
						
							<option value="Lund">Lund</option>
						
							<option value="Lüneburg">Lüneburg</option>
						
							<option value="Luoyang">Luoyang</option>
						
							<option value="Luxembourg">Luxembourg</option>
						
							<option value="Luxor">Luxor</option>
						
							<option value="Lviv">Lviv</option>
						
							<option value="Lyngby">Lyngby</option>
						
							<option value="Lyon">Lyon</option>
						
							<option value="Lyttleton">Lyttleton</option>
						
							<option value="Maastricht">Maastricht</option>
						
							<option value="Macarthur">Macarthur</option>
						
							<option value="Macau">Macau</option>
						
							<option value="Maceio">Maceio</option>
						
							<option value="Macon">Macon</option>
						
							<option value="Madaba">Madaba</option>
						
							<option value="Madras">Madras</option>
						
							<option value="Madrid">Madrid</option>
						
							<option value="Madurai">Madurai</option>
						
							<option value="Magee">Magee</option>
						
							<option value="Magnetic Island">Magnetic Island</option>
						
							<option value="Mahabalipuram">Mahabalipuram</option>
						
							<option value="Mahe">Mahe</option>
						
							<option value="Mainz">Mainz</option>
						
							<option value="Malabo">Malabo</option>
						
							<option value="Malaga">Malaga</option>
						
							<option value="Mallorca">Mallorca</option>
						
							<option value="Malmo">Malmo</option>
						
							<option value="Mana">Mana</option>
						
							<option value="Managua">Managua</option>
						
							<option value="Manaus">Manaus</option>
						
							<option value="Manchester">Manchester</option>
						
							<option value="Manila">Manila</option>
						
							<option value="Manilla">Manilla</option>
						
							<option value="Manipal">Manipal</option>
						
							<option value="Manizales">Manizales</option>
						
							<option value="Mannheim">Mannheim</option>
						
							<option value="Manu">Manu</option>
						
							<option value="Manuel Antonio">Manuel Antonio</option>
						
							<option value="Mar del Plata">Mar del Plata</option>
						
							<option value="Marbella">Marbella</option>
						
							<option value="Marburg">Marburg</option>
						
							<option value="Mariana">Mariana</option>
						
							<option value="Maroochydore">Maroochydore</option>
						
							<option value="Marrakech">Marrakech</option>
						
							<option value="Marseille">Marseille</option>
						
							<option value="Masstricht">Masstricht</option>
						
							<option value="Maun">Maun</option>
						
							<option value="Maynooth">Maynooth</option>
						
							<option value="Mazatlan">Mazatlan</option>
						
							<option value="Medellin">Medellin</option>
						
							<option value="Meknes">Meknes</option>
						
							<option value="Melbourne">Melbourne</option>
						
							<option value="Mendoza">Mendoza</option>
						
							<option value="Menorca">Menorca</option>
						
							<option value="Merida">Merida</option>
						
							<option value="Metz">Metz</option>
						
							<option value="Mexico City">Mexico City</option>
						
							<option value="Middlesbrough">Middlesbrough</option>
						
							<option value="Middletown, CT">Middletown, CT</option>
						
							<option value="Milan">Milan</option>
						
							<option value="Mildura">Mildura</option>
						
							<option value="Mindo">Mindo</option>
						
							<option value="Minneapolis–Saint Paul">Minneapolis–Saint Paul</option>
						
							<option value="Mishima">Mishima</option>
						
							<option value="Mitaka City">Mitaka City</option>
						
							<option value="Mittweida">Mittweida</option>
						
							<option value="Mojo Hill Camp">Mojo Hill Camp</option>
						
							<option value="Mombasa">Mombasa</option>
						
							<option value="Monrovia">Monrovia</option>
						
							<option value="Mont-St-Michel">Mont-St-Michel</option>
						
							<option value="Montañita">Montañita</option>
						
							<option value="Montbard">Montbard</option>
						
							<option value="Monte Carlo">Monte Carlo</option>
						
							<option value="Monterrey">Monterrey</option>
						
							<option value="Monteverde">Monteverde</option>
						
							<option value="Montevideo">Montevideo</option>
						
							<option value="Montpellier">Montpellier</option>
						
							<option value="Montreal">Montreal</option>
						
							<option value="Montreux">Montreux</option>
						
							<option value="Moorea">Moorea</option>
						
							<option value="Morelia">Morelia</option>
						
							<option value="Morioka">Morioka</option>
						
							<option value="Morogoro">Morogoro</option>
						
							<option value="Moscow">Moscow</option>
						
							<option value="Moshi">Moshi</option>
						
							<option value="Moyo Hill Camp">Moyo Hill Camp</option>
						
							<option value="Msida">Msida</option>
						
							<option value="Mt. Buller">Mt. Buller</option>
						
							<option value="Muak Lek">Muak Lek</option>
						
							<option value="Mulhouse">Mulhouse</option>
						
							<option value="Multiple">Multiple</option>
						
							<option value="Mumbai">Mumbai</option>
						
							<option value="Munchen">Munchen</option>
						
							<option value="Munich">Munich</option>
						
							<option value="Munster">Munster</option>
						
							<option value="Murcia">Murcia</option>
						
							<option value="Muscat">Muscat</option>
						
							<option value="Mwanza">Mwanza</option>
						
							<option value="Mycenae">Mycenae</option>
						
							<option value="Mykonos">Mykonos</option>
						
							<option value="Mysore">Mysore</option>
						
							<option value="Mystic, CT">Mystic, CT</option>
					
							<option value="Nafplion">Nafplion</option>
						
							<option value="Nagano">Nagano</option>
						
							<option value="Nagasaki">Nagasaki</option>
						
							<option value="Nagoya">Nagoya</option>
						
							<option value="Nairobi">Nairobi</option>
						
							<option value="Nakajo">Nakajo</option>
						
							<option value="Nakhon Pathon">Nakhon Pathon</option>
						
							<option value="Nakhon Ratchasima">Nakhon Ratchasima</option>
						
							<option value="Nakuru">Nakuru</option>
						
							<option value="Nancy">Nancy</option>
						
							<option value="Nanjing">Nanjing</option>
						
							<option value="Nantes">Nantes</option>
						
							<option value="Napier">Napier</option>
						
							<option value="Naples">Naples</option>
						
							<option value="Napo Region">Napo Region</option>
						
							<option value="Nara">Nara</option>
						
							<option value="Nassau">Nassau</option>
						
							<option value="Naxos">Naxos</option>
						
							<option value="New Delhi">New Delhi</option>
						
							<option value="New London, CT">New London, CT</option>
						
							<option value="New York">New York</option>
						
							<option value="Newcastle">Newcastle</option>
						
							<option value="Newton Abbot">Newton Abbot</option>
						
							<option value="Newtownabbey">Newtownabbey</option>
						
							<option value="Niamey">Niamey</option>
						
							<option value="Nice">Nice</option>
						
							<option value="Nicosia">Nicosia</option>
						
							<option value="Niigata">Niigata</option>
						
							<option value="Nijmegen">Nijmegen</option>
						
							<option value="Nimes">Nimes</option>
						
							<option value="Ningbo">Ningbo</option>
						
							<option value="Nis">Nis</option>
						
							<option value="Nishinomiya">Nishinomiya</option>
						
							<option value="Niteroi">Niteroi</option>
						
							<option value="Nizhny Novgorod">Nizhny Novgorod</option>
						
							<option value="Normandy">Normandy</option>
						
							<option value="North Island">North Island</option>
						
							<option value="North Ryde">North Ryde</option>
						
							<option value="Northampton, MA">Northampton, MA</option>
						
							<option value="Norton, MA">Norton, MA</option>
						
							<option value="Norwich">Norwich</option>
						
							<option value="Nottingham">Nottingham</option>
						
							<option value="Novgorod The Great">Novgorod The Great</option>
						
							<option value="Novosibirsk">Novosibirsk</option>
						
							<option value="Nuku Hiva">Nuku Hiva</option>
						
							<option value="Nungua">Nungua</option>
						
							<option value="Nyon">Nyon</option>
						
							<option value="Oahu, Hawaii">Oahu, Hawaii</option>
						
							<option value="Oaxaca">Oaxaca</option>
						
							<option value="Odense">Odense</option>
						
							<option value="Odessa">Odessa</option>
						
							<option value="Oestrich-winkel">Oestrich-winkel</option>
						
							<option value="Oita">Oita</option>
						
							<option value="Okoyama">Okoyama</option>
						
							<option value="Olomouc">Olomouc</option>
						
							<option value="Olympia">Olympia</option>
						
							<option value="Orbetello">Orbetello</option>
						
							<option value="Orebro">Orebro</option>
						
							<option value="Orellana">Orellana</option>
						
							<option value="Orleans">Orleans</option>
						
							<option value="Ormskirk">Ormskirk</option>
						
							<option value="Orsay">Orsay</option>
						
							<option value="Osaka">Osaka</option>
						
							<option value="Oslo">Oslo</option>
						
							<option value="Osnabrück">Osnabrück</option>
						
							<option value="Otago">Otago</option>
						
							<option value="Otavalo">Otavalo</option>
						
							<option value="Ottawa">Ottawa</option>
						
							<option value="Ouagadougou">Ouagadougou</option>
						
							<option value="Oulu">Oulu</option>
						
							<option value="Ouro Preto">Ouro Preto</option>
						
							<option value="Oviedo">Oviedo</option>
						
							<option value="Oxford">Oxford</option>
						
							<option value="Paderno del Grappa">Paderno del Grappa</option>
						
							<option value="Padova">Padova</option>
						
							<option value="Padua">Padua</option>
						
							<option value="Palma de Mallorca">Palma de Mallorca</option>
						
							<option value="Palmerston North">Palmerston North</option>
						
							<option value="Pamplona">Pamplona</option>
						
							<option value="Panamá">Panamá</option>
						
							<option value="Panama City">Panama City</option>
						
							<option value="Papeete, Tahiti">Papeete, Tahiti</option>
						
							<option value="Paphos">Paphos</option>
						
							<option value="Parana">Parana</option>
						
							<option value="Paranagua">Paranagua</option>
						
							<option value="Parati">Parati</option>
						
							<option value="Paris">Paris</option>
						
							<option value="Paros">Paros</option>
						
							<option value="Patagonia">Patagonia</option>
						
							<option value="Pau">Pau</option>
						
							<option value="Pavia">Pavia</option>
						
							<option value="Pearl River Delta">Pearl River Delta</option>
						
							<option value="Penang">Penang</option>
						
							<option value="Pergamum">Pergamum</option>
						
							<option value="Perpignan">Perpignan</option>
						
							<option value="Perth">Perth</option>
						
							<option value="Perugia">Perugia</option>
						
							<option value="Phang Nga">Phang Nga</option>
						
							<option value="Philadelphia">Philadelphia</option>
						
							<option value="Phnom Penh">Phnom Penh</option>
						
							<option value="Phuket">Phuket</option>
						
							<option value="Piacenza">Piacenza</option>
						
							<option value="Pichelemu">Pichelemu</option>
						
							<option value="Pietermaritzburg">Pietermaritzburg</option>
						
							<option value="Pingyao">Pingyao</option>
						
							<option value="Piracicaba">Piracicaba</option>
						
							<option value="Piraeus">Piraeus</option>
						
							<option value="Pisa">Pisa</option>
						
							<option value="Pistoia">Pistoia</option>
						
							<option value="Playa del Carmen">Playa del Carmen</option>
						
							<option value="Playa Tamarindo">Playa Tamarindo</option>
						
							<option value="Plymouth">Plymouth</option>
						
							<option value="Podgorica">Podgorica</option>
						
							<option value="Pohang">Pohang</option>
						
							<option value="Pointe a Pitre">Pointe a Pitre</option>
						
							<option value="Poitiers">Poitiers</option>
						
							<option value="Pokhara">Pokhara</option>
						
							<option value="Pompeii">Pompeii</option>
						
							<option value="Pondicherry">Pondicherry</option>
						
							<option value="Ponta Grossa">Ponta Grossa</option>
						
							<option value="Pontlevoy">Pontlevoy</option>
						
							<option value="Port Antonio">Port Antonio</option>
						
							<option value="Port Elizabeth">Port Elizabeth</option>
						
							<option value="Port Louis">Port Louis</option>
						
							<option value="Port Said">Port Said</option>
						
							<option value="Porto">Porto</option>
						
							<option value="Porto Alegre">Porto Alegre</option>
						
							<option value="Poughkeepsie, NY">Poughkeepsie, NY</option>
						
							<option value="Poznan">Poznan</option>
						
							<option value="Prague">Prague</option>
						
							<option value="Praia das Macas">Praia das Macas</option>
						
							<option value="Preston">Preston</option>
						
							<option value="Pretoria">Pretoria</option>
						
							<option value="Prien">Prien</option>
						
							<option value="Puebla City">Puebla City</option>
						
							<option value="Puerto Morelos">Puerto Morelos</option>
						
							<option value="Puerto Penasco">Puerto Penasco</option>
						
							<option value="Puerto Quetzal">Puerto Quetzal</option>
						
							<option value="Puerto San Carlos">Puerto San Carlos</option>
						
							<option value="Puerto Vallarta">Puerto Vallarta</option>
						
							<option value="Pune">Pune</option>
						
							<option value="Punta Gorda">Punta Gorda</option>
						
							<option value="Puntarenas">Puntarenas</option>
						
							<option value="Pusan">Pusan</option>
						
							<option value="Qingdao">Qingdao</option>
						
							<option value="Qinhuangdao">Qinhuangdao</option>
						
							<option value="Quebec">Quebec</option>
						
							<option value="Queensland">Queensland</option>
						
							<option value="Queenstown">Queenstown</option>
						
							<option value="Quepos">Quepos</option>
						
							<option value="Queretaro">Queretaro</option>
						
							<option value="Quetzaltenango">Quetzaltenango</option>
						
							<option value="Quezon City">Quezon City</option>
						
							<option value="Qufu">Qufu</option>
						
							<option value="Quito">Quito</option>
						
							<option value="Rabat">Rabat</option>
						
							<option value="Raiatea">Raiatea</option>
						
							<option value="Rajasthan">Rajasthan</option>
						
							<option value="Randers">Randers</option>
						
							<option value="Rarotonga">Rarotonga</option>
						
							<option value="Ras Al Khaimah">Ras Al Khaimah</option>
						
							<option value="Reading">Reading</option>
						
							<option value="Reap">Reap</option>
						
							<option value="Recife">Recife</option>
						
							<option value="Regensberg">Regensberg</option>
						
							<option value="Regensburg">Regensburg</option>
						
							<option value="Reggio Emilia">Reggio Emilia</option>
						
							<option value="Rennes">Rennes</option>
						
							<option value="Reutlingen">Reutlingen</option>
						
							<option value="Reykjavik">Reykjavik</option>
						
							<option value="Rhodes">Rhodes</option>
						
							<option value="Richards Bay">Richards Bay</option>
						
							<option value="Riga">Riga</option>
						
							<option value="Rio de Janeiro">Rio de Janeiro</option>
						
							<option value="Rio Grande">Rio Grande</option>
						
							<option value="Rio Piedras">Rio Piedras</option>
						
							<option value="Roatan Island">Roatan Island</option>
						
							<option value="Robina">Robina</option>
						
							<option value="Rockhampton">Rockhampton</option>
						
							<option value="Rome">Rome</option>
						
							<option value="Ronda">Ronda</option>
						
							<option value="Rosario">Rosario</option>
						
							<option value="Roskilde">Roskilde</option>
						
							<option value="Rotorua">Rotorua</option>
						
							<option value="Rotterdam">Rotterdam</option>
						
							<option value="Roubaix">Roubaix</option>
						
							<option value="Rouen">Rouen</option>
						
							<option value="Royan">Royan</option>
						
							<option value="Rwinkwavu">Rwinkwavu</option>
						
							<option value="Sabara">Sabara</option>
						
							<option value="Saint-Laurent-du-Var">Saint-Laurent-du-Var</option>
						
							<option value="Saint-Louis">Saint-Louis</option>
						
							<option value="Salamanca">Salamanca</option>
						
							<option value="Salaya">Salaya</option>
						
							<option value="Salta">Salta</option>
						
							<option value="Salvador">Salvador</option>
						
							<option value="Salvador da Bahia">Salvador da Bahia</option>
						
							<option value="Salzburg">Salzburg</option>
						
							<option value="Samana">Samana</option>
						
							<option value="Samara">Samara</option>
						
							<option value="Samraong">Samraong</option>
						
							<option value="San Carlos de Bariloche">San Carlos de Bariloche</option>
						
							<option value="San Cristobal">San Cristobal</option>
						
							<option value="San Diego. CA">San Diego. CA</option>
						
							<option value="San Francisco, CA">San Francisco, CA</option>
						
							<option value="San Ignacio">San Ignacio</option>
						
							<option value="San Joaquin">San Joaquin</option>
						
							<option value="San Jose">San Jose</option>
						
							<option value="San Juan">San Juan</option>
						
							<option value="San Luis Potosi">San Luis Potosi</option>
						
							<option value="San Luis Valley">San Luis Valley</option>
						
							<option value="San Miguel de Allende">San Miguel de Allende</option>
						
							<option value="San Miguel de Tucuman">San Miguel de Tucuman</option>
						
							<option value="San Pedro">San Pedro</option>
						
							<option value="San Pedro de Atacama">San Pedro de Atacama</option>
						
							<option value="San Ramon">San Ramon</option>
						
							<option value="San Salvador">San Salvador</option>
						
							<option value="San Sebastian">San Sebastian</option>
						
							<option value="Sanremo">Sanremo</option>
						
							<option value="Santa Ana">Santa Ana</option>
						
							<option value="Santa Cruz">Santa Cruz</option>
						
							<option value="Santander">Santander</option>
						
							<option value="Santarem">Santarem</option>
						
							<option value="Santiago">Santiago</option>
						
							<option value="Santiago de Compostela">Santiago de Compostela</option>
						
							<option value="Santiago de Cuba">Santiago de Cuba</option>
						
							<option value="Santo Domingo">Santo Domingo</option>
						
							<option value="Santorini">Santorini</option>
						
							<option value="Santos">Santos</option>
						
							<option value="Sao Paulo">Sao Paulo</option>
						
							<option value="São Paulo">São Paulo</option>
						
							<option value="Sapporo">Sapporo</option>
						
							<option value="Saskatoon">Saskatoon</option>
						
							<option value="Schoelcher">Schoelcher</option>
						
							<option value="Schwabish Hall">Schwabish Hall</option>
						
							<option value="Seam">Seam</option>
						
							<option value="Segovia">Segovia</option>
						
							<option value="Sendai">Sendai</option>
						
							<option value="Seoul">Seoul</option>
						
							<option value="Seta">Seta</option>
						
							<option value="Sevilla">Sevilla</option>
						
							<option value="Seville">Seville</option>
						
							<option value="Shandong">Shandong</option>
						
							<option value="Shanghai">Shanghai</option>
						
							<option value="Shantou">Shantou</option>
						
							<option value="Sharjah">Sharjah</option>
						
							<option value="Sharm El Sheikh">Sharm El Sheikh</option>
						
							<option value="Shatin">Shatin</option>
						
							<option value="Sheffield">Sheffield</option>
						
							<option value="Shenyang">Shenyang</option>
						
							<option value="Shenzhen">Shenzhen</option>
						
							<option value="Sherbrooke">Sherbrooke</option>
						
							<option value="Shijiazhuang">Shijiazhuang</option>
						
							<option value="Shilong">Shilong</option>
						
							<option value="Sichuan">Sichuan</option>
						
							<option value="Sicily">Sicily</option>
						
							<option value="Siem Reap">Siem Reap</option>
						
							<option value="Siena">Siena</option>
						
							<option value="Sinai">Sinai</option>
						
							<option value="Singapore">Singapore</option>
						
							<option value="Singburi">Singburi</option>
						
							<option value="Siphnos">Siphnos</option>
						
							<option value="Skopelos">Skopelos</option>
						
							<option value="Skopje">Skopje</option>
						
							<option value="Sonderborg">Sonderborg</option>
						
							<option value="Sophia Antipolis">Sophia Antipolis</option>
						
							<option value="Sorrento">Sorrento</option>
						
							<option value="Sosua">Sosua</option>
						
							<option value="Sosúa">Sosúa</option>
						
							<option value="South Caicos">South Caicos</option>
						
							<option value="South Hadley, MA">South Hadley, MA</option>
						
							<option value="Southampton">Southampton</option>
						
							<option value="Spiti">Spiti</option>
						
							<option value="St Petersburg">St Petersburg</option>
						
							<option value="St. Andrews">St. Andrews</option>
						
							<option value="St. Augustine">St. Augustine</option>
						
							<option value="St. Catherines">St. Catherines</option>
						
							<option value="St. Croix">St. Croix</option>
						
							<option value="St. Denis">St. Denis</option>
						
							<option value="St. Etienne">St. Etienne</option>
						
							<option value="St. George's">St. George's</option>
						
							<option value="St. Louis">St. Louis</option>
						
							<option value="St. Lucia">St. Lucia</option>
						
							<option value="St. Malo">St. Malo</option>
						
							<option value="St. Petersburg">St. Petersburg</option>
						
							<option value="Stafford">Stafford</option>
						
							<option value="Staffordshire">Staffordshire</option>
						
							<option value="Stellenbosch">Stellenbosch</option>
						
							<option value="Stirling">Stirling</option>
						
							<option value="Stockholm">Stockholm</option>
						
							<option value="Stolat">Stolat</option>
						
							<option value="Stone Town">Stone Town</option>
						
							<option value="Strasbourg">Strasbourg</option>
						
							<option value="Stratford-upon-Avon">Stratford-upon-Avon</option>
						
							<option value="Strobl">Strobl</option>
						
							<option value="Stuttgart">Stuttgart</option>
						
							<option value="Sucre">Sucre</option>
						
							<option value="Sudbury">Sudbury</option>
						
							<option value="Sunderland">Sunderland</option>
						
							<option value="Sunshine Coast">Sunshine Coast</option>
						
							<option value="Suva">Suva</option>
						
							<option value="Suwon">Suwon</option>
						
							<option value="Suzhou">Suzhou</option>
						
							<option value="Swansea">Swansea</option>
						
							<option value="Swaziland">Swaziland</option>
						
							<option value="Sydney">Sydney</option>
						
							<option value="Syracuse">Syracuse</option>
						
							<option value="Tacloban City">Tacloban City</option>
						
							<option value="Taegu">Taegu</option>
						
							<option value="Tahiti">Tahiti</option>
						
							<option value="Taichung">Taichung</option>
						
							<option value="Taipei">Taipei</option>
						
							<option value="Takoradi">Takoradi</option>
						
							<option value="Tallinn">Tallinn</option>
						
							<option value="Talloires">Talloires</option>
						
							<option value="Tamil Nadu">Tamil Nadu</option>
						
							<option value="Tampere">Tampere</option>
						
							<option value="Tangier">Tangier</option>
						
							<option value="Tangshan">Tangshan</option>
						
							<option value="Taormina">Taormina</option>
						
							<option value="Taoyuan">Taoyuan</option>
						
							<option value="Taradale">Taradale</option>
						
							<option value="Tarragona">Tarragona</option>
						
							<option value="Tartu">Tartu</option>
						
							<option value="Tasmania">Tasmania</option>
						
							<option value="Tauranga">Tauranga</option>
						
							<option value="Taxco">Taxco</option>
						
							<option value="Tbilisi">Tbilisi</option>
						
							<option value="Tel Aviv">Tel Aviv</option>
						
							<option value="Tell es-Sweyhat">Tell es-Sweyhat</option>
						
							<option value="Temuco">Temuco</option>
						
							<option value="Tena">Tena</option>
						
							<option value="Tenerife">Tenerife</option>
						
							<option value="Tetouan">Tetouan</option>
						
							<option value="Thanjavur">Thanjavur</option>
						
							<option value="The Hague">The Hague</option>
						
							<option value="Thessaloniki">Thessaloniki</option>
						
							<option value="Thimphu">Thimphu</option>
						
							<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						
							<option value="Thy">Thy</option>
						
							<option value="Tianjin">Tianjin</option>
						
							<option value="Tiburon Island">Tiburon Island</option>
						
							<option value="Tilburg">Tilburg</option>
						
							<option value="Tjele">Tjele</option>
						
							<option value="Togo">Togo</option>
						
							<option value="Tokyo">Tokyo</option>
						
							<option value="Toledo">Toledo</option>
						
							<option value="Toluca">Toluca</option>
						
							<option value="Tonnerre">Tonnerre</option>
						
							<option value="Toowoomba">Toowoomba</option>
						
							<option value="Tordesillas">Tordesillas</option>
						
							<option value="Toronto">Toronto</option>
						
							<option value="Tortuguero">Tortuguero</option>
						
							<option value="Totnes">Totnes</option>
						
							<option value="Toulouse">Toulouse</option>
						
							<option value="Tours">Tours</option>
						
							<option value="Townsville">Townsville</option>
						
							<option value="Toyama">Toyama</option>
						
							<option value="Trang">Trang</option>
						
							<option value="Trentino">Trentino</option>
						
							<option value="Trento">Trento</option>
						
							<option value="Trier">Trier</option>
						
							<option value="Trieste">Trieste</option>
						
							<option value="Trivandrum">Trivandrum</option>
						
							<option value="Troia">Troia</option>
						
							<option value="Trollhättan">Trollhättan</option>
						
							<option value="Troy">Troy</option>
						
							<option value="Troyes">Troyes</option>
						
							<option value="Tsinghua">Tsinghua</option>
						
							<option value="Tsukuba">Tsukuba</option>
						
							<option value="Tubingen">Tubingen</option>
						
							<option value="Tulum">Tulum</option>
						
							<option value="Tunis">Tunis</option>
						
							<option value="Turin">Turin</option>
						
							<option value="Turku">Turku</option>
						
							<option value="Turrialba">Turrialba</option>
						
							<option value="Tuscania">Tuscania</option>
						
							<option value="Tuscany">Tuscany</option>
						
							<option value="Tygerberg">Tygerberg</option>
						
							<option value="Ubud">Ubud</option>
						
							<option value="Ulaanbaatar">Ulaanbaatar</option>
						
							<option value="Ulm">Ulm</option>
						
							<option value="Uluru">Uluru</option>
						
							<option value="Uppsala">Uppsala</option>
						
							<option value="Urbino">Urbino</option>
						
							<option value="Urubamba">Urubamba</option>
						
							<option value="Ushuaia">Ushuaia</option>
						
							<option value="Utrecht">Utrecht</option>
						
							<option value="Vaasa">Vaasa</option>
						
							<option value="Vaduz">Vaduz</option>
						
							<option value="Valdivia">Valdivia</option>
						
							<option value="Valencia">Valencia</option>
						
							<option value="Valladolid">Valladolid</option>
						
							<option value="Vallendar">Vallendar</option>
						
							<option value="Valparaiso">Valparaiso</option>
						
							<option value="Vancouver">Vancouver</option>
						
							<option value="Varadero">Varadero</option>
						
							<option value="Varanasi">Varanasi</option>
						
							<option value="Various">Various</option>
						
							<option value="Various Cities">Various Cities</option>
						
							<option value="Various Locations">Various Locations</option>
						
							<option value="Varna">Varna</option>
						
							<option value="Vasteras">Vasteras</option>
						
							<option value="Vaxjo">Vaxjo</option>
						
							<option value="Veliko Tarnovo">Veliko Tarnovo</option>
						
							<option value="Venice">Venice</option>
						
							<option value="Vernon">Vernon</option>
						
							<option value="Verona">Verona</option>
						
							<option value="Versailles">Versailles</option>
						
							<option value="Vestfold">Vestfold</option>
						
							<option value="Vezelay">Vezelay</option>
						
							<option value="Vic">Vic</option>
						
							<option value="Vicenza">Vicenza</option>
						
							<option value="Vichy">Vichy</option>
						
							<option value="Viçosa">Viçosa</option>
						
							<option value="Victoria">Victoria</option>
						
							<option value="Vienna">Vienna</option>
						
							<option value="Vigo">Vigo</option>
						
							<option value="Ville Franche">Ville Franche</option>
						
							<option value="Vilnius">Vilnius</option>
						
							<option value="Vina del Mar">Vina del Mar</option>
						
							<option value="Viterbo">Viterbo</option>
						
							<option value="Vitora">Vitora</option>
						
							<option value="Vitoria">Vitoria</option>
						
							<option value="Vladimir">Vladimir</option>
						
							<option value="Vladivostok">Vladivostok</option>
						
							<option value="Volos">Volos</option>
						
							<option value="Vung Tau">Vung Tau</option>
						
							<option value="Wageningen">Wageningen</option>
						
							<option value="Wagga Wagga">Wagga Wagga</option>
						
							<option value="Waikato">Waikato</option>
						
							<option value="Walvis Bay">Walvis Bay</option>
						
							<option value="Warrnambool">Warrnambool</option>
						
							<option value="Warsaw">Warsaw</option>
						
							<option value="Washington DC">Washington DC</option>
						
							<option value="Waterford">Waterford</option>
						
							<option value="Waterford, CT">Waterford, CT</option>
						
							<option value="Weimar">Weimar</option>
						
							<option value="Wellesley, MA">Wellesley, MA</option>
						
							<option value="Wellington">Wellington</option>
						
							<option value="Wenzhou">Wenzhou</option>
						
							<option value="Westport">Westport</option>
						
							<option value="Whitby">Whitby</option>
						
							<option value="Whitehorse">Whitehorse</option>
						
							<option value="Wiener Neustadt">Wiener Neustadt</option>
						
							<option value="Windhoek">Windhoek</option>
						
							<option value="Wolin">Wolin</option>
						
							<option value="Wollongong">Wollongong</option>
						
							<option value="Wolverhampton">Wolverhampton</option>
						
							<option value="Woods Hole MA">Woods Hole MA</option>
						
							<option value="Worthing">Worthing</option>
						
							<option value="Wroclaw">Wroclaw</option>
						
							<option value="Wroxton">Wroxton</option>
						
							<option value="Wuhan">Wuhan</option>
						
							<option value="Xalapa">Xalapa</option>
						
							<option value="Xi'an">Xi'an</option>
						
							<option value="Xiamen">Xiamen</option>
						
							<option value="Xingang">Xingang</option>
						
							<option value="Yallahs">Yallahs</option>
						
							<option value="Yamato-machi">Yamato-machi</option>
						
							<option value="Yangon">Yangon</option>
						
							<option value="Yangshuo">Yangshuo</option>
						
							<option value="Yantai">Yantai</option>
						
							<option value="Yaounde">Yaounde</option>
						
							<option value="Yaroslavl">Yaroslavl</option>
						
							<option value="Yiwu">Yiwu</option>
						
							<option value="Yokohama">Yokohama</option>
						
							<option value="York">York</option>
						
							<option value="Zagreb">Zagreb</option>
						
							<option value="Zamorano">Zamorano</option>
						
							<option value="Zanskar">Zanskar</option>
						
							<option value="Zanzibar">Zanzibar</option>
						
							<option value="Zentsuji">Zentsuji</option>
						
							<option value="Zhangjiang">Zhangjiang</option>
						
							<option value="Zhangzhou">Zhangzhou</option>
						
							<option value="Zhongdian">Zhongdian</option>
						
							<option value="Zurich">Zurich</option>
						
					</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group inlineform" >
							<label for="selProgCntry" class="config-form-label control-label">Country</label>
							<div class="config-form-element">
								<select name="pc" id="selProgCntry" multiple="multiple" class="form-control">
									<option value="" selected="selected">Any</option>
									
										<option value="Argentina">Argentina</option>
									
										<option value="Atlantic Ocean">Atlantic Ocean</option>
									
										<option value="Australia">Australia</option>
									
										<option value="Austria">Austria</option>
									
										<option value="Bahamas">Bahamas</option>
									
										<option value="Bangladesh">Bangladesh</option>
									
										<option value="Belgium">Belgium</option>
									
										<option value="Belize">Belize</option>
									
										<option value="Bermuda">Bermuda</option>
									
										<option value="Bhutan">Bhutan</option>
									
										<option value="Bolivia">Bolivia</option>
									
										<option value="Botswana">Botswana</option>
									
										<option value="Brazil">Brazil</option>
									
										<option value="Bulgaria">Bulgaria</option>
									
										<option value="Burkina Faso">Burkina Faso</option>
									
										<option value="Cambodia">Cambodia</option>
									
										<option value="Cameroon">Cameroon</option>
									
										<option value="Canada">Canada</option>
									
										<option value="Cayman Islands">Cayman Islands</option>
									
										<option value="Chile">Chile</option>
									
										<option value="China">China</option>
									
										<option value="Colombia">Colombia</option>
									
										<option value="Cook Islands">Cook Islands</option>
									
										<option value="Costa Rica">Costa Rica</option>
									
										<option value="Croatia">Croatia</option>
									
										<option value="Croatia, Republic of">Croatia, Republic of</option>
									
										<option value="Cuba">Cuba</option>
									
										<option value="Cyprus">Cyprus</option>
									
										<option value="Czech Republic">Czech Republic</option>
									
										<option value="Denmark">Denmark</option>
									
										<option value="Dominican Republic">Dominican Republic</option>
									
										<option value="Ecuador">Ecuador</option>
									
										<option value="Egypt">Egypt</option>
									
										<option value="El Salvador">El Salvador</option>
									
										<option value="Equatorial Guinea">Equatorial Guinea</option>
									
										<option value="Estonia">Estonia</option>
									
										<option value="Ethiopia">Ethiopia</option>
									
										<option value="Fiji">Fiji</option>
									
										<option value="Finland">Finland</option>
									
										<option value="France">France</option>
									
										<option value="French Guiana">French Guiana</option>
									
										<option value="French Polynesia">French Polynesia</option>
									
										<option value="Georgia">Georgia</option>
									
										<option value="Germany">Germany</option>
									
										<option value="Ghana">Ghana</option>
									
										<option value="Greece">Greece</option>
									
										<option value="Grenada">Grenada</option>
									
										<option value="Guadeloupe">Guadeloupe</option>
									
										<option value="Guatemala">Guatemala</option>
									
										<option value="Honduras">Honduras</option>
									
										<option value="Hong Kong">Hong Kong</option>
									
										<option value="Hungary">Hungary</option>
									
										<option value="Iceland">Iceland</option>
									
										<option value="India">India</option>
									
										<option value="Indonesia">Indonesia</option>
									
										<option value="Ireland">Ireland</option>
									
										<option value="Israel">Israel</option>
									
										<option value="Italy">Italy</option>
									
										<option value="Jamaica">Jamaica</option>
									
										<option value="Japan">Japan</option>
									
										<option value="Jordan">Jordan</option>
									
										<option value="Kenya">Kenya</option>
									
										<option value="Kenya Coast Republic">Kenya Coast Republic</option>
									
										<option value="Korea, South">Korea, South</option>
									
										<option value="Kyrgyzstan">Kyrgyzstan</option>
									
										<option value="Laos">Laos</option>
									
										<option value="Latvia">Latvia</option>
									
										<option value="Lebanon">Lebanon</option>
									
										<option value="Liberia">Liberia</option>
									
										<option value="Liechtenstein">Liechtenstein</option>
									
										<option value="Lithuania">Lithuania</option>
									
										<option value="Luxembourg">Luxembourg</option>
									
										<option value="Macedonia">Macedonia</option>
									
										<option value="Madagascar">Madagascar</option>
									
										<option value="Malaysia">Malaysia</option>
									
										<option value="Mali">Mali</option>
									
										<option value="Malta">Malta</option>
									
										<option value="Martinique">Martinique</option>
									
										<option value="Mauritius">Mauritius</option>
									
										<option value="Mexico">Mexico</option>
									
										<option value="Moldova">Moldova</option>
									
										<option value="Mongolia">Mongolia</option>
									
										<option value="Montenegro">Montenegro</option>
									
										<option value="Montserrat">Montserrat</option>
									
										<option value="Morocco">Morocco</option>
									
										<option value="Multiple">Multiple</option>
									
										<option value="Myanmar">Myanmar</option>
									
										<option value="Namibia">Namibia</option>
									
										<option value="Nepal">Nepal</option>
									
										<option value="Netherlands">Netherlands</option>
									
										<option value="Netherlands Antilles">Netherlands Antilles</option>
									
										<option value="New Zealand">New Zealand</option>
									
										<option value="Nicaragua">Nicaragua</option>
									
										<option value="Niger">Niger</option>
									
										<option value="Norway">Norway</option>
									
										<option value="Oman">Oman</option>
									
										<option value="Panama">Panama</option>
									
										<option value="Paraguay">Paraguay</option>
									
										<option value="Peru">Peru</option>
									
										<option value="Philippines">Philippines</option>
									
										<option value="Poland">Poland</option>
									
										<option value="Portugal">Portugal</option>
									
										<option value="Puerto Rico">Puerto Rico</option>
									
										<option value="Qatar">Qatar</option>
									
										<option value="Russia">Russia</option>
									
										<option value="Russian Federation">Russian Federation</option>
									
										<option value="Rwanda">Rwanda</option>
									
										<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									
										<option value="Samoa">Samoa</option>
									
										<option value="Senegal">Senegal</option>
									
										<option value="Serbia">Serbia</option>
									
										<option value="Seychelles">Seychelles</option>
									
										<option value="Singapore">Singapore</option>
									
										<option value="Slovakia">Slovakia</option>
									
										<option value="Slovenia">Slovenia</option>
									
										<option value="South Africa">South Africa</option>
									
										<option value="South Korea">South Korea</option>
									
										<option value="Spain">Spain</option>
									
										<option value="Sri Lanka">Sri Lanka</option>
									
										<option value="Sweden">Sweden</option>
									
										<option value="Switzerland">Switzerland</option>
									
										<option value="Syria">Syria</option>
									
										<option value="Taiwan">Taiwan</option>
									
										<option value="Tanzania">Tanzania</option>
									
										<option value="Thailand">Thailand</option>
									
										<option value="Tibet">Tibet</option>
									
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									
										<option value="Tunisia">Tunisia</option>
									
										<option value="Turkey">Turkey</option>
									
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									
										<option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
									
										<option value="Uganda">Uganda</option>
									
										<option value="Ukraine">Ukraine</option>
									
										<option value="United Arab Emirates">United Arab Emirates</option>
									
										<option value="United Kingdom">United Kingdom</option>
									
										<option value="United States">United States</option>
									
										<option value="Uruguay">Uruguay</option>
									
										<option value="Various">Various</option>
									
										<option value="Venezuela">Venezuela</option>
									
										<option value="Vietnam">Vietnam</option>
									
										<option value="Zambia">Zambia</option>
									
										<option value="Zimbabwe">Zimbabwe</option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group inlineform">
							<label for="selProgRegion" class="config-form-label control-label">Region</label>
							<div class="config-form-element">
								<select name="pr" id="selProgRegion" multiple="multiple" class="form-control">
									<option value="" selected="selected">Any</option>
									
										<option value="Africa">Africa</option>
									
										<option value="Asia">Asia</option>
									
										<option value="At Sea">At Sea</option>
									
										<option value="Australia/Pacific Islands">Australia/Pacific Islands</option>
									
										<option value="Caribbean">Caribbean</option>
									
										<option value="Central America">Central America</option>
									
										<option value="Europe">Europe</option>
									
										<option value="Latin America">Latin America</option>
									
										<option value="Middle East">Middle East</option>
									
										<option value="Multiple">Multiple</option>
									
										<option value="North America">North America</option>
									
										<option value="South America">South America</option>
									
										<option value="Various">Various</option>
									
										<option value="West Indies">West Indies</option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6" style="height:260px">
						<div class="form-group inlineform">
							<label for="selProgTerm" class="config-form-label control-label">Term</label>
							<div class="config-form-element">
								<select name="pt" id="selProgTerm" multiple="multiple" class="form-control">
									<option value="" selected="selected">Any</option>
									
										<option value="Academic Year">Academic Year</option>
									
										<option value="Calendar Year">Calendar Year</option>
									
										<option value="Fall">Fall</option>
									
										<option value="J-Term">J-Term</option>
									
										<option value="Jan Term">Jan Term</option>
									
										<option value="Janterm">Janterm</option>
									
										<option value="May Term">May Term</option>
									
										<option value="Semester">Semester</option>
									
										<option value="Spring">Spring</option>
									
										<option value="Summer">Summer</option>
									
										<option value="Summer I">Summer I</option>
									
										<option value="Summer II">Summer II</option>
									
										<option value="Summer III">Summer III</option>
									
										<option value="Summer IV">Summer IV</option>
									
										<option value="Trimester">Trimester</option>
									
										<option value="Winter">Winter</option>
									
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						
					</div>
				</div> 
			
		</div>  
	</div>

		<div class="panel panel-primary">
			<div class="" style="font-size:15pt;color:white;background-color:burlywood;padding:10px" >
				Parameters:
			</div>
			<div class="panel-body">
				<div class="row">
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group">
								
									<label for="selProg1" class="config-form-label control-label">
										Language of Instruction:
									</label>
								
								<div class="config-form-element">
									
											<select id="selProg1" name="p_10000" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="American Sign Language">American Sign Language</option>
												
													<option value="Arabic">Arabic</option>
												
													<option value="Catalan">Catalan</option>
												
													<option value="Chinese">Chinese</option>
												
													<option value="Czech">Czech</option>
												
													<option value="English">English</option>
												
													<option value="Farsi">Farsi</option>
												
													<option value="French">French</option>
												
													<option value="German">German</option>
												
													<option value="Greek">Greek</option>
												
													<option value="Hebrew">Hebrew</option>
												
													<option value="Hindi">Hindi</option>
												
													<option value="Hungarian">Hungarian</option>
												
													<option value="Italian">Italian</option>
												
													<option value="Italian Sign Language (LIS)">Italian Sign Language (LIS)</option>
												
													<option value="Japanese">Japanese</option>
												
													<option value="Khmer">Khmer</option>
												
													<option value="Korean">Korean</option>
												
													<option value="Mandarin">Mandarin</option>
												
													<option value="Other">Other</option>
												
													<option value="Polish">Polish</option>
												
													<option value="Portuguese">Portuguese</option>
												
													<option value="Russian">Russian</option>
												
													<option value="Serbo-Croatian">Serbo-Croatian</option>
												
													<option value="Spanish">Spanish</option>
												
													<option value="Swahili">Swahili</option>
												
													<option value="Tagalog">Tagalog</option>
												
													<option value="Tagalog">Tagalog</option>
												
													<option value="Thai">Thai</option>
												
													<option value="Turkish">Turkish</option>
												
													<option value="Ukrainian">Ukrainian</option>
												
													<option value="Vietnamese">Vietnamese</option>
												
											</select>
										
									<input type="hidden" name="p_10000_t" value="MULTI"/>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-12">
							<div class="form-group">
								
								<div class="config-form-element">
									
											<label for="selProg13">Language Prerequisite:</label>
										
											<br/>
											
													<select id="selProg13" name="p_10005"  class="formelement200" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
													
														<option value="1 term college-level French">1 term college-level French</option>
													
														<option value="1 term college-level Italian">1 term college-level Italian</option>
													
														<option value="1 term college-level Spanish">1 term college-level Spanish</option>
													
														<option value="1 term college-level Spanish; max 2 terms">1 term college-level Spanish; max 2 terms</option>
													
														<option value="1+ term college-level German">1+ term college-level German</option>
													
														<option value="1+ term college-level Japanese">1+ term college-level Japanese</option>
													
														<option value="1-2 terms college-level Mandarin">1-2 terms college-level Mandarin</option>
													
														<option value="1-3 sem/2-5 qtr college-level German">1-3 sem/2-5 qtr college-level German</option>
													
														<option value="2 sem/3 qtr college-level German">2 sem/3 qtr college-level German</option>
													
														<option value="2 sem/3 qtr college-level Mandarin">2 sem/3 qtr college-level Mandarin</option>
													
														<option value="4+ sem/ 6+ qtr college-level Mandarin">4+ sem/ 6+ qtr college-level Mandarin</option>
													
														<option value="4+ sem/6+ qtr college-level French">4+ sem/6+ qtr college-level French</option>
													
														<option value="4+ sem/6+ qtr college-level German">4+ sem/6+ qtr college-level German</option>
													
														<option value="4+ sem/6+ qtr college-level Italian">4+ sem/6+ qtr college-level Italian</option>
													
														<option value="4+ sem/6+ qtr college-level Spanish">4+ sem/6+ qtr college-level Spanish</option>
													
														<option value="4+ sem/6+ qtr college-level Spanish with B average">4+ sem/6+ qtr college-level Spanish with B average</option>
													
														<option value="Near native fluency in Mandarin">Near native fluency in Mandarin</option>
													
														<option value="None">None</option>
													
													</select>

										
									<input type="hidden" name="p_10000_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group">
								
									<label for="selProg32" class="config-form-label control-label">
										Class Status:
									</label>
								
								<div class="config-form-element">
									
											<select id="selProg32" name="p_10001" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="1-first year">1-first year</option>
												
													<option value="2-sophomore">2-sophomore</option>
												
													<option value="3-junior">3-junior</option>
												
													<option value="4-senior">4-senior</option>
												
													<option value="5-grad student">5-grad student</option>
												
													<option value="6-other">6-other</option>
												
											</select>
										
									<input type="hidden" name="p_10001_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group">
								
									<label for="selProg38" class="config-form-label control-label">Housing Options:</label>
								
								<div class="config-form-element">
									
											<select id="selProg38" name="p_10002" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="Apartment (alone)">Apartment (alone)</option>
												
													<option value="Apartment (shared)">Apartment (shared)</option>
												
													<option value="Cabin on ship">Cabin on ship</option>
												
													<option value="Dormitory">Dormitory</option>
												
													<option value="Guest House">Guest House</option>
												
													<option value="Homestay">Homestay</option>
												
													<option value="Hostel/Hotel">Hostel/Hotel</option>
												
													<option value="Other">Other</option>
												
													<option value="Student responsibility">Student responsibility</option>
												
											</select>
										
									<input type="hidden" name="p_10002_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group">
								
									<label for="selProg51" class="config-form-label control-label">
										Areas of Study:
									</label>
								
								<div class="config-form-element">
									
											<select id="selProg51" name="p_10003" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="Aboriginal Studies">Aboriginal Studies</option>
												
													<option value="Accessories Design">Accessories Design</option>
												
													<option value="Accounting">Accounting</option>
												
													<option value="Acting/Performance Art">Acting/Performance Art</option>
												
													<option value="Advertising">Advertising</option>
												
													<option value="African Studies">African Studies</option>
												
													<option value="Agriculture">Agriculture</option>
												
													<option value="American Studies">American Studies</option>
												
													<option value="Anthropology">Anthropology</option>
												
													<option value="Arabic">Arabic</option>
												
													<option value="Arabic Language & Literature">Arabic Language & Literature</option>
												
													<option value="Archaeology">Archaeology</option>
												
													<option value="Architectural History">Architectural History</option>
												
													<option value="Architecture">Architecture</option>
												
													<option value="Art">Art</option>
												
													<option value="Art History">Art History</option>
												
													<option value="Arts">Arts</option>
												
													<option value="Asian Studies">Asian Studies</option>
												
													<option value="Astronomy">Astronomy</option>
												
													<option value="Biochemistry">Biochemistry</option>
												
													<option value="Biology">Biology</option>
												
													<option value="Botany">Botany</option>
												
													<option value="Business">Business</option>
												
													<option value="Business Design">Business Design</option>
												
													<option value="Business Information Systems">Business Information Systems</option>
												
													<option value="Caribbean Studies">Caribbean Studies</option>
												
													<option value="Catalan Language & Literature">Catalan Language & Literature</option>
												
													<option value="Celtic/Irish Studies">Celtic/Irish Studies</option>
												
													<option value="Central Asian Studies">Central Asian Studies</option>
												
													<option value="Chemistry">Chemistry</option>
												
													<option value="Child Development">Child Development</option>
												
													<option value="Chinese">Chinese</option>
												
													<option value="Classical Studies">Classical Studies</option>
												
													<option value="Communication">Communication</option>
												
													<option value="Communication Design">Communication Design</option>
												
													<option value="Communications">Communications</option>
												
													<option value="Computer Science">Computer Science</option>
												
													<option value="Creative Writing">Creative Writing</option>
												
													<option value="Criminology">Criminology</option>
												
													<option value="Culinary Arts">Culinary Arts</option>
												
													<option value="Culture">Culture</option>
												
													<option value="Culture,">Culture,</option>
												
													<option value="Czech Language & Literature">Czech Language & Literature</option>
												
													<option value="Dance">Dance</option>
												
													<option value="Design">Design</option>
												
													<option value="Developmental Sciences">Developmental Sciences</option>
												
													<option value="Dietetics & Nutrition">Dietetics & Nutrition</option>
												
													<option value="Earth Science">Earth Science</option>
												
													<option value="Eastern European Studies">Eastern European Studies</option>
												
													<option value="Ecology">Ecology</option>
												
													<option value="Economics">Economics</option>
												
													<option value="Education">Education</option>
												
													<option value="Educational Administration">Educational Administration</option>
												
													<option value="Engineering">Engineering</option>
												
													<option value="English">English</option>
												
													<option value="Enology">Enology</option>
												
													<option value="Entrepreneurship">Entrepreneurship</option>
												
													<option value="Environmental Studies">Environmental Studies</option>
												
													<option value="European Studies">European Studies</option>
												
													<option value="Fashion Design">Fashion Design</option>
												
													<option value="Fashion Merchandising">Fashion Merchandising</option>
												
													<option value="Film">Film</option>
												
													<option value="Finance">Finance</option>
												
													<option value="Fine Art">Fine Art</option>
												
													<option value="Food Communications">Food Communications</option>
												
													<option value="Food Technology and Management">Food Technology and Management</option>
												
													<option value="Foresty">Foresty</option>
												
													<option value="French">French</option>
												
													<option value="Gastronomy">Gastronomy</option>
												
													<option value="Gender Studies">Gender Studies</option>
												
													<option value="Geography">Geography</option>
												
													<option value="Geology">Geology</option>
												
													<option value="German">German</option>
												
													<option value="Government">Government</option>
												
													<option value="Graphic Design">Graphic Design</option>
												
													<option value="Greek">Greek</option>
												
													<option value="Hausa">Hausa</option>
												
													<option value="Health & Human Services">Health & Human Services</option>
												
													<option value="Health Science">Health Science</option>
												
													<option value="Hebrew">Hebrew</option>
												
													<option value="Hindi">Hindi</option>
												
													<option value="History">History</option>
												
													<option value="Hospitality Management">Hospitality Management</option>
												
													<option value="Human Resources Management">Human Resources Management</option>
												
													<option value="Human Rights">Human Rights</option>
												
													<option value="Humanities">Humanities</option>
												
													<option value="Hungarian Language & Literature">Hungarian Language & Literature</option>
												
													<option value="Iberian Studies">Iberian Studies</option>
												
													<option value="Independent Study">Independent Study</option>
												
													<option value="Information Design">Information Design</option>
												
													<option value="Interdisciplinary Design">Interdisciplinary Design</option>
												
													<option value="Interior Architecture">Interior Architecture</option>
												
													<option value="Interior Design">Interior Design</option>
												
													<option value="International Business">International Business</option>
												
													<option value="International Relations">International Relations</option>
												
													<option value="International Studies">International Studies</option>
												
													<option value="Internships">Internships</option>
												
													<option value="Italian">Italian</option>
												
													<option value="Italian Language & Literature">Italian Language & Literature</option>
												
													<option value="Japanese">Japanese</option>
												
													<option value="Jewish Studies">Jewish Studies</option>
												
													<option value="Journalism">Journalism</option>
												
													<option value="Kinesiology">Kinesiology</option>
												
													<option value="Korean">Korean</option>
												
													<option value="Latin">Latin</option>
												
													<option value="Latin American Studies">Latin American Studies</option>
												
													<option value="Law">Law</option>
												
													<option value="Liberal Arts">Liberal Arts</option>
												
													<option value="Linguistics">Linguistics</option>
												
													<option value="Literature">Literature</option>
												
													<option value="Management">Management</option>
												
													<option value="Mandarin">Mandarin</option>
												
													<option value="Maori Studies">Maori Studies</option>
												
													<option value="Marine Science">Marine Science</option>
												
													<option value="Marketing">Marketing</option>
												
													<option value="Mass Communications">Mass Communications</option>
												
													<option value="Math/Statistics">Math/Statistics</option>
												
													<option value="Mathematics & Statistics">Mathematics & Statistics</option>
												
													<option value="Media Studies">Media Studies</option>
												
													<option value="Middle Eastern Studies">Middle Eastern Studies</option>
												
													<option value="Minority Studies">Minority Studies</option>
												
													<option value="Molecular Biology">Molecular Biology</option>
												
													<option value="Music">Music</option>
												
													<option value="Music Studio Art">Music Studio Art</option>
												
													<option value="Neuroscience">Neuroscience</option>
												
													<option value="Nigerian Studies">Nigerian Studies</option>
												
													<option value="Other Language & Literature">Other Language & Literature</option>
												
													<option value="Peace & Conflict Studies">Peace & Conflict Studies</option>
												
													<option value="Peace Studies">Peace Studies</option>
												
													<option value="Philosophy">Philosophy</option>
												
													<option value="Photography">Photography</option>
												
													<option value="Physical Therapy/Rehabilitation">Physical Therapy/Rehabilitation</option>
												
													<option value="Physics">Physics</option>
												
													<option value="Polish Language & Literature">Polish Language & Literature</option>
												
													<option value="Political Science">Political Science</option>
												
													<option value="Politics">Politics</option>
												
													<option value="Portuguese">Portuguese</option>
												
													<option value="Pre-Health">Pre-Health</option>
												
													<option value="Pre-Law">Pre-Law</option>
												
													<option value="Print Making">Print Making</option>
												
													<option value="Product Design">Product Design</option>
												
													<option value="Psychology">Psychology</option>
												
													<option value="Public Health">Public Health</option>
												
													<option value="Public Relations">Public Relations</option>
												
													<option value="Religion/Theology">Religion/Theology</option>
												
													<option value="Russian">Russian</option>
												
													<option value="Russian Literature">Russian Literature</option>
												
													<option value="Russian Studies">Russian Studies</option>
												
													<option value="Sciences">Sciences</option>
												
													<option value="Serbo-Croatian">Serbo-Croatian</option>
												
													<option value="Service Learning">Service Learning</option>
												
													<option value="Shoe Design">Shoe Design</option>
												
													<option value="Siberian Studies">Siberian Studies</option>
												
													<option value="Social Policy & Administration">Social Policy & Administration</option>
												
													<option value="Social Work">Social Work</option>
												
													<option value="Sociology">Sociology</option>
												
													<option value="Spanish">Spanish</option>
												
													<option value="Sports">Sports</option>
												
													<option value="Sports Science">Sports Science</option>
												
													<option value="Studio Art">Studio Art</option>
												
													<option value="Studio Arts">Studio Arts</option>
												
													<option value="Tagalog">Tagalog</option>
												
													<option value="Textile Design">Textile Design</option>
												
													<option value="Thai">Thai</option>
												
													<option value="Theater/Drama">Theater/Drama</option>
												
													<option value="Tibetan">Tibetan</option>
												
													<option value="Tourism">Tourism</option>
												
													<option value="Ukrainian">Ukrainian</option>
												
													<option value="Ukrainian Language & Culture">Ukrainian Language & Culture</option>
												
													<option value="Urban Design">Urban Design</option>
												
													<option value="Urban Studies">Urban Studies</option>
												
													<option value="Vietnamese Language & Culture">Vietnamese Language & Culture</option>
												
													<option value="Women\'s Studies">Women's Studies</option>
												
													<option value="Womens Studies">Womens Studies</option>
												
													<option value="Writing">Writing</option>
												
													<option value="Zarma">Zarma</option>
												
													<option value="Zoology">Zoology</option>
												
											</select>
										
									<input type="hidden" name="p_10003_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group ">
								
									<label for="selProg250" class="config-form-label control-label">Program Type:</label>
								
								<div class="config-form-element">
									
											<select id="selProg250" name="p_10004" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="field study">field study</option>
												
													<option value="internship abroad">internship abroad</option>
												
													<option value="study abroad">study abroad</option>
												
													<option value="volunteer abroad">volunteer abroad</option>
												
													<option value="work abroad">work abroad</option>
												
											</select>
										
									<input type="hidden" name="p_10004_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group ">
								
									<label for="selProg255" class="config-form-label control-label">Minimum GPA:</label>
								
								<div class="config-form-element">
									
											<select id="selProg255" name="p_10005" class="form-control" ><option value="" selected="selected">Any</option>
												
													<option value="2">2</option>
												
													<option value="2.25">2.25</option>
												
													<option value="2.3">2.3</option>
												
													<option value="2.5">2.5</option>
												
													<option value="2.6">2.6</option>
												
													<option value="2.7">2.7</option>
												
													<option value="2.75">2.75</option>
												
													<option value="2.8">2.8</option>
												
													<option value="2.9">2.9</option>
												
													<option value="3">3</option>
												
													<option value="3.1">3.1</option>
												
													<option value="3.2">3.2</option>
												
													<option value="3.25">3.25</option>
												
													<option value="3.3">3.3</option>
												
													<option value="3.4">3.4</option>
												
													<option value="3.5">3.5</option>
												
													<option value="3.6">3.6</option>
												
													<option value="3.7">3.7</option>
												
													<option value="3.75">3.75</option>
												
													<option value="3.8">3.8</option>
												
													<option value="3.9">3.9</option>
												
													<option value="4.0">4.0</option>
												
											</select>
										
									<input type="hidden" name="p_10005_t" value="MINIM"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group ">
								
									<label for="selProg275" class="config-form-label control-label">Language GPA:</label>
								
								<div class="config-form-element">
									
											<select id="selProg275" name="p_10006" class="form-control" ><option value="" selected="selected">Any</option>
												
													<option value="2">2</option>
												
													<option value="2.5">2.5</option>
												
													<option value="2.75">2.75</option>
												
													<option value="3">3</option>
												
													<option value="3.5">3.5</option>
												
													<option value="3.75">3.75</option>
												
											</select>
										
									<input type="hidden" name="p_10006_t" value="MINIM"/>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12 col-md-12">
							<div class="form-group ">
								
									<label for="selProg280" class="config-form-label control-label">
										Program:
									</label>
								
								<div class="config-form-element">
									
											<select id="selProg280" name="p_10007" class="form-control" multiple="multiple" size="4"><option value="" selected="selected">Any</option>
												
													<option value="Direct">Direct</option>
												
													<option value="Exchange">Exchange</option>
												
											</select>
										
									<input type="hidden" name="p_10007_t" value="MULTI"/>
								</div>
							</div>
						</div>
					
				</div>
			</div>
		</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">
			Sort Options:
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for=" sortResult" class="config-form-label control-label">Sort Results By:</label>
				<div class="config-form-element">
					<label class="radio-inline" for="rdoProgName">
						<input type="radio" name="Sort" value="Program_Name" id="rdoProgName" checked="checked" class="bot-cellspacing"/>Program Name
					</label>
					
						<label class="radio-inline" for="rdoProgCity">
							<input type="radio" name="Sort" value="Program_City" id="rdoProgCity" class="bot-cellspacing"/>City
						</label>
						<label class="radio-inline" for="rdoCountry">
							<input type="radio" name="Sort" value="Program_Country" id="rdoCountry" class="bot-cellspacing"/>Country
						</label>
						<label class="radio-inline" for="rdoRegion">
							<input type="radio" name="Sort" value="Program_Region" id="rdoRegion" class="bot-cellspacing"/>	Region
						</label>
					
				</div>
			</div>
			<div class="form-group">
				<label for="order" class="config-form-label control-label">Order:</label>
				<div class="config-form-element">
					<label class="radio-inline" for="rdoOrder1">
						<input type="radio" id="rdoOrder1" name="Order" value="asc" checked="checked" class="bot-cellspacing"/>Ascending
					</label>
					<label class="radio-inline" for="rdoOrder2">
						<input type="radio" id="rdoOrder2" name="Order" value="desc" class="bot-cellspacing"/>Descending
					</label>
				</div>
			</div>
		</div>
		<div class="panel-footer text-center">
			<input type="image" name="submit2" src="/images/btn_search.jpg" alt="Search" title="Search" value="submit2" style="width:90px;height: 20px"/>
			&nbsp;&nbsp;<a href="/.." title="Cancel" onclick=""><img style="width:90px;height: 20px" src="/images/btn_cancel.jpg" /></a>
		</div>
	</div>

</div>
	<input type="hidden" name="pp" value="10000,10001,10002,10003,10004,10005,10006,10007" />
</form>
     <script>
if(window.performance.navigation)
{
    searchForm.reset();
}
</script>
			  
   <style>
	   .form-group{padding:10px; }
	   .inlineform{float:left; margin: 0px 25px 0px 25px;}

table { border: 1pt solid #000; border-collapse: collapse; }

table td { border-left: 1px solid #000; }

table td:first-child { border-left: none; }

table td {padding:5px;}

	table th { border-bottom:2pt solid #000;}
	
	a:visited{color:#cc0b2a}
	a:hover{color:darkmagenta}
	
	.panel-heading{font-size:15pt;color:white;background-color:burlywood;padding:10px}

			  #maincontainer_bottom{min-height:1500px;}
	   
</style>      
          

<?php

}

?>

   













