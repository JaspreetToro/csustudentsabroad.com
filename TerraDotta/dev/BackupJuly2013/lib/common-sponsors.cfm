<cfset sponsor = structNew() />
<cfset API = structNew() />

<cfset API.gen = structNew() />
<cfset sponsor.API.gen.title = "Academic Programs International" />
<cfset sponsor.API.gen.url = "http://www.apistudyabroad.com/" />
<cfset sponsor.API.gen.logo = "http://studentsabroad.com/images/logo/API-logo.jpg" />
<cfset sponsor.API.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/API-logo-sm.gif" />
<cfset sponsor.API.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/API-logo-md.gif" />
<cfset sponsor.API.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/API-logo-lg.gif" />
<cfset sponsor.API.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/API-logo-xl.gif" />
<cfset sponsor.API.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/API-logo-lead-ls.gif" />
<cfset sponsor.API.gen.banner_1 = "http://studentsabroad.com/images/sponsors/banner-API.gif" />
<cfset sponsor.API.gen.logo_lead_sponsor = "no" />
<cfset sponsor.API.gen.logo_change = "no" />
<cfset sponsor.API.gen.logo_full = "no" />
<cfset sponsor.API.gen.logo_lg = "no" />
<cfset sponsor.API.gen.logo_med = "yes" />
<cfset sponsor.API.gen.logo_sm = "no" />
<cfset sponsor.API.gen.title_desc = "Academic Programs International" />
<cfset sponsor.API.gen.listing_desc = "API: Study Abroad" />
<cfset sponsor.API.gen.description = "...<a href=""http://www.apistudyabroad.com/"" target=""_blank"">click here to learn more</a>" />

<cfset API.it = structNew() />
<cfset sponsor.API.it.title = "Academic Programs International" />
<cfset sponsor.API.it.url = "http://www.apistudyabroad.com/programs/italy/" />
<cfset sponsor.API.it.logo = "http://studentsabroad.com/images/logo/API-logo.jpg" />
<cfset sponsor.API.it.logo_s = "http://studentsabroad.com/images/sponsors/logo/API-logo-sm.gif" />
<cfset sponsor.API.it.logo_m = "http://studentsabroad.com/images/sponsors/logo/API-logo-md.gif" />
<cfset sponsor.API.it.logo_l = "http://studentsabroad.com/images/sponsors/logo/API-logo-lg.gif" />
<cfset sponsor.API.it.logo_xl = "http://studentsabroad.com/images/sponsors/logo/API-logo-xl.gif" />
<cfset sponsor.API.it.logo_ls = "http://studentsabroad.com/images/sponsors/logo/API-logo-lead-ls.gif" />
<cfset sponsor.API.it.banner_1 = "http://studentsabroad.com/images/sponsors/banner-API.gif" />
<cfset sponsor.API.it.logo_lead_sponsor = "no" />
<cfset sponsor.API.it.logo_change = "no" />
<cfset sponsor.API.it.logo_full = "no" />
<cfset sponsor.API.it.logo_lg = "no" />
<cfset sponsor.API.it.logo_med = "yes" />
<cfset sponsor.API.it.logo_sm = "no" />
<cfset sponsor.API.it.title_desc = "Academic Programs International in Italy" />
<cfset sponsor.API.it.listing_desc = "API: Study Abroad in Italy" />
<cfset sponsor.API.it.description = "...<a href=""http://www.apistudyabroad.com/programs/italy/"" target=""_blank"">click here to learn more</a>" />

<cfset ISA = structNew() />

<cfset ISA.gen = structNew() />
<cfset sponsor.ISA.gen.title = "International Studies Abroad" />
<cfset sponsor.ISA.gen.url = "http://www.studiesabroad.com/" />
<cfset sponsor.ISA.gen.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.gen.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.gen.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.gen.logo_change = "no" />
<cfset sponsor.ISA.gen.logo_full = "no" />
<cfset sponsor.ISA.gen.logo_lg = "no" />
<cfset sponsor.ISA.gen.logo_med = "yes" />
<cfset sponsor.ISA.gen.logo_sm = "no" />
<cfset sponsor.ISA.gen.title_desc = "ISA Worldwide" />
<cfset sponsor.ISA.gen.listing_desc = "ISA: Affordable Study Abroad Programs! Semester, Summer and Year" />
<cfset sponsor.ISA.gen.description = "For over twenty years, International Studies Abroad (ISA) has provided college students in the United States and Canada the opportunity to explore the world. ISA offers a wide variety of study abroad programs at accredited schools and universities in <a href=""http://www.studiesabroad.com/argentina/"" target=""_blank"">Argentina</a>, <a href=""http://www.studiesabroad.com/belgium/"" target=""_blank"">Belgium</a>, <a href=""http://www.studiesabroad.com/brazil/"" target=""_blank"">Brazil</a>, <a href=""http://www.studiesabroad.com/chile/"" target=""_blank"">Chile</a>, <a href=""http://www.studiesabroad.com/china/"" target=""_blank"">China</a>, <a href=""http://www.studiesabroad.com/costa_rica/"" target=""_blank"">Costa Rica</a>, <a href=""http://www.studiesabroad.com/czech_republic/"" target=""_blank"">Czech Republic</a>, <a href=""http://www.studiesabroad.com/dominican_republic/"" target=""_blank"">Dominican Republic</a>, <a href=""http://www.studiesabroad.com/england/"" target=""_blank"">England</a>, <a href=""http://www.studiesabroad.com/france/"" target=""_blank"">France</a>, <a href=""http://www.studiesabroad.com/india/"" target=""_blank"">India</a>, <a href=""http://www.studiesabroad.com/ireland/"" target=""_blank"">Ireland</a>, <a href=""http://www.studiesabroad.com/italy/"" target=""_blank"">Italy</a>, <a href=""http://www.studiesabroad.com/jordan/"" target=""_blank"">Jordan</a>, <a href=""http://www.studiesabroad.com/morocco/"" target=""_blank"">Morocco</a>, <a href=""http://www.studiesabroad.com/northern_ireland/"" target=""_blank"">Northern Ireland</a>, <a href=""http://www.studiesabroad.com/panama/"" target=""_blank"">Panama</a>, <a href=""http://www.studiesabroad.com/peru/"" target=""_blank"">Peru</a>, <a href=""http://www.studiesabroad.com/south_korea/"" target=""_blank"">South Korea</a>, and <a href=""http://www.studiesabroad.com/spain/"" target=""_blank"">Spain</a>. In the age of globalization, an intimate understanding of a foreign culture is both a valuable academic asset and an enriching personal experience. As a leader in international education, ISA is dedicated to providing university level students with the opportunity to discover, learn, and enjoy a way of life other than their own." />

<cfset ISA.ar = structNew() />

<cfset sponsor.ISA.ar.title = "International Studies Abroad" />
<cfset sponsor.ISA.ar.url = "http://www.studiesabroad.com/argentina" />
<cfset sponsor.ISA.ar.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.ar.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.ar.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.ar.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.ar.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.ar.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.ar.banner_1 = "http://studentsabroad.com/images/sponsors/banner-sponsor.ISA.gif" />
<cfset sponsor.ISA.ar.logo_lead_sponsor = "yes" />
<cfset sponsor.ISA.ar.logo_change = "no" />
<cfset sponsor.ISA.ar.logo_full = "no" />
<cfset sponsor.ISA.ar.logo_lg = "no" />
<cfset sponsor.ISA.ar.logo_med = "yes" />
<cfset sponsor.ISA.ar.logo_sm = "no" />
<cfset sponsor.ISA.ar.title_desc = "ISA in Argentina" />
<cfset sponsor.ISA.ar.listing_desc = "Affordable Study Abroad Programs in Argentina! Semester, Summer and Year" />
<cfset sponsor.ISA.ar.description = "As the second largest metropolitan area in all of South America, Buenos Aires, the capital of Argentina, is a great host to study abroad students. The port city features Western architecture and reflects the true Argentina—with a long coastline of beaches coupled with the Andes mountain range, there are plenty of reasons to explore the outdoors. For a more unique study abroad experience, ISA offers a more authentic experience in Cordoba, another well-known province, with a history of indigenous people and the true Spanish-speaking experience. ISA study abroad students have the opportunity to study in Buenos Aires or Cordoba...<a href=""http://www.studiesabroad.com/argentina"">click here to learn more</a>" />

<cfset ISA.be = structNew() />

