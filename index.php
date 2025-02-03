<!DOCTYPE html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
        }

        .header-logo {
            width: 60%;
            max-width: 480px;
            height: auto;
            margin-bottom: 20px;
        }

        a {
            display: inline-flex;
            justify-content: center;
            width: 100%;
        }

        h1,
        h2 {
            font-size: 38px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {

            h1,
            h2 {
                font-size: 20px;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .header-logo {
                max-width: 100%;
            }
        }

        .image-gallery {
            width: 100%;
            display: flex;
            flex-direction: column;
            /* Always stacks the images vertically */
            align-items: center;
            margin: 20px 0;
        }

        .image-gallery img {
            max-width: 80%;
            /* Good width for mobile and desktop viewing */
            height: auto;
            margin: 10px;
        }

        footer a {
            font-size: 24px;
            /* Makes link text bigger */
            text-decoration: none;
            /* Optional: removes underline from links */
            color: #007BFF;
            /* Optional: standard link color */
        }

        footer a:hover {
            text-decoration: underline;
            /* Optional: adds underline on hover */
        }
    </style>
</head>

<body style="margin-bottom: 55px !important;">
    <header>
        <a href="https://tigerliftingmena.com">
            <img class="header-logo" src="/Tiger_Lifting_logo.png" alt="Tiger Lifting">
        </a>
        <h1>Welcome to Tiger Lifting MENA</h1>
        <p>Our website is under construction. Please check back soon for updates.</p>
        <p>For any sales enquiries in the MENA region, please contact us at <a href="mailto:sales@tigerliftingmena.com">sales@tigerliftingmena.com</a>.</p>
        <p>For our full product range, please visit <a href="https://www.tigerlifting.com">www.tigerlifting.com</a>.</p>
    </header>
</body>
