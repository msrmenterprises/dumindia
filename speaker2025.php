<?php include "include/header.php"; ?>

<style>
.k_table
{
    font-family: 'Lato', sans-serif;
    color: #000;
    text-decoration: none;
    font-weight: bold;
    font-size: 15px;
    margin-top: 10px;
}

.speaker_content i
{
    font-size: 12px;
}
.speaker_row .dum_speaker a .speaker_content {
    width: 70% !important;
    float: left !important;
}

/* NEW: make all speaker images a consistent size and crop nicely */
.dum_speaker {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

/* container for the image - fixed column width */
.dum_speaker .speaker_img {
    flex: 0 0 23%;
    max-width: 200px;
    box-sizing: border-box;
    text-align: center;
}

/* enforce same image size, preserve aspect, crop center */
.dum_speaker .speaker_img img,
.dum_speaker .speaker_img .speaker-photo {
    width: 100% !important;
    
    max-width: 200px !important;
    object-fit: cover !important;     /* crop while keeping center */
    display: block;
    border-radius: 10px;
}

/* content should take remaining space */
.dum_speaker .speaker_content {
    flex: 1 1 70%;
    box-sizing: border-box;
}

/* fallback for older markup where .dum_speaker isn't flex-wrapped */
.speaker_row .k_list_part .col-sm-12.dum_speaker {
    display: flex;
    align-items: flex-start;
}

/* smaller screens: stack */
@media (max-width: 768px) {
    .dum_speaker {
        flex-direction: column;
    }
    .dum_speaker .speaker_img,
    .dum_speaker .speaker_content {
        flex: 0 0 auto;
        width: 100%;
        max-width: 100%;
    }
    .dum_speaker .speaker_img img,
    .dum_speaker .speaker_img .speaker-photo {
        height: 180px;
        max-width: 360px;
        margin: 0 auto;
    }
}
</style>


<!-- key objective starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>
<div class="row dum_container key_div k_key_themes">


	
	<div class="k_cheading">
		<h1><span class="k_greencolor">SPEAKERS OF</span> DUM 2025 </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

    
<!-- Alok Mishra - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AbhishekRanjan.jpeg" alt="AbhishekRanjan" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Abhishek Ranjan,<br/>
                    Chief Executive Officer,<br/>
                    BSES Rajdhani Power Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Abhishek Ranjan has joined BSES Rajdhani Power Limited (BRPL) as Chief   
Executive Officer (CEO). With a track record of exemplary leadership and over two   
decades of diverse industry experience, Mr. Ranjan is spearheading BRPL's   
journey toward innovation and sustainable growth.  
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Mr. Ranjan's academic credentials set a strong foundation for his professional   
success. He holds a PGDM from XLRI (2008) and an Engineering degree from NIT   
Bhopal (1998). Further enriching his profile, he completed a Business Excellence   
certification from the Haas School of Business, UC Berkeley, and earned   
specialized certifications in Data and Decision Science Consulting from IIT Delhi   
and as a Certified Energy Manager by the Bureau of Energy Efficiency (BEE).  
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    In his earlier stint with BRPL, Mr. Ranjan played a pivotal role in driving initiatives   
in renewables, demand-side management, power management and   
sustainability, which significantly enhanced service delivery and stakeholder   
engagement.  
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Throughout his career, he has held leadership positions with prominent   
organizations, including Renew Power, Reliance Power, NHPC, and Infosys. Most   
recently, he served as a Partner at Ernst & Young - Parthenon, where he   
specialized in Energy Transition and Decarbonization, focusing on sectors such as   
Renewable Electricity, Energy Storage, and Power Markets.
                </p>
                
            </div>
        </div>
    </div>
</div>    

<!-- Alok Mishra - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AlokKumar_DNV.jpg" alt="AlokKumar" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Alok Mishra,<br/>
                    Market Area Manager-Power Grid,<br/>
                    DNV
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Alok is an experienced professional with more than 13 years of work   
experience in the energy sector, currently serving as the Market Area   
Manager-Power Grid at DNV. With a background in engineering and an   
MBA, Alok has worked on various projects related to electric vehicles (EVs)   
and decarbonization in India and other countries, focusing on EV   
integration with transmission and distribution, EV market study, Technical   
Due Diligence of EV sector, Technology review of EV sector. He has   
received recognition for his work in the form of the Clean Mobility   
Leadership: Young Achiever Award in India. Alok has also been involved in   
the first offshore wind with hydrogen study, the first grid connection   
report for offshore wind under the FOWIND project, and many other   
initiatives. In this ever-evolving energy landscape, Alok's experience and   
expertise provide valuable insights into the challenges and opportunities   
that lie ahead.  
                </p>
                
            </div>
        </div>
    </div>
</div>

<!-- Aneesh Thomas -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AneeshThomas.jpg" alt="Aneesh Thomas" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Aneesh Thomas,<br/>
                    Associate Director National Sales MV<br/>
                    Eaton Power Quality India
                </h1>
+                <p style="text-align: justify; line-height: 1.6;">
                    Aneesh Thomas leads Power Distribution Assembly Medium Voltage Switchgear   
                    at Eaton Power Quality India, bringing 24 years of rich expertise from global   
                    industry leaders ABB, Siemens, and Larsen & Toubro. A pioneer in sustainable   
                    power technologies, he champions the development of SF6-free switching   
                    technologies and environmentally responsible alternatives for medium voltage   
                    power distribution. Through his work at Eaton, he actively contributes to India's   
                    vision of energy self-reliance, focusing on innovative solutions that align with the   
                    nation's commitment to sustainable power infrastructure.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Atul Bali  - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AtulBali.png" alt="AtulBali" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Atul Bali,<br/>
                    Director,<br/>
                    NSGM
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Atul Bali is the Director of the National Smart Grid Mission, established by   
the Government of India to plan and monitor the implementation of   
policies and programmes related to smart grid activities in India, and   
Executive Director at Power Grid Corporation of India. He has nearly three   
decades of rich experience in the power sector. His experience spans   
design, engineering, monitoring, and successful implementation of   
SCADA/EMS/DMS projects. He has worked in NHPC, POWERGRID, PFC, and   
the Navratna Public Sector Undertakings of the Ministry of Power,   
Government of India. He has been associated with the concept to   
commissioning of the Unified Load Despatch and Communication Scheme   
and has supervised the implementation of IT-based distribution reform   
projects under the prestigious Restructured Accelerated Power   
Development and Reforms Programme (RAPDRP) in India.  
                </p>
                
            </div>
        </div>
    </div>
</div>
	
    <!-- Ashish Kumar Goel - Added -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AshishKumarGoel.jpg" alt="Ashish Kumar Goel" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Ashish Kumar Goel,<br/>
                    Chairman<br/>
                    Uttar Pradesh Power Corporation Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Dr. Ashish Kumar Goel is a highly accomplished individual with an impressive
                    educational background. He holds a B.Tech in Electrical Engineering from IIT
                    Delhi, an MA in Economics, and a Ph.D. in Economics. Throughout his career, Dr.
                    Goel has held several pivotal roles in public service and administration, including
                    leadership roles in UP Power Corporation and the Ministry of Rural Development.
                    His work includes overseeing flagship schemes for rural roads and housing and
                    organizing large public events with outstanding execution. He has received
                    multiple awards and recognitions for his public service and leadership.
                </p>
            </div>
        </div>
    </div>
</div>

    <!-- Ashutosh Goel - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AshutoshGoel.JPG" alt="AshutoshGoel" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Ashutosh Goel,<br/>
                    Chairman & Managing Director, <br/>
                    Allied Engineering Works Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Ashutosh Goel, an IIT Delhi alumnus, is the Chairman and   
Managing Director of Allied Engineering Works Limited (AEWL).   
He has over 23 years of expertise in the Electrical and Electronics   
industry. Renowned for his technical acumen and strategic   
leadership, Mr. Goel has played a pivotal role in establishing AEWL   
as a market leader and forging many tie-ups and associations. His   
commitment to innovation and quality is evident in his continuous   
involvement in R&D projects, which drive AEW's advancements in   
the smart metering domain and other hi-tech sectors. He has   
been involved in many Industrial forums and mentored a few   
start-ups in the tech space. 
                </p>
                
            </div>
        </div>
    </div>
</div>

<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/Alokkumar.png" alt="AshutoshGoel" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Alok Kumar,<br/>
                    Director General, <br/>
                    All India Discoms Association (AIDA)
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    He has completed 35 years long career in public policy and economic   
development in India's premier federal civil service (IAS) reaching up to   
distinguished position of Secretary in federal government with extensive   
experience in electricity, renewable energy, energy transition, infrastructure   
development and skill development domains. He has led several large commercial   
organisations as CEO and played a key role in formulation and implementation of   
several national/state level policies, programmes and regulatory interventions.   
During 2021 - 2023, he Successfully managed the operations of India's power   
system, one of the largest in the world, along with steering wide-ranging sectoral   
reforms. He has deep understanding of global energy transition aspects as chair   
of G20 Energy Transitions Working Group in 2022- 2023.   
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Presently he is Professor of Practice in Department of Hydro and Renewable   
Energy at IIT Roorkee, and chairs the Inter- Ministerial Working Group set up by   
NITI Aayog to develop power sector pathway to achieve Net Zero commitment by   
India. In 2025, he has been appointed as Independent Director on the Board of 
Power Exchange India Limited. He is also Partner with The Lantau Group   
(Singapore) Pte Ltd.  
                </p>

                <p style="text-align: justify; line-height: 1.6;">
                    He obtained bachelor's degree in civil engineering from IIT Roorkee in 1983, and   
Master of Business Administration (Finance) from National Open University in   
2009.  
                </p>

                <p style="text-align: justify; line-height: 1.6;">
                Authored the book 'Electricity Sector in India- Policy and Regulation' published by   
Oxford University Press in 2012, and has been writing regularly on energy related   
topics for business publications in India.      
            </p>
                
            </div>
        </div>
    </div>
</div>

<!-- Gajanan S Kale - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/GajananSKale.png" alt="AtulBali" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Gajanan S Kale,<br/>
                    Chief Executive Officer,<br/>
                    TP Northern Odisha Distribution Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Gajanan S. Kale serves as the Chief Executive Officer of TP Northern Odisha   
Distribution Limited (TPNODL), a joint venture between Tata Power and   
the Odisha Government, and concurrently holds the position of Chief of   
Odisha Distribution Business. With over three decades of expertise in the   
power and energy sector, Mr. Kale has held various strategic positions   
across several organizations, driving transformation, excellence, digital   
advancement, and stakeholder management. 
                </p>
                <p style="text-align: justify; line-height: 1.6;">Prior to joining TPNODL, Mr. Kale held CEO positions at Tata Power-DDL,   
TP Western Odisha Distribution Limited (TPWODL), and TP Ajmer   
Distribution Ltd (TPADL). He began his career at BHEL in Bhopal and   
subsequently held key positions at the Central Railway Nagpur Division,   
Tata Power Mumbai Distribution, and Tata Power-DDL.</p>
                <p style="text-align: justify; line-height: 1.6;">Mr. Kale is a seasoned professional with over 32 years of experience and   
extensive expertise in enhancing customer experience, resource planning   
and management, operational excellence, project management, digital   
transformations, and stakeholder management. He has received notable   
recognitions for his leadership, including the “Best CEO of the Year with   
HR Orientation” and the “Best CEO of the Year” award for FY 2023-24.  
Mr. Kale holds an MBA in Finance and an M.Tech in Integrated Power   
Systems from the National Institute of Technology, Nagpur, a B.E. in   
Electrical Power Systems from Amravati University, and is also an alumnus   
of the prestigious IIM Ahmedabad.  </p>
                <p style="text-align: justify; line-height: 1.6;">With his visionary leadership and expertise, Mr. Kale is poised to shape   
TPNODL's success story, driving the company's growth and development   
through his commitment to excellence.  </p>
                
            </div>
        </div>
    </div>
</div>

<!-- Manoj Muthyala -->
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/gurpreet.jpg" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							Gurpreet Oberoi<br/>Chief Business Officer<br/>Kimbal Private Limited
						</h1>
						<p>Gurpreet Singh Oberoi is the Chief Business Officer at Kimbal with over 30 years of   
experience in sales and marketing across India's utility and consumer markets. He has   
deep expertise in the electricity value chain, from retail supply to distribution and   
transmission. At Kimbal, he leads sales, marketing, cash flow management, and   
strategic partnerships, working closely with senior leadership to drive growth and   
optimize revenue streams.  </p>
						<p>Before joining Kimbal, Gurpreet held leadership roles at Landis+Gyr and Larsen &   
Toubro, successfully building business verticals and expanding market presence. He   
has a strong track record in identifying opportunities, addressing regulatory   
challenges, and ensuring seamless project execution.  </p>
<p>Gurpreet holds an Executive MBA in Marketing from SP Jain Institute of Management   
& Research and a Bachelor's degree in Electrical and Electronics Engineering from   
MIET. A strong believer in collaboration and analytical thinking, he is passionate about   
driving impactful change and has a keen interest in luxury automobiles.  </p>
					</div>
				
			</div>
		</div>
	</div>

	<!-- Manoj Muthyala -->
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/ManojMuthyala.jpg" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							Manoj Muthyala<br/>Senior Director, Sales<br/>Impresa.ai
						</h1>
						<p>Manoj is a Global Sales Leader with over 15 years of experience across Project and Business Development teams. He has a great track record of driving sales and increasing client engagement at large Utilities like Tata, Adani and Essar. At Abjayon (Impresa.ai), Manoj is commercially focused and responsible for driving growth by pitching unique solutions to clients in the APAC and MEA regions.</p>
						<p>Manoj firmly believes in selling solutions to problems, not products. He enjoys cycling & trekking and appreciates that the best views come after the long and hard climbs.</p>
					</div>
				
			</div>
		</div>
	</div>

	<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/ManishPatel.jpg" alt="Manish Patel" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Manish Patel<br/>
                    Business Development (International &Domestic) & Product Head for Covered   
Conductors,<br/>
                    APAR Industries Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Manish Patel is currently leading Business Development (International & Domestic) at   
Apar Industries Limited, with 25+ years of experience in EHV Power Cable & EHV Cable   
accessories (upto 220KV), LT/HT Cables, Covered Conductors upto 132KV, MV   
Switchgears (Reclosers & RMU) and Underground Distribution Substations in India   
and worldwide. He has extensively travelled across the globe and handled various   
positions in Global Sales, International Market, Business Development, P&L Head and   
Strategic roles. He also has experience in SCM and Operations. Throughout his career, 
he has various achievements and recognitions in developing the company's home   
market and the global market by signing strategic global contracts, significant   
improvement in bottom-line, forming joint ventures, policy, industry initiatives etc. He   
has successfully handled EHV Cable and Accessories turnkey projects in home and   
international markets. His expertise lies in dealing with private/corporate,   
government (central and state) and consultants in India/Global for both Power Cables   
and Switchgears.  
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    He has had a rich experience in establishing G&W as a brand in India and APAC from   
scratch and has now taken up the role of Business Development for Apar Industries   
Ltd (Unit - Cable) for SAARC, Middle East, Latin America, North America and hopes to   
create an exciting story of growth, new business ventures and excellent sales figures   
for the company.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Nilesh Kane -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/NileshKane.jpg" alt="Dr Nilesh Kane" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Nilesh Kane,<br/>
                    Chief (Transmission & Mumbai – Distribution),<br/>
                    Tata Power
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Dr. Nilesh Kane is currently working as Chief (Transmission & Mumbai -
                    Distribution) at Tata Power. He carries an experience of over 30 years in
                    Electrical Operations and Technology across Generation, Transmission,
                    Distribution and Renewable sectors, including battery energy storage,
                    electric vehicle solutions and smart grid projects. He holds advanced
                    qualifications and has represented Tata Power at multiple industry platforms.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Praveer Sinha -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/PraveerSinha.jpg" alt="Praveer Sinha" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Praveer Sinha,<br/>
                    CEO & Managing Director,<br/>
                    The Tata Power Company Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Dr. Praveer Sinha is a seasoned power professional with nearly four decades
                    of leadership across the power sector. Under his leadership, Tata Power is
                    transforming into a sustainable, technology-oriented green energy company
                    with a growing renewable portfolio and several new-age businesses such as
                    solar rooftop, EV charging, microgrids and smart energy management.
                </p>
            </div>
        </div>
    </div>
</div>

	<!-- Rohit Pareek -->
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/RohitPareek.png" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							Rohit Pareek<br/>Chief Product Officer<br/>Impresa.ai
						</h1>
						<p>Rohit Pareek is a seasoned technology leader with over 25 years of expertise revolutionizing the utilities sector through data and AI innovation. As a trailblazer in digital transformation, he's spearheaded the development of cutting-edge SaaS platforms, harnessing AI to boost decision-making and operational efficiency by up to 35% for global utility giants. He's transformed AI roadmaps for large-scale utilities across continents, empowering them with strategic, future-ready solutions.</p>
						<p>His knack for decoding industry trends and driving partner success has redefined how utilities operate worldwide. A dynamic speaker, Rohit blends deep insight with product strategy mastery, inspiring audiences to embrace intelligent tech. He's on a quest to fuel industries everywhere with bold, data-powered innovation.</p>
					</div>
				
			</div>
		</div>
	</div>

	

	

	

	

<!-- Ravi Jagannathan -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/RaviJagannathan.jpg" alt="Ravi Jagannathan" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Ravi Jagannathan<br/>
                    Founder and Managing Director,<br/>
                    KrypC Technologies
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Ravi Jagannathan is the Founder and Managing Director of KrypC Technologies,
                    a global deep-tech company delivering enterprise blockchain and Web3 solutions
                    with operations across the USA, India, the Netherlands, and the UAE. A Fellow
                    Member of the Institute of Chartered Accountants of India, he has over three
                    decades of entrepreneurial experience in building trusted digital ventures,
                    including eMudhra, India’s pioneering Certifying Authority, and KrypC, which has
                    implemented blockchain platforms for leading banks, utilities, and governments.
                    Ravi is also the Founder of Xygle, an enterprise-focused Layer-1 blockchain
                    protocol, and serves as a Blockchain Technology Member at the Universal
                    Energy Interface (UEI) and Partner in the ISGF–FIDE–UPPCL P2P Energy
                    Trading Pilot. Recognized as a Blockchain Champion at UN/CEFACT, he actively
                    contributes to global initiatives on trade facilitation and digital trust. Ravi
                    continues to drive innovation in digital identity, sustainability, and the emerging
                    device economy through scalable, real-world blockchain solutions.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Ravi Seethapathy -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/RaviSeethapathy.jpg" alt="Ravi Seethapathy" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Ravi Seethapathy<br/>
                    Executive Chairman<br/>
Biosirus Inc.  
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Ravi Seethapathy, is Executive Chairman of Biosirus Inc., Canada. He serves as the   
                    “Ambassador for the Americas”, for the Global Smart Energy Federation, USA, and as   
                    an Advisor to the India Smart Grid Forum. He is an empanelled expert at the Coalition   
                    for Disaster Resilient Infrastructure (CDRI), a 51-country member organization.   
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    With over 42+ years of experience in the Energy and Power Systems area in Canada,   
                    he mentors several utilities and companies in their technology development. His is   
                    active in several IEC, CSA, GSEF, ISGF, CDRI technical committees, in the areas of   
                    sustainable energy, transportation, energy storage, microgrid and e-mobility. He is an   
                    invited speaker internationally and has co-authored over 50 technical papers and   
                    published 75 articles. His former Corporate Directorships include Larsen & Toubro’s -   
                    Power Transmission & Distribution (IC), India, Toronto Atmospheric Fund, Smart Grid   
                    Canada, Ryerson University, TV Ontario, Scarborough Hospital, and as Chairs of   
                    Engineers Without Borders Canada, Canadian Club of Toronto, and Indo-Canada   
                    Chamber of Commerce.  
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    He is a Life Fellow of the Canadian Academy of Engineering; a Life Senior Member of   
                    the IEEE; and a registered Professional Engineer in Ontario. He has been honoured   
                    with several awards/citations including the Distinguished Alumnus Award, IIT   
                    Kharagpur (2025); ISGF President's Award (2023); Life Member Service Award; IEEE   
                    Toronto (2021); and Queen Elizabeth II Diamond Jubilee Medal (2012). He/ his family   
                    has endowed an IEEE PES/IAS Award in "Rural Electrification Excellence". He holds a B.   
                    Tech (Hons) in Electrical Power from IIT Kharagpur, India, an M. Eng. in Electrical   
                    Power from University of Toronto and an MBA from the Schulich School of Business,   
                    York University, Toronto, Canada.  
                </p>
            </div>
        </div>
    </div>
</div>
	
	<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/ReenaSuri.JPG" alt="Reena Suri" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Reena Suri<br/>
                    Executive Director<br/>
                    India Smart Grid Forum
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Reena Suri, Executive Director of the India Smart Grid Forum (ISGF) since 2013, brings
                    over 22 years of rich experience in the energy sector. She has played a key role in
                    various ISGF projects, including the Electrification Plan for Public Transportation,
                    Blockchain for Electric Utilities, Energy Storage Roadmap for India, Smart Grid
                    Roadmap, and developing smart grid and EV infrastructure plans for the SAARC
                    Region.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Reena also led the World Bank EV Project in Kolkata. As the founder-editor of
                    the Smart Grid Bulletin, Reena has been a voice for smart grid advancements since
                    2013. She is passionate about increasing gender diversity in the energy sector, leading
                    initiatives to improve networking and mentoring programs for women, raise
                    awareness and technology skills among women, and attract women to technical
                    education by showcasing inspiring role models.
                </p>
            </div>
        </div>
    </div>
</div>

	<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start; ">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/RejiKumarPillai.jpg" alt="Reji Kumar Pillai" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Reji Kumar Pillai<br/>
                    President, India Smart Grid Forum (ISGF)<br/>
                    Chairman, Global Smart Energy Federation (GSEF)
                </h1>
				<p style="text-align: justify; line-height: 1.6;">
        Reji is the President of India Smart Grid Forum (<a href="https://www.indiasmartgrid.org" target="_blank">www.indiasmartgrid.org</a>) since its inception in 2011 and is also the current Chairman of the Global Smart Energy Federation (GSEF). He is an internationally renowned expert with over four decades of experience in the electricity sector in diverse functions covering the entire value chain and across continents. He is spearheading a mission to leverage technology to transform the electric grids and provide clean and reliable electricity to every citizen 24x7 at affordable cost. For decades he has been actively advocating for the “Right to Electricity” that would ensure lifeline supply of electricity to all which is now becoming a reality in India and several other developing countries; and also advocating for the “Right to Sleep” to provide climate-controlled sleeping pods in low-income communities. Reji has played pivotal role in several groundbreaking initiatives related to renewable energy, electric grid modernization, electric mobility, energy storage and digitalization of utilities across continents during the past two decades.
    </p>
    <p style="text-align: justify; line-height: 1.6;">
        His current areas of research and work spans: Grid Integrated Vehicles, District Cooling Systems, Electric Cooking, Integration of Utilities - electricity + water + city gas distribution; Grid Interactive Buildings and Campuses; Artificial Intelligence, Robotics, Blockchain, Web 3.0 and Metaverse Applications for Utilities; Urban Air Mobility (UAM) Systems and the Future of Transportation; and Interconnection of Regional Grids in Asia - ASEAN, SAARC and GCC grids.
    </p>
    <p style="text-align: justify; line-height: 1.6;">
        In November 2016, Reji was unanimously elected as Chairman of Global Smart Grid Federation, now renamed as Global Smart Energy Federation (GSEF), a global umbrella organization of smart energy associations and utilities from around the globe headquartered in Washington DC, USA that was established by the US Department of Energy in 2010. Reji is also an advisor to Arab Renewable Energy Commission (AREC) since 2017; and works closely with the Association of Power Utilities in Africa (APUA), International Smart Grid Action Network (ISGAN) and LATAM Smart Grid Forum.
    </p>
    <p style="text-align: justify; line-height: 1.6;">
        As an entrepreneur, Reji has built successful enterprises in India and overseas and exited them. Presently he mentors several technology startups around the globe. He has studied Engineering, Finance, Management and Law; worked with NTPC and IBM and has been a senior consultant with ADB, World Bank and USAID. A recognized thought leader in renewable energy, smart grid technologies, smart cities and electric mobility, Reji is a popular key-note speaker at international symposiums and conferences. He has also contributed to several articles, books, research reports and white papers on a variety of topics.
    </p>
                <!-- <p style="text-align: justify; line-height: 1.6;">
                    Reji is the President of India Smart Grid Forum (<a href="https://www.indiasmartgrid.org" target="_blank">www.indiasmartgrid.org</a>) since its
                    inception in 2011 and is also the current Chairman of the Global Smart Energy
                    Federation (GSEF). He is an internationally renowned expert with over four decades
                    of experience in the electricity sector in diverse functions covering the entire value
                    chain and across continents. He is spearheading a mission to leverage technology
                    to transform the electric grids and provide clean and reliable electricity to every
                    citizen 24x7 at affordable cost. For decades he has been actively advocating for the
                    “Right to Electricity” that would ensure lifeline supply of electricity to all which is now
                    becoming a reality in India and several other developing countries; and also
                    advocating for the “Right to Sleep” to provide climate-controlled sleeping pods in
                    low-income communities. Reji has played a pivotal role in several groundbreaking
                    initiatives related to renewable energy, electric grid modernization, electric
                    mobility, energy storage, and digitalization of utilities across continents during the
                    past two decades.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    In November 2016, Reji was unanimously elected as Chairman of Global Smart Grid Federation, now renamed as
                    Global Smart Energy Federation (GSEF), a global umbrella organization of smart
                    energy associations and utilities from around the globe headquartered in Washington
                    DC, USA that was established by the US Department of Energy in 2010. Reji is also an
                    advisor to Arab Renewable Energy Commission (AREC) since 2017; and works closely
                    with the Association of Power Utilities in Africa (APUA), International Smart Grid
                    Action Network (ISGAN), and LATAM Smart Grid Forum.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    As an entrepreneur, Reji has built successful enterprises in India and overseas and exited them. Presently he
                    mentors several technology startups around the globe. He has studied Engineering,
                    Finance, Management, and Law; worked with NTPC and IBM and has been a senior
                    consultant with ADB, World Bank, and USAID. A recognized thought leader in
                    renewable energy, smart grid technologies, smart cities, and electric mobility, Reji is a
                    popular keynote speaker at international symposiums and conferences. He has also
                    contributed to several articles, books, research reports, and white papers on a variety of
                    topics.
                </p> -->
            </div>
        </div>
    </div>
</div>

<!-- Ritwik Anand   - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/RitwikAnand.png" alt="AtulBali" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Ritwik Anand,<br/>
                    Scientist E & Director (Electrotechnical Department),<br/>
                    Bureau of Indian Standards, Ministry of Consumer Affairs, Food &   
Public Distribution
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Mr Ritwik Anand is presently working as Scientist-E & Director in the   
Electrotechnical Department of the Bureau of Indian Standards (BIS). He   
joined Bureau of Indian Standards in the year 2012.He has worked on and   
is associated with a lot of important assignments related standardization   
in varied fields like Safety of Electrical Installations, LVDC Distribution   
Systems and Marine Energy Conversion Systems technical committees. 
                </p>
                <p style="text-align: justify; line-height: 1.6;">He is also the Member Secretary of the technical committee of Revision of   
National Electrical Code of India, SP 30 and Assistant Secretary of the IEC   
Systems Committee on Low Voltage Direct Current (IEC SyC LVDC).  
Notably, Mr. Anand was honored with the prestigious IEC 1906 Award by   
the International Electrotechnical Commission (IEC).</p>
                
                
            </div>
        </div>
    </div>
</div>

<!-- RS Selvam   -->
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/selvam.jpg" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							RS Selvam  <br/>Vice President of Research & Development<br/>Stelmec  
						</h1>
						<p>With over 40 years of extensive experience in the switchgear industry, RS Selvam   
is a seasoned expert in the design and development of medium-voltage (MV)   
switchgear products. His career began with a BE in Electrical & Electronics from   
Anna University, Chennai, followed by an MBA in Operations from Manipal   
University through distance education.  </p>
						<p>Throughout his career, RS Selvam has contributed to leading firms, including   
Southern Switchgear in Chennai, Eswaran & Sons Engineer Ltd., Chennai, Andrew   
Yule & Co. Ltd., and ECE Industries Ltd. in both Kolkata and Delhi. For the past 20   
years, he has served as the Vice President of Research & Development at Stelmec   
Limited, where he leads innovative projects in MV switchgear design, transitioning   
from oil-based to vacuum circuit breaker technology.  </p>
						<p>His expertise in the switchgear industry is deeply rooted in in-house design and   
development, making him a valuable asset and a respected figure in his field.</p>
					</div>
				
			</div>
		</div>
	</div>

<!-- Sandip Sinha - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SandipSinha.png" alt="AtulBali" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Sandip Sinha,<br/>
                    Vice President - Sales,<br/>
                    Trilliant Networks
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Sandip Sinha is a senior executive with over 20 years of experience in the   
energy sector, specializing in sales strategy, business development, and   
program delivery across Advanced Metering Infrastructure, renewable   
energy, smart grid, and battery energy storage domains. As Vice President   
of Sales at Trilliant Networks, he leads strategic engagements with power   
utilities, government agencies and AMISP, driving the adoption of   
advanced smart energy solutions. 
                </p>
                <p style="text-align: justify; line-height: 1.6;">Prior to Trilliant, Sandip held key leadership roles at Hitachi Energy, ABB,   
and Itron, where he played a pivotal role in expanding market presence   
and delivering large-scale technology programs. He brings a deep   
understanding of the evolving energy landscape and has been   
instrumental in promoting digital transformation within the sector.   
Sandip holds an MBA in Finance from the Indian Institute of Technology,   
Delhi, and a Bachelor's degree in Electrical Engineering from Bangalore   
University.   </p>
                
                
            </div>
        </div>
    </div>
</div>    

<!-- Shashank Mishra  - Updated Bio -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <!-- Speaker Image -->
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/ShashankMishra.png" alt="AtulBali" class="speaker-photo">
            </div>

            <!-- Speaker Content -->
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Shashank Mishra,<br/>
                    Joint Secretary,<br/>
                    Ministry of Power, Govt. of India
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Shashank Misra is Government Nominee Director on the Board   
of REC Limited since August 21, 2023. He is an IAS Officer (Madhya   
Pradesh: 2007) and holds B. Tech in Electrical Engineering from IIT Delhi.   
Presently, he is posted as Joint Secretary in the Ministry of Power,   
Government of India. Prior to joining in Ministry of Power, he has served   
in Department of Revenue, Ministry of Finance, Government of India.   
                </p>
                <p style="text-align: justify; line-height: 1.6;">He has also worked in various capacities in Government of Madhya   
Pradesh which includes Managing Director of Madhya Pradesh Road   
Development Corporation Limited, Madhya Pradesh Building   
Development Corporation Limited & Madhya Pradesh State Asset   
Management Company Limited, Chairman of Ujjain Smart City Limited and   
as CEO of Madhya Pradesh Rural Road Development Authority. Further, he   
is also Government Nominee Director on the Board of Power Finance   
Corporation Limited.</p>
                <p style="text-align: justify; line-height: 1.6;">Shri Shashank Misra holds Nil equity shares in the Company. Further, he   
has no inter-se relation with any other Director or Key Managerial   
Personnel of the Company.</p>
                
            </div>
        </div>
    </div>
</div> 

<!-- Teppo Hemiä -->

<!-- Swapnadeep Banerjee -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SwapnadeepBanerjee.jpg" alt="Swapnadeep Banerjee" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Swapnadeep Banerjee,<br/>
                    Customer Solutions Manager<br/>
                    Trilliant
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Swapnadeep Banerjee is a Customer Solutions Manager in Trilliant Networks India
                    Private Limited and is responsible for pre-sales and solution architecture for
                    product solutions for growth of business in India and Asia Pacific. He has been
                    an integral part of the System Integration team which started the 4 million
                    smart meter rollout for the states of UP and Haryana under the EESL Phase 1
                    project. Swapnadeep has over 17 years of industry experience with expertise
                    across Telecom OSS/BSS, Smart IoT solutions and AMI Solutions.
                </p>
            </div>
        </div>
    </div>
</div>
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/TeppoHemia.jpg" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							Teppo Hemiä<br/>CEO<br/>Wirepas
						</h1>
						<p>Teppo is a technology and business executive with 30 years of experience from creating, developing and delivering innovative global wireless technology products and solutions. He has experience from several successful business creations and turnarounds, from a startup to an established business with half a billion top line.</p>
						<p>Teppo Hemiä has been the founder and CEO of Wirepas since 2014. Wirepas offers a singular connectivity technology with unique licensing business model. The completely de-centralized device connectivity, also part of 5G standards, helps customers to lower the cost of data acquisition while keeping the reliability levels very high at any scale and networks private.</p>
						<p>Before joining Wirepas he has held several demanding positions at Nokia, STMicroelectronics and ST-Ericsson.</p>
					</div>
				
			</div>
		</div>
	</div>

<!-- Vishakha Chavan -->
	<div class="row speaker_row">
		<div class="k_list_part ">
			<div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
				<div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
						<img src="images/2026/speakers/VishakhaChavan.jpg" style="width:60%">
					</div>
					<div class="speaker_content">
						<h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
							Vishakha Chavan<br/>Associate Product Manager<br/>Impresa.ai
						</h1>
						<p>Vishakha Chavan is a seasoned AI/ML professional with deep expertise in machine learning, big data analytics, and cloud-based AI solutions. As a Product Manager, she leads the development of cutting-edge AI applications using state-of-the-art technologies to build scalable, production-ready models.</p>
						<p>Her portfolio spans diverse projects, including energy disaggregation, load forecasting, AI-powered chatbots, energy theft detection, and transformer load monitoring, showcasing her ability to transform complex datasets into actionable intelligence. Passionate about real-world AI applications, Vishakha thrives on optimizing models for efficiency, ensuring seamless deployment, and driving AI-powered innovation to tackle industry challenges at scale.</p>
					</div>
				
			</div>
		</div>
	</div>

	
	
	
	
	


</div>

	
			<br/>
			<div style="text-align:center">
				<p>For More information: <a href="http://dumindia.in/speaker2024.php">http://dumindia.in/speaker2024.php</a></p>
				<p>For More information: <a href="http://dumindia.in/speaker2023.php">http://dumindia.in/speaker2023.php</a></p>

				<p>For More information: <a href="http://dumindia.in/speaker2022.php">http://dumindia.in/speaker2022.php</a></p>

				<p>For More information: <a href="http://dumindia.in/speaker2021.php">http://dumindia.in/speaker2021.php</a></p>
				</div>
<br><br>
	</div>




<!-- key objective ends here -->

<?php include "include/footer.php"; ?>