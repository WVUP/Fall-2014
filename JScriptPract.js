oName = false
xName = false
oSpace = 0
xSpace = 0
xWin = false
oWin = false

gameBoard = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"]

console.log("LET'S PLAY A GAME!");

function printBoard()
{
	console.log("|" + gameBoard[0] + "|" + gameBoard[1] + "|" + gameBoard[2] + "|");
	console.log("|" + gameBoard[3] + "|" + gameBoard[4] + "|" + gameBoard[5] + "|");
	console.log("|" + gameBoard[6] + "|" + gameBoard[7] + "|" + gameBoard[8] + "|");
}


function checkforXWin()
{
	if(gameBoard[0] === "X" && gameBoard[1] === "X" && gameBoard[2] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[3] === "X" && gameBoard[4] === "X" && gameBoard[5] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[6] === "X" && gameBoard[7] === "X" && gameBoard[8] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[0] === "X" && gameBoard[4] === "X" && gameBoard[8] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[0] === "X" && gameBoard[3] === "X" && gameBoard[6] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[1] === "X" && gameBoard[4] === "X" && gameBoard[7] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[2] === "X" && gameBoard[5] === "X" && gameBoard[8] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}
	else if(gameBoard[2] === "X" && gameBoard[4] === "X" && gameBoard[6] === "X")
	{
		console.log("PLAYER X WINS!");
		xWin = true
	}

}

function checkforOWin()
{
	if(gameBoard[0] === "O" && gameBoard[1] === "O" && gameBoard[2] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[3] === "O" && gameBoard[4] === "O" && gameBoard[5] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[6] === "O" && gameBoard[7] === "O" && gameBoard[8] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[0] === "O" && gameBoard[4] === "O" && gameBoard[8] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[0] === "O" && gameBoard[3] === "O" && gameBoard[6] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[1] === "O" && gameBoard[4] === "O" && gameBoard[7] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[2] === "O" && gameBoard[5] === "O" && gameBoard[8] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}
	else if(gameBoard[2] === "O" && gameBoard[4] === "O" && gameBoard[6] === "O")
	{
		console.log("PLAYER O WINS!");
		oWin = true
	}

}

function playGame()
{
	var turns = 0

	while(turns != 10)
	{
		printBoard();

		var Player = 1
		if(Player === 1 )
		{
			xSpace = prompt("Player X, Enter a valid space: ");
			while(gameBoard[xSpace - 1] === "X" || gameBoard[xSpace -1] === "O")
			{
				xSpace = prompt("Please Enter a valid space: ");
			}
			gameBoard[xSpace - 1] === "X"
			Player = 2
			turns += 1
			checkforXWin();
		}
		else
		{
			oSpace = prompt("Player O, Enter a valid space: ");
			while(gameBoard[oSpace - 1] === "X" || gameBoard[oSpace - 1] === "O")
			{
				oSpace = prompt("Please enter a valid space: ");
			}
			gameBoard[oSpace - 1] === "O"
			Player = 1
			turns += 1
			checkforOWin();
		}
	}
	if(oWin != true && xWin != true)
	{
		console.log("No winner! Cat!");
	}
	console.log("Game Over.")
}

playGame();

