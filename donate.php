<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patronize Now - Happy Folks Club</title>
    <link rel="shortcut icon" type="image/jpg" href="./static/img/logo.jpeg" />
    <link rel="stylesheet" href="./static/styles/donate.css">
    <link rel="stylesheet" href="./static/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!--</section>-->

    <div class="cover">
    </div>

    <div class="upperText">
        <div class="left">
            <h1>JOIN THE MOVEMENT</h1>
            <br>
            <h5 style="color: white;">
                Choose from diverse options ranging from Rs 99 to Rs 39,999
                <br>
                <br>
                The motto of our club is to facilitate the joining hands of senior citizens and the youth to build together India as a developed nation.
            </h5>
        </div>
        <div class="hero" id="vid-back">
            <br>
            <div class="summit-slide viddd">
                <video width="1080" height="1080" class="vid" controls>
                    <source src="./static/img/PATRONIZING PROMO 01 - Made with Clipchamp.mp4" type="video/mp4" alt="Siddharth Kothari, founder of Happy Folks Club">
                    Your browser does not support video
                </video>
                <br>
            </div>
        </div>
    </div>

    <div class="card-row">
        <div class="card" id="batch">
            <h2>Adopt a Batch</h2>
            <i>
                Adopt a batch of 40 senior citizens by contributing Rs 39999 to their graduation.
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5SYJ6vg34ubzD" async> </script>
            </form>
        </div>
    </div>
    <div class="card-row">
        <div class="card" id="happiness">
            <h2>Happiness Patron</h2>
            <i>
                <p>Thank you for the morale boost!</p>
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5Qyl6y6s674Tq" async> </script>
            </form>
        </div>
        <div class="card" id="silver">
            <h2>Silver Patron</h2>
            <i>
                <p>Baby Steps take us a long way!</p>
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5R6ah4AWFthZR" async> </script>
            </form>
        </div>
    </div>
    <div class="card-row">
        <div class="card" id="gold">
            <h2>Gold Patron</h2>
            <i>
                <li>You're the gold standard of awesome!</li>
                <li>E-certificate provided</li>
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5RAekt4QcwrKP" async> </script>
            </form>
        </div>
        <div class="card" id="custom">
            <h2>Custom Amount</h2>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5RT8tVoidyQZm" async> </script>
            </form>
        </div>
        <div class="card" id="diamond">
            <h2>Diamond Patron</h2>
            <i>
                <li>Sparkling so bright, we need sunglasses just to read your name!</P>
                <li>E-certificate provided</li>
                <li>Invitation to all major club activity</li>
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5RBL0hFtyizhx" async> </script>
            </form>
        </div>
    </div>
    <div class="card-row">
        <div class="card" id="elite">
            <h2>Elite Patron</h2>
            <i>
                <li>You're basically our superhero in disguise, cape optional!</li>
                <li>E-certificate provided</li>
                <li>Invitation to all major club activity</li>
                <li>Elite Patrons Club Membership(exclusive opportunities and inclusion in club activities)</li>
            </i>
            <form>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_P5RCZRVDgQDAjI" async> </script>
            </form>

        </div>
    </div>

    <section class="leaderSection">
        <div class="leaderboard">
            <div class="listItem" id="listtopper">
                <h4>Total Donations:</h4>
                <h4>160,992</h4>
            </div>
            <h2 class="leadertitle">Leaderboard</h2>
            <div class="listItem" id="listHead">
                <h4>Name</h4>
                <h4>Amount</h4>
            </div>
            <div class="listItem">
                <div class="sponsor-name">
                    <h4>HearClear</h4>
                    <span class="sponsored">Sponsored</span>
                </div>
                <h4>Rs. 30000</h4>
            </div>

            <div class="listItem">
                <div class="sponsor-name">
                    <h4>Aabhushan Jewellers</h4>
                </div>
                <h4>Rs. 20000</h4>
            </div>

            <style>
                .listItem {
                    display: flex;
                    justify-content: space-between;
                    align-items: flex-start;
                    margin-bottom: 20px;
                }

                .sponsor-name {
                    display: flex;
                    flex-direction: column;
                }

                .sponsored {
                    font-size: 0.8em;
                    /* Adjust font size */
                    margin-top: 4px;
                    /* Add some space between name and 'Sponsored' */
                }
            </style>

            <div class="listItem">
                <h4>Dilkush</h4>
                <h4>Rs. 15000</h4>
            </div>
            <div class="listItem">
                <h4>Kewalchand Pushpa</h4>
                <h4>Rs. 5000</h4>
            </div>
            <div class="listItem">
                <h4>MP Swarna Mahal</h4>
                <h4>Rs. 5000</h4>
            </div>
            <div class="listItem">
                <h4>Shivapraksh</h4>
                <h4>Rs. 5000</h4>
            </div>
            <div class="listItem">
                <h4>Rtn Yogesh</h4>
                <h4>Rs. 5000</h4>
            </div>
            <div class="listItem">
                <h4>Salarpuriya Greenage</h4>
                <h4>Rs. 5000</h4>
            </div>
            <div class="listItem">
                <h4>Prakash & Rasila</h4>
                <h4>Rs. 2000</h4>
            </div>
            <div class="listItem">
                <h4>Arpana</h4>
                <h4>Rs. 2000</h4>
            </div>
            <div class="listItem">
                <h4>Suyog R</h4>
                <h4>Rs. 1111</h4>
            </div>
            <div class="listItem">
                <h4>Koushala devi</h4>
                <h4>Rs. 1000</h4>
            </div>
            <div class="listItem">
                <h4>G Ragugopala</h4>
                <h4>Rs. 1000</h4>
            </div>
            <div class="listItem">
                <h4>A Rajashekhar</h4>
                <h4>Rs. 1000</h4>
            </div>
            <div class="listItem">
                <h4>Preksha J</h4>
                <h4>Rs. 999</h4>
            </div>
            <div class="listItem">
                <h4>Praveen G</h4>
                <h4>Rs. 999</h4>
            </div>
            <div class="listItem">
                <h4>Vijaykumar</h4>
                <h4>Rs. 999</h4>
            </div>
            <div class="listItem">
                <h4>Arathi R</h4>
                <h4>Rs. 999</h4>
            </div>
            <div class="listItem">
                <h4>Chavi Bhojani</h4>
                <h4>Rs. 999</h4>
            </div>
            <div class="listItem">
                <h4>Lakshmi</h4>
                <h4>Rs. 950</h4>
            </div>
            <div class="listItem">
                <h4>Diya P</h4>
                <h4>Rs. 950</h4>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
<script src="./static/js/main.js"></script>
<script>
    document.querySelectorAll(".std-btn").forEach(element => {
        element.addEventListener("click", (e) => {
            let payamt = e.target.value
            if (payamt == "custom") {
                payamt = document.getElementById("amt").value;
            }
            localStorage.setItem("amt", payamt);

            window.location.href = "./payform.php"
        })
    });

    document.getElementById("amt").addEventListener("input", (e) => {
        let amt = parseInt(e.target.value);
        let slab = document.getElementById("slabb")
        if (amt < 101) {
            slab.innerHTML = "";
        } else if (amt >= 10001) {
            slab.innerHTML = "ELITE Patron";
        } else if (amt >= 5001) {
            slab.innerHTML = "DIAMOND Patron";
        } else if (amt >= 1001) {
            slab.innerHTML = "GOLD Patron";
        } else if (amt >= 501) {
            slab.innerHTML = "SILVER Patron";
        } else if (amt >= 101) {
            slab.innerHTML = "HAPPINESS Patron";
        }
    })
</script>


</html>