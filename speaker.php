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

/* Keep each speaker's portrait and full bio in separate columns. */
.dum_speaker {
    display: flex !important;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 30px;
}

.dum_speaker .speaker_img {
    flex: 0 0 200px !important;
    width: 200px;
    box-sizing: border-box;
    text-align: center;
    margin: 0;
}

.dum_speaker .speaker_img img,
.dum_speaker .speaker_img .speaker-photo {
    width: 200px !important;
    height: 240px !important;
    max-width: 200px !important;
    object-fit: cover !important;
    display: block;
    border-radius: 10px;
}

.dum_speaker .speaker_content {
    flex: 1 1 0;
    box-sizing: border-box;
    min-width: 0;
}

.key_head {
            font-size: 25px !important;
            text-align: left !important;
            text-transform: capitalize !important;
            margin-bottom: 15px !important;
            margin-top: 0 !important;
        }

.dum_speaker .speaker_content .key_head {
    margin-left: 0 !important;
}

@media (max-width: 768px) {
    .dum_speaker {
        flex-direction: column;
    }

    .dum_speaker .speaker_img {
        flex-basis: auto !important;
        max-width: 100%;
        margin: 0 auto 16px;
    }

    .dum_speaker .speaker_content {
        width: 100%;
    }

    .dum_speaker .speaker_img img,
    .dum_speaker .speaker_img .speaker-photo {
        width: 200px !important;
        max-width: 100% !important;
    }
}
</style>


