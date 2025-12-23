<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$news_data = [
    'education' => [
        ["title"=>"New Online University Courses Launched", "desc"=>"Several new online courses are now available for students worldwide."],
        ["title"=>"Education Reform in 2025", "desc"=>"Governments introduce new standards to improve quality of education."],
        ["title"=>"Scholarship Programs Open", "desc"=>"Various scholarships are now open for international students."],
        ["title"=>"Virtual Classrooms Expand Globally", "desc"=>"Schools are increasingly adopting virtual classrooms for remote learning."],
        ["title"=>"Teacher Training Programs Updated", "desc"=>"New programs launched to improve teacher skills."],
        ["title"=>"Student Exchange Opportunities", "desc"=>"Universities expand student exchange programs internationally."]
    ],
    'technology' => [
        ["title"=>"AI Breakthrough in 2025", "desc"=>"Researchers develop an AI that can compose music autonomously."],
        ["title"=>"New Smartphone Released", "desc"=>"A major company releases a cutting-edge smartphone."],
        ["title"=>"Cybersecurity Updates", "desc"=>"Latest cybersecurity measures are now being implemented worldwide."],
        ["title"=>"Quantum Computing Advances", "desc"=>"Quantum computing shows significant progress in problem solving."],
        ["title"=>"New Social Media Platform Launch", "desc"=>"A new social media platform is attracting millions of users."],
        ["title"=>"Virtual Reality in Education", "desc"=>"VR technologies are increasingly used in learning environments."]
    ],
    'health' => [
        ["title"=>"Healthy Eating Tips", "desc"=>"Nutritionists share advice for a balanced diet."],
        ["title"=>"New Vaccine Developed", "desc"=>"A new vaccine is now available for seasonal diseases."],
        ["title"=>"Mental Health Awareness", "desc"=>"Campaigns launched to improve mental health awareness."],
        ["title"=>"Fitness Apps Trending", "desc"=>"More people are using apps to track their workouts."],
        ["title"=>"Importance of Sleep", "desc"=>"Experts explain how sleep affects overall health."],
        ["title"=>"Yoga for Stress Relief", "desc"=>"Yoga is increasingly recommended for mental well-being."]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">
<header class="bg-green-600 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <h1 class="text-xl font-bold">NewsPortal</h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="index.php?page=home" class="hover:text-gray-200">Home</a></li>
                <li><a href="index.php?page=education" class="hover:text-gray-200">Education</a></li>
                <li><a href="index.php?page=technology" class="hover:text-gray-200">Technology</a></li>
                <li><a href="index.php?page=health" class="hover:text-gray-200">Health</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-8 px-4 flex-grow">

<?php
if ($page == 'home') {
    echo '
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <div class="ml-6 md:ml-12">
            <h2 class="text-5xl md:text-5xl font-extrabold text-green-700 leading-tight mb-6">
                STAY INFORMED <br> STAY AHEAD
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                Your trusted source for breaking news <br>
                in education,technology and health 
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-green-100 p-4 text-sm text-gray-700">
                    New Online University Courses Launched
                </div>

                <div class="bg-green-600 text-white p-4 text-sm font-medium">
                    Researchers develop an AI that can compose music autonomously.
                </div>

                <div class="bg-green-100 p-4 text-sm text-gray-700">
                    Nutritionists share advice for a balanced diet.
                </div>
            </div>
        </div>
        <div class="flex justify-center -mt-8">
            <img src="images/2430120-01.png"
                 alt="Website Preview"
                 class="w-full max-w-xl md:max-w-3xl transform scale-105">
        </div>
    </div>
    ';
}
elseif (isset($news_data[$page])) {
    echo "<h2 class='text-2xl font-bold mb-4 text-gray-800'>". ucfirst($page) ." News</h2>";
    
    foreach ($news_data[$page] as $item) {
        echo "<div class='mb-6 bg-white p-4 shadow'>";
        echo "<h2 class='text-xl font-bold text-gray-800 mb-2'>{$item['title']}</h2>";
        echo "<p class='text-gray-700'>{$item['desc']}</p>";
        echo "</div>";
    }
}
else {
    echo "<p class='text-gray-700'>Page not found.</p>";
}
?>

</main>

<footer class="bg-gray-800 text-white p-4 text-center mt-12">
    &copy; 2025 NewsPortal. All rights reserved.
</footer>

</body>
</html>
