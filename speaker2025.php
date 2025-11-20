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
.key_head {
            font-size: 25px !important;
            text-align: left !important;
            text-transform: capitalize !important;
            margin-bottom: 15px !important;
            margin-top: 0 !important;
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


    <!-- Abha Shukla -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/AbhaShukla.png" alt="Abha Shukla" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Abha Shukla,<br/>
                            ACS -- Energy<br/>
                            Government of Maharashtra
                        </h1>
                        <p>
                            Abha Shukla (IAS) joined the Indian Administrative Service in 1993. Since November 2022, she is heading the energy department in, Government of Maharashtra.
                        </p>
                        <p>
                            Her previous assignment was as Principal Secretary in Co-operation, Information Technology, Finance Department. She has worked in various Ministries in the State and Central Governments including Information & Broadcasting, Road Transport & Highways, Power Bureau of Energy Efficiency and Civil Aviation.
                        </p>
                        <p>
                            She has also served on various key positions 'Addl. Commissioner' in Tribal Development Department, Director Textile Department etc. She worked as CEO at Z.P. Gondia and Bhandara, She has completed her post-graduate studies in Geography.
                        </p>
                        <p>
                            She has also attended several mid-career programmes. Apart from short term courses at Indian Institute of Management she also participated at in Climate Change and State Preparedness- Impacts, Vulnerability and Adaptation programme of The Energy and Resources Institute (TERI).
                        </p>
                    </div>
                </div>
            </div>
        </div>


    <!-- Aakash Saxena -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AakashSaxena.jpg" alt="Aakash Saxena" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Aakash Saxena,<br/>
                    COO<br/>
                    CESC Rajasthan
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Aakash Saxena is a seasoned professional with over two decades of comprehensive experience in power distribution operations, business development, and project management. Currently serving as the Chief Operating Officer of Bharatpur Electricity Services Ltd. (a CESC Ltd. subsidiary), he leads end-to-end distribution operations for Bharatpur city, driving efficiency, consumer satisfaction, and sustainable growth. Aakash has played a pivotal role in transforming urban power distribution landscapes through loss reduction, process re-engineering, and digital enablement. His distinguished career spans leadership roles at Torrent Power Ltd., Essar Power Ltd. & BSES Delhi, where he spearheaded multiple high-impact projects for power distribution operations. He continues to make significant contributions to the evolving power sector through innovation, operational excellence, and effective stakeholder collaboration.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Amit Tripathi -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AmitTripathi.jpg" alt="Amit Tripathi" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Amit Tripathi,<br/>
                    Advisor - Power Sector<br/>
                    Coalition for Disaster Resilient Infrastructure (CDRI)
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Amit specialises in the power industry, renewable energy, energy efficiency, and climate change. He has provided advice to the multilateral, bilateral, government, and business sectors on a wide range of issues. Amit has a successful track record in Energy & Sustainability Consultancy, Management Strategy, Program Design, Policy Advocacy, and Project Management in the Sustainability & Clean Energy Sector, spanning more than a decade. In the energy and climate change sector, Amit advised the World Bank, UNEP, UNDP, DFID, and a number of other private sector companies. Amit graduated from Bharati Vidyapeeth University in India with a bachelor's degree in mechanical engineering and a master's degree in Global Energy and Climate Change Policy.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Anil Rawal -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AnilRawal.jpg" alt="Anil Rawal" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Anil Rawal,<br/>
                    MD & CEO, IntelliSmart and<br/>
                    Chair of ISGF Working Group on AMISPs
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Mr Anil Rawal is the MD & CEO of IntelliSmart Infrastructure Private Limited. He is an ex-civil services officer of the 1996 batch and has more than 27 years of leadership experience across both corporate and government organisations. He is an IIM, Ahmadabad alumnus of the 2007 batch and since then has been working with corporates, particularly in the power sector. In government stint, Mr Rawal has held leadership positions in various capacities in financial, contractual, and commercial domains. He has also been actively involved in the evolution of the Public Private Partnership (PPP) framework for power infrastructure projects and the digitalisation drive in the country.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Anish Kalucha -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AnishKalucha.jpg" alt="Anish Kalucha" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Anish Kalucha,<br/>
                    CIO and Head of IT Automation<br/>
                    Noida Power Company Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Anish Kalucha is the CIO and Head of IT & Automation at Noida Power Co. Ltd., a subsidiary of the RPSG Group. With over 30 years of extensive experience in IT and technology in Power Sector, including 7 years as the CIO & Head of IT at BSES Yamuna Power Ltd. (BYPL), Anish brings a wealth of knowledge and expertise to his current role. At NPCL, Anish plays a pivotal role in shaping the company's IT and digital strategy, focusing on key areas such as customer engagement, product transformation, employee empowerment, and operational optimization. He is also driving innovation in areas like analytics, the Internet of Things (IoT), Robotic process automation, AI, Gen AI and smart grids.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Abhishek Ranjan -->
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

<!-- Adarsh Nagarajan -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AdarshNagarajan.jpg" alt="Adarsh Nagarajan" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Adarsh Nagarajan,<br/>
                    Principal Researcher, NREL and<br/>
                    Consultant, BSES Rajdhani Power Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Adarsh Nagarajan, Ph.D. is a Principal Researcher at the U.S. Department of Energy's National Renewable Energy Laboratory (NREL), where he leads cutting-edge research on emerging energy technologies, including energy storage, advanced grid modeling, and distributed energy systems. He serves as an advisor to the U.S. Department of Energy and directs NREL's South Asia energy transition program, supporting regional governments in grid modernization and policy development. With over 100 peer-reviewed publications and 1,000 citations, Dr. Nagarajan is a senior IEEE member. Adarsh is currently on a sabbatical from NREL and is working with BSES Rajdhani Power Limited (BRPL), collaborating on advanced grid modeling and modernization strategies.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Alok Kumar -->
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

<!-- Alok Mishra -->
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

<!-- Amit Singh Parihar -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AmitParihar.jpg" alt="Amit Singh Parihar" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Amit Singh Parihar,<br/>
                    Director – Clean Power Programme<br/>
                    Shakti Sustainable Energy Foundation
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Amit Singh Parihar leads the Clean Power Programme at Shakti Sustainable Energy Foundation, driving initiatives that accelerate India's transition toward a low-carbon, renewable-powered future. An energy and environment professional with over 12 years of experience in climate change, clean energy, and sustainable development, he brings a strong blend of research, policy, and implementation expertise. Mr. Parihar holds a Ph.D. and M.Tech from IIT Bombay, and a Bachelor's in Mechanical Engineering from RGPV Bhopal. His work spans renewable integration, energy transition strategies, decarbonization pathways, and innovative business models for clean power adoption.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Anand Budholia -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AnandBudholia.jpg" alt="Anand Budholia" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Anand Budholia,<br/>
                    President – IT & Group CIO<br/>
                    BRPL & BYPL Delhi
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Anand Budholia serves as the President – IT & Group CIO at BRPL & BYPL Delhi, a joint venture between Reliance Infrastructure Limited and the Government of NCT of Delhi. With over 35 years of techno-commercial experience in utilities, power, and manufacturing sectors, he brings unparalleled expertise to his role. As President – IT & Group CIO, Mr. Budholia drives Group BSES Delhi's digital transformation journey, strengthening IT systems for smarter and more resilient power distribution. Before joining BSES Delhi, Mr. Budholia held key positions, including Joint President & CIO at MP Birla Group and Senior Vice President & CIO at Reliance Group/Reliance Power.
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

<!-- Anoop Kaur Bowdery -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/AnoopBowdery.jpg" alt="Anoop Kaur Bowdery" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Anoop Kaur Bowdery,<br/>
                    Chief Executive Officer<br/>
                    EDX Wireless
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Anoop Kaur Bowdery is a visionary technology leader with more than 20 years of experience in the global wireless industry. As CEO of EDX Wireless, she drives the company's strategic direction and innovation across advanced RF planning, AI-driven analytics, and sustainable network design—empowering operators, utilities, and enterprises to build the next generation of connected infrastructure. Under her leadership, EDX Wireless has expanded its global presence, supporting customers and partners across North America, Latin America, Europe, the Middle East, and the Asia-Pacific region. She serves on the Utilities Technology Council (UTC) Telecom Committee and is an active IEEE member.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Ashish Kumar Goel -->
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

<!-- Ashok Kumar Thanikonda -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/AshokKumarThanikonda.jpg" alt="Ashok Kumar Thanikonda" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Ashok Kumar Thanikonda,<br/>
                            Sr. Program Officer<br/>
                            Global Green Growth Institute (GGI)
                        </h1>
                        <p>
                            Ashok Kumar Thanikonda is a Senior Program Officer at the Global Green Growth Institute (GGGI), where he oversees the Asia Low Carbon Buildings Transition project and leads sustainable finance work in India.
                        </p>
                        <p>
                            Over the past 14 years, he has worked extensively at the intersection of clean energy, electric mobility, and the circular economy. Before joining GGGI, he managed Intellecap's Circular Apparel Innovation Factory to advance climate-resilient, circular value chains in the global South.
                        </p>
                        <p>
                            Earlier, he spent nearly a decade at the World Resources Institute's Green Power Market Development Group, helping scale up renewables through transaction support, demand aggregation, policy advocacy, and innovative business models.
                        </p>
                        <p>
                            He holds an M.Sc. in Natural Resources Management from TERI University and a B.Sc. in Microbiology, Genetics, and Chemistry from Osmania University.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Ashutosh Goel -->
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

<!-- Atul Bali -->
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

<!-- Brajesh Kumar -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/BrajeshKumar.jpg" alt="Brajesh Kumar" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Brajesh Kumar,<br/>
                    Chief Operating Officer<br/>
                    BSES Yamuna Power Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Brajesh Kumar serves as the Chief Operating Officer (COO) at BSES Yamuna Power Limited (BYPL), a joint venture between Reliance Infrastructure Limited (51%) and the Government of NCT of Delhi (49%). With over 30 years of techno-commercial experience in industries such as aluminium, steel, telecom, and power distribution, Shri Kumar brings a wealth of expertise to his role. Before assuming the position of COO on July 1, 2025, he held the position of Chief Business Officer (CBO) at BYPL. Since joining BSES in 2009, Shri Kumar has worked across various departments, driving initiatives such as remarkable loss reduction drives, digital transformation, and consumer services.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Devanand Pallikuth -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/DevanandPallikuth.jpg" alt="Devanand Pallikuth" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Devanand Pallikuth,<br/>
                    Head – Integrated Control Centre<br/>
                    The Tata Power Company Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Mr. Devanand Pallikuth is a seasoned power-sector professional with over two decades of experience in power distribution, grid operations, and smart energy systems. As Head of Mumbai's Integrated Control Centre at Tata Power, he oversees critical transmission assets, hydro operations, and the city's distribution network—ensuring reliability, resilience, and operational excellence. A pioneer in smart grid transformation, he earlier spearheaded Asia's first Advanced Distribution Management System (ADMS) integrating GIS, SCADA, and CRM at Tata Power Delhi Distribution Ltd., and established Delhi's Smart Grid Lab, now a national benchmark. His work has advanced renewable integration, cybersecurity frameworks, and consumer-centric energy trading pilots.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Chintamani Chitnis -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/ChintamaniChitnis.jpg" alt="Chintamani Chitnis" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Chintamani Chitnis<br/>
                            Chief --Distribution Services (Mumbai Operations)<br/>
                            Tata Power Company Ltd
                        </h1>
                        <p>
                            Chintamani Chitnis is presently Chief --Distribution Services (Mumbai Operations) Tata Power Company Ltd, Mumbai.
                        </p>
                        <p>
                            A Core Power Sector professional in Transmission and Distribution with over 30 years of varied experience with State, Private and PPP Utilities, having worked at Tata Power Company Mumbai, North Delhi Power Ltd (now TPDDL), TPCODL and State Distribution Utilities.
                        </p>
                        <p>
                            He has presented & published more than 30 Technical papers in various National and International Forums like CPRI, CIGRE, CIRED, ISGF, IEEE, Doble, CBIP, BIS and IIPE.
                        </p>
                        <p>
                            Has been a member of working groups of Bureau of Indian Standards (BIS) including Transformers and Insulating Fluids, member of committees on revision of CEA Safety Regulations and CEA Technical Standards of Construction.
                        </p>
                        <p>
                            He has been founding member of TPCODL and was instrumental in establishing first of its kind Centralized Power System Control Centre in India for state of Odisha at Bhubaneswar.
                        </p>
                        <p>
                            Areas of work include Operations & Maintenance, Network Planning, Design and Engineering, Geographical Information System (GIS), Distribution Automation (DA), Distribution Management System (DMS), Power System Control, Digitalization, Power Quality Monitoring & Assessment, Regulatory Interface, Grid & Distribution Operations, Power Management, Underground Cable network management, Safety and Construction Standards, Key Consumer Management etc.
                        </p>
                        <p>
                            He is a Research Scholar at IIM Sambalpur and University of Bordeaux France, holds a Masters in Power Sector Regulations, Economics and Management from Indian Institute of Technology, Kanpur (IITK), a Post Graduate Diploma in Operations Management and Engineering Degree.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Deepti Sharma -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/DeeptiSharma.jpg" alt="Deepti Sharma" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Deepti Sharma,<br/>
                    Addl Vice President<br/>
                    BSES Rajdhani Power Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Deepti Sharma is currently Head - Central Engineering Services (CES) in BSES Rajdhani Power Limited (BRPL), Delhi. With more than 22 years of experience in various verticals of distribution sector such as System Operation, Planning, Key Consumer Cell, Project Appraisal & Monitoring and Engineering. Her area of expertise is planning & network management. She is leading the team for Planning of Distribution network and Equipment Design Engineering of equipment's installed across BRPL network. Deepti is driven by the ambition to build efficient, reliable and future ready network for meeting load growth and adapting to new challenges.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Dhananjay R Aundhekar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/DhananjayAundhekar.jpg" alt="Dhananjay R Aundhekar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Dhananjay R Aundhekar,<br/>
                            Executive Director<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Dhananjay R. Aundhekar is an accomplished professional with over 25 years of experience in the electricity and power distribution sector. He currently serves as the Executive Director-III (Infra) at Maharashtra State Electricity Distribution Company Limited (MSEDCL), one of the largest power distribution companies in India, responsible for supplying electricity to the state of Maharashtra.
                        </p>
                        <p>
                            Dhananjay holds a Bachelor's degree in Electrical Engineering (BE) and he pursued a Master's degree in Business Administration (MBA) with a specialization in Finance.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Dwijadas Basak -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/DwijadasBasak.jpg" alt="Dwijadas Basak" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Dwijadas Basak,<br/>
                    Chief Executive Officer<br/>
                    Tata Power Delhi Distribution Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Mr. Dwijadas Basak is the Chief Executive Officer (CEO) of Tata Power Delhi Distribution Limited, a Joint Venture between Tata Power and the Government of National Capital Territory of Delhi, supplying electricity to a population of around 9 million in North & North-West Delhi. This is Mr. Basak's second stint with Tata-Power-DDL. Mr. Basak brings over three decades' experience in power distribution management. A seasoned electrical engineer, he has held various leadership positions within the Tata Power Group. From 1991 to 2002, Mr. Basak worked in the power distribution sector in India and Brazil.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Gajanan S Kale -->
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
recognitions for his leadership, including the "Best CEO of the Year with   
HR Orientation" and the "Best CEO of the Year" award for FY 2023-24.  
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

<!-- Gaurav Sharma -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/GauravSharma.jpg" alt="Gaurav Sharma" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Gaurav Sharma<br/>
                            General Manager<br/>
                            Noida Power Company Limited
                        </h1>
                        <p>
                            Gaurav leads the Planning and Engineering functions at Noida Power Company Limited. He drives network augmentation, grid modernization and digital transformation initiatives to enhance network reliability, operational efficiency, safety and customer experience.
                        </p>
                        <p>
                            Previously, he led Planning and Engineering at BSES Delhi delivering significant improvement in network performance. An Electrical Engineer with over 22 years of experience, he specializes in strategic planning, system design, project management, protection, metering, commissioning, and operations across power transmission and distribution networks.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Gurpreet Oberoi -->
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

<!-- Himanshu Chawla -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/HimanshuChawla.jpg" alt="Himanshu Chawla" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Himanshu Chawla,<br/>
                    Head - Regulatory (Senior Specialist)<br/>
                    Power Foundation of India
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Himanshu Chawla has an experience of around 16 years in the Power Sector across various domains and has served in various capacities at State Electricity Regulatory Commissions (DERC & HERC), Essar Power (Commissioning of 2X600 MW Power Plant) and ICRA (Consultancy) wherein he has effectively utilised his Techno-Commercial Educational qualifications of Management, Engineering and Climate Change from University of British Columbia. His last position was Joint Director (Tariff-Engineering) in DERC. Himanshu specialises in Regulations including Tariff, Energy Storage, Supply Code, Performance Standards, Power Markets, Roof Top Solar through Net Metering, Virtual & Group Net Metering, P2P Trading etc.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Isha Duhan -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/IshaDuhan.jpg" alt="Isha Duhan" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Isha Duhan,<br/>
                    Managing Director<br/>
                    PVVNL
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Mrs. Isha Duhan, a 2014 batch IAS officer, has built an exemplary career in public service, demonstrating strong leadership and effective governance across various roles. Starting as an Assistant Magistrate and Collector in Meerut, she progressed to Joint Magistrate in Varanasi and Chief Development Officer in Bulandshahr and Meerut. Her leadership skills were notably displayed as Vice Chairman of the Varanasi Development Authority and as District Magistrate and Collector of Chandouli. In 2023, she served as Additional Commissioner for the Meerut Division and the Commercial Tax Department in Gautam Budh Nagar. Since February 27, 2024, she has held the position of Managing Director of PVVNL in Meerut, where she continues to contribute significantly to the energy sector.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Kishor Narang -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/KishorNarang.jpg" alt="Kishor Narang" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Kishor Narang,<br/>
                    Founder, Mentor, Principal Design Strategist & Architect<br/>
                    Narnix Technolabs Pvt. Ltd.
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Kishor is Technology Advisor, Mentor, Design Strategist & Architect in Electrical, Electronics & ICT with over 48 years of professional experience in education, research, design and advisory running an Independent Design House -- NARNIX since 1981. Over 38 years of hardcore Research and Design Development Experience in Solutions, Systems, Products, Hardware, Software & Firmware across diverse technology & application domains. Leading multiple National & Global Standardization Initiatives & Projects at BIS, TSDSI, IEEE, IEC, ISO, ITU and IETF. Mentoring many Deep Tech & Disruptive Tech Startups in the domains of 5G/6G, Defense, Aerospace, e-mobility, Autonomous Vehicles, Drones, Robotics, AR/VR/XR and Artificial Intelligence.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Kaustuv Mohapatra -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/KaustuvMohapatra.jpg" alt="Kaustuv Mohapatra" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Kaustuv Mohapatra,<br/>
                    Vice President<br/>
                    Radius
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Kaustuv Mohapatra is a Seasoned Power industry professional with over 18 years of experience spanning policy, regulatory, market, and technical domains across Smart Electricity Metering, Electric Vehicle (EV) Charging Infrastructure, Power Generation, Transmission and Distribution. Currently leading AMISP/Smart Metering Business at Radius Synergies International Pvt Ltd, driving the scale-up of IoT-based Smart Metering Solutions.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Holds an MBA from the Management Development Institute (MDI), Gurgaon, an M.S in Electrical Power Systems from University of Greenwich (U.K), and a B.Tech. in Applied Electronics & Instrumentation Engineering.
                </p>

                <p style="text-align: justify; line-height: 1.6;">
                    Previous experience includes key roles with JioThings (IoT arm of  Reliance Jio), PwC, EY, and Vedanta, contributing to strategic initiatives in smart grids, metering, and power sector transformation.
                </p>

            </div>
        </div>
    </div>
</div>

<!-- Manish Patel -->
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

<!-- Matt Gleeson -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/MattGleeson.jpg" alt="Matt Gleeson" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Matt Gleeson,<br/>
                    VP -- Energy Transition<br/>
                    Oracle Energy and Water
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Matt boasts an impressive 25-year tenure in the utility sector, where he has served as a pivotal consultant to Oracle's clientele and partners, driving energy business transformation and fostering innovation. His influence has been pivotal in steering through the waves of deregulation sweeping across Asia Pacific, Europe, and the Americas. Matt's collaborative efforts with customers and partners have been instrumental in optimizing outcomes across diverse domains, ranging from grid performance to heightened customer engagement. His fervor lies in witnessing utilities harness their boundless potential to elevate customer experiences, fine-tune utility operations, and expedite decarbonization objectives. Matt's driving passions encompass: 1. Fostering a forward-moving drive within utilities to initiate their journey towards a low-carbon energy future, while also embracing inventive methodologies for water conservation. 2. Unleashing the true potential of AMI and grid data for energy enterprises, effecting meaningful change. 3. Pioneering a novel energy company-consumer relationship that begets shared advantages, both financial and environmentally driven. 4. Disrupting conventional power-planning paradigms by propounding alternatives like demand response and behavioral shifts. Using these innovative approaches to sidestep superfluous generation and greenhouse gas emissions. 5. Forging a nexus among ESG, EV, and DER aspirations, seamlessly translating visionary ideals into pragmatic solutions for the ever-evolving energy landscape.
                </p>
            </div>
        </div>
    </div>
</div>    

<!-- Moëz Cherif -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/MoezCherif.jpg" alt="Moëz Cherif" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Moëz Cherif,<br/>
                    Infrastructure Program Leader for the Maghreb<br/>
                    World Bank
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Moëz Cherif is India Energy Lead at the World Bank in New Delhi, supporting the energy transition through policy dialogue, investments and analytics. Previously coordinated the infrastructure sector engagement of the World Bank in the Maghreb countries (MENA). With more than 20 years of experience in the energy and infrastructure sectors, he currently focuses on promoting investments in green energy and transport infrastructure, improving the performance of energy sectors and integrating cross-border electricity markets, as well as promoting access to competitive digital services. Previously, he worked as an infrastructure economist at IFC, then joined the World Bank in 2008.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Nidhi Kumar Narang -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/NidhiKumarNarang.jpg" alt="Nidhi Kumar Narang" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Nidhi Kumar Narang,<br/>
                    Former Director (Finance)<br/>
                    Uttar Pradesh Power Corporation Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Nidhi Kumar Narang is a veteran finance professional with over four decades of leadership experience across India's power and infrastructure sectors. Until August 2025, he served as Director (Finance), UPPCL, where he also held additional charge as Director (Finance) of UPPTCL, UPRVUNL, UPSLDC, and UPREV, and served as Nominee Director on multiple utility boards including PVVNL, MVVNL, DVVNL, PuVVNL, KESCO, MEJA Urja, NUPPL, and UCM Coal Co. Ltd. Prior to this, he held senior leadership positions such as CFO – Punj Lloyd Ltd., CFO – Hindustan Powerprojects Pvt. Ltd., and Sr. Vice President (Finance) – Reliance Infrastructure, following a distinguished 25-year tenure with NTPC.
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

<!-- Pradeep Aggarwal -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/PradeepAggarwal.jpg" alt="Pradeep Aggarwal" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Pradeep Aggarwal,<br/>
                            General Manager - EV cell and Open Access<br/>
                            BSES Rajdhani Power Limited
                        </h1>
                        <p>
                            Pradeep has been associated with the Reliance ADAG group from last more than 20 years and worked with different verticals starting from Power Trading, Business Development, Regulatory & Commercial and Distribution business across both locations at Delhi and Mumbai.
                        </p>
                        <p>
                            In his present role he is working with BSES Rajdhani Power Limited and leading E-Mobility & Open Access Team.
                        </p>
                        <p>
                            Pradeep is an engineer with B.Tech in Power (Electrical) from National Power Training Institute and PGDM from IIM, Lucknow.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Pareekshit Bharadwaj -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/PareekshitBharadwaj.png" alt="Pareekshit Bharadwaj" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Pareekshit Bharadwaj,<br/>
                            Chief (Network & Operation), Sr. Vice President<br/>
                            BSES Yamuna Power Limited
                        </h1>
                        <p>
                            Mr. Pareekshit Baradwaj has been working with BYPL for around 21 years. Prior to this, he served in a State-Owned Discom for 20 years. With an extensive overall experience of 41 years in the Power Distribution domain, he has handled diverse portfolios including O&M, EHV, P&E, Business, and Enforcement, and is presently serving as Chief of Network & Operation.
                        </p>
                        <p>
                            Under his able leadership, BYPL has successfully achieved several milestones such as excellence in O&M parameters and adherence to regulatory timelines, achieving AT&C loss of 6.02% with an overall reduction of 90%, and implementation of innovative projects like E-House, 66 kV Hybrid Installation, Micro Substation, Distribution Automation, and GIS Grids.
                        </p>
                        <p>
                            He has also driven automation initiatives in O&M, including the adoption of state-of-the-art SCADA systems, and under his guidance, the company has won numerous awards in Quality and Safety.
                        </p>
                        <p>
                            Under his visionary leadership, the power distribution network has become more efficient, reliable, and resilient. His commitment to innovation and safety has ensured consistent energy supply, empowering communities and driving progress. His ability to inspire teams and navigate complex challenges has transformed power delivery. Beyond operational excellence, his inclusive leadership fosters collaboration, empowers teams, and drives innovation, setting a benchmark for excellence in the energy sector.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pankaj Kumar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/PankajKumar.png" alt="Pankaj Kumar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Pankaj Kumar,<br/>
                            Managing Director<br/>
                            Uttar Pradesh Power Corporation Limited
                        </h1>
                        <p>
                            Shri Pankaj Kumar is the Managing Director of Uttar Pradesh Power Corporation Limited (UPPCL). He is an Indian Administrative Service (IAS) officer of 2002 batch. Pankaj Kumar holds a Bachelor's degree in Philosophy.
                        </p>
                        <p>
                            With a career spanning over two decades, Shri Kumar has held various positions in the Indian power sector, including leadership roles in generation, transmission, and distribution companies. His expertise lies in strategic planning, operational improvement, and team management.
                        </p>
                        <p>
                            Under his leadership, Uttar Pradesh Power Corporation Limited aims to enhance power supply, reduce transmission losses, and promote renewable energy initiatives. His leadership role at UPPCL includes overseeing the operational and administrative functions of the organization, which is crucial for managing the electricity supply and services in Uttar Pradesh.
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

<!-- Pradeep Kumar Jena -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/PradeepKumarJena.jpg" alt="Pradeep Kumar Jena" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Pradeep Kumar Jena,<br/>
                    Chairperson<br/>
                    Odisha Electricity Regulatory Commission
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Pradeep Kumar Jena belongs to 1989 batch of Indian Administrative Service Officer of Odisha Cadre. He has 35 years of working experience in Administration. Since then, he has worked in diverse sectors from Agriculture and Natural Resources Management to Rural Development, Transport, Tax Administration, Industrial Development, Information Technology, Science & Technology, Panchayati Raj, Electricity, Water Resources Management and Disaster Management. He started his career as Sub-Collector, Dharmagarh Sub-Division in Kalahandi District. He has served as Collector of Cuttack District during Super Cyclone 1999 and as Collector Kalahandi District where he had initiated several path breaking initiatives in poverty reduction, natural resources management and decentralized and participatory development policies. He was Principal Secretary of Panchayati Raj and Drinking Water Department, Department of Water Resources and Department of Energy. He was Assistant Country Director-cum-Team Leader, UNDP Disaster Risk Management Programme looking after sixteen States of the Country.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Jena was the Development Commissioner-cum-Additional Chief Secretary to Govt. with additional charge of Additional Chief Secretary to Govt., Rural Development Department, Special Relief Commissioner and Managing Director, OSDMA. He was instrumental in managing several cyclones of very high severity and has ensured Zero Human Casualty in each of the eight cyclones of severe intensity between July 2019 and June 2024.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    He has implemented several programmes maintaining Disaster Risk Reduction, particularly in power sector. He is a veteran in Disaster Management (Pre, During and Post Disaster) including response, recovery, rehabilitation, mitigation and adaption. Further, he had significant contribution in designing Just Transition in the state of Odisha.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    He had taken up the responsibility of Chief Secretary & Chief Development Commissioner from 01.3.2023 to 30.6.2024. Shri Jena has taken oath as the Chairperson, Odisha Electricity Regulatory Commission on 08th April, 2025.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Prudhvitej Immadi -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/PrudhvitejImmadi.jpg" alt="Prudhvitej Immadi" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Prudhvitej Immadi,<br/>
                    CMD<br/>
                    AP Eastern Power Distribution Company Ltd
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Prudhvitej Immadi is an Indian Administrative Service (IAS) officer of the 2018 batch from the Andhra Pradesh cadre. He currently serves as the Chairman and Managing Director of the Andhra Pradesh Eastern Power Distribution Company Limited (APEPDCL). Immadi has held several key positions in the state's power and energy sector. Before taking charge of APEPDCL in April 2023, he served as Joint Managing Director, APTRANSCO and Member-Convener of the Andhra Pradesh Power Coordination Committee, where he played a vital role in power procurement and sectoral coordination. He has also served as Deputy Secretary (Energy) and held Full Additional Charge (FAC) as Managing Director, AP Power Finance Corporation.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Ramkrishna Singh -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/ramkrishnaSingh.jpg" alt="Ramkrishna Singh" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Ramkrishna Singh,<br/>
                            Head-Business Operations - EV Charging<br/>
                            The Tata Power Company Limited
                        </h1>
                        <p>
                            Mr Ramkrishna Singh is a veteran Power Sector professional and Change Management expert having three decades of extensive experience with India's largest private power distribution utilities in the field of Commercial, Operation, Engineering & Procurement, Project Management Consultancy & Implementation and Electric Vehicle charging infrastructure development etc.
                        </p>
                        <p>
                            Presently He is building & expanding EV Charging business for Tata Power as a Head -- Business Operations- EV Charging and is responsible for Strategy formulation, Concept to Commissioning and Operations of EV Charging Infrastructure for Home, Public, Fleet and Bus segment along with digital platform across India.
                        </p>
                        <p>
                            He has played key role in turning around and change management of Delhi's Power Distribution business at BRPL/BYPL and TATA Power-DDL. He has also been actively involved with BIS and CEA for formulations and amendments of Electronic Meter standards and regulations, Smart Meters /AMI standards and regulations, Meter Protocol standardisation, formulation of renewable/solar energy policy for Delhi, Punjab and Goa.
                        </p>
                        <p>
                            Mr Singh is an Electrical Engineering graduate and Management postgraduate from NMIMS, Mumbai. He is a fellow member of Institution of Engineers (India) and a certified Energy Auditor from BEE.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Rahul Kumar -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/RahulKumar.jpg" alt="Rahul Kumar" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Rahul Kumar,<br/>
                    Managing Director<br/>
                    North Bihar Power Distribution Company Limited
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Rahul Kumar currently serves as Managing Director, North Bihar Power Distribution Company Ltd., with additional charge of Bihar State Power Transmission Company Ltd. and Bihar Renewable Energy Development Authority. Over his distinguished 14-year career, he has played a pivotal role in implementing various flagship schemes of both the State and Central Governments, with a focus on health, education, power sector, rural development, and public distribution systems. His exemplary leadership and contributions have earned him numerous accolades, including the National Water Award (2023) presented by the Hon'ble Vice President of India, the Champion of Change Award (2019) by NITI Aayog, and recognition by the Chief Minister for 100% district electrification (2018).
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Rahul Tongia -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/RahulTongia.png" alt="Rahul Tongia" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Rahul Tongia,<br/>
                            Senior Fellow<br/>
                            CSEP and Founding Advisor, ISGF
                        </h1>
                        <p>
                            Dr. Rahul Tongia is a Senior Fellow with the Centre for Social and Economic Progress (CSEP), a leading not-for-profit Think Tank in New Delhi, where his work focuses on technology and policy, especially for sustainable development. He co-leads the Energy, Natural Resources, and Sustainability group at CSEP, and is also active in broader issues of technology.
                        </p>
                        <p>
                            Tongia's work spans the entire gamut of energy and electricity, with focuses on supply options including renewable energy (covering finance, grid integration, etc.); smart grids, which use innovative information and communications technology to improve management of the electric utility grid; issues of access and quality; and broader issues of reforms and regulations, including electricity and energy pricing.
                        </p>
                        <p>
                            Another thread of his work focuses on climate equity and the energy transition. His book Future of Coal in India: Smooth Transition or Bumpy Road Ahead (2020) was awarded a Top Energy Policy Book to read in 2021 by BookAuthority.
                        </p>
                        <p>
                            He was a pioneer for establishing the Smart Grid space in India and was Technical Advisor of the Government of India's Smart Grid Task Force, and he remains Founding Advisor of the India Smart Grid Forum (ISGF). He was also on the Technology Advisory Board 2005-2008 for Southern California Edison's award-winning smart grid rollout. He is also a Fellow of the Indian National Academy of Engineering.
                        </p>
                        <p>
                            Rahul Tongia is a non-resident Senior Fellow at the Brookings Institution and also Adjunct Professor at Carnegie Mellon University, having originally joined the faculty at CMU in 1998. Previous roles include Vice-Chair of the UN ICT Task Force Working Group on Low-cost connectivity-access/enabling environment and Member of the World Economic Forum's Global Futures Council on Advanced Energy Technology.
                        </p>
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
                    including eMudhra, India's pioneering Certifying Authority, and KrypC, which has
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
                    "Ambassador for the Americas", for the Global Smart Energy Federation, USA, and as   
                    an Advisor to the India Smart Grid Forum. He is an empanelled expert at the Coalition   
                    for Disaster Resilient Infrastructure (CDRI), a 51-country member organization.   
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    With over 42+ years of experience in the Energy and Power Systems area in Canada,   
                    he mentors several utilities and companies in their technology development. His is   
                    active in several IEC, CSA, GSEF, ISGF, CDRI technical committees, in the areas of   
                    sustainable energy, transportation, energy storage, microgrid and e-mobility. He is an   
                    invited speaker internationally and has co-authored over 50 technical papers and   
                    published 75 articles. His former Corporate Directorships include Larsen & Toubro's -   
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

<!-- Reena Suri -->
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

<!-- Reji Kumar Pillai -->
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
        Reji is the President of India Smart Grid Forum (<a href="https://www.indiasmartgrid.org" target="_blank">www.indiasmartgrid.org</a>) since its inception in 2011 and is also the current Chairman of the Global Smart Energy Federation (GSEF). He is an internationally renowned expert with over four decades of experience in the electricity sector in diverse functions covering the entire value chain and across continents. He is spearheading a mission to leverage technology to transform the electric grids and provide clean and reliable electricity to every citizen 24x7 at affordable cost. For decades he has been actively advocating for the "Right to Electricity" that would ensure lifeline supply of electricity to all which is now becoming a reality in India and several other developing countries; and also advocating for the "Right to Sleep" to provide climate-controlled sleeping pods in low-income communities. Reji has played pivotal role in several groundbreaking initiatives related to renewable energy, electric grid modernization, electric mobility, energy storage and digitalization of utilities across continents during the past two decades.
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
            </div>
        </div>
    </div>
</div>

<!-- Ritwik Anand -->
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

<!-- RS Selvam -->
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


    <!-- Saurav Shah -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/sauravshah.png" alt="Saurav Shah" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Saurav Shah,<br/>
                            Executive Director<br/>
                            Power Finance Corporation
                        </h1>
                        <p>
                            Mr. Saurav Shah is 2009 batch IPS officer of the Bihar cadre, he is spear heading the Revamped Distribution Sector Scheme (RDSS). RDSS is Government of India's priority program in the power distribution sector having an out lay of Rs.3000 billion and is aimed at transformation of the sector.
                        </p>
                        <p>
                            He was also instrumental in successful completion and closure of Integrated Power Development Scheme (IPDS) & the erst while Restructured Accelerated Power Distribution and Reforms Programme (R-APDRP) worth Rs600 million.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sujith Nair -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/2026/speakers/sujith.jpg" alt="Sujith Nair" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Sujith Nair,<br/>
                            CEO and Co-Founder<br/>
                            Foundation for Interoperability in Digital Economy (FIDE)
                        </h1>
                        <p>
                            Sujith Nair is the CEO and Co-founder of FIDE -- Foundation for Interoperability in Digital Economy. This not-for-profit organisation is the genesis author and angel donor to an open-source initiative called the Beckn Protocol. Beckn enables the creation of decentralised digital economy ecosystems.
                        </p>
                        <p>
                            Co-founded along with Nandan Nilekani and Dr Pramod Varma, FIDE has been helping Beckn Protocol evolve as an independent and large-scale open-source community effort focusing on its adoption and sustenance as a digital public good.
                        </p>
                        <p>
                            Sujith conceptualised and helped set up the world's first decentralised open mobility network using the Beckn Protocol in Kochi called the Kochi Open Mobility Network (KOMN), which was launched in July 2021.
                        </p>
                        <p>
                            Sujith co-conceptualised the idea of ONDC and onboarded the first set of market participants on ONDC, co-authored the ONDC Strategy Paper and was instrumental in the setup of ONDC Ltd in Dec 2021.
                        </p>
                        <p>
                            Sujith continues volunteering for KOMN, ONDC and other open network initiatives and is a global advocate for interoperable and decentralised digital ecosystems.
                        </p>
                        <p>
                            Before FIDE, Sujith headed Management Consulting practices and Internet businesses in urban mobility and digital payments. Sujith has contributed to many key interventions in the Aadhaar program between 2010-2012. Sujith also designed India's national transit open payments interoperability (One Nation, One Card) in 2014 to integrate ticketing and payments across public transport systems in the country.
                        </p>
                    </div>
                </div>
            </div>
        </div>

<!-- Sonia Sethi -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SoniaSethi.jpg" alt="Sonia Sethi" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Sonia Sethi,<br/>
                    ACS and General Manager<br/>
                    BEST, Mumbai
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Dr. Sonia Sethi, an IAS officer of the 1994 batch from the Maharashtra cadre, currently serves as the General Manager of the Brihanmumbai Electric Supply and Transport (BEST) undertaking in Mumbai. She holds an M.A. and M.B.A. from the University of Oxford and a Ph.D. from the University of Mumbai. With extensive experience in the infrastructure and public administration sectors, Dr. Sethi has previously served as District Collector of Sindhudurg and held senior leadership roles in CIDCO, MSRDC, MJP, and MMRDA. She made history as Maharashtra's first woman Transport Commissioner and has also served as Joint Secretary in the Ministry of Culture and the Ministry of Commerce, Government of India. Among her notable contributions are the commissioning of the Bandra-Worli Sea Link (2010) and the development of a 20 km metro corridor connecting Andheri, D.N. Nagar, and Dahisar under the Mumbai Metro network. As Additional Chief Secretary for Disaster Management, she led the modernization of the State Emergency Operation Center and established Maharashtra's first State Disaster Management Institute. Dr. Sethi's deep expertise in infrastructure planning, public policy, and project financing is expected to further enhance BEST's operational efficiency and productivity.
                </p>
            </div>
        </div>
    </div>
</div>    

<!-- Sandip Sinha -->
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

<!-- Satyendra R. Pandey -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SatyendraPandey.jpg" alt="Satyendra R. Pandey" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Satyendra R. Pandey,<br/>
                    Member<br/>
                    Gujarat Electricity Regulatory Commission
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Shri Satyendra R. Pandey has been serving as Member, Gujarat Electricity Regulatory Commission (GERC) since December 2020. With over 37 years of multifaceted experience in India's power sector, he has contributed to its regulatory, technical, legal, commercial, and financial evolution. A postgraduate in Electrical Engineering, Law, and Management, with additional qualifications in Finance and HRD, he began his career with the Gujarat Electricity Board (GEB) in 1983. He has held several key roles including Legal Advisor to GERC and Electricity Ombudsman for Gujarat, dealing with complex consumer–licensee disputes.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Shashank Mishra -->
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

<!-- Srikant Nagulapalli -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SrikantNagulapalli.jpg" alt="Srikant Nagulapalli" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Srikant Nagulapalli,<br/>
                    Additional Secretary, Ministry of Power, Government of India<br/>
                    Director General of the Foundation
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Dr Srikant Nagulapalli currently serves as Additional Secretary, Ministry of Power, Government of India, and Director General of the Foundation. With a PhD in economics, he has led transformative initiatives, including planning of 30 GW Pumped Storage Projects and financial revitalization of the power sector. His expertise spans greenfield city planning, energy efficiency, and large-scale health insurance schemes.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Subrahmanyam Pulipaka -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/SubrahmanyamPulipaka.jpg" alt="Subrahmanyam Pulipaka" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Subrahmanyam Pulipaka,<br/>
                    Chief Executive Officer<br/>
                    National Solar Energy Federation of India
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Subrahmanyam Pulipaka is the Chief Executive Officer of National Solar Energy Federation of India. Subrahmanyam, who is BITSAA Global 30 Under 30 Award recipient, is an alumnus of BITS Pilani in Electrical & Electronics Engineering and is one of the youngest winners of BRICS young scientist award - 2018. Well known Speaker at various Solar and RE events in India, Pulipaka represented India in various scientific and technology platforms worldwide including the United States, China, Russia and Rwanda. With a research background in reliability of solar PV modules, he has published around 15 research articles in internationally acclaimed journals.
                </p>
            </div>
        </div>
    </div>
</div>

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

<!-- Tripta Thakur -->
<div class="row speaker_row">
    <div class="k_list_part">
        <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
            <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                <img src="images/2026/speakers/TriptaThakur.jpg" alt="Tripta Thakur" class="speaker-photo">
            </div>
            <div class="speaker_content" style="flex: 1;">
                <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                    Tripta Thakur,<br/>
                    Director General<br/>
                    National Power Training Institute (NPTI)
                </h1>
                <p style="text-align: justify; line-height: 1.6;">
                    Tripta Thakur is Director General, National Power Training Institute (NPTI), apex body of Ministry of Power, Government of India for Training and Human Resources Development in the Power Sector. She took over the leadership of institute when it was under severe strain due to losses. However, in over 2 years she turned the institute into a profit making entity. Under her leadership, NPTI received the mandate for conducting cyber security certification programs for the power sector, foundation program for the newly recruited professionals of the Central power sector utilities and autonomous bodies of the power sector. NPTI also became an institutional partner for WePOWER, an initiative by the South Asia Gender and Energy Facility (SAGE) at the World Bank that supports women's participation in energy projects and institutions in the South Asian region. She is regional and country head for coordination of 110 mid-career power professionals of south Asia and chairperson of the Indian National chapter of WePOWER. Thus, NPTI has come to the forefront of training of power professionals on the frontiers of Advanced Metering Infrastructure (AMI), Supervisory Control and Data Acquisition (SCADA), Cyber Security of Power Grids.
                </p>
                <p style="text-align: justify; line-height: 1.6;">
                    She was earlier Head and Professor, Electrical Engineering Department at the National Institute of Technology, MANIT-Bhopal, India. She is a graduate in Electrical Engineering with Master's degree in Power Electronics from IIT-Kanpur, and has a PhD from IIT-Delhi. She has been recipient of several awards such as Commonwealth Research Scholar at University of Dundee (2005-2008), UK, Commonwealth Academic fellow at Durham University Business School (2014), UK, COFUND Senior researcher at Durham University Business School (2016), Visiting Faculty at Asian Institute of Technology, Bangkok (2010), technical member for International Electrotechnical Commission (IEC), SEG4 Group, ISGF (MoP) working group member etc. She has teaching and research experience of 33 years, and has nearly 100 publications to her credit. She has also been a consultant for evolving a possible Common South Asian Electricity Markets. She has done various consultancies for Distribution companies in India. She is also a recipient of Women in Energy award by Indian Energy Storage Alliance in 2025, Shrimati Sushma Swaraj Stree Shakti Engineering Samman in 2024, Women Technology Innovation Award by Indian Smart Grid Forum and STEM Women Award by Madhya Pradesh Government in 2024. She is currently a Governing Council member of IISER Pune and IIIT Kota, committee member of Regional Energy group of CII, Founding member of the Indian National Science Academy Women Associates (IWA) and Member of the state advisory committee of Delhi Electricity Regulatory Commission.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Teppo Hemiä -->
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

    <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Shrinivas.png" alt="A Shrinivas Rao" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            A Shrinivas Rao,<br/>
                            General Manager - Transportation Engineering<br/>
                            BEST Undertaking, Mumbai
                        </h1>
                        <p>
                            Mr Rao has Deep technical expertise was combined with strategic policy insight to facilitate the adoption of electric buses, modernization of infrastructure, and enhancement of safety and customer experience. The scale-up of e-buses under GCC/OPEX models was spearheaded, with prototype development, route planning, and energy management being overseen.
                        </p>
                        <p>
                            Charging infrastructure, sub-stations, and solar PV systems were integrated to electrify depots. Fleet reliability was ensured through the implementation of maintenance protocols, SOPs, QA frameworks, and workforce training. KPI dashboards were developed to monitor operational metrics, while passenger safety and experience were improved via ITS/CCTV integration, accessibility upgrades, and training.
                        </p>
                        <p>
                            Funding and partnerships were secured under FAME-II, Maharashtra EV Policy, and C40-aligned initiatives, with non-farebox opportunities being explored. Governance was strengthened through coordinated delivery, vendor management, and policy compliance, and BEST services were aligned with Metro and rail networks to enable integrated public transport.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anand Singh -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Anand.jpg" alt="Anand Singh" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Anand Singh,<br/>
                            General Manager<br/>
                            India Smart Grid Forum
                        </h1>
                        <p>
                            Anand is currently working as General Manager at India Smart Grid Forum, Delhi. He carries over 20 years of experience in electricity sector in diverse functions covering technology and business consulting across the value chain in Smart Grid and Electric Mobility space.
                        </p>
                        <p>
                            Anand has played a key role in several important initiatives related to renewable energy, electric grid modernization, electric mobility, energy storage and digitalization in India during the last decades.
                        </p>
                        <p>
                            His current areas of work spans: Grid Integrated Vehicles, District Cooling Systems, Electric Cooking, Smart Grids, Freight corridors for Electric Trucks, Future Mobility Parks, Time of Use Tariff for Indian Utilities, Renewable Energy Trading Using Blockchain Technology; AI, VR and AR Applications for Utilities.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anil Kumar Prasanna -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/AnilKumarPrasanna.png" alt="Anil Kumar Prasanna" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Anil Kumar Prasanna,<br/>
                            Director<br/>
                            Enspar Energy Solutions
                        </h1>
                        <p>
                            Currently working as Director, Power Quality Management at Enspar Energy Solutions Pvt Ltd. Undergone advanced Training in Nuclear Science and Engineering at Training school, Bhabha Atomic research center (BARC), Mumbai.
                        </p>
                        <p>
                            Later worked for NUCLEAR POWER CORPORATION TATA ELECTRIC, ASEA (ABB), VOLTAS (TATA COMPANY) and ROCKWELL AUTOMATION in various middle and senior level positions in the field of Power Generation (Nuclear, Thermal, Hydro), Relay Coordination and Protection, Substation SCADA and Automation.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anshuman Srivastava -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/anshuman_srivastava.png" alt="Anshuman Srivastava" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Anshuman Srivastava,<br/>
                            Executive Director<br/>
                            Power Foundation of India
                        </h1>
                        <p>
                            Anshuman Srivastava is currently serving as the Executive Director at Power Foundation of India (PFI). He holds a B.Tech degree in Electrical Engineering from G. B. Pant University, Pantnagar (Uttarakhand).
                        </p>
                        <p>
                            With a distinguished career spanning 35 years at NTPC Ltd., he has extensive experience in Corporate Contracts and Materials, having worked both at the Corporate Office and various power plants.
                        </p>
                        <p>
                            Prior to his current role, he led the Contracts and Materials Department at the Solapur Project of NTPC Ltd. Notably, he was an integral part of the NTPC team that successfully took over the Unchahar Project from UPRVUN in 1992.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atul Save -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/atul_save.jpeg" alt="Atul Save" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Shri Atul Save,<br/>
                            Hon'ble Minister of New and Renewable Energy<br/>
                            Government of Maharashtra
                        </h1>
                        <p>
                            Shri Atul Moreshwar Save is the Hon'ble Minister of New and Renewable Energy, Government of Maharashtra. In his current role, he is spearheading the state's transition towards sustainable and clean energy, with a focus on accelerating the adoption of solar, wind, and other renewable sources to strengthen Maharashtra's energy security.
                        </p>
                        <p>
                            Under his leadership, the ministry is driving initiatives aimed at promoting green technologies, enhancing grid integration, and fostering public-private partnerships to build a resilient, low-carbon energy ecosystem. His vision is to make Maharashtra a leading state in renewable energy innovation and contribute significantly to India's clean energy goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chetan Pathak -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/chetan_pathak.png" alt="Chetan Pathak" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Chetan Pathak,<br/>
                            Director<br/>
                            IESA
                        </h1>
                        <p>
                            Chetan has 13+ years of experience in Distributed Energy Resources (DERs), Non-Wired Alternatives, Renewable Energy & Electricity Distribution domains. His portfolio spans Greening the Grid (GTG) Projects, Round-the-Clock (RTC) Green Energy, Battery Energy Storage Solutions for Grid Scale, Finance, E-Mobility (with High Voltage & Low Voltage Distribution), and Green Hydrogen.
                        </p>
                        <p>
                            It extends to Greening Green Ammonia, Steel & Refinery based Applications in his recent assignments. Before joining Indian Energy Storage Alliance (IESA) & Customized Energy Storage Solution (CES) as Director -- Strategy & Growth, he has worked for Gensol Group as Group Leader -- Policy, Regulatory & Govt. Business, & Log 9 Materials Scientific Pvt. Ltd. on Lithium-Ion Cell Manufacturing as Vice President -- Energy Business.
                        </p>
                        <p>
                            Before these, he also had worked in Electricity Distribution Sector for BSES Rajdhani Power Limited (BRPL), New Delhi (A Power Distribution Licensee in South & West Delhi, under joint ownership of Reliance Infra. Ltd. & Government of NCT Delhi [ESL & NIIF JV]). Prior to this, he had worked with Power Generation Companies for Billion Dollars (ReNew, Azure Power, ACME) as Business Development & Project Management professional. He also had experience working for Government of India Solar PV and Wind Power Projects in India.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- D Radhakrishna -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Radhakrishna.png" alt="D Radhakrishna" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            D Radhakrishna,<br/>
                            Former Chairperson<br/>
                            Tripura Electricity Regulatory Commission
                        </h1>
                        <p>
                            D. Radhakrishna (Deshraju Radhakrishna) is the former Chairperson of the Tripura Electricity Regulatory Commission (TERC) and the former Chairman of the Appellate Tribunal of the Tripura Real Estate Regulatory Authority (RERA). He concluded his five-year tenure as TERC Chairman around August 2024.
                        </p>
                        <p>
                            Throughout his distinguished career spanning over 42 years in the energy sector, D. Radhakrishna has held significant roles in public and private entities, including the Madhya Pradesh State Electricity Board (MPSEB) and Adani Group. He is a Lifetime Member of the World Energy Council and has served as the Secretary General of the Indian Biomass Power Association.
                        </p>
                        <p>
                            He was also a pioneer in establishing India's first Power Exchange and served as the Chairperson of the Forum of Regulators for the Eastern and Northeastern states.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dilip Jagdale -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Dilip_Jagdale.png" alt="Dilip Jagdale" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Dilip Jagdale,<br/>
                            Joint Managing Director - Kokan Region<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Mr. Dileep Jagdale is the Joint Managing Director for the Kokan Region at MSEDCL, where he leads power distribution operations, service delivery, and regional performance. With strong administrative and technical expertise, he oversees network reliability, infrastructure enhancement, and consumer-focused initiatives.
                        </p>
                        <p>
                            He plays a key role in implementing state-led programs, upgrading distribution systems, and supporting sustainable energy efforts across the Kokan region. His leadership continues to contribute to improved efficiency and reliable electricity supply for consumers.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dhananjay Aundhekar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Dhananjay.jpeg" alt="Dhananjay Aundhekar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Dhananjay Aundhekar,<br/>
                            ED-- SP Projects<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Dhananjay Aundhekar is a seasoned power sector leader currently serving as Executive Director (Projects) at MSEDCL, India's largest electricity distribution utility. With a distinguished career spanning over three decades, he has played a pivotal role in advancing Maharashtra's energy infrastructure through strategic project execution, rural electrification, and grid modernization initiatives.
                        </p>
                        <p>
                            Previously serving as Chief Engineer for MSEDCL's Kalyan Zone, Mr. Aundhekar was instrumental in addressing critical power supply challenges across urban and semi-urban regions, including Ulhasnagar and Ambernath. His leadership during the rollout of the Saubhagya Yojana brought reliable electricity access to underserved communities, significantly improving quality of life and economic opportunity.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dnyanesh Kulkarni -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Dnyanesh_kulkarni.png" alt="Dnyanesh Kulkarni" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Dnyanesh Kulkarni,<br/>
                            CE- Renewable Energy<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Dnyanesh Kulkarni is Chief Engineer (Renewable Energy) at MSEDCL, driving Maharashtra's clean energy transition. With over three decades in the power sector, he has spearheaded the integration of solar, wind, and hybrid projects into the state's grid.
                        </p>
                        <p>
                            His leadership has advanced innovative procurement models, long‑term agreements, and collaborations with developers, earning recognition such as the *Wind India 2025 Award*. Known for his technical expertise and strategic vision, Kulkarni emphasizes reliability and affordability in renewable adoption.
                        </p>
                        <p>
                            As a speaker, he offers deep insights into policy, project execution, and India's sustainable energy future.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gajendra Tiwari -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Gajendra.png" alt="Gajendra Tiwari" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Gajendra Tiwari,<br/>
                            Member<br/>
                            Madhya Pradesh Electricity Regulatory Commission
                        </h1>
                        <p>
                            Gajendra Tiwari is the Member (Technical) of the Madhya Pradesh Electricity Regulatory Commission (MPERC). A veteran of the power sector, he plays a crucial role in regulating electricity generation, transmission, and distribution in the state.
                        </p>
                        <p>
                            Prior to this position, he served as the Ex-Secretary of MPERC. His responsibilities include applying technical expertise to tariff setting, licensing, and aligning state energy policies with national directives, ensuring a reliable power supply for Madhya Pradesh.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ganesh Das -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Ganesh.png" alt="Ganesh Das" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Ganesh Das,<br/>
                            Chief -Collaboration & Innovation<br/>
                            Tata Power Company Limited
                        </h1>
                        <p>
                            Dr. Ganesh Das is working with Tata Power Company Limited, the largest vertical integrated Power Company of India and a flagship company of the Tata Group as Chief -- Collaboration and Innovation. He is a seasoned professional with over 37 years of experience in the Energy Sector.
                        </p>
                        <p>
                            Since 2005, he has held various leadership roles in TPDDL, including Chief Strategy, Performance Management, Innovation and R&D.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jaideep Singh -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Jaideep_singh.png" alt="Jaideep Singh" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Jaideep Singh,<br/>
                            Advisor - Strategy and Stakeholder Engagement<br/>
                            Radius Synergies International Pvt. Ltd.
                        </h1>
                        <p>
                            Jaideep has an experience of more than 35 years in the corporate environment spanning across Power Energy Telecom and Real Estate. While working with companies like Crompton Greaves, Schneider Electric, Havells, Schlumberger and Union Unitech, contributed significantly to their growth story by successfully delivering strategic businesses that most would have written off.
                        </p>
                        <p>
                            Having successfully surfed the peaks and troughs of a cyclical economic environment with an experience of such a diverse portfolio. His latest venture as playing an advisory role and investments in tech-start ups has taken prominence, especially those with innovative IoT solutions powered by AI/ML platforms focused towards creating an impact in the energy space.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartikey Haryani -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Kartikey.png" alt="Kartikey Haryani" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Kartikey Haryani,<br/>
                            Founder and CEO<br/>
                            Charge Zone
                        </h1>
                        <p>
                            Mr. Kartikey Hariyani, an Alumni of Stanford University (Graduate School of Business) and LD College of Engineering, is an entrepreneur by passion and an engineer at heart. For past 25+ years, he has worked through utility, industrial and commercial applications of electrical engineering and information technology while building three core businesses of renewable energy + EV charging networks and E-Mobility for large commercial EVs each of them known as Billion Green Energy, CHARGE ZONE® and Billion-Electric.
                        </p>
                        <p>
                            His tech-led Energy Transition Platform - Billion, currently valued at US$250m is on the annual revenue run rate of INR300crores; works closely with government regulators, state departments, technology providers, equipment manufacturers to create micro-grids with energy storage and help de-regulate electricity sector.
                        </p>
                        <p>
                            His flagship EV charging brand CHARGE ZONE® is backed by Macquarie Capital and BII (formerly CDC) and continues to expand high speed charging network across India.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ketan P Joshi -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Ketan.png" alt="Ketan P Joshi" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Ketan P Joshi,<br/>
                            Managing Director<br/>
                            Paschim Gujarat Vij Company Limited
                        </h1>
                        <p>
                            An officer of the Indian Administrative Service, 2021 batch, he has served in several key administrative capacities across Gujarat. His tenure includes assignments as Sub-Divisional Magistrate at Lalpur, Morbi, and Jamnagar, Executive Director of the Gujarat Industrial Development Corporation, Resident Additional Collector at Morbi and Navsari, and Deputy Municipal Commissioner, Vadodara Municipal Corporation. Through these roles, he has contributed significantly to governance, infrastructure development, and public service delivery.
                        </p>
                        <p>
                            Since May 2025, he has been serving as Managing Director of Paschim Gujarat Vij Company Limited (PGVCL) --- the state's largest electricity distribution company, spanning over one lakh square kilometres and encompassing Gujarat's coastal, desert, forest, and industrial regions.
                        </p>
                        <p>
                            Under his leadership, PGVCL has driven the state's renewable energy agenda through initiatives such as the PMSuryaghar Muft Bijli Yojana, PM-KUSUM, and Suryoday Kisan Yojana, while advancing open access renewable projects, smart metering, and smart grid modernisation to enhance efficiency, reliability, and sustainability in Gujarat's power distribution network.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manish Wath -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Manish_Wath.jpg" alt="Manish Wath" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Manish Wath,<br/>
                            Chief Engineer<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Manish Waith holds a B.E. in Electrical Engineering from Shivaji University (72%), an M.Tech in Industrial Power Systems from VNIT Nagpur (74%), and earned his Ph.D. in Electrical Engineering from VNIT Nagpur in 2019, specializing in "Error Compensation Technique in Smart Metering System."
                        </p>
                        <p>
                            He has been serving in the Maharashtra State Electricity Distribution Company Limited (MSEDCL), Mumbai, since 1994, beginning as a Junior Engineer and currently holding the position of Chief Engineer (Testing) at Prakashgad, Mumbai. He is an active member of the Institution of Engineers, the BIS Metering and Transformer Committee in Delhi, and serves as a technical assessor for NABL's Metering Laboratory.
                        </p>
                        <p>
                            His academic contributions include five IEEE journal publications, ten IEEE conference papers, two books published by Lambert Academic Publishing, and two patents---one on traction metering and another on error compensation. In recognition of his research, he was awarded second prize for "Best Paper" at Metering India 2024, organized by IEEMA, New Delhi, for his paper titled "Discrete Approach Over the Power Quality Parameters Monitored by Utility.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mohit Bhargava -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Mohit_Bhargava.png" alt="Mohit Bhargava" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Mohit Bhargava,<br/>
                            Country Director<br/>
                            India Energy and Climate Center, UC Berkeley
                        </h1>
                        <p>
                            Mohit Bhargava is the Country Director for the India Energy & Climate Center at UC Berkeley, starting in 2025. He has over 35 years of experience in the power sector, primarily with NTPC Limited.
                        </p>
                        <p>
                            As former CEO of NTPC Green Energy Limited (NGEL), he dramatically expanded their renewable portfolio from 1 GW to over 25 GW. Bhargava leverages his extensive background in energy policy and corporate strategy to bridge research insights with practical applications for India's clean energy transition.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Omkar Shaligram -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Omkar_Shaligram.png" alt="Omkar Shaligram" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Omkar Shaligram,<br/>
                            General Manager<br/>
                            Tata Motors Limited
                        </h1>
                        <p>
                            Omkar Shaligram leads the growth and deployment of India's largest passenger EV charging network at Tata.ev, the electric mobility arm of Tata Motors. With over 13 years of experience in automotive and clean mobility, he has driven high-impact initiatives across EVs, charging infrastructure, ADAS, hybrids, and mechatronics.
                        </p>
                        <p>
                            At Tata.ev, Omkar is spearheading next-generation charging programs that integrate connected car analytics, digitisation, renewable energy, and circular economy principles to make EV charging accessible, reliable, and sustainable.
                        </p>
                        <p>
                            Through strategic collaborations with Tata Power, Chargezone, Statiq, Zeon, Shell, and leading oil marketing companies, his mission is to accelerate India's EV adoption journey by creating a robust, future-ready charging ecosystem.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- P Ravi Kumar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Ravi_kumar.jpeg" alt="P Ravi Kumar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            P Ravi Kumar,<br/>
                            Chairperson<br/>
                            Karnataka Electricity Regulatory Commission
                        </h1>
                        <p>
                            P. Ravi Kumar is a highly experienced retired Indian Administrative Service (IAS) officer currently serving as the Chairperson of the Karnataka Electricity Regulatory Commission (KERC). Appointed in June 2022, he brings over three decades of administrative expertise to the role.
                        </p>
                        <p>
                            Before his retirement from the IAS, Mr. Kumar held the state's highest administrative position as the Chief Secretary of Karnataka. His extensive background in the energy sector includes a significant tenure as the Additional Chief Secretary (Energy), where he played a key role in the state's power infrastructure development, notably aiding in Karnataka's transition to an energy-surplus status and launching initiatives like the Pavagada solar park.
                        </p>
                        <p>
                            Mr. Kumar's responsibilities at KERC involve regulating the electricity sector, determining tariffs, and balancing the interests of consumers and utility providers to ensure a stable, efficient, and transparent power supply across the state. His leadership is marked by a deep understanding of governance, public policy, and regulatory frameworks.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pankaj Agarwal -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Pankaj_Agarwal.png" alt="Pankaj Agarwal" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Pankaj Agarwal,<br/>
                            Secretary<br/>
                            Ministry of Power, GOI
                        </h1>
                        <p>
                            Pankaj Agarwal is a 1992 batch Indian Administrative Service (IAS) officer from the Madhya Pradesh cadre who serves as the Secretary of the Ministry of Power for the Government of India. He assumed the role on July 1, 2023, and was also assigned the additional charge of Secretary for the Ministry of Road Transport and Highways in October 2024.
                        </p>
                        <p>
                            His career has included prior service as the Additional Secretary and Director General (Acquisition) in the Ministry of Defence. He holds a Bachelor of Engineering in Civil Engineering from IIT Roorkee, a Master of Technology in Building Science from IIT Delhi, and a Master of Public Administration in Policy Analysis from the National University of Singapore.
                        </p>
                        <p>
                            Throughout his tenure as Power Secretary, he has emphasized the importance of grid stability and has been involved in several major projects, including inaugurating a pumped storage plant in Tehri, inspecting the progress of the NTPC Khargone thermal power project, and reviewing the NHPC Subansiri Lower HE Project.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pramod Mishra -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Pramod.png" alt="Pramod Mishra" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Pramod Mishra,<br/>
                            CTO<br/>
                            Chandigarh Power Distribution Limited
                        </h1>
                        <p>
                            Mr. Pramod Kumar Mishra is an Electrical Engineering graduate from IIT Roorkee having 23 years of experience in Power Distribution. He has worked in different functions/roles such as O & M, Engineering, Network Planning, BPR, Commercial, Loss reduction, Project Management, Energy Transition, and Strategy to name a few.
                        </p>
                        <p>
                            He has played pivotal role in multiple transformation projects, nationally and internationally. With his diverse experience, he is presently heading transformational journey in CPDL as Chief Transformation Officer (CTO).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rajendra G Ambekar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Rajendra_Ambekar.png" alt="Rajendra G Ambekar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Rajendra G Ambekar,<br/>
                            Secretary<br/>
                            Maharashtra Electricity Regulatory Commission
                        </h1>
                        <p>
                            Dr. Rajendra G. Ambekar is the Secretary of the Maharashtra Electricity Regulatory Commission (MERC), with over 30 years of experience in the Indian power sector, spanning regulatory affairs, operations, commercial functions, and policy formulation.
                        </p>
                        <p>
                            His expertise spans regulatory economics, sectoral reforms, power system modernization, renewable energy frameworks, and consumer-centric policy development, making him one of the most respected regulatory professionals in India.
                        </p>
                        <p>
                            Dr. Ambekar holds a Ph.D. in Power Economics from the University of Mumbai, an MBA in Finance from Welingkar Institute of Management, and a Bachelor's degree in Electrical Engineering from Sardar Patel College of Engineering, Mumbai.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Samanta Santadyuti -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Samanta_Santadyuti.jpg" alt="Samanta Santadyuti" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Samanta Santadyuti,<br/>
                            Chief -- Digital Transformation and IT<br/>
                            Tata Power Company Limited
                        </h1>
                        <p>
                            Samanta Santadyuti is a respected leader in the digital transformation of the energy sector, serving as the Chief D & IT (Digital & Information Technology) for Transmission & Distribution at Tata Power. With over two decades of experience, he drives the company's enterprise-wide digitalization strategy, seamlessly integrating traditional IT systems with advanced Operational Technology such as SCADA, DMS, and IoT.
                        </p>
                        <p>
                            His expertise lies in the strategic implementation of emerging technologies, including Artificial Intelligence (AI), Big Data analytics, and smart metering (AMI).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Santosh Kumar Singh -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Santosh_Kumar_Singh.png" alt="Santosh Kumar Singh" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Santosh Kumar Singh,<br/>
                            AVP<br/>
                            BSES Yamuna Power Limited
                        </h1>
                        <p>
                            Santosh is currently working as AVP in BYPL and has 30 years of experience in Infra project and Power distribution business. Having EPC experience of ultra-mega Power Projects from Concept to Commissioning.
                        </p>
                        <p>
                            Actively involved in Conceptualization to Commissioning of Sasan 6X660 MW Ultrapower plant. One of the State of Art long distance single flight Belt Conveyer system of 14.1 KM was engineered & commissioned.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shashi Bala -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Shashi_Bala.png" alt="Shashi Bala" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Shashi Bala,<br/>
                            Senior Engineer<br/>
                            India Smart Grid Forum
                        </h1>
                        <p>
                            Shashi Bala is presently working as a Senior Engineer with the India Smart Grid Forum (ISGF), a globally reputed think-tank established by the Government of India that supports utilities, regulators, policymakers, and the industry in advancing energy transition, electric mobility, grid modernization, and smart cities.
                        </p>
                        <p>
                            She has over eight years of professional experience, including more than four years with ISGF, where she has led several innovative first-of-a-kind (FOAK) projects such as the pilot demonstration of Time of Use (TOU) tariff for electricity in Uttar Pradesh, drone and AI-driven asset mapping of 22 kV transmission lines in Maharashtra, and the world's first Digital Energy Grid demonstration in Uttar Pradesh enabling peer-to-peer (P2P) rooftop solar trading on blockchain and digital platforms built on the Unified Energy Interface (UEI) architecture.
                        </p>
                        <p>
                            In her current role, she is actively supporting UPPCL, UPREV, and state DISCOMs in developing regulatory and commercial frameworks for energy storage, open access, EV infrastructure, and distributed solar, while also contributing to consultations with UPERC, the Ministry of Power, and MNRE. With hands-on expertise in blockchain-enabled P2P trading platforms, digital energy grids, and strong proficiency in generative AI tools and solutions, Shashi is positioned among the leading professionals shaping India's journey towards decentralized and consumer-centric energy markets.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Smt Meghana Sakore -- Bordikar -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Meghana_Sakore_Bordikar.png" alt="Smt Meghana Sakore -- Bordikar" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Smt Meghana Sakore -- Bordikar,<br/>
                            Hon'ble Minster of State of Energy<br/>
                            Government of Maharashtra
                        </h1>
                        <p>
                            Mrs. Meghna Sakore Bordikar is a visionary leader shaping Maharashtra's future as Minister of State for Public Health, Water Supply & Sanitation, Energy, Women & Child Development, and Public Works (Public Undertakings). Representing Jintur, Parbhani, she has secured electoral victories in 2019 & 2024, earning the trust of her people, who fondly call her Didi.
                        </p>
                        <p>
                            With over two decades of public service, she has championed farmer welfare, water security, and sustainable development. Her tenure in Parbhani Zilla Parishad saw transformative initiatives, including subsidized loans for farmers, fertilizer reserves, and large-scale water sector improvements.
                        </p>
                        <p>
                            Known for her problem-solving approach, she remains committed to ensuring that no family in Parbhani is left unheard or unattended. A leader with a clear vision, Meghna Sakore Bordikar continues to drive progress with her unwavering dedication to public welfare and governance.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sujit Pathak -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Sujit_Pathak.jpg" alt="Sujit Pathak" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Sujit Pathak,<br/>
                            General Manager<br/>
                            CESC Limited, Kolkata
                        </h1>
                        <p>
                            Sujit currently working with CESC Ltd., Kolkata as General Manager and is attached to the Substations department. He Looking after operation and maintenance of the electrical Plant & Equipment at the Substations and Distribution stations of CESC.
                        </p>
                        <p>
                            He has experience of a total of 29 years plus (1995- 2025) in Power Utility, out of which 26 years in CESC Ltd., Kolkata. He also worked in Jindal Steel & Power Ltd. (JSPL), as Head of the Electrical Maintenance department in their 6X135 MW Power Plant at Angul, Orissa, in the period 2011-2013, and in Tata Power Jamshedpur Distribution Ltd. (TPJDL), Jamshedpur, a Franchise undertaken by Tata Power for the Jharkhand State Electricity Board (JSEB), as Head-Projects, in the period 2013-2014.
                        </p>
                        <p>
                            He experienced in installation, testing, commissioning & maintenance of MV, HV & EHV Overhead and Underground distribution and sub-transmission networks and all associated network elements including the Protection systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suresh Makwana -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Suresh_Makwana.jpg" alt="Suresh Makwana" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Suresh Makwana,<br/>
                            Chief Engineer -- Planning<br/>
                            BEST, Mumbai
                        </h1>
                        <p>
                            Mr. Suresh Makwana is the Chief Engineer (Planning) at the Brihanmumbai Electric Supply and Transport (BEST) Undertaking. He has been serving in the organization for over 34 years, contributing extensively to Mumbai's power distribution sector.
                        </p>
                        <p>
                            With rich experience in planning, operations, and project implementation, he currently serves as the Nodal Officer for the Revamped Distribution Sector Scheme (RDSS). Mr. Makwana has played a key role in driving initiatives aimed at enhancing the reliability, efficiency, and modernization of the city's power distribution network.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vivek Chandra -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="media/Vivek_Chandra.png" alt="Vivek Chandra" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Vivek Chandra,<br/>
                            Head-IT<br/>
                            Madhya Pradesh Poorv Kshetra Vidyut Vitaran Company Limited
                        </h1>
                        <p>
                            Dr. Vivek Chandra is an accomplished professional with over three decades of experience in the power distribution sector. He currently serves as General Manager (IT) at MP East Discom, Jabalpur, where he has led major digital transformation initiatives including Oracle ERP implementation, Meter Data Management Systems, Advanced Consumer Care Systems, and establishment of a Tier-4 Data Centre.
                        </p>
                        <p>
                            He holds a Ph.D. in Computer Science, an M.Tech in Power System Automation, and an MS in Artificial Intelligence & Machine Learning from Liverpool John Moores University, UK.
                        </p>
                        <p>
                            His contributions have been recognized through multiple national and state-level awards, including the National e-Governance Award from the Government of India and the Skoch Award for IT automation in power utilities. A published author and active member of professional bodies such as IEEE, the Institution of Engineers, and the Computer Society of India, Dr. Chandra combines deep technical expertise with leadership in innovation, analytics, and digital governance in the energy sector.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yogesh Gadkari -->
        <div class="row speaker_row">
            <div class="k_list_part">
                <div class="col-sm-12 dum_speaker">
                    <div class="speaker_img">
                        <img src="images/speakers/Yogesh_Gadkari.jpg" alt="Yogesh Gadkari" class="speaker-photo">
                    </div>
                    <div class="speaker_content">
                        <h1 class="key_head">
                            Yogesh Gadkari,<br/>
                            Director Commercial<br/>
                            Maharashtra State Electricity Distribution Company Limited
                        </h1>
                        <p>
                            Shri. Yogesh Madhukar Gadkari has been selected as the Director (Commercial) of MSEDCL through direct service recruitment. Shri. Yogesh Gadkari has taken over the charge of post of Director (Commercial) w.e.f. 03.05.2023. Earlier, Shri. Yogesh Gadkari was working as Executive Director (Billing & Revenue).
                        </p>
                        <p>
                            A native of Nagpur, Shri. Yogesh Gadkari has completed his BE (Computer Engineering) from an Engineering College from Amravati. Shri. Yogesh Gadkari has a reputation as a very knowledgeable executive in the Power Sector.
                        </p>
                        <p>
                            Also, Shri. Gadkari has brought about a radical change in the Central Billing System of MSEDCL, thereby reducing customer complaints.
                        </p>
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