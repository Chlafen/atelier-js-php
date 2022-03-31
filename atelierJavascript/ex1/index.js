function guessNumber() {
  const random = Math.floor(Math.random() * 10) + 1;
  let number = parseInt(prompt('Guess a number from 1 to 10: '));
  while(number !== random) {
      number = parseInt(prompt('Wrong!, Guess a number from 1 to 10: '));
  }
  if(number == random) {
      alert('You guessed the correct number!.');
  }

}

guessNumber();