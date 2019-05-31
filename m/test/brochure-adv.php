<script language="javascript" type="text/javascript">
<!--Domain name, API url and site url-->
<!--Base url can be modified corresponding to the University/School-->
	var domainname = 'directory.studioabroad.com';
	var baseapiurl = 'https://'+domainname+'/api/index.cfm';
	var basesiteurl = 'https://'+domainname+'/index.cfm';
	var siteurl = 'https://'+domainname+'/';
	var programbrochurecontent ='';
	var applynow = '';
	var inforequest = '';
	var reqadvising = '';
	var prg_id ='';
	var programbrochure = '';
	programbrochurecontent = '<div id="propgrambrochurecontainer"><div id="container"><div id="main-content"><div class="one-col-row"><div class="c1"><div class="program-block"><div class="programDetails"><!--<div id="success">Success</div><div	id="errobox">Error</div>--><div class="programTitle"><div class="left"><!--{PROGRAM_NAME}--></div><div class="right">(F)&nbsp;Featured</div></div><div class="subtitle"><!--{PROGRAM_LOCATIONS}--></div><div class="summary"><table width="100%" border="0" cellspacing="0" cellpadding="3"><tr><td valign="top"><strong>Program Terms:</strong></td><td><!--{PROGRAM_TERMS}--></td><td rowspan="3" align="center" valign="top"><div align="center"><input type="button" name="applynow" id="applynow" value="Apply Now" onclick="apply()" class="formButton"/>&nbsp;<input type="reset" name="requestinfo" id="requestinfo" value="Request Info" onclick="requestinfo()" class="formButton" />&nbsp;<input type="submit" name="print" id="print" value="Print" class="formButton"/></div></td></tr><!--COURSES OFFERED START--><tr><td><strong>Courses Offered:</strong></td><td><a href="{COURSES_OFFERED}">Click here to view</a></td></tr><!--COURSES OFFERED END--><!--HOME PAGE START--><tr><td><strong>Homepage:</strong></td><td bgcolor="#F8F8F8"><a href="{HOME_PAGE}">Click to visit</a></td></tr><!--HOME PAGE END--><!--PROGRAM SPONSOR START--><tr><td><strong>Program Sponsor:</strong></td><td><!--{PROGRAM_SPONSOR}--></td></tr><!--PROGRAM SPONSOR END--><!--BUDGETSHEET START--><tr><td><strong>Budget Sheets:</strong></td><td><!--{BUDGET_DETAILS}--></td></tr><!--BUDGETSHEET END--></table></div><div id="moreDetails"><div class="panel"><div class="panel-title">Dates / Deadlines</div><div class="panel-item"><div class="datDeadline"><table width="903" border="1" cellspacing="0" cellpadding="3" class="tabularData"><tr><td><strong>Term</strong></td><td><strong>Year</strong></td><td><strong>App Deadline</strong></td>			<td><strong>Decision Date</strong></td><td><strong>Start Date</strong></td><td><strong>End Date</strong></td></tr><!--DEADLINES ROWSTART--><tr><td> <!--{DEADLINE_TERM}--></td> <td><!--{DEADLINE_YEAR}--></td><td> <!--{DEADLINE_APP_DL}--></td><td> <!--{DEADLINE_DECISION}--></td><td> <!--{DEADLINE_START_DATE}--></td><td> <!--{DEADLINE_END_DATE}--></td></tr><!--DEADLINES ROWEND--><tr><td colspan="6">** Indicates rolling admission application process. Applicants will be immediately notified of acceptance into this program and be able to complete post-decision materials prior to the terms application deadline.</td></tr></table></div></div></div><div class="panel"><div class="panel-title">Fact Sheet</div><div class="panel-item"><div class="factSheet"><table width="100%" border="0" cellspacing="5" cellpadding="0"><!--FACESHEET ROWSTART--><tr><!--FACESHEET COLUMSTART--><td width="25%"><!--{PARAMGLOSS}--><!--{PARAMTEXT}--></td><td width="25%"><!--{PARAMVALUE}--></td><!--FACESHEET COLUMEND--></tr><!--FACESHEET ROWEND--></table></div></div></div><div class="panel"><div class="panel-title">Program Description</div><div class="panel-item"><div class="details"><!--{PROGRAM_DESCRIPTION}--></div></div></div><!--TESTIMONIAL START--><div class="panel"><div class="panel-title">Testimonial</div><div class="panel-item"><div class="testimonial"><div class="heading"><!--{TESTIMONIAL_APP_ITEM}--> </div><div class="details"> <!--{TESTIMONIAL_RESPONSE}--> <br /><!--{TESTIMONIAL_TERM}--><!--{TESTIMONIAL_YEAR}--> </div><div class="viewmore" align="right"><a href="javascript:void();">Read what others have said about this program</a></div></div></div></div><!--TESTIMONIAL END--><!--REVIEW START--><div class="panel"><div class="panel-title">Program Reviews</div><div class="panel-item"><table width="100%" border="0" cellspacing="5" cellpadding="0"><!--REVIEW ROWSTART--><tr><!--REVIEW COLUMSTART--><td align="left"><!--REVIEW FIRST NAME--><!--REVIEW MIDDLE NAME--><!--REVIEW LAST NAME--><!--REVIEW PROGRAM TERM--><!--REVIEW PROGRAM YEAR--></td><!--REVIEW COLUMEND--></tr><tr align="left"><td><!--REVIEW RESPONSE DATA--></td></tr><!--REVIEW ROWEND--></table></div></div><!--REVIEW END--><!--RATINGS START--><div class="panel"><div class="panel-title">Program Ratings</div><div class="panel-item"><table width="100%" border="0" cellspacing="5" cellpadding="0"><!--RATINGS ROWSTART--><tr><!--RATINGS COLUMSTART--><td width="50%" valign="top" align="center" class="padding left-bdr bg-white-color"><!--RATINGS APP_ITEM_TEXT--></td><td width="50%" valign="top" align="center" class="padding left-bdr bg-white-color"><!--RATINGS STARS--></td><!--RATINGS COLUMEND--></tr><!--RATINGS ROWEND--></table></div></div><!--RATINGS END-->	</div></div><div align="center"><input type="button" name="applynow" id="aplynow" value="Apply Now" onclick="apply()" class="formButton"/>&nbsp;<input type="reset" name="requestinfo" id="requstinfo" value="Request Info" onclick="requestinfo()" class="formButton" />&nbsp;<input type="submit" name="prInt" id="prnt" value="Print" class="formButton"/></div></div></div></div></div><div id="footer" align="center"> By Terra Dotta. Technology for educating the world. Copyright Terra Dotta, LLC. All Rights Reserved. </div></div></div>';
