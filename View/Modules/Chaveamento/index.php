<?php
$round2 = false;
$final = false;
$winner = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['round1'])) {
        // Primeiro round: Captura os vencedores dos primeiros confrontos
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        
        $team3 = $_POST['team3'];
        $team4 = $_POST['team4'];
        $score3 = $_POST['score3'];
        $score4 = $_POST['score4'];

        // Decidindo vencedores do round 1
        $winner1 = ($score1 > $score2) ? $team1 : $team2;
        $winner2 = ($score3 > $score4) ? $team3 : $team4;
        $round2 = true;
    } elseif (isset($_POST['round2'])) {
        // Segundo round: Captura os vencedores do segundo confronto
        $winner1 = $_POST['winner1'];
        $winner2 = $_POST['winner2'];
        $score5 = $_POST['score5'];
        $score6 = $_POST['score6'];

        // Decidindo vencedor do final
        $finalWinner = ($score5 > $score6) ? $winner1 : $winner2;
        $final = true;
        $winner = $finalWinner;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneio Simples</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #260e69, #260e69);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
            color: white;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: white;
        }
        form {
            width: 80%;
            max-width: 700px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .matchup {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .team, .score {
            width: 45%;
        }
        .team input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            text-align: center;
        }
        .score input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #fff;
            border-radius: 10px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        button {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background: #
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background: #6A0DAD;
        }
    </style>
</head>
<body>
    <h1>Chaveamento</h1>
    <form method="post">
        <!-- Primeiro round -->
        <?php if (!$round2 && !$final): ?>
        <div class="matchup">
            <div class="team">
                <input type="text" name="team1" placeholder="Time 1" required>
            </div>
            <div class="score">
                <input type="number" name="score1" placeholder="Placar" required>
            </div>
        </div>
        <div class="matchup">
            <div class="team">
                <input type="text" name="team2" placeholder="Time 2" required>
            </div>
            <div class="score">
                <input type="number" name="score2" placeholder="Placar" required>
            </div>
        </div>
        <div class="matchup">
            <div class="team">
                <input type="text" name="team3" placeholder="Time 3" required>
            </div>
            <div class="score">
                <input type="number" name="score3" placeholder="Placar" required>
            </div>
        </div>
        <div class="matchup">
            <div class="team">
                <input type="text" name="team4" placeholder="Time 4" required>
            </div>
            <div class="score">
                <input type="number" name="score4" placeholder="Placar" required>
            </div>
        </div>
        <button type="submit" name="round1">Avançar para a próxima rodada</button>
        <?php endif; ?>
        
        <!-- Segundo round -->
        <?php if ($round2 && !$final): ?>
        <div class="matchup">
            <div class="team">
                <input type="text" name="winner1" value="<?php echo $winner1; ?>" readonly>
            </div>
            <div class="score">
                <input type="number" name="score5" placeholder="Placar" required>
            </div>
        </div>
        <div class="matchup">
            <div class="team">
                <input type="text" name="winner2" value="<?php echo $winner2; ?>" readonly>
            </div>
            <div class="score">
                <input type="number" name="score6" placeholder="Placar" required>
            </div>
        </div>
        <button type="submit" name="round2">Avançar para a final</button>
        <?php endif; ?>

        <!-- Final -->
        <?php if ($final): ?>
        <div class="matchup">
            <h2>O grande vencedor é: <?php echo $winner; ?></h2>
        </div>
        <?php endif; ?>
    </form>
</body>
</html>