<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputText = trim($_POST['text']);
    $sortOrder = $_POST['sort'];
    $limit = intval($_POST['limit']);

    $stopWords = ['the', 'and', 'in'];

    $words = preg_split('/\W+/', strtolower($inputText));

    $filteredWords = array_diff($words, $stopWords);

    $wordFrequency = array_count_values($filteredWords);

    if ($sortOrder == 'desc') {
        arsort($wordFrequency);
    } else {
        asort($wordFrequency);
    }

    $wordFrequency = array_slice($wordFrequency, 0, $limit);

    echo "<div class='result'>";
    echo "<h2>Word Frequency Result</h2>";
    echo "<table class='result-table'>";
    echo "<tr><th>Word</th><th>Frequency</th></tr>";

    foreach ($wordFrequency as $word => $frequency) {
        echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . $frequency . "</td></tr>";
    }

    echo "</table>";
    echo "</div>";
}
?>
