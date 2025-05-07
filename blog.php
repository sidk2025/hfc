<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Happy Folks Club Blog</title>
    <link rel="shortcut icon" type="image/jpg" href="./static/img/logo.jpeg" />
    <link rel="stylesheet" href="./static/styles/about.css">
    <link rel="stylesheet" href="./static/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <title>Happy Folks Club Blog</title>
    <style>
        /* General styles for the blog */
        body {
            background-color: #f8f9fa;
            /* Light background color */
            color: #343a40;
            /* Dark text color */
            margin: 0;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        .header {
            background-color: var(--bgcolor-dark);
            /* Match the main website */
            color: white;
            padding: 20px;
            text-align: center;
            padding-top: 110px;
        }

        .header>h1 {
            font-family: 'Bugaki';
        }

        .blog-container {
            max-width: 800px;
            /* Set a maximum width for the blog */
            margin: 20px auto;
            /* Center the blog container */
            padding: 20px;
            background-color: var(--bgcolor);
            /* White background for blog posts */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            border-radius: 8px;
            /* Rounded corners */
        }

        .blog-post {
            margin-bottom: 40px;
            /* Spacing between posts */
            padding: 20px;
            /* Padding inside each post */
            border: 1px solid #e0e0e0;
            /* Light border around each post */
            border-radius: 5px;
            /* Rounded corners */
            background-color: white;
        }

        .post-title {
            font-size: 28px;
            /* Title font size */
            color: var(--bgcolor-dark);
            /* Greenish color for post titles */
            margin-bottom: 10px;
            /* Space below the title */
        }

        .post-meta {
            font-size: 14px;
            /* Smaller font for post metadata */
            color: #757575;
            /* Dark gray color for metadata */
            margin-bottom: 15px;
            /* Space below the metadata */
        }

        .post-content {
            font-size: 16px;
            /* Main content font size */
            line-height: 1.5;
            /* Line height for better readability */
            color: #424242;
            /* Text color */
        }

        .btn {
            background-color: var(--bgcolor-dark);
            border: none;
            border-radius: 5px;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #729E3A;
        }

        .footer {
            text-align: center;
            margin-top: 120px;
            font-size: 14px;
            color: #757575;
            /* Dark gray for footer */
        }
    </style>
    <br>
    <header class="header">
        <h1>Happy Folks Club Blog</h1>
        <p>Welcome to our stories and updates!</p>
    </header>

    <div class="blog-container">
        <article class="blog-post">
            <h2 class="post-title">Happy Folks Graduation</h2>
            <p class="post-meta">Published on August 4, 2024</p>
            <div class="post-content">
                <p>Happy Folks Club had conducted its very own ‘Graduation Ceremony’ for the young-hearted senior citizens on the 4th of August, 2024 at ISBR Business School. Our beloved graduates were celebrated for their successful and memorable Swatantra journey.</p>
                <p>The ceremony started off with a heart-warming ‘welcome speech’ by Harshita Bhansali and Siddharth Tandle, congratulating the graduating batch for their achievements and presenting the flow of events to the gathering...</p>
                <a href="blog2.php" class="btn">Read More</a>
            </div>
        </article>

        <article class="blog-post">
            <h2 class="post-title">Happy Folks Carnival</h2>
            <p class="post-meta">Published on September 22, 2024</p>
            <div class="post-content">
                <p>Happy Folks Club had recently conducted the ‘Happy Folks Summit’ that had brought together ‘young-hearted senior citizens’ from various parts of Bengaluru for a day of learning, interaction and fun...</p>
                <a href="blog1.php" class="btn">Read More</a>
            </div>
        </article>
    </div>

    <?php include 'footer.php'; ?>
</body>
<script src="./static/js/main.js"></script>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const aboutSection = document.querySelector('.about');
        const abtTxt = document.querySelector('.abt-txt');
        const sideImg = document.querySelector('.side-img');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    abtTxt.classList.add('slide-in-left');
                    sideImg.classList.add('slide-in-right');
                    observer.unobserve(aboutSection); // Unobserve after animation starts to prevent re-triggering
                }
            });
        }, {
            threshold: 0.1
        });

        observer.observe(aboutSection);
    });
</script>

</html>