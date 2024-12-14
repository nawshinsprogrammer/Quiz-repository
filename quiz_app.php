<?php
//  Terminal Based Quiz App

// Function to evaluate the quiz


// Example questions set of questions array
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];
 

 // Collect answers from the user
$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

$numbers =[
'first_element' =>1,
'second_element' =>2,

'third_element' =>3,
];
  echo $numbers['second_element'];
         

//   evaluateQuizFunction Here

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
      

            $score++;
        }
    }
    return $score;
}

// call The Function

$score =  evaluateQuiz($questions,$answers);



// // Calculate score and provide feedback
$score = evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of " . count($questions) . ".\n";
if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}