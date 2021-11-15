<!-- loader -->
<div class="loader-wrapper">
    <img src="/e-learning/public/assets/gif/loader.gif" alt="">
</div>
<main class="p-5 quiz-size">
   
   <div class="quiz-wrapper" id="quiz-div">
   <a class="btn btn-primary btn-lg mb-3" href="/e-learning/public/lesson"><i class="fas fa-arrow-circle-left"></i> Back</a>
       <h1 class="text-center my-3">Chapter 8 Quiz</h1>
       <!-- question 1 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3>1. What part of a function is responsible for returning value?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q1" value="a"> Parameters
                    </li>
                    <li>
                        <input type="radio" name="q1" value="b"> Function Name
                    </li>
                    <li>
                        <input type="radio" name="q1" value="c"> Function Return

                    </li>
                    <li>
                        <input type="radio" name="q1" value="d"> Return Type
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 2 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 2. What is the 3 aspects of a C function?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q2" value="a"> Function Declaration, Function Name, Function Definition
                    </li>
                    <li>
                        <input type="radio" name="q2" value="b"> Function Call, Function Name, Parameters
                    </li>
                    <li>
                        <input type="radio" name="q2" value="c"> Return Type, Function Name, Parameters
                    </li>
                    <li>
                        <input type="radio" name="q2" value="d"> Function Declaration, Function Call, Function Definition

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 3 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 3. What C function aspect contains the actual statement which are to be executed?
 </h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q3" value="a"> Function Body

                    </li>
                    <li>
                        <input type="radio" name="q3" value="b"> Function Call
                    </li>
                    <li>
                        <input type="radio" name="q3" value="c"> Function Definition
 
                    </li>
                    <li>
                        <input type="radio" name="q3" value="d"> Function Declaration

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 4 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 4. What is the expected output of this program?</h3> 
                <pre>
        #include &lt;stdio.h&gt;
        main()
        {
            int sum;
            int calc_ans(int x, int y, int z);
            ans = calc_math(5,4,2);
            printf(“Answer: %d\n”, ans);
        }
        Int calc_math(int x, int y, int z)
        {
            return (x + y - z);
        }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q4" value="a"> Answer: 11
                    </li>
                    <li>
                        <input type="radio" name="q4" value="b"> Answer: 5
                    </li>
                    <li>
                        <input type="radio" name="q4" value="c"> Answer: 7	
                    </li>
                    <li>
                        <input type="radio" name="q4" value="d"> Answer: 9

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 5 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 5. What is the expected output?</h3> 
                <pre>
        #include &lt;stdio.h&gt;
        main()
        {
            Void prn_message();
            prn_message();
            printf(“C Language\n”);
        }
        void prn_message()
        {
            printf(“Hello “);
            printf(“World!\n”);
        }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q5" value="a"> HelloWorld!C Language
                    </li>
                    <li>
                        <input type="radio" name="q5" value="b"> Hello World! C Language

                    </li>
                    <li>
                        <input type="radio" name="q5" value="c"> Hello World! <br>
C Language			
                    </li>
                    <li>
                        <input type="radio" name="q5" value="d"> HelloWorld! C Langauge


                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 6 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 6. Which is not true about the importance of Function?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q6" value="a"> Debugging of the code would be easier if you use function as errors are easy to be traced.
                    </li>
                    <li>
                        <input type="radio" name="q6" value="b"> To improve the readability of code.

                    </li>
                    <li>
                        <input type="radio" name="q6" value="c"> Reduce the size of the code, duplicate set of statement are replaced by function definition
                    </li>
                    <li>
                        <input type="radio" name="q6" value="d"> Improve the reusability of the code, same function can be used in any program rather than writing the same code from scratch.
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 7 -->
         <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 7. What type of function are usually created by C programmer?
</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q7" value="a"> Predefined Library Function

                    </li>
                    <li>
                        <input type="radio" name="q7" value="b"> User Functions
	
                    </li>
                    <li>
                        <input type="radio" name="q7" value="c"> User-defined Functions	
                    </li>
                    <li>
                        <input type="radio" name="q7" value="d"> Coder Function

                    </li>
                </ul> 
            </div> 
        </div>


         <!-- question 8 -->
         <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 8. What is the expected output if the user enters 5 and 8</h3> 
                <pre>
        int calc (int num1, int num2)
        {
            int sum;
            sum = num1*num2;
            return sum;
        }
        Int main()
        {
            int var1, var2, result;
            printf(“Enter number 1: “);
            scanf(“%d”, &var1);
            printf(“Enter number 2: “);
            scanf(“%d”, &var2);
            result = calc(var1, var2);
            printf(“Output: %d”, result);
            return 0;
        }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q8" value="a"> Syntax Error

                    </li>
                    <li>
                        <input type="radio" name="q8" value="b"> 13
                    </li>
                    <li>
                        <input type="radio" name="q8" value="c"> 58
                    </li>
                    <li>
                        <input type="radio" name="q8" value="d"> 40
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 9 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 9.  What are the two types of Functions? </h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q9" value="a"> Library Function and User Function
                    </li>
                    <li>
                        <input type="radio" name="q9" value="b"> Predefined Function and User Defined Function
                    </li>
                    <li>
                        <input type="radio" name="q9" value="c"> Library Function and User Defined Function
                    </li>
                    <li>
                        <input type="radio" name="q9" value="d"> User Function and Coder Function
                    </li>
                </ul> 
            </div> 
        </div>


        <!-- question 10 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 10. What are the expected result if the user enters value of 15?</h3> 
                <pre>
            int sum();
            void main()
            {
                printf(“Going to calculate the area of the square\n”);
                float area =  square();
                printf(“The are of the square: %f\n”, area);
            }
            Int square()
            {
                float side;
                printf(“Enter the length of the side in meters: “);
                scanf(“%f”, &side);
                return side * side;
            }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q10" value="a"> 30

                    </li>
                    <li>
                        <input type="radio" name="q10" value="b"> 1515
                    </li>
                    <li>
                        <input type="radio" name="q10" value="c"> 225
                    </li>
                    <li>
                        <input type="radio" name="q10" value="d"> Syntax Error

                    </li>
                </ul> 
            </div> 
        </div>
    
        <!-- Submit Button -->
        <div class="d-grid gap-2">
            <button class="btn btn-success" id="submit-answer" type="button">Submit Answers <i class="fas fa-pencil-alt"></i></button>
        </div>
    
   </div>
</main>