<cfset sponsor.ISA.be.title = "International Studies Abroad" />
<cfset sponsor.ISA.be.url = "http://www.studiesabroad.com/belgium" />
<cfset sponsor.ISA.be.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.be.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.be.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.be.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.be.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.be.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.be.banner_1 = "http://studentsabroad.com/images/sponsors/banner-sponsor.ISA.gif" />
<cfset sponsor.ISA.be.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.be.logo_change = "no" />
<cfset sponsor.ISA.be.logo_full = "no" />
<cfset sponsor.ISA.be.logo_lg = "no" />
<cfset sponsor.ISA.be.logo_med = "yes" />
<cfset sponsor.ISA.be.logo_sm = "no" />
<cfset sponsor.ISA.be.title_desc = "ISA in Belgium" />
<cfset sponsor.ISA.be.listing_desc = "Affordable Study Abroad Programs in Belgium! Semester, Summer and Year" />
<cfset sponsor.ISA.be.description = "Belgium, a member of the European Union, and its capital, Brussels, the capital of the international business world, is a key player in the global arena. Brussels is the only bilingual area of the country, where both Dutch and French are spoken. Both the Flemish and Walloon cultures possess traditions and ideas that often differ greatly from their ancestors, the Dutch and French. ISA study abroad students have the opportunity to study in Brussels at Vesalius College...<a href=""http://www.studiesabroad.com/belgium/"">click here to learn more</a>" />

<cfset ISA.br = structNew() />

<cfset sponsor.ISA.br.title = "International Studies Abroad" />
<cfset sponsor.ISA.br.url = "http://studiesabroad.com/brazil/" />
<cfset sponsor.ISA.br.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.br.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.br.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.br.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.br.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.br.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.br.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.br.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.br.logo_change = "no" />
<cfset sponsor.ISA.br.logo_full = "no" />
<cfset sponsor.ISA.br.logo_lg = "no" />
<cfset sponsor.ISA.br.logo_med = "yes" />
<cfset sponsor.ISA.br.logo_sm = "no" />
<cfset sponsor.ISA.br.title_desc = "ISA in Brazil" />
<cfset sponsor.ISA.br.listing_desc = "Affordable Study Abroad Programs in Brazil! Semester, Summer and Year" />
<cfset sponsor.ISA.br.description = "...<a href=""http://studiesabroad.com/brazil/"">click here to learn more</a>" />

<cfset ISA.do = structNew() />
<cfset sponsor.ISA.do.title = "International Studies Abroad" />
<cfset sponsor.ISA.do.url = "http://studiesabroad.com/http://studiesabroad.com/dominican_republic/" />
<cfset sponsor.ISA.do.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.do.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.do.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.do.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.do.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.do.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.do.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.do.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.do.logo_change = "no" />
<cfset sponsor.ISA.do.logo_full = "no" />
<cfset sponsor.ISA.do.logo_lg = "no" />
<cfset sponsor.ISA.do.logo_med = "yes" />
<cfset sponsor.ISA.do.logo_sm = "no" />
<cfset sponsor.ISA.do.title_desc = "ISA in Dominican Republic" />
<cfset sponsor.ISA.do.listing_desc = "Affordable Study Abroad Programs in Dominican Republic! Semester, Summer and Year" />
<cfset sponsor.ISA.do.description = "...<a href=""http://studiesabroad.com/http://studiesabroad.com/dominican_republic"">click here to learn more</a>" />

<cfset ISA.cl = structNew() />  
<cfset sponsor.ISA.cl.title = "International Studies Abroad" />
<cfset sponsor.ISA.cl.url = "http://www.studiesabroad.com/chile" />
<cfset sponsor.ISA.cl.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.cl.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.cl.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.cl.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.cl.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.cl.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.cl.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.cl.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.cl.logo_change = "no" />
<cfset sponsor.ISA.cl.logo_full = "no" />
<cfset sponsor.ISA.cl.logo_lg = "no" />
<cfset sponsor.ISA.cl.logo_med = "yes" />
<cfset sponsor.ISA.cl.logo_sm = "no" />
<cfset sponsor.ISA.cl.title_desc = "ISA in Chile" />
<cfset sponsor.ISA.cl.listing_desc = "Affordable Study Abroad Programs in Chile! Semester, Summer and Year" />
<cfset sponsor.ISA.cl.description = "With deep roots in literary and cultural heritage, Chile is the ideal study abroad destination for intellectual aficionados. Its rich mountain ranges and beautiful beaches also make it an attractive location for recreation. Nobel laureates Gabriela Mistral and Pablo Neruda are both Chilean, offering a legacy of Hispanic literature. ISA study abroad students have the opportunity to study in either the city of Valparaiso or Vina del Mar...<a href=""http://www.studiesabroad.com/chile"">click here to learn more</a>" />

<cfset ISA.ch = structNew() /> 
<cfset sponsor.ISA.ch.title = "International Studies Abroad" />
<cfset sponsor.ISA.ch.url = "http://www.studiesabroad.com/china" />
<cfset sponsor.ISA.ch.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.ch.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.ch.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.ch.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.ch.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.ch.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.ch.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.ch.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.ch.logo_change = "no" />
<cfset sponsor.ISA.ch.logo_full = "no" />
<cfset sponsor.ISA.ch.logo_lg = "no" />
<cfset sponsor.ISA.ch.logo_med = "yes" />
<cfset sponsor.ISA.ch.logo_sm = "no" />
<cfset sponsor.ISA.ch.title_desc = "ISA in China" />
<cfset sponsor.ISA.ch.listing_desc = "Affordable Study Abroad Programs in China! Semester, Summer and Year" />
<cfset sponsor.ISA.ch.description = "...<a href=""http://www.studiesabroad.com/china"">click here to learn more</a>" />

<cfset ISA.co = structNew() /> 
<cfset sponsor.ISA.co.title = "International Studies Abroad" />
<cfset sponsor.ISA.co.url = "http://www.studiesabroad.com/colombia" />
<cfset sponsor.ISA.co.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.co.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.co.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.co.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.co.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.co.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.co.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.co.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.co.logo_change = "no" />
<cfset sponsor.ISA.co.logo_full = "no" />
<cfset sponsor.ISA.co.logo_lg = "no" />
<cfset sponsor.ISA.co.logo_med = "yes" />
<cfset sponsor.ISA.co.logo_sm = "no" />
<cfset sponsor.ISA.co.title_desc = "ISA in Peru" />
<cfset sponsor.ISA.co.listing_desc = "Affordable Study Abroad Programs in Colombia! Semester, Summer and Year" />
<cfset sponsor.ISA.co.description = "...<a href=""http://www.studiesabroad.com/colombia"">click here to learn more</a>" />

<cfset ISA.cr = structNew() /> 
<cfset sponsor.ISA.cr.title = "International Studies Abroad" />
<cfset sponsor.ISA.cr.url = "http://www.studiesabroad.com/costa_rica" />
<cfset sponsor.ISA.cr.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.cr.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.cr.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.cr.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.cr.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.cr.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.cr.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.cr.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.cr.logo_change = "no" />
<cfset sponsor.ISA.cr.logo_full = "no" />
<cfset sponsor.ISA.cr.logo_lg = "no" />
<cfset sponsor.ISA.cr.logo_med = "yes" />
<cfset sponsor.ISA.cr.logo_sm = "no" />
<cfset sponsor.ISA.cr.title_desc = "ISA in Costa Rica" />
<cfset sponsor.ISA.cr.listing_desc = "Affordable Study Abroad Programs in Costa Rica! Semester, Summer and Year" />
<cfset sponsor.ISA.cr.description = "Costa Rica is the ideal destination for students interested in the outdoors—from climbing trails to diving underwater to study ecology. The Spanish spoken in Costa Rica also provides a great opportunity for practicing and learning for students interested in pursuing language studies. ISA study abroad students have the opportunity to study at the Universidad Latina &mdash; Heredia, Universidad Latina &mdash; San Pedro, or Veritas University...<a href=""http://www.studiesabroad.com/costa_rica"">click here to learn more</a>" />

<cfset ISA.cz = structNew() /> 
<cfset sponsor.ISA.cz.title = "International Studies Abroad" />
<cfset sponsor.ISA.cz.url = "http://www.studiesabroad.com/czech_republic" />
<cfset sponsor.ISA.cz.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.cz.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.cz.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.cz.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.cz.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.cz.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.cz.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.cz.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.cz.logo_change = "no" />
<cfset sponsor.ISA.cz.logo_full = "no" />
<cfset sponsor.ISA.cz.logo_lg = "no" />
<cfset sponsor.ISA.cz.logo_med = "yes" />
<cfset sponsor.ISA.cz.logo_sm = "no" />
<cfset sponsor.ISA.cz.title_desc = "ISA in Czech Republic" />
<cfset sponsor.ISA.cz.listing_desc = "Affordable Study Abroad Programs in Czech Republic! Semester, Summer and Year" />
<cfset sponsor.ISA.cz.description = "As one of the most historically political, cultural and economic centers of Eastern Europe, the Czech Republic boasts 1.2 million inhabitants and lots of international travelers. The Prague, a captivating city, is also listed as a UNESCO World Heritage Site. After the end of communism in the late 20th century, the Czech Republic openly allowed visitors to come and see its grand churches, castles, cobblestone streets and bridges. ISA study abroad students have the opportunity to study in Prague at Charles University for history, culture and politics or at the University of Economics in International Business and Economics...<a href=""http://www.studiesabroad.com/czech_republic"">click here to learn more</a>" />

