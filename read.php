<?php
$file = fopen("data/data.txt", "r");
if ($file) {
    $result = "";
    while (($line = fgets($file)) !== false) {
        $result .= $line . "<br>";
    }
    fclose($file);
} else {
    echo "ファイルを開けませんでした.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果表示</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>ステータス表示</h1>
    <canvas id="radarChart" width="400" height="400"></canvas>
</body>
<script>
let result = `<?php echo $result; ?>`;
console.log(result);

let resultArray = result.split('<br>').filter(line => line.trim() !== '');
let resultObjects = resultArray.map(line => {
    let [date, name, email, score1, score2, score3, score4, score5] = line.split(',');
    return {
        date: date,
        name: name,
        email: email,
        scores: {
            speed: parseInt(score1, 10),
            power: parseInt(score2, 10),
            technique: parseInt(score3, 10),
            intelligence: parseInt(score4, 10),
            charm: parseInt(score5, 10)
        }
    };
});

// オブジェクトをコンソールに出力
console.log(resultObjects);

// レーダーチャートのデータを準備
let labels = ['スピード', 'パワー', 'テクニック', 'インテリジェンス', 'チャーム'];
let datasets = resultObjects.map(obj => ({
    label: obj.name,
    data: [
        obj.scores.speed,
        obj.scores.power,
        obj.scores.technique,
        obj.scores.intelligence,
        obj.scores.charm
    ],
    fill: true,
    backgroundColor: 'rgba(10, 162, 235, 0.2)',
    borderColor: 'rgba(54, 162, 235, 1)',
    pointBackgroundColor: 'rgba(54, 162, 235, 1)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgba(54, 162, 235, 1)'
}));

console.log({datasets});

// レーダーチャートを描画
let ctx = document.getElementById('radarChart').getContext('2d');
let radarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: labels,
        datasets: datasets
    },
    options: {
        responsive: true,
        scale: {
            ticks: {
                beginAtZero: true,
                max: 100 // スコアの最大値に応じて調整
            }
        }
    }
});


</script>
</html>