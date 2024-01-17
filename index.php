
<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error() );

}
// echo "success connecting to the the db"
$name = $_POST['name'];
$email = $_POST['email'];
$desc = $_POST['desc'];
$sql = " INSERT INTO `contact`.`contport` ( `name`, `email`, `message`) VALUES ( '$name', '$email', '$desc');";

// echo $sql;

if($con->query($sql) == true){
    // echo "successfully inserted";
    $insert=true;

}else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Fira+Code&family=Kalnia:wght@300;400&family=Lato:ital,wght@0,400;0,700;1,400;1,900&family=Merienda:wght@300&family=Orbitron&family=Oswald&family=Poppins:wght@400;500&family=Roboto:wght@300&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
        
</head>

<body>
    <section class="Section2">
        <div class="nav">
        <h1>My Portfolio</h1>
        </div>

    </section>
    <section id="section1">
        <main>

            <div class="rightSection">
                <!-- <img src="https://www.pngarts.com/files/7/Business-Management-PNG-Photo.png" alt=""> -->
            </div>
            <div class="leftSection">
                Hi, my name is <span class="purpul">Ameen</span>
                <div>and I'm a passionate</div>
                <span id="element"></span>
            </div>
        </main>
        <br>
        <hr style="text-shadow: 2px 2px 4px rgb(21, 255, 0);">
        <br>
    </section>
    <br><br><br>
    <h1 style="text-align: center; font-family: 'Bubblegum Sans', sans-serif;text-shadow: 2px 2px 4px rgb(21, 255, 0);">Welcome Here</h1>
    <p style="text-align: center; font-family: 'Bubblegum Sans', sans-serif; color: aliceblue; font-size: large;">Welcome to my portfolio! I am a passionate web developer with a keen interest in IT. Through my journey in the
        world of technology, I've honed my skills to craft innovative and visually appealing web solutions. My
        dedication to staying abreast of the latest trends and technologies in the IT landscape reflects in the projects
        I undertake. From creating dynamic and responsive websites to implementing robust web applications, I bring a
        creative and problem-solving mindset to every endeavor. Explore my portfolio to witness the fusion of my
        technical expertise and a profound passion for web development. Let's collaborate and bring your digital ideas
        to life!

    </p>


    <div class="img4">
        <img src="https://static.vecteezy.com/system/resources/previews/020/962/986/non_2x/software-engineer-graphic-clipart-design-free-png.png"
            alt="" style="width: 350px; right: 50%;">
        <img src="https://www.pngarts.com/files/7/Business-Management-PNG-Transparent-Image.png" alt=""
            style="width: 350px; right: 50%;">
        <img src="https://png.pngtree.com/png-vector/20220718/ourmid/pngtree-video-conferencing-virtual-meeting-desktop-png-image_5913173.png"
            alt="" style="width: 350px; right: 50%;">
    </div>
    <section id="section2" style="    box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
    background-color: #000;
    width: 871px;
    margin-left: 216px;">
        <div class="txt">
            <h2 style="text-align: center;text-shadow: 2px 2px 4px rgb(21, 255, 0);    color: #ffffff;"> About Us</h2>
            <p>Greetings! I'm M Ameen, a versatile professional with a passion for creating meaningful digital
                experiences.
                With a diverse skill set that spans web design, development, data entry, content writing, article
                creation,
                script writing, and graphic design, I bring a holistic approach to every project I undertake.
            </p>
            <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">💻⌨️Web Design and Development</h3>
            <p>In the dynamic world of web design and development, I thrive on turning ideas into interactive and
                visually
                appealing websites. My expertise encompasses both front-end and back-end development, ensuring seamless
                functionality and an engaging user experience. Whether it's crafting responsive layouts, implementing
                innovative
                features, or optimizing performance, I am committed to delivering websites that leave a lasting
                impression.
            </p>

            <h4>📜 📃 Data Entry and Content Writing</h4>
            <p>Precision meets creativity in my approach to data entry and content writing. I am meticulous in handling
                data
                entry tasks, ensuring accuracy and efficiency in every keystroke. As a content writer, I craft
                compelling
                narratives, combining storytelling with informative content. From blog posts to marketing copy, I tailor
                my
                writing to captivate audiences and deliver the intended message.</p>

            <h4>📝 ✏️ Article and Script Writing</h4>
            <p> With a flair for words, I specialize in crafting articles that resonate with readers. Whether it's
                informative
                pieces, opinionated articles, or thought-provoking essays, I strive to create content that not only
                informs
                but
                also sparks engagement. In the realm of scriptwriting, I bring stories to life through captivating
                dialogue
                and
                well-crafted narratives, whether for videos, presentations, or other media.</p>

            <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">📑🧾Graphic Design</h3>
            <p> Visual communication is at the heart of my graphic design endeavors. From creating eye-catching logos to
                designing marketing materials, I leverage my artistic skills to convey messages effectively. I believe
                in
                the
                power of aesthetics to enhance brand identity and create memorable visual experiences.</p>

            <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">🤔 Why Work With Me</h2>
            <p> Versatility: My broad skill set enables me to handle diverse aspects of a project, ensuring a cohesive
                and
                integrated approach.
                Creativity: I bring a creative touch to every task, injecting originality into designs, content, and
                scripts.</p>
            <br>
            <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">👨‍💻 Attention to Detail</h3>
            <p>Meticulous in my work, I prioritize precision and accuracy, ensuring high-quality
                outcomes.
                Adaptability: I embrace new challenges and technologies, staying current with industry trends and
                innovations.
            </p>
            <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">🎥 Passionate Video Editor with a Creative Edge
            </h3>
            <p> As a dedicated video editor, I bring a blend of technical expertise and artistic flair to every project.
                With a keen eye for detail and a commitment to delivering high-quality content, I thrive in the dynamic
                and
                fast-paced world of video production.</p>
            <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">😎Let's Collaborate:</h3>
            <p> I am always excited about new opportunities and collaborations. Whether you're looking for a web
                designer,
                developer, content creator, or a combination of these skills, I am ready to bring your ideas to life.
                Let's
                embark on a journey to transform concepts into compelling digital realities.

                Feel free to explore my portfolio to get a glimpse of my work, and don't hesitate to reach out if you
                have
                any
                questions or if you'd like to discuss potential projects. Together, let's create something
                extraordinary!
            </p>
        </div>


    </section>

    <section id="section3">
        <hr>

     <h1 style="text-align: center;">Blog</h1>
        <div class="blog">
            <div class="center">
                <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Exploring the Digital Horizon</h3>
                <h5 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Navigating the IT,Landscape with Passion and Proficiency. <span class="opacity">Jan 14, 2024</span>
                </h5>
            </div>

            <div class="justify">
                <img src="https://assets.materialup.com/uploads/932a0a53-ea19-4b44-a194-85bc1c3073fc/work-at-home-programmer-vector-illustration.jpg"
                    alt="" style="width:100%" class="padding">
                <p><strong style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">My interest!</strong> Enthusiastically navigating the IT landscape, I am a tech-savvy
                    individual fueled by a profound interest in Information Technology. With a solid foundation in IT
                    education and hands-on experience, I excel in coding, troubleshooting, and optimizing systems.
                    Adaptable and quick to embrace emerging technologies, I am passionate about contributing to the
                    ever-evolving world of IT. Eager to unravel complexities and tackle challenges head-on, I am
                    committed to continuous learning and staying at the forefront of technological advancements. My goal
                    is to leverage my skills to innovate, problem-solve, and be a driving force in shaping the future of
                    IT.</p>
                <p class="left"><button class="button" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i>
                            Like</b></button></p>

                <hr>

            </div>
        </div>
        </div>


        
        <div class="blog">
            <div class="center">
                <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Exploring in Web Designing: A Journey into the Digital Canvas</h3>
                <h5 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Conclusion: Embarking on a Creative Odyssey <span class="opacity">Jan 14, 2024</span>
                </h5>
            </div>

            <div class="justify">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRj-MQmXUufi5-cK6cTLM3IdQS_t2mlz0dYQI526cisnflnwE1Z"
                    alt="" style="width:100%;" class="padding">
                <p><strong style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">My interest!</strong> Enthusiastically navigating the IT landscape, I am a tech-savvy
                Exploring in web designing is a continual journey of learning, adapting, and pushing creative boundaries. As technology evolves and design trends shift, the web designer's role remains dynamic. Embrace the challenges, stay curious, and let your creativity flourish in the ever-expanding canvas of the digital world.