<cfset ISA.fr = structNew() />
<cfset sponsor.ISA.fr.title = "International Studies Abroad" />
<cfset sponsor.ISA.fr.url = "http://www.studiesabroad.com/france" />
<cfset sponsor.ISA.fr.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.fr.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.fr.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.fr.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.fr.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.fr.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.fr.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.fr.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.fr.logo_change = "no" />
<cfset sponsor.ISA.fr.logo_full = "no" />
<cfset sponsor.ISA.fr.logo_lg = "no" />
<cfset sponsor.ISA.fr.logo_med = "yes" />
<cfset sponsor.ISA.fr.logo_sm = "no" />
<cfset sponsor.ISA.fr.title_desc = "ISA in France" />
<cfset sponsor.ISA.fr.listing_desc = "Affordable Study Abroad Programs in France! Semester, Summer and Year" />
<cfset sponsor.ISA.fr.description = "There is no doubt that French—and moreover—Parisian culture is among the most famous for art, cuisine and language worldwide. Besides the rich history apparent in the architecture and style of French cities, France is also one of the larges high&mdash;teach cities in Europe. France is a great mix of the urban and the rural as the vast landscapes offer something for every student’s interest. To find out more about the ISA study programs in Paris at the Catholic University, the American Business School, or the Sorbonne...<a href=""http://www.studiesabroad.com/france"">click here to learn more</a>" />

<cfset ISA.in = structNew() /> 
<cfset sponsor.ISA.in.title = "International Studies Abroad" />
<cfset sponsor.ISA.in.url = "http://www.studiesabroad.com/india" />
<cfset sponsor.ISA.in.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.in.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.in.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.in.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.in.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.in.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.in.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.in.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.in.logo_change = "no" />
<cfset sponsor.ISA.in.logo_full = "no" />
<cfset sponsor.ISA.in.logo_lg = "no" />
<cfset sponsor.ISA.in.logo_med = "yes" />
<cfset sponsor.ISA.in.logo_sm = "no" />
<cfset sponsor.ISA.in.title_desc = "ISA in India" />
<cfset sponsor.ISA.in.listing_desc = "Affordable Study Abroad Programs in India! Semester, Summer and Year" />
<cfset sponsor.ISA.in.description = "...<a href=""http://www.studiesabroad.com/india"">click here to learn more</a>" />

<cfset ISA.ie = structNew() />  
<cfset sponsor.ISA.ie.title = "International Studies Abroad" />
<cfset sponsor.ISA.ie.url = "http://www.studiesabroad.com/ireland" />
<cfset sponsor.ISA.ie.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.ie.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.ie.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.ie.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.ie.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.ie.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.ie.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.ie.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.ie.logo_change = "no" />
<cfset sponsor.ISA.ie.logo_full = "no" />
<cfset sponsor.ISA.ie.logo_lg = "no" />
<cfset sponsor.ISA.ie.logo_med = "yes" />
<cfset sponsor.ISA.ie.logo_sm = "no" />
<cfset sponsor.ISA.ie.title_desc = "ISA in Ireland" />
<cfset sponsor.ISA.ie.listing_desc = "Affordable Study Abroad Programs in Ireland! Semester, Summer and Year" />
<cfset sponsor.ISA.ie.description = "...<a href=""http://www.studiesabroad.com/ireland"">click here to learn more</a>" />

<cfset ISA.it = structNew() />  
<cfset sponsor.ISA.it.title = "International Studies Abroad" />
<cfset sponsor.ISA.it.url = "http://www.studiesabroad.com/italy" />
<cfset sponsor.ISA.it.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.it.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.it.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.it.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.it.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.it.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.it.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.it.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.it.logo_change = "no" />
<cfset sponsor.ISA.it.logo_full = "no" />
<cfset sponsor.ISA.it.logo_lg = "no" />
<cfset sponsor.ISA.it.logo_med = "yes" />
<cfset sponsor.ISA.it.logo_sm = "no" />
<cfset sponsor.ISA.it.title_desc = "ISA in Italy" />
<cfset sponsor.ISA.it.listing_desc = "Affordable Study Abroad Programs in Italy! Semester, Summer and Year" />
<cfset sponsor.ISA.it.description = "As the country with the most UNESCO World Heritage Sites in the world, Italy is the most historically fascinating location to study abroad. Its food, language, landscape and Mediterranean climate all add to the unique experience any study abroad student could ask for. As the second most popular study abroad destination, ISA study abroad students have the opportunity to discover either Rome or Florence...<a href=""http://www.studiesabroad.com/italy"">click here to learn more</a>" />

<cfset ISA.jo = structNew() />  
<cfset sponsor.ISA.jo.title = "International Studies Abroad" />
<cfset sponsor.ISA.jo.url = "http://www.studiesabroad.com/jordan " />
<cfset sponsor.ISA.jo.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.jo.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.jo.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.jo.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.jo.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.jo.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.jo.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.jo.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.jo.logo_change = "no" />
<cfset sponsor.ISA.jo.logo_full = "no" />
<cfset sponsor.ISA.jo.logo_lg = "no" />
<cfset sponsor.ISA.jo.logo_med = "yes" />
<cfset sponsor.ISA.jo.logo_sm = "no" />
<cfset sponsor.ISA.jo.title_desc = "ISA in Jordan" />
<cfset sponsor.ISA.jo.listing_desc = "Affordable Study Abroad Programs in Jordan! Semester, Summer and Year" />
<cfset sponsor.ISA.jo.description = "Located centrally in the Middle East, Jordan is the perfect spot to learn Arabic and travel around nearby Arab countries. It is host to the historic site of Petra and the Dead Sea, allowing a unique opportunity for students interested in studying architecture or ecosystems to learn more. Jordan’s religious sites and historical architecture from the Roman Empire add to its appeal.  Learn more about the ISA program in the capital city of Amman...<a href=""http://www.studiesabroad.com/jordan"">click here to learn more</a>" />

<cfset ISA.kr = structNew() />  
<cfset sponsor.ISA.kr.title = "International Studies Abroad" />
<cfset sponsor.ISA.kr.url = "http://studiesabroad.com/south_korea" />
<cfset sponsor.ISA.kr.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.kr.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.kr.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.kr.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.kr.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.kr.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.kr.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.kr.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.kr.logo_change = "no" />
<cfset sponsor.ISA.kr.logo_full = "no" />
<cfset sponsor.ISA.kr.logo_lg = "no" />
<cfset sponsor.ISA.kr.logo_med = "yes" />
<cfset sponsor.ISA.kr.logo_sm = "no" />
<cfset sponsor.ISA.kr.title_desc = "ISA in South Korea" />
<cfset sponsor.ISA.kr.listing_desc = "Affordable Study Abroad Programs in South Korea! Semester, Summer and Year" />
<cfset sponsor.ISA.kr.description = "...<a href=""http://studiesabroad.com/south_korea"">click here to learn more</a>" />

<cfset ISA.ma = structNew() />  
<cfset sponsor.ISA.ma.title = "International Studies Abroad" />
<cfset sponsor.ISA.ma.url = "http://www.studiesabroad.com/morocco" />
<cfset sponsor.ISA.ma.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.ma.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.ma.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.ma.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.ma.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.ma.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.ma.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.ma.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.ma.logo_change = "no" />
<cfset sponsor.ISA.ma.logo_full = "no" />
<cfset sponsor.ISA.ma.logo_lg = "no" />
<cfset sponsor.ISA.ma.logo_med = "yes" />
<cfset sponsor.ISA.ma.logo_sm = "no" />
<cfset sponsor.ISA.ma.title_desc = "ISA in Morocco" />
<cfset sponsor.ISA.ma.listing_desc = "Affordable Study Abroad Programs in Morocco! Semester, Summer and Year" />
<cfset sponsor.ISA.ma.description = "Due to its strategic geographic region in North Africa, Morocco is a milieu of the Spanish, French and Arabic language and culture.  Historically a site of the Berber Muslims and the Sephardic Jews, Morocco is the ideal location for students interested in learning about the history of the “Maghreb,” or “The West” in Arabic. Morocco’s unique blend of cultures allows for great versatility within the country for travelling and sightseeing—from the Mediterranean coast to the Sahara desert. ISA hosts its Moroccan program in the historic city of Meknes...<a href=""http://www.studiesabroad.com/morocco"">click here to learn more</a>" />

