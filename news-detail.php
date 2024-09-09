<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">

</head>

<body>



    <!-----------------Start-Modal----------------->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">BPPA Annual Conference Booklet – November 2021</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-wrapper">
                        <?php
                        $contentData = [
                            'images' => [
                                'images/news/event-banner-1.jpg',
                                'images/news/event-banner-2.jpg'
                            ],
                            'videos' => [
                                'https://www.youtube.com/embed/biLdKre2HO4',
                                'https://www.youtube.com/embed/dQw4w9WgXcQ'
                            ],
                            'text'  => 'This is an example text content. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima illum, nisi necessitatibus quod obcaecati voluptatum id molestiae soluta. Odit, provident excepturi nam culpa nobis doloribus nostrum ad maxime soluta possimus?', // Set to '' if no text
                            'link'  => 'https://www.example.com' // Set to '' if no link
                        ];
                        ?>

                        <!-- Image Section -->
                        <?php if (!empty($contentData['images']) && is_array($contentData['images'])): ?>
                            <div class="content-images">
                                <?php foreach ($contentData['images'] as $image): ?>
                                    <div class="content-image">
                                        <img src="<?php echo $image; ?>" alt="Content Image">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Video Section -->
                        <?php if (!empty($contentData['videos']) && is_array($contentData['videos'])): ?>
                            <div class="content-videos">
                                <?php foreach ($contentData['videos'] as $video): ?>
                                    <div class="content-video">
                                        <iframe width="100%" height="600px" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Text Section -->
                        <?php if (!empty($contentData['text'])): ?>
                            <div class="content-text">
                                <p><?php echo $contentData['text']; ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Link Section -->
                        <?php if (!empty($contentData['link'])): ?>
                            <div class="content-link">
                                <a href="<?php echo $contentData['link']; ?>" target="_blank">Visit Link</a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-----------------End-Modal----------------->


    <div class="context">
        <main>
            <?php include 'include/header.php'; ?>

            <section class="news-detail section-padding page-body">
                <img src="images/logoBanner/texture1.png" alt="" class="texture-image texture-opacity">
                <div class="container news-content">
                    <div class="row">
                        <div class="col-lg-8 col-10 mx-auto mb-5">
                            <h2 class="text-center" data-aos="fade-up">Latest News and Updates</h2>
                            <hr class="mb-5 mx-auto">
                            <!---------------Start-content-1 --------------------->
                            <div class="clearfix mt-lg-0 mt-5" data-aos="fade-up">
                                <div class="col-md-6 float-md-end mb-3 ms-md-3">
                                    <figure class="figure">
                                        <img src="images/news/event-banner-1.jpg" class="img-fluid news-image" alt="">

                                        <figcaption class="figure-caption text-end">East Midlands Regional CPD Event on Wellbeing</figcaption>
                                    </figure>
                                </div>
                                <?php
                                $full_text = "Morbi scelerisque urna in orci elementum, nec mollis ligula luctus. Proin ullamcorper pulvinar commodo. Quisque tortor nunc, ultricies efficitur ex sit amet, tempus rutrum libero. In nec faucibus tellus. Morbi scelerisque urna in orci elementum, nec mollis ligula luctus. Proin ullamcorper pulvinar commodo. Quisque tortor nunc, ultricies efficitur ex sit amet, tempus rutrum libero. In nec faucibus tellus. Morbi scelerisque urna in orci elementum, nec mollis ligula luctus.";
                                // Function to limit words
                                function limit_words($text, $limit)
                                {
                                    $words = explode(' ', $text);
                                    if (count($words) > $limit) {
                                        return implode(' ', array_slice($words, 0, $limit)) . '...';
                                    } else {
                                        return $text;
                                    }
                                }
                                // Display truncated content with the Readmore link
                                $truncated_text = limit_words($full_text, 45);
                                ?>
                                <p>
                                    <?php echo $truncated_text; ?>
                                </p>
                                <!-- read more button start -->
                                <a href="" class="btn btn-4" data-toggle="modal" data-target="#exampleModalCenter"><span>Readmore</span></a>
                                <!-- read more button start -->
                            </div>
                            <!---------------End-content-1 --------------------->
                            <!---------------Start-content-2 --------------------->
                            <div class="clearfix mt-3" data-aos="fade-up">
                                <div class="col-md-4 float-md-start mx-2 mb-3 ms-md-3">
                                    <figure class="figure">
                                        <img src="images/news/event-banner-2.jpg" class="img-fluid news-image" alt="">
                                        <figcaption class="figure-caption text-start">BPPA Call for Posters-images</figcaption>
                                    </figure>
                                </div>
                                <p>
                                    <?php echo $truncated_text; ?>
                                </p>
                                <!-- read more button start -->
                                <a href="" class="btn btn-4" data-toggle="modal" data-target="#exampleModalCenter"><span>Readmore</span></a>
                                <!-- read more button start -->
                            </div>
                            <!---------------End-content-2 --------------------->
                            <!---------------Start-content-3 --------------------->
                            <div class="clearfix mt-4" data-aos="fade-up">
                                <div class="col-md-4 float-md-end mx-2 mb-3 ms-md-3">
                                    <figure class="figure">
                                        <img src="images/news/event-banner-3.jpg" class="img-fluid news-image" alt="">

                                        <figcaption class="figure-caption text-end">2nd Annual Event - Live Performance by Tanya Wells</figcaption>
                                    </figure>
                                </div>

                                <p>
                                    <?php echo $truncated_text; ?>
                                </p>
                                <!-- read more button start -->
                                <a href="" class="btn btn-4" data-toggle="modal" data-target="#exampleModalCenter"><span>Readmore</span></a>
                                <!-- read more button start -->

                            </div>
                            <!---------------End-content-3 --------------------->
                        </div>
                    </div>
                </div>
            </section>

            <section class="related-news section-padding">
                <div class="container">
                    <h2 class="text-center" data-aos="fade-up">News Archives</h2>
                    <hr class="mb-5 mx-auto">
                    <div class="row">
                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                            <div class="MultiCarousel-inner">
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">BPPA Annual Conference Booklet – November 2021</p>
                                        <p class="date">02/02/2022</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Last date for Registration: 8 September 2015</p>
                                        <p class="date">03/06/2021</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Dr Abdul Fowad Chaudhary Tribute</p>
                                        <p class="date">13/01/2021</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Preliminary Results of the BPPA 2020 elections</p>
                                        <p class="date">20/08/2020</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Announcement BPPA elections 2020</p>
                                        <p class="date">26/07/2020</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">BPPA Election 2020 – For the Tenure 2021-2024</p>
                                        <p class="date">21/07/2020</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">BPPA Photos of Annual Meeting November 2019</p>
                                        <p class="date">01/12/2019</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">BPPA Annual Meeting 9th & 10th November 2019 Programme</p>
                                        <p class="date">08/10/2019</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">BPPA – BAPA Joint Conference 1 Dec 2018</p>
                                        <p class="date">12/11/2018</p>
                                        <small data-toggle="modal" data-target="#exampleModalCenter">read more</small>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-success leftLst">
                                < </button>
                                    <button class="btn btn-success rightLst">></button>
                        </div>
                    </div>
                </div>


            </section>
            <?php include 'include/footer.php'; ?>
        </main>
    </div>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>



    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Modal Script -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>