<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Education - BPPA</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">
    <link href="css/checkout.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    <style>
        .event-product {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }

        .event-header {
            display: none;
            /* Hiding the header for now unless you need it */
        }

        .event-main {
            display: flex;
            flex-wrap: wrap;
        }

        .event-image {
            width: 40%;
            margin-right: 30px;
        }

        .event-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .event-details {
            width: 55%;
        }

        .event-title {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .event-subtitle {
            font-size: 1.5rem;
            color: #555;
            margin-bottom: 10px;
        }

        .event-price {
            font-size: 1.25rem;
            color: #28a745;
            margin-bottom: 20px;
        }

        .event-description {
            font-size: 1rem;
            color: #666;
        }

        .form-select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
        }

        .event-actions {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .quantity-selector label {
            font-size: 1rem;
            margin-right: 10px;
            color: #333;
        }

        .quantity-input {
            width: 60px;
            padding: 5px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .add-to-cart-button {
            padding: 10px 20px;
        }

        @media (max-width: 768px) {
            .event-main {
                flex-direction: column;
            }

            .event-image {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }

            .event-details {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="news-detail page-body section-padding">

        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-12 col-12 my-auto">
                    <div class="event-product">
                        <div class="event-header">
                            <div class="back-button"></div>
                        </div>
                        <div class="event-main d-flex">
                            <div class="event-image">
                                <img src="https://thebppa.org.uk/wp-content/uploads/2024/09/WhatsApp-Image-2024-09-06-at-5.02.49-PM.jpeg"
                                    alt="" />
                            </div>
                            <div class="event-details">
                                <h2 class="event-subtitle">{{ $data->title }}</h2>
                                <h3 class="event-price">${{ number_format($data->price, 2) }}</h3>
                                <p class="event-description">{{ $data->short_description }}</p>

                                <p class="membership-label">Membership Plans</p>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Choose an option</option>
                                    @foreach(getMemberships() as $key => $membership)
                                    <option value="{{ $membership->id }}">{{ $membership->title }}</option>
                                    @endforeach
                                </select>

                                <div class="event-actions d-flex align-items-center">
                                    <div class="quantity-selector">
                                        <label for="quantity" class="mr-2">Qty:</label>
                                        <input type="number" id="quantity" class="form-control quantity-input" value="1"
                                            min="1">
                                    </div>
                                    <button class="btn btn-sm btn-success add-to-cart-button ml-3">Add to Cart</button>
                                </div>


                                <!-- tabs -->
                                <div class="tab-wrap mt-4 checkout_details">

                                    <!-- active tab on page load gets checked attribute -->
                                    <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
                                    <label for="tab1">Description</label>

                                    <input type="radio" id="tab2" name="tabGroup1" class="tab">
                                    <label for="tab2">Additional Information</label>

                                    <div class="tab__content">
                                        <h6 class="tab_content_heading">Details</h6>
                                        <p >BPPA Annual Conference on 2nd November 2024</p>
                                        <h6 class="tab_content_heading">Venue</h6>
                                        <p>In the Marriot Hotel Leicester.</p>

                                    </div>

                                    <div class="tab__content">
                                        <p class="tab_content_heading">BPPA Annual Conference on 2nd November 2024</p>
                                        <p>CPD Day with lunch & tea plus Dinner & Social Event £190 for non-members, CPD
                                            Day with lunch & tea plus Dinner & Social Event £170 for members, CPD Day
                                            with lunch & tea excluding Dinner & Social Event for non members £150, CPD
                                            Day with lunch & tea excluding Dinner & Social Event for members £130, CPD
                                            Day with lunch & tea plus Dinner & Social Event for trainees non-members
                                            £150, CPD Day with lunch & tea plus Dinner & Social Event for trainees
                                            members £130, CPD Day with lunch & tea excluding Dinner & Social Event for
                                            trainees non-members £110, CPD Day with lunch & tea excluding Dinner &
                                            Social Event for trainees members £90, Any additional tickets for only
                                            Dinner & Social Event £50, Any additional tickets for only Dinner & Social a
                                            table of 10 for £450, Special Discount Ticket of only £55 (instead of £220)
                                            for Medical Students and Clinical Attachees</p>

                                    </div>



                                </div>


                                <!-- tabs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>