<cfset ISA.es = structNew() /> 
<cfset sponsor.ISA.es.title = "International Studies Abroad" />
<cfset sponsor.ISA.es.url = "http://www.studiesabroad.com/spain" />
<cfset sponsor.ISA.es.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.es.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm-es.gif" />
<cfset sponsor.ISA.es.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md-es.gif" />
<cfset sponsor.ISA.es.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg-es.gif" />
<cfset sponsor.ISA.es.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl-es.gif" />
<cfset sponsor.ISA.es.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA-es.gif" />
<cfset sponsor.ISA.es.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-ls-Spain.gif" />
<cfset sponsor.ISA.es.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.es.logo_lead_sponsor = "yes" />
<cfset sponsor.ISA.es.logo_change = "no" />
<cfset sponsor.ISA.es.logo_full = "no" />
<cfset sponsor.ISA.es.logo_lg = "no" />
<cfset sponsor.ISA.es.logo_med = "yes" />
<cfset sponsor.ISA.es.logo_sm = "no" />
<cfset sponsor.ISA.es.title_desc = "ISA in Spain" />
<cfset sponsor.ISA.es.listing_desc = "ISA: Study Abroad Programs in 10 cities throughout Spain" />
<cfset sponsor.ISA.es.description = "Any student studying abroad can find interesting things to do and see in Spain—from natural landscapes to internationally recognized museums and cathedrals, there is no shortage of fun and learning. Additionally, Spain's universities are famous worldwide for their foreign language centers. With programs in Barcelona, Bilbao, Granada, Madrid, Málaga, Salamanca, San Sebastián, Santander, Sevilla, and Valencia, ISA has sustained a reputation as a leader in study abroad in Spain...<a href=""http://www.studiesabroad.com/spain"">click here to learn more</a>" />

<cfset ISA.pa = structNew() /> 
<cfset sponsor.ISA.pa.title = "International Studies Abroad" />
<cfset sponsor.ISA.pa.url = "http://www.studiesabroad.com/panama" />
<cfset sponsor.ISA.pa.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.pa.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.pa.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.pa.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.pa.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.pa.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.pa.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.pa.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.pa.logo_change = "no" />
<cfset sponsor.ISA.pa.logo_full = "no" />
<cfset sponsor.ISA.pa.logo_lg = "no" />
<cfset sponsor.ISA.pa.logo_med = "yes" />
<cfset sponsor.ISA.pa.logo_sm = "no" />
<cfset sponsor.ISA.pa.title_desc = "ISA in Panama" />
<cfset sponsor.ISA.pa.listing_desc = "Affordable Study Abroad Programs in Panama! Semester, Summer and Year" />
<cfset sponsor.ISA.pa.description = "...<a href=""http://www.studiesabroad.com/panama"">click here to learn more</a>" />

<cfset ISA.pe = structNew() /> 
<cfset sponsor.ISA.pe.title = "International Studies Abroad" />
<cfset sponsor.ISA.pe.url = "http://www.studiesabroad.com/peru" />
<cfset sponsor.ISA.pe.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.pe.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.pe.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.pe.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.pe.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.pe.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.pe.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.pe.logo_lead_sponsor = "no" />
<cfset sponsor.ISA.pe.logo_change = "no" />
<cfset sponsor.ISA.pe.logo_full = "no" />
<cfset sponsor.ISA.pe.logo_lg = "no" />
<cfset sponsor.ISA.pe.logo_med = "yes" />
<cfset sponsor.ISA.pe.logo_sm = "no" />
<cfset sponsor.ISA.pe.title_desc = "ISA in Peru" />
<cfset sponsor.ISA.pe.listing_desc = "Affordable Study Abroad Programs in Peru! Semester, Summer and Year" />
<cfset sponsor.ISA.pe.description = "Known mostly for its famous landmark, the Machu Picchu, Peru is a perfect marriage between traditional sights and modern city life. Lima, the capital city, is the primary site for education and industry while offering a great location along the Peruvian coast. Cusco, on the other hand, it a city in the Andes Mountains which houses the popular tourist sites and is a great way to become acquainted with indigenous Peruvian culture. ISA study abroad students have the opportunity to study in Cusco or Lima...<a href=""http://www.studiesabroad.com/peru"">click here to learn more</a>" />

<cfset ISA.uk = structNew() /> 
<cfset sponsor.ISA.uk.title = "International Studies Abroad" />
<cfset sponsor.ISA.uk.url = "http://www.studiesabroad.com/england " />
<cfset sponsor.ISA.uk.logo = "http://studentsabroad.com/images/logo/ISA-logo.jpg" />
<cfset sponsor.ISA.uk.logo_s = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-sm.gif" />
<cfset sponsor.ISA.uk.logo_m = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-md.gif" />
<cfset sponsor.ISA.uk.logo_l = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lg.gif" />
<cfset sponsor.ISA.uk.logo_xl = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-xl.gif" />
<cfset sponsor.ISA.uk.logo_ls = "http://studentsabroad.com/images/sponsors/logo/ISA-logo-lead-ls.gif" />
<cfset sponsor.ISA.uk.banner_1 = "http://studentsabroad.com/images/sponsors/banner-ISA.gif" />
<cfset sponsor.ISA.uk.logo_lead_sponsor = "yes" />
<cfset sponsor.ISA.uk.logo_change = "no" />
<cfset sponsor.ISA.uk.logo_full = "no" />
<cfset sponsor.ISA.uk.logo_lg = "no" />
<cfset sponsor.ISA.uk.logo_med = "yes" />
<cfset sponsor.ISA.uk.logo_sm = "no" />
<cfset sponsor.ISA.uk.title_desc = "ISA in United Kingdom" />
<cfset sponsor.ISA.uk.listing_desc = "Affordable Study Abroad Programs in United Kingdom! Semester, Summer and Year" />
<cfset sponsor.ISA.uk.description = "The United Kingdom has the benefit of proximity for any student looking to make the most out of studying abroad—it’s possible to visit both Northern Ireland and England in one trip! Northern Ireland is well known for its castles and smaller cities while England is famous for its historical universities, the Windsor Castle, Stonehenge, and the Tower of London. ISA's study abroad programs in England are held at the University of Reading, the University of Westminster, King's College London, Roehampton University, the FSU London Study Centre, and Newcastle University...<a href=""http://www.studiesabroad.com/england"">click here to learn more about the programs in England</a>. ISA’s programs in Northern Ireland in Belfast are held at Queen's University...<a href=""http://www.studiesabroad.com/northern_ireland"">click here to learn more about the programs in Northern Ireland</a>" />

<cfset TerraDotta.gen = structNew() /> 
<cfset sponsor.TerraDotta.gen.title = "Terra Dotta" />
<cfset sponsor.TerraDotta.gen.url = "http://www.TerraDotta.com" />
<cfset sponsor.TerraDotta.gen.logo = "http://studentsabroad.com/images/logo/TerraDotta-StudioAbroad-logo.jpg" />
<cfset sponsor.TerraDotta.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/TerraDotta-StudioAbroad-logo-sm.gif" />
<cfset sponsor.TerraDotta.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/TerraDotta-StudioAbroad-logo-md.gif" />
<cfset sponsor.TerraDotta.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/TerraDotta-StudioAbroad-logo-lg.gif" />
<cfset sponsor.TerraDotta.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/TerraDotta-StudioAbroad-logo-xl.gif" />
<cfset sponsor.TerraDotta.gen.banner_1 = "http://studentsabroad.com/images/sponsors/banner-sponsor.TerraDotta.gif" />
<cfset sponsor.TerraDotta.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/TerraDotta-StudioAbroad-logo-ls.gif" />
<cfset sponsor.TerraDotta.gen.logo_lead_sponsor = "no" />
<cfset sponsor.TerraDotta.gen.logo_change = "no" />
<cfset sponsor.TerraDotta.gen.logo_full = "no" />
<cfset sponsor.TerraDotta.gen.logo_lg = "no" />
<cfset sponsor.TerraDotta.gen.logo_med = "no" />
<cfset sponsor.TerraDotta.gen.logo_sm = "yes" />
<cfset sponsor.TerraDotta.gen.title_desc = "Terra Dotta" />
<cfset sponsor.TerraDotta.gen.listing_desc = "Software Solutions for University Departments" />
<cfset sponsor.TerraDotta.gen.description = "...<a href=""http://www.TerraDotta.com"">click here to learn more</a>" />

<cfset Globalinks.gen = structNew() /> 
<cfset sponsor.Globalinks.gen.title = "Globalinks Learning Abroad" />
<cfset sponsor.Globalinks.gen.url = "http://www.globalinksabroad.org/" />
<cfset sponsor.Globalinks.gen.logo = "http://studentsabroad.com/images/logo/GlobalLinks-logo.jpg" />
<cfset sponsor.Globalinks.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-sm.gif" />
<cfset sponsor.Globalinks.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-md.gif" />
<cfset sponsor.Globalinks.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-lg.gif" />
<cfset sponsor.Globalinks.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-xl.gif" />
<cfset sponsor.Globalinks.gen.banner_1 = "" />
<cfset sponsor.Globalinks.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-ls.gif" />
<cfset sponsor.Globalinks.gen.logo_lead_sponsor = "no" />
<cfset sponsor.Globalinks.gen.logo_change = "no" />
<cfset sponsor.Globalinks.gen.logo_full = "no" />
<cfset sponsor.Globalinks.gen.logo_lg = "no" />
<cfset sponsor.Globalinks.gen.logo_med = "no" />
<cfset sponsor.Globalinks.gen.logo_sm = "no" />
<cfset sponsor.Globalinks.gen.title_desc = "Globalinks Learning Abroad" />
<cfset sponsor.Globalinks.gen.listing_desc = "Study abroad for a semester or a year with Globalinks Learning Abroad program." />
<cfset sponsor.Globalinks.gen.description = "Study abroad for a semester or a year with Globalinks Learning Abroad program...<a href=""http://globalinksabroad.com"">click here to learn more</a>" />

