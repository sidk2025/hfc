<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - Happy Folks Club</title>
    <link rel="shortcut icon" type="image/jpg" href="./static/img/logo.jpeg" />
    <link rel="stylesheet" href="./static/styles/intern.css">
    <link rel="stylesheet" href="./static/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="cover" style="padding-top: 210px;">
        <form id="contactForm">
            <div class="intern-form">
                <h2>
                    <span>Join the Club</span>
                </h2>
                <div class="msg-form-container">
                    <input name="name" type="text" required="true" placeholder="Name" class="input" />
                    <input name="dob" type="date" required="true" placeholder="Date of Birth" class="input" />
                    <input name="age" type="text" required="true" placeholder="Age" class="input" />
                    <input name="email" type="text" placeholder="E-mail(Optional)" class="input" />
                    <input name="mobile" type="text" required="true" placeholder="Mobile" class="input" />
                    <input type="text" name="valider" style="width: 0px; height: 0px; padding: 0px; display:none">
                </div>
                <div class="msg-form-container" id="msggg">
                    <textarea name="address" required="true" placeholder="Address" class="input"></textarea>
                </div>
                <div class="agree">
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">I hereby agree to be apply for membership at Happy Folks Club</label>
                </div>
                <div>
                    <input type="submit" name="submit" class="std-btn" id="subbb">
                </div>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
<script src="./static/js/main.js"></script>
<script>
    let form = document.getElementById("contactForm");
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        let data = new FormData(form);

        // Check if the user is on Safari
        var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

        if (isSafari) {
            try {
                let res = await fetch("https://script.google.com/macros/library/d/1_eZp2XIOGFnJI2Irt1pcgxdnPadfRE6xKT9hy8sIHMFy4sqEkpCeJN3p/4", {
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
            fetch("https://script.google.com/macros/library/d/1_eZp2XIOGFnJI2Irt1pcgxdnPadfRE6xKT9hy8sIHMFy4sqEkpCeJN3p/4", {
                    method: "POST",
                    body: data
                })
                .then(res => res.text())
                .then(res => console.log(res))
                .then(() => window.location.href = "./thank-you.php")
                .catch(error => console.error("Error:", error));
        }
    });


    function showUp(val) {
        let suggest = document.getElementById("suggest");
        if (val == "start-new") {
            if (!suggest.classList.contains("active"))
                suggest.classList.add("active")
        } else {
            if (suggest.classList.contains("active"))
                suggest.classList.remove("active")

        }
    }
</script>


</html>