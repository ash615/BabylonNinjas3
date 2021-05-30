<html>
						<head>
							<link rel="stylesheet" href="navbar.css"/>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<title></title>
						</head>
						<body >

							<div class = "navbar">
								<a href='babycare.php'>Baby Care Products</a>
								<a href='diseases.php'>Diseases</a>
								<a href='Vaccination.php'>Vaccination</a>
								<a href='foodnutrition.php'>Food & Nutrition</a>
								<a href='logout.php'>Logout</a>


                            </div>
                            
                            <div id="dis">
                                <br/>
                                <h1 style="text-align: center;">See diseases Vaccination Details Here!!!...</h1>
                                <br/>
                                <br/>
                                <br/>
                                <img src="polioimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>1. Polio</b>
                                <button onclick="seevacc1();">Vaccination for Polio</button>&nbsp;
                                <button onclick="hide1();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p1"> </p>
                                <br/>



                                <hr color="red">
                                <br/>
                                <img src="tetanusimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>2. Tetanus</b>
                                <button onclick="seevacc2();">Vaccination for Tetanus</button>&nbsp;
                                <button onclick="hide2();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p2"> </p>
                                <br/>


                                <hr color="green">
                                <br/>
                                <img src="influenzaimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>3. The Flu(Influenza)</b>
                                <button onclick="seevacc3();">Vaccination for Influenza</button>&nbsp;
                                <button onclick="hide3();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p3"> </p>
                                <br/>

                                <hr color="yellow">
                                <br/>
                                <img src="hepatitisbimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>4. Hepatitis B</b>
                                <button onclick="seevacc4();">Vaccination for Hepatitis B</button>&nbsp;
                                <button onclick="hide4();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p4"> </p>
                                <br/>


                                <hr color="blue">
                                <br/>
                                <img src="hibimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>5. Hib Disease</b>
                                <button onclick="seevacc5();">Vaccination for Hib</button>&nbsp;
                                <button onclick="hide5();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p5"> </p>
                                <br/>


                                <hr color="pink">
                                <br/>
                                <img src="measlesimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>6. Measles Disease</b>
                                <button onclick="seevacc6();">Vaccination for Measles</button>&nbsp;
                                <button onclick="hide6();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p6"> </p>
                                <br/>


                                <hr color="violet">
                                <br/>
                                <img src="pertussisimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>7. Pertussis(Whooping Cough)</b>
                                <button onclick="seevacc7();">Vaccination for Pertussis</button>&nbsp;
                                <button onclick="hide7();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p7"> </p>
                                <br/>


                                <hr color="yellow">
                                <br/>
                                <img src="rotavirusimg.jpg" style="height: 300px; width:400px; margin-left: 200px;">
                                <b>8. Rotavirus Disease</b>
                                <button onclick="seevacc8();">Vaccination for Rotavirus</button>&nbsp;
                                <button onclick="hide8();">Hide Details</button>&nbsp;
                                <p style="text-align: center; margin-left: 650px; height: 230px; width:400px;font-style: bold; padding:10px;" id="p8"> </p>
                                <br/>



                            </div>

                            <br/>

                            <div class = "footer">
        
								<a href='feedback.php'>Feedback</a>
									<a href='copyright.php'>Copyright</a>
									<a href='address.php'>Address</a>
							</div>
							
                        
                            
                            <script type = "text/javascript">
                                function seevacc1()
                                {
                                    document.getElementById("p1").style.backgroundColor="pink";
                                    document.getElementById("p1").innerHTML="Doctors recommend that your child get four doses of the polio vaccine (also called IPV). Your child will need one dose at each of the following ages: 1-2​ months, 4 months, 12-23 months, and 4-6 years. <br/><br/> <b>Visit Nearby Anganwadi Kendra <br/> <b>Vaccination Time: 10:00 A.M.- 01:00 P.M. <br/> <b>Date:-15-09-2021</b></b></b>";
                                }
                                function hide1()
                                {
                                    document.getElementById("p1").style.backgroundColor="white";
                                    document.getElementById("p1").innerHTML="";
                                }



                                function seevacc2()
                                {
                                    document.getElementById("p2").style.backgroundColor="aqua";
                                    document.getElementById("p2").innerHTML="Doctors recommend that your child get five doses of the DTaP shot for best protection. Your child will need one dose at each of the following ages: 1-2 months, 4 months, 6 months, 12-23 months, and 4-6 years.  <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 11:00 A.M.- 04:00 P.M. <br/> <b>Date:-18-09-2021</b></b></b>";
                                }
                                function hide2()
                                {
                                    document.getElementById("p2").style.backgroundColor="white";
                                    document.getElementById("p2").innerHTML="";
                                }


                                
                                function seevacc3()
                                {
                                    document.getElementById("p3").style.backgroundColor="yellow";
                                    document.getElementById("p3").innerHTML="Doctors recommend that your child get the flu vaccine every year starting when they are 6 months old. Children younger than 9 years old who are getting vaccinated for the first time need two doses of flu vaccine, spaced at least 28 days apart. <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></b></b>";
                                }
                                function hide3()
                                {
                                    document.getElementById("p3").style.backgroundColor="white";
                                    document.getElementById("p3").innerHTML="";
                                }




                                function seevacc4()
                                {
                                    document.getElementById("p4").style.backgroundColor="grey";
                                    document.getElementById("p4").innerHTML="Doctors recommend that your child get three doses of the Hepatitis B shot for best protection. Typically, your child will need one dose at each of the following ages: shortly after birth, 1-2 months, and 6 months. <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></br></br>";
                                }
                                function hide4()
                                {
                                    document.getElementById("p4").style.backgroundColor="white";
                                    document.getElementById("p4").innerHTML="";
                                }

                                 

                                
                                function seevacc5()
                                {
                                    document.getElementById("p5").style.backgroundColor="red";
                                    document.getElementById("p5").innerHTML="Doctors recommend that your child get four doses of the Hib vaccine. Your child will need one dose at each of the following ages: 1-2 months, 4 months, 6 months (for some brands), and 12-23 months. <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></b></b>";
                                }
                                function hide5()
                                {
                                    document.getElementById("p5").style.backgroundColor="white";
                                    document.getElementById("p5").innerHTML="";
                                }





                                function seevacc6()
                                {
                                    document.getElementById("p6").style.backgroundColor="yellow";
                                    document.getElementById("p6").innerHTML="Infants 6 to 11 months old should have one dose of the MMR shot before traveling abroad. Infants vaccinated before 12 months of age should be revaccinated on or after their first birthday with two doses, each dose separated by at least 28 days. <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></b></b>";
                                }
                                function hide4()
                                {
                                    document.getElementById("p6").style.backgroundColor="white";
                                    document.getElementById("p6").innerHTML="";
                                }




                                function seevacc7()
                                {
                                    document.getElementById("p7").style.backgroundColor="green";
                                    document.getElementById("p7").innerHTML="Doctors recommend that your child get five doses of the DTaP vaccine. Your child will need one dose at each of the following ages: 1-2 months, 4 months, 6 months, 12-23 months, and 4-6 years. <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></b></b>";
                                }
                                function hide4()
                                {
                                    document.getElementById("p7").style.backgroundColor="white";
                                    document.getElementById("p7").innerHTML="";
                                }


                                
                                function seevacc8()
                                {
                                    document.getElementById("p8").style.backgroundColor="aqua";
                                    document.getElementById("p8").innerHTML="Doctors recommend that your child get two or three doses of the vaccine (depending on the brand) at 1-2 months, 4 months, 6 months (if get the RotaTeq vaccine). <br/><br/> <b>Visit Nearby Govt. Hospital <br/> <b>Vaccination Time: 01:00 P.M.- 06:00 P.M. <br/> <b>Date:-22-09-2021</b></b></b>";
                                }
                                function hide4()
                                {
                                    document.getElementById("p8").style.backgroundColor="white";
                                    document.getElementById("p8").innerHTML="";
                                }





                            </script>
	
						</body>

						</html>
		
