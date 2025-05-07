<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patronize Now - Happy Folks Club</title>
    <link rel="shortcut icon" type="image/jpg" href="./static/img/logo.jpeg" />
    <link rel="stylesheet" href="./static/styles/intern.css">
    <link rel="stylesheet" href="./static/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="cover">
        <form id="contactForm">
            <div class="intern-form">
                <h2>
                    <span>Patronize Now!</span>
                </h2>
                <div class="msg-form-container">
                    <input name="name" type="text" required="true" placeholder="Name" class="input" />
                    <input name="email" type="text" placeholder="E-mail" class="input" />
                    <input name="phone" type="tel" required="true" placeholder="Mobile" class="input" />
                    <label for="amt" id="amtt">
                        <strong>
                            Amount:
                        </strong>
                    </label>
                    <input name="amt" id="amt" type="text" required="true" placeholder="Amt " class="input" />
                </div>
                <div>
                    <input type="submit" name="submit" class="std-btn" id="subbb">
                </div>
                <p class="patron">
                    Thank you for showing interest in patronage. You will receive an email with payment details soon.
                </p>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
<script src="./static/js/main.js"></script>
<script>
    amt = localStorage.getItem("amt")
    console.log(amt)
    document.getElementById("amt").value = amt

    let form = document.getElementById("contactForm");
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        let data = new FormData(form);

        // Check if the user is on Safari
        var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

        if (isSafari) {
            try {
                let res = await fetch("https://script.google.com/macros/s/AKfycby-HijMBEXyk-FXXw1eXV--G1xxhloO0VV2LXvLcoIN9B4fuNMDcHC8Pw9lcQa-NlIr/exec", {
                    method: "POST",
                    body: data
                });
                let responseText = await res.text();
                console.log(responseText);
                window.location.href = "./thank-you.php";
            } catch (error) {
                console.error("Error:", error);
            }
        } else {
            fetch("https://script.google.com/macros/s/AKfycby-HijMBEXyk-FXXw1eXV--G1xxhloO0VV2LXvLcoIN9B4fuNMDcHC8Pw9lcQa-NlIr/exec", {
                    method: "POST",
                    body: data
                })
                .then(res => res.text())
                .then(res => console.log(res))
                .then(() => window.location.href = "./thank-you.php")
                .catch(error => console.error("Error:", error));
        }
    });
</script>


</html>