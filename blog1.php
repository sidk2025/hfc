<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./static/styles/style.css">
    <title>Happy Folks Carnival</title>
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background color */
            color: #343a40;
            /* Dark text color */
            margin: 0;
            /* font-family: 'Arial', sans-serif; */
            line-height: 1.7;
        }

        .header {
            background-color: var(--bgcolor-dark);
            /* Match the main website */
            color: white;
            padding: 20px;
            text-align: center;
            padding-top: 110px;
        }


        .content-container {
            max-width: 800px;
            /* Set a maximum width for the content */
            margin: 20px auto;
            /* Center the content container */
            padding: 20px;
            background-color: white;
            /* White background for content */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            border-radius: 8px;
            /* Rounded corners */
        }

        .content-container>h2 {
            margin-top: 1rem;
            color: var(--bgcolor-dark);
        }

        .footer {
            text-align: center;
            margin-top: 120px;
            font-size: 14px;
            color: #757575;
            /* Dark gray for footer */
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <header class="header">
        <h1>Happy Folks Carnival</h1>
        <p>Published on September 22, 2024</p>
    </header>

    <div class="content-container">
        <h2>Introduction</h2>
        <p>Happy Folks Club had recently conducted the ‘Happy Folks Summit’ that had brought together ‘young-hearted senior citizens’ from various parts of Bengaluru for a day of learning, interaction, and fun. It took place at St. Joseph’s Boys High School, Museum Road from 10:00 A.M. to 1:30 P.M.</p>

        <h2>Inauguration</h2>
        <p>The senior citizens arrived from their localities in buses arranged by the Club. The registration desk was fascinated when they recorded a whooping registration of 203 senior citizens. The senior citizens were filled with excitement and joy as they entered the auditorium, wondering about the games and sessions they were going to take part in. The Inauguration began with the introduction of the Chief Guest, Mr. Vaibhav Tewari, co-founder of Portea, followed by his illuminating speech.</p>

        <h2>Energizing Dance Activity</h2>
        <p>The event later progressed to the first activity of the day, ‘Physical Wellness’, where the energetic participants had to showcase their dancing and singing skills on stage, and they did an amazing job. It was fabulous to watch one participant sing and the other join, as they made the crowd elevate the ambience and share the same enthusiasm. After the interactive session, the senior citizens were given a ‘Chaai Ki Chuski’ break and were provided with refreshments to keep the energy going for the next activity.</p>

        <h2>Brainstorming Game Session</h2>
        <p>Post refreshments, the second activity commenced, which was a ‘Brainstorming Game’, where the participants were divided into two teams. The teams were engaged in various mental and physical exercises that had them all pumped up. The crowd burst into laughter at several points as the team captains exchanged friendly banter. The winning team was announced, and the team members were awarded goodies for their spirited participation.</p>

        <h2>Insights and Learnings</h2>
        <p>We had a quick feedback session where the senior citizens could share their thoughts about the event. They expressed how they felt energized and enthusiastic and that they wanted more activities like this regularly. It was heartening to watch our seniors feel so youthful and lively, engaging with others, and spreading happiness!</p>

        <h2>Conclusion</h2>
        <p>As the event concluded, there was a palpable buzz of excitement and joy as the participants shared their experiences. The success of the Happy Folks Summit reflected the importance of creating platforms for interaction and engagement for our senior citizens. We look forward to hosting more such events and continuing our mission of uplifting and connecting with our beloved seniors!</p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>