Embark on your creative odyssey in web designing, and let each project be a chapter in your exploration of the boundless possibilities that this fascinating field has to offer. Happy designing!


                <p class="left"><button class="button" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i>
                            Like</b></button></p>

                <hr>

            </div>
        </div>
        </div>


        
        <div class="blog">
            <div class="center">
                <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Unveiling the Artistry: A Dive into Graphic Designing</h3>
                <h5 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Conclusion: Nurturing the Creative Muse<span class="opacity">Jan 14, 2024</span>
                </h5>
            </div>

            <div class="justify">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvim63-1v5DaXmvx6ASr96Jt6MYEWBjQvX6VFJNULOcsVHcpl2"
                    alt="" style="width:100%" class="padding">
                <p><strong style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">My interest!</strong> Graphic designing is more than a profession; it's a form of artistic expression. Each project is an opportunity to unleash your creativity, experiment with ideas, and craft visual stories that leave a lasting impression. As we delve into the nuances of graphic design, let's celebrate the artistry that breathes life into the visual world around us.

So, fellow creatives, let's continue to explore, innovate, and nurture our creative muse in the ever-evolving landscape of graphic design.
                <p class="left"><button class="button" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i>
                            Like</b></button></p>

                <hr>

            </div>
        </div>
        </div>
        <hr>

    </section>



    <section id="portfolio">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Portfolio</h2>

      
        <div class="project">
            <img src="https://png.pngtree.com/png-vector/20220723/ourmid/pngtree-software-development-and-programming-code-on-computer-vector-illustration-for-technology-png-image_6046818.png"
                alt="Project Image 2">
             <div class="project-details">
                <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   "><a href="https://docs.google.com/document/d/1R6zd-2sSIbR2wxNx1Yc9t_L4Wz7Ee0fxnv593NnjJ9M/edit?usp=sharing" target="_blank">Blog on Food</a></h3>
                <p><strong>Description:</strong> Embark on a gastronomic journey with our blog,
                 'The Culinary Symphony: A Brief Exploration of Food.' Delve into the world of flavors, 
                 where each dish is a masterpiece crafted with precision and creativity. Discover the cultural
                  tapestry woven into every meal, celebrating the rich traditions and diversity of global cuisines
                  . Join us in savoring the joy of sharing, as food becomes a communal experience that strengthens
                   bonds and creates lasting memories. Explore the concept of mindful eating, reminding us to appr
                   eciate the sensory delights of each bite. Whether you're a seasoned chef or a culinary enthusia
                   st, find inspiration for your next culinary adventure with tips on home cooking and embracing c
                   ulinary creativity. Celebrate the artistry, cultural richness, and joy that food brings to our
                    lives.</p>
            </div>
        </div>
        <div class="project">
            <img src="https://png.pngtree.com/png-vector/20221021/ourmid/pngtree-developer-writing-code-for-website-png-image_6334022.png">
            <div class="project-details">
                <h3 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   "><a href="192.168.0.103/i.html" id="linkToSection1">TIC TAC TOE game</a></h3>
                <p><strong>Description:</strong>Step into the classic world of strategy and fun with our Tic Tac Toe web application. Experience the timeless game in a digital format, where Xs and Os compete in a battle of wits. Whether you're a seasoned player or new to the game, our user-friendly platform offers an engaging and intuitive interface for endless rounds of Tic Tac Toe. Challenge friends, family, or test your skills against the computer. With a sleek design and seamless gameplay, our Tic Tac Toe web app brings the nostalgic charm of this beloved game to your fingertips. Enjoy the thrill of strategic moves, tactical thinking, and friendly competition with our digital rendition of Tic Tac Toe. Let the games begin!</div>
        </div>

        
    </section>

    <section id="skills">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Skills</h2>
        <p>I'm always interested in connecting with like-minded professionals and exploring new opportunities. Don't
            hesitate to connect with me on social media or drop me an email. Let's create something amazing together!
        </p>
        <ul class="li">
            <li><strong>Design:</strong> websites design, graphic design</li>
            <li><strong>Development:</strong>Realtime Chatapplication, </li>
            <li><strong>Tools:</strong> VScode, InteliJ, Replit</li>
        </ul>
    </section>



    <section id="testimonials">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Testimonials</h2>
        <blockquote>
            <p>Working with me was a fantastic experience. Their attention to detail and commitment to quality
                really set them apart.</p>
        </blockquote>
    </section>

    <section id="contact">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Contact</h2>
        <p>I'm currently open to new opportunities and collaborations. If you're interested in working together or have
            any inquiries, feel free to reach out:</p>
        <ul>
            <li><strong>Email:</strong> mameentilefixer@gmail.com</li>
            <li><strong>LinkedIn:</strong> <a class="1" href="[Your LinkedIn Profile]">Your LinkedIn Profile</a></li>
            <li><strong>GitHub:</strong> <a class="2" href="[Your GitHub Profile]">Your GitHub Profile</a></li>
            <li><strong>Twitter:</strong> <a class="3" href="https://twitter.com/YourTwitterHandle"
                    target="_blank">@YourTwitterHandle</a></li>
        </ul>
    </section>

    <section id="connect">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Let's Connect</h2>
        <p>I'm always interested in connecting with like-minded professionals and exploring new opportunities. Don't
            hesitate to connect with me on social media or drop me an email. Let's create something amazing together!
        </p>
    </section>

    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center" style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">CONTACT</h2>
        <p class="w3-opacity w3-center"><i>Client? Drop a note!</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Lahore, Pakistan<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: +92 3222697327<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: mameentilefixer@gmail.com<br>
            </div>
            <div class="w3-col m6">
    <form action="index.php"  method="post">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" id="name" type="text" name="name" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" id="email" name="email" type="email" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border"  id="desc" name="desc"  placeholder="Message" required name="Message">
                    <button class="w3-button  w3-section w3-right" style="background-color:grey;" type="submit">SEND</button>
                </form>
                </div>
        </div>
    </div>
    <section id="contact">
        <h2 style="    color: #ffffff;text-shadow: 2px 2px 4px rgb(21, 255, 0);   ">Contact</h2>
        <p>I'm always eager to connect with new people and discuss exciting opportunities. Whether you have a project in
            mind, want to collaborate, or just want to say hello, feel free to drop me a line. I look forward to hearing
            from you!</p>
        <p>You can reach out to me via email at <a href="mailto:your.email@example.com">Mameentilefixer@gmail.com</a> or
            connect with me on <a href="[Your LinkedIn URL]" target="_blank">LinkedIn</a>, <a href="[Your GitHub URL]"
                target="_blank">GitHub</a>, and <a href="[Your Twitter URL]" target="_blank">Twitter</a>.</p>
    </section>
    <div class="img3">
        <img src="https://clipart-library.com/2023/computer-programmers-colocation-ibm-software-engineering-programmer-software-developer-software-development-collaboration-classroom-location.png"
            alt="">
    </div>

    <footer>
        <p>&copy; 2024 Amin</div>. All rights reserved.</p>

        <div class="social-icons">
            <a href="[Your LinkedIn URL]" target="_blank">LinkedIn</a>
            <a href="[Your GitHub URL]" target="_blank">GitHub</a>
            <a href="[Your Twitter URL]" target="_blank">Twitter</a>
            <!-- Add more social media links as needed -->
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            var typed = new Typed('#element', {
                strings: ['Web Developer', 'Graphic Designer', 'Web designer', 'Video Editor','Data Entry Expert', 'Content Writer'],
                typeSpeed: 80,
                loop: true,
            });
        });
    </script>

    <script>
        function submitForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            var responseMessage = document.getElementById("responseMessage");
            responseMessage.innerHTML = `Thank you, ${name}! Your message has been received.`;
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    targetElement.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });


        function likeFunction(x) {
            x.style.fontWeight = "bold";
            x.innerHTML = "✓ Liked";
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>

</html>
</body>
</html>