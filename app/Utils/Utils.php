<?php 

namespace App\Utils;

class Utils {
    public static function convertSkill($skill) {
        switch ($skill) {
            case "html": {
                return "HTML";
                break;
            }
            case "css": {
                return "CSS";
                break;
            }
            case "js": {
                return "JS";
                break;
            }
            case "nodejs": {
                return "NodeJS";
                break;
            }
            case "git": {
                return "Git";
                break;
            }
            case "laravel": {
                return "Laravel";
                break;
            }
            case "php": {
                return "PHP";
                break;
            }
            case "expressjs": {
                return "ExpressJS";
                break;
            }

            case "bootstrap": {
                return "Bootstrap";
                break;
            }

            case "tailwind": {
                return "Tailwind";
                break;
            }

            case "nginx": {
                return "Nginx";
                break;
            }
        }
    }

    public static function getProjects() {
        return [
            [
                "name" => "Beggin",
                "description" => "Garry's Mod server pushed on the American roleplay, server totally made by our hands.",
                "image" => "beggin.png",
                "skills" => ["html", "css", "bootstrap", "js", "laravel", "nodejs", "git", "expressjs"],
                "project" => [
                    "gradient" => "#4F33B8,#F7C8D6",
                    "description" => "
                    
                    <p class='mb-5'>Welcome to the innovative world of Beggin, a Garry's Mod game server that pushes the boundaries of the gaming experience. At Beggin, we're proud to offer a unique, fully customized server, where every detail has been carefully designed by our passionate team.
                    </p>

                    <p class='mb-5'>Our Garry's Mod server stands out for its advanced web panel, powerful APIs, and solid infrastructure. Thanks to our intuitive web panel, players can seamlessly manage their gaming experience, accessing a multitude of features and controls to customize their unique Beggin experience.</p>
                  
                    <p class='mb-5'>But what really sets us apart is our absolute commitment to creating all content with our own hands. Every aspect of Beggin, from server features to innovative game modes, is the fruit of our team's expertise and creativity. We believe in the value of originality and quality, which is why we strive to provide an unrivalled gaming experience, offering exclusive content and unique concepts.</p>
                  
                    <p class='mb-5'>At Beggin, we're constantly on the lookout for new ways to enrich the player experience. We're open to innovative ideas and committed to keeping our server up to date with the latest trends and technologies. Our goal is to create a dynamic, immersive environment where players can connect, interact, and be entertained in a captivating Garry's Mod universe.</p>
                  
                    <p>Join us now on Beggin and discover the difference of a Garry's Mod server made by passionate people. Immerse yourself in our innovative world, explore unique features, and let yourself be carried away by a tailor-made gaming experience. We look forward to welcoming you and sharing our passion for Garry's Mod with you.</p>",
                    "links" => [
                        "project" => "https://beggin.fr",
                    ]
                ]
            ],
            [
                "slug" => "lost-in-the-shell",
                "name" => "Lost In The Shell",
                "description" => "Hacking trainer for the 42Perpignan school., Association of the school",
                "image" => "lis.png",
                "skills" => ["html", "css", "bootstrap", "js", "laravel", "git", "php"],
                "project" => [
                    "gradient" => "#304352,#d7d2cc",
                    "description" => "
                    
                    <p class='mb-5'>Lost in The Shell is an esteemed student association based in 42 Perpignan, dedicated to the exciting world of ethical hacking and Capture The Flag (CTF) competitions. We take pride in pushing the boundaries of cybersecurity knowledge and fostering a vibrant community of aspiring hackers.
                    </p>

                    <p class='mb-5'>We are thrilled to present our latest endeavor - a cutting-edge web project designed to create a customized CTF experience during the renowned Star Wars Day at our school. This immersive online platform combines the thrill of hacking challenges with the beloved Star Wars universe, providing participants with a unique and engaging cybersecurity adventure.
                    </p>

                    <p class='mb-5'>Our team of talented students has meticulously crafted a series of mind-bending challenges, puzzles, and scenarios that will  put participants' hacking skills to the test. With a diverse range of difficulty levels, participants of all experience levels can dive into the world of cybersecurity and embark on an exhilarating journey.
                    </p>

                    <p class='mb-5'>What sets our project apart is the emphasis we place on innovation and interactivity. Through the intuitive web interface, participants can navigate through a visually stunning environment, interact with virtual characters, and uncover hidden secrets. Each challenge has been thoughtfully designed to incorporate Star Wars elements, creating an immersive and captivating experience for all participants.
                    </p>

                    <p class='mb-5'>As an association driven by a passion for cybersecurity, we firmly believe in the importance of hands-on learning. By participating in our Star Wars-themed CTF, students had the opportunity to apply their knowledge in a practical setting, sharpen their problem-solving skills, and gain invaluable experience in a safe and controlled environment.
                    </p>

                    <p class='mb-5'>We welcome participants from all backgrounds and skill levels, as our project is designed to cater to both beginners and advanced cybersecurity enthusiasts. Collaborate with like-minded individuals, expand your network, and embrace the spirit of friendly competition as you journey through the galaxy of hacking challenges.
                    </p>",
                    "links" => [
                        "github" => "https://github.com/Lartaxx/42_LIS_organization"
                    ]
                ]
            ],
            [
                "name" => "Convertway",
                "description" => "Project of currency conversions, complete vision of these conversions etc.",
                "image" => "convertway.png",
                "skills" => ["html", "css", "js", "laravel", "git"],
                "project" => [
                    "gradient" => "#B0ADB9,#F8B500",
                    "description" => "
                    <p class='mb-5'>Welcome to Convertway, the groundbreaking currency conversion project that aims to simplify and streamline the process of exchanging currencies. Our innovative platform offers a range of powerful features to enhance your currency conversion experience, making it easier than ever to manage your transactions effectively.
                    </p>

                    <p class='mb-5'>Convertway provides secure user authentication, allowing you to create an account and log in with confidence. Our user management system ensures the privacy and safety of your personal information. Forgot your password? No worries! We have a convenient password reset functionality to help you regain access to your account.
                    </p>

                    <p class='mb-5'>With Convertway, calculating prices for conversions is a breeze. Our advanced algorithm automatically factors in taxes and the selected payment method, providing you with accurate and transparent pricing.
                    </p>

                    <p class='mb-5'>Track your orders effortlessly with our intuitive order management system. You can monitor the status of your conversions and make modifications as needed, giving you full control over your transactions.
                    </p>

                    <p class='mb-5'>Account security is a top priority at Convertway. Our platform allows users to easily update their passwords, ensuring their accounts remain protected at all times.
                    </p>

                    <p class='mb-5'>Stay informed with our integrated notification system. Receive real-time alerts for order confirmations, updates, and important announcements, keeping you in the loop every step of the way.
                    </p>

                    <p class='mb-5'>We believe in transparency, which is why Convertway offers live order progress tracking. Monitor the status and progress of your conversions in real-time, providing you with peace of mind and a clear understanding of each stage of the process.
                    </p>

                    <p class='mb-5'>Convertway is dedicated to providing a seamless and efficient currency conversion experience. Our user-centric approach, coupled with cutting-edge technology, ensures that your transactions are handled with utmost precision and convenience.
                    </p>
                    
                    <p class='mb-5'Whether you're a frequent traveler, a global business owner, or simply someone in need of currency conversion services, Convertway is here to simplify your financial transactions.
                    </p>",
                    "links" => [
                        "github" => "https://github.com/Lartaxx/convertway",
                    ]   
                ]
            ],
            [
                "name" => "Oveo Statistics",
                "slug" => "oveo-statistics",
                "description" => "Statistics of the Oveo server, a server on the game Garry's Mod.",
                "image" => "oveo.png",
                "skills" => ["html", "css", "tailwind", "js", "laravel", "git", "nodejs", "expressjs"],
                "project" => [
                    "gradient" => "#41B9FD,#224FEA",
                    "description" => "
                    <p class='mb-5'>Are you ready to dive deep into the world of statistics and uncover hidden trends and patterns within the Garry's Mod Oveo Roleplay server? Look no further! Oveo Statistics is here to revolutionize your understanding of player behavior, server dynamics, and overall performance.
                    </p>

                    <p class='mb-5'>Oveo Statistics serves as a comprehensive panel of complex statistics specifically designed for Garry's Mod Oveo Roleplay, enabling to gain invaluable insights into various aspects of gameplay. With this powerful tool at your fingertips, you can access a wealth of data, including player demographics, average playtime, and much more.
                    </p>

                    <p class='mb-5'>But that's not all! Oveo Statistics goes beyond the borders of the Oveo Roleplay server, providing you with the ability to compare and contrast data with other competing servers. By analyzing player counts, average playtime, and other metrics across multiple servers, you can gain a broader understanding of the Garry's Mod roleplaying community as a whole.
                    </p>",
                    "links" => [
                        "project" => "https://oveo-rp.fr/"
                    ]
                ]
            ],
            [
                "name" => "CCAS Software",
                "slug" => "ccas-software",
                "description" => "Software for the CCAS of any city, to manage the bus, the workshops, the heat wave etc.",
                "image" => "ccas.jpg",
                "skills" => ["html", "css", "js", "laravel", "git", "php", "nginx"],
                "project" => [
                    "gradient" => "#0077B5, #00BFFF",
                    "description" => "
                    <p class='mb-2'>Our state-of-the-art CCAS Management Software goes beyond mere operational streamlining—it's about optimizing every facet of your services. Dive into the specialized modules tailor-made for enhancing your community service deliverables:</p>

                    <h3 class='mb-2'>1. BUS Module: Personalized and Efficient Transit Management</h3>
                    <ul>
                        <li class='mb-2'><strong>Customizable Routes:</strong> Adapt each route according to specific requirements, be it for regular commutes or one-off events, ensuring every community member's transit needs are met.</li>
                        <li class='mb-2'><strong>Full-scale Management:</strong> Oversee the entirety of the bus service operations—from scheduling to on-the-go route modifications, ensuring services remain timely and reliable.</li>
                        <li class='mb-2'><strong>SMS Alerts:</strong> Automatically send out SMS notifications for any route changes, ensuring passengers are always kept in the loop.</li>
                    </ul>
                    
                    <h3 class='mb-2'>2. Plan Canicule Module: Prioritizing the Well-being of the Vulnerable</h3>
                    <ul>
                        <li class='mb-2'><strong>Manage Vulnerable Demographics:</strong> Keep a thorough record of community members at risk during environmental extremities, especially during heatwaves.</li>
                        <li class='mb-2'><strong>SMS Alerts:</strong> Deploy automated SMS warnings and guidelines during adverse conditions, ensuring every at-risk individual stays safe and well-informed.</li>
                    </ul>
                    
                    <h3 class='mb-2'>3. Ateliers Module: Seamless Workshop Administration</h3>
                    <ul>
                        <li class='mb-2'><strong>Workshop Directory:</strong> Manage diverse workshops, be it recreational or educational, with a comprehensive administrative panel.</li>
                        <li class='mb-2'><strong>Registration Simplified:</strong> Allow community members to register for workshops seamlessly, keeping a transparent record of participants for every session.</li>
                        <li class='mb-2'><strong>SMS Notifications:</strong> Employ the integrated SMS system to relay important updates, reminders, or last-minute changes about workshops, ensuring every participant stays updated.</li>
                    </ul>
                    
                    <p>Empower your social services with our CCAS Management Software—a blend of modern technology, user-centric design, and community-focused modules.</p>
                    ",
                    "links" => [
                        "more_informations" => "mailto:contact@intersoft.fr"
                    ]
                ]
            ]
        ];
    }

    public static function getProject($project) {
        $projects = self::getProjects();
        foreach ($projects as $p) {
            if (strtolower($p["name"]) === $project && !isset($p["slug"])) {
                return $p;
            }
            else if (isset($p["slug"]) && strtolower($p["slug"]) === $project) {
                return $p;
            }
        }
        return null;
    }
}