<cfset Globalinks.au = structNew() /> 
<cfset sponsor.Globalinks.au.title = "Globalinks Learning Abroad" />
<cfset sponsor.Globalinks.au.url = "http://www.globalinksabroad.org/destinations/study_in_australia/" />
<cfset sponsor.Globalinks.au.logo = "http://studentsabroad.com/images/logo/GlobalLinks-logo-au.jpg" />
<cfset sponsor.Globalinks.au.logo_s = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-sm-au.gif" />
<cfset sponsor.Globalinks.au.logo_m = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-md-au.gif" />
<cfset sponsor.Globalinks.au.logo_l = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-lg-au.gif" />
<cfset sponsor.Globalinks.au.logo_xl = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-xl-au.gif" />
<cfset sponsor.Globalinks.au.banner_1 = "" />
<cfset sponsor.Globalinks.au.logo_ls = "http://studentsabroad.com/images/sponsors/logo/GlobalLinks-logo-ls-au.gif" />
<cfset sponsor.Globalinks.au.logo_lead_sponsor = "no" />
<cfset sponsor.Globalinks.au.logo_change = "no" />
<cfset sponsor.Globalinks.au.logo_full = "no" />
<cfset sponsor.Globalinks.au.logo_lg = "no" />
<cfset sponsor.Globalinks.au.logo_med = "no" />
<cfset sponsor.Globalinks.au.logo_sm = "yes" />
<cfset sponsor.Globalinks.au.title_desc = "GlobaLinks Learning Abroad in Australia" />
<cfset sponsor.Globalinks.au.listing_desc = "Study abroad for a semester or a year in Australia with Globalinks Learning Abroad program." />
<cfset sponsor.Globalinks.au.description = "Study abroad for a semester or a year in Australia with the Globalinks Learning Abroad program. Well known for its landscapes, Australia’s biggest attraction is its natural beauty. Short January terms or Summer terms are also available—all across universities in Australia, New Zealand and Fiji....<a href=""http://www.globalinksabroad.org/destinations/study_in_australia/"">click here to learn more</a>" />

<cfset StudyAbroad.gen = structNew() /> 
<cfset sponsor.StudyAbroad.gen.title = "StudyAbroad.com" />
<cfset sponsor.StudyAbroad.gen.url = "http://www.studyabroad.com/" />
<cfset sponsor.StudyAbroad.gen.logo = "http://studentsabroad.com/images/logo/StudyAbroad-logo.jpg" />
<cfset sponsor.StudyAbroad.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/StudyAbroad-logo-sm.gif" />
<cfset sponsor.StudyAbroad.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/StudyAbroad-logo-md.gif" />
<cfset sponsor.StudyAbroad.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/StudyAbroad-logo-lg.gif" />
<cfset sponsor.StudyAbroad.gen.logo_xl= "http://studentsabroad.com/images/sponsors/logo/StudyAbroad-logo-xl.gif" />
<cfset sponsor.StudyAbroad.gen.banner_1 = "" />
<cfset sponsor.StudyAbroad.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/StudyAbroad-logo-ls.gif" />
<cfset sponsor.StudyAbroad.gen.logo_lead_sponsor = "no" />
<cfset sponsor.StudyAbroad.gen.logo_change = "no" />
<cfset sponsor.StudyAbroad.gen.logo_full = "no" />
<cfset sponsor.StudyAbroad.gen.logo_lg = "no" />
<cfset sponsor.StudyAbroad.gen.logo_med = "no" />
<cfset sponsor.StudyAbroad.gen.logo_sm = "yes" />
<cfset sponsor.StudyAbroad.gen.title_desc = "StudyAbroad.com" />
<cfset sponsor.StudyAbroad.gen.listing_desc = "" />
<cfset sponsor.StudyAbroad.gen.description = "Whether you are interested in studying abroad over summer, doing an internship, or even volunteering abroad, StudyAbroad.com has the resources to set you up on your next educational opportunity. StudyAbroad.com’s comprehensive directory of study abroad programs features a powerful search engine that is organized by subject, country or city of your choice. In addition, StudyAbroad.com provides support for international education through its study abroad handbook which includes information on health, safety and financial aid...<a href=""http://www.studyabroad.com/"">click here to learn more</a>" />

<cfset CONAHEC.gen = structNew() /> 
<cfset sponsor.CONAHEC.gen.title = "CONAHEC: Consortium for North American Higher Education" />
<cfset sponsor.CONAHEC.gen.url = "http://www.conahec.org" />
<cfset sponsor.CONAHEC.gen.logo = "http://studentsabroad.com/images/logo/CONAHEC-logo.jpg" />
<cfset sponsor.CONAHEC.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/CONAHEC-logo-sm.gif" />
<cfset sponsor.CONAHEC.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/CONAHEC-logo-md.gif" />
<cfset sponsor.CONAHEC.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/CONAHEC-logo-lg.gif" />
<cfset sponsor.CONAHEC.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CONAHEC-logo-xl.gif" />
<cfset sponsor.CONAHEC.gen.banner_1 = "" />
<cfset sponsor.CONAHEC.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CONAHEC-logo-ls.gif" />
<cfset sponsor.CONAHEC.gen.logo_lead_sponsor = "no" />
<cfset sponsor.CONAHEC.gen.logo_change = "no" />
<cfset sponsor.CONAHEC.gen.logo_full = "no" />
<cfset sponsor.CONAHEC.gen.logo_lg = "no" />
<cfset sponsor.CONAHEC.gen.logo_med = "no" />
<cfset sponsor.CONAHEC.gen.logo_sm = "yes" />
<cfset sponsor.CONAHEC.gen.title_desc = "CONAHEC" />
<cfset sponsor.CONAHEC.gen.listing_desc = "Collaborates with Canadian, Mexican and American institutions to promote linkages between North America and institutions of higher education worldwide." />
<cfset sponsor.CONAHEC.gen.description = "The Consortium for North American Higher Education (CONAHEC) collaborates with Canadian, Mexican and American institutions, specifically, to promote linkages between North America and institutions of higher education worldwide. To learn about how CONAHEC  fosters this academic collaboration...<a href=""http://www.conahec.org/"">click here</a>" />

<cfset PLUS.gen = structNew() /> 
<cfset sponsor.PLUS.gen.title = "Project for Learning in the U.S." />
<cfset sponsor.PLUS.gen.url = "http://www.globaled.us/PLUS/" />
<cfset sponsor.PLUS.gen.logo = "http://studentsabroad.com/images/logo/PLUS-logo.jpg" />
<cfset sponsor.PLUS.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/PLUS-logo-sm.gif" />
<cfset sponsor.PLUS.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/PLUS-logo-md.gif" />
<cfset sponsor.PLUS.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/PLUS-logo-lg.gif" />
<cfset sponsor.PLUS.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/PLUS-logo-xl.gif" />
<cfset sponsor.PLUS.gen.banner_1 = "" />
<cfset sponsor.PLUS.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/PLUS-logo-ls.gif" />
<cfset sponsor.PLUS.gen.logo_lead_sponsor = "no" />
<cfset sponsor.PLUS.gen.logo_change = "no" />
<cfset sponsor.PLUS.gen.logo_full = "no" />
<cfset sponsor.PLUS.gen.logo_lg = "no" />
<cfset sponsor.PLUS.gen.logo_med = "no" />
<cfset sponsor.PLUS.gen.logo_sm = "yes" />
<cfset sponsor.PLUS.gen.title_desc = "PLUS" />
<cfset sponsor.PLUS.gen.listing_desc = "Connects International Students with University Partners and Acts as a Resource Guide for Students Coming to the United States." />
<cfset sponsor.PLUS.gen.description = "...<a href=""http://globaled.us/PLUS/"">click here to learn more</a>" />

