<?php
function generateUsernames() {
    $realNames = ["Paul", "Robert", "Felix", "Nathaniel", "Patricia", "Roberta", "Joshua", "Liam", "Oliver", "Lester", "Jackson", "Harriet", "InPraiseOfShadows", "SonicSegaGamer", "Mega Man", "Jillian", "Alice", "Bob", "Charlie", "David", "Eve", "Faythe", "Grace", "Heidi", "Richard", "Heather", "Jennifer", "Salad Fingers", "Alice", "Bob", "Charlie", "Diana", "Edward"];
    $mediaProperties = ["Thomas the Tank Engine", "FTW", "FTL", "Edd, Ed and Eddy", "Invader Zim", "Hanna Montana", "iCarly", "Caillou", "Sonic the Hedgehog", "Shadow the Hedgehog", "Grounded", "My Little Pony", "Autistic", "Godzilla", "Transgender", "Dragon Ball Z", "Trainboy", "Feet", "User", "Marvel", "Star Wars", "Harry Potter", "LOTR", "Pokemon", "Naruto", "Minecraft", "Fortnite", "Disney", "Nintendo", "PS5", "PS4", "Nintendo Switch", "SNES", "NES", "Game Boy", "Game Boy Advance", "Anime", "Game Boy DS", "Game Boy 3DS", "Game Gear", "PSP", "PC", "Console", "Barney", "Digimon", "Origami Kingdom", "Child Pornograpy", "Furry", "Canadian", "American", "Suicidal", "Child Grooming", "Celestia", "Rape", "Zoophile", "Pony", "Star Wars", "Harry Potter", "Marvel", "Disney", "Pixar", "Child Harm", "Anal", "Bluey", "Blues Clues", "Double Penetration", "Bukkake", "Ass to Mouth", "Pedophilia", "Doomer", "Batman", "Blood Cancer"];
    $years = range(1990, 2023);
    $usernames = [];

    for ($i = 0; $i < 100; $i++) {
        $realName = $realNames[array_rand($realNames)];
        $media1 = $mediaProperties[array_rand($mediaProperties)];
        $media2 = $mediaProperties[array_rand($mediaProperties)];
        $media3 = $mediaProperties[array_rand($mediaProperties)];
        $year = $years[array_rand($years)];
        
        // Ensure all media properties are different
        while ($media1 == $media2) {
            $media2 = $mediaProperties[array_rand($mediaProperties)];
        }
        while ($media2 == $media3 || $media1 == $media3) {
            $media3 = $mediaProperties[array_rand($mediaProperties)];
        }

        $username = "{$realName} {$media1} {$media2} {$media3} Fan {$year}";
        $usernames[] = $username;
    }

    return $usernames;
}

$usernames = generateUsernames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Usernames</title>
</head>
<body>
    <h1>Generated Usernames</h1>
    <ul>
        <?php foreach ($usernames as $username): ?>
            <li><?php echo htmlspecialchars($username); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index3.html">Generate Again</a>
</body>
</html>

