<?php
    /**
     * Defines an array for the users.
     * Each value of the array is an array itself with each user's data.
     * Typically this would be loaded from a database.
     */
echo $_GET['country'];
 if($_SERVER['QUERY_STRING']==''){
	/***** List all variables here *****/
	
    /* General */
    $countryName = "your program";
    $nationality1 = "";
    $nationality2 = "";
   
    $countryPrimaryLanguage = "";
    $countrySecondaryLanguage = "other";
    $countryIndigenousLanguage = "";
   
    $countryCurrency = "";
   
    $quote = "";	

    /* Why Study Abroad */
    $whyStudyAbroadDescription = array(
        array("paragraph" => "The events of September 11th, 2001, highlighted the importance of international safety issues. This has increased the need for a U.S. citizenry capable of understanding and working with people from all over the world. Even in this time of added caution and uncertainty, study abroad remains a beneficial and safe way to enhance a student&#39;s academic program and promote self-growth. According to U.S. Secretary of Education, Rod Paige:"),
        array("paragraph" => "Study abroad is one way that U.S. college and university students are best introduced to the cultures and citizens of the rest of the world. By spending a year, semester, or shorter time abroad, U.S. students learn about the language, culture, and philosophy of others. Study abroad affords students the opportunity to be ambassadors; they can set an example, help break down stereotypes and prejudice, and learn while living with others. However, the personal growth available through study abroad comes with personal challenges."),
        array("paragraph" => "One challenge for the study abroad student is a lack of consistent policies and procedures in place by study abroad program providers. According to Gary Rhodes, Ph.D., Director of the Center for Global Education:"),
        array("paragraph" => "Parents and participants must be prepared for both the best and worst case scenarios that could happen abroad. When you were deciding what U.S. university or college to attend, you and your parents carefully considered the pros and cons of the academic programs and student services each institution could provide. Take the same time and effort in selecting your study abroad program. To better insure your health and safety abroad, try to evaluate every aspect of the program you choose.")
    );
   
    /* Why Learn a Language */
    $whyLearnLanguageDescription = array(
        array("paragraph" => "While abroad, you can't always rely on English as a back up to communicate. During your time abroad, you will probably use and practice another language every day; you will interact with native speakers at every turn. Even a simple task like going to the market becomes a learning experience. You pick up subtleties, authentic accents and pronunciation, jokes, stories, and local phrases you never would have learned in a language class in the United States. Most of the time, you find you are learning new things without even trying; simply being surrounded by another language day and night helps you absorb more than you think."),
        array("paragraph" => "Another advantage of total immersion is that you not only become immersed in another language, but in a new culture as well. Initial language learning opens up more opportunities to explore the literature, music, art, dance, sports, etc… of other countries."),
        array("paragraph" => "Total immersion also makes you more marketable in the job world, even on an international level. After learning another language, you have an advantage-an extra edge-above other job candidates. You have broadened your communication skills beyond just the English-speaking world. Your non-English language abilities are a major asset, and companies know it."),
        array("paragraph" => "Aside from the job world, you may also use your language class credits earned abroad to add a major or minor back at your U.S. home campus. You could also tutor or mentor other students who need assistance with the language you have learned."),
        array("paragraph" => "Each program has its own specific language level requirements. Usually, you can tell how intensive a program's course of study will be based upon its required level of language proficiency. Language requirements range from no prior language instruction, to a highest language level of nearly bilingual. You may want to check and see what prior level of language your program requires, so that you can start/continue learning another language abroad."),
        array("paragraph" => "Aside from learning a country&#39;s official language, most countries also offer opportunities to learn other indigenous languages and/or different dialects prevalent abroad. You may want to check to see if your study abroad program offers language instruction in such non-traditional or non-standard minority languages and dialects. The study of such languages will be beneficial for those interested in anthropology, linguistics, and national security, among other professions."),
        array("paragraph" => "In short, learning another language while abroad can help you to create global awareness, promote international security, enhance your academic learning, develop leadership skills, advance your career, and experience personal growth.")
    );
   
    /* Advice for Parents */
    $adviceForParentsDescription = array(
        array("paragraph" => "The content on this website is divided up into four sections: Choosing a Program, Practical Information, Health &amp; Safety and Coming Home.  We suggest that you read through the <a href=\"introduction.php\">Study Abroad Handbook</a> content, and then make sure your son or daughter has answered the <a href=\"#\">Questions</a> and responded to the items in the <a href=\"#\">Checklist</a>.  Many of the items will require feedback from a study abroad program provider, although the <a href=\"#\">Resources</a> section will help you as well. Make sure to have a copy of the <a href=\"#\">Emergency Card</a> that your son or daughter also should carry in his/her wallet."),                                     
        array("paragraph" => "If your son or daughter already knows where he/she will be studying or wants to study in, we recommend that they take a look at our Country-Specific Handbooks which have information geared for their individual host country. If that country's handbook is not available, it is most likely still in development. In this case, he/she can use this general study abroad handbook."),   
        array("paragraph" => "After your son or daughter has thoroughly reviewed the Handbook independently, and done some research, we encourage you to follow-up with his/her findings.  At this time, we ideally hope that you would sit down with your son or daughter and go through the Handbook with him/her.  You may be able to help him/her answer any questions he/she was not able to answer on his/her own."),   
        array("paragraph" => "One of the first things parents and students should do before traveling
anywhere is to check with the U.S. Department of State's <a href=\"http://travel.state.gov/travel/cis_pa_tw/cis_pa_tw_1168.html\">International
Travel Information</a> website. There you will find links to <a href=\"http://travel.state.gov/travel/cis_pa_tw/cis/cis_1765.html\">Consular
Information Sheets</a> and <a href=\"http://www.state.gov/r/pa/ei/bgn/\">Country Background Notes</a>, which provide important information about your child's host country. For some countries, there may be a travel warning in effect, so be sure to check the Department of State's current <a href=\"http://travel.state.gov/travel/cis_pa_tw/tw/tw_1764.html\">Travel Warnings</a> as well. Travel warnings are issued when the Department of
State decides, based on all relevant information to recommend that Americans avoid travel to a certain country.&nbsp; If you want to have a more
comprehensive view of the situation in your child's host country, you may also want to cross-reference with other sources of information, such as the <a href=\"http://www.dfat.gov.au/\">Australian Department of Foreign Affairs and Trade</a> and their <a href=\"http://www.dfat.gov.au/geo/\">Country
Information</a> page, the <a href=\"http://www.dfait-maeci.gc.ca/\">Canadian Department of Foreign Affairs and Trade</a>, and the <a href=\"http://www.fco.gov.uk/\">U.K. Foreign Commonwealth Office</a>."),   
        array("paragraph" => "We understand that your child&#39;s health and safety is important to you. We also know that your concerns for your child&#39;s health and safety increase with distance; the further away your child travels from home, the more important it is for him/her to have support services. In this time of an increased national focus on safety and security, you may feel strongly concerned about your child&#39;s wishes to study and travel abroad. We hope that by reading this Handbook your concerns will be addressed. You will be able to better assist your son or daughter with choosing a quality program, and with being prepared for health and safety challenges abroad. Study abroad could possibly be one of the best, most positive and rewarding experiences for your child.")   
    );
   
   	/* Finding a Quality Program */
    $highlightedOpportunityDescription = array(
        array("paragraph" => "")
	);
	
	/* Selecting the Right Program for You */
	$LevelsofImmersionA = "Ask yourself whether or not you prefer sitting next to a local or another U.S. student in your classes. The answer to this question will help you determine whether or not you would like to be in classes with only other U.S. students and other international students, a mix of locals and U.S. students, or a class where the majority of the students are locals. Most programs offer courses where a student can be fully immersed in the local education system by attending class with regular students at a university/institution. Other programs separate students by designing special courses for program participants. Many programs have international students from around the world, especially in language classes. Inquire as to which classes you are able to take as part of your program. Also, ask whether or not your teachers will be from the United States or your destination country, if this matters to you.";
	
	$LevelsofImmersionB = "Don't let not knowing the language hold you back from studying wherever you want! Ask if your program offers your language of interest for all levels, including beginner level instruction. If not, you may be able to take some classes in English. However, you may have the language skills to take all of your classes in your program country&#39;s language. One thing to keep in mind is, the more classes you take in the language, the more your language skills will improve and the more immersed you will feel in the country&#39;s culture and society. Ask if your program provides classes in your target language, English or both.";
	
	
    /* Links to Remember */
    $introduction = array(
        array("title" => "U.S. Department of State: Consular Information Sheet", "URL" => "http://travel.state.gov/"),
        array("title" => "Embassies Abroad", "URL" => "http://www.embassiesabroad.com/")
    );
   
    $whyStudyAbroad= array(
        array("title" => "Study Abroad.com", "URL" => "http://www.studyabroaddirectory.com/study-articles.cfm/"),
        array("title" => "IIE: Open Doors", "URL" => "http://opendoors.iienetwork.org/?p=49941/")
    );
   
    $whyLearnLanguage = array(
        array("title" => "ULS: Learning a Language", "URL" => "http://www.sunderland.ac.uk/~os0tmc/uls/why.htm/"),
        array("title" => "Language Learning Tools", "URL" => "http://www.rosettastone.com/")
    );   
   
    $adviceForParents = array(
        array("title" => "Advice for Parents: Frequently Asked Questions", "URL" => "http://globaled.us/safeti/v2n12001ed_advice_for_parents_faqs.asp")
    );
	
	$findingQualityProgram = array(
		array("title" => "Peterson&#39;s Study Abroad", "URL" => "http://www.petersons.com/stdyabrd/us.asp?sponsor=1&path=ug.fas.go"),
		array("title" => "Study Abroad.com", "URL" => "http://www.studyabroad.com/"),
		array("title" => "GoAbroad: Study Abroad Programs", "URL" => "http://www.studyabroaddirectory.com/search.cfm"),
		array("title" => "IIE Passport: Study Abroad Programs", "URL" => "http://www.iiepassport.org/")
	);
	
	$selectTheRightProgram = array(
		array("title" => "Language Learning Tools", "URL" => "http://www.rosettastone.com/")
	);
	
	$whoRunsYourProgram = array(
		array("title" => "IFSA-Butler", "URL" => "http://www.studentsabroad.com/whorunsyourprog.asp"),
		array("title" => "Inter-organizational Task Force Guidelines", "URL" => "http://www.nafsa.org/knowledgecommunity/default.aspx"),
		array("title" => "Sara&#39;s Wish", "URL" => "http://www.saraswish.org/guidelines_evaluating_a_study_abroad_program.htm")	
	);
	
	$financingStudyAbroadProgram = array(
		array("title" => "Free Application for Federal Student Aid ", "URL" => "http://www.fafsa.ed.gov/"),
		array("title" => "UOP&#39;s Cross-cultural Training Student Guide: Financial Issues ", "URL" => "http://www.globaled.us/safeti/151studentguide.html"),
				array("title" => "International Travel and Study Abroad Scholarships", "URL" => "http://www.studyabroad.com/scholarships.aspx"),
		array("title" => "Currency Converter", "URL" => "http://www.lib.msu.edu/harris23/grants/3inttrav.htm#websites")
	);
	
	$applicationProcess = array(
		array("title" => "EssayEdge.com", "URL" => "http://www.essayedge.com/"),
		array("title" => "Translation", "URL" => "http://babelfish.altavista.com/"),
		array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/"),
		array("title" => "United States Post Office", "URL" => "http://ircalc.usps.gov/")
	);   
    
    /* Word to Know */
    $wordsToKnow = array(
        array("english" => "Airport", "translation" => "_________"),
        array("english" => "ATM", "translation" => "_________"),
        array("english" => "Bank", "translation" => "_________"),
        array("english" => "Consulate", "translation" => "_________"),
        array("english" => "Embassy", "translation" => "_________"),
        array("english" => "Emergency Room", "translation" => "_________"),
        array("english" => "Fire" , "translation" => "_________"),
        array("english" => "Food", "translation" => "_________"),
        array("english" => "Hospital", "translation" => "_________"),
        array("english" => "Hotel", "translation" => "_________"),
        array("english" => "Internet", "translation" => "_________"),
		array("english" => "Lawyer", "translation" => "_________"),
		array("english" => "Market", "translation" => "_________"),
		array("english" => "Metro", "translation" => "_________"),
		array("english" => "Money", "translation" => "_________"),
		array("english" => "Pharmacy", "translation" => "_________"),
		array("english" => "Police Station", "translation" => "_________"),
		array("english" => "Restaurant" , "translation" => "_________"),
		array("english" => "Store", "translation" => "_________"),
		array("english" => "Suitcase", "translation" => "_________"),			
		array("english" => "Telephone", "translation" => "_________"),
		array("english" => "Train", "translation" => "_________"),
		array("english" => "Translation", "translation" => "_________"),
		array("english" => "University", "translation" => "_________"),
		array("english" => "Ambulance", "translation" => "_________"),
		array("english" => "Baggage Claim", "translation" => "_________"),
		array("english" => "Bathroom", "translation" => "_________"),
		array("english" => "Computer", "translation" => "_________"),
		array("english" => "Doctor", "translation" => "_________"),
		array("english" => "Emergency", "translation" => "_________"),
		array("english" => "Exchange Rate", "translation" => "_________"),
		array("english" => "Fire Station", "translation" => "_________"),
		array("english" => "Help", "translation" => "_________"),
		array("english" => "Hostel" , "translation" => "_________"),
		array("english" => "Insurance", "translation" => "_________"),
		array("english" => "Law", "translation" => "_________"),
		array("english" => "Luggage", "translation" => "_________"),
		array("english" => "Medicine", "translation" => "_________"),
		array("english" => "Metro Station", "translation" => "_________"),
		array("english" => "Nurse", "translation" => "_________"),
		array("english" => "Police", "translation" => "_________"),
		array("english" => "Post Office", "translation" => "_________"),
		array("english" => "Station", "translation" => "_________"),
		array("english" => "Street" , "translation" => "_________"),
		array("english" => "Taxi", "translation" => "_________"),
		array("english" => "Thief", "translation" => "_________"),
		array("english" => "Train Station", "translation" => "_________"),
		array("english" => "Translator", "translation" => "_________"),
		array("english" => "Water", "translation" => "_________")
    );	

	$phrasesToKnow = array (
		array("category" => "Arrests",
			  "phrases" => array(	array("english" => "I am an United States citizen.", "translation" => "___________"),
									array("english" => "Please call the United States Embassy/Consulate immediately.", "translation" => "___________")									
								)
		),
		
		array("category" => "Money", 
			  "phrases" => array(	array("english" => "Do you take traveler's checks?", "translation" => "___________"),
									array("english" => "Do you take credit cards?", "translation" => "___________"),
									array("english" => "Where can I exchange money?", "translation" => "___________"),
									array("english" => "Where is the closest ATM?", "translation" => "___________"),
									array("english" => "I need a cash advance from my credit card.", "translation" => "___________"),
									array("english" => "What is the exchange rate for (dollars) to (local currency)?", "translation" => "___________"),
									array("english" => "How much does this cost?", "translation" => "___________"),
									array("english" => "Where is the closest bank?", "translation" => "___________"),
								)
		),		
		array("category" => "Transportation",
			  "phrases" => array(	array("english" => "How long is the trip?", "translation" => "___________"),
									array("english" => "How much is the ticket?", "translation" => "___________"),
									array("english" => "Can you take me to a (bus,taxi,train,metro)?", "translation" => "___________"),
									array("english" => "Please take me to the airport.", "translation" => "___________"),
									array("english" => "Does this bus/metro stop at...?", "translation" => "___________"),
									array("english" => "Are there student rates?", "translation" => "___________"),
									array("english" => "Where can I get a (bus, taxi, train, metro)?", "translation" => "___________"),
									array("english" => "Where can I rent a car?", "translation" => "___________"),
									array("english" => "What is the fare?", "translation" => "___________") 		  
								)
		)		
	);

	/* Resources */
	$resources_arts = array (
		array("category" => "",
			  "item" => array(	
							  array("title" => "", "URL" => "", "description" => "")
							)
			)
	);
	
	$resources_background = array (
		array("category" => "",
			  "item" => array(	
							  array("title" => "", "URL" => "", "description" => "")
							)
			)
	);
	
	$resources_consulate = array (
		array("category" => "Consulates and Embassies",
			  "item" => array(	
							  array("title" => "Goabroad.com Embassy Search", "URL" => "http://www.goabroad.com/embassy/", "description" => "Database full of contact information for embassies worldwide, including U.S. embassies in all countries as well as foreign embassies in the U.S. This site also has information on a host of other topics ranging from calling cards to eco-adventures."),
							  array("title" => "Embassies and Consulates Worldwide", "URL" => "http://usembassy.state.gov/", "description" => "Links to U.S. Embassies and Consulates worldwide.
")
							)
			)
	);	
	
	$resources_government = array (
		array("category" => "",
			  "item" => array(	
							  array("title" => "", "URL" => "", "description" => "")
							)
			)
	);
	
	$resources_medical = array (
		array("category" => "",
			  "item" => array(	
							  array("title" => "", "URL" => "", "description" => "")
							)
			)
	);
	
	$resources_travel = array (
		array("category" => "",
			  "item" => array(	
							  array("title" => "", "URL" => "", "description" => "")
							)
			)
	);
	
	/* end of Resources */	
	
	/* Help Images */
	$helpIcons = array(
        array("english" => "Emergency", "translation" => "_________"),
        array("english" => "Fire", "translation" => "_________"),
        array("english" => "Taxi", "translation" => "_________"),
        array("english" => "Police", "translation" => "_________"),
        array("english" => "Ambulance", "translation" => "_________"),
        array("english" => "Hospital", "translation" => "_________"),
		array("english" => "Computer", "translation" => "_________"),
        array("english" => "Post Office", "translation" => "_________"),   
        array("english" => "Bank", "translation" => "_________"),   
        array("english" => "Telephone", "translation" => "_________"),
        array("english" => "Bathroom", "translation" => "_________"),
		array("english" => "Water", "translation" => "_________"),   
        array("english" => "Hotel", "translation" => "_________"),   
        array("english" => "Airport", "translation" => "_________"),
        array("english" => "Metro", "translation" => "_________")   
    );	
}
elseif (strtolower($_GET["country"]) == strtolower("Austria")) {
    /* General */
    $countryName = "Austria";
    $nationality1 = "Austrian";
    $nationality2 = "an Austrian";
   
    $countryPrimaryLanguage = "German";
    $countrySecondaryLanguage = "other";
    $countryIndigenousLanguage = "";
   
    $countryCurrency = "Euro";
   
    $quote = "";
   
    /* Why Study Abroad */
    $whyStudyAbroadDescription = array(
        array("paragraph" => "Once a major world power under the Hapsburg empire, Austria retains much of the glory and culture of its earlier days. Majestic mountain ranges frame pastoral scenes, where country dwellers still maintain many of the same traditions and ways of life as their predecessors. In the cities, particularly Salzburg and Vienna, modern sophistication meets a rich history of music, literature, philosophy and art. Situated as it is at the heart of the European continent, sharing its borders with no fewer than 8 other countries, Austria has seen much and has much to offer."),
        array("paragraph" => "Perhaps most well known for being the birthplace of Mozart, Austria has become synonymous with musical and artistic excellence. Along with Mozart, Austria was home to Haydn, Schubert, Johann Strauss II, and Brahms to name a few, and to this day is considered a premier place to study for music students. Furthermore, artists and architects like Gustav Klimt, Otto Wagner and Liane Zimbler have left a major impression on Austria and the world with their contributions. Students interested in music history, composition or performance, art, architecture, art history, and civil engineering will likely find Austria to be enlightening."),
        array("paragraph" => "In addition, Austria has given birth to great thinkers. The father of modern psychology, Sigmund Freud, as well as highly influential philosopher Ludwig Wittgenstein and author Franz Kafka were proud Austrians and leaders in their respective fields. Still a focal point of European culture, Austria is an ideal location for anyone interested in challenging their worldview and asking the deeper questions."),
        array("paragraph" => "Besides the attraction of its past accomplishments, Austria has much to offer the modern student. Located in the center of Europe, it is necessarily at the crossroads of much of Europe&#39;s business and political transactions. Austria is a member of the EU and hence has trading relations with many other members, most notably with its largest trading partner, Germany. Furthermore, as a historic junction for the trade of goods, ideas and cultures, Austria is ideally situated for political study and training."),
        array("paragraph" => "In addition to its academic appeal, Austria is a beautiful and lush (though somewhat cold!) country, with an astounding 48% of it covered in woodland. Students interested in exploring Alpine country, challenging or inviting ski slopes, hiking trails, winding rivers &ndash; including Europe&#39;s longest, the Danube &ndash; verdant rolling hills or beautiful lakes will find Austria to be a mecca of outdoor activity. Furthermore, each province maintains its own unique flavor and culture, and provides ample avenues of exploration for students interested in expanding their world knowledge.")
    );
   
    /* Why Learn a Language */
    $whyLearnLanguageDescription = array(
        array("paragraph" => "Worldwide, approximately 120 million people speak German. In all of Europe, more people speak German than any other language. This fact makes German the most widely spoken native language in Europe. European nations in which German is spoken include: Germany, Switzerland, Austria, Luxembourg and Liechtenstein. German remains the mother tongue of people in parts of Belgium, France and the north of Italy as well. German is commonly spoken as a second language all over Eastern Europe and is considered the language of business, diplomacy, and tourism in Eastern Europe; it is second only to English in Western Europe. The language is also spoken outside of Europe in various parts of South America, for example."),
        array("paragraph" => "For employment reasons, the advantages of being bilingual in English and German are obvious. Not only do you gain access to Austria&#39;s market, but also Germany&#39;s economic status as one of the three biggest world economies, along with the United States and China, make learning German even more important. In fact, German is a key language of the EU and all of Europe. If you are interested in international relations or business with the European Union, a command of German proves to be essential for global and business communication."),
        array("paragraph" => "German language skills afford study abroad students the right to access not only Austria&#39;s rich job market, but also the country&#39;s equally rich literary, philosophic, musical and scientific traditions. Imagine being able to listen to Mozart&#39;s or Wagner&#39;s operas or read the works of greats like Wittgenstein, Freud, and Kafka in their native language of German."),
        array("paragraph" => "There are also benefits to learning German if you plan to travel. German can help you greatly all over Europe and Asia. If you needed to take just one language with you during your travels, German might just be an ideal tongue. As many Europeans who don&#39;t speak German as a first language choose to learn it for a second language, you may find it easier to communicate in German than attempting to learn phrases in all the languages represented by Europe. Beyond Europe, many students choose to learn German. For example, 68% of all Japanese students learn German. On your next trip to Japan, you may be able to rely on German rather than Japanese!"),
        array("paragraph" => "Yet another reason to learn German proves to be its similarity to the English language. German and English are part of the same language family. Therefore, many German words look and sound like English ones. In fact, when the founders of the United States were deciding on an official language, German was a very close runner-up to English. German was a very popular language and was widely taught in the United States until World War I. During the war, German was banned in 26 states, but was reinstated in the classroom again after WWI. One in every four Americans claims German heritage; therefore, learning German could help you explore your own family tree!")
    );
   
    /* Advice for Parents */
    $adviceForParentsDescription = array(
        array("paragraph" => "The content on this website is divided up into four sections: Choosing a Program, Practical Information, Health &amp; Safety and Coming Home.  We suggest that you read through the <a href=\"introduction.php\">Study Abroad Handbook</a> content, and then make sure your son or daughter has answered the <a href=\"#\">Questions</a> and responded to the items in the <a href=\"#\">Checklist</a>.  Many of the items will require feedback from a study abroad program provider, although the <a href=\"#\">Resources</a> section will help you as well. Make sure to have a copy of the <a href=\"#\">Emergency Card</a> that your son or daughter also should carry in his/her wallet."),                                     
        array("paragraph" => "If your son or daughter already knows where he/she will be studying or wants to study in, we recommend that they take a look at our Country-Specific Handbooks which have information geared for their individual host country. If that country's handbook is not available, it is most likely still in development. In this case, he/she can use this general study abroad handbook."),   
        array("paragraph" => "After your son or daughter has thoroughly reviewed the Handbook independently, and done some research, we encourage you to follow-up with his/her findings.  At this time, we ideally hope that you would sit down with your son or daughter and go through the Handbook with him/her.  You may be able to help him/her answer any questions he/she was not able to answer on his/her own."),   
        array("paragraph" => "We understand that your child&#39;s health and safety is important to you. We also know that your concerns for your child&#39;s health and safety increase with distance; the further away your child travels from home, the more important it is for him/her to have support services. In this time of an increased national focus on safety and security, you may feel strongly concerned about your child&#39;s wishes to study and travel abroad. We hope that by reading this Handbook your concerns will be addressed. You will be able to better assist your son or daughter with choosing a quality program, and with being prepared for health and safety challenges abroad. Study abroad could possibly be one of the best, most positive and rewarding experiences for your child.")   
    );
    
	/* Finding a Quality Program */
    $highlightedOpportunityDescription = array(
        array("paragraph" => "You have a variety of programs to choose from in Austria; they include: language academies, traditional universities, cultural tours and archeological/ruins investigations.")
	);
	
	/* Selecting the Right Program for You */
	$LevelsofImmersionA = "Ask yourself whether or not you prefer sitting next to an Austrian or another U.S. student in your classes. The answer to this question will help you determine whether or not you would like to be in classes with only other U.S. students, a mix of Austrian and U.S. students, or a class where the majority of the students are Austrian. Although usually not at the beginning German level, some programs offer courses where a student can be fully immersed in the Austrian education system by attending class with regular students at a university/institution. Other programs separate students by designing special courses for program participants. Inquire as to which classes you are able to take as part of your program. Also ask whether or not your teachers will be from the United States or Austria, if this matters to you.";
	$LevelsofImmersionB = "Even if you have minimal or no prior German language experience, you can still find a program to suit your personal needs. Ask if your program offers German for all levels, including beginner level instruction. If not, you may be able to take some classes in English. However, you may prefer to take all of your classes in German&ndash;after all, it is the official language of Austria. The more classes you take in German, the more your German will improve and the more immersed you will feel in Austrian culture and society. Ask if your program provides classes in German, English or both.";
	
    /* Links to Remember */
    $introduction = array(
        array("title" => "About Austria", "URL" => "http://en.wikipedia.org/wiki/Austria/"),
        array("title" => "Political Resources on the Net: Austria", "URL" => "http://www.politicalresources.net/austria.htm/"),
        array("title" => "U.S. Department of State: Consular Information Sheet", "URL" => "http://travel.state.gov/travel/cis_pa_tw/cis/cis_965.html"),
        array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/")
    );
   
    $whyStudyAbroad = array(
        array("title" => "The World Factbook: Austria", "URL" => "https://www.cia.gov/library/publications/the-world-factbook/index.html/"),
        array("title" => "Statistik Austria", "URL" => "http://www.statistik.at/index_englisch.shtml/"),
        array("title" => "Austria Country Profile", "URL" => "http://news.bbc.co.uk/2/hi/europe/country_profiles/1032215.stm"),
        array("title" => "Library of Congress--Austria", "URL" => "http://lcweb2.loc.gov/frd/cs/attoc.html/")
    );   
   
    $whyLearnLanguage= array(
        array("title" => "English-German Online Translation", "URL" => "http://babelfish.yahoo.com/"),
        array("title" => "German for Travellers", "URL" => "http://www.germanfortravellers.com/"),
        array("title" => "International Job Opportunities", "URL" => "http://www.rileyguide.com/internat.html")
    );   
   
    $adviceForParents = array(
        array("title" => "Advice for Parents: Frequently Asked Questions", "URL" => "http://globaled.us/safeti/v2n12001ed_advice_for_parents_faqs.asp")
    );
   
   $findingQualityProgram = array(		
        array("title" => "Study Abroad.com: Austria", "URL" => "http://www.studyabroad.com/programs/europe,austria/default.aspx"),
        array("title" => "GoAbroad: Study Abroad in Austria", "URL" => "http://www.goabroad.com/study-abroad/search/austria/study-abroad-1"),
        array("title" => "IIE Passport: Programs in Austria", "URL" => "http://www.iiepassport.org/searchlistings.aspx?cat1=Europe%2cAustria")
	);
   
   $selectTheRightProgram = array(
		array("title" => "German for Travellers", "URL" => "http://www.germanfortravellers.com/")
	);
   
   $whoRunsYourProgram = array(
		array("title" => "Worldwide Colleges and Universities: Austria", "URL" => "http://www.globaled.us/wwcu/country.asp?region=Austria"),
		array("title" => "IES Abroad: Austria", "URL" => "https://www.iesabroad.org/IES/Programs/Austria/austria.html")					
	);
   
   	$financingStudyAbroadProgram = array(
		array("title" => "Free Application for Federal Student Aid", "URL" => "http://www.fafsa.ed.gov/"),
		array("title" => "GlobalEd.us Resources for Studying Abroad: Money", "URL" => "http://globaled.us/rfsa/money.html#"),
				array("title" => "Scholarships for Study Abroad	Study Abroad Scholarships", "URL" => "http://www.studyabroad.com/scholarships.aspx"),
		array("title" => "Currency Converter", "URL" => "http://www.oanda.com/convert/classic")
	);
	
	$applicationProcess = array(
		array("title" => "English-German Online Translation", "URL" => "http://babelfish.yahoo.com/"),
		array("title" => "EssayEdge.com", "URL" => "http://www.essayedge.com/"),
		array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm"),
		array("title" => "USPS International Calculator", "URL" => "http://ircalc.usps.gov/")
	);
	
	/* Word to Know */
    $wordsToKnow = array(
        array("english" => "Airport", "translation" => "der Flughafen"),
        array("english" => "ATM", "translation" => "der Geldautomat"),
        array("english" => "Bank", "translation" => "der Bus"),
        array("english" => "Consulate", "translation" => "das Konsulat"),
        array("english" => "Embassy", "translation" => "die Boschaft"),
        array("english" => "Emergency Room", "translation" => "die Notaufnah"),
        array("english" => "Fire" , "translation" => "das Feuer"),
        array("english" => "Food", "translation" => "das Essen"),
        array("english" => "Hospital", "translation" => "das Krankenhaus"),
        array("english" => "Hotel", "translation" => "das Hotel"),
        array("english" => "Internet", "translation" => "das Internet"),
		array("english" => "Lawyer", "translation" => "der Anwalt"),
		array("english" => "Market", "translation" => "die Markt"),
		array("english" => "Metro", "translation" => "die U-bahn"),
		array("english" => "Money", "translation" => "das Geld"),
		array("english" => "Pharmacy", "translation" => "Police Station"),
		array("english" => "Police Station", "translation" => "die Polizeidiestselle"),
		array("english" => "Restaurant" , "translation" => "das Restaurant"),
		array("english" => "Store", "translation" => "das Geschaft"),
		array("english" => "Suitcase", "translation" => "der Koffer"),			
		array("english" => "Telephone", "translation" => "das Telefon"),
		array("english" => "Train", "translation" => "der Zug"),
		array("english" => "Translation", "translation" => "die Ubersetzung"),
		array("english" => "University", "translation" => "die Universitat"),
		array("english" => "Ambulance", "translation" => "die Ambulanz / der Sanitatswagen"),
		array("english" => "Baggage Claim", "translation" => "die Gepackausgabe"),
		array("english" => "Bathroom", "translation" => "das Klo / das WC"),
		array("english" => "Computer", "translation" => "der Computer"),
		array("english" => "Doctor", "translation" => "der Arzt"),
		array("english" => "Emergency", "translation" => "der Notfall"),
		array("english" => "Exchange Rate", "translation" => "der Wechselk"),
		array("english" => "Fire Station", "translation" => "die Feuerwehr"),
		array("english" => "Help", "translation" => "die Hilfe, Hilfe!"),
		array("english" => "Hostel" , "translation" => "die Jugendherberge"),
		array("english" => "Insurance", "translation" => "die Versicherung"),
		array("english" => "Law", "translation" => "das Gesetz"),
		array("english" => "Luggage", "translation" => "das Gepack"),
		array("english" => "Medicine", "translation" => "das Medikame"),
		array("english" => "Metro Station", "translation" => "die U-bahnstation"),
		array("english" => "Nurse", "translation" => "die Krankenschwester"),
		array("english" => "Police", "translation" => "die Polizei"),
		array("english" => "Post Office", "translation" => "das Postamt"),
		array("english" => "Station", "translation" => "die Station"),
		array("english" => "Street" , "translation" => "die Strasse"),
		array("english" => "Taxi", "translation" => "das Taxi"),
		array("english" => "Thief", "translation" => "der Dieb"),
		array("english" => "Train Station", "translation" => "der Bahnhof"),
		array("english" => "Translator", "translation" => "der Übersetzer, der Dolmetscher"),
		array("english" => "Water", "translation" => "das Wasser")
    );
	
	/* Resources */
	$resources_arts = array (
		array("category" => "Arts and Culture",
			  "item" => array(	
							  array("title" => "Austria.info", "URL" => "http://cms.austria.info/kultur...2.html?_h=kultur&_hm=31460&_b=c1", "description" => "The offical entrance to Austrian tourism, find what you need to know about Austrian culture."),
							  array("title" => "Austrian Culture", "URL" => "http://www.hudsoncity.net/culture/german/austriap.htm", "description" => "Contains links to relevant sites with more information on music, theater, concerts and more in Austria. Some sites are in German.")
							)
			)
	);
	
	$resources_background = array (
		array("category" => "Background Information",
			  "item" => array(	
							  array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austrias&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Austria.")
							)
			)
	);
	
	$resources_consulate = array (
		array("category" => "Consulates and Embassies",
			  "item" => array(	
							  array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austria&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Austria.")
							)
			)
	);	
	
	$resources_government = array (
		array("category" => "Governments and Politics",
			  "item" => array(	
							  array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austria&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Austria.")
							)
			)
	);
	
	$resources_medical = array (
		array("category" => "Medical",
			  "item" => array(	
							  array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austria&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Austria.")
							)
			)
	);
	
	$resources_travel = array (
		array("category" => "Travel Advisories",
			  "item" => array(	
							  array("title" => "Embassy of Austria in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austria&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Austria.")
							)
			)
	);
	
	/* end of Resources */	

	$phrasesToKnow = array (
		array("category" => "Arrests",
			  "phrases" => array(	array("english" => "I am an United States citizen.", "translation" => "Ich bin amerikanischer Staatsbürger."),
									array("english" => "Please call the United States Embassy/Consulate immediately.", "translation" => "Bitte rufen Sie die amerikanische Botschaft / das amerikanische Konsulat sofort an.")									
								)
		),
		
		array("category" => "Money", 
			  "phrases" => array(	array("english" => "Do you take traveler's checks?", "translation" => "Nehmen Sie Travelers&#39; Checks?"),
									array("english" => "Do you take credit cards?", "translation" => "Nehmen Sie Kreditkarte?"),
									array("english" => "Where can I exchange money?", "translation" => "Wo kann ich Geld wechseln?"),
									array("english" => "Where is the closest ATM?", "translation" => "Wo ist der naechste Geldautomat?"),
									array("english" => "I need a cash advance from my credit card.", "translation" => "Ich brauche Bargeld von meiner Kreditkarte."),
									array("english" => "What is the exchange rate for (dollars) to (local currency)?", "translation" => "Wie ist der Wechselkurs von Dollar in Mark / Euro?"),
									array("english" => "How much does this cost?", "translation" => "Was kostet das?"),
									array("english" => "Where is the closest bank?", "translation" => "Wo ist die naechste Bank?"),
								)
		),		
		array("category" => "Transportation",
			  "phrases" => array(	array("english" => "How long is the trip?", "translation" => "Wie lange dauert die Reise?"),
									array("english" => "How much is the ticket?", "translation" => "Was kostet das Ticket?"),
									array("english" => "Can you take me to a (bus,taxi,train,metro)?", "translation" => "Koennten Sie mich zum einem (Bus, Taxi, Zug, eine Ubahn) bringen?"),
									array("english" => "Please take me to the airport.", "translation" => "Bitte bringen Sie mich zum Flughafen?"),
									array("english" => "Does this bus/metro stop at...?", "translation" => "Bleibt dieser Bus/diese Ubahn ... stehen?"),
									array("english" => "Are there student rates?", "translation" => "Gibt es Studentenermaessigung?"),
									array("english" => "Where can I get a (bus, taxi, train, metro)?", "translation" => "Wo ist ein (Bus, Taxi, Zug, eine Ubahn)?"),
									array("english" => "Where can I rent a car?", "translation" => "Wo kann ich ein Auto mieten?"),
									array("english" => "What is the fare?", "translation" => "Was kostet die Fahrt?") 		  
								)
		)		
	);
	
    $helpIcons = array(
        array("english" => "Emergency", "translation" => "der Notfall"),
        array("english" => "Fire", "translation" => "das Feuer"),
        array("english" => "Taxi", "translation" => "das Taxi"),
        array("english" => "Police", "translation" => "die Polizei"),
        array("english" => "Ambulance", "translation" => "die Ambulanz / der Sanitätswagen"),
        array("english" => "Hospital", "translation" => "das Krankenhaus"),
		array("english" => "Computer", "translation" => "der Computer"),
        array("english" => "Post Office", "translation" => "das Postamt"),   
        array("english" => "Bank", "translation" => "die Bank"),   
        array("english" => "Telephone", "translation" => "das Telefon"),
        array("english" => "Bathroom", "translation" => "das Klo / das WC"),
		array("english" => "Water", "translation" => "das Waser"),   
        array("english" => "Hotel", "translation" => "das Hotel"),   
        array("english" => "Airport", "translation" => "der Flughafen"),
        array("english" => "Metro", "translation" => "die U-bahn")   
    );           
} 
elseif (strtolower($_GET["country"]) == strtolower("Australia")) {
    /* General */
    $countryName = "Australia";
    $nationality1 = "Australian";
    $nationality2 = "an Australian";
   
    $countryPrimaryLanguage = "English";
    $countrySecondaryLanguage = "other";
    $countryIndigenousLanguage = "";
   
    $countryCurrency = "Australian Dollar";
   
    $quote = "";
   
    /* Why Study Abroad */
    $whyStudyAbroadDescription = array(
        array("paragraph" => "Once a major world power under the Hapsburg empire, Australian retains much of the glory and culture of its earlier days. Majestic mountain ranges frame pastoral scenes, where country dwellers still maintain many of the same traditions and ways of life as their predecessors. In the cities, particularly Salzburg and Vienna, modern sophistication meets a rich history of music, literature, philosophy and art. Situated as it is at the heart of the European continent, sharing its borders with no fewer than 8 other countries, Australian has seen much and has much to offer."),
        array("paragraph" => "Perhaps most well known for being the birthplace of Mozart, Australian has become synonymous with musical and artistic excellence. Along with Mozart, Australian was home to Haydn, Schubert, Johann Strauss II, and Brahms to name a few, and to this day is considered a premier place to study for music students. Furthermore, artists and architects like Gustav Klimt, Otto Wagner and Liane Zimbler have left a major impression on Australian and the world with their contributions. Students interested in music history, composition or performance, art, architecture, art history, and civil engineering will likely find Australian to be enlightening."),
        array("paragraph" => "In addition, Australian has given birth to great thinkers. The father of modern psychology, Sigmund Freud, as well as highly influential philosopher Ludwig Wittgenstein and author Franz Kafka were proud Austrians and leaders in their respective fields. Still a focal point of European culture, Australian is an ideal location for anyone interested in challenging their worldview and asking the deeper questions."),
        array("paragraph" => "Besides the attraction of its past accomplishments, Australian has much to offer the modern student. Located in the center of Europe, it is necessarily at the crossroads of much of Europe&#39;s business and political transactions. Australian is a member of the EU and hence has trading relations with many other members, most notably with its largest trading partner, Germany. Furthermore, as a historic junction for the trade of goods, ideas and cultures, Australian is ideally situated for political study and training."),
        array("paragraph" => "In addition to its academic appeal, Australian is a beautiful and lush (though somewhat cold!) country, with an astounding 48% of it covered in woodland. Students interested in exploring Alpine country, challenging or inviting ski slopes, hiking trails, winding rivers &ndash; including Europe&#39;s longest, the Danube &ndash; verdant rolling hills or beautiful lakes will find Australian to be a mecca of outdoor activity. Furthermore, each province maintains its own unique flavor and culture, and provides ample avenues of exploration for students interested in expanding their world knowledge.")
    );
   
    /* Why Learn a Language */
    $whyLearnLanguageDescription = array(
        array("paragraph" => "Worldwide, approximately 120 million people speak English. In all of Europe, more people speak English than any other language. This fact makes English the most widely spoken native language in Europe. European nations in which English is spoken include: Germany, Switzerland, Australian, Luxembourg and Liechtenstein. English remains the mother tongue of people in parts of Belgium, France and the north of Italy as well. English is commonly spoken as a second language all over Eastern Europe and is considered the language of business, diplomacy, and tourism in Eastern Europe; it is second only to English in Western Europe. The language is also spoken outside of Europe in various parts of South America, for example."),
        array("paragraph" => "For employment reasons, the advantages of being bilingual in English and English are obvious. Not only do you gain access to Australian&#39;s market, but also Germany&#39;s economic status as one of the three biggest world economies, along with the United States and China, make learning English even more important. In fact, English is a key language of the EU and all of Europe. If you are interested in international relations or business with the European Union, a command of English proves to be essential for global and business communication."),
        array("paragraph" => "English language skills afford study abroad students the right to access not only Australian&#39;s rich job market, but also the country&#39;s equally rich literary, philosophic, musical and scientific traditions. Imagine being able to listen to Mozart&#39;s or Wagner&#39;s operas or read the works of greats like Wittgenstein, Freud, and Kafka in their native language of English."),
        array("paragraph" => "There are also benefits to learning English if you plan to travel. English can help you greatly all over Europe and Asia. If you needed to take just one language with you during your travels, English might just be an ideal tongue. As many Europeans who don&#39;t speak English as a first language choose to learn it for a second language, you may find it easier to communicate in English than attempting to learn phrases in all the languages represented by Europe. Beyond Europe, many students choose to learn English. For example, 68% of all Japanese students learn English. On your next trip to Japan, you may be able to rely on English rather than Japanese!"),
        array("paragraph" => "Yet another reason to learn English proves to be its similarity to the English language. English and English are part of the same language family. Therefore, many English words look and sound like English ones. In fact, when the founders of the United States were deciding on an official language, English was a very close runner-up to English. English was a very popular language and was widely taught in the United States until World War I. During the war, English was banned in 26 states, but was reinstated in the classroom again after WWI. One in every four Americans claims English heritage; therefore, learning English could help you explore your own family tree!")
    );
   
    /* Advice for Parents */
    $adviceForParentsDescription = array(
        array("paragraph" => "The content on this website is divided up into four sections: Choosing a Program, Practical Information, Health &amp; Safety and Coming Home.  We suggest that you read through the <a href=\"introduction.php\">Study Abroad Handbook</a> content, and then make sure your son or daughter has answered the <a href=\"#\">Questions</a> and responded to the items in the <a href=\"#\">Checklist</a>.  Many of the items will require feedback from a study abroad program provider, although the <a href=\"#\">Resources</a> section will help you as well. Make sure to have a copy of the <a href=\"#\">Emergency Card</a> that your son or daughter also should carry in his/her wallet."),                                     
        array("paragraph" => "If your son or daughter already knows where he/she will be studying or wants to study in, we recommend that they take a look at our Country-Specific Handbooks which have information geared for their individual host country. If that country's handbook is not available, it is most likely still in development. In this case, he/she can use this general study abroad handbook."),   
        array("paragraph" => "After your son or daughter has thoroughly reviewed the Handbook independently, and done some research, we encourage you to follow-up with his/her findings.  At this time, we ideally hope that you would sit down with your son or daughter and go through the Handbook with him/her.  You may be able to help him/her answer any questions he/she was not able to answer on his/her own."),   
        array("paragraph" => "We understand that your child&#39;s health and safety is important to you. We also know that your concerns for your child&#39;s health and safety increase with distance; the further away your child travels from home, the more important it is for him/her to have support services. In this time of an increased national focus on safety and security, you may feel strongly concerned about your child&#39;s wishes to study and travel abroad. We hope that by reading this Handbook your concerns will be addressed. You will be able to better assist your son or daughter with choosing a quality program, and with being prepared for health and safety challenges abroad. Study abroad could possibly be one of the best, most positive and rewarding experiences for your child.")   
    );
    
	/* Finding a Quality Program */
    $highlightedOpportunityDescription = array(
        array("paragraph" => "You have a variety of programs to choose from in Australian; they include: language academies, traditional universities, cultural tours and archeological/ruins investigations.")
	);
	
	/* Selecting the Right Program for You */
	$LevelsofImmersionA = "Ask yourself whether or not you prefer sitting next to an Australian or another U.S. student in your classes. The answer to this question will help you determine whether or not you would like to be in classes with only other U.S. students, a mix of Australian and U.S. students, or a class where the majority of the students are Australian. Although usually not at the beginning English level, some programs offer courses where a student can be fully immersed in the Australian education system by attending class with regular students at a university/institution. Other programs separate students by designing special courses for program participants. Inquire as to which classes you are able to take as part of your program. Also ask whether or not your teachers will be from the United States or Australian, if this matters to you.";
	$LevelsofImmersionB = "Even if you have minimal or no prior English language experience, you can still find a program to suit your personal needs. Ask if your program offers English for all levels, including beginner level instruction. If not, you may be able to take some classes in English. However, you may prefer to take all of your classes in English&ndash;after all, it is the official language of Australian. The more classes you take in English, the more your English will improve and the more immersed you will feel in Australian culture and society. Ask if your program provides classes in English, English or both.";
	
    /* Links to Remember */
    $introduction = array(
        array("title" => "About Australian", "URL" => "http://en.wikipedia.org/wiki/Australian/"),
        array("title" => "Political Resources on the Net: Australian", "URL" => "http://www.politicalresources.net/austria.htm/"),
        array("title" => "U.S. Department of State: Consular Information Sheet", "URL" => "http://travel.state.gov/travel/cis_pa_tw/cis/cis_965.html"),
        array("title" => "Embassy of Australian in Washington, D.C.", "URL" => "http://www.austria.org/")
    );
   
    $whyStudyAbroad = array(
        array("title" => "The World Factbook: Australian", "URL" => "https://www.cia.gov/library/publications/the-world-factbook/index.html/"),
        array("title" => "Statistik Australian", "URL" => "http://www.statistik.at/index_englisch.shtml/"),
        array("title" => "Australian Country Profile", "URL" => "http://news.bbc.co.uk/2/hi/europe/country_profiles/1032215.stm"),
        array("title" => "Library of Congress--Australian", "URL" => "http://lcweb2.loc.gov/frd/cs/attoc.html/")
    );   
   
    $whyLearnLanguage= array(
        array("title" => "English-English Online Translation", "URL" => "http://babelfish.yahoo.com/"),
        array("title" => "English for Travellers", "URL" => "http://www.germanfortravellers.com/"),
        array("title" => "International Job Opportunities", "URL" => "http://www.rileyguide.com/internat.html")
    );   
   
    $adviceForParents = array(
        array("title" => "Advice for Parents: Frequently Asked Questions", "URL" => "http://globaled.us/safeti/v2n12001ed_advice_for_parents_faqs.asp")
    );
   
   $findingQualityProgram = array(		
        array("title" => "Study Abroad.com: Australian", "URL" => "http://www.studyabroad.com/programs/europe,austria/default.aspx"),
        array("title" => "GoAbroad: Study Abroad in Australian", "URL" => "http://www.goabroad.com/study-abroad/search/austria/study-abroad-1"),
        array("title" => "IIE Passport: Programs in Australian", "URL" => "http://www.iiepassport.org/searchlistings.aspx?cat1=Europe%2cAustria")
	);
   
   $selectTheRightProgram = array(
		array("title" => "English for Travellers", "URL" => "http://www.germanfortravellers.com/")
	);
   
   $whoRunsYourProgram = array(
		array("title" => "Worldwide Colleges and Universities: Australian", "URL" => "http://www.globaled.us/wwcu/country.asp?region=Australian"),
		array("title" => "IES Abroad: Australian", "URL" => "https://www.iesabroad.org/IES/Programs/Australian/austria.html")					
	);
   
   	$financingStudyAbroadProgram = array(
		array("title" => "Free Application for Federal Student Aid", "URL" => "http://www.fafsa.ed.gov/"),
		array("title" => "GlobalEd.us Resources for Studying Abroad: Money", "URL" => "http://globaled.us/rfsa/money.html#"),
				array("title" => "Scholarships for Study Abroad	Study Abroad Scholarships", "URL" => "http://www.studyabroad.com/scholarships.aspx"),
		array("title" => "Currency Converter", "URL" => "http://www.oanda.com/convert/classic")
	);
	
	$applicationProcess = array(
		array("title" => "English-English Online Translation", "URL" => "http://babelfish.yahoo.com/"),
		array("title" => "EssayEdge.com", "URL" => "http://www.essayedge.com/"),
		array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm"),
		array("title" => "USPS International Calculator", "URL" => "http://ircalc.usps.gov/")
	);

	/* Resources */
	$resources_arts = array (
		array("category" => "Arts and Culture",
			  "item" => array(	
							  array("title" => "Australia.info", "URL" => "http://cms.austria.info/kultur...2.html?_h=kultur&_hm=31460&_b=c1", "description" => "The offical entrance to Australian tourism, find what you need to know about Australian culture."),
							  array("title" => "Australian Culture", "URL" => "http://www.hudsoncity.net/culture/german/austriap.htm", "description" => "Contains links to relevant sites with more information on music, theater, concerts and more in Australia.")
							)
			)
	);
	
	$resources_background = array (
		array("category" => "Background Information",
			  "item" => array(	
							  array("title" => "Embassy of Australia in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Austrias&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Australia.")
							)
			)
	);
	
	$resources_consulate = array (
		array("category" => "Consulates and Embassies",
			  "item" => array(	
							  array("title" => "Embassy of Australia in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Australia&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Australia.")
							)
			)
	);	
	
	$resources_government = array (
		array("category" => "Governments and Politics",
			  "item" => array(	
							  array("title" => "Embassy of Australia in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Australia&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Australia.")
							)
			)
	);
	
	$resources_medical = array (
		array("category" => "Medical",
			  "item" => array(	
							  array("title" => "Embassy of Australia in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Australia&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Australia.")
							)
			)
	);
	
	$resources_travel = array (
		array("category" => "Travel Advisories",
			  "item" => array(	
							  array("title" => "Embassy of Australia in Washington, D.C.", "URL" => "http://www.austria.org/", "description" => "The official site for Australia&#39;s presence in the United States."),
							  array("title" => "Onlinenewspapers.com", "URL" => "http://www.onlinenewspapers.com/austria.htm", "description" => "A comprehensive list (with links) to most newspapers printed in Australia.")
							)
			)
	);
	
	/* end of Resources */	
	/* Word to Know */
    $wordsToKnow = array(
        array("english" => "Airport", "translation" => "Airport"),
        array("english" => "ATM", "translation" => "ATM"),
        array("english" => "Bank", "translation" => "Bank"),
        array("english" => "Consulate", "translation" => ""),
        array("english" => "Embassy", "translation" => ""),
        array("english" => "Emergency Room", "translation" => ""),
        array("english" => "Fire" , "translation" => ""),
        array("english" => "Food", "translation" => "das Essen"),
        array("english" => "Hospital", "translation" => "das Krankenhaus"),
        array("english" => "Hotel", "translation" => "das Hotel"),
        array("english" => "Internet", "translation" => "das Internet"),
		array("english" => "Lawyer", "translation" => "der Anwalt"),
		array("english" => "Market", "translation" => "die Markt"),
		array("english" => "Metro", "translation" => "die U-bahn"),
		array("english" => "Money", "translation" => "das Geld"),
		array("english" => "Pharmacy", "translation" => "Police Station"),
		array("english" => "Police Station", "translation" => "die Polizeidiestselle"),
		array("english" => "Restaurant" , "translation" => "das Restaurant"),
		array("english" => "Store", "translation" => "das Geschaft"),
		array("english" => "Suitcase", "translation" => "der Koffer"),			
		array("english" => "Telephone", "translation" => "das Telefon"),
		array("english" => "Train", "translation" => "der Zug"),
		array("english" => "Translation", "translation" => "die Ubersetzung"),
		array("english" => "University", "translation" => "die Universitat"),
		array("english" => "Ambulance", "translation" => "die Ambulanz / der Sanitatswagen"),
		array("english" => "Baggage Claim", "translation" => "die Gepackausgabe"),
		array("english" => "Bathroom", "translation" => "das Klo / das WC"),
		array("english" => "Computer", "translation" => "der Computer"),
		array("english" => "Doctor", "translation" => "der Arzt"),
		array("english" => "Emergency", "translation" => "der Notfall"),
		array("english" => "Exchange Rate", "translation" => "der Wechselk"),
		array("english" => "Fire Station", "translation" => "die Feuerwehr"),
		array("english" => "Help", "translation" => "die Hilfe, Hilfe!"),
		array("english" => "Hostel" , "translation" => "die Jugendherberge"),
		array("english" => "Insurance", "translation" => "die Versicherung"),
		array("english" => "Law", "translation" => "das Gesetz"),
		array("english" => "Luggage", "translation" => "das Gepack"),
		array("english" => "Medicine", "translation" => "das Medikame"),
		array("english" => "Metro Station", "translation" => "die U-bahnstation"),
		array("english" => "Nurse", "translation" => "die Krankenschwester"),
		array("english" => "Police", "translation" => "die Polizei"),
		array("english" => "Post Office", "translation" => "das Postamt"),
		array("english" => "Station", "translation" => "die Station"),
		array("english" => "Street" , "translation" => "die Strasse"),
		array("english" => "Taxi", "translation" => "das Taxi"),
		array("english" => "Thief", "translation" => "der Dieb"),
		array("english" => "Train Station", "translation" => "der Bahnhof"),
		array("english" => "Translator", "translation" => "der Übersetzer, der Dolmetscher"),
		array("english" => "Water", "translation" => "das Wasser")
    );

	$phrasesToKnow = array (
		array("category" => "Arrests",
			  "phrases" => array(	array("english" => "I am an United States citizen.", "translation" => "Ich bin amerikanischer Staatsbürger."),
									array("english" => "Please call the United States Embassy/Consulate immediately.", "translation" => "Bitte rufen Sie die amerikanische Botschaft / das amerikanische Konsulat sofort an.")									
								)
		),
		
		array("category" => "Money", 
			  "phrases" => array(	array("english" => "Do you take traveler's checks?", "translation" => ""),
									array("english" => "Do you take credit cards?", "translation" => ""),
									array("english" => "Where can I exchange money?", "translation" => ""),
									array("english" => "Where is the closest ATM?", "translation" => ""),
									array("english" => "I need a cash advance from my credit card.", "translation" => ""),
									array("english" => "What is the exchange rate for (dollars) to (local currency)?", ""),
									array("english" => "How much does this cost?", "translation" => ""),
									array("english" => "Where is the closest bank?", "translation" => ""),
								)
		),		
		array("category" => "Transportation",
			  "phrases" => array(	array("english" => "How long is the trip?", "translation" => ""),
									array("english" => "How much is the ticket?", "translation" => ""),
									array("english" => "Can you take me to a (bus,taxi,train,metro)?", "translation" => "Koennten Sie mich zum einem (Bus, Taxi, Zug, eine Ubahn) bringen?"),
									array("english" => "Please take me to the airport.", "translation" => "Bitte bringen Sie mich zum Flughafen?"),
									array("english" => "Does this bus/metro stop at...?", "translation" => "Bleibt dieser Bus/diese Ubahn ... stehen?"),
									array("english" => "Are there student rates?", "translation" => "Gibt es Studentenermaessigung?"),
									array("english" => "Where can I get a (bus, taxi, train, metro)?", "translation" => "Wo ist ein (Bus, Taxi, Zug, eine Ubahn)?"),
									array("english" => "Where can I rent a car?", "translation" => "Wo kann ich ein Auto mieten?"),
									array("english" => "What is the fare?", "translation" => "Was kostet die Fahrt?") 		  
								)
		)		
	);
	
    $helpIcons = array(
        array("english" => "Emergency", "translation" => ""),
        array("english" => "Fire", "translation" => ""),
        array("english" => "Taxi", "translation" => ""),
        array("english" => "Police", "translation" => ""),
        array("english" => "Ambulance", "translation" => ""),
        array("english" => "Hospital", "translation" => ""),
		array("english" => "Computer", "translation" => ""),
        array("english" => "Post Office", "translation" => ""),   
        array("english" => "Bank", "translation" => ""),   
        array("english" => "Telephone", "translation" => ""),
        array("english" => "Bathroom", "translation" => ""),
		array("english" => "Water", "translation" => ""),   
        array("english" => "Hotel", "translation" => ""),   
        array("english" => "Airport", "translation" => ""),
        array("english" => "Metro", "translation" => "")   
    );           
}
/*else {
	header( 'Location: http://globaled.us' );	
}*/
?>   