<cfset uStudy.gen = structNew() /> 
<cfset sponsor.uStudy.gen.title = "uStudy.us" />
<cfset sponsor.uStudy.gen.url = "http://uStudy.us" />
<cfset sponsor.uStudy.gen.logo = "http://studentsabroad.com/images/logo/uStudy-logo.jpg" />
<cfset sponsor.uStudy.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/uStudy-logo-sm.gif" />
<cfset sponsor.uStudy.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/uStudy-logo-md.gif" />
<cfset sponsor.uStudy.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/uStudy-logo-lg.gif" />
<cfset sponsor.uStudy.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/uStudy-logo-xl.gif" />
<cfset sponsor.uStudy.gen.banner_1 = "" />
<cfset sponsor.uStudy.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/uStudy-logo-ls.gif" />
<cfset sponsor.uStudy.gen.logo_lead_sponsor = "no" />
<cfset sponsor.uStudy.gen.logo_change = "no" />
<cfset sponsor.uStudy.gen.logo_full = "no" />
<cfset sponsor.uStudy.gen.logo_lg = "no" />
<cfset sponsor.uStudy.gen.logo_med = "no" />
<cfset sponsor.uStudy.gen.logo_sm = "yes" />
<cfset sponsor.uStudy.gen.title_desc = "uStudy.us" />
<cfset sponsor.uStudy.gen.listing_desc = "Online Courses Prepare Students for a Worry-Free Abroad Experience For Students Coming to the United States.  Certificates Available for Course Credit with Participating Programs." />
<cfset sponsor.uStudy.gen.description = "Offered specifically to international students seeking study in the United States, the UStudy.us online courses seek to enhance the U.S. study abroad experience by helping international students from any country to choose an appropriate U.S. university and then prepare for making the transition to study in the U.S. With resources for practical support (emphasizing health and safety) and intellectual support (emphasizing a greater understanding of your home and U.S. culture), the goal of these courses is to guide international students coming to study in the U.S., to utilize resources about colleges & universities, finances, health & safety, culture and world affairs...<a href=""http://ustudy.us/"">Log in to today to begin the free online course</a>" />

<cfset CIEE.gen = structNew() /> 
<cfset sponsor.CIEE.gen.title = "CIEE" />
<cfset sponsor.CIEE.gen.url = "http://www.ciee.org" />
<cfset sponsor.CIEE.gen.logo = "http://studentsabroad.com/images/logo/CIEE-logo.jpg" />
<cfset sponsor.CIEE.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-sm.gif" />
<cfset sponsor.CIEE.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-md.gif" />
<cfset sponsor.CIEE.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-lg.gif" />
<cfset sponsor.CIEE.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-xl.gif" />
<cfset sponsor.CIEE.gen.banner_1 = "" />
<cfset sponsor.CIEE.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-ls.gif" />
<cfset sponsor.CIEE.gen.logo_lead_sponsor = "no" />
<cfset sponsor.CIEE.gen.logo_change = "no" />
<cfset sponsor.CIEE.gen.logo_full = "no" />
<cfset sponsor.CIEE.gen.logo_lg = "no" />
<cfset sponsor.CIEE.gen.logo_med = "yes" />
<cfset sponsor.CIEE.gen.logo_sm = "no" />
<cfset sponsor.CIEE.gen.title_desc = "CIEE" />
<cfset sponsor.CIEE.gen.listing_desc = "Aims to Promote International Student Exchange by Developing Programs for Students and Teachers, Advocating through Public and Private Organizations and Performing Topic-Related Studies on the Efficacy of Study Abroad." />
<cfset sponsor.CIEE.gen.description = "...<a href=""http://www.ciee.org"">click here to learn more</a>" />

<cfset CIEE.ie = structNew() /> 
<cfset sponsor.CIEE.ie.title = "CIEE" />
<cfset sponsor.CIEE.ie.url = "http://www.ciee.org" />
<cfset sponsor.CIEE.ie.logo = "http://studentsabroad.com/images/logo/CIEE-logo.jpg" />
<cfset sponsor.CIEE.ie.logo_s = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-sm.gif" />
<cfset sponsor.CIEE.ie.logo_m = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-md.gif" />
<cfset sponsor.CIEE.ie.logo_l = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-lg.gif" />
<cfset sponsor.CIEE.ie.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-xl.gif" />
<cfset sponsor.CIEE.ie.banner_1 = "" />
<cfset sponsor.CIEE.ie.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-ls.gif" />
<cfset sponsor.CIEE.ie.logo_lead_sponsor = "no" />
<cfset sponsor.CIEE.ie.logo_change = "no" />
<cfset sponsor.CIEE.ie.logo_full = "no" />
<cfset sponsor.CIEE.ie.logo_lg = "no" />
<cfset sponsor.CIEE.ie.logo_med = "yes" />
<cfset sponsor.CIEE.ie.logo_sm = "no" />
<cfset sponsor.CIEE.ie.title_desc = "CIEE in Ireland" />
<cfset sponsor.CIEE.ie.listing_desc = "" />
<cfset sponsor.CIEE.ie.description = "Northern Ireland, despite coming to an agreement to end ethno-political conflict, still experiences a sectarian division between politically and religiously intermingled communities. The seminar offered by CIEE will give participants an opportunity to learn about the resolution and reconciliation process and will offer context to the situation. It will feature a wide range of perspectives, from political and economic to social and artistic...<a href=""http://www.ciee.org"">click here to learn more about the program</a>" />

<cfset CIEE.mx = structNew() /> 
<cfset sponsor.CIEE.mx.title = "CIEE" />
<cfset sponsor.CIEE.mx.url = "http://www.ciee.org" />
<cfset sponsor.CIEE.mx.logo = "http://studentsabroad.com/images/logo/CIEE-logo.jpg" />
<cfset sponsor.CIEE.mx.logo_s = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-sm.gif" />
<cfset sponsor.CIEE.mx.logo_m = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-md.gif" />
<cfset sponsor.CIEE.mx.logo_l = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-lg.gif" />
<cfset sponsor.CIEE.mx.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-xl.gif" />
<cfset sponsor.CIEE.mx.banner_1 = "" />
<cfset sponsor.CIEE.mx.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CIEE-logo-ls.gif" />
<cfset sponsor.CIEE.mx.logo_lead_sponsor = "no" />
<cfset sponsor.CIEE.mx.logo_change = "no" />
<cfset sponsor.CIEE.mx.logo_full = "no" />
<cfset sponsor.CIEE.mx.logo_lg = "no" />
<cfset sponsor.CIEE.mx.logo_med = "yes" />
<cfset sponsor.CIEE.mx.logo_sm = "no" />
<cfset sponsor.CIEE.mx.title_desc = "CIEE in Mexico" />
<cfset sponsor.CIEE.mx.listing_desc = "" />
<cfset sponsor.CIEE.mx.description = "The winter program at the CIEE Study Center in Guanajuato is designed for students with two or more semesters of college&mdash;level Spanish and an interest in speeding up their Spanish language learning&mdash;and understanding of Mexican culture&mdash;with a three-week program in January...<a href=""http://www.ciee.org"">click here to learn more</a>" />

<cfset IAU.gen = structNew() /> 
<cfset sponsor.IAU.gen.title = "IAU College" />
<cfset sponsor.IAU.gen.url = "http://www.iaufrance.org/" />
<cfset sponsor.IAU.gen.logo = "http://studentsabroad.com/images/logo/Institute-for-American-Universities-logo.jpg" />
<cfset sponsor.IAU.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/IAU-logo-sm.gif" />
<cfset sponsor.IAU.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/IAU-logo-md.gif" />
<cfset sponsor.IAU.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/IAU-logo-lg.gif" />
<cfset sponsor.IAU.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/IAU-logo-xl.gif" />
<cfset sponsor.IAU.gen.banner_1 = "" />
<cfset sponsor.IAU.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/IAU-logo-ls.gif" />
<cfset sponsor.IAU.gen.logo_lead_sponsor = "no" />
<cfset sponsor.IAU.gen.logo_change = "no" />
<cfset sponsor.IAU.gen.logo_full = "no" />
<cfset sponsor.IAU.gen.logo_lg = "no" />
<cfset sponsor.IAU.gen.logo_med = "yes" />
<cfset sponsor.IAU.gen.logo_sm = "no" />
<cfset sponsor.IAU.gen.title_desc = "IAU College" />
<cfset sponsor.IAU.gen.listing_desc = "The Institute for American Universities, Located in Aix-en-Provence in France, Delivers Quality Curriculum Through One of the Oldest and Largest Abroad Programs in Europe." />
<cfset sponsor.IAU.gen.description = "For all the French language and culture majors out there, the Institute for American Universities has a great immersion program at the University of Provence, Aix-Marseille. Here, you will have the opportunity to go on special receptions, cultural activities and excursions--all in French. For more information on the Programs, which are offered during all terms...<a href=""http://www.iaufrance.org/"">click here to learn more</a>" />

<cfset CEA.gen = structNew() /> 
<cfset sponsor.CEA.gen.title = "CEA Global Education" />
<cfset sponsor.CEA.gen.url = "http://www.gowithcea.com/" />
<cfset sponsor.CEA.gen.logo = "http://studentsabroad.com/images/logo/CEA-logo.jpg" />
<cfset sponsor.CEA.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/CEA-logo-sm.gif" />
<cfset sponsor.CEA.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/CEA-logo-md.gif" />
<cfset sponsor.CEA.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/CEA-logo-lg.gif" />
<cfset sponsor.CEA.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CEA-logo-xl.gif" />
<cfset sponsor.CEA.gen.banner_1 = "" />
<cfset sponsor.CEA.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CEA-logo-ls.gif" />
<cfset sponsor.CEA.gen.logo_lead_sponsor = "no" />
<cfset sponsor.CEA.gen.logo_change = "no" />
<cfset sponsor.CEA.gen.logo_full = "no" />
<cfset sponsor.CEA.gen.logo_lg = "no" />
<cfset sponsor.CEA.gen.logo_med = "yes" />
<cfset sponsor.CEA.gen.logo_sm = "no" />
<cfset sponsor.CEA.gen.title_desc = "CEA Global Education" />
<cfset sponsor.CEA.gen.listing_desc = "One of the Fastest Growing Abroad Resources, CEA Global Education Aims to Facilitate Relationships with Abroad Program Administrators for U.S. and Canadian Students to Study in the World's Top Abroad Destinations." />
<cfset sponsor.CEA.gen.description = "...<a href=""http://www.gowithcea.com/"">click here to learn more</a>" />