<!--Function used to call program brochure API-->
<!--Function used to get url values-->
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
function callProgramBrochureApi(){
	programbrochure = programbrochurecontent;
	var url = baseapiurl+'?callname=getprogrambrochure&ResponseEncoding=json';
	var hash = getUrlVars();
	if(hash['program_id'])
		prg_id=hash['program_id'];
	var head= document.getElementsByTagName('head')[0];
	var script= document.createElement('script');
	script.type= 'text/javascript';
	if(prg_id!='' && prg_id!=0)
		script.src= url+'&program_id='+prg_id;
	else
		alert('Program ID is invalid');
	head.appendChild(script);
}

 <!--Function to get program details to display on the page-->
function _cb_getprogrambrochure(root)
{
	deadlinerwString = programbrochure.substring(programbrochure.indexOf('<!--DEADLINES ROWSTART-->')+25, programbrochure.indexOf('<!--DEADLINES ROWEND-->'));
	courserwString = programbrochure.substring(programbrochure.indexOf('<!--COURSES OFFERED START-->')+28, programbrochure.indexOf('<!--COURSES OFFERED END-->'));
	budgetstring = programbrochure.substring(programbrochure.indexOf('<!--BUDGETSHEET START-->')+24, programbrochure.indexOf('<!--BUDGETSHEET END-->'));
	homepagestring = programbrochure.substring(programbrochure.indexOf('<!--HOME PAGE START-->')+22, programbrochure.indexOf('<!--HOME PAGE END-->'));
	prgsponsorstring = programbrochure.substring(programbrochure.indexOf('<!--PROGRAM SPONSOR START-->')+28, programbrochure.indexOf('<!--PROGRAM SPONSOR END-->'));
	testimonialstring = programbrochure.substring(programbrochure.indexOf('<!--TESTIMONIAL START-->')+24, programbrochure.indexOf('<!--TESTIMONIAL END-->'));
	reviewrwstring = programbrochure.substring(programbrochure.indexOf('<!--REVIEW ROWSTART-->')+22,programbrochure.indexOf('<!--REVIEW ROWEND-->'));
	ratingrwstring = programbrochure.substring(programbrochure.indexOf('<!--RATINGS ROWSTART-->')+23,programbrochure.indexOf('<!--RATINGS ROWEND-->'));
	<!--Variables used to get program details-->
	var details = root.DETAILS;
	var prg_name = '';
	var prg_description = '';
	var prg_home_page = '';
	var prg_sponsor_name = '';
	var prg_city = '';
	var prg_country = '';
	var prg_term = '';
	var budget_title = '';
	var budget_term = '';
	var course_offered = '';
	var testi_app_item_text = '';
	var testi_resp_data = '';
	var testi_prg_year = '';
	var testi_prg_term = '';
	var appendlocation = '';
	var appendbudgets = '<a href="{BUDGET_TERM}">{BUDGET_TITLE}</a>';
	var splitbudgettitle = '';
	var splitbudgetterm = '';
	var appendbudgetitems = '';
	var dl_app_term ='';
	var dl_app_year ='';
	var dl_app_deadline = '';
	var	dl_app_decision = '';
	var dl_term_start = '';
	var dl_term_end = '';
	var appenddeadlines = '';
	var prev_param = "";
	var appendParameter = '';
	var rplcedcourseRow = '';
	var rplcedbudgetRow ='';
	var rplcedhomepageRow = '';
	var rplcedsponsorRow = '';
	var testimonialrplcedRow = '';
	var arr_params = new Array(0);
	var appendparametertext = '';
	var appendparametervalue = '';
	var appendparametergloss = '';
	var splitparametertext = '';
	var splitparametervalue = '';
	var splitparametergloss = '';
	var fullrwstring = '';
	var featuredimage = 'Featured Program&nbsp;';
	var prg_desc = '';
	var appendcomma = ', ';
	var rating_app_item_text='';
	var rating_stars='';
	var review_app_item_text='';
	var review_program_year='';
	var review_program_term='';
	var review_name_publishable='';
	var review_user_first_name='';
	var review_user_last_name='';
	var review_user_middle_name='';
	var review_response='';
	var appendratings='';
	var appendreviews='';
	if(details){
		for (var key in details) {
			if(key == 'PROGRAM_NAME')
				prg_name = details[key];
			if(key == 'PROGRAM_BROCHURE'){
				prg_desc = details[key];
				if(prg_desc.indexOf('src="_customtags')!=-1){
				prg_description = prg_desc.replace(/src="_customtags/g,'src="'+siteurl+'_customtags');
				}
				if(prg_desc.indexOf('src="/_customtags')!=-1){
				prg_description = prg_desc.replace(/src="\/_customtags/g,'src="'+siteurl+'_customtags');
				}
				if(prg_description =='')
				prg_description = prg_desc;
			}
			if(key == 'PROGRAM_HOME_PAGE'){
				prg_home_page = details[key];
				if(prg_home_page!='')
				rplcedhomepageRow = homepagestring.replace('{HOME_PAGE}', prg_home_page);
			}
			if(key == 'SPONSOR_NAME')
				prg_sponsor_name = details[key];
				if(prg_sponsor_name!='')
				rplcedsponsorRow = prgsponsorstring.replace('<!--{PROGRAM_SPONSOR}-->', prg_sponsor_name);
				<!--Locations-->
			if(key == 'LOCATIONS'){
				var locObj = details[key];
				for(var loc in locObj){
					if(loc && typeof locObj[loc]=='object'){
						var locObj1 = locObj[loc];
						for(var loc1 in locObj1){
							if(loc1 == 'PROGRAM_CITY')
								prg_city = locObj1[loc1];
							if(loc1 == 'PROGRAM_COUNTRY')
								prg_country = locObj1[loc1];
						}
					}
				}
			}
			<!--Locations-->
			<!--Terms-->
			if(key == 'TERMS'){
				var termObj = details[key];
				for(var term in termObj){
					if(term && typeof termObj[term]=='object'){
						var termObj1 = termObj[term];
						for(term1 in termObj1){
							if(term1 == 'PROGRAM_TERM')
								prg_term = termObj1[term1];
							else if(term1 && typeof termObj1[term1]=='object'){
								var termObj2 = termObj1[term1];
								for(var term2 in termObj2){
									if(prg_term!='')
										prg_term = prg_term + appendcomma + termObj2[term2];
									else
										prg_term = termObj2[term2]
								}
							}
						}
					}
				}
			}
			<!--Terms-->
			<!--Budget sheet-->
			if(key == 'BUDGETSHEETS'){
				if(key && typeof details[key]=='object'){
					var budgetObj = details[key];
					for(var budget in budgetObj){
						if(budget && typeof budgetObj[budget]=='object'){
							var budgetObj1 = budgetObj[budget];
							for(var budget1 in budgetObj1){
								if(budget1 == 'BUDGET_TITLE'){
									budget_title = budgetObj1[budget1];
								}
								else if(budget1 && typeof budgetObj1[budget1]=='object'){
									var budgetObj2 = budgetObj1[budget1];
									for(var budget2 in budgetObj2){
										if(budget2 == 'BUDGET_TITLE')
											if(budget_title!='')
												budget_title = budget_title + ', ' + budgetObj2[budget2];
											else
												budget_title = budgetObj2[budget2];
										if(budget2 == 'BUDGET_TERM'){
											if(budget2 && typeof budgetObj2[budget2]=='object'){
												var budgettermObj = budgetObj2[budget2];
												for(var budgetterm in budgettermObj){
													if(budgetterm && typeof budgettermObj[budgetterm]=='object'){
														var budgettermObj1 = budgettermObj[budgetterm];
														for(var budgetterm1 in budgettermObj1){
															if(budget_term!='')
																budget_term = budget_term + ','+ siteurl+budgettermObj1[budgetterm1];
															else
																budget_term = siteurl+budgettermObj1[budgetterm1];
														}
													}
												}
											}
										}
									}
								}
								if(budget_term == ''){
									if(budget1 == 'BUDGET_TERM'){
										var singlebudgettermObj = budgetObj1[budget1];
										for(var singlebudgetterm in	singlebudgettermObj){
											var singlebudgettermObj1 = siteurl+singlebudgettermObj[singlebudgetterm];
											for(var singlebudgetterm1 in singlebudgettermObj1){
												budget_term = siteurl+singlebudgettermObj1[singlebudgetterm1];
											}
										}
									}
								}
							}
						}
					}
				}
			}
			<!--Budget sheet-->
			<!--Courses offered-->
			if(key == 'COURSES_OFFERED'){
				var courseObj = details[key];
				for(var course in courseObj){
					var courselinkObj = courseObj[course];
					for(var courselink in courselinkObj){
						course_offered = siteurl+courselinkObj[courselink];
					}
					rplcedcourseRow = courserwString.replace('{COURSES_OFFERED}', course_offered);
				}
			}
			<!--Courses offered-->
			<!--Apply now-->
			if(key == 'APPLY_NOW'){
				var applyObj = details[key];
				for(var applylink in applyObj){
					var applyObj1 = applyObj[applylink];
					for(var applylink1 in applyObj1){
						if(applylink1 == 'HREF')
							applynow = siteurl+applyObj1[applylink1];
					}
				}
			}
			<!--Apply now-->
			<!--Info request-->
			if(key == 'INFO_REQUEST'){
				var inforeqObj = details[key];
				for(var inforeqlink in inforeqObj){
					var inforeqObj1 = inforeqObj[inforeqlink];
					for(var inforeqlink1 in inforeqObj1){
						if(inforeqlink1 == 'HREF')
							inforequest = siteurl+inforeqObj1[inforeqlink1];
					}
				}
			}
			<!--Info request-->
			<!--Request advising-->
			if(key == 'REQUEST_ADVISING'){
				var reqadvObj = details[key];
				for(var reqadvlink in reqadvObj){
					var reqadvObj1 = reqadvObj[reqadvlink];
					for(var reqadvlink1 in reqadvObj1){
						if(reqadvlink1 == 'HREF')
							reqadvising = siteurl+reqadvObj1[reqadvlink1];
					}
				}
			}
			<!--Request advising-->
			<!--Testimonial-->
			if(key == 'TESTIMONIALS'){
				if(key && typeof details[key]=='object'){
					var testimonialObj = details[key];
					for(var testimo in testimonialObj){
						var testimonialObj1 = testimonialObj[testimo];
						for(var testimon in testimonialObj1){
							if(testimon == 'APP_ITEM_TEXT')
								testi_app_item_text = testimonialObj1[testimon];
							if(testimon == 'RESPONSE_DATA')
								testi_resp_data = testimonialObj1[testimon];
							if(testimon == 'PROGRAM_YEAR')
								testi_prg_year = testimonialObj1[testimon];
							if(testimon == 'PROGRAM_TERM')
								testi_prg_term = testimonialObj1[testimon];
						}
					}
				}
			}
			<!--Testimonial-->
			
			<!--Review-->
			if(key == 'REVIEWS'){
				if(key && typeof details[key]=='object'){
					var reviewObj = details[key];
					for(var review in reviewObj){
						var reviewObj1 = reviewObj[review];
						for(var review1 in reviewObj1){
							if(review1 && typeof reviewObj1[review1]=='object'){	
								var reviewObj2 = reviewObj1[review1];
							for(var review2 in reviewObj2){
										if(review2 == 'RESPONSE_DATA')
											review_response = reviewObj2[review2];
										if(review2 == 'PROGRAM_YEAR')
											review_program_year = reviewObj2[review2];
										if(review2 == 'PROGRAM_TERM')
											review_program_term = reviewObj2[review2];	
										if(review2 == 'NAME_PUBLISHABLE')
											review_name_publishable = reviewObj2[review2];	
										if(review_name_publishable!='')	
										{
											if(review2 == 'USER_FIRST_NAME')
												review_user_first_name = reviewObj2[review2];
											if(review2 == 'USER_LAST_NAME')
												review_user_last_name = reviewObj2[review2];
											if(review2 == 'USER_MIDDLE_NAME')
												review_user_middle_name = reviewObj2[review2];	
											
										}										
										rplcedRow=	reviewrwstring.replace('<!--REVIEW RESPONSE DATA-->', review_response);
										rplcedRow=	rplcedRow.replace('<!--REVIEW PROGRAM YEAR-->', review_program_year);
										rplcedRow=	rplcedRow.replace('<!--REVIEW PROGRAM TERM-->', review_program_term);
										rplcedRow=	rplcedRow.replace('<!--REVIEW FIRST NAME-->', review_user_first_name);
										rplcedRow=	rplcedRow.replace('<!--REVIEW LAST NAME-->', review_user_last_name);
										rplcedRow=	rplcedRow.replace('<!--REVIEW MIDDLE NAME-->', review_user_middle_name);
										if(appendreviews!='')
											appendreviews = appendreviews + rplcedRow;
										else
											appendreviews = rplcedRow;
									}							
							}	
							else{
									if(review1 == 'RESPONSE_DATA')
										review_response = reviewObj1[review1];
									if(review1 == 'PROGRAM_YEAR')
										review_program_year = reviewObj1[review1];
									if(review1 == 'PROGRAM_TERM')
										review_program_term = reviewObj1[review1];	
									if(review1 == 'NAME_PUBLISHABLE')
										review_name_publishable = reviewObj1[review1];	
									if(review_name_publishable!='')	
										{
											if(review1 == 'USER_FIRST_NAME')
												review_user_first_name = reviewObj1[review1];
											if(review1 == 'USER_LAST_NAME')
												review_user_last_name = reviewObj2[review1];
											if(review1 == 'USER_MIDDLE_NAME')
												review_user_middle_name = reviewObj1[review1];	
											
										}
										rplcedRow=	reviewrwstring.replace('<!--REVIEW RESPONSE DATA-->', review_response);
										rplcedRow=	rplcedRow.replace('<!--REVIEW PROGRAM YEAR-->', review_program_year);
										rplcedRow=	rplcedRow.replace('<!--REVIEW PROGRAM TERM-->', review_program_term);
										rplcedRow=	rplcedRow.replace('<!--REVIEW FIRST NAME-->', review_user_first_name);
										rplcedRow=	rplcedRow.replace('<!--REVIEW LAST NAME-->', review_user_last_name);
										rplcedRow=	rplcedRow.replace('<!--REVIEW MIDDLE NAME-->', review_user_middle_name);
										appendreviews = rplcedRow;							
							}
						}
					}
				}
			}
			<!--Review-->
			
			<!--Ratings-->
			if(key == 'RATINGS'){
				if(key && typeof details[key]=='object'){
					var ratingObj = details[key];
					for(var rating in ratingObj){
						var ratingObj1 = ratingObj[rating];
						for(var rating1 in ratingObj1){
							if(rating1 && typeof ratingObj1[rating1]=='object'){
								var ratingObj2 = ratingObj1[rating1];	
									for(var rating2 in ratingObj2){
										if(rating2 == 'APP_ITEM_TEXT')
											rating_app_item_text = ratingObj2[rating2];
										if(rating2 == 'RATING_STARS')
											rating_stars = ratingObj2[rating2];
										rplcedRow=	ratingrwstring.replace('<!--RATINGS APP_ITEM_TEXT-->', rating_app_item_text);
										rplcedRow=	rplcedRow.replace('<!--RATINGS STARS-->', rating_stars);
										if(appendratings!='')
											appendratings = appendratings + rplcedRow;
										else
											appendratings = rplcedRow;
									}			
								}	
							else{
								if(rating1 == 'APP_ITEM_TEXT')
									rating_app_item_text = ratingObj1[rating1];
								if(rating1 == 'RATING_STARS')
									rating_stars = ratingObj1[rating1];
								rplcedRow=	ratingrwstring.replace('<!--RATINGS APP_ITEM_TEXT-->', rating_app_item_text);
								rplcedRow=	rplcedRow.replace('<!--RATINGS STARS-->', rating_stars);
								appendratings = rplcedRow;	
							}
							
						}
					}
				}
			}
			
			<!--Ratings-->
			
			<!--DEADLINES-->
			if(key == 'DATES'){
				if(key && typeof details[key]=='object'){
					var deadlineObj = details[key];
					for(var deadline in deadlineObj){
						var deadlineObj1 = deadlineObj[deadline];
						for(var deadline1 in deadlineObj1){
							 if(deadline1 && typeof deadlineObj1[deadline1]=='object'){
								var deadlineObj2 = deadlineObj1[deadline1];
								for(var deadline2 in deadlineObj2){
									if(deadline2 == 'APP_TERM')
										dl_app_term = deadlineObj2[deadline2];
									if(deadline2 == 'APP_YEAR')
										dl_app_year = deadlineObj2[deadline2];
									if(deadline2 == 'APP_DEADLINE'){
										dl_app_deadline = deadlineObj2[deadline2];
										if(dl_app_deadline!='' ){
											split_dl_app_deadline = dl_app_deadline.split(' ');
											split_dl_app_deadline_hypen = split_dl_app_deadline[0].split('-');
											dl_app_deadline = split_dl_app_deadline_hypen[1] +'/'+split_dl_app_deadline_hypen[2]+'/'+split_dl_app_deadline_hypen[0];
										}
									}
									if(deadline2 == 'APP_DECISION'){
										dl_app_decision = deadlineObj2[deadline2];
										if(dl_app_decision!='' ){
											split_dl_app_decision = dl_app_decision.split(' ');
											split_dl_app_decision_hypen = split_dl_app_decision[0].split('-');
											dl_app_decision = split_dl_app_decision_hypen[1] +'/'+split_dl_app_decision_hypen[2]+'/'+split_dl_app_decision_hypen[0];
										}
									}
									if(deadline2 == 'TERM_START'){
										dl_term_start = deadlineObj2[deadline2];
										if(dl_term_start!=''){
											split_dl_term_start = dl_term_start.split(' ');
											split_dl_term_start_hypen = split_dl_term_start[0].split('-');
											dl_term_start = split_dl_term_start_hypen[1] +'/'+split_dl_term_start_hypen[2]+'/'+split_dl_term_start_hypen[0];
										}
									}
									if(deadline2 == 'TERM_END'){
										dl_term_end = deadlineObj2[deadline2];
										if(dl_term_end!='' ){
											split_dl_term_end = dl_term_end.split(' ');
											split_dl_term_end_hypen = split_dl_term_end[0].split('-');
											dl_term_end = split_dl_term_end_hypen[1] +'/'+split_dl_term_end_hypen[2]+'/'+split_dl_term_end_hypen[0];
										}
									}
								}
								<!--Replace the custom keywords used in the html content with corresponding values-->
								rplcedRow = deadlinerwString.replace('<!--{DEADLINE_TERM}-->', dl_app_term);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_YEAR}-->', dl_app_year);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_APP_DL}-->', dl_app_deadline);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_DECISION}-->', dl_app_decision);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_START_DATE}-->', dl_term_start);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_END_DATE}-->', dl_term_end);
								if(appenddeadlines!='')
								appenddeadlines = appenddeadlines + rplcedRow;
								else
								appenddeadlines = rplcedRow;
							}
							else{
								if(deadline1 == 'APP_TERM')
									dl_app_term = deadlineObj1[deadline1];
								if(deadline1 == 'APP_YEAR')
									dl_app_year = deadlineObj1[deadline1];
								if(deadline1 == 'APP_DEADLINE'){
									dl_app_deadline = deadlineObj1[deadline1];
									if(dl_app_deadline!='' ){
										split_dl_app_deadline = dl_app_deadline.split(' ');
										split_dl_app_deadline_hypen = split_dl_app_deadline[0].split('-');
										dl_app_deadline = split_dl_app_deadline_hypen[1] +'/'+split_dl_app_deadline_hypen[2]+'/'+split_dl_app_deadline_hypen[0];
									}
								}
								if(deadline1 == 'APP_DECISION'){
									dl_app_decision = deadlineObj1[deadline1];
									if(dl_app_decision!='' ){
										split_dl_app_decision = dl_app_decision.split(' ');
										split_dl_app_decision_hypen = split_dl_app_decision[0].split('-');
										dl_app_decision = split_dl_app_decision_hypen[1] +'/'+split_dl_app_decision_hypen[2]+'/'+split_dl_app_decision_hypen[0];
									}
								}
								if(deadline1 == 'TERM_START'){
									dl_term_start = deadlineObj1[deadline1];
									if(dl_term_start!=''){
										split_dl_term_start = dl_term_start.split(' ');
										split_dl_term_start_hypen = split_dl_term_start[0].split('-');
										dl_term_start = split_dl_term_start_hypen[1] +'/'+split_dl_term_start_hypen[2]+'/'+split_dl_term_start_hypen[0];
									}
								}
								if(deadline1 == 'TERM_END'){
									dl_term_end = deadlineObj1[deadline1];
									if(dl_term_end!='' ){
										split_dl_term_end = dl_term_end.split(' ');
										split_dl_term_end_hypen = split_dl_term_end[0].split('-');
										dl_term_end = split_dl_term_end_hypen[1] +'/'+split_dl_term_end_hypen[2]+'/'+split_dl_term_end_hypen[0];
									}
								}
								rplcedRow = deadlinerwString.replace('<!--{DEADLINE_TERM}-->', dl_app_term);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_YEAR}-->', dl_app_year);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_APP_DL}-->', dl_app_deadline);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_DECISION}-->', dl_app_decision);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_START_DATE}-->', dl_term_start);
								rplcedRow = rplcedRow.replace('<!--{DEADLINE_END_DATE}-->', dl_term_end);
								appenddeadlines = rplcedRow;
							}
						}
					}
				}
			}
			<!--DEADLINES-->
			<!--PARAMETERS-->
			if(key == 'PARAMETERS'){
				if(key && typeof details[key]=='object'){
					var parametersObj = details[key];
					for(var parameter in parametersObj){
						var parametersObj1 = parametersObj[parameter];
						for(var parameter1 in parametersObj1){
							var parametersObj2 = parametersObj1[parameter1];
							for(var parameter2 in parametersObj2){
								if(parameter2 == 'PROGRAM_PARAM_TEXT'){
										appendparametertext = appendparametertext + parametersObj2[parameter2]+'||';
								}
								if(parameter2 == 'PARAM_VALUE'){
									appendparametervalue = appendparametervalue + parametersObj2[parameter2]+'~';
								}
								if(parameter2 == 'PARAM_GLOSS'){
									appendparametergloss = appendparametergloss + parametersObj2[parameter2]+'~';
								}
							}
						}
					}
				}
			}
			<!--PARAMETERS-->
		}
				if(appendparametertext!=''){
					splitparametertext = appendparametertext.split('||');
					splitparametervalue = appendparametervalue.split('~');
					splitparametergloss = appendparametergloss.split('~');
					var k = 0;
					for(i=0;i<splitparametertext.length;i++){
						arr_params[k]= new Array(0);
						arrindex = isInArray(arr_params,splitparametertext[i]);
						if(arrindex == -1){
							arr_params[k][0] = splitparametertext[i];
							arr_params[k][1] =splitparametervalue[i];
							arr_params[k][2] =splitparametergloss[i];
							k = k + 1;
						}
						else{
							arr_params[arrindex][1] =arr_params[arrindex][1] + appendcomma +splitparametervalue[i];
						}
					}
				}
				if(arr_params.length){
					rows = Math.ceil(arr_params.length/2);
					recCount = 0;
					facesheetrwstring = programbrochure.substring(programbrochure.indexOf('<!--FACESHEET ROWSTART-->')+25, programbrochure.indexOf('<!--FACESHEET ROWEND-->'));
					facesheetcolstring = programbrochure.substring(programbrochure.indexOf('<!--FACESHEET COLUMSTART-->')+27, programbrochure.indexOf('<!--FACESHEET COLUMEND-->'));
					facesheetcolfullstring = programbrochure.substring(programbrochure.indexOf('<!--FACESHEET COLUMSTART-->'), programbrochure.indexOf('<!--FACESHEET COLUMEND-->')+25);
					for( i=0; i<rows; i++){
						rplcedCol = '';
						fullcolumstring = '';
						 for(j=0;j<2;j++){
								if(recCount<arr_params.length){
									rplcedCol = facesheetcolstring.replace('<!--{PARAMTEXT}-->',arr_params[recCount][0]);
									rplcedCol = rplcedCol.replace('<!--{PARAMVALUE}-->',arr_params[recCount][1]);
									if(arr_params[recCount][2]!=''){
									rplcedCol = rplcedCol.replace('<!--{PARAMGLOSS}-->',featuredimage);
									}
									else{
									rplcedCol = rplcedCol.replace('<!--{PARAMGLOSS}-->','');
									}
									fullcolumstring = fullcolumstring + rplcedCol;
								}
								else{
									rplcedCol = facesheetcolstring.replace('<!--{PARAMTEXT}-->','&nbsp;');
									rplcedCol = rplcedCol.replace('<!--{PARAMVALUE}-->','&nbsp;');
									rplcedCol = rplcedCol.replace('<!--{PARAMGLOSS}-->','');
									fullcolumstring = fullcolumstring + rplcedCol;
								}
								recCount++;
						 }
						fullrwstring = fullrwstring + facesheetrwstring.replace(facesheetcolfullstring,fullcolumstring);
					}
				}
			if(rplcedcourseRow ==''){
				rplcedcourseRow = courserwString.replace(courserwString, '');
			}
			appendlocation = prg_city+','+prg_country;
			if(budget_title!=''){
				splitbudgettitle = budget_title.split(',');
				splitbudgetterm = budget_term.split(',');
				for(i=0;i<splitbudgettitle.length;i++){
					appendbudget = appendbudgets.replace('{BUDGET_TERM}',splitbudgetterm[i]);
					appendbudget = appendbudget.replace('{BUDGET_TITLE}',splitbudgettitle[i]);
					if(appendbudgetitems!='')
						appendbudgetitems = appendbudgetitems + appendcomma + appendbudget;
					else
						appendbudgetitems = appendbudget;
				}
				rplcedbudgetRow = budgetstring.replace('<!--{BUDGET_DETAILS}-->', appendbudgetitems);
			}
			if(rplcedbudgetRow == ''){
				rplcedbudgetRow = budgetstring.replace(budgetstring,'');
			}
			if(rplcedhomepageRow == ''){
				rplcedhomepageRow = homepagestring.replace(homepagestring,'');
			}
			if(rplcedsponsorRow == ''){
				rplcedsponsorRow = prgsponsorstring.replace(prgsponsorstring,'');
			}
			if(testi_app_item_text!='')
			testimonialrplcedRow = testimonialstring.replace('<!--{TESTIMONIAL_APP_ITEM}-->', testi_app_item_text);
			if(testi_resp_data!='')
			testimonialrplcedRow = testimonialrplcedRow.replace('<!--{TESTIMONIAL_RESPONSE}-->', testi_resp_data);
			if(testi_prg_term!='')
			testimonialrplcedRow = testimonialrplcedRow.replace('<!--{TESTIMONIAL_TERM}-->', '&ndash;'+testi_prg_term+', ');
			if(testi_prg_year!='')
			testimonialrplcedRow = testimonialrplcedRow.replace('<!--{TESTIMONIAL_YEAR}-->', testi_prg_year+' Participant');
			if(testimonialrplcedRow!=''){
				testimonialrplcedRow = testimonialrplcedRow.replace(testimonialstring,'');
			}
	}
	tobereplaced = programbrochure.substring(programbrochure.indexOf('<!--DEADLINES ROWSTART-->'), programbrochure.indexOf('<!--DEADLINES ROWEND-->')+23);
	coursetobereplaced = programbrochure.substring(programbrochure.indexOf('<!--COURSES OFFERED START-->'), programbrochure.indexOf('<!--COURSES OFFERED END-->')+26);
	budgettobereplaced = programbrochure.substring(programbrochure.indexOf('<!--BUDGETSHEET START-->'), programbrochure.indexOf('<!--BUDGETSHEET END-->')+22);
	homepagetobereplaced = programbrochure.substring(programbrochure.indexOf('<!--HOME PAGE START-->'), programbrochure.indexOf('<!--HOME PAGE END-->')+20);
	sponsortobereplaced = programbrochure.substring(programbrochure.indexOf('<!--PROGRAM SPONSOR START-->'), programbrochure.indexOf('<!--PROGRAM SPONSOR END-->')+26);
	testimonialtobereplaced = programbrochure.substring(programbrochure.indexOf('<!--TESTIMONIAL START-->'), programbrochure.indexOf('<!--TESTIMONIAL END-->')+22);
	facesheetrwstringtobereplaced = programbrochure.substring(programbrochure.indexOf('<!--FACESHEET ROWSTART-->'), programbrochure.indexOf('<!--FACESHEET ROWEND-->')+23);
	reviewstobereplaced = programbrochure.substring(programbrochure.indexOf('<!--REVIEW ROWSTART-->'), programbrochure.indexOf('<!--REVIEW ROWEND-->')+20);
	ratingstobeplaced = programbrochure.substring(programbrochure.indexOf('<!--RATINGS ROWSTART-->'), programbrochure.indexOf('<!--RATINGS ROWEND-->')+21);
	<!--Replace the custom keywords used in the html content with corresponding values-->
	programbrochure = programbrochure.replace(coursetobereplaced, rplcedcourseRow);
	programbrochure = programbrochure.replace(budgettobereplaced, rplcedbudgetRow);
	programbrochure = programbrochure.replace(homepagetobereplaced, rplcedhomepageRow);
	programbrochure = programbrochure.replace(sponsortobereplaced, rplcedsponsorRow);
	programbrochure = programbrochure.replace(tobereplaced, appenddeadlines);
	programbrochure = programbrochure.replace(facesheetrwstringtobereplaced, fullrwstring);
	programbrochure = programbrochure.replace('<!--{PROGRAM_NAME}-->',prg_name);
	programbrochure = programbrochure.replace('<!--{PROGRAM_LOCATIONS}-->',appendlocation);
	programbrochure = programbrochure.replace('<!--{PROGRAM_TERMS}-->',prg_term);
	programbrochure = programbrochure.replace('<!--{PROGRAM_DESCRIPTION}-->',prg_description);
	programbrochure = programbrochure.replace(testimonialtobereplaced, testimonialrplcedRow);
	programbrochure = programbrochure.replace(reviewstobereplaced, appendreviews);
	programbrochure = programbrochure.replace(ratingstobeplaced, appendratings);
	document.body.innerHTML = document.body.innerHTML + programbrochure;
}
 <!--Function to check value exist in array-->
function isInArray(arr,val){
	for(arrCount=0;arrCount<arr.length;arrCount++){
		if(arr[arrCount][0]==val)
			return arrCount;
	}
	return -1;
}
<!--Function to apply for a program-->
function apply(){
	if(applynow!='')
		location.href = applynow;
}
<!--Function to get requested info for a program-->
function requestinfo(){
	if(inforequest!='')
		location.href = inforequest;
}
</script>
<script language="javascript" type="text/javascript">
    callProgramBrochureApi();
</script>