<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .grid { display: grid; grid-template-columns: repeat(3, 100px); grid-gap: 5px; justify-content: center; }
        .cell { width: 100px; height: 100px; font-size: 2em; text-align: center; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <div class="grid" id="grid"></div>
    <h2 id="message"></h2>
    <button onclick="resetGame()">Réinitialiser la partie</button>

    <script>
        let currentPlayer = "X";
        let board = ["", "", "", "", "", "", "", "", ""];
        const winningCombinations = [
            [0, 1, 2], [3, 4, 5], [6, 7, 8],
            [0, 3, 6], [1, 4, 7], [2, 5, 8],
            [0, 4, 8], [2, 4, 6]
        ];

        function createBoard() {
            const grid = document.getElementById("grid");
            grid.innerHTML = "";
            board.forEach((value, index) => {
                const cell = document.createElement("button");
                cell.classList.add("cell");
                cell.textContent = value || "-";
                cell.onclick = () => makeMove(index);
                grid.appendChild(cell);
            });
        }

        function makeMove(index) {
            if (board[index] === "" && !checkWinner()) {
                board[index] = currentPlayer;
                currentPlayer = currentPlayer === "X" ? "O" : "X";
                createBoard();
                checkGameStatus();
            }
        }

        function checkWinner() {
            for (const combo of winningCombinations) {
                const [a, b, c] = combo;
                if (board[a] && board[a] === board[b] && board[a] === board[c]) {
                    document.getElementById("message").textContent = `${board[a]} a gagné !`;
                    return true;
                }
            }
            return false;
        }

        function checkGameStatus() {
            if (checkWinner()) {
                setTimeout(resetGame, 2000);
            } else if (!board.includes("")) {
                document.getElementById("message").textContent = "Match nul !";
                setTimeout(resetGame, 2000);
            }
        }

        function resetGame() {
            board = ["", "", "", "", "", "", "", "", ""];
            currentPlayer = "X";
            document.getElementById("message").textContent = "";
            createBoard();
        }

        createBoard();
    </script>
</body>
</html>