<cfset CEA.it = structNew() /> 
<cfset sponsor.CEA.it.title = "CEA Global Education" />
<cfset sponsor.CEA.it.url = "http://www.gowithcea.com/" />
<cfset sponsor.CEA.it.logo = "http://allabroad.us/images/logo/CEA-logo.jpg" />
<cfset sponsor.CEA.it.logo_s = "http://allabroad.us/images/sponsors/logo/CEA-logo-sm.gif" />
<cfset sponsor.CEA.it.logo_m = "http://allabroad.us/images/sponsors/logo/CEA-logo-md-it.jpg" />
<cfset sponsor.CEA.it.logo_l = "http://allabroad.us/images/sponsors/logo/CEA-logo-lg.gif" />
<cfset sponsor.CEA.it.logo_xl = "http://allabroad.us/images/sponsors/logo/CEA-logo-xl.gif" />
<cfset sponsor.CEA.it.banner_1 = "http://allabroad.us/images/sponsors/banner/banner-CEA-it.jpg" />
<cfset sponsor.CEA.it.logo_ls = "http://allabroad.us/images/sponsors/logo/CEA-logo-ls.gif" />
<cfset sponsor.CEA.it.logo_lead_sponsor = "no" />
<cfset sponsor.CEA.it.logo_change = "no" />
<cfset sponsor.CEA.it.logo_full = "no" />
<cfset sponsor.CEA.it.logo_lg = "no" />
<cfset sponsor.CEA.it.logo_med = "yes" />
<cfset sponsor.CEA.it.logo_sm = "no" />
<cfset sponsor.CEA.it.title_desc = "CEA Global Education" />
<cfset sponsor.CEA.it.listing_desc = "Over 20 worldwide locations in 13 countries. See where your education can take you!" />
<cfset sponsor.CEA.it.description = "...<a href=""http://www.gowithcea.com/"">click here to learn more</a>" />

<cfset DIA.gen = structNew() /> 
<cfset sponsor.DIA.gen.title = "Danish Institute for Abroad" />
<cfset sponsor.DIA.gen.url = "www.dis.dk/" />
<cfset sponsor.DIA.gen.logo = "http://studentsabroad.com/images/logo/Danish-Institute-for-Study-Abroad-logo.jpg" />
<cfset sponsor.DIA.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/Danish-Institute-for-Study-Abroad-logo-sm.gif" />
<cfset sponsor.DIA.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/Danish-Institute-for-Study-Abroad-logo-md.gif" />
<cfset sponsor.DIA.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/Danish-Institute-for-Study-Abroad-logo-lg.gif" />
<cfset sponsor.DIA.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/Danish-Institute-for-Study-Abroad-logo-xl.gif" />
<cfset sponsor.DIA.gen.banner_1 = "" />
<cfset sponsor.DIA.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/Danish-Institute-for-Study-Abroad-logo-ls.gif" />
<cfset sponsor.DIA.gen.logo_lead_sponsor = "no" />
<cfset sponsor.DIA.gen.logo_change = "no" />
<cfset sponsor.DIA.gen.logo_full = "no" />
<cfset sponsor.DIA.gen.logo_lg = "no" />
<cfset sponsor.DIA.gen.logo_med = "no" />
<cfset sponsor.DIA.gen.logo_sm = "yes" />
<cfset sponsor.DIA.gen.title_desc = "Danish Institute for Abroad" />
<cfset sponsor.DIA.gen.listing_desc = "Provides great opportunity to learn and experience Europe" />
<cfset sponsor.DIA.gen.description = "As one of the most historically political, cultural and economic centers of Eastern Europe, the Czech Republic boasts 1.2 million inhabitants and lots of international travelers. The Prague, a captivating city, is also listed as a UNESCO World Heritage Site. After the end of communism in the late 20th century, the Czech Republic openly allowed visitors to come and see its grand churches, castles, cobblestone streets and bridges. ISA study abroad students have the opportunity to study in Prague at Charles University for history, culture and politics or at the University of Economics in International Business and Economics...<a href=""www.dis.dk/ 
"">click here to learn more</a>" />

<cfset HTH.gen = structNew() /> 
<cfset sponsor.HTH.gen.title = "HTH WorldWide" />
<cfset sponsor.HTH.gen.url = "http://www.hthworldwide.com/" />
<cfset sponsor.HTH.gen.logo = "" />
<cfset sponsor.HTH.gen.logo_s = "" />
<cfset sponsor.HTH.gen.logo_m = "" />
<cfset sponsor.HTH.gen.logo_l = "" />
<cfset sponsor.HTH.gen.logo_xl = "" />
<cfset sponsor.HTH.gen.banner_1 = "" />
<cfset sponsor.HTH.gen.logo_ls = "" />
<cfset sponsor.HTH.gen.logo_lead_sponsor = "no" />
<cfset sponsor.HTH.gen.logo_change = "no" />
<cfset sponsor.HTH.gen.logo_full = "no" />
<cfset sponsor.HTH.gen.logo_lg = "no" />
<cfset sponsor.HTH.gen.logo_med = "no" />
<cfset sponsor.HTH.gen.logo_sm = "yes" />
<cfset sponsor.HTH.gen.title_desc = "HTH WorldWide" />
<cfset sponsor.HTH.gen.listing_desc = "Highway to Health Worldwide Generates Comprehensive Destination-Specific Health and Security Information and Provides Travel Insurance for Abroad Students." />
<cfset sponsor.HTH.gen.description = "...<a href=""http://www.hthworldwide.com"">click here to learn more</a>" />

<cfset ISOS.gen = structNew() /> 
<cfset sponsor.ISOS.gen.title = "International SOS" />
<cfset sponsor.ISOS.gen.url = "http://www.internationalsos.com/en/" />
<cfset sponsor.ISOS.gen.logo = "" />
<cfset sponsor.ISOS.gen.logo_s = "" />
<cfset sponsor.ISOS.gen.logo_m = "" />
<cfset sponsor.ISOS.gen.logo_l = "" />
<cfset sponsor.ISOS.gen.logo_xl = "" />
<cfset sponsor.ISOS.gen.banner_1 = "" />
<cfset sponsor.ISOS.gen.logo_ls = "" />
<cfset sponsor.ISOS.gen.logo_lead_sponsor = "no" />
<cfset sponsor.ISOS.gen.logo_change = "no" />
<cfset sponsor.ISOS.gen.logo_full = "no" />
<cfset sponsor.ISOS.gen.logo_lg = "no" />
<cfset sponsor.ISOS.gen.logo_med = "no" />
<cfset sponsor.ISOS.gen.logo_sm = "yes" />
<cfset sponsor.ISOS.gen.title_desc = "International SOS" />
<cfset sponsor.ISOS.gen.listing_desc = "International SOS is the World's Leading International Healthcare, Medical Assistance, and Security Services Company." />
<cfset sponsor.ISOS.gen.description = "...<a href=""http://internationalsos.com/en/"">click here to learn more</a>" />

<cfset ISIC.gen = structNew() /> 
<cfset sponsor.ISIC.gen.title = "ISIC" />
<cfset sponsor.ISIC.gen.url = "http://www.myisic.com" />
<cfset sponsor.ISIC.gen.logo = "" />
<cfset sponsor.ISIC.gen.logo_s = "" />
<cfset sponsor.ISIC.gen.logo_m = "" />
<cfset sponsor.ISIC.gen.logo_l = "" />
<cfset sponsor.ISIC.gen.logo_xl = "" />
<cfset sponsor.ISIC.gen.banner_1 = "" />
<cfset sponsor.ISIC.gen.logo_ls = "" />
<cfset sponsor.ISIC.gen.logo_lead_sponsor = "no" />
<cfset sponsor.ISIC.gen.logo_change = "no" />
<cfset sponsor.ISIC.gen.logo_full = "no" />
<cfset sponsor.ISIC.gen.logo_lg = "no" />
<cfset sponsor.ISIC.gen.logo_med = "no" />
<cfset sponsor.ISIC.gen.logo_sm = "yes" />
<cfset sponsor.ISIC.gen.title_desc = "ISIC" />
<cfset sponsor.ISIC.gen.listing_desc = "International Student Identity Cards are Recommended for All Students Heading Overseas.  With Access to a Global Network of Affrodable and Specialized Student Services, the ICIS Card is a Passport to More Than 40,000 Discounts and Benefits in 120 Countries Worldwide." />
<cfset sponsor.ISIC.gen.description = "...<a href=""http://myisic.com"">click here to learn more</a>" />