<!-- key objective starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>
<div class="row dum_container key_div k_key_themes">


	
	<div class="k_cheading">
		<h1><span class="k_greencolor">SPEAKERS OF</span> DUM 2026 </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

        <!-- Aayush Agarwal -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/AayushAgarwal.jpg" alt="Aayush Agarwal" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Aayush Agarwal<br/>
                        Co-founder and CTO<br/>
                        WorkOnGrid
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Aayush Agarwal is the co-founder and CTO of WorkOnGrid, the AI-native operations intelligence platform for utilities. He leads product, engineering and the technology architecture of Grid. Aayush brings over a decade of experience from LogMeIn and Citrix, where he worked on data infrastructure and systems built to operate reliably at massive scale.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alok Kumar -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/Alokkumar.png" alt="Alok Kumar" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Alok Kumar<br/>
                        Director General<br/>
                        All India Discoms Association (AIDA)
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        He had 35 years long career in public policy and economic development in India's premier federal civil service (IAS) reaching up to distinguished position of Secretary in federal government with extensive experience in electricity, renewable energy, energy transition, infrastructure development and skill development domains. He has played a key role in formulation and implementation of several national/state level policies, programmes and regulatory interventions. During 2021 - 2023, he successfully managed the operations of India's power system, one of the largest in the world, along with steering wide-ranging sectoral reforms. As an expert, he chaired the Inter-Ministerial Working Group set up by NITI Aayog in 2024 to develop power sector pathway to achieve Net Zero commitment by India.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He obtained bachelor's degree in civil engineering from IIT Roorkee in 1983, and Master of Business Administration (Finance Business Administration) from National Open University in 2009. Authored the book "Electricity Sector in India- Policy and Regulation" published by Oxford University Press in 2012, and has been writing regularly on energy related topics for business publications in India.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Aneesh Thomas -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/AneeshThomas.jpg" alt="Aneesh Thomas" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Aneesh Thomas<br/>
                        Associate Director MV<br/>
                        Eaton Power Quality India
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Aneesh Thomas leads Power Distribution Assembly Medium Voltage Switchgear at Eaton Power Quality India, bringing 25 years of rich expertise from global industry leaders ABB, Siemens, and Larsen & Toubro.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        A pioneer in sustainable power technologies, he champions the development of SF6-free switching technologies and environmentally responsible alternatives for medium voltage power distribution. Through his work at Eaton, he actively contributes to India's vision of energy self-reliance, focusing on innovative solutions that align with the nation's commitment to sustainable power infrastructure.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Anil Kumar -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/AnilKumar.jpg" alt="Anil Kumar" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Anil Kumar P<br/>
                        Director<br/>
                        Enspar Sustainability Pvt Ltd
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Anil Kumar P is the Director of Enspar Sustainability Pvt Ltd, bringing over four decades of expertise in power engineering. He holds a BSc (Engineering) degree in Electrical Engineering with First Class Honors from the Regional Engineering College (now NIT), Calicut, earned in 1980. He began his career with specialized training in Nuclear Science and Engineering at the Training School of the Bhabha Atomic Research Centre (BARC), Mumbai. He went on to hold key middle and senior management positions at Nuclear Power Corporation, Tata Electric, ASEA (ABB), Voltas (a Tata company), and Rockwell Automation, working across power generation (nuclear, thermal, and hydro), power quality, substation SCADA, and automation systems.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        For the past 35 years, Anil has been a leading entrepreneur and technocrat in the field of Power Quality, both in India and internationally. He has completed more than 2,500 power quality studies and power system analyses, delivering solutions across industries such as semiconductors, cement, metals, pharmaceuticals, and petrochemicals, as well as infrastructure sectors including airports, power utilities, metro rail, and renewable energy. His work spans India, ASEAN nations, South Korea, Taiwan, the Middle East, and South America. He is a member of the Power Quality Committees of the IEC and BIS, and serves as an advisor on grid compliance, power system modeling, and renewable energy integration.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Anil Narayan Raghav -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/AnilNarayanRaghav.jpg" alt="Anil Narayan Raghav" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Anil Narayan Raghav<br/>
                        Professor, Department of Physics<br/>
                        University of Mumbai
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Prof. (Dr.) Anil Narayan Raghav is a Professor in the Department of Physics at the University of Mumbai, I/c Deputy Director of the Centre for Excellence in Theoretical and Computational Science (CETACS), and Founder & Director of SpaceProbe Pvt. Ltd., a DPIT-recognised deep-tech venture incubated at the University of Mumbai. With over 17 years of experience in Space Physics and Space Weather research, he has authored more than 60 international peer-reviewed publications on solar wind dynamics, interplanetary magnetic structures, geomagnetic storms, and solar-terrestrial coupling. His research combines in-situ plasma observations with applied space-weather science to improve understanding of the Sun-Earth system and its impact on satellites, navigation, communication, aviation, and critical infrastructure. He has contributed to national and international scientific initiatives, including SCOSTEP activities and ISRO-formed space-science roadmap and solar-terrestrial physics committees. Through SpaceProbe, he is advancing indigenous technologies for satellite drag and Space Domain Awareness (SDA), aviation radiation assessment, power-grid GIC resilience, and GNSS-based positioning and timing analytics, driven by the vision of creating a platform where curiosity meets learning, ideas meet innovation, and creativity meets technology.
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
                        Anil Rawal<br/>
                        MD & CEO<br/>
                        IntelliSmart Infrastructure
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr Anil Rawal is the MD and CEO of IntelliSmart Infrastructure Private Limited. He is an ex-civil services officer of 1996 Batch and has more than 27 years of leadership experience across both Corporate and Government organisations. He is an IIM, Ahmadabad alumnus of the 2007 batch and has since been working with corporates, particularly in the Power sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        In 2025, Economic Times conferred him with the ET Impactful Trailblazer CEO award. IntelliSmart, under his leadership, has pioneered the smart metering program in the country, triggering large scale private investments in digitalization of the power distribution sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        IntelliSmart was honoured with the 'Energy Company of the Year - Power (Small Cap)' in 2025 at the Economic Times Energy Leadership Awards.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Arti Dogra -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/ArtiDogra.jpg" alt="Arti Dogra" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Arti Dogra<br/>
                        Secretary-Energy, Rajasthan and CMD - JVVNL
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Ms. Arti Dogra, IAS, is a 2006-batch Indian Administrative Service officer of the Rajasthan cadre, currently serving as Secretary, Energy Department, Government of Rajasthan, Chairman of Rajasthan DISCOMs, and Managing Director of Jaipur Vidyut Vitran Nigam Limited (JVVNL). She has held several key administrative positions in Rajasthan, including Secretary to the Chief Minister, District Collector and District Magistrate of Bundi, Bikaner and Ajmer, and Managing Director of Jodhpur DISCOM. She holds a B.A. (Honours) in Economics from Lady Shri Ram College, University of Delhi, and a postgraduate degree in Economics from the University of Garhwal. During her tenure as District Collector of Bikaner, she led the Banko Bikano campaign to improve sanitation and eliminate open defecation. With experience spanning public administration, governance and power distribution, she contributes to the administration and oversight of Rajasthan's energy sector and electricity distribution utilities.
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
                    <img src="images/2026/speakers/BrajeshKumar_CPDL.jpg" alt="Brajesh Kumar" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Brajesh Kumar<br/>
                        Chief Executive Officer<br/>
                        Chandigarh Power Distribution Limited
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr. Brajesh Kumar is the Chief Executive Officer (CEO) of Chandigarh Power Distribution Limited (CPDL), an RP-Sanjiv Goenka (RPSG) Group company. With over 30 years of professional experience, he has held leadership positions across diverse sectors, including aluminium, steel, telecommunications and power distribution, contributing significantly to business growth, operational excellence and strategic development.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Prior to his appointment at CPDL, Mr. Kumar served as Chief Operating Officer (COO) and Senior Executive Vice President at BSES Yamuna Power Limited (BYPL), where he played a key role in reducing distribution losses, driving digital transformation, enhancing consumer services and promoting emerging technologies such as rooftop solar, electric vehicle (EV) charging infrastructure and smart metering.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr. Kumar began his professional career in sales and marketing with leading organisations, including Hindalco (Aditya Birla Group), Sterlite (Vedanta Group) and Jindal Steel and Power, before transitioning to the power sector. He holds an MBA from the Delhi Productivity Council.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Known for his strong business acumen, customer-centric approach and understanding of emerging technologies, Mr. Kumar brings expertise in strategic planning, business development, market expansion and proactive leadership. His experience encompasses engagement with a wide range of stakeholders and customer segments, including electrical original equipment manufacturers (OEMs), the automotive and consumer goods industries, EV charging point operators (CPOs) and retail trade networks.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Under his leadership, CPDL is positioned to leverage his extensive experience in power distribution, digitalisation and customer service to strengthen operational performance and advance technology-driven electricity distribution in Chandigarh.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- C. Nallasivan -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/CNallasivan.jpg" alt="C. Nallasivan" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        C. Nallasivan<br/>
                        Assistant Executive Engineer<br/>
                        Tamil Nadu Power Distribution Corporation Limited
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Er. C. Nallasivan, M.E., M.I.E., (Ph.D.) is a Power System Engineer with over 20 years of experience in the Indian power sector, currently with the Tamil Nadu Power Distribution Corporation Limited (TNP DCL), where he works on Open Access Automated Meter Reading, renewable energy monitoring, and utility digitalization. He is a Ph.D. Research Scholar at Anna University, Chennai, researching Grid-Forming Inverters, Battery Energy Storage Systems, and grid stability in renewable-dominant power systems. He is a member of award-winning teams recognized with the SKOCH Silver Award 2022, ISGF Diamond Award 2023, and India Wind Energy Forum Leadership Award 2023 for renewable energy AMR implementation, and has presented his research internationally, including at the 24th Wind & Solar Integration Workshop (WISO 2025) in Berlin. He is a member of IEEE, the Institution of Engineers (India), IET (UK), and CIGRE.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Chetan Singh Adhikari -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/ChetanSinghAdhikari.jpg" alt="Chetan Singh Adhikari" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Chetan Singh Adhikari<br/>
                        Director - BD (Utilities)<br/>
                        REConnect Energy Solutions Ltd.
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr. Chetan Adhikari, the answer lies at the intersection of energy expertise, digital intelligence, and strong partnerships. With over 15 years in the power and energy sector, he has worked across renewable energy forecasting, power markets, grid operations, and utility digital transformation.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        From REMC and SAMAST solutions to predictive analytics and smart grid initiatives, Mr. Chetan focuses on helping utilities and energy businesses solve practical challenges and advance India's clean energy transition.
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
                        Dwijadas Basak<br/>
                        Chief Executive Officer<br/>
                        Tata Power Delhi Distribution Limited
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Dwijdas Basak is a seasoned leader in the power distribution sector with over three decades of experience, currently serving as the Chief Executive Officer (CEO) of Tata Power Delhi Distribution Limited (TPDDL). An electrical engineering graduate from B.E. College, Calcutta University, he has held diverse leadership roles across the Tata Power Group. His extensive career includes serving as the CEO of TP Northern Odisha Distribution Limited (TPNODL), Chief of the Odisha Distribution Business, and Chief Operating Officer at TP Central Odisha Distribution Ltd (TPCODL). Furthermore, he brings international exposure to his role, having contributed to power distribution operations in both India and Brazil, alongside significant prior experience at Tata Power-DDL in areas such as customer experience, commercial strategy, and government affairs. In his current capacity as CEO of TPDDL, Mr. Basak is dedicated to driving operational excellence and customer-centric digital transformation for a utility serving approximately 9 million consumers in North and North-West Delhi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gajanan S. Kale -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/GajananSKale.png" alt="Gajanan S. Kale" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Gajanan S. Kale<br/>
                        Chief Executive Officer<br/>
                        TP Central Odisha Distribution Limited
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr. Gajanan S. Kale is the Chief Executive Officer of TP Central Odisha Distribution Limited (TPCODL), a joint venture between Tata Power and the Government of Odisha. He also leads the Odisha Distribution Business, overseeing the strategic direction and performance of Tata Power's four distribution companies in the state.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        With over 35 years of experience in the power and energy sector, Mr. Kale has held several senior leadership positions across Tata Power and other leading organisations. Prior to his current role, he served as CEO of TP Northern Odisha Distribution Limited (TPNODL), Tata Power-DDL, TP Ajmer Distribution Ltd. (TPADL) and TP Western Odisha Distribution Limited (TPWODL). He began his career with BHEL, Bhopal, and subsequently held key positions with Central Railway, Nagpur Division and Tata Power Mumbai Distribution.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Over the course of his career, Mr. Kale has led large-scale transformation and business improvement initiatives, with extensive expertise in operational excellence, customer experience, resource planning and management, project management, digital transformation and stakeholder management. In his current role, he is driving the transformation of power distribution in Odisha with a strong focus on customer-centricity, technology adoption, operational excellence and sustainable growth.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        His leadership has been recognised through several accolades, including the "Best CEO of the Year with HR Orientation" and "Best CEO of the Year" award for FY 2023-24.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        An alumnus of IIM Ahmedabad, Mr. Kale holds an M.Tech in Integrated Power Systems and brings a strong combination of technical expertise, business leadership and extensive experience in the power distribution sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        With his experience across the power distribution value chain and his current leadership of Odisha's distribution business, Mr. Kale brings a practical and strategic perspective on power sector transformation, customer-centric distribution, technology-led operations and building future-ready utilities.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ghanshyam Prasad -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/GhanshyamPrasad.jpg" alt="Ghanshyam Prasad" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Ghanshyam Prasad<br/>
                        Chairperson<br/>
                        Central Electricity Authority (CEA)
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Shri Ghanshyam Prasad is the Chairman of Central Electricity Authority and Ex-Officio Secretary to the Government of India, ex-officio Member of the Central Electricity Regulatory Commission (CERC) since July 2022. He is a seasoned power sector expert with over 30 years of experience in generation, transmission, distribution, power market development, regulatory affairs, and energy efficiency. He has also contributed significantly to policy reforms, grid modernization, disaster management, and digital transformation in the power sector. Shri Prasad has served in the Haryana Electricity Regulatory Commission (HERC) for six years, leading the development of new regulations. His corporate experience includes serving as Government Nominee Director for PGCIL, POSOCO, and J&KPDCL. He currently serves as a Director on the Board of Nuclear Power Corporation of India Limited (NPCIL) in an ex-officio capacity.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hemant Verma -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/HemantVerma.jpg" alt="Hemant Verma" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Hemant Verma<br/>
                        Chairman<br/>
                        Tripura Electricity Regulatory Commission
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Sri Hemant Verma assumed charge as Chairman of the Tripura Electricity Regulatory Commission on 22 September 2025. He brings with him over 35 years of distinguished and exemplary experience in the power sector, marked by leadership, vision, and a deep commitment to regulatory and institutional development.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        During his illustrious career, Sri Verma has held several key positions in leading power sector institutions, including the Central Electricity Authority, Delhi Vidyut Board, BSES Rajdhani Power Limited, and as Chairperson of the Chhattisgarh State Electricity Regulatory Commission. His extensive experience spans power system planning, distribution reforms, regulatory affairs, renewable energy, and consumer service enhancement.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Over the course of his career, he has led several significant initiatives in AT&C loss reduction, integration of renewable energy, demand-side management, and consumer-focused digital service delivery. His strategic vision, administrative acumen, and reform-oriented approach have contributed substantially to strengthening efficiency, sustainability, and governance within the power sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        As Chairman of TERC, Sri Verma continues to provide visionary leadership in advancing regulatory reforms, strengthening consumer interests, and promoting sustainable, reliable, and efficient energy development in Tripura.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jaideep Singh -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/JaideepSingh.jpg" alt="Jaideep Singh" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Jaideep Singh<br/>
                        Advisor - Strategy and Stakeholder Engagement<br/>
                        Radius Synergies International Pvt. Ltd.
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Jaideep has an experience of more than 35 years in the corporate environment spanning across Power Energy Telecom and Real Estate. While working with companies like Crompton Greaves, Schneider Electric, Havells, Schlumberger and Union Unitech, contributed significantly to their growth story by successfully delivering strategic businesses that most would have written off.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Having successfully surfed the peaks and troughs of a cyclical economic environment with an experience of such a diverse portfolio. His latest venture as playing an advisory role and investments in tech-start ups has taken prominence, especially those with innovative IoT solutions powered by AI/ML platforms focused towards creating an impact in the energy space.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Karnati Varun Reddy -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/KarnatiVarunReddy.jpg" alt="Karnati Varun Reddy" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Karnati Varun Reddy<br/>
                        Chairman and Managing Director<br/>
                        Northern Power Distribution Company of Telangana Limited
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Sri. Karnati Varun Reddy is an officer of the Indian Administrative Service, 2019 batch, Telangana cadre. Prior to joining the IAS, he served in the Indian Revenue Service (Income Tax), 2017 batch. He graduated from IIT Bombay in Computer Science & Engineering in 2013 and holds a research patent in cloud computing for an algorithm developed in collaboration with BMC Software.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        His administrative career has been anchored in tribal and rural districts of Telangana, where he has led large-scale interventions in nutrition, livelihoods, forest rights, education and enterprise development. He presently heads the Northern Power Distribution Company of Telangana Limited (TGNPDCL) as Chairman & Managing Director, providing strategic vision and overall direction to the utility in achieving its corporate objectives.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- MAKP Singh -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/MAKPSingh.jpg" alt="MAKP Singh" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        MAKP Singh<br/>
                        Former Member (Hydro)<br/>
                        Central Electricity Authority (CEA)
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        M.A.K.P. Singh is a veteran power sector expert who served as Member (Hydro) at the Central Electricity Authority (CEA) until his retirement in June 2024. Throughout his tenure in CEA since 1992, he held pivotal roles including that of Chief Information Security Officer (CISO) for the Ministry of Power. He is widely recognized for his leadership in strengthening OT cyber security within India's power grid, formulating Cyber Security guidelines for Power Sector. He is presently engaged with IIT Kanpur as Visiting Professor of Practice.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- R.K. Tyagi -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/RKTyagi.jpg" alt="R.K. Tyagi" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Dr. R.K. Tyagi<br/>
                        Director General<br/>
                        Power Foundation of India
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Dr. R.K. Tyagi is Director General, Power Foundation of India (PFI), and a distinguished power sector leader with over 35 years of experience in transmission systems, grid modernization, renewable energy integration, regulatory affairs, and strategic sector development.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        A Fulbright Scholar and former Chairman & Managing Director of POWERGRID, Dr. Tyagi has played a pivotal role in shaping India's power infrastructure and strengthening regional energy cooperation. Throughout his career, he has led several landmark initiatives, including the development of India's 1200 kV transmission system, expansion of the country's inter-regional transmission network, integration of large-scale renewable energy corridors, and enhancement of cross-border electricity interconnections with neighbouring countries.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        As CMD of POWERGRID, he led one of the world's largest transmission utilities, overseeing significant infrastructure expansion, operational excellence, and regulatory engagement. His contributions have been instrumental in advancing grid reliability, transmission technology, asset management practices, and policy frameworks supporting India's energy transition.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Dr. Tyagi has actively contributed to national and international standardisation efforts through leadership roles in CIGRE and the International Electrotechnical Commission (IEC). He has been associated with the development of key transmission tariff regulations, technical standards, and grid performance frameworks that continue to guide the sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        At the Power Foundation of India, he is focused on promoting evidence-based research, policy support, capacity building, innovation, consumer awareness, and stakeholder collaboration to support India's vision of a reliable, resilient, inclusive, and sustainable power sector.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        Dr. Tyagi has received numerous national and international recognitions, including the IEC 1906 Award, BIS National Award, CBIP Individual Award, and the CIGRE Distinguished Member Award. He has also authored and presented over 50 technical papers in leading national and international forums.
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
                    <img src="images/2026/speakers/RahulKumar_NBPDCL.jpg" alt="Rahul Kumar" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Rahul Kumar<br/>
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

    <!-- Ravi Seethapathy -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/RaviSeethapathy.jpg" alt="Ravi Seethapathy" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Ravi Seethapathy<br/>
                        Executive Chairman<br/>
                        Biosirus Inc.
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Ravi Seethapathy, is Executive Chairman of Biosirus Inc., Canada. He serves as the "Ambassador for the Americas", for the Global Smart Energy Federation, USA, and as an Advisor to the India Smart Grid Forum. He is an empanelled expert at the Coalition for Disaster Resilient Infrastructure (CDRI), a 51-country member organization.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        With over 42+ years of experience in the Energy and Power Systems area in Canada, he mentors several utilities and companies in their technology development. His is active in several IEC, CSA, GSEF, ISGF, CDRI technical committees, in the areas of sustainable energy, transportation, energy storage, microgrid and e-mobility.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He is an invited speaker internationally and has co-authored over 50 technical papers and published 75 articles. His former Corporate Directorships include Larsen & Toubro's - Power Transmission & Distribution (IC), India, Toronto Atmospheric Fund, Smart Grid Canada, Ryerson University, TV Ontario, Scarborough Hospital, and as Chairs of Engineers Without Borders Canada, Canadian Club of Toronto, and Indo-Canada Chamber of Commerce.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He is a Life Fellow of the Canadian Academy of Engineering; a Life Senior Member of the IEEE; and a registered Professional Engineer in Ontario. He has been honoured with several awards/citations including the Distinguished Alumnus Award, IIT Kharagpur (2025); ISGF President's Award (2023); Life Member Service Award; IEEE Toronto (2021); and Queen Elizabeth II Diamond Jubilee Medal (2012).
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He/his family has endowed an IEEE PES/IAS Award in "Rural Electrification Excellence". He holds a B. Tech (Hons) in Electrical Power from IIT Kharagpur, India, an M. Eng. in Electrical Power from University of Toronto and an MBA from the Schulich School of Business, York University, Toronto, Canada.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Reji Kumar Pillai -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/RejiKumarPillai.jpg" alt="Reji Kumar Pillai" class="speaker-photo">
                </div>
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

    <!-- Reena Suri -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/ReenaSuri.JPG" alt="Reena Suri" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Reena Suri<br/>
                        Chief Executive Officer<br/>
                        India Smart Grid Forum
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Reena Suri, Chief Executive Officer of the India Smart Grid Forum (ISGF) since 2013, brings over 23 years of rich experience in the energy sector. She has played a key role in various ISGF projects, including the Electrification Plan for Public Transportation, Blockchain for Electric Utilities, Energy Storage Roadmap for India, Smart Grid Roadmap, and developing smart grid and EV infrastructure plans for the SAARC Region. Reena also led the World Bank EV Project in Kolkata. As the founder-editor of the Smart Grid Bulletin, Reena has been a voice for smart grid advancements since 2013. She is passionate about increasing gender diversity in the energy sector, leading initiatives to improve networking and mentoring programs for women, raise awareness and technology skills among women, and attract women to technical education by showcasing inspiring role models.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Rohit Bajaj -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/RohitBajaj.jpg" alt="Rohit Bajaj" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Rohit Bajaj<br/>
                        Joint Managing Director<br/>
                        Indian Energy Exchange (IEX)
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Rohit Bajaj is a management and business development professional, Rohit has over 30 years of rich and diverse experience garnered in the energy domain, encompassing generation and power market, as well as the hydrocarbon industry. Working at the Indian Energy Exchange since the year 2014 with a dedicated focus on building India's power markets, Mr. Bajaj has been instrumental in conceptualizing and implementing several market segments. Before joining IEX, Mr. Bajaj held the position of Head of Business and Whole-time Director at National Energy Trading and Services Limited. Earlier in his career, he held leadership position at conglomerates like Reliance Industries, Lanco Amarkantak Power, Jindal Stainless etc. where he oversaw various aspects of energy infrastructure projects like power plants, gas pipelines and electricity trading.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He holds a Bachelor's degree in Mechanical Engineering from the Regional Engineering College, Rourkela, Sambalpur University, and Post Graduate Diploma Programme in Executive Management from the Management Development Institute, Gurgaon.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Shalini Agarwal -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/ShaliniAgarwal.jpg" alt="Shalini Agarwal" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Shalini Agarwal<br/>
                        Managing Director<br/>
                        GUVNL
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Smt. Shalini Agarwal is a 2005-batch Indian Administrative Service (IAS) officer of the Gujarat cadre and is presently serving as Managing Director, Gujarat Urja Vikas Nigam Limited (GUVNL). She has over two decades of experience across urban governance, revenue administration, finance and energy management. She has previously served as Municipal Commissioner of Surat and Vadodara and as District Collector of Tapi-Vyara, Kheda, Aravalli and Vadodara. She has also served as Additional Commissioner of Commercial Tax in the Finance Department, Government of Gujarat.
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
                        <p>Teppo Hemiä is the founder and CEO of Wirepas. He has 30 years of experience building and scaling global wireless technology businesses, including new ventures and major turnarounds. Before founding Wirepas in 2014, he held senior positions at Nokia, STMicroelectronics and ST-Ericsson.</p>
                    </div>
            </div>
        </div>
    </div>

    <!-- Santhosh Nair -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/SanthoshNair.jpg" alt="Santhosh Nair" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Santhosh Nair<br/>
                        Director<br/>
                        Oracle Utilities
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Santhosh Nair is Director for the Energy & Water Industry segment at Oracle India, where he focuses on digital transformation for utilities. With nearly 40 years of experience, he has held leadership roles at NHPC India, Power Grid India, IBM India and ASEAN, Nokia Solutions & Networks, and Oracle Malaysia. He holds degrees in Electrical Engineering from the College of Engineering Trivandrum, and master's degrees from IIT Chennai and the London School of Economics. Santhosh is a member of AESIEAP, a Fellow of IETE, and a frequent industry speaker.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Song Youngsub -->
    <div class="row speaker_row">
        <div class="k_list_part">
            <div class="col-sm-12 dum_speaker" style="display: flex; align-items: flex-start;">
                <div class="speaker_img" style="flex: 0 0 23%; text-align: center;">
                    <img src="images/2026/speakers/SongYoungsub.jpg" alt="Song Youngsub" class="speaker-photo">
                </div>
                <div class="speaker_content" style="flex: 1;">
                    <h1 class="key_head" style="font-size: 25px; text-align: left; text-transform: capitalize; margin-bottom: 15px; margin-top: 0;">
                        Song Youngsub<br/>
                        Principal Engineer/R&D<br/>
                        Reformtech Co., Ltd.
                    </h1>
                    <p style="text-align: justify; line-height: 1.6;">
                        Mr. Song Youngsub is a Principal Engineer in R&D at Reformtech Co., Ltd., with a B.S. in Mechanical Systems Engineering from Chonnam National University and 15 years of experience at Reformtech's R&D Institute, where he has led product development since 2011.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He specializes in power distribution protection and switching equipment, including current-limiting fuses, DC fuses for solar and ESS applications, and medium-voltage switchgear. He has served as Development PM for programs delivered to Korea Electric Power Corporation (KEPCO), including current-limiting fuses for cut-out switches and a no-fuse-breaker-type service line breaker.
                    </p>
                    <p style="text-align: justify; line-height: 1.6;">
                        He holds a patent application for arc protection technology for 7.2 kV switchgear and has led national R&D projects funded by Korea's Ministry of Trade, Industry and Energy and Ministry of Land, Infrastructure and Transport.
                    </p>
                </div>
            </div>
        </div>
    </div>
	
	
	
	


</div>

	
			<br/>
			<div style="text-align:center">
			<p>For More information: <a href="http://dumindia.in/speaker2025.php">http://dumindia.in/speaker2025.php</a></p>	
            <p>For More information: <a href="http://dumindia.in/speaker2024.php">http://dumindia.in/speaker2024.php</a></p>
				<p>For More information: <a href="http://dumindia.in/speaker2023.php">http://dumindia.in/speaker2023.php</a></p>

				<p>For More information: <a href="http://dumindia.in/speaker2022.php">http://dumindia.in/speaker2022.php</a></p>

				<p>For More information: <a href="http://dumindia.in/speaker2021.php">http://dumindia.in/speaker2021.php</a></p>
				</div>
<br><br>
	</div>




<!-- key objective ends here -->

<?php include "include/footer.php"; ?>