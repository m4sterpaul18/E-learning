$(function(){
    console.log('chapter 6 quiz js is loaded')
    
    let answers = [
        'a',
        'b',
        'd',
        'a',
        'b',
        'c',
        'b',
        'b',
        'b',
        'a'
    ];
    var quiz = new Quiz('quiz-div', answers);

    $('#submit-answer').on('click',function(){
        Swal.fire({
            title: 'Are you sure you want to submit?',
            text: "Did you even read?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Submit'
          }).then((result) => {
            if (result.isConfirmed) {
                myAnswerCheckMethod();
            }
          })
    });

    function myAnswerCheckMethod() {
        // checkAnswers returns true if all questions have been answered and updates the result object
        if (quiz.checkAnswers(false)) {
            var title =  checkPercentForTitle(quiz.result.scorePercentFormatted);
            var img = checkPercentForImg(quiz.result.scorePercentFormatted);

            Swal.fire({
                title: title,
                text: 'Correct answers: ' + quiz.result.score + '/' + quiz.result.totalQuestions,
                imageUrl: img,
                imageWidth: 600,
                imageHeight: 500,
                imageAlt: 'Custom image',
              })
            //console.log('Correct answers: ' + quiz.result.score + '/' + quiz.result.totalQuestions);
            //console.log('Percent correct: ' + quiz.result.scorePercentFormatted + '%');
        }
        // We can also use the highResults method to highlight correct and incorrect answers.
        // We pass a callback which takes the quiz object, the current question, the question number and whether it was answered correctly.
        quiz.highlightResults(myHandleAnswerMethod);
    }
    
    // Callback for quiz.highlightResults called for each question. Parameters are: The quiz object the question belongs to,
    // the question element, the question number and a boolean indicating if the question was answered correctly.
    function myHandleAnswerMethod(quiz, question, no, correct) {
        if (!correct) {
            // Highlight the correct answers.
            // See the example code on GitHub for an example implementation.
        }
    }

    function checkPercentForTitle(score){
        let title;
            if(score <= 20){
                title = 'Seriously?';
            }
            else if(score >20 && score <= 40 ){ 
                title = 'What a joke';
            }
            else if(score > 40 && score <= 60){
                title = 'You can do better than that!';
            }
            else if(score > 60 && score <= 80){
                title = 'Nice!'
            }
            else if(score > 80 && score <= 100){
                title = 'What a God!'
            }
            else{
                title = 'Sweet!'
            }
        return title;
    }

    function checkPercentForImg(score){
        let img;
            if(score <= 20){
                img = '/e-learning/public/assets/gif/batman.gif';
            }
            else if(score >20 && score <= 40 ){ 
                img = '/e-learning/public/assets/gif/jake.gif';
            }
            else if(score > 40 && score <= 60){
                img = '/e-learning/public/assets/gif/joker.gif';
            }
            else if(score > 60 && score <= 80){
                img = '/e-learning/public/assets/gif/noice.gif';
            }
            else if(score > 80 && score <= 100){
                img = '/e-learning/public/assets/gif/pikachu.gif';
            }
            else{
                img = '/e-learning/public/assets/gif/pikachu.gif';
            }
        return img;
    }
})