<cfset STA.gen = structNew() /> 
<cfset sponsor.STA.gen.title = "STA Travel" />
<cfset sponsor.STA.gen.url = "http://www.statravel.com/" />
<cfset sponsor.STA.gen.logo = "" />
<cfset sponsor.STA.gen.logo_s = "" />
<cfset sponsor.STA.gen.logo_m = "" />
<cfset sponsor.STA.gen.logo_l = "" />
<cfset sponsor.STA.gen.logo_xl = "" />
<cfset sponsor.STA.gen.banner_1 = "" />
<cfset sponsor.STA.gen.logo_ls = "" />
<cfset sponsor.STA.gen.logo_lead_sponsor = "no" />
<cfset sponsor.STA.gen.logo_change = "no" />
 <cfset sponsor.STA.gen.logo_full = "no" />
<cfset sponsor.STA.gen.logo_lg = "no" />
<cfset sponsor.STA.gen.logo_med = "no" />
<cfset sponsor.STA.gen.logo_sm = "yes" />
<cfset sponsor.STA.gen.title_desc = "STA Travel" />
<cfset sponsor.STA.gen.listing_desc = "STA is a Specialized Student-Discount Travel Agency that Provides Discounts on Student Airfare, Accommodations and Transportation Passes Around the World." />
<cfset sponsor.STA.gen.description = "...<a href=""http://statravel.com"">click here to learn more</a>" />

<cfset AllAbroad.gen = structNew() /> 
<cfset sponsor.AllAbroad.gen.title = "AllAbroad.us" />
<cfset sponsor.AllAbroad.gen.url = "http://allabroad.us" />
<cfset sponsor.AllAbroad.gen.logo = "http://studentsabroad.com/images/logo/AllAbroad-logo.jpg" />
<cfset sponsor.AllAbroad.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/AllAbroad-logo-sm.gif" />
<cfset sponsor.AllAbroad.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/AllAbroad-logo-md.gif" />
<cfset sponsor.AllAbroad.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/AllAbroad-logo-lg.gif" />
<cfset sponsor.AllAbroad.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/AllAbroad-logo-xl.gif" />
<cfset sponsor.AllAbroad.gen.banner_1 = "" />
<cfset sponsor.AllAbroad.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/AllAbroad-logo-ls.gif" />
<cfset sponsor.AllAbroad.gen.logo_lead_sponsor = "no" />
<cfset sponsor.AllAbroad.gen.logo_change = "no" />
<cfset sponsor.AllAbroad.gen.logo_full = "no" />
<cfset sponsor.AllAbroad.gen.logo_lg = "no" />
<cfset sponsor.AllAbroad.gen.logo_med = "no" />
<cfset sponsor.AllAbroad.gen.logo_sm = "yes" />
<cfset sponsor.AllAbroad.gen.title_desc = "AllAbroad.us" />
<cfset sponsor.AllAbroad.gen.listing_desc = "Connects U.S. College and University Students From Diverse Backgrounds to Useful Resources and Study Abroad Mentors Who Share Personal Experiences and Expertise About Studying Abroad." />
<cfset sponsor.AllAbroad.gen.description = "Studying abroad is an opportunity of a lifetime to start exploring your major in a more hands-on experience. AllAbroad.us will help you gain perspective on students of diverse backgrounds and how you can overcome obstacles like budgeting while abroad...<a href=""ttp://allabroad.us/"">click here learn more</a>" />

<cfset GlobalScholar.gen = structNew() /> 
<cfset sponsor.GlobalScholar.gen.title = "GlobalScholar.us" />
<cfset sponsor.GlobalScholar.gen.url = "http://GlobalScholar.us/" />
<cfset sponsor.GlobalScholar.gen.logo = "http://studentsabroad.com/images/logo/GlobalScholar-logo.jpg" />
<cfset sponsor.GlobalScholar.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/GlobalScholar-logo-sm.gif" />
<cfset sponsor.GlobalScholar.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/GlobalScholar-logo-md.gif" />
<cfset sponsor.GlobalScholar.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/GlobalScholar-logo-lg.gif" />
<cfset sponsor.GlobalScholar.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/GlobalScholar-logo-xl.gif" />
<cfset sponsor.GlobalScholar.gen.banner_1 = "http://studentsabroad.com/images/sponsors/banner/banner-GlobalScholar.gif" />
<cfset sponsor.GlobalScholar.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/GlobalScholar-logo-ls.gif" />
<cfset sponsor.GlobalScholar.gen.logo_lead_sponsor = "yes" />
<cfset sponsor.GlobalScholar.gen.logo_change = "no" />
<cfset sponsor.GlobalScholar.gen.logo_full = "no" />
<cfset sponsor.GlobalScholar.gen.logo_lg = "no" />
<cfset sponsor.GlobalScholar.gen.logo_med = "yes" />
<cfset sponsor.GlobalScholar.gen.logo_sm = "no" />
<cfset sponsor.GlobalScholar.gen.title_desc = "GlobalScholar.us" />
<cfset sponsor.GlobalScholar.gen.listing_desc = "Online Courses Prepare Students for a Worry-Free Experience to Any Abroad Destination.  Certificates Available for Course Credit with Participating Programs." />
<cfset sponsor.GlobalScholar.gen.description = "Studying abroad is an opportunity of a lifetime to start exploring your major in a more hands-on experience. The Global Scholar online courses will introduce you to challenges you will be facing while abroad and how to become acquainted with culture changes coming back to your home country...<a href=""http://globalscholar.us/""> click here register and learn more about the online courses</a>" />

<cfset CGE.gen = structNew() /> 
<cfset sponsor.CGE.gen.title = "Center for Global Education" />
<cfset sponsor.CGE.gen.url = "http://studentsabroad.com/sponsor/" />
<cfset sponsor.CGE.gen.logo = "http://studentsabroad.com/images/logo/CGE-logo.jpg" />
<cfset sponsor.CGE.gen.logo_s = "http://studentsabroad.com/images/sponsors/logo/CGE-logo-sm.gif" />
<cfset sponsor.CGE.gen.logo_m = "http://studentsabroad.com/images/sponsors/logo/CGE-logo-md.gif" />
<cfset sponsor.CGE.gen.logo_l = "http://studentsabroad.com/images/sponsors/logo/CGE-logo-lg.gif" />
<cfset sponsor.CGE.gen.logo_xl = "http://studentsabroad.com/images/sponsors/logo/CGE-logo-xl.gif" />
<cfset sponsor.CGE.gen.banner_1 = "http://studentsabroad.com/images/sponsors/banner/banner-CGE.gif" />
<cfset sponsor.CGE.gen.logo_ls = "http://studentsabroad.com/images/sponsors/logo/CGE-logo-ls.gif" />
<cfset sponsor.CGE.gen.logo_lead_sponsor = "yes" />
<cfset sponsor.CGE.gen.logo_change = "no" />
<cfset sponsor.CGE.gen.logo_full = "no" />
<cfset sponsor.CGE.gen.logo_lg = "no" />
<cfset sponsor.CGE.gen.logo_med = "yes" />
<cfset sponsor.CGE.gen.logo_sm = "no" />
<cfset sponsor.CGE.gen.title_desc = "Center for Global Education" />
<cfset sponsor.CGE.gen.listing_desc = "The Center for Global Education is an International Research and Resource Center that Provides Support for Faculty, Staff, Students and Parents Regarding International Learning, Health, Safety, Diversity and the Impact of Study Abroad on Student Retention and Success." />
<cfset sponsor.CGE.gen.description = "...<a href=""http://studentsabroad.com/sponsor/"">click here to learn more</a>" />

<cfset IESAbroad.gen = structNew() /> 
<cfset sponsor.IESAbroad.gen.title = "IES Abroad" />
<cfset sponsor.IESAbroad.gen.url = "http://www.iesabroad.org/" />
<cfset sponsor.IESAbroad.gen.logo = "" />
<cfset sponsor.IESAbroad.gen.logo_s = "" />
<cfset sponsor.IESAbroad.gen.logo_m = "" />
<cfset sponsor.IESAbroad.gen.logo_l = "" />
<cfset sponsor.IESAbroad.gen.logo_xl = "" />
<cfset sponsor.IESAbroad.gen.banner_1 = "" />
<cfset sponsor.IESAbroad.gen.logo_ls = "" />
<cfset sponsor.IESAbroad.gen.logo_lead_sponsor = "no" />
<cfset sponsor.IESAbroad.gen.logo_change = "no" />
<cfset sponsor.IESAbroad.gen.logo_full = "no" />
<cfset sponsor.IESAbroad.gen.logo_lg = "no" />
<cfset sponsor.IESAbroad.gen.logo_med = "no" />
<cfset sponsor.IESAbroad.gen.logo_sm = "no" />
<cfset sponsor.IESAbroad.gen.title_desc = "IES Abroad" />
<cfset sponsor.IESAbroad.gen.listing_desc = "" />
<cfset sponsor.IESAbroad.gen.description = "" />