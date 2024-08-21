<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        
    }
    .bg-pink{
        /* color: white !important; */
        background-color: #ffcbcb;
    }
    .bg-redshad{
        background-color: #441f1f;
    }
    .border-bottom-pink {
        border-bottom: 2px solid #ffcbcb;
        color: white !important;
    }
    .border-bottom-redShade {
        border-bottom: 2px solid #441f1f;
        color: black !important;
    }
    .constitution {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        background-color: #ffcbcb;
        padding: 20px 30px;
        margin: 20px;
        border-radius: 5px;
        color: #441f1f !important;
        height: 160px;
        overflow: hidden;
    }

    .box:hover {
        height: auto;
    }

    .box p {
        font-size: 15px;
        color: black;
        text-align: justify;
    }

    #conteneur {
        width: 80%;
        margin: 30px auto;
        height: 80vh;
        font-family: 'Montserrat', sans-serif;
    }
   
    .accordeon {
        width: 100%;
        height: 100%;
        transform: translateZ(0);
    }

    .accordeon:hover .link {
        height: 5%;
    }

    .accordeon .link {
        position: relative;
        color: black;
        width: 100%;
        height: 24%;
        overflow: hidden;
        cursor: pointer;
        transition: .5s ease-out;
    }

    .accordeon .link:last-child {
        border-bottom: 0;
    }

    .accordeon .link:hover {
        height: 85%;
        background-color: #441f1f;
    }

    .accordeon .link:hover img {
        filter: brightness(0%);
    }

    /* Position  icone interieur */
    /* .accordeon .link .small {
        position: absolute;
        top: 10px;
        left: 20px;
        width: 100px;
        line-height: 78px;
        text-align: center;
        font-size: 24px;
    } */

    .accordeon .link .small img {
        transition: .5s ease-out;
        width: 30px;
    }

    /* Position contenu */
    .accordeon .link .full {
        padding: 30px 35px;
        text-align: justify;
    }

    .accordeon .link .full .f1 {
        text-transform: uppercase;
        font-weight: bold;
    }

    .accordeon .link .full .f1,
    .accordeon .link .full .f2 {
        /* font-size: 16px; */
        /* font-weight: 700; */
        /* color: white; */
    }

    .accordeon .link .full .f2 {
        margin-top: 8px;
        /* font-size: 12px; */
    }

    /* Position icone mini */
    .accordeon .link .prev {
        position: absolute;
        top: -15px;
        left: 10px;
        font-size: 12px;
        line-height: 78px;
        transition: .5s opacity;
        opacity: 0;
    }

    .accordeon .link .prev img {
        width: 30px;
    }

    .accordeon .link:hover .prev {
        opacity: 0;
    }

    .accordeon:hover .prev {
        opacity: 1;
    }

    .cons-about ul li {
        line-height: 1.7;
        color: black !important;
        text-align: justify;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-pink">
                <div class="container constitution">
                    <div class="row">
                        <div class="col-5 my-auto">
                            <h2>AIMS AND OBJECTIVES</h2>
                            <h5>The objective of the BPPA shall be to provide a platform for British Pakistani Psychiatrists in the UK. The aims and objectives shall be:</h5>
                            <span class="cons-about">
                                <ul>
                                    <li>To keep a database of all such Psychiatrists in the UK, Ireland and other countries in Europe.</li>
                                    <li> To have a website for better communication. To provide an opportunity for British Pak psychiatrists to contact others.</li>
                                    <li> To arrange periodic get-togethers for its members.</li>
                                    <li>To provide a forum for the members to establish academic, professional and social links with other associations.</li>
                                    <li>To provide information to the junior psychiatrists wishing to pursue their careers in the United Kingdom.</li>
                                    <li> To provide advice and guidance to governmental, professional and other non-statutory bodies on issues.</li>
                                    <li>To undertake whatever is deemed appropriate by the executive of the association, in any field or any sphere.</li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-7">
                            <div id="conteneur">
                                <div class='accordeon bg-redshad'>
                                    <div class='link border-bottom-pink'>
                                        <div class='full'>
                                            <div class='f1'>Powers and Authority of the Association</div>
                                            <div class='f2'>Under the above entitled name, and for the objectives expressed, the Association shall have the power and authority to make rules/regulations, to alter, amend and change the same and to do everything needful for its good maintenance, support and viability. It shall be and is empowered to hold, lease, receive, purchase and convey all manners of property, both real and personal, accept and receive donations, legacies and bequests; to borrow or lend money; to invest its funds as it so chooses; to own, publish, conduct, and circulate such literature as will further its expressed purposes; to name and appoint such managers and employees as its interests and convenience may require; and otherwise to do and perform all acts and things requisite and necessary to carry out the aims and objectives of this Association.</div>
                                        </div>
                                    </div>
                                    <div class='link border-bottom-pink'>
                                        <div class='full'>
                                            <div class='f1'>MEMBERSHIP</div>
                                            <div class='f2'>The membership of the Association will include all eligible trainee or trained psychiatrists, in training or career positions, subscribing to the objectives of the Association and residing in the UK, Ireland or any other European. Membership will be confirmed and continued after payment of dues. The members shall have all dues paid and shall be entitled to all of the privileges of the Association including the right to vote and hold office. A member must comply with the rules and regulations of the Association. There shall be no discrimination on the basis of religion, gender, sexual orientation, race or ethnic origin in the membership of the Association. Being a Pakistani psychiatrist is a state of mind and not of existence, it is a preference and if others wish to become members, they would not be hindered in any respect.</div>
                                        </div>
                                    </div>
                                    <div class='link border-bottom-pink'>
                                        <div class='full'>
                                            <div class='f1'>MEMBERSHIP FEE</div>
                                            <div class='f2'>All members shall pay full dues as determined by the Executive Committee and approved by the general body. The term of the annual dues shall be from 1 January to 31st December. Any member whose dues are not paid by 1 March will be considered in arrears and will not be eligible to hold office in the Association, but may vote as long as all dues are paid prior to elections.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 bg-redshad">
                <div class="container constitution">
                    <div class="row">
                        <div class="col-7">
                            <div id="conteneur">
                                <div class='accordeon bg-pink'>
                                    <div class='link border-bottom-redShade'>
                                        <div class='full'>
                                            <div class='f1'>Powers and Authority of the Association</div>
                                            <div class='f2'>Under the above entitled name, and for the objectives expressed, the Association shall have the power and authority to make rules/regulations, to alter, amend and change the same and to do everything needful for its good maintenance, support and viability. It shall be and is empowered to hold, lease, receive, purchase and convey all manners of property, both real and personal, accept and receive donations, legacies and bequests; to borrow or lend money; to invest its funds as it so chooses; to own, publish, conduct, and circulate such literature as will further its expressed purposes; to name and appoint such managers and employees as its interests and convenience may require; and otherwise to do and perform all acts and things requisite and necessary to carry out the aims and objectives of this Association.</div>
                                        </div>
                                    </div>
                                    <div class='link border-bottom-redShade'>
                                        <div class='full'>
                                            <div class='f1'>MEMBERSHIP</div>
                                            <div class='f2'>The membership of the Association will include all eligible trainee or trained psychiatrists, in training or career positions, subscribing to the objectives of the Association and residing in the UK, Ireland or any other European. Membership will be confirmed and continued after payment of dues. The members shall have all dues paid and shall be entitled to all of the privileges of the Association including the right to vote and hold office. A member must comply with the rules and regulations of the Association. There shall be no discrimination on the basis of religion, gender, sexual orientation, race or ethnic origin in the membership of the Association. Being a Pakistani psychiatrist is a state of mind and not of existence, it is a preference and if others wish to become members, they would not be hindered in any respect.</div>
                                        </div>
                                    </div>
                                    <div class='link border-bottom-redShade'>
                                        <div class='full'>
                                            <div class='f1'>MEMBERSHIP FEE</div>
                                            <div class='f2'>All members shall pay full dues as determined by the Executive Committee and approved by the general body. The term of the annual dues shall be from 1 January to 31st December. Any member whose dues are not paid by 1 March will be considered in arrears and will not be eligible to hold office in the Association, but may vote as long as all dues are paid prior to elections.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 my-auto">
                            <h2>AIMS AND OBJECTIVES</h2>
                            <h5>The objective of the BPPA shall be to provide a platform for British Pakistani Psychiatrists in the UK. The aims and objectives shall be:</h5>
                            <span class="cons-about">
                                <ul>
                                    <li>To keep a database of all such Psychiatrists in the UK, Ireland and other countries in Europe.</li>
                                    <li> To have a website for better communication. To provide an opportunity for British Pak psychiatrists to contact others.</li>
                                    <li> To arrange periodic get-togethers for its members.</li>
                                    <li>To provide a forum for the members to establish academic, professional and social links with other associations.</li>
                                    <li>To provide information to the junior psychiatrists wishing to pursue their careers in the United Kingdom.</li>
                                    <li> To provide advice and guidance to governmental, professional and other non-statutory bodies on issues.</li>
                                    <li>To undertake whatever is deemed appropriate by the executive of the association, in any field or any sphere.</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>